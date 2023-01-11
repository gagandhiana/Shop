<!DOCTYPE html>
<html>

<head>
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css\style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Catamaran&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="main-div">
        @include('common_files.header')
        <div class="main-categorious">
            <div class="footer">
                <div class="main-img">
                    <img src="images/16.png">
                </div>

                <div class="categorious">
                    <div class="cate-heading">
                        <p>CATEGORIES</p>
                    </div>
                    <div class="items">
                        <ul>
                            @foreach ($category as $row)
                                <a href="{{ 'displaycategory/' . $row->category_id }}">
                                    <li>{{ $row->categoryName }}</li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="contact">
                    <div class="contact-us">
                        <p>FEATURED PRODUCTS</p>
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
    <?php include 'common_files/footer.php'; ?>
</body>

</html>
