<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="text/javascript" src="{{ URL::asset('frontend/jquery/jquery.min.js') }}"></script>
    @routes
</head>

<body>
    <a href="{{ route('admin.tour.image.add') }}">Add</a>
    <h3>Tour image</h3>
    <table>
        <thead></thead>
        <tbody id="list-image"></tbody>
    </table>
    {{-- @foreach ($images as $item)
    <div>
        <img src="{{ asset($item->image_path) }}" alt="">
    </div>
    @endforeach --}}

</body>
{{-- <script src="{{ asset('backend/index.js') }}"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
<script>
    /*
|-----------------------------------------------------------------------
| Load dữ liệu trang Index. Xử lí action Delete.
|-----------------------------------------------------------------------
| File này chạy cho tất cả các trang index trong Backend.
*/

// load du lieu khi moi vao trang
$(document).ready(() => {
    var id = $("table").find("tbody").attr("id");
    var name = id.slice(id.lastIndexOf("-") + 1);
    LoadData(name);
    setInterval(() => LoadData(name), 900000);

    // tim kiem - filter
    $("#search").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $(`#list-${name} tr`).filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
});

// ham de load du lieu
function LoadData(name) {
    $.ajax({
        type: "GET",
        url: route(`admin.${name}.index_data`, 3),
        dataType: "json",
        success: (response) => {
            var str = "";
            $.each(response, (index, value) => {
                var ur = route(`admin.${name}.edit`, value.id);
                str += "<tr>";
                str += `<td>${value.name}<td>`;
                if (name == "article" || name == "slider") {
                    str += `<td>${value.title}</td>`;
                }
                if (name == "location") {
                    str += `<td>${value.area}<td>`;
                }
                if (name == "promotion") {
                    str += `<td>${value.amount}<td>`;
                }
                if (name == "tour") {
                    str += `<td>${value.area}<td>`;
                    str += `<td>${value.location}<td>`;
                }
                if (name == "image") {
                    str += `<div><img src="{{ asset(${value.image_path}) }}" onError="this.onerror=null;this.src='{{ url("/images/placeholder600x600.png") }}';" alt="Tour image"></div>`;
                }
                str += `<td><a href="${ur}">Edit</a></td>`;
                str += `<td><a href="javascript::void(0)" onclick="confirmDelete('${name}', ${value.id})">Delete</a></td>`;
                str += "</tr>";
            });
            $("table > tbody" + `#list-${name}`).html(str);
        },
    });
}

// xac nhan Xoa
function confirmDelete(name, id) {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: route(`admin.${name}.delete`, id),
                type: "GET",
                success: (response) => {
                    Swal.fire(response.title, response.msg, response.stt);
                    LoadData(name);
                },
                error: (xhr, ajaxOptions, thrownError) => {
                    Swal.fire("Delete failed!", "Please try again.", "error");
                    LoadData(name);
                },
            });
        }
    });
}

// Generate code
$("#btn-generate-code").click(function(e) {
    e.preventDefault();
    $.ajax({
        type: "GET",
        url: route(`generate_code`, 10),
        success: (response) => {
            $("input[name=code]").val(response);
        },
    });
});


</script>

</html>
