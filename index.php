<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mobile Store</title>
    <!-- Bootstrap CDN -->
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous"
    />
    <!-- Owl-carousel CDN -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw="
        crossorigin="anonymous"
    />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw="
        crossorigin="anonymous"
    />

    <!-- font awesome icons -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ="
        crossorigin="anonymous"
    />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<!-- header -->
<header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
        <p class="font-montagu font-size-12 text-black-50 m-0">
            Mobile Store, No.007, Black Street, Colombo, Sri Lanka. +94 11 2564
            789
        </p>
        <div class="font-montagu font-size-14">
            <a href="#" class="px-3 border-right border-left text-dark">Login</a>
            <a href="#" class="px-3 border-right border-left text-dark"
            >Whishlist (0)</a
            >
        </div>
    </div>

    <!-- Primary Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark color-secondary-bg">
        <a class="navbar-brand font-montagu" href="#">Mobile Store</a>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-montagu">
                <li class="nav-item active">
                    <a class="nav-link" href="#">On Sale</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"
                    >Products <i class="fas fa-chevron-down"></i
                        ></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"
                    >Category <i class="fas fa-chevron-down"></i
                        ></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Coming Soon</a>
                </li>
            </ul>
            <form action="#" class="font-size-14 font-montagu">
                <a href="#" class="py-2 rounded-pill color-primary-bg">
              <span class="font-size-16 px-2 text-white"
              ><i class="fas fa-shopping-cart"></i
                  ></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
                </a>
            </form>
        </div>
    </nav>
</header>

