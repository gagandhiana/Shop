<!DOCTYPE html>
<html>

<head>
    <title>Categorized Products</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css\style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Catamaran&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="main-div">
        @include('common_files.header')
        <div class="main-categorious">
            <div class="footer">
                @foreach ($cat as $row)
                    <p>{{ $row->category }}</p>
                @endforeach
                <div class="contact">
                    <div class="contact-us">
                        <p>Dishwasher</p>
                    </div>
                    <div class="product-info">
                        <span>Sort by:</span>
                        <form>
                            <select>
                                <option>product name</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </form>
                    </div>
                    <div class="display-product">
                        <span>Displaying 1 to 5(of 6 new product)</span>
                        <div class="btnnn">
                            <input class="pre" type="submit" name="" value="Previous">
                            <input class="nxt" type="submit" name="" value="Next">
                        </div>
                    </div>
                    @foreach ($pro as $row)
                        <div class="dish-info">
                            <div class="machine-pic">
                                <div class="img">
                                    <img src="{{ asset('product_images/' . $row->productImage) }}">
                                </div>
                                <img class="lg" src="{{ asset('images/15.png') }}">
                                <div class="stock-0">
                                    <p>In Stock:0</p>
                                </div>
                            </div>
                            <div class="machine-info">
                                <div class="date">
                                    <span> Date Added:2013-07-21 09:05:45</span>
                                </div>
                                <div class="washer">
                                    <p> {{ $row->productName }}</p>
                                </div>
                                <div class="model-info">
                                    <span>Model:{{ $row->model }}</span>
                                    <p>Manufacturer:{{ $row->manufacturer }}</p>
                                </div>
                                <div class="price">
                                    <span>Rs.{{ $row->productPrice }}</span>
                                </div>
                                <div class="checkout">
                                    <a href="{{ url('cart' . $row->id) }}"><input type="submit" name=""
                                            value="Add to cart"></a>
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
