<!-- Appel du template.blade.php -->
@extends('admin.template')

<!-- Section pour ajouter le titre de la page Contact uniquement -->
@section('title', 'Editer_marque- LoryAna')


<!-- Section pour le contenu de la page Contact uniquement -->
@section('contents')
    <style type="text/css">
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }

        input[type="text"] {
            width: 400px;
            height: 50px;
        }
    </style>
    <div class="container-fluid">
        <h1 style="color: black">Mettre a jour une marque</h1>
        <div class="div_deg">
            <form action="{{ url('update_marque', $data->id) }}" method="post">
                @csrf
                <input type="text" name='marque' value= "{{ $data->marque_name }}">
                <input class="btn btn-primary" type="submit" value= 'Update Marque'>
            </form>
        </div>
    </div>
@endsection
