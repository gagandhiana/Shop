<!DOCTYPE html>
<html>

<head>
    <title>ENEST-1</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Catamaran&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="main-div">
        @include('common_files.header')
        <div class="main-categorious">
            <div class="footer">
                <?php include 'common_files/categories.php'; ?>
                <div class="contact">
                    <div class="contact-us">
                        <p>CONTACT US</p>
                    </div>
                    <div class="costomer-info">
                        <div class="costomer-service">
                            <p>Customer Service:91 7508115758</p>
                            <p>Ludhiana,Punjab,INDIA</p>
                            <p>Yorex Infotec.</p>
                        </div>
                        <hr class="hr">
                        <div class="info">
                            <div class="required-info">
                                <h4>Contact Us</h4>
                                <p>Have a question? We have 24x7 Costomer Service.</p>
                                <p>Befor you contact us,skim through our self Serve opton and Frequently Asked
                                    Question
                                    for Quicker answer.</p>
                                <p>Want to know more about the status of the orders?</p>
                                <p>Login to view our order.</p>
                            </div>
                        </div>
                        <div class="border">
                            <div class="border-1">
                                <div class="border-2">
                                    <p>Contact Us</p>
                                </div>
                                <div class="requir-info">
                                    <span>*Required information</span>
                                </div>
                                <div class="input-info">
                                    <div class="input-information">
                                        <form action="contact-us-data" method="post">
                                            {{ csrf_field() }}
                                            <table class=" form">
                                                <tr>
                                                    <td>
                                                        <p>full Name* </p>
                                                    </td>
                                                    <td><input type="text" name="name"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>E-mail Address </p>
                                                    </td>
                                                    <td><input type="email" name="email"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Message</p>
                                                    </td>
                                                    <td><input type="text" name="mes"></td>
                                                </tr>
                                            </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="snd-btn">
                            <button type="submit" name="save">Send Now</button>
                        </div>
                        </form>
                    </div>
                </div>
                <?php include 'common_files/footer.php'; ?>
            </div>
        </div>
    </div>
</body>

</html>
