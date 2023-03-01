<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="REFRESH" content="1800"/>
    <title><?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="assets/uikit-3.16.3/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">

    <!--JS-->
    <script src="assets/uikit-3.16.3/js/uikit.min.js"></script>
    <script src="assets/uikit-3.16.3/js/uikit-icons.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
</head>
<body class="">
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
    <nav class="header uk-navbar-container uk-navbar-transparent">
        <div class="uk-container uk-container-expand">
            <div uk-navbar="align: center">

                <div class="uk-navbar-left">
                    <a href="" class="uk-navbar-item uk-logo"><img src="images/logo.png" alt=""></a>
                </div>

                <div class="uk-navbar-right">

                    <ul class="uk-navbar-nav">
                        <li>
                            <a href="#">
                                <img src="images/icon_home.png" alt="">
                                <span>进入官网</span>
                            </a>
                            <div class="uk-navbar-dropdown uk-navbar-dropdown-width-3 header__dropdown arrow_box">
                                <?php for ($i=1;$i<=6;$i++): ?>
                                <div class="item__20 uk-text-center">
                                    <div class="uk-grid-20 uk-grid uk-flex-middle" uk-grid>
                                        <div class="uk-width-expand">
                                            <div class="uk-grid-5 uk-child-width-expand uk-grid uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <div class="header__dropdown__box"><?= $i ?>0ms</div>
                                                </div>
                                                <div class="uk-width-auto">
                                                    <img src="images/icon.png" alt="">
                                                </div>
                                                <div>
                                                    <div class="header__dropdown__box">4466.com</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-width-auto">
                                            <div>
                                                <div class="header__dropdown__box header__dropdown__box--c1 uk-position-relative">
                                                    立即进入
                                                    <a href="" class="uk-position-cover"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endfor; ?>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/icon_app.png" alt="">
                                <span>APP下载</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/icon_gift.png" alt="">
                                <span>最新优惠</span>
                            </a>
                            <div class="uk-navbar-dropdown header__dropdown arrow_box">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <?php for ($i=1;$i<=6;$i++): ?>
                                    <li><a href="#"><img src="images/ix<?= $i ?>.png" alt=""></a></li>
                                    <?php endfor; ?>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/icon_support.png" alt="">
                                <span>在线客服</span>
                            </a>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
    </nav>