@extends('layouts.app')

@section('title', 'مدیریت چالای | سیستم مدیریت مالی CodeAf{کُداف}')

@section('content')
<h2 class="mb-4 text-center">
    <i class="fas fa-bus text-info"></i> مدیریت سفرهای چالای
</h2>

<div class="card mb-4 shadow-sm">
    <div class="card-header bg-info text-white">
        <h5 class="mb-0">
            <i class="fas fa-plus-circle"></i> ثبت سفر جدید
        </h5>
    </div>
    <div class="card-body">
        <form action="{{ route('bus.store') }}" method="post" id="busForm">
            @csrf
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="trip_name" class="form-label">نام سفر:</label>
                    <input type="text" class="form-control" id="trip_name" name="trip_name" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="date" class="form-label">تاریخ سفر:</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="total_passengers" class="form-label">تعداد مسافران:</label>
                    <input type="number" class="form-control" id="total_passengers" name="total_passengers" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="total_fare" class="form-label">کرایه کل:</label>
                    <input type="number" step="0.01" class="form-control" id="total_fare" name="total_fare" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="fuel_cost" class="form-label">مصرف تیل:</label>
                    <input type="number" step="0.01" class="form-control" id="fuel_cost" name="fuel_cost" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="assistant_cost" class="form-label">مصرف شاگرد:</label>
                    <input type="number" step="0.01" class="form-control" id="assistant_cost" name="assistant_cost" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="other_expenses" class="form-label">مصارف دیگر:</label>
                    <input type="number" step="0.01" class="form-control" id="other_expenses" name="other_expenses" required>
                </div>
                <div class="col-md-3 mb-3 d-flex align-items-end">
                    <button type="submit" class="btn btn-info w-100">
                        <i class="fas fa-save"></i> ثبت سفر
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<h2 class="mb-4 text-center">
    <i class="fas fa-list text-info"></i> لیست سفرهای چالای
</h2>

<div id="bus-list">
    <!-- لیست سفرهای بَس به صورت داینامیک بارگذاری می‌شود -->
</div>
@endsection

@push('scripts')
<script>
function renderBusList(data) {
    if (!data || data.length === 0) {
        document.getElementById('bus-list').innerHTML = '<p class="text-center">هیچ سفر بَسی ثبت نشده است.</p>';
        return;
    }
    let html = '';
    // Desktop Table
    html += '<div class="table-responsive d-none d-md-block">';
    html += '<table class="table table-striped table-hover">';
    html += '<thead class="table-dark"><tr><th>نام سفر</th><th>تاریخ سفر</th><th>مسافران</th><th>کرایه کل</th><th>مصرف تیل</th><th>مصرف شاگرد</th><th>مصارف دیگر</th><th>سود خالص</th></tr></thead><tbody>';
    data.forEach(function(trip) {
        html += '<tr>';
        html += '<td>' + trip.trip_name + '</td>';
        html += '<td>' + trip.date + '</td>';
        html += '<td>' + trip.total_passengers + '</td>';
        html += '<td>' + trip.total_fare + '</td>';
        html += '<td>' + trip.fuel_cost + '</td>';
        html += '<td>' + trip.assistant_cost + '</td>';
        html += '<td>' + trip.other_expenses + '</td>';
        html += '<td>' + trip.net_profit + '</td>';
        html += '</tr>';
    });
    html += '</tbody></table></div>';
    // Mobile Card View
    html += '<div class="d-block d-md-none">';
    data.forEach(function(trip) {
        html += '<div class="card mb-2 shadow-sm animate__animated animate__fadeInUp">';
        html += '<div class="card-body p-3">';
        html += '<div class="d-flex justify-content-between align-items-center mb-2">';
        html += '<span class="badge bg-primary px-3 py-2" style="font-size:1rem;">' + trip.trip_name + '</span>';
        html += '<span class="text-muted" style="font-size:0.95rem;"><i class="fas fa-calendar-alt"></i> ' + trip.date + '</span>';
        html += '</div>';
        html += '<div class="mb-2"><strong>مسافران:</strong> ' + trip.total_passengers + '</div>';
        html += '<div class="mb-2"><strong>کرایه کل:</strong> <span class="text-success">' + trip.total_fare + '</span></div>';
        html += '<div class="mb-2"><strong>مصرف تیل:</strong> ' + trip.fuel_cost + '</div>';
        html += '<div class="mb-2"><strong>مصرف شاگرد:</strong> ' + trip.assistant_cost + '</div>';
        html += '<div class="mb-2"><strong>مصارف دیگر:</strong> ' + trip.other_expenses + '</div>';
        html += '<div><strong>سود خالص:</strong> <span class="text-info">' + trip.net_profit + '</span></div>';
        html += '</div></div>';
    });
    html += '</div>';
    document.getElementById('bus-list').innerHTML = html;
}

function fetchBus() {
    fetch('{{ route("bus.fetch") }}')
        .then(response => response.json())
        .then(data => renderBusList(data));
}

document.addEventListener('DOMContentLoaded', function() {
    fetchBus();
    
    if (document.getElementById('busForm')) {
        document.getElementById('busForm').addEventListener('submit', function(e) {
            setTimeout(fetchBus, 500);
        });
    }
});
</script>
@endpush 