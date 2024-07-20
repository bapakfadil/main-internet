<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="{{ route('dashboard') }}" class="b-brand text-primary">
        <!-- ========   Change your logo from here   ============ -->
        <h3 class="mt-4 fw-bold">Awinet Global Mandiri</h3>
      </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">
        <li class="pc-item pc-caption">
          <i class="ti ti-news"></i> <span>Menu</span>
        </li>
        <li class="pc-item">
          <a href="{{ route('dashboard') }}" class="pc-link">
            <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
            <span class="pc-mtext">Dashboard</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="{{ route('transactions.index') }}" class="pc-link">
            <span class="pc-micon"><i class="ti ti-receipt"></i></span>
            <span class="pc-mtext">Riwayat Pembelian</span>
          </a>
        </li>
        @if (Auth::user() && Auth::user()->role == 'admin')
          <li class="pc-item">
            <a href="{{ route('customer') }}" class="pc-link">
              <span class="pc-micon"><i class="ti ti-users"></i></span>
              <span class="pc-mtext">Data Customer</span>
            </a>
          </li>
          <li class="pc-item">
            <a href="{{ route('customer.tambah') }}" class="pc-link">
              <span class="pc-micon"><i class="ti ti-user-plus"></i></span>
              <span class="pc-mtext">Form Pendaftaran</span>
            </a>
          </li>
        @endif
      </ul>
    </div>
  </div>
</nav>
