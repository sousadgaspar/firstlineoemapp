<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\Solution;

class GroupController extends Controller
{
    public function index() {

    }

    public function create() {
        $solutions = Solution::all();
        return view('group.create', compact('solutions'));
    }

    public function show($id) {

    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'solution_id' => 'required',
        ]);

        try{
            $group = Group::create([
                'name' => $request->name,
                'description' => $request->description,
                'solution_id' => $request->solution_id,
            ]);

            $solutions = Solution::all();
            $request->session()->flash('message', 'Grupo criado com sucesso');
            return view('group.create', compact('solutions'));
        } catch(PDOException $error) {
            $request->session()->flash('fail', 'Erro ao gravar os dados do grupo. ' . $error->getMessage());
            return view('group.create');
        }




    }
}
