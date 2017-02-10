@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Vitrine</div>

            <div class="panel-body" id="instruments">
<!--Affichage des instruments avec l'image, le nom et le type (corde, vent ou percution) -->
              @foreach ($instruments as $instrument)
                <div class="instrument">
                  <img src="/img/{{ $instrument->img}}"/>
                  <p>
                    <span>Instrument : {{ $instrument->name }}</span>
                    <span>Type : {{ $instrument->type }}</span>
                  </p>
                </div>
              @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@include ('templates.footer')
