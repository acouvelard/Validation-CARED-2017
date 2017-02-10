@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Accueil</div>

            <div class="panel-body" id="presentation">
<!--Présentation des créateurs de Clé de Sol -->
                <h3>Qui sommes-nous ?</h3>
                <p>Nous sommes un petit groupe d'une personne, pasionnés par la musique.
                Nous aimons tous les instruments, quelqu'ils soient.
                Nous aimons rendre hommage aux grands artistes tels que Mozart, Beethoven, Bach,...
                Mais nous respectons aussi les compositeurs moderns tels que Les Beetles, Les Rolling Stones ou ACDC.
                Mais par dessus tout, nous voulons honnorer les instruments de musiques.
                Sans eux, tous ces grands noms seraient rester anonymes : les beetles seraient restés des scarabées;
                les rolling stones seraient toujours de pauvres pierres dévalants un flan de montagne, destinées à brisé la vie (et surtout la voiture rutilante)
                du pauvre homme qui s'était garé sur une place de stationement interdit; et ACDC serait devenu le sigle
                du nouveau club de marche du troisième âge ("Au Cours Des Chemins").
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

@include ('templates.footer')
