$(document).on("click", ".appRef", function () {
            var appDelRef = $(this).data('id');
            $(".modal-form #delApplicant").val( appDelRef );
        });


$("#FilUploader").change(function () {
        var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
        if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
            alert("Only formats are allowed : "+fileExtension.join(', '));
        }
    });