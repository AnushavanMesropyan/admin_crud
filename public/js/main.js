$(document).ready(function () {

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                if (input.id == 'logo') {
                    $(input).parents('.form-group').find('img').attr('src', e.target.result);
                }
            }
            $(input).parents('.form-group').find('p').html('<b>' + input.files[0].name + '</b>');

            reader.readAsDataURL(input.files[0]);
        }
    }

    $('input[type="file"]').change(function () {
        readURL(this);
    });
})