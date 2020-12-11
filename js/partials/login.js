$(document).ready(function() {
    $('#email').focus();

    $('form[name="frmLogin"]').on('submit', function() {
        let error = false;
        const email = $.trim($('#email').val())
        const password = $.trim($('#password').val())

        if (email == '' || password == '') {
            return false
        }

        $('input').on('focus', function() {
            $('#login-message').hide();
        })

        $('input[type="text"], input[type="password"]').on('focus', function() {
            $('#email').removeClass('input-error')
            $('#password').removeClass('input-error')
        })

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