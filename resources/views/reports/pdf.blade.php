<!DOCTYPE html>
<html>
<head>
    <title>Laporan Penjualan Voucher</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Laporan Penjualan Voucher</h2>
    <p>Periode: {{ request()->start_date }} s/d {{ request()->end_date }}</p>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Invoice</th>
                <th>User</th>
                <th>Status</th>
                <th>Voucher Duration</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $transaction)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $transaction->invoice }}</td>
                    <td>{{ $transaction->user->name }}</td>
                    <td>{{ $transaction->status }}</td>
                    <td>{{ $transaction->voucher_duration }}</td>
                    <td>{{ $transaction->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h3>Total Pendapatan: Rp. {{ number_format($totalPendapatan, 0, ',', '.') }}</h3>
</body>
</html>
