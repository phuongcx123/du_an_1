<main class="main-content">
  <!--== Start Hero Area Wrapper ==-->
  <section class="home-slider-area">
    <div class="swiper-container home-slider-container default-slider-container">
      <div class="swiper-wrapper home-slider-wrapper slider-default">
        <div class="swiper-slide">
          <div class="slider-content-area" data-bg-img="assets/img/shape/1.webp">
            <div class="container">
              <div class="slider-container">
                <div class="row justify-content-between align-items-center">
                  <div class="col-sm-6 col-md-5">
                    <div class="slider-content">
                      <div class="content">
                        <div class="title-box">
                          <h2 class="title">Giày mới độc quyền</h2>
                        </div>
                        <div class="desc-box">
                          <p class="desc">Giảm giá tới 30% cho tất cả giày và sản phẩm</p>
                        </div>
                        <div class="btn-box">
                          <a class="btn-slider" href="shop.html">Mua ngay</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6">
                    <div class="slider-thumb">
                      <div class="thumb scene">
                        <span class="scene-layer" data-depth=".3"><img src="assets/img/slider/slider-01.webp" width="461" height="489" alt="Image-HasTech"></span>
                      </div>
                      <div class="shape-group mousemove">
                        <div class="shape-group-one mousemove-layer" data-speed=".8" data-bg-img="assets/img/shape/2.webp"></div>
                        <div class="shape-group-two scene"><span class="scene-layer" data-depth=".6"><img src="assets/img/shape/3.webp" width="471" height="462" alt="Image-HasTech"></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <h2 class="slider-text-shape" style="margin-left: 20px;">New 2023</h2>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-content-area" data-bg-img="assets/img/shape/1.webp">
            <div class="container">
              <div class="slider-container">
                <div class="row justify-content-between align-items-center">
                  <div class="col-sm-6 col-md-5">
                    <div class="slider-content">
                      <div class="content">
                        <div class="title-box">
                          <h2 class="title">Giày mới độc quyền</h2>
                        </div>
                        <div class="desc-box">
                          <p class="desc">Giảm giá tới 30% cho tất cả giày và sản phẩm</p>
                        </div>
                        <div class="btn-box">
                          <a class="btn-slider" href="shop.html">Mua ngay</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6">
                    <div class="slider-thumb">
                      <div class="thumb scene">
                        <span class="scene-layer" data-depth=".3"><img src="assets/img/slider/slider-03.webp" width="548" height="649" alt="Image-HasTech"></span>
                      </div>
                      <div class="shape-group mousemove">
                        <div class="shape-group-one mousemove-layer" data-speed=".8" data-bg-img="assets/img/shape/2.webp"></div>
                        <div class="shape-group-two scene"><span class="scene-layer" data-depth=".6"><img src="assets/img/shape/3.webp" width="471" height="462" alt="Image-HasTech"></span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <h2 class="slider-text-shape">Mới nhất 2023</h2>
          </div>
        </div>

      </div>
      <div class="swiper-btn-wrap">
        <div class="swiper-btn-prev">
          <i class="pe-7s-angle-left"></i>
        </div>
        <div class="swiper-btn-next">
          <i class="pe-7s-angle-right"></i>
        </div>
      </div>
    </div>
  </section>
  <!--== End Hero Area Wrapper ==-->

  <!--== Start Product Collection Area Wrapper ==-->
  <section class="product-area product-collection-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <!--== Start Product Collection Item ==-->
          <div class="product-collection">
            <div class="inner-content">
              <div class="product-collection-content">
                <div class="content">
                  <h1>Tất cả </h1>
                </div>
              </div>
              <a class="banner-link-overlay" href="shop.html"></a>
            </div>
          </div>
          <!--== End Product Collection Item ==-->
        </div>
        <div class="col-lg-4 col-md-6">
          <!--== Start Product Collection Item ==-->
          <div class="product-collection">
            <div class="inner-content">
              <div class="product-collection-content">
                <div class="content">
                  <h1>Nam </h1>
                </div>
              </div>
              <a class="banner-link-overlay" href="shop.html"></a>
            </div>
          </div>

          <!--== End Product Collection Item ==-->
        </div>
        <div class="col-lg-4 col-md-6">
          <!--== Start Product Collection Item ==-->
          <div class="product-collection">
            <div class="inner-content">
              <div class="product-collection-content">
                <div class="content">
                  <h1>Nữ</h1>
                </div>
              </div>
              <a class="banner-link-overlay" href="shop.html"></a>
            </div>
          </div>

          <!--== End Product Collection Item ==-->
        </div>
      </div>
    </div>
  </section>
  <!--== End Product Collection Area Wrapper ==-->

  <!--== Start Product Area Wrapper ==-->
  <section class="product-area product-default-area">
    <div class="container pt--0">
      <div class="row">
        <div class="col-12">
          <div class="section-title text-center">
            <h3 class="title">Mục nổi bật</h3>
            <div class="desc">
              <p>các sản phẩm nổi bật trong mùa đông 2023</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <?php foreach ($sanpham as $k) : extract($k) ?>

          <div class="col-sm-6 col-lg-3">
            <!--== Start Product Item ==-->

            <div class="product-item">
              <div class="inner-content">
                <div class="product-thumb">
                  <a href="?act=chitietSP&id_sp=<?= $id_sp ?>&id_dm=<?= $id_dm ?>">
                    <img src="assets/uploads/<?= $image_sp ?>" width="270" height="274" alt="Image-HasTech">
                  </a>
                  <?php if ($giam_gia == 0) {
                    echo "";
                  } else {
                    echo "  <div class='product-flag'>
                    <ul>
                      <li class='discount'>$giam_gia%</li>
                    </ul>
                  </div>";
                  }


                  ?>

                  <!-- <div class="product-action">
                    <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                    <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
                    <button type="button" class="btn-product-quick-view-open">
                      <i class="fa fa-arrows"></i>
                    </button>
                    <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                  </div>
                  <a class="banner-link-overlay" href="shop.html"></a> -->
                </div>
                <div class="product-info">
                  <div class="category">
                    <ul>
                      <li><a href="shop.html">Nam</a></li>
                      <li class="sep">/</li>
                      <li><a href="shop.html">Nữ</a></li>
                    </ul>
                  </div>
                  <h4 class="title"><a href="?act=chitietSP&id_sp=<?= $id_sp ?>&id_dm=<?= $id_dm ?>"><?= $name_sp ?></a></h4>
                  <div class="prices">
                    <?php if ($giam_gia == 0) {
                      echo " <span class='price'  >" . number_format($gia, 0, '.', ',') . " VND</span>";
                    } else {
                      $giathuc = $gia - ($giam_gia * $gia) / 100;
                      echo "<span class='price-old' style='font-size: small; color: red; '>" . number_format($gia, 0, '.', ',') . " VND</span>
                      <span class='price'  >" . number_format($giathuc, 0, '.', ',') . " VND</span>";
                    }
                    ?>

                  </div>
                </div>
              </div>
            </div>
            <!--== End prPduct Item ==-->
          </div>
        <?php endforeach  ?>

  </section>
  <!--== End Product Area Wrapper ==-->

  <!--== Start Divider Area Wrapper ==-->
  <section class="bg-color-f2 position-relative z-index-1">
    <div class="container pt--0 pb--0">
      <div class="row divider-wrap divider-style1">
        <div class="col-lg-6">
          <div class="divider-content" data-title="NEW">
            <h4 class="sub-title">Tiết kiệm 50%</h4>
            <h2 class="title">Tất cả cửa hàng trực tuyến</h2>
            <p class="desc">Ưu đãi có sẵn cho tất cả giày và sản phẩm</p>
            <a class="btn-theme" href="shop.html">Mua ngay</a>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-layer-wrap">
      <div class="bg-layer-style z-index--1 parallax" data-speed="1.05" data-bg-img="assets/img/photos/bg1.webp"></div>
    </div>
  </section>
  <!--== End Divider Area Wrapper ==-->

  <!--== Start Product Area Wrapper ==-->
  <section class="product-area product-best-seller-area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title text-center">
            <h3 class="title">Bán nhiều nhất</h3>
            <div class="desc">
              <p>There are many variations of passages of Lorem Ipsum available</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="product-slider-wrap">
            <div class="swiper-container product-slider-col4-container">
              <div class="swiper-wrapper">
                <?php foreach ($sanpham as $k) : extract($k) ?>
                  <div class="swiper-slide">
                    <!--== Start Product Item ==-->
                    <div class="product-item">
                      <div class="inner-content">
                        <div class="product-thumb">
                          <a href="?act=chitietSP&id_sp=<?= $id_sp ?>&id_dm=<?= $id_dm ?>">
                            <img src="assets/uploads/<?= $image_sp ?>" width="270" height="274" alt="Image-HasTech">
                          </a>
                          <?php if ($giam_gia == 0) {
                            echo "";
                          } else {
                            echo "  <div class='product-flag'>
                    <ul>
                      <li class='discount'>$giam_gia%</li>
                    </ul>
                  </div>";
                          }


                          ?>

                          <!-- <div class="product-action">
                            <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                            <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
                            <button type="button" class="btn-product-quick-view-open">
                              <i class="fa fa-arrows"></i>
                            </button>
                            <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                          </div>
                          <a class="banner-link-overlay" href="shop.html"></a> -->
                        </div>
                        <div class="product-info">
                          <div class="category">
                            <ul>
                              <li><a href="shop.html">Nam</a></li>
                              <li class="sep">/</li>
                              <li><a href="shop.html">Nữ</a></li>
                            </ul>
                          </div>
                          <h4 class="title"><a href="?act=chitietSP&id_sp=<?= $id_sp ?>&id_dm=<?= $id_dm ?>"><?= $name_sp ?></a></h4>
                          <div class="prices">
                            <?php if ($giam_gia == 0) {
                              echo " <span class='price'  >" . number_format($gia, 0, '.', ',') . " VND</span>";
                            } else {
                              $giathuc = $gia - ($giam_gia * $gia) / 100;
                              echo "<span class='price-old' style='font-size: small; color: red; '>" . number_format($gia, 0, '.', ',') . " VND</span>
                      <span class='price'  >" . number_format($giathuc, 0, '.', ',') . " VND</span>";
                            }
                            ?>

                          </div>
                        </div>
                      </div>
                    </div>
                    <!--== End prPduct Item ==-->
                  </div>
                <?php endforeach  ?>
              </div>
            </div>
            <!--== Add Swiper Arrows ==-->
            <div class="product-swiper-btn-wrap">
              <div class="product-swiper-btn-prev">
                <i class="fa fa-arrow-left"></i>
              </div>
              <div class="product-swiper-btn-next">
                <i class="fa fa-arrow-right"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--== End Product Area Wrapper ==-->

  <!--== Start Divider Area Wrapper ==-->
  <section>
    <div class="container pt--0 pb--0">
      <div class="row flex-md-row-reverse justify-content-between divider-wrap divider-style2">
        <div class="col-lg-6">
          <div class="divider-thumb-content">
            <div class="thumb">
              <a href="shop.html">
                <img src="assets/img/shop/banner/1.webp" width="570" height="350" alt="Image-HasTech">
              </a>
            </div>
            <div class="content">
              <h2 class="title">Sports Shoes</h2>
              <p class="desc">Up To 30% Off All Shoes & Products</p>
              <a class="btn-theme" href="shop.html">Shop Now</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="divider-thumb-content">
            <div class="thumb">
              <a href="shop.html">
                <img src="assets/img/shop/banner/2.webp" width="570" height="700" alt="Image-HasTech">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--== End Divider Area Wrapper ==-->

  <!--== Start Blog Area Wrapper ==-->
  <section class="testimonial-area mt-5">
    <div class="container pt--0">
      <div class="row">
        <div class="col-12">
          <div class="section-title text-center">
            <h3 class="title">Client Feedback</h3>
            <div class="desc">
              <p>There are many variations of passages of Lorem Ipsum available</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="swiper-container testimonial-slider-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <!--== Start Testimonial Item ==-->
                <div class="testimonial-item">
                  <div class="testi-inner-content">
                    <div class="testi-thumb">
                      <img src="assets/img/testimonial/1.webp" width="90" height="90" alt="Image-HasTech">
                    </div>
                    <div class="testi-content">
                      <p>Lorem ipsum dolor sit amel adipiscing elit, sed do eiusll tempor incididunt ut laborj et dolore magna.</p>
                      <div class="testi-author">
                        <div class="testi-info">
                          <span class="name"><a href="about-us.html">Jaren Hammer</a></span>
                        </div>
                      </div>
                      <div class="testi-quote"><img src="assets/img/icons/quote1.webp" width="62" height="44" alt="Image-HasTech"></div>
                    </div>
                  </div>
                </div>
                <!--== End Testimonial Item ==-->
              </div>
              <div class="swiper-slide">
                <!--== Start Testimonial Item ==-->
                <div class="testimonial-item">
                  <div class="testi-inner-content">
                    <div class="testi-thumb">
                      <img src="assets/img/testimonial/2.webp" width="90" height="90" alt="Image-HasTech">
                    </div>
                    <div class="testi-content">
                      <p>Lorem ipsum dolor sit amel adipiscing elit, sed do eiusll tempor incididunt ut laborj et dolore magna.</p>
                      <div class="testi-author">
                        <div class="testi-info">
                          <span class="name"><a href="about-us.html">Dorian Cordova</a></span>
                        </div>
                      </div>
                      <div class="testi-quote"><img src="assets/img/icons/quote1.webp" width="62" height="44" alt="Image-HasTech"></div>
                    </div>
                  </div>
                </div>
                <!--== End Testimonial Item ==-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--== End Blog Area Wrapper ==-->
</main>