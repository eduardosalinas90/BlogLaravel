<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Http\Requests\CategorieRequest;

class CategoriesController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $categorias = Category::orderBy('id','ASC')->paginate(10);
        return view('admin.categories.index')->with('categories',$categorias);
    }

    public function store(Request $request){

        $category = new Category($request->all());
        $category->save();

        flash('Categoria registrado de forma exitosa','Registro de Categoria')->success();
        return redirect()->route('admin.categories.index');

    }

    public function create(Request $request){

        return view('admin.categories.create');
    }

     public function edit(Request $request, $id){

        $categoria = Category::find($id);

        return view('admin.categories.edit')->with('categoria',$categoria);
    }

     public function update(Request $request, $id){

        $categoria = Category::find($id);
        $categoria->fill($request->all());
        $categoria->save();
        flash('Categoria actualizado exitosamente')->success();
        return redirect()->route('admin.categories.index');
    }

     public function destroy(Request $request, $id){

        $categoria = Category::find($id);
        $categoria->delete();
        flash('Categoria eliminado de forma exitosa')->error();
        return redirect()->route('admin.categories.index');

    }

}
