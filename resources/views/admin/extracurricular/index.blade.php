@extends('admin.master')

@section('content')
<section class="content-header">
  <h1>
    Ekstrakurikuler
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-home"></i> Dashboard</a></li>
  </ol>
</section>

<section class="content">
  <div class="row" style="margin-bottom: 20px">
    <div class="col-md-12">
      <a href="{{ url('/extracurricular/new-extracurricular') }}" class="btn btn-social btn-primary btn-flat">
        <i class="fa fa-plus"></i>Buat Ekskul Baru
      </a>
    </div>
  </div>
  <div class="row">
    @foreach ($extracurricular as $ex)
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>
        
        <div class="info-box-header">
          <span class="info-box-text" style="float: right; margin-right: 10px">
            {{-- <a href="/extracurricular/edit-extracurricular/{{$ex->id}}" style="margin: 5px; color: darkorange"><i class="fa fa-pencil" style="margin-top: 5px"></i></a> --}}
            <a href="#" style="color: gray" class="delete" ekskul-id = "{{$ex->id}}"><i class="fa fa-times" style="margin-top: 5px"></i></a>
          </span>
        </div>
        <div class="info-box-content">
          <a href="{{ url('/extracurricular/show-extracurricular/'.$ex->id) }}"><span class="info-box-text">{{$ex->name}}</span></a>
          <span class="info-box-number"></span>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>
@endsection
@section('footer')
<script>
  $('.delete').click(function () {
    var ekskul_id = $(this).attr('ekskul-id');

    swal({
      title: "Apa anda yakin?",
      text: "Data ini akan dihapus, data tidak dapat dipulihkan kembali!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete){
        window.location = "/extracurricular/delete-extracurricular/"+ekskul_id;
        swal("Data telah berhasil dihapus!", {
          icon: "success",
        });
      }
    });
  });
</script>
@endsection