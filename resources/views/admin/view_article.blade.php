@extends('admin.template')



@section('title', 'LA LISTE DES ARTICLE- LORYANA')



@section('contents')
<style type="text/css">
    .div_deg {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 60px;
    }
    .table_deg{
        border: 2px solid greenyellow
    }
    th{
        background-color: skyblue;
        color: white;
        font-size: 19px;
        font-weight: bold;
        padding: 15px;
    }
    td{
        border: 1px solid skyblue;
        text-align: center;
    }
</style>
<main>
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" action="{{url('article_search')}}" method="get">
        @csrf
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <div class="div_deg">
        <table class="table_deg">
            <tr>
                <th>Nom_article</th>
                <th>Description</th>
                <th>Categorie</th>
                <th>Marque</th>
                <th>Prix_article</th>
                <th>Image</th>
                <th>Disponibilite_article</th>
                <th>Editer</th>
                <th>Suprimer</th>
            </tr>
            @foreach($article as $articles)
            <tr>
                <td>{{$articles->nom_article}}</td>
                <td>{!!Str::limit($articles->description,50)!!}</td>
                <td>{{$articles->category}}</td>
                <td>{{$articles->marque}}</td>
                <td>{{$articles->prix_article}}</td>
                <td>
                    <img height="120" width="110" src="articles/{{$articles->image}}" >
                </td>
                <td>{{$articles->disponibilite_article}}</td>
                <td>
                    <a class="btn btn-success" href="{{url('update_article', $articles->id)}}">Mettre a jour</a>
                </td>
                <td>
                    <a class="btn btn-danger" href="{{url('delete_article',$articles->id)}}">Suprimer</a>
                </td>
            </tr>
            @endforeach
        </table>


    </div>
    <div class="div_deg">

        {{$article->links()}}
    </div>




</main>
@endsection
