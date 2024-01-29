<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectContoller extends Controller
{
    public function index(Request $request)
    {
        $groupofsubject = $request->input('group_of_subject');

        if ($groupofsubject) {
            $subject = Subject::where('group_of_subject', '=', $groupofsubject)->get();
        } else {
            $subject = Subject::all();
        }


        return view('pages.admin.subjects.index', [
            'subjects' => $subject,
            'datas' => Subject::all(),
            'title' => 'Daftar Mapel',
            'kelompok' => 'Semua Kelompok'
        ]);
    }

    public function filter(Request $request)
    {
        $groupofsubject = $request->input('group');
        $subjects = Subject::where('group', $groupofsubject)->get();

        return view('pages.admin.subjects.index', [
            'subjects' => $subjects,
            'datas' => Subject::all(),
            'title' => 'Daftar mapel',
            'kelompok' => $request->group_of_subject
        ]);
    }

    public function create()
    {
        return view('pages.admin.subjects.create', [
            'title' => 'Tambah Mapel',
            'subjects' => Subject::all()
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Subject::create($data);
        // return redirect()->back()->with('success', 'Mapel berhasil ditambahkan');
        route('mapel.index');
    }

    public function edit($id)
    {
        return view('pages.admin.subjects.edit', [
            'item' => Subject::findOrFail($id),
            'subjects' => Subject::all(),
            'title' => 'Edit Mapel'
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        Subject::findOrFail($id)->update($data);
        // return redirect()->back()->with('SUCCESS', 'Mapel berhasil diedit');
        route('mapel.index');
    }

    public function destroy($id)
    {
        Subject::findOrFail($id)->delete();
        return redirect()->back()->with('SUCCESS', 'Mapel berhasil dihapus');
    }
}
