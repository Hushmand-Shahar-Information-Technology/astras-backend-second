@extends('layout.layout')

@section('content')
<style>
    table, td {
        border-top: 1px solid black;
        border-bottom: 1px solid black;
        border-left: none !important;
        border-right: none !important;
        text-align: center;
        vertical-align: middle;
    }

    /* Keep right-most column text on one line */
    td:last-child {
      white-space: nowrap;
    }

    td:first-child {
      border-right: 1px solid black !important;
      border-left: 1px solid black !important;
    }

    td:last-child {
      border-left: 1px solid black !important;
    }

    .form-title {
      text-align: center;
      font-weight: bold;
      margin: 1rem 0;
    }
    p {
        margin: 0 !important ;
        padding: 0 !important;
    }
  </style>
<div class="container mt-4 ">
    <div class="d-flex justify-content-between align-items-end">
        <div>
            <div>
                <img src="{{asset('images/gov-logo.png')}}" style="width: 80px; height: 80px;     transform: translate(-35px, -15px);" alt="">
            </div>
        </div>
        <div class="text-center">
            <p>وزارت مالیه </p>
            <p>ریاست عمومی شرکت های دولتی</p>
            <p>ریاست شرکت دولتی استراس</p>
            <p>امریت مالی</p>
            <p>مدیریت عمومی عواید</p>
        </div>
        <div>
            <img style="width: 90px; height: 90px; transform: translate(35px, -15px);" src="{{asset('images/astras.png')}}" alt="" >
        </div>
    </div>
    <div class="d-flex justify-content-between align-items-end" style="font-size: 1rem">
        <div class="">
            <p>ع</p>
        </div>
        <div style="transform: translateX(-63px);">
            تکت فیص توقف وسایط داخلی باردار و خالی در پورتها
        </div>
        <div class="" style="display:flex; flex-direction: column; justify-content:end">
            <p class="text-center">پارچه اول</p>
            <p>قیمت تکت روزانه (۳۵۰) افغانی</p>
        </div>
    </div>
    <div class="table-responsive">
      <table class="table align-middle">
        <tbody>
          <tr>
            <td style="width: 10rem">شماره</td>
            <td style="width:100rem; text-align:right;" class="form-group">
                <input type="text" class="form-control p-0 outline-none border-0 shadow-none" name="no" placeholder="شماره">
            </td>
          </tr>
          <tr>
              <td>اسم شرکت</td>
              <td style="width:100rem; text-align:right;" class="form-group">
                    <input type="text" class="form-control p-0 outline-none border-0 shadow-none" name="name" placeholder="اسم شرکت">
               </td>
          </tr>
          <tr>
              <td>اسم راننده</td>
              <td style="width:100rem; text-align:right;" class="form-group">
                    <input type="text" class="form-control p-0 outline-none border-0 shadow-none" name="driver-name" placeholder="اسم راننده">
               </td>
          </tr>
          <tr>
              <td>نمبر موتر</td>
              <td style="width:10rem; text-align:right;" >
                    <input type="text" class="form-control p-0 outline-none border-0 shadow-none" name="car-no" placeholder="نمبر موتر">
               </td>
          </tr>
          <tr>
              <td>نوع جنس</td>
              <td style="width:100rem; text-align:right;" class="form-group">
                    <input type="text" class="form-control p-0 outline-none border-0 shadow-none" name="type" placeholder="نوع جنس">
               </td>
          </tr>
          <tr>
              <td>خالی</td>
              <td style="width:100rem; text-align:right;" class="form-group">
                    <input type="text" class="form-control p-0 outline-none border-0 shadow-none" name="empty" placeholder="خالی">
               </td>
          </tr>
          <tr>
              <td>تاریخ و ساعت دخول</td>
              <td style="width:100rem; text-align:right;" class="form-group">
                    <input type="text" class="form-control p-0 outline-none border-0 shadow-none" name="entry-date" placeholder=" تاریخ و ساهت دخول">
               </td>
          </tr>
          <tr>
              <td>تاریخ و ساعت خروج</td>
              <td style="width:100rem; text-align:right;" class="form-group">
                    <input type="text" class="form-control p-0 outline-none border-0 shadow-none" name="exit-date" placeholder="تاریخ و ساهت خروج">
               </td>
          </tr>
          <tr>
              <td>مدت توقف</td>
              <td style="width:100rem; text-align:right;" class="form-group">
                    <input type="text" class="form-control p-0 outline-none border-0 shadow-none" name="park-time" placeholder="مدت توقف">
               </td>
          </tr>
          <tr>
            <td>مبلغ فی عراده فی روز</td>
            <td style="width:100rem; text-align:right;" class="form-group">
                <input type="text" class="form-control p-0 outline-none border-0 shadow-none" name="cash-per-car" placeholder="مبلغ فی عراده فی روز">
            </td>
          </tr>
            <tr>
                <td>مجموع مبلغ</td>
                <td style="width:100rem; text-align:right;" class="form-group">
                    <input type="text" class="form-control p-0 outline-none border-0 shadow-none " name="total-cash" placeholder="مجموعی مبلغ">
                </td>

                <td style="position: relative;">
                    <div style="width: 15rem; height: 11.92rem; background-color: white; padding: 2.5rem 2rem; position: absolute; bottom: 0; left: 1.021rem; border-right: 1px solid black !important; ">
                        <div>
                            <p>مبلغ: (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;) افغانی</p>
                            اخذ شد
                    </div>
                    <div>
                        <p>امضاء مامور موظف:</p> <br>
                        <p>............</p>
                    </div>
                </td>
            </tr>
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

@endsection
