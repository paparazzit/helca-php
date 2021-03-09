<?php $page='news' ?>
<?php include "partials/header.php" ?>
        <main class="news-single-page">
            <div class="back-link">
            <a href="news-all.php">back</a>
            </div>
        
            <section class="news-single">
                <article class="news-content">
                    <?php include "partials/news/news-single-content.php"?>

                    <div class="socials">
                        <div class="icons">
                            <h4>share</h4>
                            <img src="img/socials/facebook.png" alt="">
                            <img src="img/socials/instagram.png" alt="">
                            <img src="img/socials/viber.png" alt="">
                            <img src="img/socials/tweeter.png" alt="">
                        </div>
                        <div class="news-nav">
                           <a href=""><img src="img/socials/arrow_left.png" alt=""></a>
                           <a href=""><img src="img/socials/arrow_right.png" alt=""></a>
                        </div>
                    </div>
                    
                </article>
                    

            <?php include "partials/news/news-aside.php" ?>
              
               
            </section>

        </main>


<?php include "partials/footer.php" ?>