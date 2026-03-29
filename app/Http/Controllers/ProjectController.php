<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Skill;

class ProjectController extends Controller
{
    public function index() 
{
        $projects = Project::all();
    $skills = Skill::all();
        return view('portofolio.portofolio', compact('skills', 'projects'));
    }

    // Form tambah project
    public function create() {
        $skills = Skill::all();
        return view('admin.projects.create', compact('skills'));
    }

    // Simpan project baru
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Project::create($request->all());
        return redirect()->route('dashboard')->with('success', 'Project berhasil dibuat');
    }

    // Form edit project
    public function edit(Project $project) {
        return view('admin.projects.edit', compact('project'));
    }

    // Update project
    public function update(Request $request, Project $project) {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $project->update($request->all());
        return redirect()->route('projects.index')->with('success', 'Project berhasil diupdate');
    }

    // Hapus project
    public function destroy(Project $project) {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project berhasil dihapus');
    }

    public function adminIndex() {
    $projects = Project::all();
    return view('admin.projects.index', compact('projects'));
    }

    public function dashboard() {
    $projects = Project::all(); // ambil semua project untuk ditampilkan
    return view('dashboard', compact('projects'));
    }
}
