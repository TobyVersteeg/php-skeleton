$(document).ready(function() {
    $('#logout').on('click', function() {
        $.post('../app/controllers/UserController.php', { token: 'logout' }, function(data, status) {
            if (status === 'success') {
                window.location.href = '/'
            }
        })
    })
})