<!DOCTYPE html>
<html>

<head>
    <title>Cart Details</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css\style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Catamaran&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
</head>

<body>
    <div class="main-div">
        @include('common_files.header')
    </div>
    <section class="h-100 h-custom" style="background-color: #a6a5a2;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-lg-8">
                                    <div class="p-5">
                                        @foreach ($data as $row)
                                            <hr class="my-4">
                                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                <div class="col-md-2 col-lg-2 col-xl-2">
                                                    <img src="{{ asset('product_images/' . $row->productImage) }}"
                                                        class="img-fluid rounded-3" alt="Cotton T-shirt">
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-3">
                                                    <h6 class="text-muted">{{ $row->manufacturer }}</h6>
                                                    <h6 class="text-black mb-0">{{ $row->productName }}</h6>
                                                </div>
                                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                    <h6 class="mb-0">{{ $row->quantity }}</h6>
                                                </div>
                                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                    <h6 class="mb-0"><span
                                                            class="material-symbols-outlined">currency_rupee</span>
                                                        {{ $row->productPrice }}</h6>
                                                </div>
                                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                    <a href="#!" class="text-muted"><i
                                                            class="fas fa-times"></i></a>
                                                </div>
                                                <a href="{{ 'remove-product/' . $row->id }}"><span
                                                        class="material-symbols-outlined">delete</span></a>
                                            </div>
                                        @endforeach
                                        <hr class="my-4">
                                        <div class="pt-5">
                                            <h6 class="mb-0"><a href="homepage" class="text-body"><i
                                                        class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 bg-grey">
                                    <div class="p-5">
                                        <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                                        <hr class="my-4">
                                        <div class="d-flex justify-content-between mb-4">
                                            <h5 class="text-uppercase">items <?php echo $items; ?></h5>
                                            <h5><span class="material-symbols-outlined">currency_rupee</span>
                                                <?php echo $totalprice; ?></h5>
                                        </div>
                                        <h5 class="text-uppercase mb-3">Give code</h5>
                                        <div class="mb-5">
                                            <div class="form-outline">
                                                <input type="text" id="form3Examplea2"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Examplea2">Enter your code</label>
                                            </div>
                                        </div>
                                        <hr class="my-4">
                                        <div class="d-flex justify-content-between mb-5">
                                            <h5 class="text-uppercase">Total price</h5>
                                            <h5><span class="material-symbols-outlined">currency_rupee</span>
                                                <?php echo $totalprice; ?></h5>
                                        </div>
                                        <a href="co{{ session('user_session') }}"><input type="submit" name="checkout"
                                                value="Checkout" class="btn btn-dark btn-block btn-lg"
                                                data-mdb-ripple-color="dark"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
