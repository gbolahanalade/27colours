@extends('layout.master')
    @section('header')
        <title>Upload Video | 27Colours</title>
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
      <div id="edit-profile" class="">
        <div class="container-fluid">
            <div class="col-md-7 center-block" style="float:none;">
              <form class="form-upload" id="upload" enctype="multipart/form-data" method="post" action="/song/create">
                <div class="panel panel-default">
                    <div class="panel-heading">
                      <h2 class="panel-title text-center page-title">Add Video</h2>
                      @if (Session::get('errors'))
                      <div class="alert alert-warning alert-dismissible fade in" role="alert">
                        <a name="error">{{{ Session::get('errors') }}}</a></div>
                      @endif
                      @if (Session::get('notices'))
                      <div class="alert alert-warning alert-dismissible fade in">
                        <a name="notice">{{{ Session::get('notices') }}}</a></div>
                      @endif
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-desktop"></i></span>
                            <input type="file" id="song" name="song" accept="audio/*" class="btn btn-default btn-block">
                        </div>
                        <p class="help-block">*Maximum of 10 uploads | *Only Mp4/WebM/Ogg formats allowed</p>
                        </div>
                        <!-- divider -->
                        <div class="divider-small"><h2>OR</h2></div>
                        <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-youtube"></i></span>
                            <input type="text" class="form-control" id="youtube" name="youtube" placeholder="Youtube Video"/>  
                        </div>
                        <p class="help-block">*Copy the "Embed" link of you video from Youtube and paste here. <code class="hidden-xs hidden-sm"> e.g 
                            'iframe width="560" height="315" src="https://www.youtube.com/embed/xzRXKlgq7zs" 
                            frameborder="0" allowfullscreen...'</code>
                        </p>
                        </div>
                        
                        <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-">Video Title</i></span>
                            {{Form::text('title', '', array('class'=>'form-control', 'required'=>''))}}
                        </div>
                        <p class="help-block">*Required</p>
                        </div>
                        <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-">Description</i></span>
                            {{Form::textarea('description', '', array('class'=>'form-control', 'rows'=>'3'))}}
                        </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <!-- album art -->
                            <div class="col-md-4 col-sm-6">
                                <label for="upld-img" class="control-label">Album Art</label>
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 150px; height: 150px;">
                                {{ HTML::image('img/user.jpg','Album Art', array('width'=>'150px', 'max-height'=>'150px'))}}</div>
                                <div><span class="btn btn-default btn-sm btn-file"><span class="fileinput-new">Select image</span>
                                <span class="fileinput-exists">Change</span><input type="file" name="image" id="image" accept="image/*"/></span>
                                <a href="#" class="btn btn-danger btn-sm fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div></div> 
                                <p class="help-block">*Required</p>
                            </div>
                            <div class="col-md-8 col-sm-6">
                                <ul class="list-unstyled select">
                                    <li><label for="genre" class="control-label">Genre</label></li>
                                    <li><select class="form-control" name="genre" id="genre">
                                        <option>Music video</option>
                                        <option>Comedy</option>
                                        <option>Dance</option>
                                        </select>
                                    </li>
                                </ul> 
                            </div> 
                          </div>
                        </div>
                        <!-- progress bar -->
                        <div id="progressbar"></div>
                    </div>
                    <div class="panel-footer text-right">
                        <span><input class="btn btn-default btn-sm" type="submit" id="submit-btn" value="Upload" /></span>
                        <span><a href="{{ action('ProfileController@index')}}" class="btn btn-danger btn-sm">Cancel</a></span>
                    </div>
                </div> <!-- ./ panel ends -->
              </form>
            </div>
        </div>
      </div>
    @stop
    <!-- FOOTER - IN MASTER BLADE -->
</div> <!-- ./ wrapper ends -->

@section('scripts2')
    <!-- jQuery Version 1.11.0 -->
    <script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('plugins/jasny-bootstrap/js/jasny-bootstrap.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#upload').on('submit', function(){
                var form = $(this);
                var formdata = false;
                if (window.FormData){
                formdata = new FormData(form[0]);
                }
            });
            var formAction = form.attr('action');
            $.ajax({
                url         : '/video/create',
                data        : formdata ? formdata : form.serialize(),
                cache       : false,
                contentType : false,
                processData : false,
                type        : 'POST',
                success     : function(data, textStatus, jqXHR){
                    // Callback code
                }
            });
        });
    </script>
@stop