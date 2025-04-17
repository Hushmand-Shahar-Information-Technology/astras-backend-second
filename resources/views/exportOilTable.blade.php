@extends('layout.layout')

@section('content')
<div class="print-header">
            <div class="" style="display:flex; flex-direction:row">
                <div class="logo align-self-end" style="display:flex; justify-content:flex-end; align-items:flex-end;">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo"
                        style="height: 90px; width: 90px; align-self: flex-end;">
                </div>
                <div class="text-center header-wrapper" style="flex-grow: 1;">
                    <div class="header-title" style="font-size: 1.1rem; font-weight: bold; margin-bottom: 0.1rem;">
                        د امارتی شرکتونو لوی ریاست</div>
                    <div class="header-subtitle" style="font-size: 1.1rem; font-weight: bold; margin-bottom: 0.1rem;">
                        ریاست اجرائیوی شرکت امارتی استراس</div>
                    <div class="header-subtitle" style="font-size: 1.1rem; font-weight: bold; margin-bottom: 0.1rem;">
                        آمریت خط استیشن</div>
                    <div class="header-subtitle" style="font-size: 1.1rem; font-weight: bold; margin-bottom: 0.1rem;">
                        فورم ثبت واگون های صادراتی خشکه باب </div>
                </div>
                <div class="gov-logo align-self-end"
                    style="display:flex; justify-content:flex-end; align-items:flex-end;">
                    <img src="{{ asset('images/gov-logo.png') }}" alt="Government Logo"
                        style="height: 80px; width: 80px;margin-top:auto">
                </div>
            </div>
        </div>

        <div class="custom-table-container">
            <!-- Search and Print Controls -->
            <div class="controls-container">
                <div class="search-box">
                    <form class="w-full">
                        <input type="text" class="search-input"
                            placeholder="جستجو..." >
                    </form>
                </div>
                <button onclick="printTable()" class="print-button">
                    <i class="fi fi-rr-print"></i> چاپ
                </button>
            </div>
            <div class="table-responsive">
                <h1 class="text-center mb-4" style=" font-weight: bold; font-size: 24px;">فورم ثبت واګون های   صادراتی مواد نفتی و کاز مایخ آمریت استیشن خط</h1>
            </div>

            <div class="container bg-white p-4 rounded shadow-sm">
    <h3 class="text-center my-4"></h3>
  <!-- Filter Buttons -->
  <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
    <div class="d-flex flex-wrap gap-2">
      <button class="btn btn-outline-primary filter-btn"><i class="bi bi-list-ul"></i> تمام</button>
      <button class="btn btn-outline-danger filter-btn"><i class="bi bi-x-circle"></i> توقف شدن</button>
      <button class="btn btn-outline-success filter-btn"><i class="bi bi-play-circle"></i> درحال تولید</button>
      <button class="btn btn-outline-info filter-btn"><i class="bi bi-funnel"></i> Filter Records</button>
    </div>
    <input type="text" class="form-control w-auto mt-2 mt-md-0" placeholder="🔍 Live Search">
  </div>

  <!-- Responsive Table -->
    <div class="table-responsive" style="overflow-x: auto; overflow-y: auto;" >

        <table class="custom-table table table-bordered table-hover text-center align-middle" id="dataTable">
            <thead class="table-light tb-header">
                <tr>
                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="شماره: activate to sort column descending">شماره</th>

                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="نمبر پردادکه: activate to sort column ascending">نمبر واګون</th>

                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="وزن: activate to sort column ascending">وزن</th>

                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="نمبر برنامه: activate to sort column ascending">نمبر برنامه</th>

                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="اسم شزکت: activate to sort column ascending">اسم شرکت</th>

                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="اسم جنس: activate to sort column ascending">اسم چنس</th>

                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="کشور مقصد: activate to sort column ascending">کشور مقصد</th>

                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="تاریخ رفت activate to sort column ascending">تاریخ رفت</th>

                    <th class="sorting headntr" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="action: activate to sort column ascending">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>1</td>
                        <td>7875</td>
                        <td>50kg</td>
                        <td>512</td>
                        <td>شرکت Khan</td>
                        <td>پیاز</td>
                        <td>ایران</td>
                        <td>2025-04-15</td>
                        <td class=" headntr">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">Act</button>
                                <ul class="dropdown-menu dropdown-li">
                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                <li><a class="dropdown-item" href="#">حذف</a></li>
                                <li><a class="dropdown-item" href="#">نمایش</a></li>
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
                        <td class=" headntr">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">Act</button>
                                <ul class="dropdown-menu dropdown-li">
                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                <li><a class="dropdown-item" href="#">حذف</a></li>
                                <li><a class="dropdown-item" href="#">نمایش</a></li>
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
                        <td class=" headntr">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">Act</button>
                                <ul class="dropdown-menu dropdown-li">
                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                <li><a class="dropdown-item" href="#">حذف</a></li>
                                <li><a class="dropdown-item" href="#">نمایش</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>


                </tbody>
            </table>
    </div>

        </div>

</div>
@endsection

<script src={{asset('js/print.js')}}></script>


