<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
</head <body>
<div class="container mt-3">
    <h2>Lịch Sử Đơn Hàng</h2>
    <form action="/action_page.php">
        <!-- Project Card Example -->
        <select id="customSelect" name="cars" class="custom-select mb-3">
            <option selected>Custom Select Menu</option>
            <option value="?act=lichsu">Tất Cả</option>
            <option value="?act=lichsu&bill=0">Chờ xác nhận</option>
            <option value="?act=lichsu&bill=1">Đã xác nhận</option>
            <option value="?act=lichsu&bill=2">Đang giao hàng</option>
            <option value="?act=lichsu&bill=3">Đã nhận hàng</option>
            <option value="?act=lichsu&bill=4">Đã hủy</option>
        </select>

        <script>
            document.getElementById("customSelect").addEventListener("change", function() {
                var selectedOption = this.options[this.selectedIndex].value;
                window.location.href = selectedOption;
            });
        </script>
    </form>
    <br><br>
    <div class="row">
        <?php
        $totalOrder = 0; // Initialize a variable to store the total order value
        foreach ($don as $key => $value) :
            $id_don = $value['id_ctdon'];
            $sanpham1 = loadd_bill_lq_ct($id_don);

        ?>
            <div class="col-lg-6 mb-4">
                <div class="card shadow mb-4">
                    <div class="d-flex justify-content-between card-header py-3">
                        <?php $tong_tien = $value['thanh_tien'] ?>
                        <h7 class="m-0 font-weight-bold text-primary">Đơn: <?= $value['ma_don'] ?></h7>
                        <h7 class="m-0 font-weight-bold text-primary">Thời gian đặt: <span style="color: red;"><?php
                                                                                                                $dateTime = new DateTime($value['thoi_gian']);
                                                                                                                $newFormat = $dateTime->format('h:i A, d-m-Y ');
                                                                                                                echo $newFormat;
                                                                                                                ?></span>
                        </h7>
=======
<style>
    body {
        background: #eee;
    }

    .panel-order .row {
        border-bottom: 1px solid #ccc;
    }

    .panel-order .row:last-child {
        border: 0px;
    }

    .panel-order .row .col-md-1 {
        text-align: center;
        padding-top: 15px;
    }

    .panel-order .row .col-md-1 img {
        width: 50px;
        max-height: 50px;
    }

    .panel-order .row .row {
        border-bottom: 0;
    }

    .panel-order .row .col-md-11 {
        border-left: 1px solid #ccc;
    }

    .panel-order .row .row .col-md-12 {
        padding-top: 7px;
        padding-bottom: 7px;
    }

    .panel-order .row .row .col-md-12:last-child {
        font-size: 11px;
        color: #555;
        background: #efefef;
    }

    .panel-order .btn-group {
        margin: 0px;
        padding: 0px;
    }

    .panel-order .panel-body {
        padding-top: 0px;
        padding-bottom: 0px;
    }

    .panel-order .panel-deading {
        margin-bottom: 0;
    }
</style>

<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 mb-4 list-group">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Chức Năng</h6>
                </div>
                <div class="card-body list-group-item">
                    <a href="?act=lichsu">Tất Cả</a>
                </div>
                <div class="card-body list-group-item">
                    <a href="?act=lichsu&bill=0">chờ xác nhận</a>
                </div>

                <div class="card-body list-group-item">
                    <a href="?act=lichsu&bill=1"> đã xác nhận</a>
                </div>

                <div class="card-body list-group-item ">
                    <a href="?act=lichsu&bill=2"> đang giao hàng</a>
                </div>

                <div class="card-body list-group-item">
                    <a href="?act=lichsu&bill=3"> đã nhận hàng</a>
                </div>

                <div class="card-body list-group-item">
                    <a href="?act=lichsu&bill=4"> đã hủy</a>
                </div>
            </div>

            <!-- Color System -->


        </div>
        <div class="col-lg-1 mb-4"></div>
        <div class="col-lg-6 mb-4">
            <?php foreach ($don as $key => $value) :
                $id_don = $value['id_ctdon'];
                $sanpham1 =     loadd_bill_lq_ct($id_don);
                // var_dump($sanpham1);
                foreach ($sanpham1 as $ke) {
                    extract($ke);
                    $giathuc = $gia - ($giam_gia * $gia) / 100;
                }

            ?>

                <div class="card shadow mb-4">
                    <div class="d-flex justify-content-between card-header py-3">

                        <h7 class="m-0 font-weight-bold text-primary">Đơn: <?= $value['ma_don'] ?></h7>
                        <h7 class="m-0 font-weight-bold text-primary">Thời gian đặt : <span style="color: red;"><?php
                                                                                                                $dateTime = new DateTime($value['thoi_gian']);
                                                                                                                // Chuyển đổi sang định dạng khác (ví dụ: dd/mm/yyyy)
                                                                                                                $newFormat = $dateTime->format('h:i A , d-m-Y ');
                                                                                                                echo $newFormat;


                                                                                                                ?></span></h7>
>>>>>>> baeb2bd71f70542ff775347360d36150412c344f
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between ">
                            <div class="d-flex hihi">
<<<<<<< HEAD
                                <p>Trạng thái: <?php
=======
                                <p>Trạng thái : <?php
