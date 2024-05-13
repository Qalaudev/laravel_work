<!DOCTYPE html>
<head>
    <title>Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../SiteAssets/css/vendors/bootstrap.min.css" />
    <link rel="stylesheet" href="../SiteAssets/css/vendors/line-awesome.min.css" />
    <link rel="stylesheet" href="../SiteAssets/css/pages/layout.css" />
    <link rel="icon" href="../SiteAssets/images/covid-19.ico" />
    <script src="../SiteAssets/js/vendors/jquery.min.js"></script>
    <script src="../SiteAssets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="../SiteAssets/js/global.js"></script>
    <link rel="stylesheet" href="../SiteAssets/css/pages/dashboard.css" />
    <link rel="stylesheet" href="../SiteAssets/css/vendors/Chart.min.css" />
    <script src="../SiteAssets/js/vendors/Chart.bundle.min.js"></script>
    <script src="../SiteAssets/js/dashboard.js"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg shadow-sm fixed-top"><a class="navbar-brand" href=""><img src="../SiteAssets/images/icons8-university-50 (1).png"/><span></span></a>
        <div class="navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link"><i class="las la-question-circle"></i></a></li>
                <li class="nav-item dropdown dropleft"><a class="nav-link notification-dropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="badge badge-pill badge-primary" style="float:right;margin-bottom:-10px;"></span><i class="las la-bell"></i></a>
                    <div class="dropdown-menu notification-dropdown-menu shadow-lg" aria-labelledby="notification-dropdown">
                        <div class="dropdown-title"><a href="">notifications<span class="ml-2 notifications-count">(3)</span></a><a class="float-right" href="">mark all as read</a></div>
                        <div class="dropdown-body">
                            <ul class="list-unstyled">
                                <li class="media"><a class="notification-card" href=""><img class="mr-3" src="../SiteAssets/images/inbox.svg" alt="..."/><div class="media-body"><h6 class="mt-0 mb-1">collaboration tools available</h6><p>Cras sit amet nibh libero, in gravida nulla.</p><small class="text-muted">21.03.2020, 13.02</small></div></a></li>
                                <li class="media"><a class="notification-card" href=""><img class="mr-3" src="../SiteAssets/images/inbox.svg" alt="..."/><div class="media-body"><h6 class="mt-0 mb-1">use the new app launcher</h6><p>Cras sit amet nibh libero, in gravida nulla.</p><small class="text-muted">21.03.2020, 13.02</small></div></a></li>
                                <li class="media"><a class="notification-card" href=""><img class="mr-3" src="../SiteAssets/images/inbox.svg" alt="..."/><div class="media-body"><h6 class="mt-0 mb-1">the new dashboard abailable</h6><p>Cras sit amet nibh libero, in gravida nulla.</p><small class="text-muted">21.03.2020, 13.02</small></div></a></li>
                            </ul>
                        </div>
                        <div class="dropdown-footer text-center"><a href="./SitePages/notifications.html">view more</a></div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="nav-link"><span class="vertical-divider"></span></div>
                </li>
                <li class="nav-item"><a class="nav-link profile-dropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="rounded-circle" src="../SiteAssets/images/person.jpg"/><span class="d">jane doe</span></a>
                    <div class="dropdown">
                        <div class="dropdown-menu shadow-lg profile-dropdown-menu" aria-labelledby="profile-dropdown"><a class="dropdown-item" href="#"><i class="las la-user mr-2"></i>profile</a><a class="dropdown-item" href="#"><i class="las la-cog mr-2"></i>settings</a></div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
