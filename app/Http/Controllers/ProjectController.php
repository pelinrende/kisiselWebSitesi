<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{

    public function index() {
        $projects = Project::latest()->get();
        return view('back.projects.index', compact('projects'));
    }

    public function create() {
        return view('back.projects.create');
    }

    public function store(Request $request) {
        $project = new Project();
        $project->title = $request->title;
        $project->slug = Str::slug($request->title);
        $project->content = $request->content;
        $project->link = $request->link;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/images/projects'), $filename);
            $project->image = 'assets/images/projects/' . $filename;
        }

        $project->save();
        return redirect()->route('projects.index')->with('success', 'Proje başarıyla eklendi! ✨');
    }
    public function destroy($id)
{
    $project = Project::findOrFail($id);
    $project->delete();

    return redirect()->back()->with('success', 'Makale başarıyla silindi! 🚀');
}
}
