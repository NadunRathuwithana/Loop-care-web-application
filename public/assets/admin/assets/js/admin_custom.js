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

$(document).ready(function () {
    $(".multiple").select2();
});

// image upload
window.onload = function () {
    var imageUploaders = document.querySelectorAll(".image-upload");
    imageUploaders.forEach(function (uploader) {
        uploader.addEventListener("change", previewImage);
    });
};

function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function () {
        var output = event.target.parentNode.querySelector(".image-preview");
        output.src = reader.result;
        output.style.display = "block";
    };
    reader.readAsDataURL(event.target.files[0]);
}

// validations
(function () {
    "use strict";

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll(".needs-validation");

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms).forEach(function (form) {
        form.addEventListener(
            "submit",
            function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.classList.add("was-validated");
            },
            false
        );
    });
})();



function deleteItem(id) {
    $('#deleteItemId').val(id);
    $('#deleteConfirmationModal').modal('show');
}
