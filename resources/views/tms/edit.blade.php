@extends('tms.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Timeline</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('tms.index') }}"> Back</a>
            </div>
        </div>
    </div>
     
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('tms.update',$tm->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
     
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="title" value="{{ $tm->title }}" class="form-control" placeholder="Title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" type="text" name="description" placeholder="Description" id="summernote">{{ $tm->description }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                    <img src="/image/{{ $tm->image }}" width="300px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
     
    </form>
    <script type="text/javascript" src="https://getbootstrap.com/docs/5.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  

  <!-- jQuery -->
<script src="<?=url('asset/plugins/jquery/jquery.min.js');?>"></script>
<!-- Bootstrap 4 -->
<script src="<?=url('asset/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?=url('asset/dist/js/adminlte.min.js');?>"></script>
<!-- Summernote -->
<script src="<?=url('asset/plugins/summernote/summernote-bs4.min.js');?>"></script>
<!-- CodeMirror -->
<script src="<?=url('asset/plugins/codemirror/codemirror.js');?>"></script>
<script src="<?=url('asset/plugins/codemirror/mode/css/css.js');?>"></script>
<script src="<?=url('asset/plugins/codemirror/mode/xml/xml.js');?>"></script>
<script src="<?=url('asset/plugins/codemirror/mode/htmlmixed/htmlmixed.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=url('asset/dist/js/demo.js');?>"></script>
<!-- Page specific script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
<script>
    if ($("#editTms").length > 0) {
      $("#editTms").validate({
        rules: {
          title: {
            required: true,
          },
          description: {
            required: true,
          },
          
        },
        messages: {
          title: {
            required: "Title is required.",
          },
        description: {
            required: "Description is required.",
          },
        },
      })
    }
  </script>
  <script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
@endsection.blade