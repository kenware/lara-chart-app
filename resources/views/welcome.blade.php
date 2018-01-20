@extends('layouts.app')

@section('content')
 
    <div class="row welcome">
      <div class="sidebar col-md-3">
      @include('sidebar')
      </div>
      <div class="col-md-9 ml-auto">
      @include('breadcrumb') 
    <h2 class="text-center text-success room">{{$titles->count()}} Chart Groups</h2><br>
    <div class="row room">
       
       @foreach ($titles as $title)
        <div class="col-4">
     
        </div>
            <div class="col-4">
             <p class="text-lg"> <a href="{{ url('/chart/'.$title->id.'/#message')}}"> {{ $title->name }}</a></p>
            </div>
            <div class="col-4">{{ $title->created_at }}
            </div>                
           @endforeach
           </div><br>
          @include('footer');  
        </div>
    </div>
    
@endsection
