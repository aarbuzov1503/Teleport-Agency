$(function () {
    $('.form-button').on('click', function () {
        let data = {
            'name': $('[name="name"]').val(),
            'phone': $('[name="phone"]').val(),
            'email': $('[name="email"]').val()
        };
        $.post('api.php', data, function (response) {
            if (response == 1) {
                $('[name="name"]').val('');
                $('[name="phone"]').val('');
                $('[name="email"]').val('');
                alert('Ваша заявка принята!\nМы с вами свяжемся');
            } else {
                alert('Что-то пошло не так :(\nПовторите попытку позже')
            }
        })
        return false;
    });
});