<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}asset/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
</head>
<body>
    <nav class="navbar-expand-md navbar navbar-light bg-light shadow">
        <div class="container">
            <a href="{{route('home')}}" class="navbar-brand">DevSteed</a>
            <ul class="navbar-nav mx-auto">
                <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
                <li><a href="{{route('newInventory')}}" class="nav-link mark">Make New Inventory</a></li>
                <li><a href="{{route('inventoryProduct')}}" class="nav-link">Inventory Product</a></li>
                <li><a href="{{route('customers')}}" class="nav-link">Customers</a></li>
                <li><a href="{{route('products')}}" class="nav-link">Products</a></li>
            </ul>
        </div>
    </nav>

    @yield('body')







<script src="{{asset('/')}}jquery-3.6.0.js"></script>
<script src="{{asset('/')}}asset/js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
</body>
</html>
