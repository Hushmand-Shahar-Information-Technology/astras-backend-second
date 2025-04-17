<button onclick="printTable()" class="print-button">
    <i class="fi fi-rr-print"></i> چاپ
</button>

@once
    @push('scripts')
        <script src="{{ asset('js/print-table.js') }}"></script>
    @endpush
@endonce
