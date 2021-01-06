<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;

class SectionController extends Controller
{
    const DEPARTMENT = 1;

    public function create () {
        return view('section.create');
    }

    public function index () {
        $sections = Section::all();
        return view('section.index', compact('sections'));
    }


    public function show (Section $section) {
        return view('section.show', compact(section));
    }


    public function store (Request $request) {
        $this->validate($request, [
            'name' => 'required',
        ]);

        try{
            $section = Section::create([
                'name' => $request->name,
                'description' => $request->description,
                'department_id' => self::DEPARTMENT,
            ]);
            
            $request->session()->flash('success', 'Secção criada com sucesso.');
            return view('section.create', compact('section'));

        } catch(PDOException $error) {
            dd($error);
        }
    }
}