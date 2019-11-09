@extends('admin.master')
@section('header')
  <!-- editable -->
  <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
@endsection
@section('content')
<section class="content-header">
  <h1>
    Category <small>group your idea</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-home"></i> Dashboard</a></li>
    <li><a href="/artikel" class="active">Category</a></li>
  </ol>
</section>

<section class="content">
	<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
            <form action="{{route('kategori')}}" method="post">
              {{ csrf_field() }}
              <div class="form-group {{$errors->has('nama_kategori') ? 'has-error' : ''}}">
                <div class="input-group col-md-4">
                  <input id="kategori" class="form-control" type="text" name="nama_kategori" placeholder="Enter Category">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-primary btn-flat">
                        <i class="fa fa-plus"></i> Add
                      </button>
                    </span>
                  </div>
                  @if ($errors->has('nama_kategori'))
                    <span class="help-block">{{$errors->first('nama_kategori')}}</span>
                  @endif
              </div>
            </form>
        </div>
        <div class="box-body">
          <table id="tabelKaryawan" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>NO</th>
                <th>Nama Kategori</th>
                <th>Jumlah Artikel</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @php
                  $no =1
              @endphp
              @foreach ($kategori as $k)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$k->nama_kategori}}</td>
                <td>{{$k->artikel->count()}}</td>
                <td class="text-center">
                  <a class="btn btn-danger btn-flat delete" href="#" artikel-id = "{{$k->id}}"><i class="fa fa-minus"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
@section('footer')
<script>
  $(document).ready(function() {
    $('#tabelKaryawan').DataTable();
  });
</script>
<script>
  $('.delete').click(function () {
    var artikel_id = $(this).attr('artikel-id');

    swal({
      title: "Apa anda yakin?",
      text: "Data ini akan dihapus, data tidak dapat dipulihkan kembali!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete){
        window.location = "/delete-artikel/"+artikel_id;
        swal("Data telah berhasil dihapus!", {
          icon: "success",
        });
      }
    });
  });
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
<script>
  $.fn.editable.defaults.mode = 'inline';
  $(document).ready(function() {
    $('.judul').editable();
  });

  $(function(){
    $('.kategori').editable({
      value: 2,    
      source: [
            {value: 1, text: 'Active'},
            {value: 2, text: 'Blocked'},
            {value: 3, text: 'Deleted'}
        ]
    });
  });
</script>
@endsection
