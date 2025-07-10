// This is a placeholder for your JavaScript code.
// You can add interactive elements and dynamic functionalities here.

console.log("Script loaded successfully!");

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
    fetch('/bus/fetch')
        .then(response => response.json())
        .then(data => renderBusList(data));
}

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
    fetch('/oil/fetch')
        .then(response => response.json())
        .then(data => renderOilList(data));
}

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
    fetch('/expenses/fetch')
        .then(response => response.json())
        .then(data => renderExpensesList(data));
}

// Initialize functions based on current page
document.addEventListener('DOMContentLoaded', function() {
    // Auto-fetch data based on current page
    if (window.location.pathname.includes('/bus')) {
        fetchBus();
    }
    if (window.location.pathname.includes('/oil')) {
        fetchOilTransactions();
    }
    if (window.location.pathname.includes('/expenses')) {
        fetchExpenses();
    }
    
    // Form submission handlers
    if (document.getElementById('expenseForm')) {
        document.getElementById('expenseForm').addEventListener('submit', function(e) {
            setTimeout(fetchExpenses, 500);
        });
    }
    
    if (document.getElementById('oilForm')) {
        document.getElementById('oilForm').addEventListener('submit', function(e) {
            setTimeout(fetchOilTransactions, 500);
        });
    }
    
    if (document.getElementById('busForm')) {
        document.getElementById('busForm').addEventListener('submit', function(e) {
            setTimeout(fetchBus, 500);
        });
    }
}); 