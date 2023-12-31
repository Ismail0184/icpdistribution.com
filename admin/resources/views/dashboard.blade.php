@extends('layouts.app')

@section('title')
Admin Panel
@endsection

@section('body')
    <div class="main-content-inner">
        <div class="sales-report-area mt-5 mb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-report mb-xs-30">
                        <div class="s-report-inner pr--20 pt--30 mb-3">
                            <div class="icon"><i class="fa fa-btc"></i></div>
                            <div class="s-report-title d-flex justify-content-between">
                                <h4 class="header-title mb-0">Products</h4>
                            </div>
                            <div class="d-flex justify-content-between pb-2">
                                <h2>{{$totalProducts}}</h2>
                                <span></span>
                            </div>
                        </div>
                        <canvas id="coin_sales1" height="100"></canvas>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-report mb-xs-30">
                        <div class="s-report-inner pr--20 pt--30 mb-3">
                            <div class="icon"><i class="fa fa-btc"></i></div>
                            <div class="s-report-title d-flex justify-content-between">
                                <h4 class="header-title mb-0">Customers</h4>
                            </div>
                            <div class="d-flex justify-content-between pb-2">
                                <h2>{{$totalCustomers}}</h2>
                                <span></span>
                            </div>
                        </div>
                        <canvas id="coin_sales2" height="100"></canvas>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-report">
                        <div class="s-report-inner pr--20 pt--30 mb-3">
                            <div class="icon"><i class="fa fa-eur"></i></div>
                            <div class="s-report-title d-flex justify-content-between">
                                <h4 class="header-title mb-0">Orders</h4>
                                <p>In Values</p>
                            </div>
                            <div class="d-flex justify-content-between pb-2">
                                <h2>{{$totalOrders}}</h2>
                                <span>4537459.87</span>
                            </div>
                        </div>
                        <canvas id="coin_sales3" height="100"></canvas>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12 mt-sm-30 mt-xs-30">
                <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-center">
                            <h4 class="header-title">Trading History</h4>
                            <div class="trd-history-tabs">
                                <ul class="nav" role="tablist">
                                    <li>
                                        <a class="active" data-toggle="tab" href="#buy_order" role="tab">Buy Order</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#sell_order" role="tab">Sell Order</a>
                                    </li>
                                </ul>
                            </div>
                            <select class="custome-select border-0 pr-3">
                                <option selected>Last 24 Hours</option>
                                <option value="0">01 July 2018</option>
                            </select>
                        </div>
                        <div class="trad-history mt-4">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="buy_order" role="tabpanel">
                                    <div class="table-responsive">
                                        <table class="dbkit-table">
                                            <tr class="heading-td">
                                                <td>Trading ID</td>
                                                <td>Time</td>
                                                <td>Status</td>
                                                <td>Amount</td>
                                                <td>Last Trade</td>
                                            </tr>
                                            <tr>
                                                <td>78211</td>
                                                <td>4.00 AM</td>
                                                <td>Pending</td>
                                                <td>$758.90</td>
                                                <td>$05245.090</td>
                                            </tr>
                                            <tr>
                                                <td>782782</td>
                                                <td>4.00 AM</td>
                                                <td>Pending</td>
                                                <td>$77878.90</td>
                                                <td>$7778.090</td>
                                            </tr>
                                            <tr>
                                                <td>89675978</td>
                                                <td>4.00 AM</td>
                                                <td>Pending</td>
                                                <td>$0768.90</td>
                                                <td>$0945.090</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="sell_order" role="tabpanel">
                                    <div class="table-responsive">
                                        <table class="dbkit-table">
                                            <tr class="heading-td">
                                                <td>Trading ID</td>
                                                <td>Time</td>
                                                <td>Status</td>
                                                <td>Amount</td>
                                                <td>Last Trade</td>
                                            </tr>
                                            <tr>
                                                <td>8964978</td>
                                                <td>4.00 AM</td>
                                                <td>Pending</td>
                                                <td>$445.90</td>
                                                <td>$094545.090</td>
                                            </tr>
                                            <tr>
                                                <td>89675978</td>
                                                <td>4.00 AM</td>
                                                <td>Pending</td>
                                                <td>$78.90</td>
                                                <td>$074852945.090</td>
                                            </tr>
                                            <tr>
                                                <td>78527878</td>
                                                <td>4.00 AM</td>
                                                <td>Pending</td>
                                                <td>$0768.90</td>
                                                <td>$65465.090</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- trading history area end -->
        </div>
    </div>
@endsection
