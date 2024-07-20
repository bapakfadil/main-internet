@extends('layout.app')
@section('title', 'Dashboard')
@section('content')

<div class="pc-container">
      <div class="pc-content">
        <!-- [ Main Content ] start -->
        <div class="row">
          <!-- [ sample-page ] start -->
          <div class="col-xl-4">
            <div class="card bg-secondary-dark dashnum-card text-white overflow-hidden">
              <span class="round small"></span>
              <span class="round big"></span>
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <div class="avtar avtar-lg">
                      <i class="text-white ti ti-credit-card"></i>
                    </div>
                  </div>
                  <div class="col-auto">
                    <div class="btn-group">
                      <a
                        href="#"
                        class="avtar bg-secondary dropdown-toggle arrow-none"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        <i class="ti ti-dots"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <span class="text-white d-block f-34 f-w-500 my-2">50 <i class="ti ti-arrow-up-right-circle opacity-50"></i></span>
                <p class="mb-0 opacity-50">Total Pending Orders</p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="card bg-primary-dark dashnum-card text-white overflow-hidden">
              <span class="round small"></span>
              <span class="round big"></span>
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <div class="avtar avtar-lg">
                      <i class="text-white ti ti-credit-card"></i>
                    </div>
                  </div>
                  <div class="col-auto">
                    <div class="btn-group">
                      <a
                        href="#"
                        class="avtar bg-secondary dropdown-toggle arrow-none"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        <i class="ti ti-dots"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <span class="text-white d-block f-34 f-w-500 my-2">50 <i class="ti ti-arrow-up-right-circle opacity-50"></i></span>
                <p class="mb-0 opacity-50">Total order success</p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-12">
            <div class="card bg-primary-dark dashnum-card dashnum-card-small text-white overflow-hidden">
              <span class="round bg-primary small"></span>
              <span class="round bg-primary big"></span>
              <div class="card-body p-3">
                <div class="d-flex align-items-center">
                  <div class="avtar avtar-lg">
                    <i class="text-white ti ti-credit-card"></i>
                  </div>
                  <div class="ms-2">
                    <h4 class="text-white mb-1">0 <i class="ti ti-arrow-up-right-circle opacity-50"></i></h4>
                    <p class="mb-0 opacity-50 text-sm">Hotspot aktif</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card dashnum-card dashnum-card-small overflow-hidden">
              <span class="round bg-warning small"></span>
              <span class="round bg-warning big"></span>
              <div class="card-body p-3">
                <div class="d-flex align-items-center">
                  <div class="avtar avtar-lg bg-light-warning">
                    <i class="text-warning ti ti-credit-card"></i>
                  </div>
                  <div class="ms-2">
                    <h4 class="mb-1">22 <i class="ti ti-arrow-up-right-circle opacity-50"></i></h4>
                    <p class="mb-0 opacity-50 text-sm">Hotspot User</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class=" col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="row mb-3 align-items-center">
                  <div class="col">
                    <small>Total pembelian</small>
                    <h3>Rp.2,324.00</h3>
                  </div>
                  <div class="col-auto">
                    <select class="form-select p-r-35">
                      <option>Today</option>
                      <option selected>This Month</option>
                      <option>This Year</option>
                    </select>
                  </div>
                </div>
                <div id="growthchart"></div>
              </div>
            </div>
          </div>
          <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
      </div>
    </div>
@endsection