@extends('layout.app')
@section('title', 'Konfirmasi Pembayaran')
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
                <li class="breadcrumb-item" aria-current="page">Konfirmasi Pembayaran</li>
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
                <div class="row">
                    <div class="col-md-6">
                        <h5>Daftar Transaksi Pending</h5>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover" id="table1">
                    <thead class="fs-4">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Invoice</th>
                            <th>User</th>
                            <th>Status</th>
                            <th>Bukti Pembayaran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transactions as $transaction)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $transaction->invoice }}</td>
                                <td>{{ optional($transaction->user)->name }}</td>
                                <td>{{ $transaction->status }}</td>
                                <td>
                                    <a href="{{ Storage::url($transaction->payment_proof) }}" target="_blank">Lihat Bukti</a>
                                </td>
                                <td>
                                    <form action="{{ route('admin.transactions.confirm', $transaction) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-success">Konfirmasi</button>
                                    </form>
                                    <form action="{{ route('admin.transactions.reject', $transaction) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Tolak</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
          </div>
        </div>
        <!-- [ sample-page ] end -->
      </div>
      <!-- [ Main Content ] end -->
    </div>
</div>

@endsection
