(function (global, $) {
    "use strict";
    "use strict";
    function create(type) {
        return $(document.createElement(type));
    }
    $.fn.parties = function (data, baseUrl, limitAgainst, limitFor, imgSize) {
        return this.each(function () {
            var $element = $(this),
                $positions = {
                    "against": $element.find(".against .canvas"),
                    "either": $element.find(".either .canvas"),
                    "for": $element.find(".for .canvas")
                },
                preparedData = global.prepareData(data, limitAgainst, limitFor);
            preparedData.forEach(function(party) {
                var img = create("img").attr("src", baseUrl + party.image).css({
                    "left": (party.x - imgSize / 2) + "%",
                    "top": (party.y - imgSize / 2) + "%"
                }).appendTo($positions[party.position]);
            });
        });
    };
}( window || document, jQuery ));