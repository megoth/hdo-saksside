(function ($) {
    "use strict";
    function create(type) {
        return $(document.createElement(type));
    }
    $.fn.case = function () {
        return this.each(function () {
            var $party = $(this),
                $content = $party.children(".content"),
                $header = $content.children("header"),
                $sections = $content.children("section"),
                $menu = create("ul").addClass("grid-item nav nav-tabs"),
                $link;
            $content.addClass("closed");
            $sections
                .filter(":first")
                .addClass("open");
            $sections
                .each(function () {
                    var $subsection = $(this),
                        sectionId = $subsection.attr('id'),
                        text = $subsection.children("h4").text(),
                        $dialog = $subsection.find(".basis").dialog({
                            "autoOpen": false,
                            "modal": true,
                            "title": $subsection.find("h4").text() + " - bakgrunnsinfo",
                            "width": "50%"
                        });
                    create("a").attr("href", "#").text(text).click(function (e) {
                        e.preventDefault();
                        $sections
                            .removeClass("open")
                            .filter("#" + sectionId)
                            .addClass("open");
                    }).appendTo(create("li").appendTo($menu));
                    create("a").attr("href", "#").text("Se mer info").click(function (e) {
                        e.preventDefault();
                        $dialog.dialog('open');
                    }).appendTo(create("p").appendTo($subsection));
                });
            $menu.find("a").click(function (e) {
                e.preventDefault();
                $link = $(e.currentTarget);
                $menu.children().removeClass("active");
                $link.parent().addClass("active");
            });
            $menu.children(":first").addClass("active");
            $header.after($menu);
        });
    };
}( jQuery ));