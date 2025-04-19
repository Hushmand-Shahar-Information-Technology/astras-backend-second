@extends('layout.layout')

@section('content')

<div class="card-header bg-primary container-fluid d-flex justify-content-center rounded-top-2">
    <div class="card-title text-white" style="text-align: center">شرکت</div>
</div>

<div class="card card-primary mb-4 rounded-top-0">
    <!--begin::Header-->

    <!--end::Header-->
    <!--begin::Form-->
    <form>
      @csrf
      <!--begin::Body-->
      <div class="card-body">
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
              <label for="name" class="form-label">اسم</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="father-name" class="form-label">ولد</label>
              <input type="text" class="form-control" id="father-name" name="father-name">
            </div>
          </div>

        </div>
          {{-- row 3 --}}
        <div class="row g-3 mt-2">
          <div class="col-md-6">
            <div class="form-group">
              <label class="form-label" for="range">شماره تماس نماینده</label>
              <input type="text" class="form-control" placeholder="شماره تماس نماینده" id="inputGroupFile02">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="form-label" for="">اسم همکار نماینده</label>
              <input type="text" class="form-control" placeholder="اسم همکار نماینده" id="inputGroupF">
            </div>
          </div>
        </div>

         {{-- row 6 --}}
        <div class="row g-3 mt-2">
         <div class="col-md-6">
            <div class="form-group">
              <label class="form-label" for="range1">تاریخ مکتوب</label>
              <input type="date" class="form-control" id="range1">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="form-label" for="range1">تاریخ مکتوب</label>
              <input type="date" class="form-control" id="range1">
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
