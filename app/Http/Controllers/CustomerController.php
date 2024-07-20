<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = User::where('role', 'customer')->get();
        return view('customer.customer', compact('customers'));
    }

    public function tambah()
    {
        return view('customer.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'customer',
        ]);

        return redirect()->route('customer')->with('success', 'Customer berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $customer = User::findOrFail($id);
        return view('customer.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
        ]);

        $customer = User::findOrFail($id);
        $customer->name = $request->nama;
        $customer->email = $request->email;
        if ($request->password) {
            $request->validate([
                'password' => 'string|min:8|confirmed',
            ]);
            $customer->password = Hash::make($request->password);
        }
        $customer->save();

        return redirect()->route('customer')->with('success', 'Customer berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $customer = User::findOrFail($id);
        $customer->delete();
        return redirect()->route('customer')->with('success', 'Customer berhasil dihapus.');
    }

}
