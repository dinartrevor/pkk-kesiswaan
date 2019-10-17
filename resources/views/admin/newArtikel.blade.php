@extends('admin.master')

@section('content')
<section class="content-header">
<h1>
  New Article
</h1>
<ol class="breadcrumb">
  <li><a href="/admin"><i class="fa fa-home"></i> Dashboard</a></li>
  <li><a href="/artikel">Article</a></li>
  <li><a href="/new-artikel" class="active">new article</a></li>
</ol>
</section>

<section class="content">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-body">
        <form action="">
          <input type="text" placeholder="Judul....">
          <div class="input-group">
            <span class="input-group-btn">
              <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                <i class="fa fa-picture-o"></i> Choose
              </a>
            </span>
            <input id="thumbnail" class="form-control" type="text" name="filepath">
          </div>
        <img id="holder" style="margin-top:15px;max-height:100px;">
          <textarea id="my-editor" name="content" class="form-control"></textarea>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection

@section('footer')
  <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
  <script>
    var options = {
      filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
      filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
      filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
      filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
  </script>
  <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
  <script>
    $(document).ready(function(){
      $('#lfm').filemanager('images');
    });
  </script>
  <script>
  CKEDITOR.replace('my-editor', options);
  </script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
  <script>
  $('textarea.my-editor').ckeditor(options);
  </script>
@endsection