//for mrc
$(document).ready(function () {
    $(".open-modal").on("click", function (e) {
        e.preventDefault();

        $("#markModal").modal("show");
        $(".error").text("");
        $("#data-id").val("");
        $("#month").val("");
        $("#myan").val("");
        $("#eng").val("");
        $("#maths").val("");
        $("#geog").val("");
        $("#hist").val("");
        $("#science").val("");
        $("#markLabel").text("Add Mark");
        $("#markForm").attr("data-action", "mark");
    });

    $(".edit-btn").on("click", function (e) {
        e.preventDefault();

        // Get all data-* values
        const id = $(this).data("id");
        const myan = $(this).data("myan");
        const eng = $(this).data("eng");
        const maths = $(this).data("maths");
        const geog = $(this).data("geog");
        const hist = $(this).data("hist");
        const science = $(this).data("science");
        const month = $(this).data("month");

        // Set modal header/title
        $("#markLabel").text("✏️ Edit Marks");

        // Fill form fields
        $("#data-id").val(id);
        $("#month").val(month);
        $("#myan").val(myan);
        $("#eng").val(eng);
        $("#maths").val(maths);
        $("#geog").val(geog);
        $("#hist").val(hist);
        $("#science").val(science);

        // Show the modal
        $("#markModal").modal("show");
        $("#markForm").attr("data-action", "edit");
    });

    $("#markForm").on("submit", function (e) {
        e.preventDefault();
        const id = $("#data-id").val();

        const action = $(this).attr("data-action");
        const url =
            action === "mark" ? "/teachers/mark" : `/teachers/mark/${id}`;
        const method = "POST";
        const formData = $(this).serialize();
        $.ajax({
            url: url,
            type: method,
            data: formData,
            headers: {
                "X-CSRF-TOKEN": $('input[name="_token"]').val(),
            },
            success: function (response) {
                if (response.success) {
                    $("#commonModal").modal("hide");
                    location.reload();
                } else {
                    location.reload();
                }
            },
            error: function (xhr) {
                const response = xhr.responseJSON;

                if (response?.notFound) {
                    window.location.href = "/not-found";
                }

                const errors = response?.errors;

                // Clear old errors
                $(".error").html("");

                // Loop through all error fields
                if (errors) {
                    for (const key in errors) {
                        const field = key.replace(/\./g, "_"); // e.g., marks.myan => marks_myan

                        $(`#error_${field}`).html(errors[key].join("<br>"));
                    }
                }
            },
        });
    });
});
