$(function () {
    $("#search-form").on("submit", function (event) {
        event.preventDefault();
        search();
    });

    $("#search-input").on("keydown", function (event) {
        if (event.keyCode === 13) {
            event.preventDefault();
            search();
        }
    });

    function search() {
        var query = $("#search-input").val();

        $.ajax({
            url: "/search",
            method: "GET",
            data: { q: query },
            success: function (response) {
                var results = $("#search-results");
                results.empty();

                $.each(response, function (index, item) {
                    item.forEach((e) => {
                        results.append("<li>" + e.title + "</li>");
                    });
                    console.log(item);
                });
            },
            error: function (xhr, status, error) {
                console.log(xhr.responseText);
            },
        });
    }
});
