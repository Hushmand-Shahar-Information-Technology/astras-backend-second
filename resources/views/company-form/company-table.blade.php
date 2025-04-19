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
                <h1 class="text-center mb-4" style=" font-weight: bold; font-size: 24px;">فورم ثبت نماینده های شرکت ها</h1>
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
                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="2" colspan="1" aria-sort="ascending" aria-label="شماره: activate to sort column descending">شماره</th>

                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="2" colspan="1" aria-label="اسم شرکت: activate to sort column ascending">اسم شرکت</th>

                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="2" colspan="1" aria-label="شهرت نماینده: activate to sort column ascending">شهرت نماینده</th>

                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="2" aria-label="شماره تماس نماینده: activate to sort column ascending">شماره تماسم نماینده</th>

                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="2" colspan="1" aria-label="اسم همکار نماینده: activate to sort column ascending">اسم همکار نماینده</th>


                    <th class="sorting border-bottom-0"  tabindex="0" aria-controls="example1" rowspan="2" colspan="1" aria-label="نمبر موتر: activate to sort column ascending">نمبر موتر</th>

                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="2" colspan="1" aria-label="تاریخ مکتوب: activate to sort column ascending">تاریخ مکتوب</th>

                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="2" colspan="1" aria-label="تاریخ ختم: activate to sort column ascending">تاریخ ختم</th>

                </tr>
                <tr>

                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="اسم: activate to sort column ascending">اسم</th>

                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="ولد: activate to sort column ascending">ولد</th>

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
                        <td>پیاز</td>
                        <td>2025-04-15</td>
                        <td>2025-04-15</td>
                    </tr>
                </tbody>
            </table>
    </div>

        </div>

    </div>

@endsection

<script src={{asset('js/print.js')}}></script>





