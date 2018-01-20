     

    <header class="container page-header row justify-center">
           <div class="col-md-6 col-lg-8" >
             <h2 class="float-left text-sm-left" id="dash">Messanger</h2>
           </div>
           <div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right">
             <a class="btn btn-stripped dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             @if (Auth::user())
             <div><img src="{{{Auth::user()->user_image}}}" alt="profile photo" class="rounded-circle float-left profile-photo" width="50" height="auto"/></div>
             
                  
                  <h6 class="text-muted">
                   
                   {{Auth::user()->username}}
                 
                </h6>
                @endif
              </a>
              <div class="dropdown-menu dropdown-menu-right" style="right: 1.5rem;" aria-labelledby="dropdownMenuLink"><a class="dropdown-item"><em class="fa fa-user-circle mr-1"></em> View Profile</a>
                 <a class="dropdown-item" href="#">
                   <em class="fa fa-sliders mr-1"></em> Preferences
                 </a>
                 <a class="btn dropdown-item">
                   <em class="fa fa-power-off mr-1"></em> Logout
                 </a>
              </div>
           </div>
           <div class="clear"></div>
         </header>
         <div class="row">
                <div class="col-2">
                
                    Categories:
                </div>
                <div class="col-1">
                <a class="" href="{{ url('/category/vacancy')}}"> 
                    Vacancy
                </a>
                </div>
                <div class="col-1">
                <a class="" href="{{ url('/category/sports')}}"> 
                    Sports
                 </a>
                </div>
                <div class="col-1">
                 <a class="" href="{{ url('/category/politics')}}">
                    Politics
                 </a>
                </div>
                <div class="col-1">
                  <a class="" href="{{ url('/category/musics')}}">
                    Music
                  </a>   
                </div>
                <div class="col-1">
                <a class="" href="{{ url('/category/videos')}}">
                    Videos
                </a>
                </div>
                <div class="col-1">
                <a class="" href="{{ url('/category/movies')}}">
                    Movies
                </a>    
                </div>
                <div class="col-1">
                <a class="" href="{{ url('/category/hobies')}}">
                    Hobies
                </a>    
                </div>
                <div class="col-1">
                <a class="" href="{{ url('/category/schools')}}">
                    Schools
                </a>
                </div>
                <div class="col-1">
                <a class="" href="{{ url('/category/travels')}}">
                    Travels
                </a>
                </div>
                <div class="col-1">
                <a class="" href="{{ url('/category/love')}}">
                    love
                </a>
                </div>
              </div>
         <div class="row">
         <main class="main col-sm-12">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
            @if($navigation)
             @if($navigation=='true')
             <li class="breadcrumb-item active text-info">
            {{$category}}
            </li>            
            @else
            <li class="breadcrumb-item active text-info">
            {{$navigation->category}}          
            </li>
            <li class="breadcrumb-item active text-info">
            {{$navigation->name}}
            </li>
            @endif
            @endif
          </ol>
         </main>
         
    </div>