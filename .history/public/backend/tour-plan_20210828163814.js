const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener("mouseenter", Swal.stopTimer);
        toast.addEventListener("mouseleave", Swal.resumeTimer);
    },
});


function storePlan(tourId) {
    $.ajax({
        type: "POST",
        url: route(`admin.tour.plan.store`, tourId),
        data: {
            tour_id: tourId,
            day: $('input[name=day]').val(),
            content: $('textarea[name=content]').val(),
            note: $('input[name=note]').val(),
        },
        dataType: "json",
        success: (response) => {
            Toast.fire({
                icon: response.stt,
                title: response.title,
            });
            loadPlan(tourId);
        },
        error: (response) => {
            Toast.fire({
                icon: response.stt,
                title: response.title,
            });
            loadPlan(tourId);
        }
    });
}

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

function updatePlan(tourId, planId) {
    $.ajax({
        type: "POST",
        url: route(`admin.tour.plan.update`, planId),
        // data: "data",
        dataType: "json",
        success: function(response) {
            Toast.fire({
                icon: response.stt,
                title: response.title,
            });
            loadPlan(tourId);
        },
        error: (response) => {
            Toast.fire({
                icon: response.stt,
                title: response.title,
            });
            loadPlan(tourId);
        },
    });
}

// Xoa plan
function deletePlan(tourId, planId) {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "GET",
                url: route(`admin.tour.plan.delete`, planId),
                // data: "data",
                dataType: "json",
                success: (response) => {
                    Swal.fire(response.title, response.msg, response.stt);
                    loadPlan(tourId);
                },
                error: () {
                    Swal.fire('Delete failed!', 'Please try again.', 'error');
                    loadPlan(tourId);
                }
            });
        }
    });
}