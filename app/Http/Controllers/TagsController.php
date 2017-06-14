<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tag;
use App\Http\Requests\TagRequest;

class TagsController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        $tags = Tag::Search($request->name)->orderBy('id','ASC')->paginate(10);
        return view('admin.tags.index')->with('tags',$tags);
    }

    public function store(TagRequest $request){

        $tag = new Tag($request->all());
        $tag->save();

        flash('Tag registrado de forma exitosa','Registro de Categoria')->success();
        return redirect()->route('admin.tags.index');

    }

    public function create(Request $request){

        return view('admin.tags.create');
    }

     public function edit(Request $request, $id){

        $tag = Tag::find($id);

        return view('admin.tags.edit')->with('tag',$tag);
    }

     public function update(Request $request, $id){

        $tag = Tag::find($id);
        $tag->fill($request->all());
        $tag->save();
        flash('Tag actualizado exitosamente')->success();
        return redirect()->route('admin.tags.index');
    }

     public function destroy(Request $request, $id){

        $tag = Tag::find($id);
        $tag->delete();
        flash('Tag eliminado de forma exitosa')->error();
        return redirect()->route('admin.tags.index');

    }
}
