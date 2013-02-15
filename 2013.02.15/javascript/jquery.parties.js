(function (global, $) {
    "use strict";
    "use strict";
    function create(type) {
        return $(document.createElement(type));
    }
    $.fn.parties = function (data, baseUrl, limitAgainst, limitFor, rPartOfWidth) {
        return this.each(function () {
            var $element = $(this),
                $parent = $element.parent(),
                width = $element.width(),
                height = width / (16 / 4),
                preparedData = global.prepareData(data, width, height, limitAgainst, limitFor, rPartOfWidth),
                baseLimitFor = 100 - limitFor,
                baseLimitEither = 100 - baseLimitFor - limitAgainst,
                imgWidth = width / rPartOfWidth;
            $element.height(height);
            preparedData.forEach(function(party) {
                var img = create("img").attr("src", baseUrl + party.image).css({
                    "left": party.x - imgWidth / 2,
                    "top": party.y - imgWidth / 2,
                    "width": imgWidth
                }).appendTo($element);
            });
            $parent.find(".against").width(width / 100 * limitAgainst);
            $parent.find(".either").width(width / 100 * baseLimitEither);
            $parent.find(".for").width(width / 100 * baseLimitFor);
        });
    };
}( window || document, jQuery ));