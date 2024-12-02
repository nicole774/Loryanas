@extends('admin.template')



@section('title', 'Mise a jour - LORYANA')



@section('contents')
    <style type="text/css">
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h1 {
            color: black;
        }

        label {
            display: inline-block;
            width: 300px;
            padding: 20px;
            color: black !important;
            font-size: 25px !important;
        }

        input[type="text"] {
            width: 250px;
            height: 40px;
        }

        textarea {
            width: 450px;
            height: 100px;
        }

        .input_deg {
            padding: 10px;
        }
    </style>
    <main>
        <h2>Mettre a jour un article</h2>
        <div class="div_deg">
            <form action="{{ url('edit_article', $data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label>Nom_article</label>
                    <input type="text" name="nom_article" value="{{ $data->nom_article }}">
                </div>
                <div class="input_deg">
                    <label>Description</label>
                    <textarea name="description" required>{{ $data->description }}</textarea>
                </div>
                <div class="input_deg">
                    <label>Category_article</label>
                    <select name="category">
                        <option value="{{ $data->category }}">{{ $data->category }}</option>
                        @foreach ($category as $category)
                            <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="input_deg">
                    <label>Marque_article</label>
                    <select name="marque">
                        <option value="{{ $data->marque }}">{{ $data->marque }}</option>
                        @foreach ($marque as $marque)
                            <option value="{{ $marque->marque_name }}">{{ $marque->marque_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input_deg">
                    <label>Prix_article</label>
                    <input type="text" name="prix_article" value="{{ $data->prix_article }}">
                </div>
                <div class="input_deg">
                    <label>Current Image</label>
                    <img width="100" src="/articles/{{ $data->image }}">
                </div>
                <div class="input_deg">
                    <label for="">New Image</label>
                    <input type="file" name="image">
                </div>
                <div class="input_deg">
                    <label>Disponibilite_article</label>
                    <select name="disponibilite_article">
                        <option value="{{ $data->disponibilite_article }}">{{ $data->disponibilite_article }}</option>
                    </select>
                </div>
                <div>
                    <input class="btn btn-success" type="submit" value="Update Arrticle">
                </div>
            </form>
        </div>

    </main>
@endsection
