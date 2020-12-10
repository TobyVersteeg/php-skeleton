$(document).ready(function() {
    $('form[name="frmLogin"]').on('submit', function() {
        $('form[name="frmLogin"] input[type="submit"]').prop('disabled', true)
        $.post('../app/controllers/UserController.php', $(this).serialize(), function(data, status) {
            if (status === 'success') {
                $('form[name="frmLogin"] input[type="submit"]').prop('disabled', false)
                const result = JSON.parse(data)
                if (result.error === true) {
                    $('#login-message').html(result.message).show()
                    return false;
                }

                window.location.href = '/'
            } else {
                $('#login-message').html('Unkown error.').show()
            }
        })
    })
});