>>>>>>> baeb2bd71f70542ff775347360d36150412c344f
                                                if ($value['trang_thai'] == 0) {
                                                    echo "<span class='text-warning'>Đang chờ xác nhận</span>";
                                                } elseif ($value['trang_thai'] == 1) {
                                                    echo "<span class='text-primary'>Đã xác xác nhận</span>";
                                                } elseif ($value['trang_thai'] == 2) {
                                                    echo "<span class='text-info'>Đang giao hàng</span>";
                                                } elseif ($value['trang_thai'] == 3) {
                                                    echo "<span class='text-warning'>Đã Đã Nhận Hàng</span>";
                                                } else {
                                                    echo "<span class='text-danger'>Đã Hủy</span>";
                                                }
<<<<<<< HEAD
=======



>>>>>>> baeb2bd71f70542ff775347360d36150412c344f
                                                ?></p>
                            </div>
                            <div class="d-flex hihi">
                                <?php
                                if ($value['thanh_toan'] == 0) {
                                    echo "<span class='btn btn-success btn-sm'>Thanh Toán Online</span>";
                                } else {
                                    echo "<span class='btn btn-primary btn-sm'>Thanh Toán Khi Nhận Hàng</span>";
                                }
<<<<<<< HEAD
=======



>>>>>>> baeb2bd71f70542ff775347360d36150412c344f
                                ?>
                            </div>
                        </div>
                        <br>
                        <?php foreach ($sanpham1 as $key) :
<<<<<<< HEAD
                            extract($key);
                        ?>
                            <div class="d-flex mb-2">
                                <div class="flex-shrink-0">
                                    <img src="assets/uploads/<?= $image_sp ?>" alt="" width="35" class="img-fluid">
                                </div>
                                <div class="flex-lg-grow-1 ms-3">
                                    <h6 class="small mb-0"><a href="?act=chitietSP&id_sp=<?= $id_sp ?>&id_dm=<?= $id_dm ?>" class="text-reset"><?= $name_sp ?></a>
                                        <span>(x<?= $so_luong ?>)</span>
                                    </h6>
                                    <span class="small">Màu: <?php
                                                                foreach ($mau1 as $key => $value) {
                                                                    if ($value['id_color'] == $mau_sac) {
                                                                        echo $value['name_color'];
                                                                    }
                                                                }
                                                                ?></span>
                                    <span class="small" style="margin-left: 10px;">Size: <?php
                                                                                            foreach ($size1 as $key => $value) {
                                                                                                if ($value['id_size'] == $kich_co) {
                                                                                                    echo $value['name_size'];
                                                                                                }
                                                                                            }
                                                                                            ?></span>
                                </div>
                                <div class="text-end">
                                    <span class="price" style="font-size: small; color: red; text-decoration: line-through; margin-right: 10px; "><?= number_format($gia) ?></span>
                                    <?php
                                    $gia_thuc = $gia * $giam_gia / 100;
                                    ?>
                                    <span class="price"><?= number_format($gia - $gia_thuc) ?> VNĐ</span>
                                </div>
                            </div>
                        <?php endforeach ?>
                        <hr>
                        <style>
                            hr {
                                border: 1px solid #000;
                                /* Màu sắc và kiểu đường viền */
                                background-color: #000;
                                /* Màu sắc của đường ngang */
                            }
                        </style>
                        <tr class="fw-bold">
                            <td colspan="2">TỔNG CỘNG:</td>
                            <td class="text-end"><?= number_format($tong_tien) ?> VNĐ</td>
                        </tr>

                        <a class="btn btn-info btn-sm" style="margin-left: 14pc;" href="?act=chitietdon&id_don=<?= $id_ctd ?>">Chi Tiết</a>
                    </div>

                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

</body>

</html>
=======

                            extract($key); ?>
                            <tr>
                                <td>
                                    <div class="d-flex mb-2">
                                        <div class="flex-shrink-0">
                                            <!-- Giả định về ảnh sản phẩm -->
                                            <img src="assets/uploads/<?= $image_sp ?>" alt="" width="35" class="img-fluid">
                                        </div>
                                        <div class="flex-lg-grow-1 ms-3">
                                            <h6 class="small mb-0"><a href="#" class="text-reset"><?= $name_sp ?></a>
                                <td>(x<?= $so_luong ?>)</td>
                                </h6>

                                <?php


                                echo '<span class="small">Màu: ';

                                foreach ($mau1 as $key => $value) {
                                    if ($value['id_color'] == $mau_sac) {
                                        echo $value['name_color'];
                                    }
                                }

                                echo '</span>';
                                ?>


                                <?php

                                echo '<span class="small" style="margin-left: 10px;">Size: ';

                                foreach ($size1 as $key => $value) {
                                    if ($value['id_size'] == $kich_co) {
                                        echo $value['name_size'];
                                    }
                                }
                                echo '</span>';
                                ?>

                    </div>

                    <td class="text-end">
                        <span class="price" style="font-size: small; color: red; text-decoration: line-through; margin-right: 10px; "><?= number_format($gia) ?></span>
                        <span class="price"><?= number_format($giathuc) ?> VNĐ</span>
                    </td>
                </div>
                </td>


                </tr>
            <?php endforeach ?>


        </div>
    </div>

<?php endforeach ?>
</div>
</div>

</div>
>>>>>>> baeb2bd71f70542ff775347360d36150412c344f
