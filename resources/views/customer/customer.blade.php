@extends('layout.app')
@section('title', 'Customer')
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
                <li class="breadcrumb-item" aria-current="page">Data Customer</li>
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
                    <div class="col-md-3">
                    <input type="text" class="form-control" id="search" placeholder="Search">
                    </div>
                    <div class="col-md-3">
                    <input class="btn btn-primary" type="submit" value="Submit">
                    </div>
                    <div class="col-md-6 text-end">
                    <a class="btn btn-primary" href="{{ route('customer.tambah') }}" role="button">Tambah Data Customer</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover" id="table1">
                    <thead class="fs-4">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $customer)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>
                                    <!-- Tambahkan opsi edit dan hapus di sini -->
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
