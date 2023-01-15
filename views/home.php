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
                if ($i == 2 || $i == 5 || $i == 8) {
                    $mr = "";
                } else {
                    $mr  = "mr";
                }
                echo '<div class="boxproduct ' . $mr . '">
                            <div class="row img">
                                <img src="./uploads/' . $product['img'] . '" alt="">
                            </div>
                            <p>' . $product['price'] . '$</p>
                            <a href="#">' . $product['name'] . '</a>
                            </div>';
                $i += 1;
            }
            ?>
        </div>

    </div>
    <div class="rightbox">


        <div class="row mb">
            <div class="boxtitle">
                Account
            </div>
            <div class="boxcontent login-form">
                <form action="#" method="post">
                    <div class="row mb10">
                        Username <br>
                        <input type="text" name="user" id=""> <br>
                    </div>
                    <div class="row mb10">
                        Password <br>
                        <input type="password" name="pass" id=""> <br />
                    </div>
                    <div class="row mb10">
                        <input type="checkbox" name="" id=""> Remember me? <br>
                    </div>
                    <div class="row mb10">
                        <input type="submit" value="Log in">
                    </div>
                    <li><a href="">Forget password?</a></li>
                    <li><a href="">Register</a></li>
                </form>
            </div>
        </div>


        <div class="row mb">
            <div class="boxtitle">
                Category
            </div>
            <div class="boxcontentmid menu-vertical">
                <ul>
                    <li><a href="">Watch</a></li>
                    <li><a href="">Laptop</a></li>
                    <li><a href="">Phone</a></li>
                    <li><a href="">Backpack</a></li>
                    <li><a href="">Watch</a></li>
                    <li><a href="">Laptop</a></li>
                    <li><a href="">Phone</a></li>
                    <li><a href="">Backpack</a></li>
                </ul>
            </div>
            <div class="boxfooter searchbox">
                <form action="#" method="post">
                    <input type="text" name="" id="">
                </form>
            </div>
        </div>


        <div class="row">
            <div class="boxtitle">
                Top 10 Products
            </div>
            <div class="row boxcontent">
                <div class="row mb10 top10">
                    <img src="views/images/grayjordan.jpg" alt="">
                    <a href="">Gray Jordan</a>
                </div>
                <div class="row mb10 top10"> <img src="views/images/grayjordan.jpg" alt="">
                    <a href="">Gray Jordan 1</a>
                </div>
                <div class="row mb10 top10"> <img src="views/images/grayjordan.jpg" alt="">
                    <a href="">Gray Jordan 2</a>
                </div>
                <div class="row mb10 top10"> <img src="views/images/grayjordan.jpg" alt="">
                    <a href="">Gray Jordan 3</a>
                </div>
                <div class="row mb10 top10"> <img src="views/images/grayjordan.jpg" alt="">
                    <a href="">Gray Jordan 4</a>
                </div>
                <div class="row mb10 top10"> <img src="views/images/grayjordan.jpg" alt="">
                    <a href="">Gray Jordan 5</a>
                </div>
                <div class="row mb10 top10"> <img src="views/images/grayjordan.jpg" alt="">
                    <a href="">Gray Jordan 6</a>
                </div>
                <div class="row mb10 top10"> <img src="views/images/grayjordan.jpg" alt="">
                    <a href="">Gray Jordan 7</a>
                </div>
                <div class="row mb10 top10"> <img src="views/images/grayjordan.jpg" alt="">
                    <a href="">Gray Jordan 8</a>
                </div>
                <div class="row mb10 top10"> <img src="views/images/grayjordan.jpg" alt="">
                    <a href="">Gray Jordan 9</a>
                </div>
                <div class="row mb10 top10"> <img src="views/images/grayjordan.jpg" alt="">
                    <a href="">Gray Jordan 9</a>
                </div>
            </div>
        </div>
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