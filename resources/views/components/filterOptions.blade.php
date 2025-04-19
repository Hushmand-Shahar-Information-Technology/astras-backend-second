 <!-- Filter Buttons -->
 <div class="d-flex flex-wrap justify-content-between align-items-center mb-3" dir="ltr">
    <div class="d-flex flex-wrap gap-2">
        <button onclick="printTable()" class="btn btn-sm print-button text-white">
            <i class="fi fi-rr-print"></i> چاپ
        </button>
        {{-- <button class="btn btn-outline-primary filter-btn"><i class="bi bi-list-ul"></i> تمام</button>
        <button class="btn btn-outline-danger filter-btn"><i class="bi bi-x-circle"></i> توقف شدن</button>
        <button class="btn btn-outline-success filter-btn"><i class="bi bi-play-circle"></i> درحال تولید</button> --}}
        <button class="btn btn-outline-info filter-btn position-relative" onclick="toggleVisibility()"><i class="bi bi-funnel"></i> Filter Records
        </button>
        <div class="hidden box filter-card" id="myDiv">
            <h6>Filter Options</h6>

        <!-- Filter by Status -->
        <div class="filter-group">
            <label class="form-label mb-1">Filter By Status</label>
            <div class="input-group">
            <select id="statusFilter" class="form-select">
                <option selected>All</option>
                <option>Under Process</option>
                <option>Completed</option>
                <option>Pending</option>
            </select>
            <button class="clear-btn" onclick="resetSelect('statusFilter')">&times;</button>
            </div>
        </div>

        <!-- Filter by Product Type -->
        <div class="filter-group">
            <label class="form-label mb-1">Filter By Product type</label>
            <div class="input-group">
            <select id="typeFilter" class="form-select">
                <option selected>All</option>
                <option>Carton</option>
                <option>Plastic</option>
            </select>
            <button class="clear-btn" onclick="resetSelect('typeFilter')">&times;</button>
            </div>
        </div>

        <!-- Filter by Class -->
        <div class="filter-group">
            <label class="form-label mb-1">Filter By class</label>
            <div class="input-group">
            <select id="classFilter" class="form-select">
                <option selected>All</option>
                <option>Class A</option>
                <option>Class B</option>
            </select>
            <button class="clear-btn" onclick="resetSelect('classFilter')">&times;</button>
            </div>
        </div>
        </div>
    </div>
    <input type="text" class="form-control w-auto mt-2 mt-md-0" style="text-align: right" placeholder=" جستجو🔍">
  </div>
