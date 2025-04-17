@extends('layout.layout')

@section('content')
<div class="card-header bg-primary rounded-top-2 d-flex justify-content-center">
        <h3 class="text-white card-title fw-bold">Quick Example</h3>
</div>
<div class="card card-primary container-fluid rounded-top-0">

    <!-- /.card-header -->
    <!-- form start -->
    <form>
        <div class="card-body">
            <!-- Row 1: 3 Inputs Side by Side with Gap -->
            <div class="row g-3 mt-2">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="companyName">اسم شرکت</label>
                        <input type="text" class="form-control" id="companyName" placeholder="اسم شرکت">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="companyNumber">نمبر شرکت</label>
                        <input type="text" class="form-control" id="companyNumber" placeholder="نمبر شرکت">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="companyDate">تاریخ</label>
                        <input type="date" class="form-control" id="companyDate">
                    </div>
                </div>
            </div>

            <!-- Row 2: 3 Inputs Side by Side with Gap -->
            <div class="row g-3 mt-2">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="plateNumber">نمبر پلیټ</label>
                        <input type="text" class="form-control" id="plateNumber" placeholder="نمبر پلیت">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="plateCode">کوډ پلیټ</label>
                        <input type="text" class="form-control" id="plateCode" placeholder="کوډ پلیت">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="productType">نوع جنس</label>
                        <select class="form-control" id="productType">
                            <option value="" disabled selected>انتخاب کنید</option>
                            <option value="Product1">محصول 1</option>
                            <option value="Product2">محصول 2</option>
                            <option value="Product3">محصول 3</option>
                            <option value="Product4">محصول 4</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Row 3: 3 Inputs Side by Side with Gap -->
            <div class="row g-3 my-2">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="restriction">معدوده</label>
                        <input type="text" class="form-control" id="restriction" placeholder="معدوده">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="version">مروجه</label>
                        <input type="text" class="form-control" id="version" placeholder="مروجه">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="version">وزن</label>
                        <input type="text" class="form-control" id="version" placeholder="به کیلو ګرام">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="version">وزن</label>
                        <input type="text" class="form-control" id="version" placeholder="به ټن">
                    </div>
                </div>

            </div>

        </div>
        <!-- /.card-body -->

        <div class="mb-3 d-flex gap-3 flex-wrap" dir="ltr">
            <div>
                <button style ="background-color:#03a5fc" class="btn text-white fw-bold">بازګشت</button>
            </div>
            <div>
                <button style ="background-color:#32C818" class="btn text-white fw-bold">ذخیره ویکی دیګه ذخیره</button>
            </div>
            <div>
                <button style ="background-color:#" class="btn text-white fw-bold bg-primary">ذخیره</button>
            </div>
        </div>
    </form>
</div>



@endsection
