@extends('layout.layout')

@section('content')



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
            <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="S/N#: activate to sort column descending">S/N#</th>

            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Product Name: activate to sort column ascending">Product Name</th>

            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="size: activate to sort column ascending">size (LXWHX)</th>

            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="total L & W: activate to sort column ascending">Total L & W</th>

            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="color: activate to sort column ascending">Color</th>

            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="type: activate to sort column ascending">Type</th>

            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="plan qty: activate to sort column ascending">Plan QTY</th>

            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="machine: activate to sort column ascending">MACHINE</th>

            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="status: activate to sort column ascending">STATUS</th>

            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="image: activate to sort column ascending">IMAGE</th>

            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="action: activate to sort column ascending">ACTIONS</th>
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
