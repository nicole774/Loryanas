<!-- Appel du template.blade.php -->
@extends('admin.template')

<!-- Section pour ajouter le titre de la page Contact uniquement -->
@section('title', 'Editer_category- LoryAna')


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
        <h1 style="color: black">Update Category</h1>
        <div class="div_deg">
            <form action="{{ url('update_category', $data->id) }}" method="post">
                @csrf
                <input type="text" name='category' value= "{{ $data->category_name }}">
                <input class="btn btn-primary" type="submit" value= 'Update Category'>
            </form>
        </div>
    </div>
@endsection
