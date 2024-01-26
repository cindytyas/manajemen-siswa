@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <h4 class="fw-bold mb-5">Edit Mata Pelajaran {{ $item->name }}</h4>

            <div class="card border-0">
                <div class="card-body p-4">
                    <form action="{{ route('mapel.update', $item->id) }}" method="post" enctype="multipart/form-data">
                        @csrf

                        @method('PUT')

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="subject_name">Mata Pelajaran</label>
                                <input type="text" name="subject_name" id="subject_name" class="form-control"
                                    value="{{ $item->subject_name }}" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="teacher_name">Guru Pengampu</label>
                                <input type="text" name="teacher_name" id="teacher_name" class="form-control"
                                    value="{{ $item->teacher_name }}" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="group">Jenis Kelamin</label>
                                <select name="group" id="group" class="form-control">
                                    <option value="Kelompok 1" {{ $item->group == 'Kelompok 1' ? 'SELECTED' : '' }}>
                                        Kelompok 1 (Pelajaran Wajib)</option>
                                    <option value="Kelompok 2" {{ $item->group == 'Kelompok 2' ? 'SELECTED' : '' }}>
                                        Kelompok 2 (Kejuruan)</option>
                                    <option value="Kelompok 3" {{ $item->group == 'Kelompok 3' ? 'SELECTED' : '' }}>
                                        Kelompok 3 (Peminatan)</option>
                                </select>
                            </div>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            <a href="{{ route('mapel.index') }}" class="btn btn-secondary">Batal</a>
                        </div>
                </div>
                </form>
            </div>
        </div>
        </div>
    </section>
@endsection
