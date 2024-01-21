$(document).ready(function() {
    $('.table').DataTable();
});


$(document).ready(function () {
    // Hide the words 'Show' and 'entries'
    $(".dataTables_length label").contents().filter(function() {
        return this.nodeType === 3; // Filter out non-text nodes
    }).wrap("<span class='hidden-text'></span>");
});

$(document).ready(function() {
    var iconHtml = '<i class="bx bx-chevron-left"></i> ';
    $('.page-link:contains("Previous")').html(iconHtml);
  });

  $(document).ready(function() {
    var iconHtml = '<i class="bx bx-chevron-right"></i> ';
    $('.page-link:contains("Next")').html(iconHtml);
  });





// add question loop =>5
$(document).ready(function() {
    // Add click event to the initial 'add-btn'
    $('.answers-container').on('click', '.add-btn', function() {
        var button = $(this);

        // Check the number of existing elements
        var totalAnswers = button.closest('.answers-container').find('.answers').length;

        // Limit to only 5 elements
        if (totalAnswers < 5 || button.hasClass('added')) {
            // Check if the button was clicked for the first time
            if (button.hasClass('added')) {
                // If it was clicked before, remove the last added element
                button.closest('.answers').remove(); // Remove the parent answers container
            } else {
                // If it was not clicked before, clone the answers container and clear the input value
                var newAnswer = button.closest('.answers').clone();
                newAnswer.find('input').val('');

                // Append the cloned container to the parent
                button.closest('.answers-container').append(newAnswer);
                button.addClass('added'); // Add the 'added' class to indicate the add state
                button.removeClass('btn-primary').addClass('btn-secondary'); // Change to 'btn-secondary'
                button.find('i').removeClass('bx-plus').addClass('bx-minus'); // Change to 'bx-minus'
            }
            $('.err-limt').addClass('d-none');
        } else {
            $('.err-limt').removeClass('d-none');
        }
    });
});


