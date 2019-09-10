
    $(".form_ajax").on("submit", function(event) {
        event.preventDefault();
        var form = $(this);
        var data = $(form).serialize();
        $.ajax({
            type: "POST",
            url: $(form).attr('action'),
            data: data,
            dataType: 'json',
            success: function(result) {
                if (result.error) {
                    $('.err_msg').html(result.msg);
                } else {
                    alert('berhasil');
                }

            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    });
