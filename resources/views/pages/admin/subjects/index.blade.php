@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between mb-5">
                <h4 class="fw-bold">Mata Pelajaran</h4>
                <a href="{{ route('mapel.create') }}" class="btn btn-primary d-flex align-items-center gap-2">
                    <i class="bx bx-plus"></i> Tambah Mapel
                </a>
            </div>

            @if (session('success'))
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <i class="bx bx-check"></i> Berhasil ditambahkan
                    <div>{{ session('SUCCESS') }}</div>
                </div>
            @endif

            <form action="{{ route('mapel.filter') }}" method="GET">
                <div class="mb-3 btn btn-success d-flex align-items-center gap-2">
                    <label for="group" class="text-center">Kelompok Mata Pelajaran</label>
                    <select name="group" id="group" class="form-control">
                        <option value="">Pilih Kelompok Mapel</option>
                        <option value="Kelompok 1"{{ $kelompok == 'Kelompok 1' ? 'SELECTED' : '' }}>Kelompok 1 (Pelajaran
                            Wajib)</option>
                        <option value="Kelompok 2"{{ $kelompok == 'Kelompok 2' ? 'SELECTED' : '' }}>Kelompok 1 (Jurusan)
                        </option>
                        <option value="Kelompok 3"{{ $kelompok == 'Kelompok 3' ? 'SELECTED' : '' }}>Kelompok 3 (Peminatan)
                        </option>
                    </select>
                    <button type="submit" class="btn btn-primary col-2">
                        <i class="bx bx-filter-alt"></i> Filter
                    </button>
                </div>
            </form>

            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Mata Pelajaran</th>
                            <th>Guru Pengampu</th>
                            <th>Kolompok</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subjects as $key => $item)
                            <tr style="vertical-align: middle">
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->subject_name }}</td>
                                <td>{{ $item->teacher_name }}</td>
                                <td>{{ $item->group }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('mapel.edit', $item->id) }}"
                                            class="btn btn-sm btn-warning text-white px-4">
                                            Edit
                                        </a>
                                        <form action="{{ route('mapel.destroy', $item->id) }}" method="post">
                                            @csrf

                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger px-4" type="submit"
                                                onclick="return confirm('Kamu yakin ingin menghapusnya?')">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
