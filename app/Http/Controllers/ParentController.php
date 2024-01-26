<?php

namespace App\Http\Controllers;

use App\Models\Parents;
use App\Models\Student;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    public function index()
    {
        return view('pages.admin.students.parents.index', [
            'parents' => Parents::all(),
            'students' => Student::all(),
            'title' => 'Wali Murid'
        ]);
    }

    public function orang_tua($id)
    {
        return view('pages.admin.students.parents.index', [
            'parents' => Parents::where('student_id', $id)->get(),
            'students' => Student::findOrFail($id),
            'title' => 'Wali Murid'
        ]);
    }

    public function create($id)
    {
        return view('pages.admin.students.parents.create', [
            'title' => 'Tambah Wali Murid',
            'students' => Student::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        Parents::create($data);

        return redirect()->route('orang-tua.index', $request->student_id)->with('success', 'Wali murid berhasil ditambahkan');
    }

    public function edit($id, $id_ortu)
    {
        return view('pages.admin.students.parents.edit', [
            'item' => Parents::findOrFail($id_ortu),
            'students' => Student::findOrFail($id),
            'title' => 'Edit Wali Murid'
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        Parents::findOrFail($id)->update($data);
        return redirect()->route('orang-tua.index', $request->student_id)->with('SUCCESS', 'Wali murid berhasil diedit');
    }

    public function destroy($id)
    {
        Parents::findOrFail($id)->delete();
        return redirect()->back()->with('SUCCESS', 'Wali murid berhasil dihapus');
    }
}
