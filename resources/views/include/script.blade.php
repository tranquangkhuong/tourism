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
<script src="{{ URL::asset('frontend/js/main.js') }}"></script>
<script src="{{ URL::asset('frontend/js/detail_tour/detail_tour.js') }}"></script>
<script src="{{ URL::asset('frontend/js/contact_us_js/contact_us.js') }}"></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD54ImUCEQ9aYBDgXVomjGIBdqdX93k3Z0&callback=initMap&callback=initMap">
</script>

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
 