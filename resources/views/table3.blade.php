@extends('layout.layout')

@section('content')


<div class="container bg-white p-4 rounded shadow-sm">
    <h3 class="text-center my-4">فورم ثبت واګون های  خشکه باب صادراتی آمریت استیشن خط آهن</h3>
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

            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="نمبر پردادکه: activate to sort column ascending">نمبر واګون</th>

            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="وزن: activate to sort column ascending">وزن</th>

            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="نمبر برنامه: activate to sort column ascending">نمبر برنامه</th>

            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="اسم شزکت: activate to sort column ascending">اسم شرکت</th>

            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="اسم جنس: activate to sort column ascending">اسم چنس</th>

            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="کشور مقصد: activate to sort column ascending">کشور مقصد</th>

            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="تاریخ رفت activate to sort column ascending">تاریخ رفت</th>

                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="action: activate to sort column ascending">ACTIONS</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>1</td>
                    <td>12345</td>
                    <td>50kg</td>
                    <td>450</td>
                    <td>شرکت ABC</td>
                    <td>کچالو</td>
                    <td>ازبکستان</td>
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
                <td>1</td>
                    <td>7875</td>
                    <td>50kg</td>
                    <td>512</td>
                    <td>شرکت Khan</td>
                    <td>پیاز</td>
                    <td>ایران</td>
                    <td>2025-04-15</td>
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
                    <td>1</td>
                    <td>7875</td>
                    <td>50kg</td>
                    <td>512</td>
                    <td>شرکت Khan</td>
                    <td>پیاز</td>
                    <td>ایران</td>
                    <td>2025-04-15</td>
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

