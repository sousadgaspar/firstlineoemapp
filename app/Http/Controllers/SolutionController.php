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

    public function show () {

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
}
