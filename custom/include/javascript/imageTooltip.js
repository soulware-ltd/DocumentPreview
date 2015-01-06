$(function () {
    var url = window.location.protocol + "//" + window.location.host;
    //var url = "http://localhost/hovanycrm";

    $(".imageReviewTooltip").qtip({
        content: {
            text: function () {
                var id = $(this).attr('title');
                return '<img src="index.php?module=Documents&action=GetImagePreview&record=' + id + '">';
            },
        },
        position: {
            my: 'top center',
            at: 'bottom center',
        },
        style: {
            classes: 'qtip-blue qtip-shadow'
        },
    });
});
