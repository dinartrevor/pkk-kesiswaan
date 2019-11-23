@extends('user.master')

@section('content')
<section class="fashion-area section-gap" id="fashion">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
              <div class="title text-center">
                <h1 class="mb-10">EKSTRAKURIKULER SMK PI</h1>
              </div>
            </div>
          </div>					
          <div class="row">
              @foreach ($extracurricular as $ex)
            <div class="col-lg-3 col-md-6 single-fashion">
                <a href="{{ url('/members/'.$ex->id) }}"><img class="img-fluid" src="/images/dummy-eskul.jpeg" alt=""></a>
              <h4 style="margin-top: 15px;"><a href="{{ url('/members/'.$ex->id) }}">{{$ex->name}}</a></h4>
            </div>
            @endforeach
            <!-- <a href="#" class="primary-btn load-more pbtn-2 text-uppercase mx-auto mt-60">Tamplikan Lebih Banyak <i class="fa fa-chevron-circle-down" style="color: white; transform: translate(5px, 0)"></i></a>						 -->
          </div>
        </div>	
      </section>
      @endsection