<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Conference;

class ConferenceController extends Controller
{
    public function index()
    {
        $conferences = new Conference();

        return view('home.index', ['conferences' => $conferences->all()]);
    }

    public function create()
    {
        return view('home.create');
    }

    public function update($id)
    {
        $conference = Conference::findOrFail($id);

        return view('home.update', ['conference' => $conference]);
    }

    public function submit(Request $request)
    {
        $conference = new Conference();

        $conference->name = $request->input('name');
        $conference->description = $request->input('description');
        $conference->date = $request->input('date');
        $conference->location = $request->input('location');

        $conference->save();

        return redirect('/');
    }

    public function edit(Request $request)
    {
        $conference = Conference::findOrFail($request->input('id'));

        $conference->name = $request->input('name');
        $conference->description = $request->input('description');
        $conference->date = $request->input('date');
        $conference->location = $request->input('location');
        $conference->save();

        return redirect('/');
    }

    public function delete($id)
    {
        Conference::destroy($id);

        return redirect('/');
    }
}
