<?php
$file = basename($_SERVER['PHP_SELF']); // your file name 
$last_modified_time = filemtime($file);
$etag = md5_file($file);

header("Last-Modified: " . gmdate("D, d M Y H:i:s", $last_modified_time) . " GMT");
header("Etag: $etag");
?>

<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>

<div class="page-representantes-banner">
    <img src="assets/img/banner-ba.jpg" class="widthfull">
</div>

<div class="sectionStart representantes-intro">
    <div class="containerEighteen">
        <div class="intro black-text">
            <h1>Pacientes reais. Resultados reais.</h1>
            <P>Confira o <strong>antes e depois</strong> do procedimento com Perfectha!</P>
        </div>
    </div>
    <div class="find-selects-content">
        <div class="before-after-page containerEighteen split-slider">
            <div>
                <div class="split-screen twentytwenty-container row">
                    <img src="assets/img/split-before.jpg" class="widthfull" />
                    <img src="assets/img/split-after.jpg" class="widthfull" />
                </div>
                <div class="row black white-text before-after relative">
                    <div class="col s12 m12 l4 title">
                        <div><strong class="textUpper">valerie</strong></div>
                        <div>48 anos</div>
                        <div class="margin_1_top">
                            <a href="#">
                                1 day after perfectha
                            </a>
                        </div>
                    </div>
                    <div class="col s12 m12 l4 links">
                        <div>
                            <strong>
                                Treated areas
                            </strong>
                        </div>
                        <div class="">
                            <a href="#">
                                Cheekbones
                            </a>
                            <a href="#">
                                Preauricular
                            </a>
                            <a href="#">
                                Nasolabial folds
                            </a>
                            <a href="#">
                                Smile lines
                            </a>
                            <a href="#">
                                Marionette lines
                            </a>
                            <a href="#">
                                Jawline and chin
                            </a>
                        </div>
                    </div>
                    <div class="col s12 m12 l4 links">
                        <div>
                            <strong>
                                Product
                            </strong>
                        </div>
                        <div class="links">
                            <a href="#">
                                PERFECTHA® SUBSKIN
                            </a>
                            <a href="#">
                                PERFECTHA® DEEP
                            </a>
                            <a href="#">
                                PERFECTHA® DEEP & DERM
                            </a>
                            <a href="#">
                                PERFECTHA® FINELINES
                            </a>
                            <a href="#">
                                PERFECTHA® DEEP
                            </a>
                            <a href="#">
                                PERFECTHA® DEEP
                            </a>
                        </div>
                    </div>
                    <img src="assets/img/perfectha.png" alt="">
                </div>
            </div>
            <div>
                <div class="split-screen twentytwenty-container row">
                    <img src="assets/img/split-before.jpg" class="widthfull" />
                    <img src="assets/img/split-after.jpg" class="widthfull" />
                </div>
                <div class="row black white-text before-after relative">
                    <div class="col s12 m12 l4 title">
                        <div><strong class="textUpper">valerie</strong></div>
                        <div>48 anos</div>
                        <div class="margin_1_top">
                            <a href="#">
                                1 day after perfectha
                            </a>
                        </div>
                    </div>
                    <div class="col s12 m12 l4 links">
                        <div>
                            <strong>
                                Treated areas
                            </strong>
                        </div>
                        <div class="">
                            <a href="#">
                                Cheekbones
                            </a>
                            <a href="#">
                                Preauricular
                            </a>
                            <a href="#">
                                Nasolabial folds
                            </a>
                            <a href="#">
                                Smile lines
                            </a>
                            <a href="#">
                                Marionette lines
                            </a>
                            <a href="#">
                                Jawline and chin
                            </a>
                        </div>
                    </div>
                    <div class="col s12 m12 l4 links">
                        <div>
                            <strong>
                                Product
                            </strong>
                        </div>
                        <div class="links">
                            <a href="#">
                                PERFECTHA® SUBSKIN
                            </a>
                            <a href="#">
                                PERFECTHA® DEEP
                            </a>
                            <a href="#">
                                PERFECTHA® DEEP & DERM
                            </a>
                            <a href="#">
                                PERFECTHA® FINELINES
                            </a>
                            <a href="#">
                                PERFECTHA® DEEP
                            </a>
                            <a href="#">
                                PERFECTHA® DEEP
                            </a>
                        </div>
                    </div>
                    <img src="assets/img/perfectha.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<div class="speakers-prof find-profs find-profs-noimage center-align" style="min-height:150px">
</div>





<?php include 'footer.php'; ?>
<?php include 'assets/js/JS_includes.php'; ?>
<script src="assets/devlop/live.js"></script>

<!-- INICIALIZADOR HOME -->

<script>
    document.addEventListener("load", startSplit());
</script>

</body>

</html>