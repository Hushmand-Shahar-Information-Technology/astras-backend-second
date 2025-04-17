
@extends('layout.layout')

@section('content')

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
        <div class="row g-3 mt-2">
          <div class="col-md-4">
            <div class="form-group">
              <label for="product_type" class="form-label">نوع محصول</label>
              <select class="form-select" name="product_type" id="product_type">
                <option value="" disabled selected>انتخاب کنید</option>
                              <option value="Product1">محصول 1</option>
                              <option value="Product2">محصول 2</option>
                              <option value="Product3">محصول 3</option>
                              <option value="Product4">محصول 4</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="via" class="form-label">از طریق</label>
              <select class="form-select" id="via" name="via">
                <option value="" disabled selected>انتخاب کنید</option>
                <option value="Product1">محصول 1</option>
                <option value="Product2">محصول 2</option>
                <option value="Product3">محصول 3</option>
                <option value="Product4">محصول 4</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="act_number" class="form-label">اکت نمبر</label>
              <select class="form-select" id="act_number" name="act_number">
                <option value="" disabled selected>انتخاب کنید</option>
                              <option value="Product1">محصول 1</option>
                              <option value="Product2">محصول 2</option>
                              <option value="Product3">محصول 3</option>
                              <option value="Product4">محصول 4</option>
              </select>
            </div>
          </div>
        </div>
        {{-- row 2 --}}
        <div class="row g-3 mt-2">
          <div class="col-md-4">
            <div class="form-group">
              <label for="company_name" class="form-label">اسم شرکت</label>
              <input type="text" class="form-control" id="company_name" placeholder="اسم شرکت" name="company_name">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="date" class="form-label">تاریخ</label>
              <input type="date" class="form-control" id="date" name="date">
            </div>  
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="act_number" class="form-label">نوع جنس</label>
              <select class="form-select" id="act_number" name="act_number">
                <option value="" disabled selected>انتخاب کنید</option>
                <option value="Product1">محصول 1</option>
                <option value="Product2">محصول 2</option>
                <option value="Product3">محصول 3</option>
                <option value="Product4">محصول 4</option>
              </select>
            </div>
          </div>
        </div>
        {{-- row 3 --}}
        <div class="row g-3 mt-2">
          <div class="col-md-4">
            <div class="form-group">
              <label class="form-label" for="range">محدوده</label>
              <input type="text" class="form-control" placeholder="محدوده" id="inputGroupFile02">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label class="form-label" for="customary">مروجه</label>
              <input type="text" class="form-control" placeholder="مروجه" id="inputGroupF">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label class="form-label" for="range1">نمبر بار نامه</label>
              <input type="text" placeholder="نمبر بار نامه" class="form-control" id="range1">
            </div>
          </div>
        </div>
        {{-- row 4 --}}
        <div class="row g-3 mt-2">
          <div class="col-md-4">
            <div class="form-group">
              <label class="form-label" for="car_number">نمبر موتر</label>
              <input type="text" class="form-control" placeholder="نمبر موتر" id="car_number" name="car_number">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label class="form-label" for="weight">وزن</label>
              <input type="number" class="form-control" placeholder="به تن" id="weight" name="weight">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label class="form-label" for="kg">وزن</label>
              <input type="text" placeholder="به کیلو گرام" class="form-control" id="kg" name="kg">
            </div>
          </div>
        </div>
        {{-- row 5 --}}
        <div class="row g-3 mt-2">
          <div class="col-md-4">
            <div class="form-group">
              <label class="form-label" for="number_cars">تعداد عراده</label>
              <input type="text" class="form-control" placeholder="تعداد عراده" id="number_cars" name="number_cars">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label class="form-label" for="container">تعداد کانتینر</label>
              <input type="text" placeholder="تعداد کانتینر" class="form-control" id="container" name="container">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label class="form-label" for="container_type">نوع کانتینر</label>
              <input type="text" placeholder="نوع کانتینر" class="form-control" id="container_type" name="container_type">
            </div>
          </div>
        </div>
        {{-- row 6 --}}
        <div class="row g-3 mt-2">
          <div class="col-md-4">
            <div class="form-group">
              <label for="product_type" class="form-label">نوع کشتی</label>
              <select class="form-select" id="product_type" name="product_type">
                <option value="" disabled selected>انتخاب کنید</option>
                              <option value="Product1">محصول 1</option>
                              <option value="Product2">محصول 2</option>
                              <option value="Product3">محصول 3</option>
                              <option value="Product4">محصول 4</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label class="form-label" for="remark">ملاحضات</label>
              <input type="text" class="form-control" placeholder="ملاحضات" id="remark" name="remark">
            </div>
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
            <button class="btn text-white " style="background-color: #32c818">ذخیره و یکی دیگر</button>
          </div>
        <div class="">
            <button type="submit" class="btn btn-primary " >ذخیره</button>
          </div>
      </div>
      
      <!--end::Footer-->
    </form>
    <!--end::Form-->
  </div>

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
  @endsection
