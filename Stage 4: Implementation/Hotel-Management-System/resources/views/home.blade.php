@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <!-- Date & Clock Section -->
        <div class="row mb-4">
            <div class="col-md-12 text-center">
                <h4 id="current-date" class="fw-bold d-inline display-5"></h4>
                <span class="fw-bold mx-2"> </span>
                <h4 id="current-time" class="fw-bold d-inline display-5"></h4>
            </div>
        </div>

        <div class="row d-flex justify-content-start">
            <!-- Total Users -->
            <div class="col-md-3">
                <div class="card shadow-lg bg-primary text-white hover-card">
                    <div class="icon-container text-center mt-3">
                        <i class="fas fa-users fa-2x"></i>
                    </div>
                    <div class="card-body text-center">
                        <h2 class="display-4">{{ $totalUsers }}</h2>
                        <h4 class="lead">Users</h4>
                    </div>
                    <div class="border-top">
                        <a href="{{ route('users.index') }}" class="text-decoration-none text-white p-3 d-block text-center">
                            Manage Users <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bookings -->
            <div class="col-md-3">
                <div class="card shadow-lg bg-success text-white hover-card">
                    <div class="icon-container text-center mt-3">
                        <i class="fas fa-calendar-check fa-2x"></i>
                    </div>
                    <div class="card-body text-center">
                        <h2 class="display-4">{{ $totalBooking }}</h2>
                        <h4 class="lead">Bookings</h4>
                    </div>
                    <div class="border-top">
                        <a href="{{ route('bookings.index') }}" class="text-decoration-none text-white p-3 d-block text-center">
                            Manage Bookings <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Guests -->
            <div class="col-md-3">
                <div class="card shadow-lg bg-danger text-white hover-card">
                    <div class="icon-container text-center mt-3">
                        <i class="fas fa-user-friends fa-2x"></i>
                    </div>
                    <div class="card-body text-center">
                        <h2 class="display-4">{{ $totalGuest }}</h2>
                        <h4 class="lead">Guests</h4>
                    </div>
                    <div class="border-top">
                        <a href="{{ route('guests.index') }}" class="text-decoration-none text-white p-3 d-block text-center">
                            Manage Guests <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Rooms -->
            <div class="col-md-3">
                <div class="card shadow-lg bg-warning text-white hover-card">
                    <div class="icon-container text-center mt-3">
                        <i class="fas fa-hotel fa-2x"></i>
                    </div>
                    <div class="card-body text-center">
                        <h2 class="display-4">{{ $totalRoom }}</h2>
                        <h4 class="lead">Rooms</h4>
                    </div>
                    <div class="border-top">
                        <a href="{{ route('rooms.index') }}" class="text-decoration-none text-white p-3 d-block text-center">
                            Manage Rooms <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Invoices -->
            <div class="col-md-3">
                <div class="card shadow-lg bg-dark text-white hover-card">
                    <div class="icon-container text-center mt-3">
                        <i class="fas fa-file-invoice-dollar fa-2x"></i>
                    </div>
                    <div class="card-body text-center">
                        <h2 class="display-4">{{ $totalInvoice }}</h2>
                        <h4 class="lead">Invoices</h4>
                    </div>
                    <div class="border-top">
                        <a href="{{ route('invoices.index') }}" class="text-decoration-none text-white p-3 d-block text-center">
                            Manage Invoices <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Orders -->
            <div class="col-md-3">
                <div class="card shadow-lg bg-secondary text-white hover-card">
                    <div class="icon-container text-center mt-3">
                        <i class="fas fa-shopping-cart fa-2x"></i>
                    </div>
                    <div class="card-body text-center">
                        <h2 class="display-4">{{ $totalOrder }}</h2>
                        <h4 class="lead">Orders</h4>
                    </div>
                    <div class="border-top">
                        <a href="{{ route('orders.index') }}" class="text-decoration-none text-white p-3 d-block text-center">
                            Manage Orders <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Inventory -->
            <div class="col-md-3">
                <div class="card shadow-lg bg-info text-white hover-card">
                    <div class="icon-container text-center mt-3">
                        <i class="fas fa-box-open fa-2x"></i>
                    </div>
                    <div class="card-body text-center">
                        <h2 class="display-4">{{ $totalInventory }}</h2>
                        <h4 class="lead">Inventory</h4>
                    </div>
                    <div class="border-top">
                        <a href="{{ route('inventories.index') }}" class="text-decoration-none text-white p-3 d-block text-center">
                            Manage Inventory <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Staff -->
            <div class="col-md-3">
                <div class="card shadow-lg bg-orange text-white hover-card">
                    <div class="icon-container text-center mt-3">
                        <i class="fas fa-user-tie fa-2x"></i>
                    </div>
                    <div class="card-body text-center">
                        <h2 class="display-4">{{ $totalStaff }}</h2>
                        <h4 class="lead">Staff</h4>
                    </div>
                    <div class="border-top">
                        <a href="{{ route('staff.index') }}" class="text-decoration-none text-white p-3 d-block text-center">
                            Manage Staff <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Real-Time Date & Time Script -->
    <script>
        function updateDateTime() {
            const now = new Date();
            const optionsDate = { day: '2-digit', month: '2-digit', year: 'numeric' };
            const optionsTime = { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: false };

            document.getElementById('current-date').innerText = now.toLocaleDateString('en-GB', optionsDate);
            document.getElementById('current-time').innerText = now.toLocaleTimeString('en-GB', optionsTime);
        }

        setInterval(updateDateTime, 1000);
        updateDateTime();
    </script>
@endsection
