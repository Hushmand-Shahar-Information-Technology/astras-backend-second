@extends('layout.layout')

@section('content')
<script>
  // Function to handle the Enter key behavior
  document.addEventListener('DOMContentLoaded', function() {
    const inputs = document.querySelectorAll('input, textarea'); // Select input and textarea elements
    const submitButton = document.querySelector('button[type="submit"]'); // Submit button

    inputs.forEach((input, index) => {
      input.addEventListener('keydown', function(event) {
        if (event.key === 'Enter') {
          // Prevent the default form submission
          event.preventDefault();

          // If it's the last input, submit the form
          if (index === inputs.length - 1) {
            submitButton.click();
          } else {
            // Otherwise, move to the next input field
            inputs[index + 1].focus();
          }
        }
      });
    });
  });
</script>

<div class="card-header bg-primary container-fluid d-flex justify-content-center rounded-top-2">
    <div class="card-title text-white" style="text-align: center">مدیریت تنظیم اسناد</div>
</div>

<div class="card card-primary mb-4 rounded-top-0">
    <!--begin::Header-->

    <!--end::Header-->
    <!--begin::Form-->
    <form>
      @csrf
      <!--begin::Body-->
      <div class="card-body">
        {{-- row 1 --}}
        <div class="mb-3 row">
          <div class="col-md-4 mb-3">
            <label for="product_type" class="form-label">نوع محصول</label>
            <select class="form-select" name="product_type" id="product_type">
              <option selected>Select an option</option>
              <option value="1">Option One</option>
              <option value="2">Option Two</option>
              <option value="3">Option Three</option>
            </select>
          </div>
          <div class="col-md-4 mb-3">
            <label for="via" class="form-label">از طریق</label>
            <select class="form-select" id="via" name="via">
              <option selected>Select an option</option>
              <option value="1">Option One</option>
              <option value="2">Option Two</option>
              <option value="3">Option Three</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="act_number" class="form-label">اکت نمبر</label>
            <select class="form-select" id="act_number" name="act_number">
              <option selected>Select an option</option>
              <option value="1">Option One</option>
              <option value="2">Option Two</option>
              <option value="3">Option Three</option>
            </select>
          </div>
        </div>
        {{-- row 2 --}}
        <div class="mb-3 row">
          <div class="col-md-4 mb-3">
            <label for="company_name" class="form-label">اسم شرکت</label>
            <input type="text" class="form-control" id="company_name" placeholder="اسم شرکت" name="company_name">
          </div>
          <div class="col-md-4 mb-3">
            <label for="date" class="form-label">تاریخ</label>
            <input type="date" class="form-control" id="date" name="date">
          </div>
          <div class="col-md-4">
            <label for="act_number" class="form-label">نوع جنس</label>
            <select class="form-select" id="act_number" name="act_number">
              <option selected>Select an option</option>
              <option value="1">Option One</option>
              <option value="2">Option Two</option>
              <option value="3">Option Three</option>
            </select>
          </div>
        </div>
        {{-- row 3 --}}
        <div class="mb-3 row">
          <div class="col-md-4 mb-3">
            <label class="form-label" for="range">محدوده</label>
            <input type="text" class="form-control" placeholder="محدوده" id="inputGroupFile02">
          </div>
          <div class="col-md-4 mb-3">
            <label class="form-label" for="customary">مروجه</label>
            <input type="text" class="form-control" placeholder="مروجه" id="inputGroupF">
          </div>
          <div class="col-md-4" >
            <label class="form-label" for="range1">نمبر بار نامه</label>
            <input type="number" placeholder="" class="form-control" id="range1">
          </div>
        </div>
        {{-- row 4 --}}
        <div class="mb-3 row">
          <div class="col-md-4 mb-3">
            <label class="form-label" for="car_number">نمبر موتر</label>
            <input type="number" class="form-control" id="car_number" name="car_number">
          </div>
          <div class="col-md-4 mb-3">
            <label class="form-label" for="weight">وزن تن</label>
            <input type="number" class="form-control" id="weight" name="weight">
          </div>
          <div class="col-md-4">
            <label class="form-label" for="kg">وزن Kg</label>
            <input type="number" class="form-control" id="kg" name="kg">
          </div>
        </div>
        {{-- row 5 --}}
        <div class="mb-3 row">
          <div class="col-md-4 mb-3">
            <label class="form-label" for="number_cars">تعداد عراده</label>
            <input type="number" class="form-control" id="number_cars" name="number_cars">
          </div>
          <div class="col-md-4 mb-3">
            <label class="form-label" for="kg">تعداد کانتینر</label>
            <input type="number" class="form-control" id="kg" name="kg">
          </div>
          <div class="col-md-4">
            <label class="form-label" for="container_type">نوع کانتینر</label>
            <input type="text" class="form-control" id="container_type" name="container_type">
          </div>
        </div>
        {{-- row 6 --}}
        <div class="mb-3 row">
          <div class="col-md-4 mb-3">
            <label for="product_type" class="form-label">نوع کشتی</label>
            <select class="form-select" id="product_type" name="product_type">
              <option selected>Select an option</option>
              <option value="1">Option One</option>
              <option value="2">Option Two</option>
              <option value="3">Option Three</option>
            </select>
          </div>
          <div class="col-md-4">
            <label class="form-label" for="remark">ملاحضات</label>
            <input type="textarea" class="form-control" id="remark" name="remark">
          </div>
        </div>
        {{--  --}}
      </div>

      <!--end::Body-->
      <!--begin::Footer-->
      <div class="mb-3 d-flex gap-3 flex-wrap" dir="ltr">
        <div class="">
          <button style="background-color:#03a5fc " class="btn text-white">بازگشت</button>
        </div>
        <div class="">
            <button class="btn text-white" style="background-color: #32c818">ذخیره و یکی دیگر</button>
          </div>
        <div class="">
            <button type="submit" class="btn btn-primary " >ذخیره</button>
          </div>
      </div>

      <!--end::Footer-->
    </form>
    <!--end::Form-->
  </div>

  @endsection
