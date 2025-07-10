@extends('layouts.app')

@section('title', 'مدیریت دفتر ترمینال | سیستم مدیریت مالی CodeAf{کُداف}')

@section('content')
<h2 class="mb-4 text-center">
    <i class="fas fa-exchange-alt text-primary"></i> مدیریت مصارف و عواید روزانه
</h2>

<div class="card mb-4 shadow-sm">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">
            <i class="fas fa-plus-circle"></i> ثبت مصرف/عواید جدید
        </h5>
    </div>
    <div class="card-body">
        <form action="{{ route('expenses.store') }}" method="post" id="expenseForm">
            @csrf
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="type" class="form-label">نوع:</label>
                    <select class="form-select" id="type" name="type" required>
                        <option value="expense">مصرف</option>
                        <option value="revenue">عواید</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="amount" class="form-label">مقدار:</label>
                    <input type="number" step="0.01" class="form-control" id="amount" name="amount" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="description" class="form-label">توضیحات:</label>
                    <input type="text" class="form-control" id="description" name="description" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="date" class="form-label">تاریخ:</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>
            </div>
            <button type="submit" class="btn btn-success">
                <i class="fas fa-save"></i> ثبت
            </button>
        </form>
    </div>
</div>

<h2 class="mb-4 text-center">
    <i class="fas fa-list text-info"></i> لیست مصارف و عواید
</h2>

<div id="expenses-list">
    <!-- لیست مصارف و عواید به صورت داینامیک بارگذاری می‌شود -->
</div>
@endsection

@push('scripts')
<script>
function renderExpensesList(data) {
    if (!data || data.length === 0) {
        document.getElementById('expenses-list').innerHTML = '<p class="text-center">هیچ مصارف یا عوایدی ثبت نشده است.</p>';
        return;
    }
    let html = '';
    // Desktop Table
    html += '<div class="table-responsive d-none d-md-block">';
    html += '<table class="table table-striped table-hover">';
    html += '<thead class="table-dark"><tr><th>تاریخ</th><th>نوع</th><th>مبلغ</th><th>توضیحات</th></tr></thead><tbody>';
    data.forEach(function(row) {
        html += '<tr>';
        html += '<td>' + row.date + '</td>';
        html += '<td>' + (row.type === 'expense' ? 'مصرف' : 'عواید') + '</td>';
        html += '<td>' + row.amount + '</td>';
        html += '<td>' + row.description + '</td>';
        html += '</tr>';
    });
    html += '</tbody></table></div>';
    // Mobile Card View
    html += '<div class="d-block d-md-none">';
    data.forEach(function(row) {
        html += '<div class="card mb-2 shadow-sm animate__animated animate__fadeInUp">';
        html += '<div class="card-body p-3">';
        html += '<div class="d-flex justify-content-between align-items-center mb-2">';
        html += '<span class="badge bg-' + (row.type === 'expense' ? 'danger' : 'success') + ' px-3 py-2" style="font-size:1rem;">' + (row.type === 'expense' ? 'مصرف' : 'عواید') + '</span>';
        html += '<span class="text-muted" style="font-size:0.95rem;"><i class="fas fa-calendar-alt"></i> ' + row.date + '</span>';
        html += '</div>';
        html += '<div class="mb-2"><strong>مبلغ:</strong> <span class="text-primary" style="font-size:1.1rem;">' + row.amount + '</span></div>';
        html += '<div><strong>توضیحات:</strong> ' + row.description + '</div>';
        html += '</div></div>';
    });
    html += '</div>';
    document.getElementById('expenses-list').innerHTML = html;
}

function fetchExpenses() {
    fetch('{{ route("expenses.fetch") }}')
        .then(response => response.json())
        .then(data => renderExpensesList(data));
}

document.addEventListener('DOMContentLoaded', function() {
    fetchExpenses();
    
    if (document.getElementById('expenseForm')) {
        document.getElementById('expenseForm').addEventListener('submit', function(e) {
            setTimeout(fetchExpenses, 500);
        });
    }
});
</script>
@endpush 