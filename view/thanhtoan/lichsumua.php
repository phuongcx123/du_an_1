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
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between ">
                            <div class="d-flex hihi">
                                <p>Trạng thái : <?php
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



                                                ?></p>
                            </div>
                            <div class="d-flex hihi">
                                <?php
                                if ($value['thanh_toan'] == 0) {
                                    echo "<span class='btn btn-success btn-sm'>Thanh Toán Online</span>";
                                } else {
                                    echo "<span class='btn btn-primary btn-sm'>Thanh Toán Khi Nhận Hàng</span>";
                                }



                                ?>
                            </div>
                        </div>
                        <br>
                        <?php foreach ($sanpham1 as $key) :

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