@extends('admin.master')
@section('header')
  <!-- editable -->
  <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
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
            <a href="/artikel/new-artikel" class="btn btn-info btn-flat">
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
                <th>Kategori</th>
                <th>Tanggal dibuat</th>
                <th>Status</th>
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
                <td>
                  @if ($a->status == 'draft')
                  <a class="judul" href="#" data-type="text" data-pk="{{$a->id}}" data-url="/api/artikel/{{$a->id}}/editArtikel" data-title="Enter Title">{{$a->judul}}</a>
                  @else
                  {{$a->judul}}
                  @endif
                </td>
                @if ($a->kategori_id)
                <td>{{$a->kategori->nama_kategori}}</td>
                @endif
                <td>{{$a->created_at->format('d M Y')}}</td>
                <td>
                @if ($a->status == "publish")
                  <span class="label bg-green">PUBLISH</span>
                @else
                  <span class="label bg-yellow">DRAFT</span>
                @endif
                </td>
                <td class="text-center">
                  <a class="btn btn-info btn-flat" href="{{url('/artikel/show/'.$a->id)}}"><i class="fa fa-eye"></i></a>
                  @if ($a->status == "draft")
                  <a class="btn btn-warning btn-flat" href="{{url('/artikel/edit-artikel/'.$a->id)}}"><i class="fa fa-edit"></i></a>
                  @endif
                  <a class="btn btn-danger btn-flat delete" href="#" artikel-id = "{{$a->id}}"><i class="fa fa-minus"></i></a>
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
        window.location = "/artikel/delete-artikel/"+artikel_id;
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
</script>
@endsection