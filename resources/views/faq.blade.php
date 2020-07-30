@extends('layouts.app')  {{-- estendo il layout --}}


@section('title')
  FAQ
@endsection


@section('content')
{{-- Main --}}
<div class="content-wrapper">
  <main>
    <section>
      @foreach ($faqs as $faq)
        <h2>{{ $faq['question'] }}</h2>
        <p>{{ $faq['answer'] }}</p>
      @endforeach
    </section> 
  </main>
</div>
@endsection