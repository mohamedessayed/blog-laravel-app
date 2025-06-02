<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('app.blog')}}">blog</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{route('app.service')}}">services</a>
          </li>
        </ul>
              @if (Config::get('app.locale') === 'en')
                  <a class="nav-link mx-1" href="{{route('ar')}}">ar</a>
                  @else
              <a class="nav-link mx-1" href="{{route('en')}}">en</a>

              @endif

            @guest
              <a class="nav-link mx-1" href="{{route('login')}}">@lang('app.login')</a>
              <a class="nav-link mx-1" href="{{route('signup')}}">@lang('app.signup')</a>   
            @endguest

            @auth
                <a class="nav-link mx-1" href="{{route('logout')}}">@lang('app.logout')</a>
                <a class="nav-link mx-1" href="{{route('book.index')}}">@lang('app.dashboard')</a> 
            @endauth

        
      </div>
    </div>
  </nav>