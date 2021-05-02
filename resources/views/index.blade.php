@extends('layouts.default')
@section('content')
  <!-- Presentation -->
  @if(!auth()->check())
    <div class="text-center pt-5">
      <h3 class="text-3xl mb-5">Bienvenue sur Narrative !</h3>
      <p class="text-lg px-2">
        Mais qu'est-ce que Narrative me direz-vous ?<br>
        Narrative est un réseau social offrant la possibilité à ses inscrits de partager histoires, récits et fables !<br>
        Bien sûre, les visiteurs ne sont pas laisser pour compte !<br>
        Ils pourront librement se balader sur le site et lire tout le contenue proposé par les nombreux membres !<br>
        Seules les inscrits pourront laisser un like et partager leurs propres création !
      </p>
    </div>
  @endif

  <!-- Posts & Form -->
  <div class="p-6 bg-white border-b border-gray-200">
    @if(auth()->check())
      <livewire:form />
    @endif
    <livewire:posts />
  </div>
@endsection