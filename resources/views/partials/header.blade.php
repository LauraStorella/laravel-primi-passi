<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">

      {{-- Left menu --}}
      <div class="logo">
      <img src="{{asset('img/boolean-logo.png')}}" alt="Boolean-Logo">
      </div>

      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Corso</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Dopo il corso</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Lezione gratuita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Assumi i nostri studenti</a>
        </li>
      </ul>
    </div>
  </nav>
</header>



{{-- <header>
  <nav>
    
    <div class="logo">
     <img src="{{asset('img/boolean-logo.png')}}" alt="Boolean-Logo">
    </div>

    
    <div class="nav-links">
      <ul class="nav-link">
      <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="">Corso</a></li>
        <li><a href="">Dopo il Corso</a></li>
        <li><a href="">Lezione Gratuita</a></li>
        <li><a href="">Assumi i nostri studenti</a></li>
      </ul>
    </div>
  </nav>
</header> --}}