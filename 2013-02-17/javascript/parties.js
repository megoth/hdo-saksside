/*global _, $, d3, document, window*/
(function (global, $) {
    "use strict";
    global.prepareData = function (data, limitAgainst, limitFor) {
        var indexes = {},
            max = {},
            width = 100,
            height = 100,
            r = 25;
        data.map(function (p) {
            if (p.value <= limitAgainst) {
                p.position = "against";
                p.value = limitAgainst / 2;
            } else if (p.value >= limitFor) {
                p.position = "for";
                p.value = 100 - (100 - limitFor) / 2;
            } else {
                p.position = "either";
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
            return $.extend({}, p, {
                x: (50 / 100 * width) + r * Math.sin(angle),
                y: (height / 2) + r * Math.cos(angle) - (max[p.value] === 1 ? r : 0)
            });
        });
    };
}(window || document, $));