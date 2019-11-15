@extends('user.master')

@section('content')
<!-- Start post Area -->
<div class="post-wrapper pt-100">
<!-- Start post Area -->
<section class="post-area">
<div class="container">
  <div class="row justify-content-center d-flex">
      <div class="col-lg-8">
				<div class="post-lists search-list">
					@foreach ($artikel as $item)
						<div class="single_widget recent_widget" style="padding: 0;">
							<div class="single-list flex-row d-flex" style="padding: 0;">
								<div class="thumb">
										<div class="date" style="background-color: #222222b8 !important; height: 85px; width: 75px; font-size:15px;">
												<p>{{ $item->created_at->diffForHumans() }}</p><br>
										</div>
										<a href="{{url('/artikel/show/'.$item->id)}}"><img class="img-responsive" src="{{ asset($item->thumbnail) }}" alt="" width="150px" height="150px"></a>
								</div>
								<div class="detail mr-20">
                                    <h4 class="pb-20 text-capitalize">{{ $item->judul }}</h4>
                                    <p>
                                        {!! str_limit($item ->konten, $limit = 50, $end = '...') !!}
                                    </p>
									<p class="mt-20 title text-lowercase">
										<i class="fa fa-users" aria-hidden="true"></i>
										{{$item->kategori->nama_kategori }}
										<i class="ml-20 fa fa-comment-o" aria-hidden="true"></i>
										{{$item->coments_article()->count() > 0 ? $item->coments_article()->count() : 'Tidak Ada'}}
									</p>
								</div>
								<div class="footer pt-100 mr-50" style="margin-left: auto;">
									<a href="{{url('/artikel/show/'.$item->id)}}" class="text-uppercase primary-btn loadmore-btn" style="color:white;">Baca</a>
								</div>
							</div>
						</div>
						@endforeach
              <div class="justify-content-center d-flex">
                 {{$artikel->links()}}
              </div>                                                                     
          </div>                          
      </div>
      <div class="col-lg-4 sidebar-area">
        <div class="single_widget recent_widget">
            <h4 class="text-uppercase pb-20">Recent Posts</h4>
            <div class="active-recent-carusel">
                @foreach ($artikel_terbaru as $terbaru)
                    
             
                <div class="item">
                <img src="{{asset($terbaru->thumbnail) }}" alt="" width="200px" height="250px">
                    <p class="mt-20 title text-uppercase">{{$terbaru->judul}}</p>
                    <p>{{ $terbaru->created_at->diffForHumans() }}<span>
                    {{$terbaru->kategori->nama_kategori}} <i class="fa fa-comment-o" aria-hidden="true"></i> {{$item->coments_article()->count() > 0 ? $item->coments_article()->count() : 'Tidak Ada'}}</span></p>    
                </div>   
                @endforeach                                                                         
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
@endsection