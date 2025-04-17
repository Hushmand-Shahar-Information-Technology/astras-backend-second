@extends('layout.layout')

@section('content')

<div class="container bg-white p-4 rounded shadow-sm">
    <h3 class="text-center my-4">فورم ثبت واګون های وارداتی مواد نفتی</h3>
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
                <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="شماره: activate to sort column descending">شماره</th>

                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="نمبر پردادکه: activate to sort column ascending">نمبر پردادکه</th>

                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="نمبر واګږن: activate to sort column ascending">نمبر نمبر واګون</th>

                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="وزن: activate to sort column ascending">وزن</th>

                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="اسم شرکت: activate to sort column ascending">اسم شرکت</th>

                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="نوع جنس: activate to sort column ascending">نوع جنس</th>

                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="کشور میدآ: activate to sort column ascending">کشور میدآ</th>

                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="کشور مقصد: activate to sort column ascending">کشور مقصد</th>

                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="موقیعت واګون: activate to sort column ascending">موقیعت واګون</th>

                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="تاریخ ورود: activate to sort column ascending">تاریخ ورود</th>

                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="تاریخ خروج: activate to sort column ascending">تاریخ خروج</th>

                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="action: activate to sort column ascending">ACTIONS</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>1</td>
                    <td>12345</td>
                    <td>68000</td>
                    <td>50kg</td>
                    <td>شرکت ABC</td>
                    <td>محصول 1</td>
                    <td>ایران</td>
                    <td>افغانستان</td>
                    <td>واګون 1</td>
                    <td>2025-01-01</td>
                    <td>2025-01-15</td>
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
                    <td>67890</td>
                    <td>67009</td>
                    <td>60kg</td>
                    <td>شرکت XYZ</td>
                    <td>محصول 2</td>
                    <td>پاکستان</td>
                    <td>هند</td>
                    <td>واګون 2</td>
                    <td>2025-02-01</td>
                    <td>2025-02-10</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">Act</button>
                            <ul class="dropdown-menu dropdown-li">
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr
                <tr>
                    <td>2</td>
                    <td>67890</td>
                    <td>67908</td>
                    <td>60kg</td>
                    <td>شرکت XYZ</td>
                    <td>محصول 2</td>
                    <td>افغانستان</td>
                    <td>کاناډا</td>
                    <td>واګون 2</td>
                    <td>2025-02-01</td>
                    <td>2025-02-10</td>
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

