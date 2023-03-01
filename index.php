<?php $data["title"] = "Home"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-flex uk-flex-bottom" uk-height-viewport="offset-top: true">
    <div class="uk-width">
        <div class="uk-container uk-container-expand uk-position-relative">
            <div class="uk-grid uk-grid-collapse uk-flex-bottom" uk-grid>
                <div class="uk-width-2-5@m">
                    <div class="uk-height-min-large">
                        <img src="images/img1.png" alt="">
                    </div>
                    <div class="uk-height-min-medium home__box uk-light uk-flex uk-flex-middle uk-position-relative">
                        <img class="uk-position-top-right home__box__img" src="images/dt.png" alt="">
                        <div class="uk-width">
                            <h4 class="uk-h4 home__box__title">礼遇尊崇，体验由此超凡</h4>
                            <p class="home__box__desc">
                                作为澳门三家获得博彩批给合同的营运商之一，新葡京一直以成功打造崭新、触目及屡获殊荣的项目、产品及服务见称，加上「傲视世界 情繫亚洲」的服务理念，令集团表现持续傲视同侪，引领澳门市场。
                            </p>
                        </div>
                        <div class="home__box__c1">

                        </div>
                    </div>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: fade; ratio: 1080:860; autoplay: true; pause-on-hover: false;">

                        <ul class="uk-slideshow-items">
                            <li>
                                <img src="images/slider/img1.png" alt="" uk-cover>
                            </li>
                            <li>
                                <img src="images/slider/img2.png" alt="" uk-cover>
                            </li>
                            <li>
                                <img src="images/slider/img3.png" alt="" uk-cover>
                            </li>
                        </ul>

                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

                    </div>
                </div>
            </div>
            <span class="home__copyRight">COPYRIGHT © 澳门新葡京娱乐城 版权所有 RESERVED</span>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>