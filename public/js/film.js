function add(ths, sno) {
    for (var i = 1; i <= 5; i++) {
        $('#id-' + i).removeClass('checkeado');
    }
    for (var i = 1; i <= sno; i++) {
        $('#id-' + i).addClass('checkeado');
    }

    $('#rating').val(sno);
}
$(document).ready(function () {
    $('#datePicker')
        .datepicker({
            // format: 'mm/dd/yyyy'
            format: 'yyyy-mm-dd'
        });
    
});
