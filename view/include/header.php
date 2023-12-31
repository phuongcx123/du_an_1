<!DOCTYPE html>
<html lang="zxx">
<!-- Mirrored from template.hasthemes.com/shome/shome/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Nov 2023 15:28:52 GMT -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Shome - Shoes eCommerce Website Template" />
  <meta name="keywords" content="footwear, shoes, modern, shop, store, ecommerce, responsive, e-commerce" />
  <meta name="author" content="codecarnival" />

  <title>Shome - Shoes eCommerce Website Template</title>

  <!--== Favicon ==-->
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

  <!--== Google Fonts ==-->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400;1,500&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <!--== Bootstrap CSS ==-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <!--== Font Awesome Min Icon CSS ==-->
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
  <!--== Pe7 Stroke Icon CSS ==-->
  <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
  <!--== Swiper CSS ==-->
  <link href="assets/css/swiper.min.css" rel="stylesheet" />
  <!--== Fancybox Min CSS ==-->
  <link href="assets/css/fancybox.min.css" rel="stylesheet" />
  <!--== Aos Min CSS ==-->
  <link href="assets/css/aos.min.css" rel="stylesheet" />

  <!--== Main Style CSS ==-->
  <link href="assets/css/style1.css" rel="stylesheet" />


  <!--== Main Style CSS ==-->
  <!-- <link href="assets/css/style-login.css" rel="stylesheet" /> -->
  <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<header class="main-header-wrapper position-relative mb-3">
  <div class="header-top">
    <div class="container pt--0 pb--0">
      <div class="row">
        <div class="col-12">
          <div class="header-top-align">
            <div class="header-top-align-start">
              <div class="desc">
                <marquee>"Xin chào! Bạn đã đặt chân đến TPT STORE - Nơi Sự Lựa Chọn Đúng Đắn Bắt Đầu."</marquee>
              </div>
            </div>
            <div class="header-top-align-end">
              <div class="header-info-items">
                <div class="info-items">
                  <ul>
                    <li class="number"><i class="fa fa-phone"></i><a href="tel://0123456789">0985670942</a></li>
                    <li class="email"><i class="fa fa-envelope"></i><a href="mailto://demo@example.com">tptshore@example.com</a></li>
                    <li class="account"><?php
                                        if (!isset($_SESSION['username'])) {
                                          echo "<i class='fa fa-user'></i><a href='?act=login'>Tài khoản</a>";
                                        } else {

                                          echo "
                                                                    <a type='button'  data-bs-toggle='dropdown'>
                                                                      Xin Chào : <img src='assets/uploads/" . $_SESSION['username']['image_tk'] . "' class='img-thumbnail' style='border-radius: 50%; width: 30px; height: 30px; object-fit: cover;'> <spam class='text-body'>" . $_SESSION['username']['name_tk'] . " </spam>
                                                                    </a>
                                                                    <ul class='dropdown-menu'>
                                                                      <li><a class='dropdown-item' href='?act=thongtin'>Thông Tin Tài Khoản</a></li>
                                                                      <li><a class='dropdown-item' href='?act=dangxuat'>Đăng Xuất</a></li>
                                                                      <li><a class='dropdown-item' href='?act=doimk'>Đổi Mật Khẩu</a></li>
                                                                      <li><a class='dropdown-item' href='?act=lichsu'>Lịch Sử Đơn Hàng</a></li>" ;
                                          if ($_SESSION['username']['chucvu'] == 1) {
                                            echo   "<li><a class='dropdown-item' href='admin/index.php'>Vào Trang Quản Trị</a></li> </ul>";
                                          }
                                        }


                                        ?></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header-middle">
    <div class="container pt--0 pb--0">
      <div class="row align-items-center">
        <div class="col-12">
          <div class="header-middle-align">
            <div class="header-middle-align-start">
              <div class="header-logo-area">
                <a href="index.php">
                  <img class="logo-main" src="assets/img/White Brown Simple Creative Shoes Logo.png" width="131" height="34" alt="Logo" />
                  <!-- <img class="logo-light" src="assets/img/logo-light.webp" width="131" height="34" alt="Logo" /> -->
                </a>
              </div>
            </div>
            <div class="header-middle-align-center">
              <div class="header-search-area">
                <form class="header-searchbox" method="post" action="?act=sanpham">
                  <input type="search" class="form-control" name="key" placeholder="Search">
                  <button class="btn-submit" name="keyword" type="submit"><i class="pe-7s-search"></i></button>
                </form>
              </div>
            </div>
            <div class="header-middle-align-end">
              <div class="header-action-area">
                <div class="shopping-search">
                  <button class="shopping-search-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasSearch" aria-controls="AsideOffcanvasSearch"><i class="pe-7s-search icon"></i></button>
                </div>
                <div class="shopping-wishlist">
                  <a class="shopping-wishlist-btn" href="index.php?act=wishlist">
                    <i class="pe-7s-like icon"></i>
                  </a>
                </div>
                <div class="shopping-cart">
                  <button class="shopping-cart-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasCart" aria-controls="offcanvasRightLabel">
                    <a class="shopping-wishlist-btn" href="index.php?act=cart">
                      <i class="pe-7s-shopbag icon"></i>
                      <sup id="giohanh" class="shop-count"><?= !empty($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?></sup>
                    </a>
                  </button>
                </div>
                <button class="btn-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasMenu" aria-controls="AsideOffcanvasMenu">
                  <i class="pe-7s-menu"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header-area header-default">
    <div class="container">
      <div class="row no-gutter align-items-center position-relative">
        <div class="col-12">
          <div class="header-align">
            <div class="header-navigation-area position-relative">
              <ul class="main-menu nav">
                <li class="has-submenu1"><a href="index.php"><span>Trang Chủ</span></a>
                </li>
                <li class="has-submenu position-static"><a href="index.php?act=shop"><span>Danh mục</span></a>
                  <ul class="submenu-nav submenu-nav-mega1">
                    <?php foreach ($dm as $k) : extract($k); {
                      } ?>
                      <li><a href="?act=shop&id_dm=<?= $id_dm ?>"><?= $name_dm ?> </a></li>
                    <?php endforeach ?>
                  </ul>
                </li>
                <li class="has-submenu1 position-static"><a href="index.php?act=shop"><span>Sản Phẩm</span></a>
                </li>
                <li class="has-submenu1"><a href="index.php?act=blog"><span>Tin Tức</span></a>
                  <!-- <ul class="submenu-nav submenu-nav-mega">
                      <li class="mega-menu-item"><a href="" class="mega-title">Blog Layout</a>
                        <ul>
                          <li><a href="blog.html">Blog Grid</a></li>
                          <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                          <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                        </ul>
                      </li>
                      <li class="mega-menu-item"><a href="#/" class="mega-title">Single Blog</a>
                        <ul>
                          <li><a href="blog-details-no-sidebar.html">Blog Details</a></li>
                          <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                          <li><a href="blog-details.html">Blog Details Right Sidebar</a></li>
                        </ul>
                      </li>
                    </ul> -->
                </li>
                <li><a href="index.php?act=contact"><span>Liên hệ</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<body>