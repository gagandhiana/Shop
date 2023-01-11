<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Header</title>
</head>

<body>
    <div class="head-div">
        <div class="main">
            <div class="head">
                <span>Shop</span>
                <p>THE BIGGEST CHOICE OF THE WEB</p>
            </div>
            <div class="btn">
                @if (session()->has('user_session'))
                    <a href="log-out"><input type="button" name="" value="Log Out"></a>
                @else
                    <a href="login-page"><input type="button" name="" value="Log In"></a>
                @endif

            </div>
        </div>
    </div>
    <div class="home-page">
        <div class="pagnation">
            <div class="list">
                <ul>
                    <li><a href="{{ url('/homepage') }}">HOME</a></li>
                    <li><a href="{{ url('/addproject') }}">NEW PROJECT</a></li>
                    <li>SPECIAL</li>
                    <li><a href="{{ url('/all-products') }}">ALL PRODUCTS</a></li>
                    <li>
                        @if (session()->has('user_session'))
                            <a href="check-out{{ session('user_session') }}">CART</a>
                        @else
                            <a href="login-page">CART</a>
                        @endif
                    </li>
                    <li>
                        @if (session()->has('user_session'))
                            <a href="{{ url('/contact') }}">CONTACT</a>
                        @else
                            <a href="login-page">CONTACT</a>
                        @endif
                    </li>
                    <li>FAQS</li>
                </ul>
            </div>
            <form action="{{ url('/search-product') }}" method="post">
                {{ csrf_field() }}
                <div class="search">
                    <div class="search-1">
                        <div class="input">
                            <input type="text" name="search">
                        </div>
                        <div class="btnn">
                            <input type="submit" name="save" value="Search">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="null">

    </div>

</body>

</html>
