@extends('admin.template')



@section('title', 'CATEGORY- LORYANA')



@section('contents')
<main>
    <style type="text/css">

        input[type="text"]
        {
            width: 400px;
            height:50px;
        }
        .div_deg{
            display:flex;
            justify-content:center;
            align-items: center;
            margin: 30px;
        }
        .table_deg{
            text-align: center;
            margin: auto;
            border: 2px solid yellowgreen;
            margin-top: 50px;
            width: 600px ;
        }
        th{
            background-color:skyblue;
            padding: 15px;
            font-size: 20px;
            font-weight:bold;
            color : white;
        }
        td{
            color: white;
            padding:10px;
            border: 1px solid skyblue;
        }
    </style>
    <div>
        <h1 style="color:black">Add Category</h1>
        <div class="div_deg">
            <form action="{{route('add_category')}}" method="post">
                @csrf
                <div>
                    <input type="text" name="category">
                    <input class="btn btn-primary" type="submit" value="Add Category">
                </div>
            </form>

        </div>
        <div>
            <table class="table_deg">
                <tr>
                    <th>Category name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach($data as $data)
                <tr>
                    <td style="color: black">{{$data->category_name}}</td>
                    <td>
                        <a class='btn btn-success' href="{{route('edit_category',$data->id)}}">Edit</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" onclick="confirmation(event)" href="{{route('delete_category',$data->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>

    </div>
</main>
@endsection

