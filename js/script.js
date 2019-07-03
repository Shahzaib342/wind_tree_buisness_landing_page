/**
 * Created By Shahzaib Ali Hassan
 */

$(document).ready(function () {
    $("#form").on('submit', (function (e) {
        $('.loader').show();
        e.preventDefault();
        $.ajax({
            url: "form_submit.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                $('.loader').hide();
                if (data == 'success') {
                    $(".alert-success").fadeIn('slow', function () {
                        $(this).delay(3000).fadeOut('slow');
                    });
                } else {
                    $(".alert-danger").fadeIn('slow', function () {
                        $(this).delay(3000).fadeOut('slow');
                    });
                }
            },
            error: function (e) {
                //error with ajax call
            }
        });
    }));
});