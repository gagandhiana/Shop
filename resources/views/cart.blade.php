@if (session()->has('user_session'))
<!DOCTYPE html>
<html>

<head>
    <title>Cart</title>
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
                                <a href="{{ url('displaycategory/' . $row->category_id) }}">
                                    <li>{{ $row->categoryName }}</li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                </div>
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
                    @foreach ($data as $row)
                        <div class="dish-info">
                            <div class="machine-pic">
                                <div class="img">
                                    <img src="{{ asset('product_images/' . $row->productImage) }}">
                                </div>
                                <img class="lg" src="http://localhost/laravel/evest/public/images/15.png">
                                <div class="stock-0">
                                    <p>In Stock:0</p>
                                </div>
                            </div>
                            <div class="machine-info">
                                <div class="date">
                                    <span> Added at : {{ $row->created_at }}</span>
                                </div>
                                <div class="washer">
                                    <p> {{ $row->productName }}</p>
                                </div>
                                <div class="model-info">
                                    <span>Model:{{ $row->model }}</span>
                                    <p>Manufacturer:{{ $row->manufacturer }}</p>
                                </div>
                                <div class="quantity">
                                    <form action="add" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{ $row->id }}">
                                        <input type="hidden" name="manufacturer" value="{{ $row->manufacturer }}">
                                        <input type="hidden" name="productName" value="{{ $row->productName }}">
                                        <input type="hidden" name="productImage" value="{{ $row->productImage }}">
                                        <input type="hidden" name="userid" value="{{ session('user_session') }}">
                                        <input type="hidden" name="un" value="{{ session('name_session') }}">
                                        <table>
                                            <tr>
                                                <td class="qty">Enter quantity</td>
                                                <td><input type="text" name="qty" required></td>
                                            </tr>
                                        </table>

                                        <div class="price">
                                            Rs.<input type="" name="pro_price" value="{{ $row->productPrice }}">
                                        </div>
                                        <div class="checkout">
                                            <input type="submit" name="addtocart" value="Add to cart">
                                        </div>
                                    </form>
                                </div>
                                <div class="checkout">
                                    <a href="check-out{{ session('user_session') }}"><input type="submit"
                                            name="gotocart" value="Go to cart"></a>
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
@else
    <script>
        window.location = "{{ url('login-page') }}"
    </script>
@endif
