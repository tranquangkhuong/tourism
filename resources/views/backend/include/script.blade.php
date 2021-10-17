<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<!-- Summernote js -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script type="text/javascript" src="{{ URL::asset('frontend/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('frontend/jquery/jquery-ui.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/daterangepicker.js') }}"></script>

<!-- Datepicker js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"
    integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Bootstrap 4 js -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script type="text/javascript" src="{{ URL::asset('frontend/backend/bootstrap/bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/bootstrap4.bundle.min.js') }}"></script>

<!--  demo purposes -->
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/demo.js') }}"></script>

<!--  App -->
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/adminlte.min.js') }}"></script>

<!-- ChartJS -->
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/chartJS.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/select2.full.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/duallistbox.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/inputmask.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/moment.min.js') }}"></script>

<!-- tempusdominus-bootstrap-4.min.js -->
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/tempusdominus-bootstrap-4.min.js') }}">
</script>
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/bootstrap-switch.min.js') }}"></script>

<!-- Stepper js -->
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/bs-stepper.min.js') }}"></script>

<!-- Dropzone js -->
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/dropzone.min.js') }}"></script>

<!-- Custom JS -->
<script type="text/javascript">
    // Select2
    $(function() {
            //Initialize Select2 Elements Default
            $('.select2').select2();
            //Initialize Select2 Elements
            $('.select2tagging').select2({
                theme: 'classic',
                tags: true,
                tokenSeparators: [';'],
            });
            //Initialize Select2 Elements
            $('.select2cls').select2({
                theme: 'classic',
            });
        });

    // Summernote
    $('#summernote').summernote({
        placeholder: 'Enter text',
        tabsize: 2,
        height: 200,
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['style', 'bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontname', 'fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['height', ['height']],
            ['view', ['fullscreen', 'codeview', 'help']],
            ],
        });

        // Datepicker
        $('.date').datepicker({
            multidate: true,
            format: 'dd-mm-yyyy'
        });

        //
        $(function () {
            bsCustomFileInput.init();
        });
</script>

<script>
    const listLink = document.querySelectorAll('.nav-link');

    listLink.forEach((listlinks,index)=>{
        listlinks.onclick=function(){
            const linkActive = document.querySelector('.nav-link.active');
            linkActive.classList.remove("active");
            this.classList.add('active')
        }
    });
</script>
<script >
    var setDefaultActive = function() {
    var path = window.location.pathname;

    console.log(path);

    var element = $(".nav-item a[href='" + path + "']");
    console.log(element);

    element.addClass("active");
}

setDefaultActive()
</script>
