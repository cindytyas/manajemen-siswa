<?php

namespace App\Http\Controllers;

use App\Models\School_fee;
use Illuminate\Http\Request;

class SchoolFeeContoller extends Controller
{
    public function index()
    {
        return view('pages.admin.school-fees.index', [
            'items' => School_fee::all(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        School_fee::create($data);
        return redirect()->back()->with('success', 'SPP Berhasil Ditambah');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        School_fee::findOrFail($id)->update($data);
        return redirect()->back()->with('success', 'SPP Berhasil Ditedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        School_fee::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'SPP Berhasil Dihapus');
    }
}
