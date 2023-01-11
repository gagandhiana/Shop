<!DOCTYPE html>
<html>

<head>
    <title>All Products</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css\style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Catamaran&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="main-div">
        @include('common_files.header')
        <div class="contact">
            <div class="contact-us">
                <p>ALL PRODUCTS</p>
            </div>
            @foreach ($data as $row)
                <div class="Camera-info">

                    <div class="samsung-cam">
                        <div class="cam-info">
                            <img src="{{ url('product_images/' . $row->productImage) }}">
                            <div class="sam-prc">
                                <span>{{ $row->productName }}</span>
                                <p>Rs.{{ $row->productPrice }}</p>
                            </div>
                            <hr class="hr2">
                            <div class="cart-btn">
                                <i class="fa fa-plus-circle iconn" aria-hidden="true"></i>
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                <a href="{{ url('cart' . $row->id) }}"><input type="submit" name=""
                                        value="Add to cart"></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
    </div>
</body>

</html>
