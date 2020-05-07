<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreSolution;
use Illuminate\Http\Request;
use App\Solution;


class SolutionController extends Controller
{
    public function index () {
        $solutions = Solution::all();

        return view('solution.index', compact('solutions'));
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
        dd("You're trying to delete " . $solution);
    }


    public function update (StoreSolution $request) {
        $solution = Solution::find($request->id);

        $solution->name = $request->name;
        $solution->description = $request->description;

        try {
                $solution->save();
                $request->session()->flash('status', 'Solução actualizada com sucesso.');
                return view('solution.index');
        } catch(PDOException $e) {

        }
    }
}
