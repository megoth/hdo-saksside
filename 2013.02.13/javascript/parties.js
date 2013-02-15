/*global _, $, d3, document, window*/
(function (global, $, underscore) {
    "use strict";
    global.paintData = function (element, data, baseUrl, width, height, limitFor, limitAgainst, rPartOfWidth) {
        var imageSize,
            svg,
            vertices,
            paths,
            points,
            clips;
        imageSize = width / rPartOfWidth;
        svg = d3.select(element)
            .append("svg:svg")
            .attr("width", width)
            .attr("height", height);
        vertices = data.map(function (p) {
            return [p.x, p.y];
        });
        paths = svg.append("svg:g").attr("id", "point-paths");
        points = svg.append("svg:g").attr("id", "points");
        clips = svg.append("svg:g").attr("id", "point-clips");
        clips.selectAll("clipPath")
            .data(data)
            .enter().append("svg:clipPath")
            .attr("id", function (d, i) {
                return "clip-" + i;
            })
            .append("svg:circle")
            .attr('cx', function (d) {
                return d.x;
            })
            .attr('cy', function (d) {
                return d.y;
            })
            .attr('r', function () {
                return width / rPartOfWidth;
            });
        paths.selectAll("path")
            .data(d3.geom.voronoi(vertices))
            .enter().append("svg:path")
            .attr("d", function (d) { return "M" + d.join(",") + "Z"; })
            .attr("id", function (d, i) {
                return "path-" + i;
            })
            .attr("clip-path", function (d, i) { return "url(#clip-" + i + ")"; })
            .style("fill", d3.rgb(230, 230, 230))
            .style('fill-opacity', 0.4)
            .style("stroke", d3.rgb(200, 200, 200));
        points.selectAll("circle")
            .data(data)
            .enter().append("svg:image")
            .attr("xlink:href", function (d) {
                return baseUrl + d.image;
            })
            .attr("width", imageSize)
            .attr("height", imageSize)
            .attr('x', function (d) {
                return d.x - imageSize / 2;
            })
            .attr('y', function (d) {
                return d.y - imageSize / 2;
            });
    };
    global.prepareData = function (data, width, height, limitAgainst, limitFor, rPartOfWidth) {
        var indexes = {},
            max = {},
            r = width / rPartOfWidth;
        data.map(function (p) {
            if (p.value <= limitAgainst) {
                p.value = limitAgainst / 2;
            } else if (p.value >= limitFor) {
                p.value = 100 - (100 - limitFor) / 2;
            } else {
                p.value = 50;
            }
            if (indexes[p.value] !== undefined) {
                max[p.value] += 1;
            } else {
                indexes[p.value] = 0;
                max[p.value] = 1;
            }
            return p;
        });
        return data.map(function (p) {
            var slice = 2 * Math.PI / max[p.value],
                angle = slice * indexes[p.value];
            indexes[p.value] += 1;
            return underscore.extend({}, p, {
                x: (p.value / 100 * width) + r * Math.sin(angle),
                y: (height / 2) + r * Math.cos(angle) - (max[p.value] === 1 ? r : 0)
            });
        });
    };
}(window || document, $, _));