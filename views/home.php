<!-- Slideshow container -->



<div class="row mb">

    <div class="leftbox mr">
        <div class="row slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <img src="views/images/slide1.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="views/images/slide2.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="views/images/slide3.jpg" style="width:100%">
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->


        <div class="row">
            <?php
            $i = 0;
            foreach ($productList as $product) {
                if ($i % 3 == 2) {
                    $mr = "";
                } else {
                    $mr  = "mr";
                }
                echo '<div class="boxproduct ' . $mr . '">
                            <div class="row img">
                                <a href="index.php?act=productdetail&id=' . $product['id'] . '">
                                <img src="./uploads/' . $product['img'] . '" alt="">

                                </a>
                            </div>
                            <div class = "namePrice">
                            <a href="index.php?act=productdetail&id=' . $product['id'] . '">' . $product['name'] . '</a>
                                <p>' . $product['price'] . 'đ</p>
                            </div>
                            </div>';
                $i += 1;
            }

            ?>
        </div>

    </div>
    <div class="rightbox">
        <?php
        include 'rightbox.php'
        ?>
    </div>
</div>
<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>