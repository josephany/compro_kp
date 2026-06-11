<!DOCTYPE html>

<html>
<head>
    <title>Admin Panel | PT PHA</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body{
        background:#f8fafc;
    }

    .sidebar{
        width:260px;
        height:100vh;
        position:fixed;
        background:#0F172A;
        padding:25px;
    }

    .sidebar h3{
        color:white;
        font-weight:700;
        margin-bottom:30px;
    }

    .sidebar a{
        display:block;
        color:#cbd5e1;
        text-decoration:none;
        padding:12px 15px;
        border-radius:12px;
        margin-bottom:10px;
    }

    .sidebar a:hover{
        background:#1e293b;
        color:white;
    }

    .content{
        margin-left:260px;
        padding:35px;
    }

    .card-custom{
        border:none;
        border-radius:20px;
        box-shadow:0 10px 30px rgba(0,0,0,.06);
    }
</style>

</head>
<body>

<div class="sidebar">
<h3>PT PHA</h3>

<a href="{{ route('admin.dashboard') }}">Dashboard</a>
<a href="{{ route('products.index') }}">Products</a>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button class="btn btn-danger w-100 mt-4">
        Logout
    </button>
</form>
</div>

<div class="content">
    @yield('content')
</div>
</body>
</html>