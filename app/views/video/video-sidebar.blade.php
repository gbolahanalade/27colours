
                    <!-- Home_300x250_1 -->
                    
                        <div class="sidebar-widget-fb">
                        <div class="fb-like-box" data-href="https://www.facebook.com/27colours" data-width="400" data-colorscheme="light" 
                            data-show-faces="true" data-header="true" data-stream="false" data-show-border="true" style="width:250px; min-height:300px;">
                        </div>
                        </div> 
                        <!-- Featured Uploads-->
                        <div class="panel panel-default featured-posts">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center">Recent Videos</h3>
                        </div>
                        <div class="panel-body">
                            <div class="">
                            @foreach ($recentVideos as $video)
                            <div class="featured-post">
                                            <figure>
                                                {{ HTML::image($music->image, $music->title, array('class'=>'img-responsive')) }}
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
                                                  <a href="{{ action('VideoController@showVideo', array('id'=> $music->id))}}"><i class="fa fa-play-circle fa-5x pulse2"></i></a>
                                                </div>
                                              </figcaption>
                                            </figure>
                                            <h4 class="post-title">{{ HTML::linkAction('VideoController@showVideo', $music->title, array($music->id), array('class'=>'post-title'))}}</h4>
                                            <p class="post-uploader">
                                                <i class="fa fa-user fa-fw"></i>
                                                {{ HTML::linkAction('ProfileController@show', $music->user->username, array('id'=>$music->user->id),
                                                array('class'=>'post-uploader'))}}
                                            </p>  
                                            <ul class="post-util list-inline">
                                                <li><i class="fa fa-comments"></i> 20 </li>
                                                <li><i class="fa fa-heart"></i> 20 </li>
                                                <li><i class="fa fa-clock-o"></i> {{$music->timeago}}</li>
                                            </ul>
                                        </div>
                            @endforeach
                            </div>
                        </div>
                        </div>