function loadPlan(tourId) {
    $.ajax({
        type: "GET",
        url: route(`admin.tour.plan.index_data`, tourId),
        // data: "data",
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

function update(tourId, planId) {
    $.ajax({
        type: "POST",
        url: route(`admin.tour.plan.update`, planId),
        // data: "data",
        dataType: "json",
        success: function(response) {
            Swal.mixin();
            loadPlan(tourId);
        },
    });
}