@extends('layout.app')
@section('title', 'Riwayat Pembelian Voucher')
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
                <li class="breadcrumb-item" aria-current="page">Riwayat Pembelian Voucher</li>
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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#buyVoucherModal">
                            Beli Voucher
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover" id="table1">
                    <thead class="fs-4">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Invoice</th>
                            <th>Status</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Masa Aktif</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transactions as $transaction)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $transaction->invoice }}</td>
                                <td>{{ $transaction->status }}</td>
                                <td>{{ $transaction->username ?? 'N/A' }}</td>
                                <td>{{ $transaction->password ?? 'N/A' }}</td>
                                <td>{{ $transaction->voucher_duration }}</td>
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

<!-- Modal -->
<div class="modal fade" id="buyVoucherModal" tabindex="-1" aria-labelledby="buyVoucherModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="buyVoucherModalLabel">Beli Voucher</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="{{ route('transactions.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          <div class="mb-3">
            <label for="voucher_duration" class="form-label">Masa Aktif Voucher</label>
            <select class="form-select" id="voucher_duration" name="voucher_duration" required>
              <option value="6 jam">6 jam (Rp. 2000)</option>
              <option value="12 jam">12 jam (Rp. 3000)</option>
              <option value="1 hari">1 hari (Rp. 5000)</option>
              <option value="3 hari">3 hari (Rp. 10.000)</option>
              <option value="1 minggu">1 minggu (Rp. 20.000)</option>
              <option value="1 bulan">1 bulan (Rp. 50.000)</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="payment_proof" class="form-label">Upload Bukti Pembayaran</label>
            <input class="form-control" type="file" id="payment_proof" name="payment_proof" required>
          </div>
          <div class="mb-3">
            <p>Rekening Pembayaran: <strong>1234567890 (Bank ABC)</strong></p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Pesan</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
