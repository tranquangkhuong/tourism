<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <link href="{{ URL::asset('frontend/backend/bootstrap/bootstrap4.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ URL::asset('frontend/fontawesome-free-5/css/all.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">


    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">

    <link type="text/css" href="{{ URL::asset('frontend/backend/css/adminlte.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ URL::asset('frontend/backend/css/main.css') }}" rel="stylesheet">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <link type="text/css" href="{{ URL::asset('frontend/backend/css/dropzone.min.css') }}" rel="stylesheet">
    {{-- <link type="text/css" href="{{ URL::asset('frontend/backend/css/bootstrap-duallistbox.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ URL::asset('frontend/backend/css/bs-stepper.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ URL::asset('frontend/backend/css/codemirror.css') }}" rel="stylesheet">

    <link type="text/css" href="{{ URL::asset('frontend/backend/css/monokai.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ URL::asset('frontend/backend/css/select2-bootstrap4.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ URL::asset('frontend/backend/css/summernote-bs4.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ URL::asset('frontend/backend/css/select2.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ URL::asset('frontend/backend/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ URL::asset('frontend/backend/js/dropzone.min.js') }}"></script> --}}



    <title>Document</title>
</head>
<body class="sidebar-mini" style="height: auto;">
    <div class="wrapper">
        `<!-- header -->
        @include('admin.include.sidebar')
        <!-- sidebar -->
        @include('admin.include.navbar')

        <!-- container -->

            <div class="content-wrapper" style="min-height: 348px;">
            @yield('header')
                @yield('content')

            </div>


    </div>
    <script  type="text/javascript">
        $('#summernote').summernote({
          placeholder: 'Hello Bootstrap 4',
          tabsize: 2,
          height: 100
        });
      </script>

    <script type="text/javascript" src="{{ URL::asset('frontend/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('frontend/jquery/jquery-ui.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('frontend/backend/js/daterangepicker.js') }}"></script>

    <!-- Bootstrap 4 -->
    {{-- <script type="text/javascript" src="{{ URL::asset('frontend/backend/bootstrap/bootstrap4.min.js') }}"></script> --}}
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <script type="text/javascript" src="{{ URL::asset('frontend/backend/js/bootstrap4.bundle.min.js') }}"></script>


    <!--  demo purposes -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('frontend/backend/js/demo.js') }}"></script>
    <!--  App -->
    <script type="text/javascript" src="{{ URL::asset('frontend/backend/js/adminlte.min.js') }}"></script>
    <!-- ChartJS -->
    <script type="text/javascript" src="{{ URL::asset('frontend/backend/js/chartJS.js') }}"></script>

    <script type="text/javascript" src="{{ URL::asset('frontend/backend/js/dropzone.min.js') }}"></script>
    {{-- <script type="text/javascript" src="{{ URL::asset('frontend/backend/js/duallistbox.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('frontend/backend/js/inputmask.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('frontend/backend/js/moment.min.js') }}"></script> --}} --}}
    {{-- tempusdominus-bootstrap-4.min.js
    {{-- <script type="text/javascript" src="{{ URL::asset('frontend/backend/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('frontend/backend/js/bootstrap-switch.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('frontend/backend/js/bs-stepper.min.js') }}"></script> --}}


  <script>

    $(function () {
    bsCustomFileInput.init();
    });
  </script>

    <script>

        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = ""
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
          url: "/target-url", // Set the url
          thumbnailWidth: 80,
          thumbnailHeight: 80,
          parallelUploads: 20,
          previewTemplate: previewTemplate,
          autoQueue: false, // Make sure the files aren't queued until manually added
          previewsContainer: "#previews", // Define the container to display the previews
          clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })

        myDropzone.on("addedfile", function(file) {
          // Hookup the start button
          file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
        })

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
          document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        })

        myDropzone.on("sending", function(file) {
          // Show the total progress bar when upload starts
          document.querySelector("#total-progress").style.opacity = "1"
          // And disable the start button
          file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        })

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
          document.querySelector("#total-progress").style.opacity = "0"
        })

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
          myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        }
        document.querySelector("#actions .cancel").onclick = function() {
          myDropzone.removeAllFiles(true)
          prompt
          trong khi đó bạn bạn không thể nsôi với tôi như thế được bạn biết không hả bạn ơi trong khi bạn đang nói với tôi những dioeèu .
          bạn thật là buồn cười đó hahah
        }
        // DropzoneJS Demo Code End
        </script>



    </body>
</html>
