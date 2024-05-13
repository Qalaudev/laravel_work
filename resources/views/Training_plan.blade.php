<html>

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
    <nav class="navbar navbar-expand-lg shadow-sm fixed-top"><a class="navbar-brand" href=""><img src="../SiteAssets/images/hospital-website.svg"/><span>i~Afya</span></a>
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
                        <div class="dropdown-footer text-center"><a href="notifications.html">view more</a></div>
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
            <a class="list-group-item" href="dashboard.html" data-toggle="tooltip" data-placement="bottom" title="Dashboard">
                <i class="las la-shapes la-lw"></i><span>Басты бет</span>
            </a>
            <a class="list-group-item" href="procurement.html" data-toggle="tooltip" data-placement="bottom" title="Procurement">
                <i class="las la-shopping-cart la-lw"></i><span>Оқу жоспары</span>
            </a>
            <a class="list-group-item" href="patients.html" data-toggle="tooltip" data-placement="bottom" title="Санаторийлер">
                <i class="las la-user-injured la-lw"></i><span>Күнтізбе</span>
            </a>
            <a class="list-group-item" href="specialists.html" data-toggle="tooltip" data-placement="bottom" title="Specialists">
                <i class="las la-clinic-medical la-lw"></i><span>Академиялық ұтқырлық</span>
            </a>
            <a class="list-group-item" href="notifications.html" data-toggle="tooltip" data-placement="bottom" title="Notifications">
                <i class="las la-sms la-lw"></i><span>Хабарламалар</span>
            </a>
            <a class="list-group-item" href="settings.html" data-toggle="tooltip" data-placement="bottom" title="Баптаулар">
                <i class="las la-cogs la-lw"></i><span>Баптаулар</span>
            </a>




            <hr class="divider" />
            <div class="aob-items">
                <div class="card">
                    <div class="card-header"><img src="../SiteAssets/images/covid-19.svg" /></div>
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
            <div class="section title-section">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Емдеу сипаттама</h5>
                    </div>
                    <!-- <div class="col-md-6"><button class="btn btn-dark-red-f-gr"><i class="las la-plus-circle"></i>create a request</button></div> -->
                </div>
            </div>
            <div class="section filters-section">
                <div class="row">
                    <div class="col-lg-8 col-md-6"><button class="btn btn-dark-red-o mr-2"><i class="las la-filter"></i>Фильтр</button><button class="btn btn-dark-red-o"><i class="las la-sort"></i>Сұрыптау</button></div>
                    <div class="col-lg-4 col-md-6">
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i class="las la-search"></i></span></div><input class="form-control" placeholder="ем бойынша іздеу" /></div>
                    </div>
                </div>
            </div>
            <div class="section content-section">
                <table class="table table-hover table-responsive-lg">
                    <thead>
                    <tr>
                        <th>Ауру түрі</th>
                        <th>Ем түрі</th>
                        <th>Емделу уақыты</th>
                        <th>Емделген адам саны</th>

                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <p>Тыныс алу органдарының
                                аурулары</p><small class="text-center">TYN/2901/21</td>

                        <td>Ингаляция, физиотерапия, климаттық терапия.</td>
                        <td>Ұзақтығы: 2-4 апта</td>
                        <td>192</td>
                        <td><button class="badge-pill"><a href="patients.html">Жазылу</button></td>
                        <td><a href=""><i class="las la-ellipsis-h"></i></a></td>
                    </tr>
                    <tr>
                        <td>
                            <p>Жүрек-тамыр жүйесінің аурулары
                            </p><small class="text-center">JUR/2851/21</td>

                        <td>Кардио, емдік ванналар, физиотерапия, диета.
                        </td>
                        <td>Ұзақтығы: 3-6 апта</td>
                        <td>102</td>
                        <td><button class="badge-pill"><a href="patients.html">Жазылу</button></td>
                        <td><a href=""><i class="las la-ellipsis-h"></i></a></td>
                    </tr>
                    <tr>
                        <td>
                            <p>Тірек-қимыл аппаратының аурулары
                            </p><small class="text-center">TIR/1211/28</td>

                        <td>Емдік гимнастика, массаж, физиотерапия, бассейн, сауна.</td>
                        <td>Ұзақтығы: 3-5 апта</td>
                        <td>72</td>
                        <td><button class="badge-pill"><a href="patients.html">Жазылу</button></td>
                        <td><a href=""><i class="las la-ellipsis-h"></i></a></td>
                    </tr>
                    <tr>
                        <td>
                            <p>Неврологиялық аурулар</p><small class="text-center">FIZ/2901/21</td>

                        <td>Массаж, физиотерапия, ароматерапия, психотерапия</td>
                        <td>Ұзақтығы: 4-8 апта.</td>
                        <td>200</td>
                        <td><button class="badge-pill"><a href="patients.html">Жазылу</button></td>
                        <td><a href=""><i class="las la-ellipsis-h"></i></a></td>
                    </tr>
                    <tr>
                        <td>
                            <p>Асқазан-ішек жолдарының аурулары</p><small class="text-center">FIZ/2901/21</td>

                        <td>Емдік тамақтану, минералды ванналар, балшықпен емдеу, шөп медицинасы.
                        </td>
                        <td>Ұзақтығы: 3-6 апта.</td>
                        <td>55</td>
                        <td><button class="badge-pill"><a href="patients.html">Жазылу</button></td>
                        <td><a href=""><i class="las la-ellipsis-h"></i></a></td>
                    </tr>
                    <tr>
                        <td>
                            <p>Дерматологиялық аурулар</p><small class="text-center">FIZ/2901/21</td>

                        <td>Балшықпен емдеу, күн ванналары, ароматерапия, диета.                                </td>
                        <td>Ұзақтығы: 3-4 апта.</td>
                        <td>177</td>
                        <td><button class="badge-pill"><a href="patients.html">Жазылу</button></td>
                        <td><a href=""><i class="las la-ellipsis-h"></i></a></td>
                    </tr>
                    <tr>
                        <td>
                            <p>Эндокринологиялық аурулар </p><small class="text-center">FIZ/2901/21</td>

                        <td>Диета, жаттығу, тамақтану, қант деңгейін бақылау.
                        </td>
                        <td>Ұзақтығы: 4-8 апта.</td>
                        <td>35</td>
                        <td><button class="badge-pill"><a href="patients.html">Жазылу</button></td>
                        <td><a href=""><i class="las la-ellipsis-h"></i></a></td>
                    </tr>
                    <tr>
                        <td>
                            <p>Аллергиялық аурулар</p><small class="text-center">FIZ/2901/21</td>

                        <td>Климаттық терапия, балшықпен емдеу, ароматерапия, аллергенсіз тамақтану.                               </td>
                        <td>Ұзақтығы: 2-4 апта.</td>
                        <td>92</td>
                        <td><button class="badge-pill"><a href="patients.html">Жазылу</button></td>
                        <td><a href=""><i class="las la-ellipsis-h"></i></a></td>
                    </tr>

                    </tbody>
                </table>
            </div>
            <div class="modal onboarding-modal" tabindex="=1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Welcome</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><i class="las la-times-circle"></i></button></div>
                        <div class="modal-body">
                            <div class="carousel slide" id="carouselExampleCaptions" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active"><img class="d-block" src="../SiteAssets/images/undraw_dashboard_nklg.svg" alt="..." />
                                        <div class="carousel-caption d-md-block">
                                            <p>intuitive<a href="" data-dismiss="modal">dashboard<i class="las la-external-link-alt"></i></a></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item"><img class="d-block" src="../SiteAssets/images/undraw_medicine_b1ol.svg" alt="..." />
                                        <div class="carousel-caption d-md-block">
                                            <p>access to<a href="specialists.html">specialists<i class="las la-external-link-alt"></i></a></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item"><img class="d-block" src="../SiteAssets/images/undraw_receipt_ecdd.svg" alt="..." />
                                        <div class="carousel-caption d-md-block">
                                            <p>simple<a href="procurement.html">procurement<i class="las la-external-link-alt"></i></a>process</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item"><img class="d-block" src="../SiteAssets/images/undraw_new_notifications_fhvw.svg" alt="..." />
                                        <div class="carousel-caption d-md-block">
                                            <p>comprehensive<a href="notifications.html">notification<i class="las la-external-link-alt"></i></a>center</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item"><img class="d-block" src="../SiteAssets/images/undraw_Preferences_re_49in.svg" alt="..." />
                                        <div class="carousel-caption d-md-block">
                                            <p>minimalist<a href="settings.html">settings<i class="las la-external-link-alt"></i></a>center</p>
                                        </div>
                                    </div>
                                </div><a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev"><i class="las la-chevron-circle-left"></i><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next"><i class="las la-chevron-circle-right"></i><span class="sr-only">Next</span></a></div>
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
