(function ($) {
    "use strict";
    function create(type) {
        return $(document.createElement(type));
    }
    $.fn.case = function () {
        return this.each(function () {
            var $section = $(this),
                $header = $section.children("header"),
                $subsections = $section.children("section"),
                $menu = create("ul").addClass("grid-item nav nav-tabs"),
                $item,
                $link;
            $section.addClass("closed");
            $subsections
                .filter(":first")
                .addClass("open");
            $subsections
                .each(function () {
                    var $subsection = $(this),
                        sectionId = $subsection.attr('id'),
                        text = $subsection.children("h4").text();
                    $item = create("li");
                    $link = create("a").attr("href", "#").text(text).click(function (e) {
                        e.preventDefault();
                        console.log(sectionId);
                    }).appendTo($item);
                    $item.appendTo($menu);
                });
            $header.after($menu);
        });
    };
}( jQuery ));