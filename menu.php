<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yamifood Restaurant</title>
    <link rel="icon" href="<?php echo BASE_URL; ?>/public/images/icon.png">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/bootstrap.min.css">
    <script src="<?php echo BASE_URL; ?>/public/js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/public/js/popper.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/public/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/styles.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/menu.css">
</head>

<body>
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img class="img-fluid" src="<?php echo BASE_URL; ?>/public/images/logo.png" alt="logo">
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo BASE_URL; ?>/index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL; ?>/menu.html">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL; ?>/about.html">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Pages</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/reservation.html">Reservation</a>
                                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/stuff.html">Stuff</a>
                                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/gallery.html">Gallery</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Blog</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/blog.html">Blog</a>
                                <a class="dropdown-item" href="<?php echo BASE_URL; ?>/blog-single.html">Blog Single</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL; ?>/contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Special menu -->
    <div class="bg-all">
        <h2>Special Menu</h2>
    </div>
    <!-- Menu -->
    <section class="menu">
        <div class="container">
            <div class="heading text-center">
                <h1>Special menu</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, iusto?</p>
            </div>
            <div class="category">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 mr-auto ml-auto text-center">
                        <div class="type text-center">
                            <button class="btn btn-orange active" data-type="all">All</button>
                            <button class="btn btn-orange" data-type="drink">Drinks</button>
                            <button class="btn btn-orange" data-type="lunch">Lunch</button>
                            <button class="btn btn-orange" data-type="dinner">Dinner</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list">
                <div class="row">
                    <div class="col-lg-4 col-md-6 row-fix" data-type="drink">
                        <div class="item">
                            <img src="<?php echo BASE_URL; ?>/public/images/img-01.jpg" alt="1" class="img-fluid">
                            <div class="overlay">
                                <h3>Special Drinks 1</h3>
                                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <hr>
                                <p class="price">$15.79</p>
                                <div class="order">
                                    <button type="button" class="btn btn-success">Buy</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 row-fix" data-type="drink">
                        <div class="item">
                            <img src="<?php echo BASE_URL; ?>/public/images/img-02.jpg" alt="1" class="img-fluid">
                            <div class="overlay">
                                <h3>Special Drinks 2</h3>
                                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <hr>
                                <p class="price">$15.79</p>
                                <div class="order">
                                    <button type="button" class="btn btn-success">Buy</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 row-fix" data-type="drink">
                        <div class="item">
                            <img src="<?php echo BASE_URL; ?>/public/images/img-03.jpg" alt="1" class="img-fluid">
                            <div class="overlay">
                                <h3>Special Drinks 3</h3>
                                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <hr>
                                <p class="price">$15.79</p>
                                <div class="order">
                                    <button type="button" class="btn btn-success">Buy</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 row-fix" data-type="lunch">
                        <div class="item">
                            <img src="<?php echo BASE_URL; ?>/public/images/img-04.jpg" alt="1" class="img-fluid">
                            <div class="overlay">
                                <h3>Special Lunch 1</h3>
                                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <hr>
                                <p class="price">$15.79</p>
                                <div class="order">
                                    <button type="button" class="btn btn-success">Buy</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 row-fix" data-type="lunch">
                        <div class="item">
                            <img src="<?php echo BASE_URL; ?>/public/images/img-05.jpg" alt="1" class="img-fluid">
                            <div class="overlay">
                                <h3>Special Lunch 2</h3>
                                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <hr>
                                <p class="price">$15.79</p>
                                <div class="order">
                                    <button type="button" class="btn btn-success">Buy</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 row-fix" data-type="lunch">
                        <div class="item">
                            <img src="<?php echo BASE_URL; ?>/public/images/img-06.jpg" alt="1" class="img-fluid">
                            <div class="overlay">
                                <h3>Special Lunch 3</h3>
                                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <hr>
                                <p class="price">$15.79</p>
                                <div class="order">
                                    <button type="button" class="btn btn-success">Buy</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 row-fix" data-type="dinner">
                        <div class="item">
                            <img src="<?php echo BASE_URL; ?>/public/images/img-07.jpg" alt="1" class="img-fluid">
                            <div class="overlay">
                                <h3>Special Dinner 1</h3>
                                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <hr>
                                <p class="price">$15.79</p>
                                <div class="order">
                                    <button type="button" class="btn btn-success">Buy</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 row-fix" data-type="dinner">
                        <div class="item">
                            <img src="<?php echo BASE_URL; ?>/public/images/img-08.jpg" alt="1" class="img-fluid">
                            <div class="overlay">
                                <h3>Special Dinner 2</h3>
                                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <hr>
                                <p class="price">$15.79</p>
                                <div class="order">
                                    <button type="button" class="btn btn-success">Buy</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 row-fix" data-type="dinner">
                        <div class="item">
                            <img src="<?php echo BASE_URL; ?>/public/images/img-09.jpg" alt="1" class="img-fluid">
                            <div class="overlay">
                                <h3>Special Dinner 3</h3>
                                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <hr>
                                <p class="price">$15.79</p>
                                <div class="order">
                                    <button type="button" class="btn btn-success">Buy</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 text-left mr-auto ml-auto">
                    <h1>" If you're not the one cooking, stay out of the way and compliment the chef. "</h1>
                    <p>Michael Strahan</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery -->
    <section class="gallery">
        <div class="container-fluid">
            <div class="heading text-center">
                <h1>Gallery</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore, quis.</p>
            </div>
            <div class="grid">
                <div class="row" id="aaa">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <a class="show" href="<?php echo BASE_URL; ?>/public/images/gallery-img-01.jpg">
                            <img src="<?php echo BASE_URL; ?>/public/images/gallery-img-01.jpg" alt="1" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <a class="show" href="<?php echo BASE_URL; ?>/public/images/gallery-img-02.jpg">
                            <img src="<?php echo BASE_URL; ?>/public/images/gallery-img-02.jpg" alt="2" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <a class="show" href="<?php echo BASE_URL; ?>/public/images/gallery-img-03.jpg">
                            <img src="<?php echo BASE_URL; ?>/public/images/gallery-img-03.jpg" alt="3" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <a class="show" href="<?php echo BASE_URL; ?>/public/images/gallery-img-04.jpg">
                            <img src="<?php echo BASE_URL; ?>/public/images/gallery-img-04.jpg" alt="4" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <a class="show" href="<?php echo BASE_URL; ?>/public/images/gallery-img-05.jpg">
                            <img src="<?php echo BASE_URL; ?>/public/images/gallery-img-05.jpg" alt="5" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <a class="show" href="<?php echo BASE_URL; ?>/public/images/gallery-img-06.jpg">
                            <img src="<?php echo BASE_URL; ?>/public/images/gallery-img-06.jpg" alt="6" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
            <div class="review">
                <div class="content">
                    <span class="close">&times;</span>
                    <img alt="image" class="img-fluid" alt="image">
                </div>
            </div>
        </div>
    </section>
    <!-- Customer -->
    <section class="customer">
        <div class="container">
            <div class="heading text-center">
                <h1>Customer reviews</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea, eos.</p>
            </div>
            <div class="reviews">
                <div class="slider">
                    <div class="slide active">
                        <img src="<?php echo BASE_URL; ?>/public/images/profile-1.jpg" alt="image1" class="img-fluid rounded-circle border">
                        <div class="content">
                            <h3 class="name">Nguyen Long</h3>
                            <h4 class="job">Web Developer</h4>
                            <p class="detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat reiciendis
                                delectus eveniet consequatur ad eaque molestias ducimus, fuga numquam necessitatibus
                                commodi placeat, inventore tempora aut laudantium maxime, adipisci porro magnam?</p>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="<?php echo BASE_URL; ?>/public/images/profile-3.jpg" alt="image2" class="img-fluid rounded-circle border">
                        <div class="content">
                            <h3 class="name">Pham Nhung</h3>
                            <h4 class="job">Designer</h4>
                            <p class="detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat reiciendis
                                delectus eveniet consequatur ad eaque molestias ducimus, fuga numquam necessitatibus
                                commodi placeat, inventore tempora aut laudantium maxime, adipisci porro magnam?</p>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="<?php echo BASE_URL; ?>/public/images/profile-7.jpg" alt="image3" class="img-fluid rounded-circle border">
                        <div class="content">
                            <h3 class="name">Tran Ngoc</h3>
                            <h4 class="job">SEO</h4>
                            <p class="detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat reiciendis
                                delectus eveniet consequatur ad eaque molestias ducimus, fuga numquam necessitatibus
                                commodi placeat, inventore tempora aut laudantium maxime, adipisci porro magnam?</p>
                        </div>
                    </div>
                </div>
                <div class="control">
                    <div class="left">
                        <i class="fas fa-arrow-left"></i>
                    </div>
                    <div class="right">
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="icon">
                        <i class="fas fa-phone-volume"></i>
                    </div>
                    <div class="overflow-hidden">
                        <h4>Phone</h4>
                        <p>+84 33-568-4403</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="overflow-hidden">
                        <h4>Email</h4>
                        <p>vanlong20it@gmail.com</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="overflow-hidden">
                        <h4>Location</h4>
                        <p>Ho Chi Minh City, VietNam</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <footer class="bg-image">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="content">
                        <h3>About Us</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit praesentium libero porro
                            repudiandae mollitia neque alias voluptates magnam voluptate, quis fuga sed explicabo
                            et,
                            nostrum tempore consectetur at reiciendis dolore.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="content">
                        <h3>Opening Hours</h3>
                        <hr>
                        <p>Monday: Closed</p>
                        <p>Tue-Wed: 9AM - 10PM</p>
                        <p>Thu-Fri: 9AM - 10PM</p>
                        <p>Sat-Sun: 5PM - 10PM</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="content">
                        <h3>Contact Information</h3>
                        <hr>
                        <p>Vo Van Ngan Street, Thu Duc</p>
                        <p>+8412121212</p>
                        <p>vlnguyen@gmail.com</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="content">
                        <div class="submit">
                            <h3>Subscribe</h3>
                            <hr>
                            <form action="#" method="post">
                                <input type="email" name="" id="" placeholder="Email Address...">
                                <button type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright">
        <p>All right Reserved &copy; 2020 Yamifood Restaurant Design By: vanlong20it</p>
    </div>
    <!-- javascript -->
    <script src="<?php echo BASE_URL; ?>/public/font-awesome/js/all.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/public/js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/public/js/popper.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/public/js/apps.js"></script>
</body>

</html>