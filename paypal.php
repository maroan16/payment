<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main id="cart-main">
<div class="site-title text-center">
    <h1 class="font-title">Lgofa hhh</h1>
</div>
<div class="container">
    <div class="grid">
        <div class="col-1">
        <div class="flex item justify-content-between">
                        <div class="flex">
                            <div class="img text-center">
                                <img src="./photos/s22u.png" alt="">
                            </div>
                            <div class="title">
                                <h3>Galaxy s22 ultra</h3>
                                <span>Electronics</span>
                                <div class="buttons">
                                    <button type="submit"><i class="fas fa-chevron-up"></i> </button>
                                    <input type="text" class="font-title" value="1">
                                    <button type="submit"><i class="fas fa-chevron-down"></i> </button>
                                </div>
                                <a href="#">Save for later</a> */drop
                                <a href="#">Delete From Cart</a>
                            </div>
                        </div>
                        <div class="price">
                            <h4 class="text-red">$1200</h4>
                        </div>
                    </div>
        </div>
        <div class="col-2">
        <div class="subtotal text-center">
                        <h3>Price Details</h3>
                        <ul>
                            <li class="flex justify-content-between">
                                <label for="price">Products ( 3 items ) : </label>
                                <span>$1200</span>
                            </li>
                            <li class="flex justify-content-between">
                                <label for="price">Delivery Charges : </label>
                                <span>Free</span>
                            </li>
                            <hr>
                            <li class="flex justify-content-between">
                                <label for="price">Amout Payble : </label>
                                <span class="text-red font-title">$1200</span>
                            </li>
                        </ul>
                        <div id="paypal-payment-button">
                        </div>
                    </div>
        </div>
    </div>
</div>


</main>
<script src="https://www.paypal.com/sdk/js?client-id=AR49vtkWRMpGcSCtxfXFp9yR9GsPb-zj5mKu3FtLclvoCQciUr65aGUYv30QCiduIqDULQVH4lRGXxRJ"></script>
    <script src="index.js"></script>
</body>
</html>