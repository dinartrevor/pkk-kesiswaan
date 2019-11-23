@extends('user.master')

@section('content')
<div class="post-wrapper pt-100">
        <section class="post-area">
            <div class="container">
                <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="single-page-post">
                        <img class="img-fluid" src="img/marching.jpg" alt="" width="100%" height="100%">
                        <div class="top-wrapper ">
                            <div class="row d-flex justify-content-between"><h2 class="col-lg-9 col-md-12 text-uppercase">{{$extracurricular->name}}</h2> </div>
                        </div>
                        <div class="single-post-content">
                            <p>
                                {{$extracurricular->descriptions}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 sidebar-area ">
                    <div class="single_widget search_widget">
                        <h3 class="text-center">Form Pendaftaran Ekstakulikuler</h3><br>
                        @if ($message = Session::get('sukses'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button> 
                                <strong>{{ $message }}</strong>
                            </div>
                         @endif
                         @if ($message = Session::get('error'))
                         <div class="alert alert-danger alert-block">
                             <button type="button" class="close" data-dismiss="alert">×</button> 
                             <strong>{{ $message }}</strong>
                         </div>
                      @endif

                        <form role="form" action="{{ route('member', $extracurricular) }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label style="color: rgb(0, 0, 0);">Nis</label>
                                <input name="nis" type="number" class="form-control" id="nis" placeholder="Enter nis">
                            </div> 
                            <button type="submit" class="primary-btn">Kirim<span><i class="fa fa-paper-plane" style="color: white;"></i></span></button>  
                        </form>

                    </div>																						
                </div>
            </div>
          </div>    
        </section>
        <!-- End post Area -->  
      </div>
      @endsection