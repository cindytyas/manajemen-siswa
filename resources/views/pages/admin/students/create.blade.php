@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class="container">
        <h4 class="fw-bold mb-5">Tambah Siswa Baru</h4>

        <div class="card border-0">
            <div class="card-body p-4">
                <form action="{{ route('siswa.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nisn">NISN</label>
                                <input type="text" name="nisn" id="nisn" class="form-control" required autofocus>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name">Nama Siswa</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="date_of_birth">Tanggal Lahir</label>
                                <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="place_of_birth">Tempat Lahir</label>
                                <input type="text" name="place_of_birth" id="place_of_birth" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="address">Alamat Siswa</label>
                                <textarea name="address" id="address" cols="30" rows="3" class="form-control" required></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="gender">Jenis Kelamin</label>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="religion">Agama</label>
                                <select name="religion" id="religion" class="form-control">
                                    <option value="Islam">Islam</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="photo">Foto</label>
                                <input type="file" accept="image/*" name="photo" id="photo" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="classroom_id">Kelas</label>
                                <select name="classroom_id" id="classroom_id" class="form-select" required>
                                    <option value="">Pilih Kelas</option>
                                    @foreach ($classrooms as $classroom)
                                    <option value="{{ $classroom->id }}">{{ $classroom->classroom_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">Simpan Baru</button>
                            <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
