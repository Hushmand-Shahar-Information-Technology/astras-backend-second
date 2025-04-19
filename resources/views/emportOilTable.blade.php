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
            <div class="table-responsive">
                <h1 class="text-center mb-4" style=" font-weight: bold; font-size: 24px;">فورم ثبت واګون های وارداتی مواد نفتی</h1>
            </div>

            <div class="container bg-white p-4 rounded shadow-sm">
    <h3 class="text-center my-4"></h3>
    {{-- filter options --}}

    @include('components.filterOptions');

  <!-- Responsive Table -->
    <div class="table-responsive" style="overflow-x: auto; overflow-y: auto;" >

        <table class="custom-table table table-bordered table-hover text-center align-middle" id="dataTable">
            <thead class="table-light tb-header">
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

                    <th class="sorting headntr" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="action: activate to sort column ascending">ACTIONS</th>
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





