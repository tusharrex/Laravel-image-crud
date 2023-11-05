<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Applications</title>
    <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- summernote -->
  <link rel="stylesheet" href="<?=url('asset/plugins/summernote/summernote-bs4.min.css');?>">
  <!-- CodeMirror -->
  <link rel="stylesheet" href="<?=url('asset/plugins/codemirror/codemirror.css');?>">
  <link rel="stylesheet" href="<?=url('asset/plugins/codemirror/theme/monokai.css');?>">
  <!-- SimpleMDE -->
  <link rel="stylesheet" href="<?=url('asset/plugins/simplemde/simplemde.min.css');?>">
    <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon.ico">
    <link rel="stylesheet" type="text/css" href="https://getbootstrap.com/docs/5.1/examples/sticky-footer-navbar/sticky-footer-navbar.css">
</head>
<body>
  <header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">BRAND</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
          <!-- Example split success button -->
          <div class="btn-group">
            <button type="button" class="btn btn-success btn-sm">More</button>
            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="{{ route('tms.index') }}" target="_blank">Converse</a></li>
              <li><a class="dropdown-item" href="{{route('tms.index') }}">Conversation action</a></li>
              <li><a class="dropdown-item" href="http://localhost:81/ciapp/framework-4.1.5/public/thinks">Think Solutions</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="http://localhost:81/ciapp/framework-4.1.5/public/timelines/">Timeline</a></li>
              <li><a class="dropdown-item" href="http://localhost:81/ciapp/framework-4.1.5/public/news/">News</a></li>
              <li><a class="dropdown-item" href="http://localhost:81/ciapp/framework-4.1.5/public/news/create">Create</a></li>
              <li><a class="dropdown-item" href="http://localhost:81/ciapp/yt-download/">YTD Thumb</a></li>
            </ul>
          </div>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-warning" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav><hr>
</header>
<div class="container-fluid">
    @yield('content')
</div>
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
     
</body>
</html>