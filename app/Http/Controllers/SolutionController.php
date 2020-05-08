<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreSolution;
use Illuminate\Http\Request;
use App\Solution;


class SolutionController extends Controller
{

    public function __construct() {

        \View::composer('solution.index', function ($view) {
            $view->with('solutions', Solution::all());
        });
    }

    public function index () {
    
        return view('solution.index');
    }

    public function show ($solution) {
        $solution = Solution::find($solution);

        return view("solution.update",compact('solution'));
    }

    public function create () {

        return view('solution.create');
    }

    public function store (StoreSolution $request) {
        
        try {
            $solution = Solution::create([
                'name' => $request->name,
                'description' => $request->description
            ]);

            return view('solution.index', compact('solution'));

        } catch(Exception $e) {
            return back()->withInput()->withErrors();
        }

    }

    public function delete ($solution) {
        $solution = Solution::find($solution);

        try{

            if($solution->delete()){
                return view('solution.index')->with('status', $solution->name . ' apagado com sucesso.');
            }

        } catch(PDOException $e) {
            return back()->with('errors', 'Não foi possivel apagar a solução ' . $solution->name);
        }


    }


    public function update (StoreSolution $request) {
        $solution = Solution::find($request->id);

        $solution->name = $request->name;
        $solution->description = $request->description;

        try {
                $solution->save();
                return view('solution.index')->with('status', $solution->name . ' actualizado com sucesso.');
        } catch(PDOException $e) {
                return back()->with('errors', 'Não foi possivel actualizar a solução ' . $solution->name);
        }
    }
}
