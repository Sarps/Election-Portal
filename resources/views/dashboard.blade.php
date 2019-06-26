<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>NSBE ELECTION</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <!-- CSS Files -->
    <link href="https://demos.creative-tim.com/material-dashboard/assets/css/material-dashboard.min.css?v=2.1.1"
        rel="stylesheet" />
</head>

<body class="">
   
    <div class="wrapper ">
        <div class="sidebar" data-color="orange" data-background-color="white"
            data-image="https://demos.creative-tim.com/material-dashboard/assets/img/sidebar-1.jpg">

            <div class="logo">
                <a href="http://www.creative-tim.com/" class="simple-text logo-normal">NSBE ELECTION</a>
            </div>

            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.html">
                            <i class="material-icons">home</i>
                            <p>Portal</p>
                        </a>
                    </li>
                    <li class="nav-item active  ">
                        <a class="nav-link" href="dashboard.html">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.html">
                            <i class="material-icons">exit_to_app</i>
                            <p>Logout</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">

            <div class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-warning card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">fingerprint</i>
                                    </div>
                                    <p class="card-category">Voter Count</p>
                                    <h3 class="card-title">{{$voterCount}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-danger">warning</i>
                                        <a href="#pablo">Total Number of Voters</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-success card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">store</i>
                                    </div>
                                    <p class="card-category">Total Ballot Votes</p>
                                    <h3 class="card-title">{{$voteCount}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> Last 24 Hours
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-danger card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">supervised_user_circle</i>
                                    </div>
                                    <p class="card-category">Nominee Count</p>
                                    <h3 class="card-title">{{$nomineeCount}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">local_offer</i> Each nominee went unopposed
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">ballot</i>
                                    </div>
                                    <p class="card-category">Rejected Ballots</p>
                                    <h3 class="card-title">{{$voterCount * $nomineeCount - $voteCount}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Just Updated
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-- <div class="row">
                        <div class="col-md-4">
                            <div class="card card-chart">
                                <div class="card-header card-header-success">
                                    <div class="ct-chart" id="dailySalesChart"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Daily Sales</h4>
                                    <p class="card-category">
                                        <span class="text-success"><i class="material-icons">call_made</i> 55% </span>
                                        increase in today sales.</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> updated 4 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-chart">
                                <div class="card-header card-header-warning">
                                    <div class="ct-chart" id="websiteViewsChart"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Email Subscriptions</h4>
                                    <p class="card-category">Last Campaign Performance</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-chart">
                                <div class="card-header card-header-danger">
                                    <div class="ct-chart" id="completedTasksChart"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Completed Tasks</h4>
                                    <p class="card-category">Last Campaign Performance</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> --}}


                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header card-header-warning">
                                    <h4 class="card-title">Aspirants Stats</h4>
                                    <p class="card-category">NSBE Election on 12th April, 2019</p>
                                </div>
                                <div class="card-body table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                            <th>Post</th>
                                            <th>Aspirant</th>
                                            <th>Up Votes</th>
                                            <th>Down Votes</th>
                                            <th>Rejected Ballots</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($aspirants as $aspirant)
                                            <tr>
                                                <td>{{$aspirant->post->title}}</td>
                                                <td>{{$aspirant->name}}</td>
                                                <td>{{$aspirant->ups}} / <b>({{round($aspirant->ups * 100 / $voterCount, 2) }}%)</b></td>
                                                <td>{{$aspirant->downs}} / <b>({{round($aspirant->downs * 100 / $voterCount, 2) }}%)</b></td>
                                                <td>{{$voterCount - ($aspirant->ups + $aspirant->downs)}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
            
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="https://demos.creative-tim.com/material-dashboard/assets/js/core/jquery.min.js"></script>
    <!-- Chartist JS -->
    <script src="https://demos.creative-tim.com/material-dashboard/assets/js/plugins/chartist.min.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="https://demos.creative-tim.com/material-dashboard/assets/js/material-dashboard.min.js?v=2.1.1"
        type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{asset('js/demo.js')}}"></script>
    <script>
        let chartData = {!! $results !!}
        $(document).ready(function () {
            demo.initDashboardPageCharts();
        });
    </script>
</body>

</html>