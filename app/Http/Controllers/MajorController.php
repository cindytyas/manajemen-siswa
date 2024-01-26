<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.majors.index', ['items' => Major::all()]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Major::create($data);
        return redirect()->back()->with('success', 'Jurusan Berhasil Ditambah');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        Major::findOrFail($id)->update($data);
        return redirect()->back()->with('success', 'Jurusan Berhasil Ditedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Major::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Jurusan Berhasil Dihapus');
    }
}
