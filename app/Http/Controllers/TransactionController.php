<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::where('user_id', Auth::id())->get();
        return view('transactions.index', compact('transactions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'voucher_duration' => 'required|string',
            'payment_proof' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $paymentProofPath = $request->file('payment_proof')->store('payment_proofs', 'public');

        $transaction = new Transaction();
        $transaction->user_id = Auth::id();
        $transaction->invoice = Str::uuid();
        $transaction->voucher_duration = $request->voucher_duration;
        $transaction->payment_proof = $paymentProofPath;
        $transaction->save();

        return redirect()->route('transactions.index')->with('success', 'Transaksi berhasil dibuat, menunggu konfirmasi admin.');
    }

    public function adminIndex()
    {
        $transactions = Transaction::where('status', 'Pending')->get();
        return view('admin.transactions.index', compact('transactions'));
    }

    public function confirm(Transaction $transaction)
    {
        $transaction->status = 'Confirmed';
        $transaction->username = Str::random(6);
        $transaction->password = Str::random(6);
        $transaction->save();

        return redirect()->route('admin.transactions.index')->with('success', 'Transaksi berhasil dikonfirmasi.');
    }

    public function reject(Transaction $transaction)
    {
        $transaction->status = 'Failed';
        $transaction->save();

        return redirect()->route('admin.transactions.index')->with('error', 'Transaksi ditolak.');
    }
}
