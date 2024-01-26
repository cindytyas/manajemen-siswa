@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <h4 class="fw-bold mb-5">Edit Kelas {{ $item->name }}</h4>

            <div class="card border-0">
                <div class="card-body p-4">
                    <form action="{{ route('ortu.update', $item->id) }}" method="post" enctype="multipart/form-data">
                        @csrf

                        @method('PUT')

                        <input type="hidden" name="student_id" value="{{ $students->id }}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name">Nama Wali Murid</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ $item->name }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="gender">Jenis Kelamin</label>
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="Laki-Laki" {{ $item->gender == 'Laki-Laki' ? 'SELECTED' : '' }}>
                                            Laki-Laki</option>
                                        <option value="Perempuan" {{ $item->gender = 'Perempuan' ? 'SELECTED' : '' }}>
                                            Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="date_of_birth">Tanggal Lahir</label>
                                    <input type="date" name="date_of_birth" id="date_of_birth" class="form-control"
                                        value="{{ $item->date_of_birth }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="place_of_birth">Tempat Lahir</label>
                                    <input type="text" name="place_of_birth" id="place_of_birth" class="form-control"
                                        value="{{ $item->place_of_birth }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="work">Pekerjaan</label>
                                    <input type="text" name="work" id="work" class="form-control"
                                        value="{{ $item->work }}" required autofocus>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="religion">Agama</label>
                                    <select name="religion" id="religion" class="form-control">
                                        <option value="Islam" {{ $item->religion == 'Islam' ? 'SELECTED' : '' }}>Islam
                                        </option>
                                        <option value="Katolik" {{ $item->religion == 'Katolik' ? 'SELECTED' : '' }}>
                                            Katolik</option>
                                        <option value="Kristen" {{ $item->religion == 'Kristen' ? 'SELECTED' : '' }}>
                                            Kristen</option>
                                        <option value="Hindu" {{ $item->religion == 'Hindu' ? 'SELECTED' : '' }}>Hindu
                                        </option>
                                        <option value="Buddha" {{ $item->religion == 'Buddha' ? 'SELECTED' : '' }}>Buddha
                                        </option>
                                        <option value="Konghucu" {{ $item->religion == 'Konghucu' ? 'SELECTED' : '' }}>
                                            Konghucu</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="address">Alamat Wali Murid</label>
                                    <textarea name="address" id="address" cols="30" rows="3" class="form-control" required>{{ $item->address }}</textarea>
                                </div>
                            </div>



                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                <a href="{{ route('orang-tua.index', $students->id) }}" class="btn btn-secondary">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
