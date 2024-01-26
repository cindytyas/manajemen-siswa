@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between mb-5">
                <h4 class="fw-bold">Siswa</h4>
                <a href="{{ route('siswa.create') }}" class="btn btn-primary d-flex align-items-center gap-2">
                    <i class="bx bx-plus"></i> Tambah Siswa
                </a>
            </div>

            @if (session('success'))
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <i class="bx bx-check"></i> Berhasil ditambahkan
                    <div>{{ session('SUCCESS') }}</div>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Photo</th>
                            <th>NISN</th>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th>Gender</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $key => $item)
                            <tr style="vertical-align: middle">
                                <td>{{ $key + 1 }}</td>
                                <td>
                                    <img src="{{ url('storage/' . $item->photo) }}" width="30" height="30"
                                        alt="" class="rounded-circle">
                                </td>
                                <td>{{ $item->nisn }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->classroom->classroom_name }}</td>
                                <td>{{ $item->gender }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('siswa.edit', $item->id) }}"
                                            class="btn btn-sm btn-warning text-white px-4">
                                            Edit
                                        </a>
                                        <form action="{{ route('siswa.destroy', $item->id) }}" method="post">
                                            @csrf

                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger px-4" type="submit"
                                                onclick="return confirm('Kamu yakin ingin menghapusnya?')">
                                                Hapus
                                            </button>
                                        </form>
                                        <a href="{{ route('orang-tua.index', $item->id) }}"
                                            class="btn btn-sm btn-success text-white px-4">
                                            Data Wali
                                        </a>
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
