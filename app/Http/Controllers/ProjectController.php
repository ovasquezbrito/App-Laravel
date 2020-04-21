<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectRequest;
use App\Project;

use Illuminate\Http\Request;

class ProjectController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        return view('projects.index', [
            'projects' => Project::latest()->paginate()
        ]);
    }

    // Route Model Binding
    public function show(Project $project)
    {

        // Obtener datos por Route Model Binding
        return view('projects.show', [
            'project' => $project
        ]);
        //Obtener datos por el id 
        // return view('projects.show', [
        //     'project' => Project::findOrFail($id)
        // ]);
    }

    public function create(){
        return view('projects.create', [
            'project' => new Project
        ]);
    }

    public function store(SaveProjectRequest $request)
    {
        //Forma 1 de guardar
        //$project = Project::create(request()->only('title', 'url', 'description'));

        //Forma 2 de guardar con validaciones 

        /* $fields = request()->validate([
            'title' => 'required',
            'url' => 'required',
            'description' => 'required',
        ]);

        Project::create($fields); */

        //Forma 3 pasando request o formulario de validación

        Project::create( $request->validated() );


        return redirect()->route('projects.index')->with('status','Proyecto creado con exito.');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request) 
    {
        $project->update($request->validated());

        return redirect()->route('projects.show', $project)->with('status','Proyecto fue actualizado con exito.');;
    }
    
    public function destroy(Project $project) 
    {
        $project->delete();

        return redirect()->route('projects.index')->with('status','Proyecto fue eliminado con exito.');
    }
}
