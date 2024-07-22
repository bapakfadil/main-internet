@extends('layout.app')
@section('title', 'Laporan Penjualan')
@section('content')

<div class="pc-container">
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item" aria-current="page">Laporan Penjualan</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->

      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <h5>Generate Laporan Penjualan</h5>
            </div>
            <div class="card-body">
              <form action="{{ route('reports.generate') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="start_date" class="form-label">Tanggal Mulai</label>
                  <input type="date" class="form-control" id="start_date" name="start_date" required>
                </div>
                <div class="mb-3">
                  <label for="end_date" class="form-label">Tanggal Akhir</label>
                  <input type="date" class="form-control" id="end_date" name="end_date" required>
                </div>
                <button type="submit" class="btn btn-primary">Generate Laporan</button>
              </form>
            </div>
          </div>
        </div>
        <!-- [ sample-page ] end -->
      </div>
      <!-- [ Main Content ] end -->
    </div>
</div>
@endsection
