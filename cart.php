<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart | 3legant</title>
    <?php include 'links.php'; ?>
    <link rel="stylesheet" href="assets/css/style-cart.css">
</head>

<body>


    <?php include 'header.php'; ?>
    <main>
        <div class="container">
            <div class="my-nav">
                <div class="nav-title">Cart</div>
                <ul class="d-flex justify-content-center align-items-center mb-5">
                    <li>
                        <a id="tab-1" href="#" class="active disabled" data-val="1">
                            <span>1</span>
                            <span>Shopping cart</span>
                        </a>
                    </li>
                    <li>
                        <a id="tab-2" href="#" class="disabled" data-val="2">
                            <span>2</span>
                            <span>Checkout details</span>
                        </a>
                    </li>
                    <li>
                        <a id="tab-3" href="#" class="disabled" data-val="3">
                            <span>3</span>
                            <span>Order complete</span>
                        </a>
                    </li>
                </ul>
                <div class="content">
                    <div id="content-1" class="show" data-ctnt="1">
                        <div class="row">
                            <div class="col-lg-8 col-12">
                                <div class="table-titles d-flex">
                                    <div class="number-id">Product</div>
                                    <div class="quantity">Quantity</div>
                                    <div class="price">Price</div>
                                    <div class="subtotal">Subtotal</div>
                                </div>
                                <div class="order-item d-flex align-items-center">
                                    <div class="product-info d-flex align-items-center">
                                        <button type="button" class="btn-close-menu me-2"
                                            aria-label="Close">
                                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M19.207 6.207a1 1 0 0 0-1.414-1.414L12 10.586 6.207 4.793a1 1 0 0 0-1.414 1.414L10.586 12l-5.793 5.793a1 1 0 1 0 1.414 1.414L12 13.414l5.793 5.793a1 1 0 0 0 1.414-1.414L13.414 12l5.793-5.793z"
                                                    fill="#6C7275" />
                                            </svg>
                                        </button>
                                        <div class="img-container me-2">
                                            <img src="assets/imgs/black-table.png" alt="">
                                        </div>
                                        <div class="name-color-product d-flex flex-column">
                                            <div class="name-product mb-2">Tray Table</div>
                                            <div class="color-product">Color: Black</div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="control-buttons d-flex justify-content-between align-items-center">
                                            <button>
                                                <svg width="11" height="12" viewBox="0 0 11 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.22949 1H10.5628" stroke="#121212" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                            <span>1</span>
                                            <button>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.37476 1.33331C6.37476 1.12621 6.20686 0.958313 5.99976 0.958313C5.79265 0.958313 5.62476 1.12621 5.62476 1.33331V5.625H1.33301C1.1259 5.625 0.958008 5.79289 0.958008 6C0.958008 6.20711 1.1259 6.375 1.33301 6.375H5.62476V10.6666C5.62476 10.8738 5.79265 11.0416 5.99976 11.0416C6.20686 11.0416 6.37476 10.8738 6.37476 10.6666V6.375H10.6663C10.8734 6.375 11.0413 6.20711 11.0413 6C11.0413 5.79289 10.8734 5.625 10.6663 5.625H6.37476V1.33331Z" fill="#121212" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product-price">$19.19</div>
                                    <div class="sub-total-product">$8.80</div>
                                </div>
                                <div class="order-item d-flex align-items-center">
                                    <div class="product-info d-flex align-items-center">
                                        <button type="button" class="btn-close-menu me-2"
                                            aria-label="Close">
                                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M19.207 6.207a1 1 0 0 0-1.414-1.414L12 10.586 6.207 4.793a1 1 0 0 0-1.414 1.414L10.586 12l-5.793 5.793a1 1 0 1 0 1.414 1.414L12 13.414l5.793 5.793a1 1 0 0 0 1.414-1.414L13.414 12l5.793-5.793z"
                                                    fill="#6C7275" />
                                            </svg>
                                        </button>
                                        <div class="img-container me-2">
                                            <img src="assets/imgs/product-4.png" alt="">
                                        </div>
                                        <div class="name-color-product d-flex flex-column">
                                            <div class="name-product mb-2">lamb</div>
                                            <div class="color-product">Color: Beige</div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="control-buttons d-flex justify-content-between align-items-center">
                                            <button>
                                                <svg width="11" height="12" viewBox="0 0 11 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.22949 1H10.5628" stroke="#121212" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                            <span>1</span>
                                            <button>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.37476 1.33331C6.37476 1.12621 6.20686 0.958313 5.99976 0.958313C5.79265 0.958313 5.62476 1.12621 5.62476 1.33331V5.625H1.33301C1.1259 5.625 0.958008 5.79289 0.958008 6C0.958008 6.20711 1.1259 6.375 1.33301 6.375H5.62476V10.6666C5.62476 10.8738 5.79265 11.0416 5.99976 11.0416C6.20686 11.0416 6.37476 10.8738 6.37476 10.6666V6.375H10.6663C10.8734 6.375 11.0413 6.20711 11.0413 6C11.0413 5.79289 10.8734 5.625 10.6663 5.625H6.37476V1.33331Z" fill="#121212" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product-price">$345</div>
                                    <div class="sub-total-product">$8.80</div>
                                </div>
                                <div class="order-item d-flex align-items-center">
                                    <div class="product-info d-flex align-items-center">
                                        <button type="button" class="btn-close-menu me-2"
                                            aria-label="Close">
                                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M19.207 6.207a1 1 0 0 0-1.414-1.414L12 10.586 6.207 4.793a1 1 0 0 0-1.414 1.414L10.586 12l-5.793 5.793a1 1 0 1 0 1.414 1.414L12 13.414l5.793 5.793a1 1 0 0 0 1.414-1.414L13.414 12l5.793-5.793z"
                                                    fill="#6C7275" />
                                            </svg>
                                        </button>
                                        <div class="img-container me-2">
                                            <img src="assets/imgs/product-2.png" alt="">
                                        </div>
                                        <div class="name-color-product d-flex flex-column">
                                            <div class="name-product mb-2">Bamboo basket</div>
                                            <div class="color-product">Color: Beige</div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="control-buttons d-flex justify-content-between align-items-center">
                                            <button>
                                                <svg width="11" height="12" viewBox="0 0 11 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.22949 1H10.5628" stroke="#121212" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                            <span>1</span>
                                            <button>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.37476 1.33331C6.37476 1.12621 6.20686 0.958313 5.99976 0.958313C5.79265 0.958313 5.62476 1.12621 5.62476 1.33331V5.625H1.33301C1.1259 5.625 0.958008 5.79289 0.958008 6C0.958008 6.20711 1.1259 6.375 1.33301 6.375H5.62476V10.6666C5.62476 10.8738 5.79265 11.0416 5.99976 11.0416C6.20686 11.0416 6.37476 10.8738 6.37476 10.6666V6.375H10.6663C10.8734 6.375 11.0413 6.20711 11.0413 6C11.0413 5.79289 10.8734 5.625 10.6663 5.625H6.37476V1.33331Z" fill="#121212" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product-price">$8.80</div>
                                    <div class="sub-total-product">$8.80</div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="check-card">
                                    <div class="card-title mb-3">Cart summary</div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            <span>Free shipping</span>
                                            <span>$0.00</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            <span>Express shipping</span>
                                            <span>+$15.00</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                        <label class="form-check-label" for="flexRadioDefault3">
                                            <span>Pick Up</span>
                                            <span>%21.00</span>
                                        </label>
                                    </div>
                                    <div class="chechout-department d-flex flex-column">
                                        <div class="subtotal d-flex justify-content-between align-items-center">
                                            <span>Subtotal</span>
                                            <span>$99.00</span>
                                        </div>
                                        <div class="total d-flex justify-content-between align-items-center mb-4">
                                            <span>Total</span>
                                            <span>$234.00</span>
                                        </div>
                                        <button class="d-flex justify-content-center chechout-link" href="#">Checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="content-2" data-ctnt="2">
                        <div class="row">
                            <div class="col-lg-8 mb-lg-0 mb-4 col-12">
                                <form action="" class="d-flex mb-4 flex-column form-style">
                                    <div class="form-title">Contact Infomation</div>
                                    <div class="d-flex">
                                        <div class="w-50 me-4 mb-3 d-flex flex-column">
                                            <label for="title-1" class="title mb-2">first name</label>
                                            <input type="text" name="" id="title-1" placeholder="First name">
                                        </div>
                                        <div class="w-50 mb-3 d-flex flex-column">
                                            <label for="title-2" class="email-address mb-2">email address</label>
                                            <input type="email" name="" id="title-2" placeholder="your email">
                                        </div>
                                    </div>
                                    <div class="mb-3 d-flex flex-column">
                                        <label for="title-3" class="email-address mb-2">phone number</label>
                                        <input type="number" name="" id="title-3" placeholder="Phone number">
                                    </div>
                                    <div class="mb-3 d-flex flex-column">
                                        <label for="title-4" class="email-address mb-2">email address</label>
                                        <input type="email" name="" id="title-4" placeholder="Your Email">
                                    </div>
                                    <!-- <div class="h-100 mb-3 d-flex flex-column">
                                        <label for="title-3" class="mb-2">message</label>
                                        <textarea maxlength="1000" name="" id="title-3" placeholder="your message"></textarea>
                                    </div> -->
                                </form>
                                <form action="" class="d-flex mb-4 flex-column form-style">
                                    <div class="form-title">Contact Infomation</div>
                                    <div class="d-flex">
                                        <div class="w-50 me-4 mb-3 d-flex flex-column">
                                            <label for="title-1" class="title mb-2">first name</label>
                                            <input type="text" name="" id="title-1" placeholder="First name">
                                        </div>
                                        <div class="w-50 mb-3 d-flex flex-column">
                                            <label for="title-2" class="email-address mb-2">email address</label>
                                            <input type="email" name="" id="title-2" placeholder="your email">
                                        </div>
                                    </div>
                                    <div class="mb-3 d-flex flex-column">
                                        <label for="title-3" class="email-address mb-2">phone number</label>
                                        <input type="number" name="" id="title-3" placeholder="Phone number">
                                    </div>
                                    <div class="mb-3 d-flex flex-column">
                                        <label for="title-4" class="email-address mb-2">email address</label>
                                        <input type="email" name="" id="title-4" placeholder="Your Email">
                                    </div>
                                    <!-- <div class="h-100 mb-3 d-flex flex-column">
                                        <label for="title-3" class="mb-2">message</label>
                                        <textarea maxlength="1000" name="" id="title-3" placeholder="your message"></textarea>
                                    </div> -->
                                </form>
                                <form action="" class="d-flex mb-4 flex-column form-style">
                                    <div class="form-title">Contact Infomation</div>
                                    <div class="d-flex">
                                        <div class="w-50 me-4 mb-3 d-flex flex-column">
                                            <label for="title-1" class="title mb-2">first name</label>
                                            <input type="text" name="" id="title-1" placeholder="First name">
                                        </div>
                                        <div class="w-50 mb-3 d-flex flex-column">
                                            <label for="title-2" class="email-address mb-2">email address</label>
                                            <input type="email" name="" id="title-2" placeholder="your email">
                                        </div>
                                    </div>
                                    <div class="mb-3 d-flex flex-column">
                                        <label for="title-3" class="email-address mb-2">phone number</label>
                                        <input type="number" name="" id="title-3" placeholder="Phone number">
                                    </div>
                                    <div class="mb-3 d-flex flex-column">
                                        <label for="title-4" class="email-address mb-2">email address</label>
                                        <input type="email" name="" id="title-4" placeholder="Your Email">
                                    </div>
                                    <!-- <div class="h-100 mb-3 d-flex flex-column">
                                        <label for="title-3" class="mb-2">message</label>
                                        <textarea maxlength="1000" name="" id="title-3" placeholder="your message"></textarea>
                                    </div> -->
                                </form>
                                <input class="align-self-start" type="submit" value="Send Message">
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="check-card">
                                    <div class="card-title mb-3">Cart summary</div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            <span>Free shipping</span>
                                            <span>$0.00</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            <span>Express shipping</span>
                                            <span>+$15.00</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                        <label class="form-check-label" for="flexRadioDefault3">
                                            <span>Pick Up</span>
                                            <span>%21.00</span>
                                        </label>
                                    </div>
                                    <div class="chechout-department d-flex flex-column">
                                        <div class="subtotal d-flex justify-content-between align-items-center">
                                            <span>Subtotal</span>
                                            <span>$99.00</span>
                                        </div>
                                        <div class="total d-flex justify-content-between align-items-center mb-4">
                                            <span>Total</span>
                                            <span>$234.00</span>
                                        </div>
                                        <button class="d-flex justify-content-center chechout-link" href="#">Checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="content-3" data-ctnt="3">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="thank-you-card d-flex flex-column align-items-center justify-content-center">
                                <div class="content-title">Thank you! 🎉</div>
                                <div class="content-subtitle mb-5">Your order has been received</div>
                                <div class="products-imgs mb-5 d-flex">
                                    <div class="img-box">
                                        <img src="./assets/imgs/red-table.png" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img src="./assets/imgs/black-table.png" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img src="./assets/imgs/red-table.png" alt="">
                                    </div>
                                </div>
                                <div class="order-info mb-5">
                                    <div class="order-code">
                                        <span>Order code:</span>
                                        <span>#0123_45678</span>
                                    </div>
                                    <div class="order-date">
                                        <span>Date</span>
                                        <span>October 19, 2023</span>
                                    </div>
                                    <div class="order-total">
                                        <span>Total:</span>
                                        <span>$1,345.00</span>
                                    </div>
                                    <div class="order-method">
                                        <span>Payment method:</span>
                                        <span>Credit Card</span>
                                    </div>
                                </div>
                                <div class="history-link">
                                    <a href="#">Purchase history</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <?php include 'js.php'; ?>
    <script>
        $('.my-nav a').click(function() {
            var myVal = $(this).attr('data-val');
            // Navs
            $('.my-nav a').removeClass('active');
            $('.my-nav a').addClass('disabled');
            $(this).addClass('active');
            //Content
            $('.content > div').removeClass('show');
            $('div[data-ctnt="' + myVal + '"]').addClass('show');
        });
        
        $('#content-1 .chechout-link').click(function(){

            $('#tab-1').removeClass('active');
            $('#tab-2').addClass('active');
            $('#content-1').removeClass('show');
            $('#content-2').addClass('show');
            $('#tab-1').removeClass('disabled');
            $('#tab-1').addClass('green-mode');

        })
        $('#content-2 .chechout-link').click(function(){

            $('#tab-2').removeClass('active');
            $('#tab-3').addClass('active');
            $('#content-2').removeClass('show');
            $('#content-3').addClass('show');
            $('#tab-2').removeClass('disabled');
            $('#tab-2').addClass('green-mode');

        })
    </script>
    <script>
        var swiper = new Swiper(".check-slider", {
            freeMode: true,
            breakpoints: {
                992: {
                    slidesPerView: 3,
                },
                768: {
                    slidesPerView: 2,
                    // spaceBetween: 30
                },
                0: {
                    slidesPerView: 1.5,
                    // spaceBetween: 30
                }
            }
        });
    </script>
</body>

</html>