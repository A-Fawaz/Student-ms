
$(document).ready(function () {
    $('select.courses').bind('change', function () {
        $('select.courses').attr('disabled', 'disabled');
        $('#myTable').find('.Row').hide();
        var critriaAttribute = '';

        $('select.courses').each(function () {
            if ($(this).val() != '0') {
                critriaAttribute += '[data-' + $(this).data('attribute') + '="' + $(this).val() + '"]';
            }
        });

        $('#myTable').find('.Row' + critriaAttribute).show();
        $('#headerCount').html($('table#myTable tr.Row:visible').length + ' Registered students');
        $('select.courses').removeAttr('disabled');
    });
});
