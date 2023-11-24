
    <?php
    include "model/pdo.php";
    include "model/sanpham.php";
    include "model/danhmuc.php";
    // include "model/binhluan.php";
    // include "model/taikhoan.php";
    include "view/include/header.php";
    if (isset($_GET['act']) && ($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
                // case 'home':
                //     include "view/home.php";
                //     break;
            case 'shop':
                include "view/shop.php";
                break;
            case 'chitietSP':
                $id = $_GET['id_sp'];
                $sp_img = load_sanpham_one($id);
                $img = load_img($id);
                include "view/sanpham/sanphamct.php";
                break;
            case 'thanhtoan':
                include "view/thanhtoan.php";
                break;
            case 'CTthanhtoan':
                include "view/chitietThanhtoan.php";
                break;
            case 'blog':
                include "view/blog.php";
                break;
            case 'chitietBlog':
                include "view/chitietBlog.php";
                break;
            case 'wishlist':
                include "view/wishlist.php";
                break;
            case 'cart':
                include "view/cart.php";
                break;
            case 'login':
                if (isset($_POST['dangky']) && ($_POST['dangky'] != "")) {
                    $email = $_POST['email'];
                    $name = $_POST['name_tk'];
                    $pswd = $_POST['pass'];
                    $full_name = $_POST['full_name'];
                    $diachi = $_POST['dia_chi'];
                    // $lastInsertedId = insert_taikhoan($email, $name, $pswd, $full_name, $diachi);
                    $thongbao = "<script>alert('Đăng Ký Thành Công') </script>";
                }
                include "view/Taikhoan/login.php";
                break;
            case 'contact':
                include "view/contact.php";
                break;
            default:
                break;
        }
    } else {
        $sanpham = load_sanpham_all();
        include "view/include/home.php";
    }
    include "view/include/footer.php";
    ?>