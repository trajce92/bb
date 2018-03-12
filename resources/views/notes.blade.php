@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <ul id="noteslist">
                    @foreach($new as $note)
                        <li>{{$note->note}}</li>
                    @endforeach
                </ul>
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <textarea id="textnote"></textarea>
                    <a id="save" href="#">Save Note</a>
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
        $('#save').on('click', function() {
            $.ajax({
              url: document.location.href ,
              type: 'post',
              data: {
                _text: $('#textnote').val()
              }
            }).done(function(data) {
                console.log(data.note);
              $('#noteslist').prepend('<li>'+ data.note +'</li>');
            });
        })
        

    });
    
</script>
@endsection
