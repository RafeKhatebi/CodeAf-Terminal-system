@extends('layouts.app')

@section('title', 'مدیریت تانکر تیل | سیستم مدیریت مالی CodeAf{کُداف}')

@section('content')
<h2 class="mb-4 text-center">
    <i class="fas fa-gas-pump text-success"></i> مدیریت معاملات تانکر تیل
</h2>

<div class="card mb-4 shadow-sm">
    <div class="card-header bg-success text-white">
        <h5 class="mb-0">
            <i class="fas fa-plus-circle"></i> ثبت معامله جدید
        </h5>
    </div>
    <div class="card-body">
        <form action="{{ route('oil.store') }}" method="post" id="oilForm">
            @csrf
            <div class="row">
                <div class="col-md-2 mb-3">
                    <label for="type" class="form-label">نوع:</label>
                    <select class="form-select" id="type" name="type" required>
                        <option value="purchase">خرید</option>
                        <option value="sale">فروش</option>
                    </select>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="quantity_liters" class="form-label">مقدار (لیتر):</label>
                    <input type="number" step="0.01" class="form-control" id="quantity_liters" name="quantity_liters" required>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="price_per_liter" class="form-label">قیمت فی لیتر:</label>
                    <input type="number" step="0.01" class="form-control" id="price_per_liter" name="price_per_liter" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="party_name" class="form-label">طرف معامله:</label>
                    <input type="text" class="form-control" id="party_name" name="party_name" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="date" class="form-label">تاریخ:</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>
            </div>
            <button type="submit" class="btn btn-success">
                <i class="fas fa-save"></i> ثبت معامله
            </button>
        </form>
    </div>
</div>

<h2 class="mb-4 text-center">
    <i class="fas fa-list text-info"></i> لیست معاملات تیل
</h2>

<div id="oil-list">
    <!-- لیست معاملات تیل به صورت داینامیک بارگذاری می‌شود -->
</div>
@endsection

@push('scripts')
<script>
function renderOilList(data) {
    if (!data || data.length === 0) {
        document.getElementById('oil-list').innerHTML = '<p class="text-center">هیچ معامله تیلی ثبت نشده است.</p>';
        return;
    }
    let html = '';
    // Desktop Table
    html += '<div class="table-responsive d-none d-md-block">';
    html += '<table class="table table-striped table-hover">';
    html += '<thead class="table-dark"><tr><th>تاریخ</th><th>نوع</th><th>مقدار (لیتر)</th><th>قیمت فی لیتر</th><th>مجموع</th><th>طرف معامله</th></tr></thead><tbody>';
    data.forEach(function(row) {
        html += '<tr>';
        html += '<td>' + row.date + '</td>';
        html += '<td>' + (row.type === 'purchase' ? 'خرید' : 'فروش') + '</td>';
        html += '<td>' + row.quantity_liters + '</td>';
        html += '<td>' + row.price_per_liter + '</td>';
        html += '<td>' + row.total_amount + '</td>';
        html += '<td>' + row.party_name + '</td>';
        html += '</tr>';
    });
    html += '</tbody></table></div>';
    // Mobile Card View
    html += '<div class="d-block d-md-none">';
    data.forEach(function(row) {
        html += '<div class="card mb-2 shadow-sm animate__animated animate__fadeInUp">';
        html += '<div class="card-body p-3">';
        html += '<div class="d-flex justify-content-between align-items-center mb-2">';
        html += '<span class="badge bg-' + (row.type === 'purchase' ? 'info' : 'warning') + ' px-3 py-2" style="font-size:1rem;">' + (row.type === 'purchase' ? 'خرید' : 'فروش') + '</span>';
        html += '<span class="text-muted" style="font-size:0.95rem;"><i class="fas fa-calendar-alt"></i> ' + row.date + '</span>';
        html += '</div>';
        html += '<div class="mb-2"><strong>مقدار:</strong> <span class="text-primary">' + row.quantity_liters + ' لیتر</span></div>';
        html += '<div class="mb-2"><strong>قیمت فی لیتر:</strong> ' + row.price_per_liter + '</div>';
        html += '<div class="mb-2"><strong>مجموع:</strong> <span class="text-success">' + row.total_amount + '</span></div>';
        html += '<div><strong>طرف معامله:</strong> ' + row.party_name + '</div>';
        html += '</div></div>';
    });
    html += '</div>';
    document.getElementById('oil-list').innerHTML = html;
}

function fetchOilTransactions() {
    fetch('{{ route("oil.fetch") }}')
        .then(response => response.json())
        .then(data => renderOilList(data));
}

document.addEventListener('DOMContentLoaded', function() {
    fetchOilTransactions();
    
    if (document.getElementById('oilForm')) {
        document.getElementById('oilForm').addEventListener('submit', function(e) {
            setTimeout(fetchOilTransactions, 500);
        });
    }
});
</script>
@endpush 