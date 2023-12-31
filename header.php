<?php
include("model/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tìm việc làm</title>
    <link rel="shortcut icon" href="https://cdn.worldvectorlogo.com/logos/bootstrap-4.svg" type="image/x-icon" />
    <link rel="stylesheet" href="public/plugin/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="public/plugin/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" href="public/css/style.css" />
    <link rel="stylesheet" href="public/css_timviec/css/style-menu.css">
    <link rel="stylesheet" href="public/css_timviec/css/t_style.css">
    <link rel="stylesheet" href="public/css_timviec/css/job.css">
    <link rel="stylesheet" href="public/css_timviec/css/style_blog.css">

</head>

<body>
    <!-- menu -->
    <header class="container">
        <a href="index.html"><img class="logo" src="public/css_timviec/images/Logo.png" alt=""></a>
        <nav>
            <?php
            $menu = "SELECT * FROM menu WHERE trangthaiAH = 'Hiển thị' ORDER BY vitri ASC LIMIT 5";
            $re = mysqli_query($conn, $menu);
            $data = [];

            while ($row = mysqli_fetch_array($re, MYSQLI_ASSOC)) {
                $data[] = array(
                    'tenMenu' => $row['tenMenu'],
                    'link' => $row['link'],
                );
            }
            ?>

            <ul>
                <?php foreach ($data as $row) : ?>
                    <li>
                        <a href="<?php echo $row['link']; ?>"><?php echo $row['tenMenu']; ?> </a>
                    </li>
                <?php endforeach; ?>
                <!-- <li>
                  <a href="Blog.html">Bài viết</a>
              </li>
              <li>
                  <a href="Blog.html">Tìm việc</a>
              </li>
              <li>
                <a href="Blog.html">Tuyển dụng</a>
              </li>
              <li>
                  <a href="contact.html">Liên hệ</a>
              </li>
              -->
                <li>
                    <a href="#" class="menu-buttons"> Đăng nhập</a>
                </li>
            </ul>
        </nav>
    </header>