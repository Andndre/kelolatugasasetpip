@extends('layouts.admin')

@section('content')
    <div class="card shadow-sm mb-3">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-2">
                <button class="btn btn-light btn-sm" id="sidebarToggle">
                    <i class="bi bi-list"></i>
                </button>
                <h5 class="mb-0">Kehadiran</h5>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-7">
                    <ul class="nav nav-tabs" id="attendanceTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="data-absen-tab" data-bs-toggle="tab" data-bs-target="#data-absen" type="button" role="tab" aria-controls="data-absen" aria-selected="true">Data Absen</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="data-izin-tab" data-bs-toggle="tab" data-bs-target="#data-izin" type="button" role="tab" aria-controls="data-izin" aria-selected="false">Data Izin</button>
                        </li>
                    </ul>
                    <div class="tab-content mt-3" id="attendanceTabContent">
                        <div class="tab-pane fade show active" id="data-absen" role="tabpanel" aria-labelledby="data-absen-tab">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>20-01-2025</td>
                                    <td><span class="badge bg-success">Hadir</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jane Smith</td>
                                    <td>20-01-2025</td>
                                    <td><span class="badge bg-danger">Tidak Hadir</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="data-izin" role="tabpanel" aria-labelledby="data-izin-tab">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Tanggal</th>
                                    <th>Alasan</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>20-01-2025</td>
                                    <td>Sakit</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jane Smith</td>
                                    <td>20-01-2025</td>
                                    <td>Urusan Keluarga</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <h5>Rekap Kehadiran</h5>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Total Kehadiran
                            <span class="badge bg-primary rounded-pill">25</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Total Tidak Hadir
                            <span class="badge bg-secondary rounded-pill">5</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
