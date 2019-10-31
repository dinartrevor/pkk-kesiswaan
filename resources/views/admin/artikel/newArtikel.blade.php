@extends('admin.master')

@section('content')
<section class="content-header">
<h1>
  Article <small>convey your idea</small>
</h1>
<ol class="breadcrumb">
  <li><a href="/admin"><i class="fa fa-home"></i> Dashboard</a></li>
  <li><a href="/artikel">Article</a></li>
  <li><a href="/new-artikel" class="active">new article</a></li>
</ol>
</section>

<section class="content">
  <form class="form" action="{{route('artikel.post')}}" method="POST">
    {{ csrf_field() }}
    <div class="col-xs-10">
      <div class="box box-primary">
        <div class="box-header">
          New Article
        </div>
        <div class="box-body">
          <div class="form-group {{$errors->has('judul') ? 'has-error' : ''}}">
            <label for="judul">Judul</label>
            <input name="judul" class="form-control" id="judul" type="text" placeholder="Masukan judul" value="{{old('judul')}}">
            @if ($errors->has('judul'))
              <span class="help-block">{{$errors->first('judul')}}</span>
            @endif
          </div>
          <div class="form-group {{$errors->has('konten') ? 'has-error' : ''}}">
            <textarea name="konten" id="my-editor" name="content" class="form-control">{{old('konten')}}</textarea>
            @if ($errors->has('konten'))
              <span class="help-block">{{$errors->first('konten')}}</span>
            @endif
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-flat" type="submit" style="float: right; width: 20%">Upload</button>
          </div>
          <div class="form-group">
            <a  href="/artikel" class="btn btn-default btn-flat" style="float: right; width: 20%; margin-right: 5px">Cancel</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-2">
      <div class="box box-primary">
        <div class="box-body">
          <div class="input-group">
            <span class="input-group-btn">
              <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary btn-flat">
                <i class="fa fa-picture-o"></i> Choose
              </a>
            </span>
            <input id="thumbnail" class="form-control" type="text" name="thumbnail" placeholder="Thumbnail">
          </div>
          <img id="holder" style="margin-top:15px;max-height:100px;">
          <div class="form-group" data-toggle="buttons">
            <label class="btn btn-primary btn-flat">
              <input type="checkbox" checked autocomplete="off"> Sains
            </label>
            <label class="btn btn-primary btn-flat">
              <input type="checkbox" checked autocomplete="off"> Komputer
            </label>
          </div>
          <div class="form-group" data-toggle="buttons">
            <label class="btn btn-primary btn-flat">
              <input type="checkbox" checked autocomplete="off"> Fun
            </label>
            <label class="btn btn-primary btn-flat">
              <input type="checkbox" checked autocomplete="off"> History
            </label>
          </div>
          <div class="input-group">
            <input id="" class="form-control" type="text" name="" placeholder="Kategori">
            {{-- <span class="input-group-btn">
              <button class="btn btn-primary btn-flat">Tambah</button>
            </span> --}}
          </div>
        </div>
      </div>
    </div>
  </form>
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
      $('#lfm').filemanager('images');
  </script>
  <script>
  CKEDITOR.replace('my-editor', options);
  </script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
  <script>
  $('textarea.my-editor').ckeditor(options);
  $().button('toggle');
  </script>
@endsection