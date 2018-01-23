@extends('layouts.app')

@section('content')
 
    <div class="row welcome">
      <div class="sidebar col-12 text-center col-sm-3">
      @include('sidebar')
      </div>
      <div class="col-md-9 ml-auto">
      @include('breadcrumb') 
    <h2 class="text-center text-success room">Profile</h2><br>
    <div class="col-12">
    @if(session()->has('message'))
    <div class="alert alert-danger">
    <ul>
            <li>{{ session()->get('message') }}</li>
    </ul>
   </div>
    @endif

    @if (count($errors) > 0)
    <div class="alert alert-danger">

    
    <ul>
        @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
    {!! Form::open(
        array(
            'method' => 'post',
            'route' => 'upload', 
            'class' => 'form', 
            'files' => true)) !!}
    
    <div class="form-group">
        {!! Form::label('Name') !!}
        {!! Form::text('name', Auth::user()->name) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Username') !!}
        {!! Form::text('username', Auth::user()->username, ['readonly'] ) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Profile Image') !!}
        {!! Form::file('image', null) !!}
    <img src="{{Auth::user()->user_image}}" class="img-fluid"/>
    </div>
    
    <div class="form-group text-info">
        {!! Form::submit('Update',array('class'=>'btn-info')) !!}
    </div>
    {!! Form::close() !!}
    
    </div>
           </div><br>
          
        </div>
        @include('footer'); 
    </div>
    
@endsection
