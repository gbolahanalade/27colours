@extends('layout.master')
    @section('header')
        <title>Talents | 27Colours</title>
         <!-- navigation -->
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="{{ action('HomeController@index')}}">
                                <i class="fa fa-home fa-fw fa-2x"></i>
                                <span class="sr-only">(Current)</span>
                            </a>
                        </li>
                        <li><a href="{{ action('SongController@index')}}"><i class=""></i> Songs</a></li>
                        <li><a href="{{ action('VideoController@index')}}"><i class=""></i> Videos</a></li>
                        <li><a href="{{ action('GalleryController@index')}}"><i class=""></i> Pictures</a></li>
                        <li class="active"><a href="{{ action('TalentController@index')}}"><i class=""></i> Talents</a></li>
                    </ul>
    @stop
    @section('content')
        <div id="section-3a" class="featured-posts">
        <div class="container">
          <div class="row">
              <div class="col-md-9">
                <h3 class="text-center"><i class="fa fa-star"></i> Talents</h3>
                <div class="featured-tab">
                    <ul class="nav nav-pills nav-justified">
                        <li class="active"><a href="#modelling" role="tab" data-toggle="tab">Models</a></li>
                        <li><a href="#singing" role="tab" data-toggle="tab">Singers</a></li>
                        <li><a href="#dancing" role="tab" data-toggle="tab">Dancers</a></li>
                        <li><a href="#comedy" role="tab" data-toggle="tab">Comedian</a></li>
                    </ul>
                    <div class="tab-content">
                        <!-- featured songs -->

                        <!-- modelling -->
                        <div class="tab-pane fade active in" id="modelling">
                            <!-- Errors, Alerts -->
                            @if (Session::get('errors'))
                                <p class="alert alert-error alert-danger fade in" role="alert"><a>
                                {{{ Session::get('errors') }}}</a></p>
                            @endif
                            @if (Session::get('notices'))
                                <p class="alert alert-info fade in" role="alert"><a>
                                {{{ Session::get('notices') }}}</a></p>
                            @endif
                            @if ($models->isEmpty())
                                <p class="text-center alert alert-info"  role="alert"> There are no Talent profiles!</p>
                            @else
                            <!-- Fetch Songs -->
                            @foreach ($models as $model)
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="featured-post">
                                            <figure>
                                                {{ HTML::image($model->image, $model->title, array('class'=>'img-responsive')) }}
                                                <div class="rating">
                                                <ul class="list-inline rating-stars">
                                                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                  <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                                  <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                                </ul>
                                                </div> <!-- end .rating -->

                                              <figcaption>
                                                <div class="post-view">
                                                  <a href="{{ action('ProfileController@show', $model->id)}}"><i class="fa fa-camera fa-5x pulse2"></i></a>
                                                </div>
                                              </figcaption>
                                            </figure>
                                            <p class="post-uploader">
                                                <i class="fa fa-user fa-fw"></i>
                                                {{ HTML::linkAction('ProfileController@show', $model->username, array('id'=>$model->id),
                                                array('class'=>'post-uploader'))}}
                                            </p>  
                                            <ul class="post-util list-inline">
                                                <li><i class="fa fa-comments"></i> 20 </li>
                                                <li><i class="fa fa-heart"></i> 20 </li>
                                                <li><i class="fa fa-clock-o"></i> {{$model->timeago}}</li>
                                            </ul>
                                        </div>
                                    </div>
                            @endforeach
                            @endif 
                            <br>
                            <!-- pagination -->
                        </div>
                        <!-- singing -->
                        <div class="tab-pane fade in" id="singing">
                            <!-- Errors, Alerts -->
                            @if (Session::get('errors'))
                                <p class="alert alert-error alert-danger fade in" role="alert"><a>
                                {{{ Session::get('errors') }}}</a></p>
                            @endif
                            @if (Session::get('notices'))
                                <p class="alert alert-info fade in" role="alert"><a>
                                {{{ Session::get('notices') }}}</a></p>
                            @endif
                            @if ($musicians->isEmpty())
                                <p class="text-center alert alert-info"  role="alert"> There are no Talent profiles!</p>
                            @else
                            <!-- Fetch Songs -->
                            @foreach ($musicians as $musician)
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="featured-post">
                                            <figure>
                                                {{ HTML::image($musician->image, $musician->title, array('class'=>'img-responsive')) }}
                                                <div class="rating">
                                                <ul class="list-inline rating-stars">
                                                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                  <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                                  <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                                </ul>
                                                </div> <!-- end .rating -->

                                              <figcaption>
                                                <div class="post-view">
                                                  <a href="{{ action('ProfileController@show', $musician->id)}}"><i class="fa fa-camera fa-5x pulse2"></i></a>
                                                </div>
                                              </figcaption>
                                            </figure>
                                            <p class="post-uploader">
                                                <i class="fa fa-user fa-fw"></i>
                                                {{ HTML::linkAction('ProfileController@show', $musician->username, array('id'=>$musician->id),
                                                array('class'=>'post-uploader'))}}
                                            </p>  
                                            <ul class="post-util list-inline">
                                                <li><i class="fa fa-comments"></i> 20 </li>
                                                <li><i class="fa fa-heart"></i> 20 </li>
                                                <li><i class="fa fa-clock-o"></i> {{$musician->timeago}}</li>
                                            </ul>
                                        </div>
                                    </div>
                            @endforeach
                            @endif 
                            <br>
                            <!-- pagination -->
                        </div>
                        <!-- dancing -->
                        <div class="tab-pane fade in" id="dancing">
                            <!-- Errors, Alerts -->
                            @if (Session::get('errors'))
                                <p class="alert alert-error alert-danger fade in" role="alert"><a>
                                {{{ Session::get('errors') }}}</a></p>
                            @endif
                            @if (Session::get('notices'))
                                <p class="alert alert-info fade in" role="alert"><a>
                                {{{ Session::get('notices') }}}</a></p>
                            @endif
                            @if ($dancers->isEmpty())
                                <p class="text-center alert alert-info"  role="alert"> There are no Talent profiles!</p>
                            @else
                            <!-- Fetch Profiles -->
                            @foreach ($dancers as $dancer)
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="featured-post">
                                            <figure>
                                                {{ HTML::image($dancer->image, $dancer->title, array('class'=>'img-responsive')) }}
                                                <div class="rating">
                                                <ul class="list-inline rating-stars">
                                                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                  <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                                  <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                                </ul>
                                                </div> <!-- end .rating -->

                                              <figcaption>
                                                <div class="post-view">
                                                  <a href="{{ action('ProfileController@show', $dancer->id)}}"><i class="fa fa-camera fa-5x pulse2"></i></a>
                                                </div>
                                              </figcaption>
                                            </figure>
                                            <p class="post-uploader">
                                                <i class="fa fa-user fa-fw"></i>
                                                {{ HTML::linkAction('ProfileController@show', $dancer->username, array('id'=>$dancer->id),
                                                array('class'=>'post-uploader'))}}
                                            </p>  
                                            <ul class="post-util list-inline">
                                                <li><i class="fa fa-comments"></i> 20 </li>
                                                <li><i class="fa fa-heart"></i> 20 </li>
                                                <li><i class="fa fa-clock-o"></i> {{$dancer->timeago}}</li>
                                            </ul>
                                        </div>
                                    </div>
                            @endforeach
                            @endif 
                            <br>
                            <!-- pagination -->
                        </div>
                        <!-- comedy -->
                        <div class="tab-pane fade in" id="comedy">
                            <!-- Errors, Alerts -->
                            @if (Session::get('errors'))
                                <p class="alert alert-error alert-danger fade in" role="alert"><a>
                                {{{ Session::get('errors') }}}</a></p>
                            @endif
                            @if (Session::get('notices'))
                                <p class="alert alert-info fade in" role="alert"><a>
                                {{{ Session::get('notices') }}}</a></p>
                            @endif
                            @if ($comedians->isEmpty())
                                <p class="text-center alert alert-info"  role="alert"> There are no Talent profiles!</p>
                            @else
                            <!-- Fetch Profiles -->
                            @foreach ($comedians as $comedian)
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="featured-post">
                                            <figure>
                                                {{ HTML::image($comedian->image, $comedian->title, array('class'=>'img-responsive')) }}
                                                <div class="rating">
                                                <ul class="list-inline rating-stars">
                                                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                  <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                                  <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                                </ul>
                                                </div> <!-- end .rating -->

                                              <figcaption>
                                                <div class="post-view">
                                                  <a href="{{ action('ProfileController@show', $comedian->id)}}"><i class="fa fa-camera fa-5x pulse2"></i></a>
                                                </div>
                                              </figcaption>
                                            </figure>
                                            <p class="post-uploader">
                                                <i class="fa fa-user fa-fw"></i>
                                                {{ HTML::linkAction('ProfileController@show', $comedian->username, array('id'=>$comedian->id),
                                                array('class'=>'post-uploader'))}}
                                            </p>  
                                            <ul class="post-util list-inline">
                                                <li><i class="fa fa-comments"></i> 20 </li>
                                                <li><i class="fa fa-heart"></i> 20 </li>
                                                <li><i class="fa fa-clock-o"></i> {{$comedian->timeago}}</li>
                                            </ul>
                                        </div>
                                    </div>
                            @endforeach
                            @endif 
                            <br>
                            <!-- pagination -->
                        </div>
                    </div>
                </div>
              </div>
              <div class="col-md-3 sidebar">
                @section('side') 
                    <aside class="">
                                <!-- Home_300x250_1 -->
                                    <div class="embed-responsive embed-responsive-16by9" style="margin: 0 0 5px 0; min-height:320px;">
                                        <iframe class="embed-responsive-item" width="100%" height="250" src="//www.youtube.com/embed/xzRXKlgq7zs?rel=0" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                    <div class="sidebar-widget">
                                    <div class="fb-like-box" data-href="https://www.facebook.com/27colours" data-width="400" data-colorscheme="light" 
                                        data-show-faces="true" data-header="true" data-stream="false" data-show-border="true" style="width:250px; min-height:300px;">
                                    </div>
                                    </div> 
                                    
                                    <div class="recent-uploads panel panel-default">
                                        <div class="panel-heading">
                                        <h2 style="margin:0 !important;">Recent Entries</h2>
                                        <hr class="hr5">
                                        <ul class="nav nav-tabs nav-justified" role="tablist">
                                            <li class="active col-xs-4" style="border-bottom:none; padding: 0 !important;">
                                                <a href="#rmusic" style="border:none; backround-color:transparent; border-bottom.active:1px solid #ff0000;" role="tab" data-toggle="tab">Music</a>
                                            </li>
                                            <li class=" col-xs-4"><a href="#rvideos" role="tab" data-toggle="tab">Videos</a></li>
                                            <li class=" col-xs-4"><a href="#rpictures" role="tab" data-toggle="tab">Pictures</a></li>
                                        </ul>
                                        </div>
                                        <div class="tab-content panel-body">
                                            <div id="rmusic" class="tab-pane active fade in">
                                                @foreach ($recentSongs as $song)
                                                <ul class="list-inline post-item">
                                                    <li class="col-md-8 col-sm-8 col-xs-12">
                                                        <ul class="list-inline">
                                                        <li class="col-md-3 pull-left">
                                                          {{ HTML::image($song->image, $song->title, array('class'=>'img-responsive thumbnail','width'=>'50px','height'=>'50px')) }}                                       
                                                        </li>
                                                        <li class="col-md-9 pull-left post-desc">                                    
                                                            <h5>{{ HTML::linkAction('SongController@showSong', $song->title, array($song->id), array('class'=>'post-title'))}}</h5>
                                                            <h5><i class="fa fa-user fa-fw"></i>
                                                            {{ HTML::linkAction('ProfileController@show', $song->user->username, array('id'=>$song->user->id), array('class'=>'post-uploader'))}}</h5>
                                                            <p class="post-desc hidden-xs"> {{$song->description}}</p>
                                                        </li>
                                                        </ul>
                                                    </li>
                                                    <li class="col-md-4 col-sm-4 col-xs-12 post-util">
                                                        <ul class="list-inline">
                                                            <li class="col-md-4 play-icon text-right">
                                                                {{ HTML::linkAction('SongController@showSong', '', array($song->id), array('class'=>'fa fa-play-circle fa-3x'))}}
                                                            </li>
                                                            <li class="col-md-8 text-left">
                                                                <h6 class="">{{$song->timeago}}</h6>
                                                                <!-- <h6>views 156 Views</h6> -->
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                @endforeach
                                            </div>
                                            <div id="rvideos" class="tab-pane fade in">
                                                @foreach ($recentVideos as $video)
                                                <ul class="list-inline post-item">
                                                    <li class="col-md-8 col-sm-8 col-xs-12">
                                                        <ul class="list-inline">
                                                        <li class="col-md-3 pull-left">
                                                          {{ HTML::image($video->image, $video->title, array('class'=>'img-responsive thumbnail','width'=>'50px','height'=>'50px')) }}                                       
                                                        </li>
                                                        <li class="col-md-9 pull-left post-desc">                                    
                                                            <h5>{{ HTML::linkAction('VideoController@showVideo', $video->title, array($video->id), array('class'=>'post-title'))}}</h5>
                                                            <h5><i class="fa fa-user fa-fw"></i>
                                                            {{ HTML::linkAction('ProfileController@show', $video->user->username, array('id'=>$video->user->id), array('class'=>'post-uploader'))}}</h5>
                                                            <p class="post-desc hidden-xs"> {{$video->description}}</p>
                                                        </li>
                                                        </ul>
                                                    </li>
                                                    <li class="col-md-4 col-sm-4 col-xs-12 post-util">
                                                        <ul class="list-inline">
                                                            <li class="col-md-4 play-icon text-right">
                                                                {{ HTML::linkAction('VideoController@showVideo', '', array($video->id), array('class'=>'fa fa-play-circle fa-3x'))}}
                                                            </li>
                                                            <li class="col-md-8 text-left">
                                                                <h6 class="">{{$video->timeago}}</h6>
                                                                <!-- <h6>views 156 Views</h6> -->
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                @endforeach
                                            </div>
                                            <div id="rpictures" class="tab-pane fade in">
                                                @foreach ($recentGalleries as $gallery)
                                                <ul class="list-inline post-item">
                                                    <li class="col-md-8 col-sm-8 col-xs-12">
                                                        <ul class="list-inline">
                                                        <li class="col-md-3 pull-left">
                                                          {{ HTML::image($gallery->image, $gallery->caption, array('class'=>'img-responsive thumbnail','width'=>'50px','height'=>'50px')) }}                                       
                                                        </li>
                                                        <li class="col-md-9 pull-left post-desc">                                    
                                                            <h5>{{ HTML::linkAction('GalleryController@showGallery', $gallery->caption, array($gallery->id), array('class'=>'post-title'))}}</h5>
                                                            <h5><i class="fa fa-user fa-fw"></i>
                                                            {{ HTML::linkAction('ProfileController@show', $gallery->user->username, array('id'=>$gallery->user->id), array('class'=>'post-uploader'))}}</h5>
                                                            <p class="post-desc hidden-xs"> {{$gallery->caption}}</p>
                                                        </li>
                                                        </ul>
                                                    </li>
                                                    <li class="col-md-4 col-sm-4 col-xs-12 post-util">
                                                        <ul class="list-inline">
                                                            <li class="col-md-4 play-icon text-right">
                                                                {{ HTML::linkAction('GalleryController@showGallery', '', array($gallery->id), array('class'=>'fa fa-play-circle fa-3x'))}}
                                                            </li>
                                                            <li class="col-md-8 text-left">
                                                                <h6 class="">{{$gallery->timeago}}</h6>
                                                                <!-- <h6>views 156 Views</h6> -->
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div> <!-- recent uploads end -->                        
                    </aside>
                @stop
              </div>
          </div>
        </div>
        </div>    
    @stop
</div> <!-- End of wrapper -->
    @section('scripts2')
    <!-- jQuery Version 1.11.0 -->
    <script src="{{ asset('js/jquery-1.11.0.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Script to Activate the Carousel -->
    <script src="{{ asset('plugins/owl-carousel/owl.carousel.js') }}"></script>
    <script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({
        autoPlay: 3000,
        lazyLoad : true,
        items : 4,
        itemsDesktop : [1199,4],
        itemsDesktopSmall : [979,4],
        itemsTablet : [600,3],
        itemsMobile : [320,2]
      });
    });
    </script>
   @stop

    
