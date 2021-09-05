{{-- select option của select2 --}}
<script>
    $(function() {
            // Initialize Select2 elements
            $('.select2').select2();

            // Initialize Select2 Bootstrap4 elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            });
        });
</script>

{{-- jquery validate --}}
<script>
    $(document).ready(function() {

    $('#login-form').validate({
        rules: {
            email: {
                required: true,
                email: true,
            },
            password: {
                required: true,
                minlength: 6,
            }
        },
        errorPlacement: function(error, element) {
            switch (element.attr('name')) {
                case 'email':
                case 'password':
                    error.insertBefore(element);
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });

    $('#register-form').validate({
        rules: {
            name: "required",
            email: {
                required: true,
                email: true,
            },
            password: {
                required: true,
                minlength: 6,
            },
            re_password: {
                equalTo: "#password",
                required: true,
                minlength: 6,
            },
        },
        errorPlacement: function(error, element) {
            switch (element.attr('name')) {
                case 'name':
                case 'email':
                case 'password':
                case 're_password':
                    error.insertBefore(element);
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });

    // function submitRegister () {
    //     $.ajax({
    //         type: "post",
    //         url: "/register",
    //         data: {
    //             _token: $("input[name='_token']").val(),
    //             name: $("input[name='name']").val(),
    //             email: $("input[name='email']").val(),
    //             password: $("input[name='password']").val(),
    //             re_password: $("textarea[name='re_password']").val(),
    //         },
    //         dataType: 'json',
    //         success: function (response) {
    //             if ($.isEmptyObject(response.error)) {
    //                 printSuccessAlert(response.success);
    //             } else {
    //                 printErrorMsg(response.error);
    //             }
    //         }
    //     });
    //  }

    // function printSuccessAlert (msg) {
    //     Swal.fire({
    //         title: 'Success!',
    //         text: msg,
    //         imageUrl: 'https://us.123rf.com/450wm/tashatuvango/tashatuvango1603/tashatuvango160301001/53290054-keys-to-success-concept-on-golden-keychain-over-black-wooden-background-closeup-view-selective-focus.jpg?ver=6',
    //         imageAlt: 'Successful registration',
    //     });
    // }
    // function printErrorMsg (msg) {
    //     $(".print-error-msg").find("ul").html('');
    //     $(".print-error-msg").css('display','block');
    //     $.each(msg, function(key, value) {
    //         $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
    //     });
    // }
});
</script>
<script>
    const selected = document.querySelector(".filter-selected")
    const optionContainer = document.querySelector(".filter__list")
    const listOption = document.querySelectorAll(".filter__item")

    const selectedLocation = document.querySelector(".filter-selected-location")
    const ContainerLocation = document.querySelector(".filter__list-location")
    const listOptionLocation = document.querySelectorAll(".filter__item-location")


    selected.addEventListener("click", () => {
        optionContainer.classList.add("active");
    });
    listOption.forEach(o => {
        o.addEventListener("click", () => {
            selected.innerHTML = o.querySelector(".filter__item-month").innerHTML;
            optionContainer.classList.remove("active");
        })
    });
</script>
<script src="{{ URL::asset('backend/jquery-validation-1.19.3/dist/jquery.validate.min.js') }}"></script>
<script src="{{ URL::asset('frontend/js/main.js') }}"></script>
<script src="{{ URL::asset('frontend/js/detail_tour/detail_tour.js') }}"></script>
<script src="{{ URL::asset('frontend/js/contact_us_js/contact_us.js') }}"></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD54ImUCEQ9aYBDgXVomjGIBdqdX93k3Z0&callback=initMap&callback=initMap">
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>

<script>
    const buyBtns = document.querySelectorAll('.js-account')
    const modal =  document.querySelector(".modal")
    const modalClose = document.querySelector('.js-modal-close')
    const modalContainer = document.querySelector('.modal-container')

    // hàm hiển thị modal đăng nhập (thêm class open vào modal)
    function showModal(){
        modal.classList.add('open')
    }
    // hàm ẩn modal  (loại bỏ class open ra khỏi modal)
    function hideModal(){
        modal.classList.remove('open')
    }

    for (const buyBtn of buyBtns) {
        buyBtn.addEventListener('click', showModal)
    }
    modalClose.addEventListener('click', hideModal)

    modalContainer.addEventListener('click', function (event) {
        event.stopPropagation()
    });
</script>
