    <?php 
        // Xử lý tham số pages
        if (isset($_GET['mge'])) {
            $manage = $_GET['mge'];
        } else {
            $manage = "";
        }

        if ($manage == "" || $manage == "themsanpham") {
            include 'themsanpham.php';
         
        } else if ($manage == "themsp" && isset($_GET['subpage'])) {
            $subpage = $_GET['subpage']; 
            include 'themsanpham_xuly.php'; // Hoặc logic tương ứng để hiển thị trang collections
        } else if ($manage == "suasp" && isset($_GET['slug'])) {
            $subpage = $_GET['slug']; 
            include 'suasp.php';
        } else if ($manage == "xoasp" && isset($_GET['slug'])) {
            $subpage = $_GET['slug']; 
            include 'xoasp.php';
        } else if ($manage == "phanhoi") {
            include 'care.php';
        } else {
            include './pages/404.php';
        }
    ?>