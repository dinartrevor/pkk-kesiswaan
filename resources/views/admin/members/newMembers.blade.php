
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