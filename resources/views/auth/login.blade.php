@extends('layouts.app')

@section('content')
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../assets/img/favicon.html">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Log In</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  
  <link rel="canonical" href="https://www.creative-tim.com/product/light-bootstrap-dashboard-pro" />
  
  <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, light bootstrap 4 dashboard, frontend, responsive bootstrap dashboard">
  <meta name="description" content="Forget about boring dashboards, get a bootstrap 4 admin template designed to be simple and beautiful.">
  
  <meta itemprop="name" content="Light Bootstrap Dashboard PRO by Creative Tim">
  <meta itemprop="description" content="Forget about boring dashboards, get a bootstrap 4 admin template designed to be simple and beautiful.">
  <meta itemprop="image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/34/original/opt_lbd_pro_thumbnail.jpg">
  
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Light Bootstrap Dashboard PRO by Creative Tim">
  <meta name="twitter:description" content="Forget about boring dashboards, get a bootstrap 4 admin template designed to be simple and beautiful.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/34/original/opt_lbd_pro_thumbnail.jpg">
  <meta name="twitter:data1" content="Light Bootstrap Dashboard PRO by Creative Tim">
  <meta name="twitter:label1" content="Product Type">
  <meta name="twitter:data2" content="$39">
  <meta name="twitter:label2" content="Price">
  
  <meta property="og:title" content="Light Bootstrap Dashboard PRO by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="../dashboard.html" />
  <meta property="og:image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/34/original/opt_lbd_pro_thumbnail.jpg" />
  <meta property="og:description" content="Forget about boring dashboards, get a bootstrap 4 admin template designed to be simple and beautiful." />
  <meta property="og:site_name" content="Creative Tim" />
  
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="../../../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
  
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../../assets/css/light-bootstrap-dashboard790f.css?v=2.0.1" rel="stylesheet" />
  
  <link href="../../assets/css/demo.css" rel="stylesheet" />
  
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
  
  </head>
<body>

  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  
  <div class="wrapper wrapper-full-page">
  
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
  <div class="container">
  <div class="navbar-wrapper">
  <a class="navbar-brand" href="#pablo">SMK MAHAPUTRA CERDAS UTAMA</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-bar burger-lines"></span>
  <span class="navbar-toggler-bar burger-lines"></span>
  <span class="navbar-toggler-bar burger-lines"></span>
  </button>
  </div>
  <div class="collapse navbar-collapse justify-content-end" id="navbar">
  <ul class="navbar-nav">
  <li class="nav-item">
  <a href="/" class="nav-link">
  <i class="nc-icon nc-chart-pie-35"></i> Halaman utama
  </a>
  </li>
  <li class="nav-item ">
  <a href="{{ route('register')}}" class="nav-link">
  <i class="nc-icon nc-badge"></i> Register
  </a>
  </li>
  <li class="nav-item  active ">
  <a href="{{ route('login')}}" class="nav-link">
  <i class="nc-icon nc-mobile"></i> Login
  </a>
  </li>
   </ul>
  </div>
  </div>
  </nav>
  
  <div class="full-page  section-image" data-color="black" data-image="../../assets/img/full-screen-image-1.jpg" >
  
  <div class="content">
  <div class="container">
  <div class="col-md-4 col-sm-6 ml-auto mr-auto">
  <form class="form" method="post" action="{{ route('login')}}">
    @csrf
  <div class="card card-login card-hidden">
  <div class="card-header ">
  <h3 class="header text-center">Login</h3>
  </div>
  <div class="card-body ">
  <div class="card-body">
  <div class="form-group">
  <label>Email address</label>
  <input type="email" name="email" placeholder="Enter email" class="form-control">
  </div>
  <div class="form-group">
  <label>Password</label>
  <input type="password" name="password" placeholder="Password" class="form-control">
  </div>
  <div class="form-group">
  <div class="form-check">
  <label class="form-check-label">
  <input class="form-check-input" type="checkbox" value="" checked>
  <span class="form-check-sign"></span>
  Check
  </label>
  </div>
  </div>
  </div>
  </div>
  <div class="card-footer ml-auto mr-auto">
  <button type="submit" class="btn btn-warning btn-wd">Login</button>
  </div>
  </div>
  </form>
  </div>
  </div>
  </div>
  </div>
  <footer class="footer">
  <div class="container">
  <nav>
  <ul class="footer-menu">
  <li>
  <a href="/">
  Home
  </a>
  </li>
  <li>
  <a href="#">
  Company
  </a>
  </li>
  <li>
  <a href="">
  Portfolio
  </a>
  </li>
  <li>
  <a href="">
  Blog
  </a>
  </li>
  </ul>
  <p class="copyright text-center">
  ©
  <script>
                              document.write(new Date().getFullYear())
                          </script>
  <a href="https://www.smkmahaputra.sch.id/">SMK MAHAPUTRA CERDAS UTAMA </a>
  </p>
  </nav>
  </div>
  </footer>
  </div>
  
  </body>
  <script src="../../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../../assets/js/core/bootstrap.min.js" type="text/javascript"></script>

<script src="../../assets/js/plugins/bootstrap-switch.js"></script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>

<script src="../../assets/js/plugins/chartist.min.js"></script>

<script src="../../assets/js/plugins/bootstrap-notify.js"></script>

<script src="../../assets/js/plugins/jquery.sharrre.js"></script>

<script src="../../assets/js/plugins/jquery-jvectormap.js" type="text/javascript"></script>

<script src="../../assets/js/plugins/moment.min.js"></script>

<script src="../../assets/js/plugins/bootstrap-datetimepicker.js"></script>

<script src="../../assets/js/plugins/sweetalert2.min.js" type="text/javascript"></script>

<script src="../../assets/js/plugins/bootstrap-tagsinput.js" type="text/javascript"></script>

<script src="../../assets/js/plugins/nouislider.js" type="text/javascript"></script>

<script src="../../assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>

<script src="../../assets/js/plugins/jquery.validate.min.js" type="text/javascript"></script>

<script src="../../assets/js/plugins/jquery.bootstrap-wizard.js"></script>

<script src="../../assets/js/plugins/bootstrap-table.js"></script>

<script src="../../assets/js/plugins/jquery.dataTables.min.js"></script>

<script src="../../assets/js/plugins/fullcalendar.min.js"></script>

<script src="../../assets/js/light-bootstrap-dashboard790f.js?v=2.0.1" type="text/javascript"></script>

<script src="../../assets/js/demo.js"></script>
<script>
    $(document).ready(function() {
        demo.checkFullPageBackgroundImage();

        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>

<script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window,
        document, 'script', '../../../../connect.facebook.net/en_US/fbevents.js');

    try {
        fbq('init', '111649226022273');
        fbq('track', "PageView");

    } catch (err) {
        console.log('Facebook Track Error:', err);
    }
</script>
<noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
</noscript>
@endsection
