@extends('layout.layout')

@section('content')

    <div class="container mt-4">
        <h3 class="text-center mb-4">فورم ثبت واګون های وارداتی مواد نفتی</h3>
        <table class="table table-bordered table-striped table-sm table-smaller">
            <thead>
                <tr>
                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="شماره: activate to sort column descending">شماره</th>

                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="نمبر پردادکه: activate to sort column ascending">نمبر پردادکه</th>

                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="وزن: activate to sort column ascending">وزن</th>

                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="اسم شرکت: activate to sort column ascending">اسم شرکت</th>

                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="نوع جنس: activate to sort column ascending">نوع جنس</th>

                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="کشور میدآ: activate to sort column ascending">کشور میدآ</th>

                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="کشور مقصد: activate to sort column ascending">کشور مقصد</th>

                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="موقیعت واګون: activate to sort column ascending">موقیعت واګون</th>

                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="تاریخ ورود: activate to sort column ascending">تاریخ ورود</th>

                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="تاریخ خروج: activate to sort column ascending">تاریخ خروج</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>12345</td>
                    <td>50kg</td>
                    <td>شرکت ABC</td>
                    <td>محصول 1</td>
                    <td>ایران</td>
                    <td>افغانستان</td>
                    <td>واګون 1</td>
                    <td>2025-01-01</td>
                    <td>2025-01-15</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>67890</td>
                    <td>60kg</td>
                    <td>شرکت XYZ</td>
                    <td>محصول 2</td>
                    <td>پاکستان</td>
                    <td>هند</td>
                    <td>واګون 2</td>
                    <td>2025-02-01</td>
                    <td>2025-02-10</td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection

