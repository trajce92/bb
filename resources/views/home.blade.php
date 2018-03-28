@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
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
        })
        

    });
    
</script>
@endsection
