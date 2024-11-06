@extends('admin.layout.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="card-title2">Dashboard</h3>
            <section class="section dashboard">
                <div class="container">
                    <div class="row">
                        <!-- Sales Card -->
                        <div class="col-md-6">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Total Categories</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-grid-3x3-gap-fill"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $totalCategories }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-md-6">
                            <div class="card info-card revenue-card">
                                <div class="card-body">
                                    <h5 class="card-title">Total Products</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-box"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $totalProducts }}</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Revenue Card -->
                    </div>

                </div>
            </section>


        </div>
    </div>
@endsection

{{-- tes --}}
