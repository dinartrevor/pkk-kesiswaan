@extends('admin.master')
@section('header')
  <!-- editable -->
  <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
@endsection
@section('content')
<section class="content-header">
  <h1>
    Siswa
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
        <div class="box-body">
          <table id="tabelKaryawan" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>NO</th>
                <th>Nis</th>
                <th>Nama</th>
                <th>E-Mail</th>
                <th>Alamat</th>
              </tr>
            </thead>
            <tbody>
              @php
                  $no =1
              @endphp
              @foreach ($students as $s)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$s->nis}}</td>
                <td>{{$s->name}}</td>
                <td>{{$s->email}}</td>
                <td>{{$s->address}}</td>
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
@endsection