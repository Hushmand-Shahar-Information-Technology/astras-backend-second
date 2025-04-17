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

{{-- 
<!-- 
<x-filament-panels::page>
    <link rel="stylesheet" href="{{@asset('css/style.css')}}">

    <x-filament::section>
        <!-- Print-only header -->
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
                    <form wire:submit.prevent="$refresh" class="w-full">
                        <input type="text" wire:model.live.debounce.500ms="search" class="search-input"
                            placeholder="جستجو..." value="{{ $search }}">
                    </form>
                </div>
                <button onclick="printTable()" class="print-button">
                    <i class="fi fi-rr-print"></i> چاپ
                </button>
            </div>
            <div class="table-responsive">
                <h1 class="text-center mb-4" style=" font-weight: bold; font-size: 24px;">فورم ثبت واگون های صادراتی
                    خشکه باب</h1>
                <table class="custom-table table table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border">#</th>
                            <th class="px-4 py-2 border">نمبر واگون</th>
                            <th class="px-4 py-2 border">وزن (تن)</th>
                            <th class="px-4 py-2 border">نمبر بار نامه</th>
                            <th class="px-4 py-2 border">اسم شرکت</th>
                            <th class="px-4 py-2 border">اسم جنس</th>
                            <th class="px-4 py-2 border">کشور مقصد</th>
                            <th class="px-4 py-2 border">تاریخ رفت</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($records as $index => $record)
                            <tr>
                                <td class="px-4 py-2 border">
                                    {{ $index + 1 + ($records->currentPage() - 1) * $records->perPage() }}
                                </td>
                                <td class="px-4 py-2 border">{{ $record->number_of_wagon  }}</td>
                                <td class="px-4 py-2 border">{{ $record->weight }}</td>
                                <td class="px-4 py-2 border">{{ $record->number_of_bar }}</td>
                                <td class="px-4 py-2 border">{{ $record->company?->name }}</td>
                                <td class="px-4 py-2 border">{{ $record->product?->name }}</td>
                                <td class="px-4 py-2 border">{{ $record->toCountry?->name }}</td>
                                <td class="px-4 py-2 border">
                                    {{ \Morilog\Jalali\Jalalian::fromDateTime($record->date_of_out)->format('Y/m/d') }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="pagination-container">
                {{ $records->links() }}
            </div>
        </div>
    </x-filament::section>

    <!-- let's include jQuery and shared scripts -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script>
    // Print functionality
        function printTable() {
            // Create a clean container for printing
            var printContainer = $("<div>").addClass("print-container").css({
                "position": "fixed",
                "left": "-9999px"
            });

            // Clone header and make it visible
            var headerClone = $(".print-header").clone().css("display", "block");

            // Fix image URLs to absolute paths
            headerClone.find("img").each(function () {
                var img = $(this);
                var imgSrc = img.attr("src");

                // Make sure all image paths are absolute
                if (imgSrc) {
                    // If it's a relative path starting with /storage or /images
                    if (imgSrc.startsWith('/storage/') || imgSrc.startsWith('/images/')) {
                        img.attr("src", window.location.origin + imgSrc);
                    }
                    // If it's a path without a leading slash
                    else if (!imgSrc.startsWith('http') && !imgSrc.startsWith('/')) {
                        img.attr("src", window.location.origin + '/' + imgSrc);
                    }
                    // If it has localhost or 127.0.0.1 in the URL
                    else if (imgSrc.indexOf('127.0.0.1') >= 0 || imgSrc.indexOf('localhost') >= 0) {
                        // Extract the path after the domain
                        var pathParts = imgSrc.split(/localhost:\d+|127\.0\.0\.1:\d+/);
                        if (pathParts.length > 1) {
                            img.attr("src", window.location.origin + pathParts[1]);
                        }
                    }
                }

                // Add error handler for images
                img.on('error', function () {
                    console.log('Image failed to load: ' + img.attr('src'));
                });
            });

            // Clone the table
            var tableClone = $(".custom-table").clone();

            // Add elements to print container
            printContainer.append(headerClone);
            printContainer.append(tableClone);

            // Add to document for printing
            $("body").append(printContainer);

            // Add print style
            var $printStyle = $("<style>").text(`
        @media print {
            * { visibility: hidden !important; }
            .print-container, .print-container * { visibility: visible !important; }
            .print-container {
                position: absolute !important;
                left: 0 !important;
                top: 0 !important;
                width: 100% !important;
                background: white !important;
            }
            .print-container .print-header {
                display: block !important;
                margin-bottom: 20px !important;
            }
            .print-container .print-header img {
                display: inline-block !important;
                visibility: visible !important;
            }
            .print-container table {
                width: 100% !important;
                border-collapse: collapse !important;
                direction: rtl !important;
            }
            .print-container table th, .print-container table td {
                border: 1px solid black !important;
                padding: 8px !important;
                text-align: right !important;
            }
        }
    `);

            $("head").append($printStyle);

            // Use a timeout to ensure everything has rendered before printing
            setTimeout(function () {
                // Try direct window.print() approach
                window.print();

                // Remove temporary elements after printing
                setTimeout(function () {
                    printContainer.remove();
                    $printStyle.remove();
                }, 1000);
            }, 500);
        }
</script>
</x-filament-panels::page> --> --}}
