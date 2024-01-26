<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Major;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.classrooms.index', [
            'items' => Classroom::all(),
            'teachers' => Teacher::all(),
            'majors' => Major::all()
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Classroom::create($data);
        return redirect()->back()->with('success', 'Kelas Berhasil Ditambah');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        Classroom::findOrFail($id)->update($data);
        return redirect()->back()->with('success', 'Kelas Berhasil Ditedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Classroom::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Kelas Berhasil Dihapus');
    }
}
