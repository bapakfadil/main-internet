@extends('layout.app')
@section('title', 'Riwayat Pembelian Voucher')
@section('content')

<div class="pc-container">
    <div class="pc-content">
        <h1>Riwayat Pembelian Voucher</h1>
        <table class="table table-striped">
            <thead>
                <tr>
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
                    <tr>
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

@endsection
