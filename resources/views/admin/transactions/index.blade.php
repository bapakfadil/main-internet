@extends('layout.app')
@section('title', 'Konfirmasi Pembayaran')
@section('content')

<div class="pc-container">
    <div class="pc-content">
        <h1>Konfirmasi Pembayaran</h1>
        <table class="table table-striped">
            <thead>
                <tr>
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
                    <tr>
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

@endsection
