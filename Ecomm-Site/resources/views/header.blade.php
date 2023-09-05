<?php
use app\Http\Controllers\ProductController;
$total = 0;
if (Session::has('user')) {
    $total = ProductController::cartItem();
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Ecomm-Site</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">About Us</a>
                </li>

                <form action="/search" class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" name="query" class="form-control search-box" placeholder="Search"
                            aria-label="Search" aria-describedby="search-addon" />
                    </div>
                </form>
                <div class="searchbutton"><button type="submit" class="btn btn-outline-primary">Search</button></div>

            </ul>
            <ul class="nav navbar-nav navbar-right ">
                <button class="btn btn-outline-success" type="submit">Cart( {{ $total }} )</button>
                @if (Session::has('user'))
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       {{Session::get('user')['name']}}
                    </a>
                    <div class="dropdown-menu mb-4" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/logout">LogOut</a>
                    </div>
                </li>
                @else
                <a href="/signin">Login</a>
                @endif
            </ul>

        </div>
    </div>
</nav>
