@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <h4 class="fw-bold mb-5">Tambah Mata Pelajaran</h4>

            <div class="card border-0">
                <div class="card-body p-4">
                    <form action="{{ route('mapel.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="subject_name">Mata Palajaran</label>
                                <input type="text" name="subject_name" id="subject_name" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="teacher_name">Guru Pengampu</label>
                                <input type="text" name="teacher_name" id="teacher_name" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="group">Kelompok</label>
                                <select name="group" id="group" class="form-control">
                                    <option value="Kelompok 1">Kelompok 1 (Pelajaran Wajib)</option>
                                    <option value="Kelompok 2">Kelompok 2 (Kejuruan)</option>
                                    <option value="Kelompok 3">Kelompok 3 (Peminatan)</option>
                                </select>
                            </div>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">Simpan Baru</button>
                            <a href="{{ route('mapel.index') }}" class="btn btn-secondary">Batal</a>
                        </div>
                </div>
                </form>
            </div>
        </div>
        </div>
    </section>
@endsection
