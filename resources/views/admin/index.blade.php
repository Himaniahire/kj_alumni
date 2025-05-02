@extends('admin.layouts.layout')

@section('content')

    <h1>Welcome, {{ Auth::guard('web')->user()->name }} {{ Auth::guard('web')->user()->sname }}!</h1>
     <div class="row row-cols-xxl-4 row-cols-md-2 row-cols-1">
                        <div class="col">
                            <div class="card">
                                <div class="d-flex card-header justify-content-between align-items-center">
                                    <div>
                                        <h4 class="header-title">Total Orders</h4>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle drop-arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-fill fs-18"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body pt-0">
                                    <div class="d-flex align-items-end gap-2 justify-content-between">
                                        <div class="text-end flex-shrink-0">
                                            <div id="total-orders-chart" data-colors="#ff5b5b,#F6F7FB"></div>
                                        </div>
                                        <div class="text-end">
                                            <h3 class="fw-semibold">687.3k</h3>
                                            <p class="text-muted mb-0">Since last month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col">
                            <div class="card">
                                <div class="d-flex card-header justify-content-between align-items-center">
                                    <div>
                                        <h4 class="header-title">Total Revenue</h4>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle drop-arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-fill fs-18"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body pt-0">
                                    <div class="d-flex align-items-center gap-2 justify-content-between">
                                        <span class="badge bg-success rounded-pill fs-13">32% <i class="ti ti-trending-up"></i> </span>
                                        <div class="text-end">
                                            <h3 class="fw-semibold">$5.42M</h3>
                                            <p class="text-muted mb-0">Since last month</p>
                                        </div>
                                    </div>

                                    <div class="progress progress-soft progress-sm mt-3">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col">
                            <div class="card">
                                <div class="d-flex card-header justify-content-between align-items-center">
                                    <div>
                                        <h4 class="header-title">New Users</h4>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle drop-arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-fill fs-18"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body pt-0">
                                    <div class="d-flex align-items-end gap-2 justify-content-between">
                                        <div class="text-end flex-shrink-0">
                                            <div id="new-users-chart" data-colors="#f9c851,#F6F7FB"></div>
                                        </div>
                                        <div class="text-end">
                                            <h3 class="fw-semibold">45.3k</h3>
                                            <p class="text-muted mb-0">Since last month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col">
                            <div class="card">
                                <div class="d-flex card-header justify-content-between align-items-center">
                                    <div>
                                        <h4 class="header-title">Customer Satisfaction</h4>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle drop-arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-2-fill fs-18"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body pt-0">
                                    <div class="d-flex align-items-center gap-2 justify-content-between">
                                        <span class="badge bg-info rounded-pill fs-13">5.7% <i class="ti ti-trending-down"></i> </span>
                                        <div class="text-end">
                                            <h3 class="fw-semibold">94.3%</h3>
                                            <p class="text-muted mb-0">Since last month</p>
                                        </div>
                                    </div>

                                    <div class="progress progress-soft progress-sm mt-3">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 94.3%" aria-valuenow="94.3" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->

                    </div>

@endsection
