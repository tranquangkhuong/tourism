<script type="text/javascript">
    $('#summernote').summernote({
          placeholder: 'Enter text',
          tabsize: 2,
          height: 200
        });
</script>

<script type="text/javascript" src="{{ URL::asset('frontend/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('frontend/jquery/jquery-ui.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/daterangepicker.js') }}"></script>

<!-- Bootstrap 4 -->
<script type="text/javascript" src="{{ URL::asset('frontend/backend/bootstrap/bootstrap4.min.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/bootstrap4.bundle.min.js') }}"></script>
<!--  demo purposes -->
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/demo.js') }}"></script>
<!--  App -->
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/adminlte.min.js') }}"></script>
{{-- <!-- ChartJS --> --}}
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/chartJS.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/select2.full.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/duallistbox.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/inputmask.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/moment.min.js') }}"></script>
{{-- tempusdominus-bootstrap-4.min.js --}}
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/tempusdominus-bootstrap-4.min.js') }}">
</script>
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/bootstrap-switch.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('frontend/backend/js/bs-stepper.min.js') }}"></script>

<script>
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
