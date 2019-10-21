@extends('admin.master')
@section('header')
    
@endsection
@section('content')
<section class="content-header">
  <h1>
    Article <small>convey your idea</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-home"></i> Dashboard</a></li>
    <li><a href="/artikel" class="active">Article</a></li>
  </ol>
</section>

<section class="content">
	<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
            <a href="/new-artikel" class="btn btn-info">
              Add new Article
            </a>
        </div>
        <div class="box-body">
          <table id="tabelKaryawan" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>NO</th>
                <th>Thumbnail</th>
                <th>Judul</th>
                <th>Tanggal dibuat</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @php
                  $no =1
              @endphp
              @foreach ($artikel as $a)
              <tr>
                <td>{{$no++}}</td>
                <td><img src="{{$a->thumbnail}}" style="width: 100px; height: 50px"></td>
                <td>{{$a->judul}}</td>
                <td>{{$a->created_at->format('d M Y')}}</td>
                <td class="text-center">
                  <a class="btn btn-info btn-flat" href="#"><i class="fa fa-eye"></i></a>
                  <a class="btn btn-warning btn-flat" href="#"><i class="fa fa-edit"></i></a>
                  <a class="btn btn-danger btn-flat" href="#"><i class="fa fa-minus"></i></a>
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
    var karyawan_id = $(this).attr('karyawanId');

    swal({
      title: "Apa anda yakin?",
      text: "Data ini akan dihapus, data tidak dapat dipulihkan kembali!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete){
        window.location = "/karyawan/"+karyawan_id+"/delete";
        swal("Data telah berhasil dihapus!", {
          icon: "success",
        });
      }
    });
  });
</script>
@endsection