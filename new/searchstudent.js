$(document).ready(function() {
    // Bind change event to the dropdown
    $('select.courses').bind('change', function() {
        // Disable the dropdown temporarily
        $('select.courses').attr('disabled', 'disabled');
        
        // Hide all rows
        $('#myTable').find('.Row').hide();
        
        // Get the selected class value from the dropdown
        var selectedClass = $(this).val();
        
        // Filter rows based on the selected class
        if (selectedClass === '0') {
            // Show all rows if 'All Students' is selected
            $('#myTable').find('.Row').show();
        } else {
            // Show rows with matching class name
            $('#myTable').find('.Row[data-class_name="' + selectedClass + '"]').show();
        }
        
        // Update the student count
        var visibleRowCount = $('table#myTable tr.Row:visible').length;
        $('#headerCount').html(visibleRowCount + ' Registered students');
        
        // Re-enable the dropdown
        $('select.courses').removeAttr('disabled');
    });
 
    // Bind keyup event to the search input
    $('#searchInput').keyup(function() {
        var searchValue = $(this).val().toLowerCase();
        
        // Get the selected class value from the dropdown
        var selectedClass = $('select.courses').val();
        
        // Filter rows based on the search value and selected class
        $('#myTable').find('.Row').each(function() {
            var studentName = $(this).find('td:nth-child(2)').text().toLowerCase(); // Assuming student first name is in the second column
            var studentlName = $(this).find('td:nth-child(3)').text().toLowerCase(); // Assuming student last name is in the third column
            var studentClass = $(this).data('class_name');
            
            if ((selectedClass === '0' || studentClass === selectedClass) &&
                (studentName.indexOf(searchValue) !== -1 || studentlName.indexOf(searchValue) !== -1)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
        
        // Update the student count
        var visibleRowCount = $('table#myTable tr.Row:visible').length;
        $('#headerCount').html(visibleRowCount + ' Registered students');
    });
});
