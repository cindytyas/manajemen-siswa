@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between mb-5">
                <h4 class="fw-bold">Siswa</h4>
                <a href="{{ route('orang-tua.create', $students->id) }}"
                    class="btn btn-primary d-flex align-items-center gap-2">
                    <i class="bx bx-plus"></i> Tambah Wali Murid
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
                            <th>Nama Wali Murid</th>
                            <th>Pekerjaan</th>
                            <th>Gender</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($parents as $key => $item)
                            <tr style="vertical-align: middle">
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->work }}</td>
                                <td>{{ $item->gender }}</td>
                                <td>{{ $item->student->student_name }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('orang-tua.edit', ['id' => $students->id, 'id_ortu' => $item->id]) }}"
                                            class="btn btn-sm btn-warning text-white px-4">
                                            Edit
                                        </a>
                                        <form action="{{ route('ortu.destroy', $item->id) }}" method="post">
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
