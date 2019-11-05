@extends('user.master')

@section('content')
  <section class="generic-banner relative">
    <div class="container">
      <div class="row height align-items-center justify-content-center">
        <div class="col-lg-10">
          <div class="generic-banner-content">
            <h2 class="text-white text-center">Ekstrakurikuler</h2>
            <p class="text-white">Adalah kegiatan non-pelajaran formal yang dilakukan peserta didik sekolah atau universitas, umumnya di luar jam belajar kurikulum standar. Kegiatan-kegiatan ini ada pada setiap jenjang pendidikan dari sekolah dasar sampai universitas.</p>
          </div>							
        </div>
      </div>
    </div>
  </section>
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
        <div class="col-lg-3 col-md-6 single-fashion">
          <a href="paskibra.html"><img class="img-fluid" src="/images/paskib.jpg" alt=""></a>
          <h4 style="margin-top: 15px;"><a href="paskibra.html">PASKIBRA</a></h4>
        </div>
        <div class="col-lg-3 col-md-6 single-fashion">
          <a href="{{route('eskul.create')}}"><img class="img-fluid" src="/images/marching.jpg" alt=""></a>
          <h4 style="margin-top: 15px;"><a href="{{route('eskul.create')}}">MARCHING BAND</a></h4>
        </div>
        <div class="col-lg-3 col-md-6 single-fashion">
          <a href="pramuka.html"><img class="img-fluid" src="/images/pramuka.jpg" alt=""></a>
          <h4 style="margin-top: 15px;"><a href="pramuka.html">PRAMUKA</a></h4>
        </div>
        <div class="col-lg-3 col-md-6 single-fashion">
          <a href="osis.html"><img class="img-fluid" src="/images/osis.jpg" alt=""></a>
          <h4 style="margin-top: 15px;"><a href="osis.html">OSIS</a></h4>
        </div>
        <div class="col-lg-3 col-md-6 single-fashion">
          <a href="osis.html"><img class="img-fluid" src="/images/osis.jpg" alt=""></a>
          <h4 style="margin-top: 15px;"><a href="osis.html">VOLLY</a></h4>
        </div>
        <div class="col-lg-3 col-md-6 single-fashion">
          <a href="osis.html"><img class="img-fluid" src="/images/futsal.jpg" alt=""></a>
          <h4 style="margin-top: 15px;"><a href="osis.html">FUTSAL</a></h4>
        </div>
        <div class="col-lg-3 col-md-6 single-fashion">
          <a href="osis.html"><img class="img-fluid" src="/images/osis.jpg" alt=""></a>
          <h4 style="margin-top: 15px;"><a href="osis.html">KOPI</a></h4>
        </div>	
        <div class="col-lg-3 col-md-6 single-fashion">
            <a href="pramuka.html"><img class="img-fluid" src="/images/perkusi.jpeg" alt="" height="500"></a>
            <h4 style="margin-top: 15px;"><a href="pramuka.html">PERKUSI</a></h4>
        </div>
        <div class="col-lg-3 col-md-6 single-fashion">
            <a href="pramuka.html"><img class="img-fluid" src="/images/pramuka.jpg" alt=""></a>
            <h4 style="margin-top: 15px;"><a href="pramuka.html">MATH CLUB</a></h4>
          </div>
          <div class="col-lg-3 col-md-6 single-fashion">
              <a href="pramuka.html"><img class="img-fluid" src="/images/pramuka.jpg" alt=""></a>
              <h4 style="margin-top: 15px;"><a href="pramuka.html">ENGLISH CLUB</a></h4>
            </div>
            <div class="col-lg-3 col-md-6 single-fashion">
                <a href="pramuka.html"><img class="img-fluid" src="/images/pramuka.jpg" alt=""></a>
                <h4 style="margin-top: 15px;"><a href="pramuka.html">TEATER</a></h4>
              </div>
              <div class="col-lg-3 col-md-6 single-fashion">
                  <a href="pramuka.html"><img class="img-fluid" src="/images/rohis.jpg" alt=""></a>
                  <h4 style="margin-top: 15px;"><a href="pramuka.html">ROHIS</a></h4>
                </div>
        <!-- <a href="#" class="primary-btn load-more pbtn-2 text-uppercase mx-auto mt-60">Tamplikan Lebih Banyak <i class="fa fa-chevron-circle-down" style="color: white; transform: translate(5px, 0)"></i></a>						 -->
      </div>
    </div>	
  </section>
@endsection