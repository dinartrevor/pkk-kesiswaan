@extends('admin.master')

@section('content')
<section class="content-header">
  <h1>
    Forums
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-home"></i> Dashboard</a></li>
  </ol>
</section>

<section class="content">
	<div class="row">
    <div class="col-xs-12">
            <div class="box-header">
                    <h2>
                      {!! $forums->user->name !!}
                    </h2>
                  </div>
      <div class="box">
        <div class="box-body">
          <div class="img">
            <img src="{{ asset($forums->thumbnail) }}" alt="" srcset="" width="100%" height="50%">
          </div>
          {!! $forums->content !!}
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          Tambahkan Komentar
        </div>
        <div class="box-body">
            <form action="{{ route('addComent', $forums) }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>comment</label>
                    <textarea name="content" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                <div class="form-gorup">
                    <button class="btn btn-primary" type="submit">Kirim</button>
                </div>
		    </form>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          Komentar
        </div>
        <div class="box-body">
          <h3>{{auth()->user()->name}}</h3>
          <ul>
            @foreach ($comments as $c)
                <li>{{$c->content}}</li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection