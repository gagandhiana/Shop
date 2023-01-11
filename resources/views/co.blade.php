@if (session()->has('user_session'))
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Checkout</title>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="css/co.css">
    </head>

    <body>
        <div class="iphone">
            <header class="header">
                <h1>Checkout</h1>
            </header>
            <form action="checko{{ session('user_session') }}" class="form" method="post">
                {{ csrf_field() }}
                <div>
                    <h2>Address</h2>
                    <textarea name="address" rows="4" cols="35" class="card"></textarea>
                </div>
                <fieldset>
                    <legend>Payment Method</legend>
                    <div class="form__radios">
                        <div class="form__radio">
                            <label for="visa"><span class="material-symbols-outlined">
                                    payments
                                </span>Cash On Delivery</label>
                            <input checked id="visa" name="payment-method" type="radio" />
                        </div>
                        <div class="form__radio">
                            <label for="paypal"><span class="material-symbols-outlined">
                                    qr_code_2
                                </span>UPI</label>
                            <input id="paypal" name="payment-method" type="radio" />
                        </div>
                        <div class="form__radio">
                            <label for="mastercard"><span class="material-symbols-outlined">
                                    credit_card
                                </span>Master Card</label>
                            <input id="mastercard" name="payment-method" type="radio" />
                        </div>
                    </div>
                </fieldset>
                <div>
                    <h2>Shopping Bill</h2>
                    <table>
                        <tr>
                            <td>Total</td>
                            <td align="right"><span class="material-symbols-outlined">currency_rupee</span>
                                <?php echo $totalprice; ?></td>
                        </tr>
                    </table>
                </div>
                <div class="button button--full">
                    <span class="material-symbols-outlined">
                        shopping_bag
                    </span>
                    <input type="submit" name="submit" value="Buy Now" style="background-color:#eae8e8;">
                </div>
                <footer class="footer">
                    <a href="homepage">
                        <h1>Back to shop</h1>
                    </a>
                </footer>
            </form>
        </div>
    </body>

    </html>
@else
    <script>
        window.location = "{{ url('login-page') }}"
    </script>
@endif
