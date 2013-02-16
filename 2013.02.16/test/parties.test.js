/*global _, assert, buster, document, prepareData, window*/

(function (global) {
    "use strict";
    // private variables
    var width = 200,
        height = 40,
        rPartOfWidth = 20,
        limitAgainst = 33,
        limitFor = 66,
        limitAgainstPos = limitAgainst / 2,
        limitForPos = 100 - (100 - limitFor) / 2,
        limitEitherPos = 50;
    function getX(index, max, value) {
        var slice = 2 * Math.PI / max,
            angle = slice * index;
        return (value / 100 * width) + (width / rPartOfWidth) * Math.sin(angle);
    }
    function getY(index, max) {
        var slice = 2 * Math.PI / max,
            angle = slice * index;
        return (height / 2) + (width / rPartOfWidth) * Math.cos(angle) - (max === 1 ? (width / rPartOfWidth) : 0);
    }

    // tests
    buster.testCase("parties", {
        "Data without collision, two parties": {
            setUp: function () {
                this.data = global.prepareData([
                    { "value": 30 },
                    { "value": 70 }
                ], width, height, limitAgainst, limitFor, rPartOfWidth);
            },
            "data length equals number of parties": function () {
                assert.equals(this.data.length, 2);
            },
            "no collision of values, simple outcome": function () {
                var a = this.data[0],
                    b = this.data[1];
                assert.equals(a.x, getX(0, 1, limitAgainstPos));
                assert.equals(a.y, getY(0, 1));
                assert.equals(b.x, getX(0, 1, limitForPos));
                assert.equals(b.y, getY(0, 1));
            }
        },
        "Data without collision, three parties": {
            setUp: function () {
                this.data = global.prepareData([
                    { "value": 30 },
                    { "value": 70 },
                    { "value": 45 }
                ], width, height, limitAgainst, limitFor, rPartOfWidth);
            },
            "data length equals number of parties": function () {
                assert.equals(this.data.length, 3);
            },
            "no collision of values, simple outcome": function () {
                var a = this.data[0],
                    b = this.data[1],
                    c = this.data[2];
                assert.equals(a.x, getX(0, 1, limitAgainstPos));
                assert.equals(a.y, getY(0, 1));
                assert.equals(b.x, getX(0, 1, limitForPos));
                assert.equals(b.y, getY(0, 1));
                assert.equals(c.x, getX(0, 1, limitEitherPos));
                assert.equals(c.y, getY(0, 1));
            }
        },
        "Data with collision, two parties": {
            setUp: function () {
                this.data = global.prepareData([
                    { "value": 30 },
                    { "value": 10 }
                ], width, height, limitAgainst, limitFor, rPartOfWidth);
            },
            "data length equals number of parties": function () {
                assert.equals(this.data.length, 2);
            },
            "collision of values, complex outcome": function () {
                var a = this.data[0],
                    b = this.data[1];
                assert.equals(a.x, getX(0, 2, limitAgainstPos));
                assert.equals(a.y, getY(0, 2));
                assert.equals(b.x, getX(1, 2, limitAgainstPos));
                assert.equals(b.y, getY(1, 2));
            }
        },
        "Data with collision, three parties": {
            setUp: function () {
                this.data = global.prepareData([
                    { "value": 45 },
                    { "value": 55 },
                    { "value": 50 }
                ], width, height, limitAgainst, limitFor, rPartOfWidth);
            },
            "collision of values, complex outcome": function () {
                var a = this.data[0],
                    b = this.data[1],
                    c = this.data[2];
                assert.equals(a.x, getX(0, 3, limitEitherPos));
                assert.equals(a.y, getY(0, 3));
                assert.equals(b.x, getX(1, 3, limitEitherPos));
                assert.equals(b.y, getY(1, 3));
                assert.equals(c.x, getX(2, 3, limitEitherPos));
                assert.equals(c.y, getY(2, 3));
            }
        }
    });
}(window || document));