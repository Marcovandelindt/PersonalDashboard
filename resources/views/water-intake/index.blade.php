@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-title">
                    <h1>Water Intake</h1>
                    <p>On this page, all drink entries for the current day are displayed. Every drink has a hydration
                        percentage,
                        which is counted towards the dailt water intake goal.</p>
                    <a href="{{ route('drinks.create') }}" class="btn btn-outline-success">Add new drink</a>
                </div>
            </div>
        </div>

        <div class="section mt-5">
            <div class="row">
                <div class="col-md-3">
                    <div class="card statistic-card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Intake</h5>
                                    <span class="h2 font-weight-bold mb-0">1050 ML</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                                        <i class="fa-solid fa-chart-simple"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                                <span class="text-danger mr-2"><i class="fa fa-arrow-up"></i> -11%</span>
                                <span class="text-nowrap">Compared to yesterday</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card statistic-card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Hydration</h5>
                                    <span class="h2 font-weight-bold mb-0">95%</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                                        <i class="fa-solid fa-percent"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> +5%</span>
                                <span class="text-nowrap">Compared to yesterday</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card statistic-card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Entries</h5>
                                    <span class="h2 font-weight-bold mb-0">3</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                                        <i class="fa-solid fa-book"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                                <span class="text-danger mr-2"><i class="fa fa-arrow-up"></i> -2</span>
                                <span class="text-nowrap">Compared to yesterday</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card statistic-card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Goal</h5>
                                    <span class="h2 font-weight-bold mb-0">50%</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                                        <i class="fa-solid fa-bullseye"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                                <span class="text-danger mr-2"><i class="fa fa-arrow-up"></i> 1200 ML</span>
                                <span class="text-nowrap">until goal</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section mt-5">
            <div class="row">
                <div class="col-md-6">
                    <h2>Today's drinks</h2>

                    <table class="table table-striped table-responsive">
                        <thead>
                        <tr>
                            <th>Time</th>
                            <th>Drink</th>
                            <th>Amount</th>
                            <th>Hydration Percentage</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>16:12</td>
                            <td><a href="#">Batu - Kombucha</a></td>
                            <td>330ML</td>
                            <th>95%</th>
                        </tr>
                        <tr>
                            <td>14:31</td>
                            <td><a href="#">Water</a></td>
                            <td>620ML</td>
                            <th>100%</th>
                        </tr>
                        <tr>
                            <td>12:01</td>
                            <td><a href="#">Coffee</a></td>
                            <td>100ML</td>
                            <th>90%</th>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
