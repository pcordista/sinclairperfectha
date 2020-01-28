<?php
$file = basename($_SERVER['PHP_SELF']); // your file name 
$last_modified_time = filemtime($file);
$etag = md5_file($file);

header("Last-Modified: " . gmdate("D, d M Y H:i:s", $last_modified_time) . " GMT");
header("Etag: $etag");
?>

<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>

<div class="home-slider-content relative">
    <div class="home-slider relative">
        <div class="home-slider-item relative">
            <img src="assets/img/homeSliderOne.jpg" class="widthfull">
        </div>
        <div class="home-slider-item relative">
            <img src="assets/img/homeSliderTwo.jpg" class="widthfull">
        </div>

    </div>
</div>

<div class="home-intro hide-on-med-and-down">
    <img src="assets/img/intro.jpg" class="widthfull">
    <div class="container">
        <div class="home-intro-one">
            Perfectha é uma linha de preenchedor de ácido hialurônico para correção de rugas, contorno facial e restauração de volume, oferecendo resultados imediatos e duradouros.
            Fabricado na França e com matérias primas de alta qualidade, segue padrões internacionais a fim de garantir a segurança e eficácia.
        </div>
        <div class="home-intro-two white-text">
            Com mais de 10 anos de experiência, 2.8 milhões de seringas vendidas e uma taxa de eventos adversos muito baixa, o produto é considerado um dos mais seguros do mercado.
        </div>
    </div>
</div>

<div class="home-products">
    <div class="title">
        <span>Perfectha</span> faz você levar um papo<BR>
        profundo com a beleza
    </div>
</div>

<div class="products sectionStart">
    <div class="containerEighteen">
        <div class="row">
            <div class="col s12 m6 l3 center-align">
                <a href="#">
                    <img src="assets/img/prod1.png" alt="" class="widthfull">
                    Perfeita&trade; Deep
                </a>
            </div>
            <div class="col s12 m6 l3 center-align">
                <a href="#">
                    <img src="assets/img/prod2.png" alt="" class="widthfull">
                    Perfeita&trade; Deep
                </a>
            </div>
            <div class="col s12 m6 l3 center-align">
                <a href="#">
                    <img src="assets/img/prod3.png" alt="" class="widthfull">
                    Perfeita&trade; Deep
                </a>
            </div>
            <div class="col s12 m6 l3 center-align">
                <a href="#">
                    <img src="assets/img/prod4.png" alt="" class="widthfull">
                    Perfeita&trade; Deep
                </a>
            </div>
        </div>
    </div>
</div>

<div class="tratamento relative">
    <img src="assets/img/person.jpg" alt="">
    <div class="full_absolute">
        <div class="containerEighteen">
            <h4>ÁREAS PRINCIPAIS DE TRATAMENTO</h4>
            <div class="margin_2_top">
                <div class="flex alignCenter">
                    <img src="assets/img/trat1.jpg" class="iconLeft">
                    Perfectha&trade; Fine Line
                </div>
                <div class="flex alignCenter">
                    <img src="assets/img/trat2.jpg" class="iconLeft">
                    Perfectha&trade; Derm
                </div>
                <div class="flex alignCenter">
                    <img src="assets/img/trat3.jpg" class="iconLeft">
                    Perfectha&trade; Deep
                </div>
                <div class="flex alignCenter">
                    <img src="assets/img/trat4.jpg" class="iconLeft">
                    Perfectha&trade; Subskin
                </div>
            </div>
        </div>
    </div>
</div>

<div class="split-screen-content">
    <div class="containerEighteen">
        <div>
            <div class="center-align margin_1_vert">
                Confira o <strong>antes e depois</strong> das pacientes
            </div>
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
            <div class="margin_2_top row">
                <a href="#" class="see-more textUpper center-align">
                    veja mais resultados
                </a>
            </div>
        </div>
    </div>
</div>

<div class="search">
    <img src="assets/img/search-profs.png" alt="">
    <div class="full_absolute flex alignCenter">
        <div class="center">
            <h4>Encontre um profissional especializado</h4>
            <div class="margin_2_top">
                <a href="#" class="textUpper">
                    clique aqui
                </a>
            </div>
        </div>
    </div>
</div>





<?php include 'footer.php'; ?>
<?php include 'assets/js/JS_includes.php'; ?>
<script src="assets/devlop/live.js"></script>

<!-- INICIALIZADOR HOME -->

<script>
    document.addEventListener("load", startHome());
</script>

</body>

</html>