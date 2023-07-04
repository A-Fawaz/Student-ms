$(document).ready(function() {
    $('select.courses').on('change', function() {
        var selectedGrade = $(this).val(); // Get the selected grade

        $('#myTable tbody tr').each(function() {
            var rowGrade = $(this).data('class_name'); // Get the grade of each row

            if (selectedGrade === '0' || rowGrade === selectedGrade) {
                $(this).show(); // Show the row if it matches the selected grade or if "All Students" is selected
            } else {
                $(this).hide(); // Hide the row if it doesn't match the selected grade
            }
        });

        var visibleRowsCount = $('#myTable tbody tr:visible').length;
        $('#headerCount').html(visibleRowsCount + ' Registered students');
    });
});