<main>
    <div class="side-nav">
        <ul class="list-group list-group-flush">
            <a class="list-group-item" href="{{ route('welcome') }}" data-toggle="tooltip" data-placement="bottom" title="Dashboard">
                <i class="las la-shapes la-lw"></i><span>Басты бет</span>
            </a>
            <a class="list-group-item" href="{{ route('plan') }}" data-toggle="tooltip" data-placement="bottom" title="Procurement">
                <i class="las la-shopping-cart la-lw"></i><span>Оқу жоспары</span>
            </a>
            <a class="list-group-item" href="{{ route('calendar') }}" data-toggle="tooltip" data-placement="bottom" title="Санаторийлер">
                <i class="las la-user-injured la-lw"></i><span>Күнтізбе</span>
            </a>
            <a class="list-group-item" href="{{ route('academic') }}" data-toggle="tooltip" data-placement="bottom" title="Specialists">
                <i class="las la-clinic-medical la-lw"></i><span>Академиялық ұтқырлық</span>
            </a>
            <a class="list-group-item" href="{{ route('message') }}" data-toggle="tooltip" data-placement="bottom" title="Notifications">
                <i class="las la-sms la-lw"></i><span>Хабарламалар</span>
            </a>
            <a class="list-group-item" href="{{ route('settings') }}" data-toggle="tooltip" data-placement="bottom" title="Баптаулар">
                <i class="las la-cogs la-lw"></i><span>Баптаулар</span>
            </a>
                <hr class="divider" />
            <div class="aob-items">
                <div class="card">
                    <div class="card-header"><img src="../../public/SiteAssets/images/covid-19.svg" /></div>
                    <div class="card-body">
                        <p><u><i class="las la-globe"></i>world</u></p>
                        <p>infected -<u>43,341,451</u></p>
                        <p>deaths -<u>1,157,509</u></p>
                    </div>
                    <div class="card-footer"><a class="btn btn-dark-red-f-gr btn-sm" href="https://covid19.who.int" target="_blank">view COVID-19 info</a></div>
                </div>
            </div>
        </ul>
    </div>
    <div class="main-content">
        <div class="container-fluid">
            <div class="section">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="page-title"></h5>
                    </div>
                </div>
            </div>
            <div class="section welcome-section">
                <div class="section-content">
                    <div class="card-deck">
                        <div class="card welcome-content-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 welcome-text-wrapper align-self-center">
                                        <h5>Қош келдіңіз!</h5>
                                    </div>
                                    <div class="col-md-6 welcome-img-wrapper"><img src="../SiteAssets/images/hello.svg" /></div>
                                </div>
                            </div>
                        </div>
                        <div class="card app-stats-card">
                            <div class="card-body">
                                <div class="row text-center">
                                    <div class="col-md-4"><i class="las la-user-injured la-3x align-self-center"></i>
                                        <p>GPA</p>
                                        <h4><a href="">3.33</a></h4>
                                    </div>
                                    <div class="col-md-4"><i class="las la-user-md la-3x align-self-center"></i>
                                        <p>Қарыздар</p>
                                        <h4><a href="">Жоқ</a></h4>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section functionality-section">
                <div class="section-content">
                    <div class="card-deck">
                        <a class="card text-center" href="">
                            <div class="card-title">
                                <div class="icon-wrapper"><i class="las la-clinic-medical"></i></div>
                            </div>
                            <div class="card-body">
                                <p>Академиялық Күнтізбеге өту</p>
                            </div>
                        </a>
                        <a class="card text-center" href="">
                            <div class="card-title">
                                <div class="icon-wrapper"><i class="las la-user-md"></i></div>
                            </div>
                            <div class="card-body">
                                <p>Жеке оқу жоспары</p>
                            </div>
                        </a>
                        <a class="card text-center" href="index.html">
                            <div class="card-title">
                                <div class="icon-wrapper"><i class="las la-user-plus"></i></div>
                            </div>
                            <div class="card-body">
                                <p>Академиялық ұтқырлық</p>
                            </div>
                        </a>

                        <a class="card text-center" href="">
                            <div class="card-title">
                                <div class="icon-wrapper"><i class="las la-plus-circle"></i></div>
                            </div>
                            <div class="card-body">
                                <p>Ақпараттық көмек</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="section card-summaries">
                <div class="section-content">
                    <div class="card-deck">
                        <div class="card">
                            <div class="card-header">
                                <h5>recent activities</h5>
                            </div>
                            <div class="card-body"><canvas id="recent-activity-chart"></canvas></div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5>total bookings</h5>
                            </div>
                            <div class="card-body"><canvas id="bookings-chart"></canvas></div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5>diseases summary</h5>
                            </div>
                            <div class="card-body"><canvas id="diseases-chart"></canvas></div>
                        </div>
                    </div>
                    <div class="card-deck">
                        <div class="card">
                            <div class="card-header">
                                <h5>top treatments</h5>
                            </div>
                            <div class="card-body">
                                <ol type="1">
                                    <li>consultation</li>
                                    <li>scaling</li>
                                    <li>root canal</li>
                                    <li>bleaching</li>
                                    <li>transplants</li>
                                    <li>cesarean</li>
                                    <li>x-rays</li>
                                </ol>
                            </div>
                            <div class="card-footer"><a class="view-more" href="">more<i class="las la-angle-right"></i></a></div>
                        </div>
                        <div class="card total-counts-summary">
                            <div class="card-header">
                                <h5>total counts</h5>
                            </div>
                            <div class="card-body">
                                <div class="row text-center text-capitalize">
                                    <div class="col-md-6"><i class="las la-users la-2x mb-1"></i>
                                        <h4 class="mb-1">100</h4>
                                        <p>total users</p>
                                    </div>
                                    <div class="col-md-6"><i class="las la-user-md la-2x mb-1"></i>
                                        <h4 class="mb-1">12</h4>
                                        <p>total doctors</p>
                                    </div>
                                    <div class="col-md-6"><i class="las la-user-injured la-2x mb-1"></i>
                                        <h4 class="mb-1">3210</h4>
                                        <p>total patients</p>
                                    </div>
                                    <div class="col-md-6"><i class="las la-hospital la-2x mb-1"></i>
                                        <h4 class="mb-1">40</h4>
                                        <p>total clinics</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer"><a class="view-more" href="">more<i class="las la-angle-right"></i></a></div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5>recent patients</h5>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover table-responsive-md table-borderless">
                                    <tbody>
                                    <tr>
                                        <td><img class="rounded-circle" src="../SiteAssets/images/man.svg" loading="lazy" /></td>
                                        <td>
                                            <p>john doe</p><small class="text-muted">dentist</small></td>
                                        <td>
                                            <p class="text-muted">male</p>
                                        </td>
                                        <td><button class="btn btn-sm"><i class="las la-ellipsis-h"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" src="../SiteAssets/images/man.svg" loading="lazy" /></td>
                                        <td>
                                            <p>john doe</p><small class="text-muted">dentist</small></td>
                                        <td>
                                            <p class="text-muted">male</p>
                                        </td>
                                        <td><button class="btn btn-sm"><i class="las la-ellipsis-h"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" src="../SiteAssets/images/man.svg" loading="lazy" /></td>
                                        <td>
                                            <p>john doe</p><small class="text-muted">dentist</small></td>
                                        <td>
                                            <p class="text-muted">male</p>
                                        </td>
                                        <td><button class="btn btn-sm"><i class="las la-ellipsis-h"></i></button></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer"><a class="view-more" href="">more<i class="las la-angle-right"></i></a></div>
                        </div>
                    </div>
                    <div class="card-deck">
                        <div class="card">
                            <div class="card-header">
                                <h5>doctors lists</h5>
                            </div>
                            <div class="card-body">
                                <table class="table table-borderless table-hover table-responsive-md">
                                    <tbody>
                                    <tr>
                                        <td><img class="rounded-circle" src="../SiteAssets/images/man.svg" loading="lazy" /></td>
                                        <td>
                                            <p>john doe</p><small class="text-muted">dentist</small></td>
                                        <td>
                                            <p class="text-muted">male</p>
                                        </td>
                                        <td class="text-right">
                                            <p>+271289178</p>
                                        </td>
                                        <td class="text-right"><button class="btn btn-dark-red-f btn-sm">appointment</button></td>
                                        <td><button class="btn btn-sm"><i class="las la-ellipsis-h"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" src="../SiteAssets/images/man.svg" loading="lazy" /></td>
                                        <td>
                                            <p>john doe</p><small class="text-muted">dentist</small></td>
                                        <td>
                                            <p class="text-muted">male</p>
                                        </td>
                                        <td class="text-right">
                                            <p>+271289178</p>
                                        </td>
                                        <td class="text-right"><button class="btn btn-dark-red-f btn-sm">appointment</button></td>
                                        <td><button class="btn btn-sm"><i class="las la-ellipsis-h"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" src="../SiteAssets/images/man.svg" loading="lazy" /></td>
                                        <td>
                                            <p>john doe</p><small class="text-muted">dentist</small></td>
                                        <td>
                                            <p class="text-muted">male</p>
                                        </td>
                                        <td class="text-right">
                                            <p>+271289178</p>
                                        </td>
                                        <td class="text-right"><button class="btn btn-dark-red-f btn-sm">appointment</button></td>
                                        <td><button class="btn btn-sm"><i class="las la-ellipsis-h"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" src="../SiteAssets/images/man.svg" loading="lazy" /></td>
                                        <td>
                                            <p>john doe</p><small class="text-muted">dentist</small></td>
                                        <td>
                                            <p class="text-muted">male</p>
                                        </td>
                                        <td class="text-right">
                                            <p>+271289178</p>
                                        </td>
                                        <td class="text-right"><button class="btn btn-dark-red-f btn-sm">appointment</button></td>
                                        <td><button class="btn btn-sm"><i class="las la-ellipsis-h"></i></button></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer"><a class="view-more" href="">more<i class="las la-angle-right"></i></a></div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5>upcoming appointments</h5>
                            </div>
                            <div class="card-body">
                                <table class="table table-borderless table-hover table-responsive-md">
                                    <tbody>
                                    <tr>
                                        <td><img class="rounded-circle" src="../SiteAssets/images/man.svg" loading="lazy" /></td>
                                        <td>
                                            <p>john doe</p><small class="text-muted">dentist</small></td>
                                        <td>
                                            <p class="text-muted">male</p>
                                        </td>
                                        <td class="text-right">
                                            <p>24y</p>
                                        </td>
                                        <td class="text-right"><button class="btn"><i class="las la-check-circle"></i></button><button class="btn"><i class="las la-times-circle"></i></button></td>
                                        <td><button class="btn btn-sm"><i class="las la-ellipsis-h"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" src="../SiteAssets/images/man.svg" loading="lazy" /></td>
                                        <td>
                                            <p>john doe</p><small class="text-muted">dentist</small></td>
                                        <td>
                                            <p class="text-muted">male</p>
                                        </td>
                                        <td class="text-right">
                                            <p>24y</p>
                                        </td>
                                        <td class="text-right"><button class="btn"><i class="las la-check-circle"></i></button><button class="btn"><i class="las la-times-circle"></i></button></td>
                                        <td><button class="btn btn-sm"><i class="las la-ellipsis-h"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" src="../SiteAssets/images/man.svg" loading="lazy" /></td>
                                        <td>
                                            <p>john doe</p><small class="text-muted">dentist</small></td>
                                        <td>
                                            <p class="text-muted">male</p>
                                        </td>
                                        <td class="text-right">
                                            <p>24y</p>
                                        </td>
                                        <td class="text-right"><button class="btn"><i class="las la-check-circle"></i></button><button class="btn"><i class="las la-times-circle"></i></button></td>
                                        <td><button class="btn btn-sm"><i class="las la-ellipsis-h"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" src="../SiteAssets/images/man.svg" loading="lazy" /></td>
                                        <td>
                                            <p>john doe</p><small class="text-muted">dentist</small></td>
                                        <td>
                                            <p class="text-muted">male</p>
                                        </td>
                                        <td class="text-right">
                                            <p>24y</p>
                                        </td>
                                        <td class="text-right"><button class="btn"><i class="las la-check-circle"></i></button><button class="btn"><i class="las la-times-circle"></i></button></td>
                                        <td><button class="btn btn-sm"><i class="las la-ellipsis-h"></i></button></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer"><a class="view-more" href="">more<i class="las la-angle-right"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <footer>
        <div class="page-footer text-center">
            <div class="fixed-bottom shadow-sm"><a href="https://covid19.who.int" target="_blank"><img src="../SiteAssets/images/covid-19.svg"/><span>view COVID-19 info</span></a></div>
        </div>
    </footer>
    </div>
</main>
</body>

</html>