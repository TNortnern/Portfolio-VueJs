<?php
include "./database/database.php";
if(isset($_POST['sendmessage'])){
    receieveMessage();
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>Portfolio</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Neucha&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

</head>

<body>

    <nav id="content" style="z-index:99;">
        <div class="center-align">
            <i id="responsiveBars" class="fa fa-bars"></i>
        </div>
        <div class="nav-wrapper">

            <ul id="nav-mobile">

                <li><a href="#about">About</a></li>
                <li><a href="#technologies">Technologies</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>
    <div class="parallax-container firstImg">
        <div class="parallax"><img src="images/pg2.jpeg">

        </div>

        <div class="vertAlign">
            <span data-aos="fade-right" class="centerAlign">
                <img class="circle responsive-img" style="width:350px;height:350px; border:3px white dotted" src="images/pg8.jpg" alt=""><br>
                <span>Developer</span><br>
                <div style="display:flex; justify-content: center">
                    <div id="githubIcon">
                        <a class="unlink" target="_blank" href="https://github.com/tnortnern"><i class="fab fa-github-square" id="githubIcon"></i></a>
                        <span class="header-icon-labels" id="githubLabel">Github</span>
                    </div>
                    <div id="resumeIcon">
                        <a class="unlink" target="_blank" href="https://github.com/tnortnern"><i class="fas fa-file"></i></a>
                        <span class="header-icon-labels" id="resumeLabel">Resume</span>
                    </div>
                </div>
        </div>
    </div>
    </div>
    <section data-aos="fade-down" data-aos-duration="450" id="about" class="section scrollspy" style="border: 5px black double; padding-bottom:3rem">

        </div>
        <div class="container">
            <div data-aos="zoom-in" data-aos-duration="620">
                <h2 class="header centerAlign headerBorder">About Me</h2>
                <p class="aboutText">
                    Hello, my name is Trayvon Northern. I'm currently a student at OTC pursuing my degree in CS and
                    graduating in Fall 2019. Originally, I was going to be an engineer but got introduced to CS by a
                    friend and haven't considered going back. Now I have a MTA certificate in HTML/CSS and Javascript.
                    My favorite aspect of CS is defintely web development, I
                    don't discriminate, I enjoy learning and coding in back-end or front-end. That's defined by my
                    favorite quote:<br>
                    <b class="d-flex justify-content-center center-align">
                        It's better to have and not need than to need and not have<br>
                        ~ Franz Kafka
                    </b>
                </p>
            </div>

            <div data-aos="fade-up" data-aos-duration="620" class="d-flex justify-content-center center-align flex-wrap">
                <h1 class="w-100 headerBorder">Hobbies</h1>
                <div class="col-lg-4">
                    <img class="circle hobbiesImg" src="images/programlogo.png" alt="">
                    <h3>Programming</h3>

                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="hobbiesImg circle" src="images/solvelogo.png" alt="">
                    <h3>Solving Problems</h3>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="hobbiesImg circle" src="images/bballicon.jpg" alt="">
                    <h3>Basketball</h3>

                </div><!-- /.col-lg-4 -->

            </div>
            <!--flex container-->

    </section>
    <div class="parallax-container">
        <div class="parallax"><img src="images/pg4.jpg"></div>
    </div>
    <section id="technologies" class="section scrollspy" style="border: 5px white double; color:white;background-color:#147775">
        <h1 class="centerAlign headerBorder whiteBorder">Technologies</h1>
        <div id="cards">
            <div class="d-flex justify-content-center center-align wrapFlex">
                <card language="HTML/CSS" experience="1+ year" image="images/htmlcss.png"></card>
                <card language="Java" experience="1+ year" image="images/java_big_logo.jpg"></card>
                <card language="Javascript" experience="6+ months" image="images/js.png"></card>
                <card language="PHP" experience="6+ months" image="images/php.png"></card>
                <card language="VueJS" experience="3+ months" image="images/vue.png"></card>
                <card language="ReactJS" experience="1+ month" image="images/react.png"></card>
            </div>
        </div>
    </section>

    <div class="parallax-container">
        <div class="parallax"><img src="images/pg10.jpg">
        </div>
    </div>

    <section data-aos="fade-down" data-aos-duration="600" id="projects" class="section scrollspy" style="border: 5px black double; padding-bottom:3rem">
        <h2 class="header centerAlign headerBorder">Projects</h2>
        <div class="container">
            <ul id="projectTabs" class="tabs tabs-fixed-width tab-demo z-depth-1">

                <tab name="All" isActive="tabLink" tab="#any"></tab>
                <tab name="Javascript" isActive="tabLink" tab="#javascript"></tab>
                <tab name="HTML/CSS" isActive="No" tab="#htmlcss"></tab>
                <tab name="PHP" isActive="tabLink" tab="#php"></tab>
                <tab name="Java" isActive="tabLink" tab="#java"></tab>
                <tab name="VueJS" isActive="tabLink" tab="#vuejs"></tab>
                <tab name="ReactJS" isActive="tabLink" tab="#reactjs"></tab>
            </ul>

            <div id="any">
                <div class="d-flex justify-content-center center-align wrapFlex">
                    <projectcard title="Northern's Factory" image="images/northernfactory.png" link="http://trayvonnorthern.com/northernsfactory" language="PHP" codelink="https://github.com/TNortnern/PHPShoppingSite" description="A clothing website that has a cart for multiple orders. It also has a login system that grants a discount.">
                    </projectcard>

                    <projectcard title="Portfolio" image="images/portfolio.png" link="http://trayvonnorthern.com/" language="VueJS" codelink="https://github.com/TNortnern/Portfolio-VueJS" description="A portfolio about me.">
                    </projectcard>

                    <projectcard title="AGSelect" image="images/agselect.png" link="http://trayvonnorthern.com/Agselect" language="HTML/CSS" codelink="https://github.com/TNortnern/AgSelect-website" description="A real world project for the AGSelect food production company. The primary goal is to contact Hamilton.">
                    </projectcard>

                    <projectcard title="MoviesOnDemand" image="images/moviedb.png" link="http://trayvonnorthern.com/moviedb" language="VueJS" codelink="https://github.com/tnortnern/VUEing-an-API" description="Pulling from the moviesdb API to create a shop for the latest movies. Uses cart to store all orders.">
                    </projectcard>

                    <projectcard title="Matching Game" image="images/matchgame.png" link="https://github.com/TNortnern/Various-Java-projects/tree/master/MatchGame/src/matchgame" language="Java" codelink="https://github.com/TNortnern/Various-Java-projects/tree/master/MatchGame/src/matchgame" description="Memory game, match the squares to win.">
                    </projectcard>

                    <projectcard title="Cheech's Pizza" image="images/cheechs.png" language="Javascript" link="http://trayvonnorthern.com/Cheech-s-Pizza-3" codelink="https://github.com/TNortnern/Cheech-s-Pizza" description="Pizza resturant with a AJAX form that updates based on user selection.">
                    </projectcard>

                    <projectcard title="Rocket Launch" image="images/rocketlaunch.png" link="http://trayvonnorthern.com/rockets" language="Javascript" codelink="https://github.com/tnortnern/Rockets" description="Use of an API to track the next 5 rocket launches.">
                    </projectcard>

                    <projectcard title="YouTubeSearch" image="images/youtube.png" link="http://searchvideos.trayvonnorthern.com/" language="ReactJS" codelink="https://github.com/TNortnern/YoutubeSearch" description="Fetching the YouTube API to allow the term in the searchbar to get back the most recent/popular YouTube videos.">
                    </projectcard>

                    <projectcard title="Vacation" image="images/vacation.png" language="HTML/CSS" link="http://trayvonnorthern.com/Vacation" codelink="https://github.com/TNortnern/Vacation" description="Wanna take a trip to Crater Lake National Park? Start here.">
                    </projectcard>


                    <projectcard title="Stock Change" image="images/stockchange.png" language="PHP" link="http://trayvonnorthern.com/percentChange" codelink="https://github.com/TNortnern/phpErrorHandlingFForm" description="Primarily displays server sided form vaildation but will calculate a stock change based on input.">
                    </projectcard>

                    <projectcard title="HighQualityImages" image="images/unsplash.png" link="http://trayvonnorthern.com/HighQualityPictures/" language="ReactJS" codelink="https://github.com/TNortnern/Unsplash-API-React" description="Use of the Unsplash API that allows a user to enter a search term and get high quality images in return.">
                    </projectcard>

                    <projectcard title="Subway Menu" image="images/subway.gif" language="Java" link="https://github.com/TNortnern/Various-Java-projects/tree/master/SubwayMenu/src" codelink="https://github.com/TNortnern/Various-Java-projects/tree/master/SubwayMenu/src" description="A ordering system that allows a user to customize a sandwich.">
                    </projectcard>

                    <projectcard title="Great Race" image="images/greatrace.png" language="Javascript" link="http://trayvonnorthern.com/GreatRace" codelink="https://github.com/TNortnern/Great-Race-JS" description="The great race, 3 racers go on a high speed race.">
                    </projectcard>

                    <projectcard title="BlackJack" image="images/BlackJack.jpg" language="Java" link="https://github.com/TNortnern/Various-Java-projects/tree/master/BlackJack/src/sample" codelink="https://github.com/TNortnern/Various-Java-projects/tree/master/BlackJack/src/sample" description="BlackJack as you know it, you vs the dealer. If anyone gets 21, they win, if they go over 21, they lose, and if neither go over 21 then the highest score wins the round.">
                    </projectcard>

                    <projectcard title="Login System" image="images/login.png" language="PHP" link="http://trayvonnorthern.com/Login" codelink="https://github.com/TNortnern/Login-System-PHP" description="Login system through php with full form validation. Succesful login allows access to the Cheech's Pizza website with your details.">
                    </projectcard>



                </div>
                <!--end flex-->
            </div>
            <div id="javascript">
                <div class="d-flex justify-content-center center-align wrapFlex">

                    <projectcard title="Great Race" image="images/greatrace.png" language="Javascript" link="http://trayvonnorthern.com/GreatRace" codelink="https://github.com/TNortnern/Great-Race-JS" description="The great race, 3 racers go on a high speed race.">
                    </projectcard>

                    <projectcard title="Cheech's Pizza" image="images/cheechs.png" language="Javascript" link="http://trayvonnorthern.com/Cheech-s-Pizza-3" codelink="https://github.com/TNortnern/Cheech-s-Pizza" description="Pizza resturant with a AJAX form that updates based on user selection.">
                    </projectcard>

                    <projectcard title="Rocket Launch" image="images/rocketlaunch.png" link="http://trayvonnorthern.com/rockets" language="Javascript" codelink="https://github.com/tnortnern/Rockets" description="Use of an API to track the next 5 rocket launches.">
                    </projectcard>

                </div>
            </div>
            <div id="htmlcss">
                <div class="d-flex justify-content-center center-align wrapFlex">

                    <projectcard title="AGSelect" image="images/agselect.png" link="http://trayvonnorthern.com/Agselect" language="HTML/CSS" codelink="https://github.com/TNortnern/AgSelect-website" description="A real world project for the AGSelect food production company. The primary goal is to contact Hamilton.">
                    </projectcard>

                    <projectcard title="Vacation" image="images/vacation.png" language="HTML/CSS" link="http://trayvonnorthern.com/Vacation" codelink="https://github.com/TNortnern/Vacation" description="Wanna take a trip to Crater Lake National Park? Start here.">
                    </projectcard>

                </div>
            </div>
            <div id="php">
                <div class="d-flex justify-content-center center-align wrapFlex">

                    <projectcard title="Northern's Factory" image="images/northernfactory.png" link="http://trayvonnorthern.com/northernsfactory" language="PHP" codelink="https://github.com/TNortnern/PHPShoppingSite" description="A clothing website that has a cart for multiple orders. It also has a login system that grants a discount.">
                    </projectcard>

                    <projectcard title="Stock Change" image="images/stockchange.png" language="PHP" link="http://trayvonnorthern.com/percentChange" codelink="https://github.com/TNortnern/phpErrorHandlingFForm" description="Primarily displays server sided form vaildation but will calculate a stock change based on input.">
                    </projectcard>

                    <projectcard title="Login System" image="images/login.png" language="PHP" link="http://trayvonnorthern.com/Login" codelink="https://github.com/TNortnern/Login-System-PHP" description="Login system through php with full form validation. Succesful login allows access to the Cheech's Pizza website with your details.">
                    </projectcard>


                </div>
            </div>
            <div id="java">
                <div class="d-flex justify-content-center center-align wrapFlex">

                    <projectcard title="BlackJack" image="images/BlackJack.jpg" language="Java" link="https://github.com/TNortnern/Various-Java-projects/tree/master/BlackJack/src/sample" codelink="https://github.com/TNortnern/Various-Java-projects/tree/master/BlackJack/src/sample" description="BlackJack as you know it, you vs the dealer. If anyone gets 21, they win, if they go over 21, they lose, and if neither go over 21 then the highest score wins the round.">
                    </projectcard>

                    <projectcard title="Matching Game" image="images/matchgame.png" link="https://github.com/TNortnern/Various-Java-projects/tree/master/MatchGame/src/matchgame" language="Java" codelink="https://github.com/TNortnern/Various-Java-projects/tree/master/MatchGame/src/matchgame" description="Memory game, match the squares to win.">
                    </projectcard>

                    <projectcard title="Subway Menu" image="images/subway.gif" language="Java" link="https://github.com/TNortnern/Various-Java-projects/tree/master/SubwayMenu/src" codelink="https://github.com/TNortnern/Various-Java-projects/tree/master/SubwayMenu/src" description="A ordering system that allows a user to customize a sandwich.">
                    </projectcard>


                </div>
            </div>
            <div id="vuejs">
                <div class="d-flex justify-content-center center-align wrapFlex">
                    <projectcard title="Portfolio" image="images/portfolio.png" link="http://trayvonnorthern.com/" language="VueJS" codelink="https://github.com/TNortnern/Portfolio-VueJS" description="A portfolio about me.">
                    </projectcard>

                    <projectcard title="MoviesOnDemand" image="images/moviedb.png" link="http://trayvonnorthern.com/moviedb" language="VueJS" codelink="https://github.com/tnortnern/VUEing-an-API" description="Pulling from the moviesdb API to create a shop for the latest movies. Uses cart to store all orders.">
                    </projectcard>
                </div>
            </div>
            <div id="reactjs">
                <div class="d-flex justify-content-center center-align wrapFlex">
                    <projectcard title="YouTubeSearch" image="images/youtube.png" link="http://searchvideos.trayvonnorthern.com/" language="ReactJS" codelink="https://github.com/TNortnern/YoutubeSearch" description="Fetching the YouTube API to allow the term in the searchbar to get back the most recent/popular YouTube videos.">
                    </projectcard>
                    <projectcard title="HighQualityImages" image="images/unsplash.png" link="http://trayvonnorthern.com/HighQualityPictures/" language="ReactJS" codelink="https://github.com/TNortnern/Unsplash-API-React" description="Use of the Unsplash API that allows a user to enter a search term and get high quality images in return.">
                    </projectcard>
                </div>
            </div>
        </div>

    </section>

    <div class="parallax-container">
        <div class="parallax"><img src="images/pg3.jpg">
        </div>
    </div>


    <section id="contact" class="section scrollspy">

        <!--flex container-->
        <div class="container" style="border:4px dotted gray">
            <h3 class="center-align">Contact Me</h3>
            <div class="row">
                <form class="col s12" method="POST">
                    <div class="input-field col s12">
                        <input required placeholder="Your Name" id="name" type="text" name="name" class="validate">
                        <label for="name">Name</label>
                        <span class="helper-text" data-error="Enter a valid name." data-success="&checkmark;"></span>
                    </div>
                    <div class="input-field col s12">
                        <input required placeholder="Your E-mail" id="email" type="text" name="email" class="validate" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                        <label for="email">E-mail</label>
                        <span class="helper-text" data-error="Enter a valid e-mail." data-success="&checkmark;"></span>
                    </div>
                    <div class="input-field col s12">
                        <input required placeholder="Your Number(optional)" id="number" type="tel" name="number" maxlength="10">
                        <label for="number">Phone Number</label>
                    </div>
                    <div class="input-field col s12">
                        <textarea placeholder="Your Message" name="message" required id="message" class="materialize-textarea validate"></textarea>
                        <label for="message">Message</label>
                        <span class="helper-text" data-error="Leave me a message please." data-success="&checkmark;"></span>
                    </div>
                    <div class="center-align">
                        <button type="submit" name="sendmessage" class="btn">Send Message</button>
                    </div>

                </form>
            </div>
        </div>
    </section>

    <footer>
        &copy;Trayvon Northern 2019
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="js/index.js"></script>
    <script src="js/card.js"></script>
    <script src="js/projects.js"></script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


</body>

</html>