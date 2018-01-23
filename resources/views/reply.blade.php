@extends('layouts.app')

@section('content')
 
    <div class="row welcome">
      <div class="sidebar col-12 text-center col-sm-3">
        @include('sidebar')
      </div>
      <div class="col-md-9 ml-auto">
        @include('breadcrumb')
        <div class="card my-4 col-10"> 
           <div class="card-header"> 
           </div>         
            <div class="card-body">
              <p class="card-text text-justify text-center">
              {{$message->message}}
             </p>
            </div>
      <div class="card-footer text-muted text-success">
            <p class="text-info">  Replied on: {{ $message->created_at }}<br/>
              By: {{ $message->user_name }}
            </p>
      </div>
    </div>      
        <h2 class="text-center text-success room">{{$message->replies()->count()}} Replies</h2><br>
    <div class="row room">
      @foreach ($replies as $reply)
        <div class="card my-4 col-10">           
            <div class="card-body">
              <p class="card-text text-justify text-center">
              {{ $reply->reply }}
             </p>
            </div>
      <div class="card-footer text-muted text-success">
            <p class="text-info">  Replied on: {{ $reply->created_at }}<br/>
              By: <img src="{{ $message->user_image }}" height="40px" width="40px" 
              class="rouded0image"/> &nbsp;{{ $reply->user_name }}
            </p>
      </div>
    </div>               
    @endforeach
    <div id="replies"></div>
     
    </div><br>
    <div class="row room" >
    @if(session()->has('login'))
    <div class="alert alert-warning alert-dismissible text-center col-12" role="alert"  >
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>{{ session()->get('login') }}</strong>
    </div>
    @endif
       <div class="col-md-6 mx-auto">
          <div>
            <div class="card border-secondary" >
                <div class="card-header">
                </div>
                <div class="card-body">
                    <form class="form" method="POST" role="form" action="{{ url('/reply') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            
                            @if ($errors->has('message'))
                                    <span class="help-block text-warning">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span><br>
                                @endif
                                <label for="inputPassword3">reply message</label>
                            <textarea  name="message" class="form-control" id="inputPassword3" placeholder="chart name" required>
                            </textarea>
                            <input type="hidden" name="id" value="{{ $message->id }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-md">Send</button>
                            <a class="btn btn-success btn-md" href="{{ url('/chart/'.$navigation->id) }}">Return to chart</a>
                        </div>
                        
                    </form>
                </div>
            </div>
          </div>
        </div>
    </div><br>

          @include('footer');  
        </div>
    </div>
    
@endsection
