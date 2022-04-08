
$("#addDetailsDtn").click(function () {
    if ($("#details").hasClass("d-none")) {
        $("#details").removeClass("d-none");
        $('#sizes').attr('name', 'sizes[]');
        $('#sides').attr('name', 'sides[]');
        $('#materials').attr('name', 'materials[]');
    } else {
        data = $("#details").html();
        $("#details").append(data);
    }
});

