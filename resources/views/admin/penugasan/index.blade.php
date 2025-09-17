@extends('layouts.admin')

@section('content')
    <script>
        $(document).ready(function () {
            $('#penugasanDataTable').DataTable();
        });
    </script>
    <div class="card-header d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center gap-2">
            <button class="btn btn-light btn-sm" id="sidebarToggle">
                <i class="bi bi-list"></i>
            </button>
            <h5 class="mb-0">Penugasan</h5>
        </div>
        <a href="{{ route('admin.penugasan.create') }}" class="btn btn-primary">+ Buat Penugasan</a>
    </div>
    <div class="card-body">
        <table id="penugasanDataTable" class="table table-striped table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Nama Penugasan</th>
                <th>Tanggal Tugas</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Penugasan 1</td>
                <td>20-01-2025 18:00</td>
                <td><span class="badge bg-success">Selesai</span></td>
                <td>
                    <a href="{{ route('admin.penugasan.create') }}" class="btn btn-primary btn-sm">Detail</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
