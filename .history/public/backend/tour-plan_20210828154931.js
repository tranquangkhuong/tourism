function loadData(tourId) {
    $.ajax({
        type: "GET",
        url: route(`admin.tour.plan.index_data`, tourId),
        data: "data",
        dataType: "json",
        success: function(response) {
            var str = "";
            $.each(response, function(index, value) {
                //  code form html
            });
            $("element").html(str);
        },
        error: () => {
            let str = "<div><p>Load failed!</p></div>";
            $("element").html(str);
        },
    });
}