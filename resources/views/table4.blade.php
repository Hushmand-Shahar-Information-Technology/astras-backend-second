@extends('layout.layout')

@section('content')

  <style>
    body {
      background-color: #f8f9fa;
    }

    .filter-btn {
      margin: 0 4px;
      font-size: 0.85rem;
    }

    .status-icon {
      font-size: 1.2rem;
      color: #0d6efd;
    }

    .image-icon {
      font-size: 1.2rem;
      color: #adb5bd;
    }

    .table th, .table td {
      vertical-align: middle;
      font-size: 0.95rem;
    }

    /* Responsive font sizing */
    @media (max-width: 768px) {
      .table th, .table td {
        font-size: 0.75rem;
      }

      .filter-btn {
        font-size: 0.75rem;
        padding: 0.25rem 0.5rem;
      }

      .form-control, .dropdown-toggle {
        font-size: 0.75rem;
      }
    }
  </style>



<div class="container bg-white p-4 rounded shadow-sm">

  <!-- Filter Buttons -->
  <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
    <div class="d-flex flex-wrap gap-2">
      <button class="btn btn-outline-primary filter-btn"><i class="bi bi-list-ul"></i> ټول</button>
      <button class="btn btn-outline-danger filter-btn"><i class="bi bi-x-circle"></i> توقف شوی</button>
      <button class="btn btn-outline-success filter-btn"><i class="bi bi-play-circle"></i> درحال تولید</button>
      <button class="btn btn-outline-info filter-btn"><i class="bi bi-funnel"></i> Filter Records</button>
    </div>
    <input type="text" class="form-control w-auto mt-2 mt-md-0" placeholder="🔍 Live Search">
  </div>

  <!-- Responsive Table -->
  <div class="table-responsive" style="overflow-x: hidden; overflow-y: hidden;">
    <table class="table table-bordered table-hover text-center align-middle">
      <thead class="table-light">
        <tr>
            <th>ACTIONS</th>
            <th>IMAGE</th>
            <th>STATUS</th>
            <th>MACHINE</th>
            <th>PLAN QTY</th>
            <th>TYPE</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Carton</td>
          <td>4,000</td>
          <td><a href="#" class="text-primary text-decoration-underline">Stitching</a></td>
          <td><i class="bi bi-check-circle status-icon"></i></td>
          <td><i class="bi bi-image image-icon"></i></td>
          <td>
            <div class="dropdown">
              <button class="btn btn-sm btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">Act</button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Edit</a></li>
                <li><a class="dropdown-item" href="#">Delete</a></li>
              </ul>
            </div>
          </td>
        </tr>
        <!-- More rows as needed -->
        <tr>
            <td>
              <div class="dropdown">
                <button class="btn btn-sm btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">Act</button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Edit</a></li>
                  <li><a class="dropdown-item" href="#">Delete</a></li>
                </ul>
              </div>
            </td>
            <td><i class="bi bi-image image-icon"></i></td>
            <td><i class="bi bi-check-circle status-icon"></i></td>
            <td><a href="#" class="text-primary text-decoration-underline">Stitching</a></td>
            <td>4,000</td>
            <td>Carton</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>




@endsection
