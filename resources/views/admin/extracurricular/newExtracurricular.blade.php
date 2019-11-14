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
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          Buat Ekskul
        </div>
        <form role="form" action="{{ route('extracurricular') }}" method="POST">
          {{ csrf_field() }}
          <div class="box-body">
            <div class="form-group">
              <label for="namaEkskul">Nama Ekskul</label>
              <input name="name" type="text" class="form-control" id="namaEkskul" placeholder="Enter ekskul">
            </div>
            <div class="form-group">
              <label for="pelatih">Nama Pelatih/Pembimbing</label>
              <input name="name_coach" type="text" class="form-control" id="pelatih" placeholder="Enter coach">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <label for="deskripsi">Deskripsi</label>
            <div class="form-group">
              <textarea name="description" id="deskripsi" class="form-controller" cols="30" rows="10" placeholder="Enter description"></textarea>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection