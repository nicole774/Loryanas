<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;
use App\Models\Marque;

class AdminController extends Controller
{
    //  la liste des catégories
    public function category(){
        $data = Category::all();
        return view('admin.category', compact('data'));
    }
    //  la liste des marques
    public function marque(){
        $data = Marque::all();
        return view('admin.marque', compact('data'));
    }

    // Supprimer une catégorie
    public function delete_category($id){
        $data = Category::findOrFail($id);
        $data->delete();

        return redirect()->back()->with('success', 'Catégorie supprimée avec succès');
    }
    // Supprimer une marque
    public function delete_marque($id){
        $data = Marque::findOrFail($id);
        $data->delete();

        return redirect()->back()->with('success', 'Marque supprimée avec succès');
    }

    // éditer une catégorie
    public function edit_category($id){
        $data = Category::findOrFail($id);
        return view('admin.edit_category', compact('data'));
    }
     // éditer une marque
    public function edit_marque($id){
        $data = Marque::findOrFail($id);
        return view('admin.edit_marque', compact('data'));
    }


    // Mettre à jour une catégorie
    public function update_category(Request $request, $id){
        $request->validate([
            'category' => 'required|string|max:255'
        ]);
        $data = Category::findOrFail($id);
        $data->category_name = $request->category;
        $data->save();

        return redirect()->route('category')->with('success', 'Category mise à jour avec succès');
    }
    // Mettre à jour une marque
    public function update_marque(Request $request, $id){
        $request->validate([
            'marque' => 'required|string|max:255'
        ]);
        $data = Marque::findOrFail($id);
        $data->marque_name = $request->marque;
        $data->save();

        return redirect()->route('marque')->with('success', 'Marque mise à jour avec succès');
    }

    // Afficher la page des articles
    public function article(){
        return view('admin.article');
    }

    // Ajouter une nouvelle catégorie
    public function add_category(Request $request){
        $request->validate([
            'category' => 'required|string|max:255'
        ]);
        $category = new Category;
        $category->category_name = $request->category;
        $category->save();

        return redirect()->route('category')->with('success', 'Catégorie ajoutée avec succès');
    }
    // Ajouter une nouvelle Marque
    public function add_marque(Request $request){
        $request->validate([
            'marque' => 'required|string|max:255'
        ]);
        $marque = new Marque;
        $marque->marque_name = $request->marque;
        $marque->save();

        return redirect()->route('marque')->with('success', 'Marque ajoutée avec succès');
    }
    public function ajouter_article(){
        $category = Category::all();
        $marque = Marque::all();
        return view('admin.ajouter_article', compact('category','marque'));
    }


    public function upload_article(Request $request){
        $data = new Article;
        $data->nom_article= $request->nom_article;
        $data->description= $request->description;
        $data->category= $request->category;
        $data->marque= $request->marque;
        $data->prix_article= $request->prix_article;
        $image = $request->image;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('articles',$imagename);
            $data->image = $imagename;
        }
        $data->disponibilite_article= $request->disponibilite_article;
        $data->save();
        return redirect()->back();
    }
    public function view_article(){
        $article = Article::paginate(3 );
        return view('admin.view_article', compact('article'));
    }

    public function delete_article($id){
        $data = Article::find($id);
        $image_path = public_path('articles/'.$data->image);
        if(file_exists($image_path)){
            unlink($image_path);
        }
        $data->delete();
        return redirect()->back();
    }

    public function update_article($id){
        $data = Article::find($id);
        $category = Category::all();
        $marque = Marque::all();
        return view('admin.update_page', compact('data', 'category', 'marque'));
    }



    public function edit_article(Request $request, $id){
        $data = Article::find($id);
        $data->nom_article = $request->nom_article;
        $data->description = $request->description;
        $data->category = $request->category;
        $data->marque = $request->marque;
        $data->prix_article = $request->prix_article;
        $image = $request->image;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('articles',$imagename);
            $data->image = $imagename;
        }
        $data->disponibilite_article= $request->disponibilite_article;
        $data->save();
        return redirect('/view_article');
    }

    public function article_search($id){
        
    }


}