<!-- main -->
<main id="main-site">
    <!-- owl carousel -->
    <section id="banner-area">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="./assets/banner_01.jpg" alt="banner_01" />
            </div>
            <div class="item">
                <img src="./assets/banner_02.jpg" alt="banner_01" />
            </div>
            <div class="item">
                <img src="./assets/banner_01.jpg" alt="banner_03" />
            </div>
        </div>
    </section>

    <!-- top sale -->
    <section id="top-sale">
        <div class="container py-5">
            <h4 class="font-montagu font-size-20">Top Sale</h4>
            <hr />
            <!-- carousel -->
            <div class="owl-carousel owl-theme">
                <div class="item py-2">
                    <div class="product font-poppins">
                        <a href="#"
                        ><img
                                src="./assets/products/1.png"
                                alt="product1"
                                class="img-fluid"
                            /></a>
                        <div class="text-center">
                            <h6>Samsung Galaxy 6 Edge</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$599</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="item py-2">
                    <div class="product font-poppins">
                        <a href="#"
                        ><img
                                src="./assets/products/2.png"
                                alt="product2"
                                class="img-fluid"
                            /></a>
                        <div class="text-center">
                            <h6>Google Nexus 2XL</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$399</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="item py-2">
                    <div class="product font-poppins">
                        <a href="#"
                        ><img
                                src="./assets/products/3.png"
                                alt="product3"
                                class="img-fluid"
                            /></a>
                        <div class="text-center">
                            <h6>Redmi Note 2</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$325</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="item py-2">
                    <div class="product font-poppins">
                        <a href="#"
                        ><img
                                src="./assets/products/4.png"
                                alt="product4"
                                class="img-fluid"
                            /></a>
                        <div class="text-center">
                            <h6>Redmi Note 1</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$299</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="item py-2">
                    <div class="product font-poppins">
                        <a href="#"
                        ><img
                                src="./assets/products/5.png"
                                alt="product5"
                                class="img-fluid"
                            /></a>
                        <div class="text-center">
                            <h6>Redmi Mini</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$199</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="item py-2">
                    <div class="product font-poppins">
                        <a href="#"
                        ><img
                                src="./assets/products/6.png"
                                alt="product6"
                                class="img-fluid"
                            /></a>
                        <div class="text-center">
                            <h6>Redmi Mini Plus</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$499</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- today price -->
    <section id="today-price">
        <div class="container">
            <h4 class="font-montagu font-size-20">Today Price</h4>
            <div
                id="filters"
                class="button-group text-right font-poppins font-size-16"
            >
                <button class="btn is-checked" data-filter="*">All Brands</button>
                <button class="btn" data-filter=".Apple">Apple</button>
                <button class="btn" data-filter=".Samsung">Samsung</button>
                <button class="btn" data-filter=".Redmi">Redmi</button>
            </div>
            <div class="grid">
                <div class="grid-item Apple border">
                    <div class="item py-2" style="width: 200px">
                        <div class="product font-poppins">
                            <a href="#"
                            ><img
                                    src="./assets/products/11.png"
                                    alt="product11"
                                    class="img-fluid"
                                /></a>
                            <div class="text-center">
                                <h6>iPhone XS</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$899</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item Apple border">
                    <div class="item py-2" style="width: 200px">
                        <div class="product font-poppins">
                            <a href="#"
                            ><img
                                    src="./assets/products/12.png"
                                    alt="product12"
                                    class="img-fluid"
                                /></a>
                            <div class="text-center">
                                <h6>iPhone 4</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$599</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item Apple border">
                    <div class="item py-2" style="width: 200px">
                        <div class="product font-poppins">
                            <a href="#"
                            ><img
                                    src="./assets/products/13.png"
                                    alt="product13"
                                    class="img-fluid"
                                /></a>
                            <div class="text-center">
                                <h6>iPhone 5</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$699</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-item Samsung border">
                    <div class="item py-2" style="width: 200px">
                        <div class="product font-poppins">
                            <a href="#"
                            ><img
                                    src="./assets/products/1.png"
                                    alt="product1"
                                    class="img-fluid"
                                /></a>
                            <div class="text-center">
                                <h6>Galaxy S6 Edge</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$729</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item Samsung border">
                    <div class="item py-2" style="width: 200px">
                        <div class="product font-poppins">
                            <a href="#"
                            ><img
                                    src="./assets/products/10.png"
                                    alt="product10"
                                    class="img-fluid"
                                /></a>
                            <div class="text-center">
                                <h6>Galaxy S7 Edge</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$829</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item Samsung border">
                    <div class="item py-2" style="width: 200px">
                        <div class="product font-poppins">
                            <a href="#"
                            ><img
                                    src="./assets/products/9.png"
                                    alt="product9"
                                    class="img-fluid"
                                /></a>
                            <div class="text-center">
                                <h6>Galaxy S3</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$429</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-item Redmi border">
                    <div class="item py-2" style="width: 200px">
                        <div class="product font-poppins">
                            <a href="#"
                            ><img
                                    src="./assets/products/2.png"
                                    alt="product2"
                                    class="img-fluid"
                                /></a>
                            <div class="text-center">
                                <h6>Redmi Note 1</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$399</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item Redmi border">
                    <div class="item py-2" style="width: 200px">
                        <div class="product font-poppins">
                            <a href="#"
                            ><img
                                    src="./assets/products/3.png"
                                    alt="produc32"
                                    class="img-fluid"
                                /></a>
                            <div class="text-center">
                                <h6>Redmi Note 2</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$499</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item Redmi border">
                    <div class="item py-2" style="width: 200px">
                        <div class="product font-poppins">
                            <a href="#"
                            ><img
                                    src="./assets/products/4.png"
                                    alt="product4"
                                    class="img-fluid"
                                /></a>
                            <div class="text-center">
                                <h6>Redmi Note 1 Mini</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$329</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item Redmi border">
                    <div class="item py-2" style="width: 200px">
                        <div class="product font-poppins">
                            <a href="#"
                            ><img
                                    src="./assets/products/5.png"
                                    alt="product5"
                                    class="img-fluid"
                                /></a>
                            <div class="text-center">
                                <h6>Redmi Note 2 Mini</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$425</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item Redmi border">
                    <div class="item py-2" style="width: 200px">
                        <div class="product font-poppins">
                            <a href="#"
                            ><img
                                    src="./assets/products/6.png"
                                    alt="product5"
                                    class="img-fluid"
                                /></a>
                            <div class="text-center">
                                <h6>Redmi Note 3</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$495</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item Redmi border">
                    <div class="item py-2" style="width: 200px">
                        <div class="product font-poppins">
                            <a href="#"
                            ><img
                                    src="./assets/products/7.png"
                                    alt="product7"
                                    class="img-fluid"
                                /></a>
                            <div class="text-center">
                                <h6>Redmi Note 4</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$599</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item Redmi border">
                    <div class="item py-2" style="width: 200px">
                        <div class="product font-poppins">
                            <a href="#"
                            ><img
                                    src="./assets/products/8.png"
                                    alt="product8"
                                    class="img-fluid"
                                /></a>
                            <div class="text-center">
                                <h6>Redmi Gim Grey</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$449</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br />
    <br />

    <!-- New Arrivals -->
    <div id="new-arrivals">
        <div class="container">
            <h4 class="font-montagu">New Arrivals</h4>
            <hr />
            <!-- carousel -->
            <div class="owl-carousel owl-theme">
                <div class="item py-2 bg-light">
                    <div class="product font-poppins">
                        <a href="#"
                        ><img
                                src="./assets/products/1.png"
                                alt="product1"
                                class="img-fluid"
                            /></a>
                        <div class="text-center">
                            <h6>Samsung Galaxy 6 Edge</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$599</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="item py-2 bg-light">
                    <div class="product font-poppins">
                        <a href="#"
                        ><img
                                src="./assets/products/2.png"
                                alt="product2"
                                class="img-fluid"
                            /></a>
                        <div class="text-center">
                            <h6>Google Nexus 2XL</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$399</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="item py-2 bg-light">
                    <div class="product font-poppins">
                        <a href="#"
                        ><img
                                src="./assets/products/3.png"
                                alt="product3"
                                class="img-fluid"
                            /></a>
                        <div class="text-center">
                            <h6>Redmi Note 2</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$325</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="item py-2 bg-light">
                    <div class="product font-poppins">
                        <a href="#"
                        ><img
                                src="./assets/products/4.png"
                                alt="product4"
                                class="img-fluid"
                            /></a>
                        <div class="text-center">
                            <h6>Redmi Note 1</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$299</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="item py-2 bg-light">
                    <div class="product font-poppins">
                        <a href="#"
                        ><img
                                src="./assets/products/5.png"
                                alt="product5"
                                class="img-fluid"
                            /></a>
                        <div class="text-center">
                            <h6>Redmi Mini</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$199</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="item py-2 bg-light">
                    <div class="product font-poppins">
                        <a href="#"
                        ><img
                                src="./assets/products/6.png"
                                alt="product6"
                                class="img-fluid"
                            /></a>
                        <div class="text-center">
                            <h6>Redmi Mini Plus</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$499</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- latest blog -->
    <section id="blogs">
        <div class="container">
            <h4 class="font-montagu font-size-20">Latest Blogs</h4>
            <hr />

            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card border-0 font-poppins mr-5" style="width: 20rem">
                        <h5 class="card-title font-size-16">Upcoming Phones</h5>
                        <img
                            src="./assets/blogs/blog1.jpg"
                            alt="blog1"
                            class="card-img-top"
                        />
                        <p
                            class="card-text font-montagu font-size-12 text-black-50 py-1"
                        >
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                            orci velit, pharetra at malesuada a, semper et nunc. Aenean
                            pretium lorem vitae elit dapibus, id euismod metus posuere.
                            Cras placerat augue dolor, eget viverra lacus efficitur ac.
                            Curabitur porta nisl non consectetur euismod.
                        </p>
                        <a href="#" class="color-secondary text-left">To See More</a>
                    </div>
                </div>
                <div class="item">
                    <div class="card border-0 font-poppins mr-5" style="width: 20rem">
                        <h5 class="card-title font-size-16">Upcoming Phones</h5>
                        <img
                            src="./assets/blogs/blog2.jpg"
                            alt="blog2"
                            class="card-img-top"
                        />
                        <p
                            class="card-text font-montagu font-size-12 text-black-50 py-1"
                        >
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                            orci velit, pharetra at malesuada a, semper et nunc. Aenean
                            pretium lorem vitae elit dapibus, id euismod metus posuere.
                            Cras placerat augue dolor, eget viverra lacus efficitur ac.
                            Curabitur porta nisl non consectetur euismod.
                        </p>
                        <a href="#" class="color-secondary text-left">To See More</a>
                    </div>
                </div>
                <div class="item">
                    <div class="card border-0 font-poppins mr-5" style="width: 20rem">
                        <h5 class="card-title font-size-16">Upcoming Phones</h5>
                        <img
                            src="./assets/blogs/blog3.jpg"
                            alt="blog3"
                            class="card-img-top"
                        />
                        <p
                            class="card-text font-montagu font-size-12 text-black-50 py-1"
                        >
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                            orci velit, pharetra at malesuada a, semper et nunc. Aenean
                            pretium lorem vitae elit dapibus, id euismod metus posuere.
                            Cras placerat augue dolor, eget viverra lacus efficitur ac.
                            Curabitur porta nisl non consectetur euismod.
                        </p>
                        <a href="#" class="color-secondary text-left">To See More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<br />

