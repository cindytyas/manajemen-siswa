@extends('layouts.app')

@section('content')
    <section class="by-5">
        <div class="container">
            <h1 class="fw-bold mb-5">Selamat Datang, {{ Auth::user()->name }}</h1>

            <div class="row">
                <div class="col-md-3">
                    <div class="card border-light-subtle mb-4">
                        <div class="card-body p-4">
                            <i class="bx bxs-user-badge fs-1 text-primary"></i>
                            <h5 class="text-dark mt-3">{{ ($amount_student) }} Siswa</h5>
                            <p class="mb-0 text-secondary">Jumlah seluruh siswa</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-light-subtle mb-4">
                        <div class="card-body p-4">
                            <i class="bx bxs-buildings fs-1 text-primary"></i>
                            <h5 class="text-dark mt-3">{{ ($amount_classroom) }} Kelas</h5>
                            <p class="mb-0 text-secondary">Jumlah seluruh kelas</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-light-subtle mb-4">
                        <div class="card-body p-4">
                            <i class="bx bxs-user-pin fs-1 text-primary"></i>
                            <h5 class="text-dark mt-3">{{ ($amount_teacher) }} Guru</h5>
                            <p class="mb-0 text-secondary">Jumlah guru pengajar</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-light-subtle mb-4">
                        <div class="card-body p-4">
                            <i class="bx bxs-notepad fs-1 text-primary"></i>
                            <h5 class="text-dark mt-3">{{ ($amount_subject) }} Mapel</h5>
                            <p class="mb-0 text-secondary">Jumlah mata pelajaran</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
