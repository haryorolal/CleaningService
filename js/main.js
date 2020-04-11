$(document).ready(function () {
    let dropings = $("ul.nav li.dropdown");
    dropings.on("mouseover", function () {
        $(".dropdown-menu", this).slideDown("fast", function () {
            dropings.on("mouseleave", function () {
                $(".dropdown-menu", this).slideUp("fast");

            });

        });
    });
});