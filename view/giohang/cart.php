<?php
if (empty($dataDb)) {
  echo '<h1>Chưa có sản phẩm nào trong giỏ hàng</h1>';
} else {
?>
  <style>
    /* Style for thead */
    thead {
      display: table-header-group;
      background-color: #f5f5f5;
      /* Background color for thead */
    }

    /* Style for th */
    th {
      text-align: center;
      /* Center align text */
      padding: 15px 10px;
      /* Add padding for better spacing */
      border-bottom: 2px solid #ddd;
      /* Add a bottom border */
    }

    /* Increase width for .product-remove and .product-stt */
    .product-remove,
    .product-stt {
      width: 5%;
      /* Adjust the width based on your preference */
    }

    /* Maintain width for other columns */
    .product-image,
    .product-name,
    .product-price,
    .product-quantity,
    .product-subtotal {
      width: 12%;
      /* Maintain width for other columns */
    }

    /* Responsive styling for smaller screens */
    @media (max-width: 768px) {

      th,
      .product-remove,
      .product-stt,
      .product-image,
      .product-name,
      .product-price,
      .product-quantity,
      .product-subtotal {
        width: auto;
        /* Allow columns to stack on smaller screens */
      }
    }
  </style>

  <main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <!-- ... (unchanged) ... -->

    <!--== Start Blog Area Wrapper ==-->
    <section class="shopping-cart-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="shopping-cart-form table-responsive">
              <form action="#" method="post">
                <table class="table text-center">
                  <thead>
                    <tr>
                      <th class="product-stt">STT</th>
                      <th class="product-image">Sản Phẩm</th>
                      <th class="product-name">Tên Sản Phẩm</th>
                      <th class="product-price">Màu sắc</th>
                      <th class="product-price">Kích Cơ</th>
                      <th class="product-price">Giá Tiền</th>
                      <th class="product-quantity">Số Lượng</th>
                      <th class="product-subtotal">Tổng</th>
                      <th class="product-remove">Chức năng</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sum_total = 0;
                    foreach ($dataDb as $key => $sanpham) :
                      // kiểm tra số lượng trong giỏ hàng
                      $quantityInCart = 0;

                      foreach ($_SESSION['cart'] as $item) {
                        if ($item['id'] == $sanpham['id_sp']) {
                          $quantityInCart = $item['quantity'];
                          break;
                        }
                      }

                      // Debugging: Output the values to check
                      //  var_dump($quantityInCart);
                      //  die();
                    ?>
                      <tr class="cart-product-item">
                        <td class="product-stt"><?= $key + 1 ?></td>
                        <td class="product-image">
                          <a href="single-product.html">
                            <img src="assets/uploads/<?= $sanpham['image_sp'] ?>" width="90" height="110" alt="Image-HasTech">
                          </a>
                        </td>
                        <td class="product-name">
                          <h4 class="title"><a href="single-product.html"><?= $sanpham['name_sp'] ?></a></h4>
                        </td>
                        <td class="product-price">
                          <h4 class="price"><a href="single-product.html"><?php foreach ($mau1 as $key => $value) {
                                                                            if ($value['id_color'] == $sanpham['id_color']) {
                                                                              echo $value['name_color'];
                                                                            }
                                                                          }  ?></a></h4>
                        </td>
                        <td class="product-price">
                          <h4 class="price"><a href="single-product.html"><?php foreach ($size1 as $key => $value) {
                                                                            if ($value['id_size'] == $sanpham['id_size']) {
                                                                              echo $value['name_size'];
                                                                            }
                                                                          }  ?></a></h4>
                        </td>
                        <td class="product-price">
                          <?php $giathuc = $sanpham['gia'] - ($sanpham['giam_gia'] * $sanpham['gia']) / 100; ?>
                          <span class="price"><?= number_format((int)$giathuc, 0, '.', ',') ?> <u>vnđ</u> </span>
                        </td>
                        <td class="product-quantity">
                          <div class="pro-qty">
                            <input type="text" class="quantity" title="Quantity" value="<?= $quantityInCart ?>" min="1">
                          </div>
                        </td>

                        <td class="product-subtotal">
                          <span class="price"><?= number_format((int)$giathuc * (int)$quantityInCart, 0, '.', ',') ?> <u>vnđ</u> </span>
                        </td>
                        <td class="product-remove">
                          <a href="#/"><i class="fa fa-trash-o"></i></a>
                        </td>
                      </tr>

                      <?php
                      // Tính tổng giá đơn hàng
                      //   $sum_total += ((int)$product['gia'] * (int)$quantityInCart);

                      // Lưu tổng giá trị vào sesion
                      $_SESSION['resultTotal'] = $sum_total;
                      ?>
                    <?php endforeach ?>
                    <tr class="actions">

                      <td class="border-0" colspan="6">

                        <a href="?act=xoaallgio" onclick="return  confirm('bạn chắc chắn muốn xóa')" class="btn-theme btn-flat">Dọn dẹp giỏ hàng</a>
                        <a href="index.php" class="btn-theme btn-flat">Tiếp tục mua sắm</a>
                        <a href="?act=CTthanhtoan" class="btn-theme btn-flat">Mua Ngay</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </form>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!--== End Blog Area Wrapper ==-->
  </main>
<?php } ?>