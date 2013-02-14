(function (global, $) {
    "use strict";
    $.fn.parties = function (data, baseUrl, limitAgainst, limitFor, rPartOfWidth) {
        return this.each(function () {
            var $element = $(this),
                $parent = $element.parent(),
                width = $element.width(),
                height = width / (16 / 6),
                preparedData = global.prepareData(data, width, height, limitAgainst, limitFor, rPartOfWidth),
                baseLimitFor = 100 - limitFor,
                baseLimitEither = 100 - baseLimitFor - limitAgainst;
            global.paintData(this, preparedData, baseUrl, width, height, limitAgainst, limitFor, rPartOfWidth);
            $parent.find(".against").width(width / 100 * limitAgainst);
            $parent.find(".either").width(width / 100 * baseLimitEither);
            $parent.find(".for").width(width / 100 * baseLimitFor);
        });
    };
}( window || document, jQuery ));