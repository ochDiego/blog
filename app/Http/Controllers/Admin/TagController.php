<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    
    public function index()
    {
        return view('admin.tags.index');
    }

    public function create()
    {
        //'gray','indigo','red'
        $colors = ['gray' => 'Color gris','indigo' => 'Color indigo','red' => 'Color rojo'];

        return view('admin.tags.create',compact('colors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:45',
            'slug' => 'required|unique:tags',
            'color' => 'required',
        ]);

        $tag = Tag::create($request->all());

        return redirect()->route('admin.tags.edit',$tag)->with('info','Etiqueta creada satisfactoriamente');
    }

    public function edit(Tag $tag)
    {
        $colors = ['gray' => 'Color gris','indigo' => 'Color indigo','red' => 'Color rojo'];

        return view('admin.tags.edit',compact('colors','tag'));
    }

    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => 'required|min:3|max:45',
            'slug' => "required|unique:tags,slug,$tag->id",
            'color' => 'required',
        ]);

        $tag->update($request->all());

        return redirect()->route('admin.tags.edit',$tag)->with('info','Etiqueta actualizada satisfactoriamente');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('admin.tags.index')->with('info','Etiqueta eliminada satisfactoriamente');
    }
}
