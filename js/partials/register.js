$(document).ready(function() {
    $('form[name="frmRegister"]').on('submit', function() {
        $('form[name="frmRegister"] input[type="submit"]').prop('disabled', true)
        $.post('../app/controllers/UserController.php', $(this).serialize(), function(data, status) {
            if (status === 'success') {
                const result = JSON.parse(data)
                if (result.error === true) {
                    $('#register-message').html(result.message).show()
                    $('form[name="frmRegister"] input[type="submit"]').prop('disabled', false)
                    return false;
                }

                console.log('Ok :-)')
            } else {
                $('#register-message').html(result.message).show()
            }
        })
    })

    $('#register-cancel').on('click', function() {
        console.log('canceling...')
    })
})