<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.2.3/css/fileinput.css" madia="all" rel="stylesheet" type="text/css">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.2.3/themes/explorer-fas/theme.css"> --}}

    <link type="text/css" href="{{ URL::asset('frontend/fontawesome-free-5/css/all.css') }}" rel="stylesheet">


    <title>Document</title>
    <style>
        .main-section{
            padding:20px;
            margin-top: 200px;
            background: #fff;
            box-shadow: 0 0 20px #c1c1c1;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-11 main-section">
                <h1 class="text-center text-danger">upload img</h1>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <input type="file" id="file-1" name="file"  multiple class="file" data-overwrite-initial="false"
                     data-min-file-count="2">
                </div>
            </div>
        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.2.3/js/fileinput.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.2.3/themes/fa/theme.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
{{-- copy CDN for fileinput jS , themse JS , jquery below --}}
    <script type="text/javascript">
        $('#file-1').fileinput({
            theme:'fa',
            uploadUrl:"/upload-images",

            uploadExtraData: function(){
                return{
                    _token:$("input[name='_token']").val()
                };
            },
            allowedFileExtensions:['jpg','png','gif'],
            overwriteInitial:false,
            maxFileSize:2000,
            maxFileNum:8,
            slugCallback:function(filename){
                return filename.replace('(','_').replace(']','_');
            }
        });
    </script>
</body>
</html>
