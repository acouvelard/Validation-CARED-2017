@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Messages reçus</div>

            <div class="panel-body" id="messages">
<!--Affichage des messages laissés pas les utilisateurs avec le nom et l'objet-->
                @if (! empty($messages))
                  @foreach ($messages as $message)
                    <p>
                      <b>{{ $message->name }}</b> (
                      {{ $message->object }} ) :
                      <br>
                      {{ $message->message }}
                    </p>
                  @endforeach
                @elseif (! empty($message))
                  <p>
                    <b>{{ $message->name }}</b> (
                    {{ $message->object }} ) :
                    <br>
                    {{ $message->message }}
                  </p>
                @else
                  Aucun message reçu, t'as pas d'amis...
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

@include ('templates.footer')
