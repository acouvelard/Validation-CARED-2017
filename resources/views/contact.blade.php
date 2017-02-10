@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Laisser un message</div>

            <div class="panel-body" id="contact">
<!--Formulaire pour laisser un message avec son nom et un objet -->
              {{ Form::open(['url' => 'contact/new']) }}
              <div>
                {{ Form::label('name','Votre nom : ')}}
                {{ Form::text('name')}}
              </div>
              <div>
                {{ Form::label('objet','Object du message : ')}}
                {{ Form::text('object')}}
              </div>
              <div>
                {{ Form::label('message','Message : ')}}
                {{ Form::textarea('message')}}
              </div>
              <div>
                {{ Form::submit('Envoyer')}}
              </div>
              {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection

@include ('templates.footer')
