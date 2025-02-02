<?php include '../include/head.php'; ?>

<body>
    <!-- ================================
         header 
         ================================-->
    <?php include '../include/header.php'; ?>
    <!-- end of header -->
    <!-- ================================
    <?php include '../include/navbar.php';  ?>
         content-outer-wrapper
         ================================-->
    <div class="content-outer-wrapper">
        <div class="chance"></div>
        <!-- end of chance -->
        <section class="profile-page">
            <div class="container">
                <!-- ================================
                  breadcrumbs
                  ================================-->
                <div class="row">
                    <div class="col-md-12 si-box-padding">
                        <section class="common-head-wrapper-sm clearfix">
                            <div class="wrapper-head">
                                <h4><i class="glyphicon glyphicon-th-large"></i><span>Dashboard</span></h4>
                            </div>
                            <!-- end of wrapper-head -->
                            <div class="bread-crumbs">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Dashboard</a></li>
                                </ul>
                            </div>
                            <!-- end of bread-crumbs -->
                        </section>
                        <!-- end of common-head-wrapper-sm -->
                    </div>
                    <!-- end of si-box-padding -->
                </div>
                <!-- end of row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- ================================
                        widget box main
                        ================================-->
                        <section class="dash-main-widget-box">
                            <div class="row">
                                <div class="col-sm-3 si-box-padding">
                                    <div class="dash-box">
                                        <h2>43</h2>
                                        <p>Merchant Onboarded <span>Lorem ipsum dolor</span></p>
                                        <div class="control-in-dc above-box">
                                            <span>6%</span><i class="ti-arrow-up"></i>
                                        </div>
                                    </div>
                                    <!-- end of dash-box -->
                                </div>
                                <!-- end of si-box-padding -->
                                <div class="col-sm-3 si-box-padding">
                                    <div class="dash-box">
                                        <h2>20</h2>
                                        <p>Invoice Generated <span>Sed volutpat metus</span></p>
                                        <div class="control-in-dc down-box">
                                            <span>2%</span><i class="ti-arrow-down"></i>
                                        </div>
                                    </div>
                                    <!-- end of dash-box -->
                                </div>
                                <!-- end of si-box-padding -->
                                <div class="col-sm-3 si-box-padding">
                                    <div class="dash-box">
                                        <h2>60</h2>
                                        <p>Receipts <span>Donec id feugiat lorem</span></p>
                                        <div class="control-in-dc above-box">
                                            <span>15%</span><i class="ti-arrow-up"></i>
                                        </div>
                                    </div>
                                    <!-- end of dash-box -->
                                </div>
                                <!-- end of si-box-padding -->
                                <div class="col-sm-3 si-box-padding">
                                    <div class="dash-box">
                                        <h2>35</h2>
                                        <p>New Users <span>Nam dictum sollicitudin</span></p>
                                        <div class="control-in-dc down-box">
                                            <span>4%</span><i class="ti-arrow-down"></i>
                                        </div>
                                    </div>
                                    <!-- end of dash-box -->
                                </div>
                                <!-- end of si-box-padding -->
                            </div>
                            <!-- end of row -->
                        </section>
                        <!-- end of widget box main -->
                        <!-- chart section -->
                        <section class="chart-section-dash">
                            <div class="row">
                                <!-- ================================
                              main chart
                              ================================-->
                                <div class="col-md-8 si-box-padding">
                                    <div class="chart-blue-value">
                                        <div class="chart-head">
                                            <div class="row">
                                                <div class="col-sm-7 col-xs-12">
                                                    <h4>Total Trial vs Live Merchants</h4>
                                                </div>
                                                <!-- end of col-sm-7 -->
                                                <div class="col-sm-5 col-xs-12">
                                                    <ul class="chart-selection-date clearfix">
                                                        <li><a href="#">Today</a></li>
                                                        <li><a href="#">Weekly</a></li>
                                                        <li><a href="#">Monthly</a></li>
                                                    </ul>
                                                </div>
                                                <!-- end of col-sm-5 -->
                                            </div>
                                            <!-- end of row -->
                                        </div>
                                        <!-- end of chart-head -->
                                        <div id="chart"></div>
                                        <!-- end of chart -->
                                    </div>
                                    <!-- end of chart-blue-value -->
                                </div>
                                <!-- end of col-md-8 -->
                                <!-- ================================
                              top 5 merchants by collection
                              ================================-->
                                <div class="col-md-4 si-box-padding">
                                    <div class="border-table widget-wrapper-sm scroll-table-sm">
                                        <div class="table-head">
                                            <p>Top 5 Merchants by collection</p>
                                        </div>
                                        <!-- end of table-head -->
                                        <div class="table-resposive">
                                            <table class="table sm-custom-table">
                                                <thead>
                                                    <tr>
                                                        <th>Merchant</th>
                                                        <th>Count</th>
                                                        <th>Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Jenni Will<span
                                                                class="increase-arrow indicator-icon"></span></td>
                                                        <td>1250</td>
                                                        <td>15868</td>
                                                    </tr>
                                                    <tr>
                                                        <td>John Mathew<span
                                                                class="increase-arrow indicator-icon"></span></td>
                                                        <td>1250</td>
                                                        <td>15868</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Varkala Vareethu<span
                                                                class="decrease-arrow indicator-icon"></span></td>
                                                        <td>1250</td>
                                                        <td>15868</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kutty Beeran<span
                                                                class="increase-arrow indicator-icon"></span></td>
                                                        <td>1250</td>
                                                        <td>15868</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kannan Nair<span
                                                                class="decrease-arrow indicator-icon"></span></td>
                                                        <td>1250</td>
                                                        <td>15868</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!-- end of table -->
                                        </div>
                                        <!-- end of table-resposive -->
                                    </div>
                                    <!-- end of border-table -->
                                    <!-- ================================
                                 merchant configuration box
                                 ================================-->
                                    <div class="merchant-configuration-dash">
                                        <a href="#" class="clearfix">
                                            <div class="config-icon">
                                                <div class="icon-box">
                                                    <i class="ti-panel"></i>
                                                </div>
                                                <!-- end of icon-box -->
                                            </div>
                                            <!-- end of config-icon -->
                                            <div class="config-para">
                                                <h3>Configuration<span>Lorem ipsum dolor sit amet</span></h3>
                                            </div>
                                            <!-- end of config-para -->
                                        </a>
                                    </div>
                                    <!-- end of merchant configuration -->
                                </div>
                                <!-- end of si-box-padding -->
                            </div>
                            <!-- end of row -->
                            <div class="row">
                                <!-- ================================
                              donut chart
                              ================================-->
                                <div class="col-md-3 col-sm-6 si-box-padding">
                                    <div class="border-table widget-wrapper-sm order-chart donut-chart-wrapper">
                                        <div class="table-head clearfix">
                                            <p class="pull-left">Donut Orders</p>
                                        </div>
                                        <!-- end of table-head -->
                                        <div class="donut-chart-orders">
                                            <div id="donut-chart"></div>
                                        </div>
                                        <!-- end of donut-chart-orders -->
                                    </div>
                                    <!-- end of border-table -->
                                </div>
                                <!-- end of donut chart -->
                                <!-- ================================
                              pie-chart
                              ================================-->
                                <div class="col-md-3 col-sm-6 si-box-padding">
                                    <div class="border-table widget-wrapper-sm order-chart donut-chart-wrapper">
                                        <div class="table-head clearfix">
                                            <p class="pull-left">Donut Orders</p>
                                        </div>
                                        <!-- end of table-head -->
                                        <div class="donut-chart-orders">
                                            <div id="pie-chart"></div>
                                        </div>
                                        <!-- end of donut-chart-orders -->
                                    </div>
                                    <!-- end of border-table -->
                                </div>
                                <!-- end of pie chart -->
                                <!-- ================================
                              line-chart
                              ================================-->
                                <div class="col-md-6 si-box-padding">
                                    <div class="border-table widget-wrapper-sm order-chart">
                                        <div class="table-head clearfix">
                                            <p class="pull-left">Total Orders</p>
                                        </div>
                                        <!-- end of table-head -->
                                        <div class="line-chart-orders">
                                            <div id="order-chart"></div>
                                        </div>
                                        <!-- end of line-chart-orders -->
                                    </div>
                                    <!-- end of border-table -->
                                </div>
                                <!-- end of line chart -->
                            </div>
                            <!-- end of row -->
                            <div class="row">
                                <div class="col-md-4 si-box-padding">
                                    <!-- ================================
                                 Invoice Table
                                 ================================-->
                                    <div class="border-table widget-wrapper-sm scroll-table-sm">
                                        <div class="table-head clearfix">
                                            <p class="pull-left">Invoice</p>
                                            <p class="table-cash-head pull-right">AED 3,850.00</p>
                                        </div>
                                        <!-- end of table-head -->
                                        <div class="table-resposive scroll-table">
                                            <table class="table sm-custom-table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Organization</th>
                                                        <th>Count</th>
                                                        <th class="action-td">Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>SafeThree</td>
                                                        <td>11</td>
                                                        <td class="action-td">3850.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Ond Soft</td>
                                                        <td>12</td>
                                                        <td class="action-td">58850.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>WiseUp</td>
                                                        <td>20</td>
                                                        <td class="action-td">5850.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Closedup</td>
                                                        <td>34</td>
                                                        <td class="action-td">3850.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>LockApp</td>
                                                        <td>74</td>
                                                        <td class="action-td">15005.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end of table-resposive -->
                                    </div>
                                    <!-- end of "border-table -->
                                </div>
                                <!-- end of col-md-4 -->
                                <div class="col-md-4 si-box-padding">
                                    <!-- ================================
                                 Merchant Projects table
                                 ================================-->
                                    <div class="border-table widget-wrapper-sm scroll-table-sm">
                                        <div class="table-head clearfix">
                                            <p class="pull-left">Merchant Projects</p>
                                        </div>
                                        <!-- end of table-head -->
                                        <div class="table-resposive scroll-table">
                                            <table class="table sm-custom-table">
                                                <tbody>
                                                    <tr>
                                                        <td><img src="images/author.png"
                                                                class="img-responsive img-profile-table" alt=""></td>
                                                        <td>
                                                            <div class="name-td">
                                                                <p>Powli Sarath<span>Project Id: Jan 7, 2019</span></p>
                                                            </div>
                                                        </td>
                                                        <td class="action-td">
                                                            <div class="active">finished</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="user-alt">LK</div>
                                                        </td>
                                                        <td>
                                                            <div class="name-td">
                                                                <p>Lallu Kurisingal<span>Project Id: Jan 7, 2019</span>
                                                                </p>
                                                            </div>
                                                        </td>
                                                        <td class="action-td">
                                                            <div class="inactive">rejected</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="images/author-1.png"
                                                                class="img-responsive img-profile-table" alt=""></td>
                                                        <td>
                                                            <div class="name-td">
                                                                <p>Barath Chandran<span>Project Id: Jan 7, 2019</span>
                                                                </p>
                                                            </div>
                                                        </td>
                                                        <td class="action-td">
                                                            <div class="number-percent">65%</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="images/author-2.png"
                                                                class="img-responsive img-profile-table" alt=""></td>
                                                        <td>
                                                            <div class="name-td">
                                                                <p>Joseph Vadakkan<span>Project Id: Jan 7, 2019</span>
                                                                </p>
                                                            </div>
                                                        </td>
                                                        <td class="action-td">
                                                            <div class="pending">pending</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="user-alt violet">JA</div>
                                                        </td>
                                                        <td>
                                                            <div class="name-td">
                                                                <p>Joseph Alex<span>Project Id: Jan 7, 2019</span></p>
                                                            </div>
                                                        </td>
                                                        <td class="action-td">
                                                            <div class="number-percent">80%</div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end of table-resposive -->
                                    </div>
                                    <!-- end of border-table -->
                                </div>
                                <!-- end of col-md-4 -->
                                <div class="col-md-4 si-box-padding">
                                    <!-- ================================
                                 User table
                                 ================================-->
                                    <div class="border-table widget-wrapper-sm scroll-table-sm">
                                        <div class="table-head clearfix">
                                            <p class="pull-left">Users</p>
                                        </div>
                                        <!-- end of table-head -->
                                        <div class="table-resposive scroll-table">
                                            <table class="table sm-custom-table">
                                                <tbody>
                                                    <tr>
                                                        <td><img src="images/author.png"
                                                                class="img-responsive img-profile-table" alt=""></td>
                                                        <td>LocInvoice</td>
                                                        <td>May 6, 2018</td>
                                                        <td><i class="ti-trash"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="images/author-1.png"
                                                                class="img-responsive img-profile-table" alt=""></td>
                                                        <td>OnlineInvoice</td>
                                                        <td>Jan 6, 2018</td>
                                                        <td><i class="ti-trash"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="images/author-2.png"
                                                                class="img-responsive img-profile-table" alt=""></td>
                                                        <td>SuperInvoice</td>
                                                        <td>Feb 6, 2018</td>
                                                        <td><i class="ti-trash"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="images/author-3.png"
                                                                class="img-responsive img-profile-table" alt=""></td>
                                                        <td>LoyalInvoice</td>
                                                        <td>March 6, 2018</td>
                                                        <td><i class="ti-trash"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="user-alt green">AI</div>
                                                        </td>
                                                        <td>AppInvoice</td>
                                                        <td>April 6, 2018</td>
                                                        <td><i class="ti-trash"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="images/author.png"
                                                                class="img-responsive img-profile-table" alt=""></td>
                                                        <td>LocInvoice</td>
                                                        <td>April 6, 2018</td>
                                                        <td><i class="ti-trash"></i></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!-- end of sm-custom-table -->
                                        </div>
                                        <!-- end of table-resposive -->
                                    </div>
                                    <!-- end of border-table -->
                                </div>
                                <!-- end of si-box-padding -->
                            </div>
                            <!-- end of row -->
                        </section>
                        <!-- end of chart section -->
                        <!-- ================================
                        small-widget
                        ================================-->
                        <section class="small-widget">
                            <div class="row">
                                <div class="col-md-3 si-box-padding">
                                    <div class="small-box-widget clearfix">
                                        <div class="small-icon-box invoice-box">
                                            <i class="ti-write"></i>
                                        </div>
                                        <!-- end of small-icon-box -->
                                        <div class="small-para-box">
                                            <p><span>150 Invoice</span> Todays Invoice Details</p>
                                        </div>
                                        <!-- end of small-para-box -->
                                    </div>
                                    <!-- end of small-box-widget -->
                                </div>
                                <!-- end of col-md-3 -->
                                <div class="col-md-3 si-box-padding">
                                    <div class="small-box-widget clearfix">
                                        <div class="small-icon-box receipt-box">
                                            <i class="ti-receipt"></i>
                                        </div>
                                        <!-- end of small-icon-box -->
                                        <div class="small-para-box">
                                            <p><span>230 Receipt</span> Todays Receipt Details</p>
                                        </div>
                                        <!-- end of small-para-box -->
                                    </div>
                                    <!-- end of small-box-widget -->
                                </div>
                                <!-- end of col-md-3 -->
                                <div class="col-md-3 si-box-padding">
                                    <div class="small-box-widget clearfix">
                                        <div class="small-icon-box merchants-box">
                                            <i class="ti-bar-chart"></i>
                                        </div>
                                        <!-- end of mall-icon-box -->
                                        <div class="small-para-box">
                                            <p><span>86 Merchants</span> Todays Merchants Details</p>
                                        </div>
                                        <!-- end of small-para-box -->
                                    </div>
                                    <!-- end of small-box-widget -->
                                </div>
                                <!-- end of si-box-padding -->
                                <div class="col-md-3 si-box-padding">
                                    <div class="small-box-widget clearfix">
                                        <div class="small-icon-box user-box">
                                            <i class="ti-user"></i>
                                        </div>
                                        <!-- end of small-icon-box -->
                                        <div class="small-para-box">
                                            <p><span>60 New User</span> Todays User Details</p>
                                        </div>
                                        <!-- end of small-para-box -->
                                    </div>
                                    <!-- end of small-box-widget -->
                                </div>
                                <!-- end of col-md-3 -->
                            </div>
                            <!-- end of row -->
                        </section>
                        <!-- end of small-widget -->
                        <!-- ================================
                        data table
                        ================================-->
                        <section class="merchant-table row">
                            <div class="col-md-12 si-box-padding">
                                <div class="data-table-wrapper border-table widget-wrapper-sm">
                                    <div class="table-head clearfix data-table-head">
                                        <p class="pull-left">Receipt</p>
                                    </div>
                                    <!-- end of table-head -->
                                    <div class="table-responsive">
                                        <table id="myTable" class="display custom-table-data">
                                            <thead>
                                                <tr>
                                                    <th>Merchant Code</th>
                                                    <th>Merchant Name</th>
                                                    <th>Onboarder Date</th>
                                                    <th>Client</th>
                                                    <th>Region</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1250</td>
                                                    <td>Jenni Will</td>
                                                    <td>19 Mar 2019</td>
                                                    <td><img src="images/client-logo1.jpg"
                                                            class="img-responsive table-img-block" alt=""></td>
                                                    <td>Test</td>
                                                    <td class="action-td">
                                                        <div class="active">active</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1250</td>
                                                    <td>Jenni Joseph</td>
                                                    <td>19 Mar 2019</td>
                                                    <td><img src="images/client-logo2.jpg"
                                                            class="img-responsive table-img-block" alt=""></td>
                                                    <td>Test</td>
                                                    <td class="action-td">
                                                        <div class="inactive">Inactive</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1250</td>
                                                    <td>Lilly Thomas</td>
                                                    <td>19 Mar 2019</td>
                                                    <td><img src="images/client-logo3.jpg"
                                                            class="img-responsive table-img-block" alt=""></td>
                                                    <td>Test</td>
                                                    <td class="action-td">
                                                        <div class="active">active</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1250</td>
                                                    <td>Peter Parker</td>
                                                    <td>19 Mar 2019</td>
                                                    <td><img src="images/client-logo4.jpg"
                                                            class="img-responsive table-img-block" alt=""></td>
                                                    <td>Test</td>
                                                    <td class="action-td">
                                                        <div class="active">active</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1250</td>
                                                    <td>Jeni Lopus</td>
                                                    <td>19 Mar 2019</td>
                                                    <td><img src="images/client-logo5.jpg"
                                                            class="img-responsive table-img-block" alt=""></td>
                                                    <td>Test</td>
                                                    <td class="action-td">
                                                        <div class="inactive">Inactive</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1250</td>
                                                    <td>PrithviRaj</td>
                                                    <td>19 Mar 2019</td>
                                                    <td><img src="images/client-logo1.jpg"
                                                            class="img-responsive table-img-block" alt=""></td>
                                                    <td>Test</td>
                                                    <td class="action-td">
                                                        <div class="active">active</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1250</td>
                                                    <td>PP Shibu</td>
                                                    <td>19 Mar 2019</td>
                                                    <td><img src="images/client-logo2.jpg"
                                                            class="img-responsive table-img-block" alt=""></td>
                                                    <td>Test</td>
                                                    <td class="action-td">
                                                        <div class="active">active</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1250</td>
                                                    <td>Lolan Marthandan</td>
                                                    <td>19 Mar 2019</td>
                                                    <td><img src="images/client-logo3.jpg"
                                                            class="img-responsive table-img-block" alt=""></td>
                                                    <td>Test</td>
                                                    <td class="action-td">
                                                        <div class="active">active</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1250</td>
                                                    <td>George</td>
                                                    <td>19 Mar 2019</td>
                                                    <td><img src="images/client-logo4.jpg"
                                                            class="img-responsive table-img-block" alt=""></td>
                                                    <td>Test</td>
                                                    <td class="action-td">
                                                        <div class="active">active</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1250</td>
                                                    <td>Prachannam Prakasan</td>
                                                    <td>19 Mar 2019</td>
                                                    <td><img src="images/client-logo5.jpg"
                                                            class="img-responsive table-img-block" alt=""></td>
                                                    <td>Test</td>
                                                    <td class="action-td">
                                                        <div class="inactive">Inactive</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1250</td>
                                                    <td>Batery Paramu</td>
                                                    <td>19 Mar 2019</td>
                                                    <td><img src="images/client-logo1.jpg"
                                                            class="img-responsive table-img-block" alt=""></td>
                                                    <td>Test</td>
                                                    <td class="action-td">
                                                        <div class="active">active</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1250</td>
                                                    <td>Vinayak</td>
                                                    <td>19 Mar 2019</td>
                                                    <td><img src="images/client-logo2.jpg"
                                                            class="img-responsive table-img-block" alt=""></td>
                                                    <td>Test</td>
                                                    <td class="action-td">
                                                        <div class="active">active</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1250</td>
                                                    <td>Lincy Ignus</td>
                                                    <td>19 Mar 2019</td>
                                                    <td><img src="images/client-logo3.jpg"
                                                            class="img-responsive table-img-block" alt=""></td>
                                                    <td>Test</td>
                                                    <td class="action-td">
                                                        <div class="inactive">Inactive</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1250</td>
                                                    <td>Jijesh</td>
                                                    <td>19 Mar 2019</td>
                                                    <td><img src="images/client-logo4.jpg"
                                                            class="img-responsive table-img-block" alt=""></td>
                                                    <td>Test</td>
                                                    <td class="action-td">
                                                        <div class="active">active</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1250</td>
                                                    <td>Sujin</td>
                                                    <td>19 Mar 2019</td>
                                                    <td><img src="images/client-logo5.jpg"
                                                            class="img-responsive table-img-block" alt=""></td>
                                                    <td>Test</td>
                                                    <td class="action-td">
                                                        <div class="active">active</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1250</td>
                                                    <td>KM Mani</td>
                                                    <td>19 Mar 2019</td>
                                                    <td><img src="images/client-logo1.jpg"
                                                            class="img-responsive table-img-block" alt=""></td>
                                                    <td>Test</td>
                                                    <td class="action-td">
                                                        <div class="inactive">Inactive</div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- end of table-responsive -->
                                </div>
                                <!-- end of data-table-wrapper -->
                            </div>
                            <!-- end of si-box-padding -->
                        </section>
                        <!-- end of data-table -->
                        <!-- ================================
                        Merchant List
                        ================================-->
                        <section class="merchant-table row">
                            <div class="col-md-12 si-box-padding">
                                <div class="border-table widget-wrapper-sm">
                                    <div class="table-head clearfix">
                                        <p class="pull-left">Merchants list</p>
                                        <a href="merchants.html" class="btn sm-custom-btn pull-right">View more</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table sm-custom-table">
                                            <thead>
                                                <tr>
                                                    <th class="img-th"></th>
                                                    <th>Merchant Name</th>
                                                    <th>Onboarded Status</th>
                                                    <th>Region</th>
                                                    <th class="action-td">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img src="images/author.png"
                                                            class="img-responsive img-profile-table" alt=""></td>
                                                    <td>
                                                        <div class="name-td">
                                                            <p>Jagannadhan<span>Project Id: Jan 7, 2019</span></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="status-range clearfix">
                                                            <div class="range-left">
                                                                <p>80%</p>
                                                            </div>
                                                            <div class="range-right">
                                                                <p>8 June 2018</p>
                                                            </div>
                                                        </div>
                                                        <div class="status-wrapper">
                                                            <div class="inner-status-wrapper green-status eighty"></div>
                                                        </div>
                                                    </td>
                                                    <td>Test</td>
                                                    <td class="action-td">
                                                        <div class="active">active</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="images/author-1.png"
                                                            class="img-responsive img-profile-table" alt=""></td>
                                                    <td>
                                                        <div class="name-td">
                                                            <p>Joseph Alex<span>Project Id: Jan 7, 2019</span></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="status-range clearfix">
                                                            <div class="range-left">
                                                                <p>80%</p>
                                                            </div>
                                                            <div class="range-right">
                                                                <p>8 June 2018</p>
                                                            </div>
                                                        </div>
                                                        <div class="status-wrapper">
                                                            <div class="inner-status-wrapper red-status twenty"></div>
                                                        </div>
                                                    </td>
                                                    <td>Live</td>
                                                    <td class="action-td">
                                                        <div class="inactive">Inactive</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="user-alt">SNV</div>
                                                    </td>
                                                    <td>
                                                        <div class="name-td">
                                                            <p>Surya Narayana Varma<span>Project Id: Jan 7, 2019</span>
                                                            </p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="status-range clearfix">
                                                            <div class="range-left">
                                                                <p>80%</p>
                                                            </div>
                                                            <div class="range-right">
                                                                <p>8 June 2018</p>
                                                            </div>
                                                        </div>
                                                        <div class="status-wrapper">
                                                            <div class="inner-status-wrapper yellow-status fifty"></div>
                                                        </div>
                                                    </td>
                                                    <td>Live</td>
                                                    <td class="action-td">
                                                        <div class="inactive">Inactive</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="images/author-2.png"
                                                            class="img-responsive img-profile-table" alt=""></td>
                                                    <td>
                                                        <div class="name-td">
                                                            <p>Doray Singam<span>Project Id: Jan 7, 2019</span></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="status-range clearfix">
                                                            <div class="range-left">
                                                                <p>80%</p>
                                                            </div>
                                                            <div class="range-right">
                                                                <p>8 June 2018</p>
                                                            </div>
                                                        </div>
                                                        <div class="status-wrapper">
                                                            <div class="inner-status-wrapper green-status ninty"></div>
                                                        </div>
                                                    </td>
                                                    <td>Test</td>
                                                    <td class="action-td">
                                                        <div class="active">active</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="user-alt green">BP</div>
                                                    </td>
                                                    <td>
                                                        <div class="name-td">
                                                            <p>Baskaran Pillai<span>Project Id: Jan 7, 2019</span></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="status-range clearfix">
                                                            <div class="range-left">
                                                                <p>80%</p>
                                                            </div>
                                                            <div class="range-right">
                                                                <p>8 June 2018</p>
                                                            </div>
                                                        </div>
                                                        <div class="status-wrapper">
                                                            <div class="inner-status-wrapper green-status seventy">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Live</td>
                                                    <td class="action-td">
                                                        <div class="active">active</div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- end of sm-custom-table -->
                                    </div>
                                    <!-- end of table-responsive -->
                                </div>
                                <!-- end of border-table -->
                            </div>
                            <!-- end of col-md-12 -->
                        </section>
                        <!-- end of merchant-table -->
                    </div>
                    <!-- end of col-md-12 -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container -->
        </section>
        <!-- end of profile-page -->
    </div>
    <!-- end of content-outer-wrapper -->
    <!--==============================
         footer
         ==============================-->
   
        <!-- end of container -->
        <?php include '../include/footer.php';?>
        <!-- end of footer -->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS, then Plugins, then Custom js -->
        <!-- Jquery -->
        <?php include '../include/script.php';?>
       
</body>

</html>