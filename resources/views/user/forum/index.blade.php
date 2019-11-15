@extends('user.master')

@section('content')

<!-- Start post Area -->
<div class="post-wrapper pt-100">
<!-- Start post Area -->
<section class="post-area">
<div class="container">
  <div class="row justify-content-center d-flex">
      <div class="col-lg-8">
            <a href="#" data-toggle="modal" data-target="#exampleModal" class="text-uppercase primary-btn loadmore-btn mb-20" style="color:white;">Ajukan Pertanyaan</a>
				<div class="post-lists search-list">
					@foreach ($forums as $item)
						<div class="single_widget recent_widget" style="padding: 0;">
							<div class="single-list flex-row d-flex" style="padding: 0;">
								<div class="thumb">
										<div class="date" style="background-color: #222222b8 !important; height: 85px; width: 75px; font-size:15px;">
												<p>{{ $item->created_at->diffForHumans() }}</p><br>
										</div>
										<a href=""><img class="img-responsive" src="{{ asset($item->thumbnail ? $item->thumbnail : '/images/noimage.png')}}" alt="" width="150px" height="150px"></a>
								</div>
								<div class="detail mr-20">
                                    <h4 class="pb-20 text-capitalize">{{ $item->user->name }}</h4>
                                    <p>
                                        {!! str_limit($item ->content, $limit = 50, $end = '...') !!}
                                    </p>
									<p class="mt-20 title text-lowercase">
										KOMENTAR
										{{$item->forums_comments()->count() > 0 ? $item->forums_comments()->count() : 'Tidak Ada'}}
									</p>
								</div>
								<div class="footer pt-100 mr-50" style="margin-left: auto;">
									<a href="{{url('/forums/show/'.$item->id)}}" class="text-uppercase primary-btn loadmore-btn" style="color:white;">Baca</a>
								</div>
							</div>
						</div>
						@endforeach
              <div class="justify-content-center d-flex mb-5">
                    {{ $forums->links() }}
                  {{-- <a class="text-uppercase primary-btn loadmore-btn mt-40 mb-60" href="#"> Load More Post</a> --}}
              </div>                                                                     
          </div>                          
      </div>
      {{-- <div class="col-lg-4 sidebar-area">
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
        </div>   --}}
        {{-- <div class="single_widget cat_widget">
            <h4 class="text-uppercase pb-20">post categories</h4>
            <ul>
                @foreach ($kategori as $item)
                    <li>
                        <a href="#">{{$item->nama_kategori}} <span>{{$item->artikel_count}}</span></a>
                    </li>
                @endforeach
            </ul>
        </div>  --}}
      </div>
  </div>
</div>    
</section>
<!-- End post Area -->  
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">New message</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{ route('addforums') }}" method="POST">
                <div class="modal-body">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <label>Thumbnail</label>
                        <div class="input-group">
                            <span class="input-group-btn">
                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary btn-flat">
                                <i class="fa fa-picture-o"></i> Choose
                            </a>
                            </span>
                            <input id="thumbnail" class="form-control" type="text" name="thumbnail" placeholder="Thumbnail" value="{{old('thumbnail')}}">
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="message-text" class="col-form-label">Message:</label>
                    <textarea class="form-control" name="content" id="message-text"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Send message</button>
                </div>
            </form>
          </div>
        </div>
      </div>
      @endsection
      @section('footer')
        <script>
            var options = {
                filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
            };
        </script>
        <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
        <script>
            $('#lfm').filemanager('images');
        </script>
        <script src="{{asset('/bower_components/jquery/dist/jquery.min.js')}}"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
        @endsection