<main class="main-content">
  <!--== Start Page Header Area Wrapper ==-->
  <div class="page-header-area" data-bg-img="assets/img/slider/1233.jpg">
    <div class="container pt--0 pb--0">
      <div class="row">
        <div class="col-12">
          <div class="page-header-content">
            <h2 class="title" data-aos="fade-down" data-aos-duration="1000">Product Details</h2>
            <nav class="breadcrumb-area" data-aos="fade-down" data-aos-duration="1200">
              <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="breadcrumb-sep">//</li>
                <li>Chi Tiết</li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--== End Page Header Area Wrapper ==-->

  <!--== Start Product Single Area Wrapper ==-->
  <section class="product-area product-single-area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="product-single-item">
            <div class="row">
              <div class="col-xl-6">
                <!--== Start Product Thumbnail Area ==-->
                <div class="product-single-thumb">
                  <div class="swiper-container single-product-thumb single-product-thumb-slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <a class="lightbox-image" data-fancybox="gallery" href="assets/uploads/<?= $sp_img['image_sp'] ?>">
                          <img src="assets/uploads/<?= $sp_img['image_sp'] ?>" width="570" height="541" alt="Image-HasTech">
                        </a>
                      </div>
                      <?php foreach ($img as $key => $value) :  ?>
                        <div class="swiper-slide">
                          <a class="lightbox-image" data-fancybox="gallery" href="assets/uploads/<?= $value['img_url'] ?>">
                            <img src="assets/uploads/<?= $value['img_url'] ?>" width="570" height="541" alt="Image-HasTech">
                          </a>
                        </div>
                      <?php endforeach ?>
                    </div>
                  </div>
                  <div class="swiper-container single-product-nav single-product-nav-slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img src="assets/uploads/<?= $sp_img['image_sp'] ?>" width="127" height="127" alt="Image-HasTech">
                      </div>
                      <?php foreach ($img as $key => $value) :  ?>
                        <div class="swiper-slide">
                          <img src="assets/uploads/<?= $value['img_url'] ?>" width="127" height="127" alt="Image-HasTech">
                        </div>
                      <?php endforeach ?>

                    </div>
                  </div>
                </div>
                <!--== End Product Thumbnail Area ==-->
              </div>
              <div class="col-xl-6">
                <!--== Start Product Info Area ==-->
                <div class="product-single-info">
                  <h3 class="main-title"><?= $sp_img['name_sp'] ?></h3>
                  <div class="prices">
                  <?php if ( $sp_img['giam_gia'] == 0) {
                      echo " <span class='price'  >". number_format(  $sp_img['gia'],0, '.', ',') ." VND</span>";
                    } else {
                      $giathuc = $sp_img['gia'] - ($sp_img['giam_gia']*$sp_img['gia'])/100 ;  
                      echo "<span class='price-old' style='font-size: small; color: red; text-decoration: line-through;'>".number_format($sp_img['gia'], 0, '.', ',')." VND</span>
                      <span class='price'  >". number_format($giathuc, 0, '.', ',') ." VND</span>";
                    }
                    ?>
                  </div>
                  <div class="rating-box-wrap">
                    <div class="rating-box">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <div class="review-status">
                      <a href="">(<?= $sp_img['view'] ?> Lượt Xem)</a>
                    </div>
                  </div>
                  <p><?= $sp_img['mo_ngan'] ?></p>
                  <!-- HTML -->
                  <div class="product-color" id="colorSection">
                    <h6 class="title">Color</h6>
                    <ul class="color-list">
                      <?php foreach ($load_color as $key => $value) : ?>
                        <li data-bg-color="<?= $value['mau'] ?>" onclick="selectColor(this)"></li>
                      <?php endforeach ?>
                    </ul>
                  </div>

                  <div class="product-size" id="sizeSection">
                    <h6 class="title">Size</h6>
                    <ul class="size-list">
                      <?php foreach ($load_size as $key => $value) : ?>
                        <li onclick="selectSize(this, '<?= $value['id_size'] ?>')"><?= $value['name_size'] ?></li>
                      <?php endforeach ?>
                    </ul>
                  </div>

                  <div class="product-quick-action">
                    <div class="qty-wrap">
                      <div class="pro-qty">
                        <input type="text" title="Quantity" value="1">
                      </div>
                    </div>
                    <a class="btn-theme" href="javascript:void(0)" onclick="addToCart()">Add to Cart</a>
                  </div>

                  <!-- JavaScript -->
                  <script>
                    var selectedColorElement = null;
                    var selectedSizeElement = null;

                    function selectColor(element) {
                      // Remove 'active' class from previously selected color
                      if (selectedColorElement) {
                        selectedColorElement.classList.remove('active');
                      }

                      // Add 'active' class to the clicked color
                      element.classList.add('active');
                      selectedColorElement = element;
                    }

                    function selectSize(element, size) {
                      // Remove 'active' class from previously selected size
                      if (selectedSizeElement) {
                        selectedSizeElement.classList.remove('active');
                      }

                      // Add 'active' class to the clicked size
                      element.classList.add('active');
                      selectedSizeElement = element;
                    }

                    function addToCart() {
                      // Check if both color and size are selected
                      if (selectedColorElement && selectedSizeElement) {
                        // Extract color value from the selected color element
                        var selectedColor = selectedColorElement.getAttribute('data-bg-color');

                        // Extract size value from the selected size element
                        var selectedSize = selectedSizeElement.innerText;

                        // You can use AJAX to send the data to the server or store in the session
                        // For now, let's log the selected color and size to the console
                        console.log('Selected Color:', selectedColor);
                        console.log('Selected Size:', selectedSize);
                      } else {
                        alert('Please select color and size before adding to cart.');
                      }
                    }
                  </script>

                  <div class="product-wishlist-compare">
                    <a href="shop-wishlist.html"><i class="pe-7s-like"></i>Add to Wishlist</a>
                    <a href="shop-compare.html"><i class="pe-7s-shuffle"></i>Add to Compare</a>
                  </div>
                  <div class="product-info-footer">
                    <h6 class="code"><span>Code :</span>Ch-256xl</h6>
                    <div class="social-icons">
                      <span>Share</span>
                      <a href="#/"><i class="fa fa-facebook"></i></a>
                      <a href="#/"><i class="fa fa-dribbble"></i></a>
                      <a href="#/"><i class="fa fa-pinterest-p"></i></a>
                    </div>
                  </div>
                </div>
                <!--== End Product Info Area ==-->
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="product-review-tabs-content">
            <ul class="nav product-tab-nav" id="ReviewTab" role="tablist">
              <li role="presentation">
                <a class="active" id="information-tab" data-bs-toggle="pill" href="#information" role="tab" aria-controls="information" aria-selected="true">Thông Tin Sản Phẩm</a>
              </li>

              <li role="presentation">
                <a id="reviews-tab" data-bs-toggle="pill" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Bình Luận<span>(<?= $tong = count($binhluan) ?>)</span></a>
              </li>
            </ul>
            <div class="tab-content product-tab-content" id="ReviewTabContent">
              <div class="tab-pane fade show active" id="information" role="tabpanel" aria-labelledby="information-tab">
                <div class="product-information">
                  <p><?= $sp_img['mo_ta'] ?></p>
                </div>
              </div>

              <?php include("view/binhluan/binhluan.php") ?>


            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
  </section>
  <!--== End Product Single Area Wrapper ==-->

  <!--== Start Product Area Wrapper ==-->
<?php include("sanphamlienquan.php") ?>
  <!--== End Product Area Wrapper ==-->
</main>