document.addEventListener("DOMContentLoaded", function () {
    const levelLinks = document.querySelectorAll(".level-link");
    const levelImage = document.getElementById("level-image");

    const images = {
        kg: "images/levels/kg.jpg",
        g1: "images/levels/g1.jpg",
        g2: "images/levels/g2.jpg",
        g3: "images/levels/g3.jpg",
        g4: "images/levels/g4.jpg",
        g5: "images/levels/g5.jpg",
    };

    levelLinks.forEach((link) => {
        link.addEventListener("click", function (e) {
            e.preventDefault();
            const level = this.getAttribute("data-level");
            if (images[level]) {
                levelImage.src = images[level];
            }
        });
    });
});

// for delete btn
$(document).on("click", ".delete-btn", function (e) {
    e.preventDefault(); // prevent immediate redirect

    const deleteUrl = $(this).attr("href"); // get delete link
    $("#confirmDeleteBtn").attr("href", deleteUrl); // set to modal button

    $("#deleteConfirmModal").modal("show"); // show modal
});

//for grade, subject, position
$(document).ready(function () {
    // show modal for all
    $(".open-modal").on("click", function (e) {
        e.preventDefault();
        let type = $(this).data("type");
        let title = $(this).data("title");
        let name = $(this).data("name");

        $("#commonModalLabel").text(title);
        $("#commonInputLabel").text(name);
        $("#item-type").val(type);
        $("#item-id").val("");
        $("#item-name").val("");
        $(".error").text("");
        $("#commonModal").modal("show");
        $("#commonForm").attr("data-action", "add");
    });

    // for all edit-btn
    $(".edit-btn").on("click", function (e) {
        e.preventDefault();
        let type = $(this).data("type");
        let title = $(this).data("title");
        let name = $(this).data("name");
        let id = $(this).data("id");

        // Set label text based on type
        let labelText = "";
        if (type === "grade") labelText = "Grade Name";
        else if (type === "position") labelText = "Level";
        else if (type === "subject-major") labelText = "Subject Name";
        else if (type === "subject-minor") labelText = "Subject Name";
        else labelText = "Name";

        $("#commonModalLabel").text(title);
        $("#commonInputLabel").text(labelText);
        $("#item-type").val(type);
        $("#item-id").val(id);
        $("#item-name").val(name);
        $(".error").text("");
        $("#commonModal").modal("show");
        $("#commonForm").attr("data-action", "edit");
    });

    //form submission
    $("#commonForm").on("submit", function (e) {
        e.preventDefault();

        const action = $(this).attr("data-action");
        const type = $("#item-type").val(); //  Get the type: grade, subject, or position
        const id = $("#item-id").val();
        const name = $("#item-name").val();
        const url =
            action === "add" ? `/admin/${type}` : `/admin/${type}/${id}`;
        const method = "POST";

        const formData = {
            name: name,
            type: type,
            _token: $("input[name='_token']").val(),
        };

        $.ajax({
            type: method,
            url: url,
            data: formData,
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
                if (errors?.name) {
                    $(".error").html(errors.name.join("<br>"));
                }
            },
        });
    });
});
