$('.delete').on('click', function (e) {
    e.preventDefault();
    $.ajax({
        url: $('.delete').attr('href'),
        method: "delete",
        data: {id: $(this).attr('data-id')},
        success: function (data) {
            swal({
                title: "Dziękuję",
                text: "Usunięto",
                icon: "success",
                button: "Ok"
            });

            // $(this).slideToggle();
            setTimeout(function() {
                location.reload();}, 2000);

        },
        error: function () {
            swal({
                title: "Przepraszam",
                text: "Jakoś to nie jest usunięte",
                icon: "warning",
                button: "Ok"
            });
        }

    })
});




