@extends('admin.template')



@section('title', 'AJOUER_ARTICLE- LORYANA')



@section('contents')
    <style type="text/css">
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }

        h1 {
            color: black;
        }

        label {
            display: inline-block;
            width: 300px;
            color: black !important;
            font-size: 25px !important;
        }

        input[type="text"] {
            width: 300px;
            height: 40px;
        }

        textarea {
            width: 400px;
            height: 50px;
        }

        .input_deg {
            padding: 15px;
        }
    </style>
    <main>

        <h1>Ajouter un article</h1>
        <div class="div_deg">
            <form action="{{ url('upload_article') }}" method="Post" enctype="multipart/form-data">
                @csrf
                <div class="input_deg">
                    <label for="">Nom_article</label>
                    <input type="text" name="nom_article">
                </div>

                <div class="input_deg">
                    <label for="">Description</label>
                    <textarea name="description" required></textarea>
                </div>
                <div class="input_deg">
                    <label for="">Category_article</label>
                    <select name="category" required>
                        <option>Choisir une category</option>
                        @foreach ($category as $category)
                            <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="input_deg">
                    <label for="">Marque_article</label>
                    <select name="marque" required>
                        <option>Choisir une marque</option>
                        @foreach ($marque as $marque)
                            <option value="{{ $marque->marque_name }}">{{ $marque->marque_name }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="input_deg">
                    <label for="">Prix_article</label>
                    <input type="text" name="prix_article">
                </div>
                <div class="input_deg">
                    <label for="">Image</label>
                    <input type="file" name="image">
                </div>
                <div class="input_deg">
                    <label for="">Disponibilite_article</label>
                    <select name="disponibilite_article" required>
                        <option>Disponible</option>
                        <option>Nom_Disponible</option>
                    </select>
                </div>
                <div class="input_deg">
                    <input class="btn btn-success" type="submit" value="Ajouter un article">
                </div>
            </form>
        </div>
    </main>
@endsection
