<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Accoutn</title>
    <?php include "links.php" ?>
    <link rel="stylesheet" href="assets/css/style-my-account.css">
</head>

<body>
    <?php include "header.php" ?>
    <div class="container mb-5">
        <div class="row">
            <div class="col-12">
                <div class="page-title text-center">My Account</div>
            </div>
            <div class="col-md-3 col-12">
                <div class="d-flex align-items-start">
                    <div class="nav flex-column justify-content-between nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <div class="w-100 d-flex flex-column align-items-center justify-content-center mb-5">
                            <div class="personal-img mb-2">
                                <div href="#" class="set-img-link">
                                    <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.25129 2.22265C4.09812 2.45241 4.1602 2.76285 4.38997 2.91603C4.61973 3.0692 4.93017 3.00711 5.08334 2.77735L4.25129 2.22265ZM5.60483 1.09373L6.02085 1.37108V1.37108L5.60483 1.09373ZM10.3965 1.09373L10.8125 0.816383L10.3965 1.09373ZM10.918 2.77735C11.0711 3.00711 11.3816 3.0692 11.6113 2.91603C11.8411 2.76285 11.9032 2.45241 11.75 2.22265L10.918 2.77735ZM9.50065 7.5C9.50065 8.32843 8.82908 9 8.00065 9V10C9.38136 10 10.5007 8.88071 10.5007 7.5H9.50065ZM8.00065 9C7.17222 9 6.50065 8.32843 6.50065 7.5H5.50065C5.50065 8.88071 6.61994 10 8.00065 10V9ZM6.50065 7.5C6.50065 6.67157 7.17222 6 8.00065 6V5C6.61994 5 5.50065 6.11929 5.50065 7.5H6.50065ZM8.00065 6C8.82908 6 9.50065 6.67157 9.50065 7.5H10.5007C10.5007 6.11929 9.38136 5 8.00065 5V6ZM5.08334 2.77735L6.02085 1.37108L5.1888 0.816383L4.25129 2.22265L5.08334 2.77735ZM6.71423 1H9.28707V0H6.71423V1ZM9.98045 1.37108L10.918 2.77735L11.75 2.22265L10.8125 0.816383L9.98045 1.37108ZM9.28707 1C9.5657 1 9.82589 1.13925 9.98045 1.37108L10.8125 0.816383C10.4725 0.306352 9.90005 0 9.28707 0V1ZM6.02085 1.37108C6.17541 1.13925 6.4356 1 6.71423 1V0C6.10125 0 5.52882 0.306352 5.1888 0.816383L6.02085 1.37108ZM4.00065 3H12.0007V2H4.00065V3ZM14.1673 5.16667V9.83333H15.1673V5.16667H14.1673ZM12.0007 12H4.00065V13H12.0007V12ZM1.83398 9.83333V5.16667H0.833984V9.83333H1.83398ZM4.00065 12C2.80403 12 1.83398 11.03 1.83398 9.83333H0.833984C0.833984 11.5822 2.25175 13 4.00065 13V12ZM14.1673 9.83333C14.1673 11.03 13.1973 12 12.0007 12V13C13.7496 13 15.1673 11.5822 15.1673 9.83333H14.1673ZM12.0007 3C13.1973 3 14.1673 3.97005 14.1673 5.16667H15.1673C15.1673 3.41777 13.7496 2 12.0007 2V3ZM4.00065 2C2.25175 2 0.833984 3.41777 0.833984 5.16667H1.83398C1.83398 3.97005 2.80403 3 4.00065 3V2Z" fill="#FEFEFE" />
                                    </svg>
                                </div>
                                <div class="box-img">
                                    <img src="assets/imgs/person.jpg" alt="">
                                </div>
                            </div>
                            <div class="person-name">
                                Alex Havertz
                            </div>
                        </div>
                        <div class=" d-flex flex-column">
                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Account</button>
                            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Address</button>
                            <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false">Orders</button>
                            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Wishlist</button>
                            <button class="nav-link">Log Out</button>
                        </div>
                        <!-- <select class="form-select d-md-none d-block" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select> -->
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-12 mt-md-0 mt-5">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                        <div class="tab-title mb-4">Account Details</div>
                        <form action="" class="d-flex flex-column mb-4">
                            <div class="mb-3 d-flex flex-column">
                                <label for="title-1" class="title mb-2">First name *</label>
                                <input type="text" name="" id="title-1" placeholder="First name">
                            </div>
                            <div class=" mb-3 d-flex flex-column">
                                <label for="title-2" class="email-address mb-2">last name *</label>
                                <input type="text" name="" id="title-2" placeholder="Last name">
                            </div>
                            <div class=" mb-2 d-flex flex-column">
                                <label for="title-3" class="mb-2">Display name *</label>
                                <input type="text" name="" id="title-3" placeholder="Display name"></input>
                            </div>
                            <div class="hint mb-3">
                                This will be how your name will be displayed in the account section and in reviews
                            </div>
                            <div class=" mb-3 d-flex flex-column">
                                <label for="title-4" class="title email-address mb-2">Email *</label>
                                <input type="email" name="" id="title-4" placeholder="Email">
                            </div>
                        </form>
                        <div class="tab-title mb-4">Password</div>
                        <form action="" class="d-flex flex-column">
                            <div class="mb-3 d-flex flex-column">
                                <label for="title-5" class="title mb-2">Old password</label>
                                <input type="text" name="" id="title-5" placeholder="Old password">
                            </div>
                            <!-- <div class=" mb-3 d-flex flex-column">
                                <label for="title-6" class="title email-address mb-2">Old password</label>
                                <input type="text" name="" id="title-6" placeholder="Last name">
                            </div> -->
                            <div class=" mb-3 d-flex flex-column">
                                <label for="title-7" class="title email-address mb-2">new password</label>
                                <input type="email" name="" id="title-7" placeholder="New password">
                            </div>
                            <div class=" mb-3 d-flex flex-column">
                                <label for="title-8" class="title email-address mb-2">rEPEAT NEW PASSWORD</label>
                                <input type="email" name="" id="title-8" placeholder="Repeat new password">
                            </div>
                            <input class="align-self-start" type="submit" value="Save changes">
                        </form>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                        <div class="tab-title mb-4">Address</div>
                        <div class="row">
                            <div class="col-md-6 col-12 mb-md-0 mb-4">
                                <div class="address-card">
                                    <div class="address-type-edit-button mb-2 d-flex justify-content-between align-items-center">
                                        <div class="address-type">
                                            Billing Address
                                        </div>
                                        <div class="edit-button">
                                            <button class="btn d-flex align-items-center">
                                                <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 13.5H13M8.18961 3.04114C8.18961 3.04114 8.18961 4.13089 9.27936 5.22064C10.3691 6.31039 11.4589 6.31039 11.4589 6.31039M3.87975 11.492L6.16823 11.1651C6.49833 11.118 6.80424 10.965 7.04003 10.7292L12.5486 5.22064C13.1505 4.61879 13.1505 3.64299 12.5486 3.04114L11.4589 1.95139C10.857 1.34954 9.88121 1.34954 9.27936 1.95139L3.77078 7.45997C3.53499 7.69576 3.38203 8.00167 3.33488 8.33177L3.00795 10.6202C2.9353 11.1288 3.3712 11.5647 3.87975 11.492Z" stroke="#6C7275" stroke-width="1.5" stroke-linecap="round" />
                                                </svg>
                                                <div class="ms-2">Edit</div>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="person-name mb-2">Sofia Havertz</div>
                                    <div class="person-phone mb-2">(+1) 234 567 890</div>
                                    <div class="address-title">
                                        345 Long Island, NewYork, United States
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="address-card">
                                    <div class="address-type-edit-button mb-2 d-flex justify-content-between align-items-center">
                                        <div class="address-type">
                                            Billing Address
                                        </div>
                                        <div class="edit-button">
                                            <button class="btn d-flex align-items-center">
                                                <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 13.5H13M8.18961 3.04114C8.18961 3.04114 8.18961 4.13089 9.27936 5.22064C10.3691 6.31039 11.4589 6.31039 11.4589 6.31039M3.87975 11.492L6.16823 11.1651C6.49833 11.118 6.80424 10.965 7.04003 10.7292L12.5486 5.22064C13.1505 4.61879 13.1505 3.64299 12.5486 3.04114L11.4589 1.95139C10.857 1.34954 9.88121 1.34954 9.27936 1.95139L3.77078 7.45997C3.53499 7.69576 3.38203 8.00167 3.33488 8.33177L3.00795 10.6202C2.9353 11.1288 3.3712 11.5647 3.87975 11.492Z" stroke="#6C7275" stroke-width="1.5" stroke-linecap="round" />
                                                </svg>
                                                <div class="ms-2">Edit</div>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="person-name mb-2">Sofia Havertz</div>
                                    <div class="person-phone mb-2">(+1) 234 567 890</div>
                                    <div class="address-title">
                                        345 Long Island, NewYork, United States
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">
                        <div class="tab-title mb-4">Orders History</div>
                        <div class="order-table d-md-block d-none">
                            <div class="table-titles d-flex">
                                <div class="number-id">Number ID</div>
                                <div class="dates">Dates</div>
                                <div class="status">Status</div>
                                <div class="price">Price</div>
                            </div>
                            <div class="order-item">
                                <div class="order-id">#3456_768</div>
                                <div class="order-date">October 17, 2023</div>
                                <div class="order-status">Delivered</div>
                                <div class="order-price">$1234.00</div>
                            </div>
                            <div class="order-item">
                                <div class="order-id">#3456_980</div>
                                <div class="order-date">October 11, 2023</div>
                                <div class="order-status">Delivered</div>
                                <div class="order-price">$345.00</div>
                            </div>
                            <div class="order-item">
                                <div class="order-id">#3456_120</div>
                                <div class="order-date">August 24, 2023</div>
                                <div class="order-status">Delivered</div>
                                <div class="order-price">$2345.00</div>
                            </div>
                        </div>
                        <div class="order-list d-md-none d-block">
                            <div class="order-one d-flex ">
                                <div class="list-titles d-flex flex-column">
                                    <div class="number-id">Number ID</div>
                                    <div class="dates">Dates</div>
                                    <div class="status">Status</div>
                                    <div class="price">Price</div>
                                </div>
                                <div class="order-value d-flex flex-column">
                                    <div class="order-id">#3456_120</div>
                                    <div class="order-date">August 24, 2023</div>
                                    <div class="order-status">Delivered</div>
                                    <div class="order-price">$2345.00</div>
                                </div>
                            </div>
                            <div class="order-one d-flex ">
                                <div class="list-titles d-flex flex-column">
                                    <div class="number-id">Number ID</div>
                                    <div class="dates">Dates</div>
                                    <div class="status">Status</div>
                                    <div class="price">Price</div>
                                </div>
                                <div class="order-value d-flex flex-column">
                                    <div class="order-id">#3456_120</div>
                                    <div class="order-date">August 24, 2023</div>
                                    <div class="order-status">Delivered</div>
                                    <div class="order-price">$2345.00</div>
                                </div>
                            </div>
                            <div class="order-one d-flex ">
                                <div class="list-titles d-flex flex-column">
                                    <div class="number-id">Number ID</div>
                                    <div class="dates">Dates</div>
                                    <div class="status">Status</div>
                                    <div class="price">Price</div>
                                </div>
                                <div class="order-value d-flex flex-column">
                                    <div class="order-id">#3456_120</div>
                                    <div class="order-date">August 24, 2023</div>
                                    <div class="order-status">Delivered</div>
                                    <div class="order-price">$2345.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                        <div class="tab-title mb-4">Your Wishlist</div>
                        <div class="table-titles d-flex">
                            <div class="number-id">Product</div>
                            <div class="price">Price</div>
                            <div class="dates">Action</div>
                        </div>
                        <div class="order-item">
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
                            <div class="product-price">$19.19</div>
                            <button class="add-product">Add to cart</button>
                        </div>
                        <div class="order-item">
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
                            <div class="product-price">$345</div>
                            <button class="add-product">Add to cart</button>
                        </div>
                        <div class="order-item">
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
                            <div class="product-price">$8.80</div>
                            <button class="add-product">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "footer.php" ?>
    <?php include "js.php" ?>
</body>

</html>