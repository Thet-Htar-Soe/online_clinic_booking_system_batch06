$(document).ready(function () {
    $('#firstPriority,#secondPriority,#thirdPriority').datepicker({
        dateFormat: 'dd-mm-yy',
        autoclose: true,
        todayHightlight: true,
        showOtherMonths: true,
        selectOtherMonths: true,
        changeMonth: true,
        changeYear: true,
        minDate: new Date()
    }).val();
});
