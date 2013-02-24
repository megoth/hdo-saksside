(function ($) {
    "use strict";
    function create(type) {
        return $(document.createElement(type));
    }
    $.fn.case = function () {
        return this.each(function () {
            var $party = $(this),
                $sections = $party.children("section");
            $sections.addClass("closed").each(function () {
                var $section = $(this),
                    $title = $section.find(".content h4"),
                    $icon = $section.find(".images img"),
                    toggleFunction = function (e) {
                        var toggled;
                        e.preventDefault();
                        toggled = $section.hasClass("open");
                        $sections.removeClass("open");
                        $section.toggleClass("open", !toggled);
                    },
                    $toggler = create("p")
                        .addClass("toggler")
                        .append(
                            create("a")
                                .attr({
                                   "href": "#"
                                })
                                .text("Åpne/Lukke"));
                $toggler.insertAfter($title);
                $toggler.add($title).add($icon).click(toggleFunction);
            })
        });
    };
}( jQuery ));