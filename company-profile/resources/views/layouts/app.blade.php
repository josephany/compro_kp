<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | PT Putera Harapan Abadi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <style>

        :root{
            --primary:#E53935;
            --secondary:#FF6F00;
            --dark:#0F172A;
            --gray:#64748B;
            --light:#F8FAFC;
        }

        body{
            font-family:'Inter',sans-serif;
            color:var(--dark);
            overflow-x:hidden;
        }

        section{
            padding:100px 0;
        }

        .navbar-custom{
            position:fixed;
            width:100%;
            z-index:999;
            transition:.4s;
            padding:20px 0;
        }

        .navbar-scrolled{
            background:white;
            box-shadow:0 10px 30px rgba(0,0,0,.08);
            backdrop-filter:blur(10px);
            padding:12px 0;
        }

        .navbar-brand{
            font-weight:800;
            color:var(--primary)!important;
            font-size:1.4rem;
        }

        .nav-link{
            color:var(--dark);
            font-weight:500;
            margin-left:20px;
        }

        .nav-link:hover{
            color:var(--primary);
        }

        .btn-quote{
            background:var(--primary);
            color:white;
            border:none;
            padding:12px 24px;
            border-radius:50px;
            font-weight:600;
        }

        .btn-quote:hover{
            background:#d32f2f;
            color:white;
        }

        .section-label{
            color:var(--primary);
            font-weight:700;
            letter-spacing:2px;
            text-transform:uppercase;
            font-size:.85rem;
        }

        .section-title{
            font-size:3rem;
            font-weight:800;
            line-height:1.2;
        }

        .section-desc{
            color:var(--gray);
            line-height:1.9;
            font-size:1.05rem;
        }

        .value-card{
            padding:40px;
            border-radius:24px;
            background:white;
            transition:.4s;
            height:100%;
            border:1px solid #f1f5f9;
        }

        .value-card:hover{
            transform:translateY(-10px);
            box-shadow:0 20px 50px rgba(0,0,0,.08);
        }

        .footer{
            background:#0F172A;
            color:white;
            padding:80px 0;
        }

        .footer p{
            color:#CBD5E1;
        }

.product-hero{
    padding:180px 0 100px;
    background:#F8FAFC;
}

.product-title{
    font-size:4rem;
    font-weight:800;
}

.product-desc{
    max-width:700px;
    margin:auto;
    margin-top:20px;
    color:#64748B;
}

.product-category-card{

    background:white;

    border-radius:24px;

    padding:40px;

    height:100%;

    box-shadow:0 10px 40px rgba(0,0,0,.05);

    transition:.4s;
}

.product-category-card:hover{

    transform:translateY(-10px);

    box-shadow:0 20px 50px rgba(0,0,0,.1);
}

.product-icon{

    font-size:3rem;

    margin-bottom:20px;
}

.product-category-card h3{

    font-weight:700;

    margin-bottom:20px;
}

.product-category-card ul{

    padding-left:20px;
}

.product-category-card li{

    margin-bottom:10px;

    color:#64748B;
}

.product-cta{

    padding:100px 0;
}
    </style>

    @stack('styles')
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">

        <a class="navbar-brand" href="/">
            PT PHA
        </a>

        <button class="navbar-toggler"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse"
             id="navbarMenu">

            <ul class="navbar-nav ms-auto align-items-center">

                <li class="nav-item">
                    <a href="/" class="nav-link">Home</a>
                </li>

                <li class="nav-item">
                    <a href="/about" class="nav-link">About</a>
                </li>

                <li class="nav-item">
                    <a href="/products" class="nav-link">Products</a>
                </li>

                <li class="nav-item">
                    <a href="/services" class="nav-link">Services</a>
                </li>

                <li class="nav-item ms-3">
                    <a href="/contact" class="btn btn-quote">
                        Request Quotation
                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>

@yield('content')

<footer class="footer">

    <div class="container">

        <div class="row">

            <div class="col-lg-5">

                <h3 class="fw-bold">
                    PT Putera Harapan Abadi
                </h3>

                <p class="mt-4">
                    Trusted supplier and engineering partner
                    for Indonesia's power generation industry.
                </p>

            </div>

            <div class="col-lg-4">

                <h5>Address</h5>

                <p>
                    Nanas Utara II No.48 Waru<br>
                    Sidoarjo, Jawa Timur
                </p>

            </div>

            <div class="col-lg-3">

                <h5>Contact</h5>

                <p>
                    +62 31 8680154<br>
                    puteraharapanabadi@gmail.com
                </p>

            </div>

        </div>

        <hr class="my-5">

        <div class="text-center">
            © {{ date('Y') }} PT Putera Harapan Abadi
        </div>

    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

AOS.init();

window.addEventListener('scroll',function(){

    let nav=document.querySelector('.navbar-custom');

    if(window.scrollY > 50){
        nav.classList.add('navbar-scrolled');
    }else{
        nav.classList.remove('navbar-scrolled');
    }

});

</script>


</body>
</html>