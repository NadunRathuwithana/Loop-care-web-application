$(document).ready(function () {
    $(".table").DataTable();
});

$(document).ready(function () {
    // Hide the words 'Show' and 'entries'
    $(".dataTables_length label")
        .contents()
        .filter(function () {
            return this.nodeType === 3; // Filter out non-text nodes
        })
        .wrap("<span class='hidden-text'></span>");
});

$(document).ready(function () {
    var iconHtml = '<i class="bx bx-chevron-left"></i> ';
    $('.page-link:contains("Previous")').html(iconHtml);
});

$(document).ready(function () {
    var iconHtml = '<i class="bx bx-chevron-right"></i> ';
    $('.page-link:contains("Next")').html(iconHtml);
});

// add question loop =>5
$(document).ready(function () {
    $(".answers-container").on("click", ".add-btn", function () {
        var button = $(this);
        var totalAnswers = button
            .closest(".answers-container")
            .find(".answers").length;
        if (totalAnswers < 5 || button.hasClass("added")) {
            if (button.hasClass("added")) {
                button.closest(".answers").remove();
            } else {
                var newAnswer = button.closest(".answers").clone();
                newAnswer.find("input").val("");
                button.closest(".answers-container").append(newAnswer);
                button.addClass("added");
                button
                    .removeClass("btn-primary")
                    .addClass("btn-secondary-2 text-secondary");
                button.find("i").removeClass("bx-plus").addClass("bx-x");
            }
            $(".err-limt").addClass("d-none");
        } else {
            $(".err-limt").removeClass("d-none");
        }
    });
});



$(document).ready(function() {
    $('.multiple').select2();
});

