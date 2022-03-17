@extends('layouts.admin.app')
@section('content')
    {{-- reports --}}
    <div class="container-fluid pt-4 px-4">

        <div class="row g-4">
            <div class="col-sm-6 col-xl-3">

                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    {{-- <i class="fa fa-chart-line fa-3x text-primary"></i> --}}
                    {{-- <i class="fa fa-tachometer-alt me-2 fa-3x text-primary"></i> --}}
                    {{-- <i class="fa fa-ticket fa-3x text-primary"></i> --}}
                    {{-- <i class="fas fa-ticket-alt me-2 fa-3x text-primary"></i> --}}
                    <a class="nav-item nav-link">
                        <i class="fas fa-calendar-check me-2 fa-3x text-primary"></i>
                    </a>
                    <div class="ms-3">
                        <p class="mb-2">Total Orders</p>
                        {{-- <h6 class="mb-0">{{ $allOrders }}</h6> --}}
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">

                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <a href="{{ route('admin.users') }}" class="nav-item nav-link">
                        {{-- <i class="fa fa-chart-bar fa-3x text-primary"></i> --}}
                        <i class="fas fa-users me-2 fa-3x text-primary"></i>
                    </a>
                    <div class="ms-3">
                        <p class="mb-2">Registered Users</p>
                        {{-- <h6 class="mb-0">{{ $allUsers }}</h6> --}}
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">

                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <a href="{{ route('admin.categories.index') }}" class="nav-item nav-link">
                        <i class="fa fa-table me-2 fa-3x text-primary"></i>
                    </a>
                    <div class="ms-3">
                        <p class="mb-2">Total Categories</p>
                        {{-- <h6 class="mb-0">{{ $allCategories }}</h6> --}}
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">

                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    {{-- <a href="{{ route('admin.products.index') }}" class="nav-item nav-link ">
                        <i class="fa fa-address-book me-2 fa-3x text-primary"></i>
                    </a> --}}
                    <div class="ms-3">
                        <p class="mb-2">Total Products</p>
                        {{-- <h6 class="mb-0">{{ $allProducts }}</h6> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Orders --}}
    <div class="container-fluid pt-4 px-4">

        <div class="bg-light text-center rounded p-4">
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            {{-- <th scope="col"><input class="form-check-input" type="checkbox"></th> --}}
                            {{-- <th></th> --}}
                            {{-- <th scope="col">Order ID</th> --}}
                            <th scope="col">User Name</th>
                            <th scope="col">Movie</th>
                            <th scope="col">Day</th>
                            <th scope="col">Time</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->
@endsection
