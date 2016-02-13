<?php $config = include('config.php'); ?>
<?php include('header.php'); ?>
<section class="home">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1><a href="#"><img src="images/logo.png" alt=""></a></h1>

                <p>A long time ago in a galaxy far far away...</p>
                <a href="#"><img src="images/scroll_down.png" alt=""></a>
            </div>
        </div>
    </div>
</section>
<section class="additional-info">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing. Ad minim veniam, quis nostrud. exercitation </p>
            </div>
        </div>
    </div>
</section>
<section class="about-us" id="aboutUs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 about-us-inner">
                <h2>About us</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                <div class="btn-on-border">
                    <a href="#" class="btn-main">Read more</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="news" id="news">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>Check out last articles</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators carousel-indicators-numbers">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active">1</li>
                        <li data-target="#carousel-example-generic" data-slide-to="1">2</li>
                        <li data-target="#carousel-example-generic" data-slide-to="2">3</li>
                        <li data-target="#carousel-example-generic" data-slide-to="3">4</li>
                        <li data-target="#carousel-example-generic" data-slide-to="4">5</li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <ul class="clearfix">
                                <?php foreach ($config['carousel'] as $carouselItem): ?>
                                    <li>
                                        <a href="<?php echo $carouselItem['url']; ?>">
                                            <img src="<?php echo $carouselItem['image_path']; ?>" alt="">
                                        </a>
                                        <h3><?php echo htmlspecialchars($carouselItem['title']); ?></h3>
                                        <p><?php echo htmlspecialchars($carouselItem['text']); ?></p>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <img src="images/arrow-right.png" alt="">
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="counter" id="counter">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                <ul class="count">
                    <?php foreach ($config['counter'] as $counterItem): ?>
                        <li>
                            <img src="<?php echo $counterItem['image_path']; ?>" alt="">
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="opinions" id="opinions">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>First impression about Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                <ul class="quotes clearfix">
                    <?php foreach ($config['opinions'] as $opinionsItem): ?>
                        <li>
                            <img src="<?php echo $opinionsItem['image_path']; ?>" alt="">
                            <blockquote><?php echo htmlspecialchars($opinionsItem['title']); ?></blockquote>
                            <em><span><?php echo htmlspecialchars($opinionsItem['author']); ?></span>&nbsp;Jedi Academy</em>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>
