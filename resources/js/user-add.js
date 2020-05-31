$(document).ready(function() {
    $('select[name="country"]').on('change', function() {

        $('select[name="city_id"] option[data-country_id]').attr('disabled', 'disabled').hide();
        $('select[name="city_id"] option[data-country_id="' + $(this).val() + '"]').removeAttr('disabled').show();
        $('select[name="city_id"]').val('');
    });

    $('select[name="city_id"] option[data-country_id]').attr('disabled', 'disabled').hide();


    $("[name='country']").on('change', function() {
        var code = $("[name='country'] option:selected").data('code');
        $("#mobile").val(code).trigger('change');
    });
    $(document).on('keydown','#mobile',function (e) {
        if (e.keyCode == 8 && ($('#mobile').val() == $("[name='country'] option:selected").data('code')) ) {
            e.preventDefault();
        }
      });

    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("#register").validate();
});