<!-- footer -->
<footer id="footer" class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12">
                <h4 class="font-montagu font-size-20">Mobile Store</h4>
                <p class="font-size-14 font-montagu text-white-50">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                    orci velit, pharetra at malesuada a, semper et nunc. Aenean
                    pretium lorem vitae elit dapibus, id euismod metus posuere.
                </p>
            </div>
            <div class="col-lg-4 col-12">
                <h4 class="font-montagu font-size-20">News Letter</h4>
                <form class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Email" />
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-danger mb-2">
                            Subscribe
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-lg-2 col-12">
                <h4 class="font-montagu font-size-20">Information</h4>
                <div class="d-flex flex-column flex-wrap">
                    <a href="#" class="font-montagu font-size-14 text-white-50 pb-1"
                    >About Us</a
                    >
                    <a href="#" class="font-montagu font-size-14 text-white-50 pb-1"
                    >Delivery Information</a
                    >
                    <a href="#" class="font-montagu font-size-14 text-white-50 pb-1"
                    >Privacy Policy</a
                    >
                    <a href="#" class="font-montagu font-size-14 text-white-50 pb-1"
                    >Terms & Conditions</a
                    >
                </div>
            </div>
            <div class="col-lg-2 col-12">
                <h4 class="font-montagu font-size-20">Account</h4>
                <div class="d-flex flex-column flex-wrap">
                    <a href="#" class="font-montagu font-size-14 text-white-50 pb-1"
                    >My Account</a
                    >
                    <a href="#" class="font-montagu font-size-14 text-white-50 pb-1"
                    >Order History</a
                    >
                    <a href="#" class="font-montagu font-size-14 text-white-50 pb-1"
                    >Whishlist</a
                    >
                    <a href="#" class="font-montagu font-size-14 text-white-50 pb-1"
                    >Newsletter</a
                    >
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- copyright -->
<div class="copyright text-center bg-dark text-white py-2">
    <p class="font-montagu">
        &copy; Copyrights 2021. Designed by
        <a href="https://github.com/Thilrash">Thilrash Gowzul Ameen</a>
    </p>
</div>

<!-- other script -->
<script
    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"
></script>
<script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"
></script>
<script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"
></script>

<!-- Owl Carousel Js file -->
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0="
    crossorigin="anonymous"
></script>

<!--  isotope plugin cdn  -->
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"
    integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI="
    crossorigin="anonymous"
></script>

<!-- Custom Javascript -->
<script src="index.js"></script>
</body>
</html>
