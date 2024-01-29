@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between mb-5">
                <h4 class="fw-bold">SPP</h4>
                <button type="button" data-bs-toggle="modal" data-bs-target="#addModal"
                    class="btn btn-primary d-flex align-items-center gap-2">
                    <i class="bx bx-plus"></i> Tambah SPP
                </button>
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
                            <th>Nama SPP</th>
                            <th>Pembayaran</th>
                            <th>Nominal</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $key => $item)
                            <tr style="vertical-align: middle">
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->name_school_fee }}</td>
                                <td>{{ $item->payment }}</td>
                                <td>{{ $item->nominal }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <button type="button" data-bs-toggle="modal"
                                            data-bs-target="#editModal{{ $item->id }}"
                                            class="btn btn-sm btn-warning text-white px-4">
                                            Edit
                                        </button>
                                        <form action="{{ route('spp.destroy', $item->id) }}" method="post">
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

                            <div class="modal" tabindex="-1" id="editModal{{ $item->id }}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit SPP {{ $item->name_school_fee }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('spp.update', $item->id) }}" method="post">
                                                @csrf
                                                @method('PUT')

                                                <div class="mb-3">
                                                    <label for="name_school_fee">Nama SPP</label>
                                                    <input type="text" name="name_school_fee" id="name_school_fee" class="form-control" value="{{ $item->name_school_fee }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="payment">pembayaran</label>
                                                    <select name="payment" id="payment" class="form-select" required>
                                                        <option value="Bulanan" {{ $item->payment == 'Bulanan' ? 'SELECTED' : '' }}>Bulanan</option>
                                                        <option value="Tahunan" {{ $item->payment == 'Tahunan' ? 'SELECTED' : '' }}>Tahunan</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nominal">Nominal</label>
                                                    <input type="text" name="nominal" id="nominal" class="form-control" value="{{ $item->nominal }}" required>
                                                </div>

                                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <div class="modal" tabindex="-1" id="addModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">tambah SPP Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('spp.store') }}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="name_school_fee">Nama SPP</label>
                            <input type="text" name="name_school_fee" id="name_school_fee" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="payment">Pembayaran</label>
                            <select name="payment" id="payment" class="form-select" required>
                                <option value="Bulanan">Bulanan</option>
                                <option value="Tahunan">Tahunan</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="nominal">Nominal</label>
                            <input type="text" name="nominal" id="nominal" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Baru</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
