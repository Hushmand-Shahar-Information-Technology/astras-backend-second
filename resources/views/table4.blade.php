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
      font-size: 0.80rem;
    }

    /* Responsive font sizing */
    @media (max-width: 768px) {
      .table th, .table td {
        font-size: 0.50rem;
      }

      .filter-btn {
        font-size: 0.70rem;
        padding: 0.25rem 0.5rem;
      }

      .form-control, .dropdown-toggle {
        font-size: 0.65rem;
      }
      .dropdown-li{
        font-size: 0.65rem;
      }
    }
  </style>



<div class="container bg-white p-4 rounded shadow-sm">

  <!-- Filter Buttons -->
  <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
    <div class="d-flex flex-wrap gap-2">
      <button class="btn btn-outline-primary filter-btn"><i class="bi bi-list-ul"></i> تمام</button>
      <button class="btn btn-outline-danger filter-btn"><i class="bi bi-x-circle"></i>توقف شدن</button>
      <button class="btn btn-outline-success filter-btn"><i class="bi bi-play-circle"></i> درحال تولید</button>
      <button class="btn btn-outline-info filter-btn"><i class="bi bi-funnel"></i> Filter Records</button>
    </div>
    <input type="text" class="form-control w-auto mt-2 mt-md-0" placeholder="🔍 Live Search">
  </div>

  <!-- Responsive Table -->
  <div class="table-responsive" style="overflow-x: auto; overflow-y: auto;" >
    <table class="table table-bordered table-hover text-center align-middle" >
      <thead class="table-light">
        <tr>
            <th>S/N#</th>
            <th>Product Name</th>
            <th>Size (LXWXH)</th>
            <th>Total (L & W)</th>
            <th>Color</th>
            <th>TYPE</th>
            <th>PLAN QTY</th>
            <th>MACHINE</th>
            <th>STATUS</th>
            <th>IMAGE</th>
            <th>ACTIONS</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <td>1</td>
            <td>Messi pressure cooker</td>
            <td>250 * 250 * 215</td>
            <td>500 * 480</td>
            <td>
            <div class="dropdown">
                <button class="btn btn-sm btn-outline-primary">سور</button>
            </div>
            </td>
            <td>Carton</td>
            <td>4,000</td>
            <td><a href="#" class="text-primary text-decoration-underline">Stitching</a></td>
            <td><i class="bi bi-check-circle status-icon"></i></td>
            <td><i class="bi bi-image image-icon"></i></td>
            <td>
                <div class="dropdown">
                    <button class="btn btn-sm btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">Act</button>
                    <ul class="dropdown-menu dropdown-li">
                    <li><a class="dropdown-item" href="#">Edit</a></li>
                    <li><a class="dropdown-item" href="#">Delete</a></li>
                    </ul>
                </div>
            </td>
        </tr>
        <!-- More rows as needed -->
        <tr>
            <td>2</td>
            <td>Messi pressure cooker</td>
            <td>250 * 250 * 215</td>
            <td>500 * 480</td>
            <td>
            <div class="dropdown">
                <button class="btn btn-sm btn-outline-primary">سور</button>
            </div>
            </td>
            <td>Carton</td>
            <td>4,0890</td>
            <td><a href="#" class="text-primary text-decoration-underline">Stitching</a></td>
            <td><i class="bi bi-check-circle status-icon"></i></td>
            <td><i class="bi bi-image image-icon"></i></td>
            <td>
                <div class="dropdown">
                    <button class="btn btn-sm btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">Act</button>
                    <ul class="dropdown-menu dropdown-li">
                    <li><a class="dropdown-item" href="#">Edit</a></li>
                    <li><a class="dropdown-item" href="#">Delete</a></li>
                    </ul>
                </div>
            </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>




@endsection
