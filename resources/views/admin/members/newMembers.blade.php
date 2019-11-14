@extends('admin.master')

@section('content')
<section class="content-header">
  <h1>
    New Members
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
          Daftar Ekskul
        </div>
        <form role="form" action="{{ route('member', $extracurricular) }}" method="POST">
          {{ csrf_field() }}
          <div class="box-body">
            <div class="form-group">
              <label for="nis">Nis</label>
              <input name="nis" type="number" class="form-control" id="nis" placeholder="Enter nis">
            </div>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input name="name" type="text" class="form-control" id="namaEkskul" placeholder="Enter ekskul">
            </div>
            <div class="form-group">
              <label for="telephone">No Telepon</label>
              <input name="telephone" type="number" class="form-control" id="telephone" placeholder="Enter telepon">
            </div>
            <div class="form-group">
              <label>Kelas</label>
              <select name="class" class="form-control">
                <option name="class" value="10">X</option>
                <option name="class" value="11">XI</option>
                <option name="class" value="12">XII</option>
              </select>
            </div>
            <div class="form-group">
              <label>Jurusan</label>
              <select name="department" class="form-control">
                <option name="department" value="RPL">RPL</option>
                <option name="department" value="TKJ">TKJ</option>
                <option name="department" value="AP">AP</option>
              </select>
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