@extends('user.master')

@section('content')
<!-- Start post Area -->
<div class="post-wrapper pt-100">
    <!-- Start post Area -->
    <section class="post-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="single-page-post">
                        <img class="img-fluid" src="img/single.jpg" alt="">
                        <div class="top-wrapper ">
                            <div class="row d-flex justify-content-between">
                                <h2 class="col-lg-8 col-md-12 text-uppercase">
                                    {{ $artikel->judul}}
                                </h2>
                                <div class="col-lg-4 col-md-12 right-side d-flex justify-content-end">
                                    <div class="desc">
                                       <h2>Penulis</h2>
                                        <h3>{{ $artikel->created_at->format('d-M-Y')}}</h3>
                                    </div>
                                    <div class="user-img">
                                        <img src="/images/user.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-post-content">
                          <p>
                            {!!$artikel->konten!!}
                          </p>
                        </div>
                        <div class="bottom-wrapper">
                            <div class="row">
                                <div class="col-lg-4 single-b-wrap col-md-12">
                                    <i class="fa fa-comment-o" aria-hidden="true"></i> {{$coment->count() > 0 ? $coment->count() : 'Tidak Ada'}} Komentar
                                </div>
                            </div>
                        </div>
                  
                        <!-- Start comment-sec Area -->
                        <section class="comment-sec-area pt-80 pb-80">                                                    
                            <div class="container">
                              <div class="row flex-column">
                                <h5 class="text-uppercas pb-50">Tinggalkan pesan</h5>
                                <div class="row flex-row d-flex">
                                    <div class="col-lg-12">
                                      <form class="form"action="{{ route('addComent', $artikel) }}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                          <label>Komentar</label>
                                          <textarea name="content" class="form-control" width="100%" placeholder="Enter ..."></textarea>
                                        </div>
                                        <div class="form-gorup mb-5">
                                          <button class="btn btn-primary" type="submit">Kirim</button>
                                        </div>
                                      </form>
                                </div>
                              </div>
                                <div class="row flex-column">
                                  <h5 class="text-uppercase pb-80">{{$coment->count() > 0 ? $coment->count() : 'Tidak Ada'}} Komentar</h5>
                                  <br>
                                  <div class="comment-list">
                                    <div class="single-comment justify-content-between d-flex">
                                      <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                          <img src="img/asset/c1.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                          @foreach ($coment as $c)
                                          <h5><a href="#">{{$c->user->name}}</a></h5>
                                          <p class="date">{{$c->created_at->diffForHumans()}} </p>
                                          <p class="comment">
                                              {{$c->content}}
                                          </p>
                                          @endforeach
                                        </div>
                                      </div>
                                    </div>
                                  </div>                                                                                                                                                          
                                </div>
                            </div>    
                        </section>
                        <!-- End comment-sec Area -->
                        
                    </div>
                </div>
                
                <div class="col-lg-4 sidebar-area ">
                  {{-- <div class="single_widget search_widget">
                      <div id="imaginary_container"> 
                          <div class="input-group stylish-input-group">
                              <input type="text" class="form-control"  placeholder="Search" >
                              <span class="input-group-addon">
                                  <button type="submit">
                                      <span class="lnr lnr-magnifier"></span>
                                  </button>  
                              </span>
                          </div>
                      </div> 
                  </div> --}}
                  <div class="single_widget recent_widget">
                    <h4 class="text-uppercase pb-20">Recent Posts</h4>
                    <div class="active-recent-carusel">
                      @foreach ($artikel_terbaru as $terbaru)
                        <div class="item">
                          <img src="{{asset($terbaru->thumbnail) }}" alt="" width="200px" height="250px">
                            <p class="mt-20 title text-uppercase">{{$terbaru->judul}}</p>
                            <p>{{ $terbaru->created_at->diffForHumans() }}<span>
                            {{$terbaru->kategori->nama_kategori}} <i class="fa fa-comment-o" aria-hidden="true"></i></span></p>    
                        </div>   
                      @endforeach 
                    </div>                                                                                           
                  </div>
                  <div class="single_widget about_widget">
                      <img src="/images/profile.svg" alt="" width="100%" height="100%">
                      <h2 class="text-uppercase">Penulis</h2>
                      <div class="social-link">
                      <a href="mailto: {{$artikel->user->email}}?Subject=Hello%20again" class="" style="text-decoration:none; color:black;"><i class="fa fa-envelope" aria-hidden="true"></i> {{$artikel->user->email}}</a>
                      </div>
                  </div>
                  <div class="single_widget cat_widget">
                      <h4 class="text-uppercase pb-20">post categories</h4>
                      <ul>
                          @foreach ($kategori as $item)
                              <li>
                                  <a href="#">{{$item->nama_kategori}} <span>{{$item->artikel_count}}</span></a>
                              </li>
                          @endforeach
                      </ul>
                  </div>                                            
                </div>
            </div>
        </div>    
    </section>
    <!-- End post Area -->  
</div>
<!-- End post Area -->

@endsection