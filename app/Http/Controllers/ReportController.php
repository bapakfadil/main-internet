<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use PDF; // Pastikan telah menginstal package dompdf

class ReportController extends Controller
{
    public function index()
    {
        return view('reports.index');
    }

    public function generate(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $transactions = Transaction::whereBetween('created_at', [$request->start_date, $request->end_date])->get();

        // Menghitung total pendapatan
        $totalPendapatan = $transactions->sum(function ($transaction) {
            switch ($transaction->voucher_duration) {
                case '6 jam':
                    return 2000;
                case '12 jam':
                    return 3000;
                case '1 hari':
                    return 5000;
                case '3 hari':
                    return 10000;
                case '1 minggu':
                    return 20000;
                case '1 bulan':
                    return 50000;
                default:
                    return 0;
            }
        });

        // Generate PDF
        $pdf = PDF::loadView('reports.pdf', compact('transactions', 'totalPendapatan'));
        return $pdf->download('laporan_penjualan.pdf');
    }
}
