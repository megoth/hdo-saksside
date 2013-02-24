(function (global, $) {
    "use strict";
    function create(type) {
        return $(document.createElement(type));
    }
    $.fn.position = function () {
        return this.each(function () {
            var parties = $(this).find(".canvas img"),
                numParties = parties.length,
                slice = 2 * Math.PI / numParties,
                angle = 0,
                width = 100,
                height = 100,
                radius = 25,
                imgSize = 20;
            parties.each(function (index, party) {
                angle = slice * index;
                $(this).css({
                    "left": ((50 / 100 * width) + radius * Math.sin(angle) - imgSize / 2) + "%",
                    "top": ((height / 2) + radius * Math.cos(angle) - (numParties === 1 ? radius : 0) - imgSize / 2) + "%"
                })
            });
        });
    };
}( window || document, jQuery ));