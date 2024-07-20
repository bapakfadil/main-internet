@extends('layout.app')
@section('title', 'Voucher Billing')
@section('content')
<div class="pc-container">
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="../dashboard/index.html">Dashboard</a></li>
                <li class="breadcrumb-item" aria-current="page">Voucher Billing</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->

      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card ">
      <div class="card-body">
        <h2 class="card-title">Rp.8000</h2>
        <p class="card-text">Durasi Voucher : 12 jam.</p>
        <p class="card-text text-center fw-bold fs-3">" HBASDIWSFBNE "</p>
        <a href="#" class="btn btn-primary">Beli</a>
      </div>
    </div>
    <div class="card ">
      <div class="card-body">
        <h2 class="card-title">Rp.4000</h2>
        <p class="card-text">Durasi Voucher : 3 jam.</p>
        <p class="card-text text-center fw-bold fs-3">" ABCDEFGHIJK "</p>
        <a href="#" class="btn btn-primary">Beli</a>
      </div>
    </div>
      </div>
      <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card ">
      <div class="card-body">
        <h2 class="card-title">Rp.12.000</h2>
        <p class="card-text">Durasi Voucher : 24 jam.</p>
        <p class="card-text text-center fw-bold fs-3">" LMNOPQRSTUV "</p>
        <a href="#" class="btn btn-primary">Beli</a>
      </div>
    </div>
    <div class="card ">
      <div class="card-body">
        <h2 class="card-title">Rp.6000</h2>
        <p class="card-text">Durasi Voucher : 6 jam.</p>
        <p class="card-text text-center fw-bold fs-3">" WXYZABCDEFG "</p>
        <a href="#" class="btn btn-primary">Beli</a>
      </div>
    </div>
      </div>
      <!-- [ Main Content ] end -->
    </div>
  </div>
</div>

@endsection
