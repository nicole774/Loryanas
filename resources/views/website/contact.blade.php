<!-- Appel du template.blade.php -->
@extends('website.template')

<!-- Section pour ajouter le titre de la page Contact uniquement -->
@section('title', 'Nous contacter - LoryAna')


<!-- Section pour le contenu de la page Contact uniquement -->
@section('content')

<div class="contact-area d-flex align-items-center">

    <div class="google-map">
        <div id="googleMap"></div>
    </div>

    <div class="contact-info">
        <h2>Comment nous trouver</h2>
        <p>Mauris viverra cursus ante laoreet eleifend. Donec vel fringilla ante. Aenean finibus velit id urna vehicula, nec maximus est sollicitudin.</p>

        <div class="contact-address mt-50">
            <p><span>address:</span> Ouagadougou</p>
            <p><span>telephone:</span>+226-75-58-54-63</p>
            <p><a href="mailto:contact@loryana.com">contact@loryana.com</a></p>
        </div>
    </div>

</div>

@endsection









<!-- Section pour ajouter des scripts au besoin -->
@section('scripts')

    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="js/map-active.js"></script>

@endsection
