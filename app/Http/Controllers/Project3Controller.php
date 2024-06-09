<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class Project3Controller extends Controller
{
    public function input_page()
    {
        return view('project.input_page');
    }

    public function add_info(Request $request)
    {
        $info = new Post;
        $info->name = $request->name;
        $info->age = $request->age;
        $info->weight = $request->weight;
        $info->height = $request->height;

        $info->save();
        return redirect()->back();
    }

    public function view_infos()
    {
        $info = Post::all();
        return view('project.view_infos', compact('info'));
    }

    public function show_bmi($id)
    {
        $info = Post::find($id);
        return view('project.show_bmi', compact('info'));
    }
}
