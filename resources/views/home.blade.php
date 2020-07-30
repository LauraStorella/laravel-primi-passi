{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>Boolean.Careers | Corso Web Dev</title>
</head>
<body>

  
  @include('partials.header') --}}

  @extends('layouts.app')  {{-- estendo il layout --}}


  @section('title')
    Privacy Policy
  @endsection


  @section('content')      {{-- aggiungo contenuto in placeholder @yield --}}
  
  {{-- Main --}}
  {{-- <div class="content-wrapper">
  </div> --}}

  <main>
    <section class="jumbotron jumbo-home">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <h1>Diventa Sviluppatore Web</h1>
            
            <p>Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</p>
    
            <ul>
              <li>6 mesi di corso intensivo online in diretta</li>
              <li>Nessuna competenza di programmazione richiesta</li>
              <li>Siamo certi del tuo successo, altrimenti ti rimborsiamo</li>
            </ul>
          </div>

          <div class="col-6">
            <img src="{{asset('img/pc-black-gif.gif')}}" alt="Videolezione live">
          </div>
        </div>
      </div>
    </section>

    <section">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <h1>Diventa Sviluppatore Web</h1>
            
            <p>Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</p>
    
            <ul>
              <li>6 mesi di corso intensivo online in diretta</li>
              <li>Nessuna competenza di programmazione richiesta</li>
              <li>Siamo certi del tuo successo, altrimenti ti rimborsiamo</li>
            </ul>
          </div>

          <div class="col-6">
            <img src="{{asset('img/pc-black-gif.gif')}}" alt="Videolezione live">
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-6">
            <h1>Diventa Sviluppatore Web</h1>
            
            <p>Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</p>
    
            <ul>
              <li>6 mesi di corso intensivo online in diretta</li>
              <li>Nessuna competenza di programmazione richiesta</li>
              <li>Siamo certi del tuo successo, altrimenti ti rimborsiamo</li>
            </ul>
          </div>

          <div class="col-6">
            <img src="{{asset('img/pc-black-gif.gif')}}" alt="Videolezione live">
          </div>
        </div>
      </div>
    </section>
  </main>

  @endsection




  {{-- NO Bootstrap --}}
  {{-- <div class="container">
    <div class="row">
      <div class="col-6">
        <main>
          <section id="jumbotron jumbo-home">
            <h1>Diventa Sviluppatore Web</h1>
            
            <p>Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</p>
    
            <ul>
              <li>6 mesi di corso intensivo online in diretta</li>
              <li>Nessuna competenza di programmazione richiesta</li>
              <li>Siamo certi del tuo successo, altrimenti ti rimborsiamo</li>
            </ul>
          </section>
        </main>
      </div>
    </div>
  </div> --}}
      
  


  


  
  {{-- @include('partials.footer')
  
</body>
</html> --}}