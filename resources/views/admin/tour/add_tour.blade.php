@extends('admin.master')
@section('header')
  <!-- Content Header (Page header) -->

  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Add Tour </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Tour</a></li>
            <li class="breadcrumb-item"><a href="#">Add Tour</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  @endsection
  @section('content')
  <!-- Main content -->
  <div class="col-12 col-sm-12">
    <div class="card card-primary card-tabs">
      <div class="card-header p-0 pt-1">
        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Add tour</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Add Plan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Add Image</a>
          </li>
        </ul>
      </div>
      <div class="card-body">
        <div class="tab-content" id="custom-tabs-one-tabContent">
          <div class="tab-pane fade active show" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-12 col-sm-6">
                        <label for="inputName">Name Tour</label>
                        <input type="text" id="inputName" class="form-control">
                      </div>
                      <div class="form-group col-12 col-sm-6">
                          <label for="inputName">#ID-code</label>
                          <input type="text" id="inputName" class="form-control">
                      </div>
                </div>
                {{-- price --}}
                <h4 class="d-flex justify-content-center">Price</h4>
                <div class="row">
                    <div class="form-group col-12 col-sm-3">
                        <label for="inputName">Adult-price</label>
                        <input type="text" id="inputName" class="form-control">
                      </div>
                      <div class="form-group col-12 col-sm-3">
                          <label for="inputName">Youth-price</label>
                          <input type="text" id="inputName" class="form-control">
                      </div>
                      <div class="form-group col-12 col-sm-3">
                        <label for="inputName">Child-price</label>
                        <input type="text" id="inputName" class="form-control">
                    </div>
                    <div class="form-group col-12 col-sm-3">
                        <label for="inputName">Baby-price</label>
                        <input type="text" id="inputName" class="form-control">
                    </div>
                </div>
                {{-- /price --}}

                {{-- desription --}}
                <div class="card card-default">
                    <div class="card-header">
                      <h4 class=" d-flex justify-content-center">Description</h4>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                          <i class="fas fa-times"></i>
                        </button>
                      </div>
                    </div>
                    <!-- /.description -->
                    <div class="card-body">
                        <div id="summernote">
                      <!-- /.row -->
                    </div>
                </div>
                    <!-- /.description -->

                     {{-- Destination--}}
                <div class="card card-default">
                    <div class="card-header">
                      <h4 class=" d-flex justify-content-center">Destination</h4>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                          <i class="fas fa-times"></i>
                        </button>
                      </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputStatus">Destination</label>
                            <select id="inputStatus" class="form-control custom-select">
                              <option selected="">Lựa chọn Điểm đến</option>
                              <option>Cửa lò</option>
                              <option>SaPa</option>
                              <option>Phú Quốc</option>
                              <option>Hà giang</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="inputName">Departuar-Location</label>
                            <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                        </div>

                    </div>


                  </div>
                    <!-- / Destination- -->



                {{-- date --}}

                <h4 class=" d-flex justify-content-center">Date</h4>
                <div class="form-group">
                    <label>Date range:</label>

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="far fa-calendar-alt"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control float-right col-12 col-sm-6" id="from" name="from">
                      <label for="to">to</label>
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="far fa-calendar-alt"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control float-right col-12 col-sm-6" id="to" name="to">

                    </div>
                    <!-- /.input group -->
                  </div>

                    <!-- /.input group -->
                  </div>

                {{-- /date --}}


                {{--Image --}}

                <h4 class=" d-flex justify-content-center">Image</h4>
                <div class="form-group">
                    <label for="exampleInputFile d-flex justify-content-center">Avatar Tour</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                </div>
                {{-- /Image --}}

                {{-- Means of transportation --}}

                <div class="form-group">
                    <label for="inputStatus">Means of transportation</label>
                    <select id="inputStatus" class="form-control custom-select">
                      <option selected="">Lựa chọn Điểm đến</option>
                      <option>Motobike</option>
                      <option>passenger car</option>
                      <option>Plane</option>
                      <option>Passenger ship</option>
                    </select>
                  </div>

                     {{-- /Means of transportation --}}

                      {{-- Preferential service--}}

                <div class="form-group">
                  <label for="inputDescription">Preferential service</label>
                  <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="inputDescription">Paid service</label>
                    <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                </div>



                {{-- /Preferential service--}}

                <div class="form-group">
                  <label for="inputStatus">Status</label>
                  <select id="inputStatus" class="form-control custom-select">
                    <option selected="">Hiển thị</option>
                    <option>Ẩn</option>
                  </select>
                </div>
              </div>
          </div>
          <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
              {{-- tab 2 --}}
              <div class="card card-default">
                <div class="card-header">
                  <h4 class=" d-flex justify-content-center">Tour Plan</h4>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.description -->
                    <div class="box-content">
                        <div class="form-group  col-sm-12">
                            <label for="inputName">Title Plan</label>
                            <input type="text" id="inputName" class="form-control" placeholder="Date: 1">
                        </div>
                        <div class="form-group col-12 col-sm-12">
                            <label for="inputDescription">Title Plan</label>
                            <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                        </div>
                    </div>

                    <div class="container-plan">
                    </div>

                    <button type="button" class=" add-box btn btn-block bg-gradient-primary col-1 col-sm-1" style="right:-90%;">ADD</button>

              </div>
            </div>
          <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">

        {{-- tab 3 --}}
        <div class="row">
          <div class="col-md-12">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Dropzone.js <small><em>jQuery File Upload</em> like look</small></h3>
              </div>
              <div class="card-body">
                <div id="actions" class="row">
                  <div class="col-lg-6">
                    <div class="btn-group w-100">
                      <span class="btn btn-success col fileinput-button dz-clickable">
                        <i class="fas fa-plus"></i>
                        <span>Add files</span>
                      </span>
                      <button type="submit" class="btn btn-primary col start">
                        <i class="fas fa-upload"></i>
                        <span>Start upload</span>
                      </button>
                      <button type="reset" class="btn btn-warning col cancel">
                        <i class="fas fa-times-circle"></i>
                        <span>Cancel upload</span>
                      </button>
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center">
                    <div class="fileupload-process w-100">
                      <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="opacity: 1;">
                        <div class="progress-bar progress-bar-success" style="width: 100%;" data-dz-uploadprogress=""></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="table table-striped files" id="previews">

                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Visit <a href="https://www.dropzonejs.com">dropzone.js documentation</a> for more examples and information about the plugin.
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>

            </div>
            <!-- /.card -->
          </div>
        </div>

          </div>
        </div>
      </div>
      <!-- /.card -->
    </div>
  </div>
  <script type="text/javascript">
  var boxCont= document.querySelector('.container-plan');
  var addCont = document.querySelector('.add-box')
  var contentBox=document.querySelector('.box-content').cloneNode();

  console.log(contentBox);




    addCont.onclick =function(){
        boxCont.innerHTML=contentBox;


}

    };


   </script>
  <script>
    $( function() {
      var dateFormat = "mm/dd/yy",
        from = $( "#from" )
          .datepicker({

            changeMonth: true,
            numberOfMonths: 1,
            dateFormat: 'dd/mm/yy'
          })
          .on( "change", function() {
            to.datepicker( "option", "minDate", getDate( this ) );
          }),
        to = $( "#to" ).datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 2,
          dateFormat: 'dd/mm/yy'
        })
        .on( "change", function() {
          from.datepicker( "option", "maxDate", getDate( this ) );
        });

      function getDate( element ) {
        var date;
        try {
          date = $.datepicker.parseDate( dateFormat, element.value );
        } catch( error ) {
          date = null;
        }

        return date;
      }
    } );

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
    };
    // DropzoneJS Demo Code End
  </script>


  <!-- /.content -->
  @endsection

