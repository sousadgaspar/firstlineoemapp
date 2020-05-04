<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solution;

class SolutionController extends Controller
{
    public function index () {

    }

    public function show () {

    }

    public function create () {
        return view('solution.create');
    }

    public function store (Request $request) {

        $this->validate($request, [
            'name' => 'required',
        ]);

        $solution = new Solution();
        $solution->name = $request->name;
        $solution->description = $request->description;

        try {
            $solution->save();

            $this->back();
        } catch(Exception $e) {
            $this->back()->withData()->withErrors();
        }

    }
}
