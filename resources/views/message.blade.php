@extends('layouts.app')

@section('content')
 
    <div class="row welcome">
      <div class="sidebar col-md-3">
        @include('sidebar')
      </div>
      <div class="col-md-9 ml-auto">
        @include('breadcrumb') 
        <h2 class="text-center text-success room">{{$navigation->name}}</h2>
        <h4 class="text-center text-success room text-muted">{{$messages->count()}} Messages</h4>
    <div class="row room">
      @foreach ($messages as $message)
        <div class="card my-4 col-10">           
            <div class="card-body">
              <p class="card-text text-justify text-center">
              {{ $message->message }}
             </p>
            </div>
      <div class="card-footer text-muted text-success">
            <p class="text-info">  Sent on: {{ $message->created_at }}<br/>
              By: <img src="{{ $message->user_image }}" height="40px" width="40px" 
              class="rouded0image"/> &nbsp; {{ $message->user_name }} 
            </p>
            <a class="btn btn-outline-success btn-sm">
                 <i class="fa fa-thumbs-up text-primary" aria-hidden="true"></i>&nbsp;
                 likes
           </a>
           <a class="btn btn-outline-success btn-sm" href="{{ url('/reply/'.$message->id.'/#replies')}}">
                 <i class="fa fa-thumbs-up text-primary" aria-hidden="true"></i>&nbsp;
                {{$message->replies()->count()}} reply
           </a>
      </div>
    </div>               
           @endforeach
    <div id="message"></div>
      @if(session()->has('login'))
    <div class="alert alert-warning alert-dismissible text-center" role="alert" >
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>{{ session()->get('login') }}</strong>
    </div>
    @endif
    </div><br>
    <div class="row room" >
       <div class="col-md-6 mx-auto">
          <div>
            <div class="card border-secondary" >
                <div class="card-header">
                </div>
                <div class="card-body">
                    <form class="form" method="POST" role="form" action="{{ url('/sendMessage') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="inputPassword3">Message</label>
                            <textarea  name="message" class="form-control" id="inputPassword3" placeholder="chart name" required>
                            </textarea>
                            <input type="hidden" name="id" value="{{ $navigation->id }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-mm">Send</button>
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
