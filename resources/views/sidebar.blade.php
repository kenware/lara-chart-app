<ul class="nav">
       <li><br><br> <a id="add" class="btn text-info nav-link">Add Chart</a></li>
       <div class="row room">
          <div id="chart">
            @if (Auth::user())
            <div class="card border-secondary">
                <div class="card-header">
                    <h3 class="mb-0 my-2 text-center text-info">Create Chart Room</h3>
                    
                </div>
                <div class="card-body" id="chart">
                    <form class="form" method="POST" role="form" action="{{ url('/room') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="inputEmail3">Categories</label>
                            <select name="category">
                            <option value="politics">Politics</option>
                            <option value="vacancy">vacancy</option><option value="sports">Sports</option>
                            <option value="musics">Musics</option><option value="videos">Videos</option>
                            <option value="movies">Movies</option><option value="hobies">Hobies</option>
                            <option value="schools">Schools</option><option value="travels">Travels</option>
                            <option value="love">Love</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3">Name</label>
                            <input type="text"  name="name" class="form-control" id="inputPassword3" placeholder="chart name" title="At least 6 characters with letters and numbers" required/>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-lg">Create</button>
                        </div>
                        
                    </form>
                </div>
            </div>
            @else
             <div class="alert alert-warning alert-dismissible" role="alert" >
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>Please login to add a chart Room</strong>
             </div>
            @endif
          </div>
        </div>
        @if(session()->has('status'))
        <div class="alert alert-warning alert-dismissible text-center" role="alert" >
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>{{ session()->get('status') }}</strong>
        </div>
        @endif
</ul>