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

