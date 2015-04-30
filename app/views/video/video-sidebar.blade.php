<!-- Celebrity Endorsements -->
                        <div class="embed-responsive embed-responsive-16by9" style="margin: 0 0 5px 0; min-height:320px;">
                            <iframe class="embed-responsive-item" width="100%" height="250" src="//www.youtube.com/embed/xzRXKlgq7zs?rel=0" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <!-- Facebook Like box -->
                        <div class="fb-widget">
                          <div class="fb-page" data-href="https://www.facebook.com/27colours" 
                            data-width="250" data-height="250" data-hide-cover="false" 
                            data-show-facepile="true" data-show-posts="false">
                            <div class="fb-xfbml-parse-ignore">
                            <blockquote cite="https://www.facebook.com/27colours">
                            <a href="https://www.facebook.com/27colours">27 colours</a></blockquote>
                            </div>
                          </div>
                        </div> 
                        <!-- Featured Uploads-->
                        <div class="panel panel-default featured-posts">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center">Featured Videos</h3>
                        </div>
                        <div class="panel-body">
                            <!-- Fetch Videos -->
                            @foreach ($recentVideos as $video)
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 padding-0">
                                    <div class="featured-post">
                                        <figure>
                                            {{ HTML::image($video->image, $video->title, array('class'=>'img-responsive')) }}
                                            <div class="rating">
                                            <ul class="list-inline rating-stars hidden">
                                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                                              <li><a href="#"><i class="fa fa-star"></i></a></li>
                                              <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                              <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            </ul>
                                            <p class="post-label"><i class="fa fa-video-camera"></i> {{$video->genre}}</p>
                                            </div> <!-- end .rating -->

                                          <figcaption>
                                            <div class="post-view">
                                              <a href="{{ action('VideoController@showVideo', array('id'=> $video->id))}}"><i class="fa fa-play-circle fa-4x pulse2"></i></a>
                                            </div>
                                          </figcaption>
                                        </figure>
                                        <h4 class="post-title">{{ HTML::linkAction('VideoController@showVideo', $video->title, array('id'=> $video->id), array('class'=>'post-title'))}}</h4>
                                        <p class="post-uploader">
                                            <i class="fa fa-user fa-fw"></i>
                                            {{ HTML::linkAction('ProfileController@show', $video->user->username, array('id'=>$video->user->id),
                                            array('class'=>'post-uploader'))}}
                                        </p>  
                                        <ul class="post-util list-inline">
                                            <li><i class="fa fa-comments"></i> 20 </li>
                                            <li><i class="fa fa-heart"></i> 20 </li>
                                            <li><i class="fa fa-clock-o"></i> {{$video->timeago}}</li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        </div>
