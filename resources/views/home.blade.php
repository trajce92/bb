@extends('layouts.app')

@section('content')
<div class="container-flush" id="home-page">
    <div class="row">
        <div class="col-md-4">
            <!-- LOGO -->
            <img src="{{asset('images/logo.png')}}" alt="BuilderBuddies-logo">
            <!-- MY NOTES -->
            <div class="myNotes">
                <p>My Notes</p>
                <ul>
                    <li>asdasd</li>
                </ul>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row">
                <!-- TASKS -->
                <div class="col-6">
                    Current tasks
                    <div>
                        <select class="form-control">
                          <option>Default select</option>
                        </select>
                        <select class="form-control">
                          <option>Default select</option>
                        </select>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">
                          +
                        </button>
                        <div id="accordion">
                          <div class="card">
                            <div class="card-header" id="headingOne">
                              <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Collapsible Group Item #1
                                </button>
                              </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                              <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingTwo">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  Collapsible Group Item #2
                                </button>
                              </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                              <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingThree">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  Collapsible Group Item #3
                                </button>
                              </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                              <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div>
                            </div>
                          </div>
                        </div>
                    </div> 
                </div>
                <!-- MAIL -->
                <div class="col-6">
                    <nav>
                      <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Inbox</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Send</a>
                      </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <table>
                                <tbody>
                                    <tr>
                                        <td><img src="" alt=""></td>
                                        <td>Name</td>
                                        <td>Title</td>
                                        <td>hour</td>
                                    </tr>
                                    @include('quickstart');
                                </tbody>
                            </table>
                      </div>
                      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                          <form>
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Email address</label>
                              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Email address</label>
                              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Email address</label>
                              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlTextarea1">Example textarea</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                          </form>
                      </div>
                    </div>
                </div>
            </div>
            <div class="row">
             a   
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-1">
            <img src="http://via.placeholder.com/50x50" alt="">
            <button data-target="modalnekoj">+</button>
          </div>
          <div class="col-md-7">
            title
            <img src="" alt="">
          </div>
          <div class="col-md-4">
            <!-- za komentari -->
          </div>
        </div>
      </div>
      <div class="col-md-4">
        
      </div>
    </div>
    <div class="row no-gutters justify-content-center">
        <div class="col-md-12">
            <div >
                <div >
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{url('/'.Auth::user()->id.'/notes')}}">see notes</a>
                    You are logged in!
                </div>
                <div>
                    <form method="post" action="{{url('/'.Auth::user()->id.'/posts')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <p>User: </p>
                        
                        <input name="image" type="file" />
                        <input name="title" type="text" />
                        <button type="submit">send</button>  
                    </form>
                    <div class="post">
                        @foreach($data as $post)
                            <p>{{$post->title}}</p>
                            <img src="{{asset('uploads/' . $post->image)}}" alt="">
                            <p id="comments-field-{{$post->id}}"></p>
                            <input type="text" name="comments" id="comments-input-{{$post->id}}">
                            <button name="send-comment" class="send-btn" data="{{$post->id}}">send</button>                        
                        @endforeach
                        <input type="hidden" name="hidden" value="{{Auth::user()->id}}" id="hidden-comment">                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="createModal">Create Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="post" action="{{url('/'.Auth::user()->id.'/projects')}}">
                  {{ csrf_field() }}
                    <div class="form-group">
                      <input name="title" type="text" class="form-control" id="ProjectTitle" placeholder="Project Title">
                    </div>
                    <div class="form-group">
                      <select name="owner_id" class="form-control">
                        @foreach($users as $user)
                        <option>{{$user->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div>
                      icons
                    </div>
                    <button type="submit" class="hidden" id="submitCreateProject"></button>
                  </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <label for="submitCreateProject" class="btn btn-primary">Create</label>
              </div>
            </div>
          </div>
        </div>
        <!-- Learn something new -->
        <div id="share-links">
          <div class="row">
            <div class="col-md-12">
              <div class="input-group">               
                <input type="text" class="form-control" placeholder="Search for...">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="input-group">
                <input type="url" class="input-link" placeholder="Share your link...">
                <span class="input-group-btn">
                  <button class="btn btn-default share-link" type="button">Share</button>
                </span>
              </div>
            </div>
          </div>
          <div class="row">
            <ul class="list-group col-md-12 shared_link">
            </ul>  
        </div>
    </div>
</div>
<script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous"></script>
<script type="text/javascript">

    $(function(){
        $.ajaxSetup ({
            headers: {
                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.send-btn').on('click', function() {
            var post_id = $(this).attr('data');
            var user = $('#hidden-comment').val();
            $.ajax({
              url: document.location.href.slice(0, -5) + '/' + user + '/comments',
              type: 'post',
              data: {
                _text: $('#comments-input-' + post_id).val(),
                _post: post_id
              }
            }).done(function(data) {
                $('#comments-field-' + data.post_id).text(data.content);
                $('#comments-input-' + post_id).val('');
            });
        });
        $('.share-link').on('click', function(){
          var user = $('#hidden-comment').val();
          $.ajax({
            url: document.location.href.slice(0, -5) + '/' + user + '/links',
            type: 'post',
            data : {
                _text: $('.input-link').val()
            }
          }).done(function(data){
            var link = $('.input-link').val();
            $('.shared_link').prepend('<span>' + user + '</span>' + '<li class=";ist-group-item">' + '<a href="' + link +  '" target="_blank" >' + link + '</a></li>');
            $('.input-link').val('');
          })
        });
        

    });
    
</script>
@endsection
