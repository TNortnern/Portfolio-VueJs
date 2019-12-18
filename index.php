<?php
// include "./portfolio/database/database.php";
if (isset($_POST['sendmessage'])) {
    receieveMessage();
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>Portfolio</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="portfolio/css/styles.css">
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
            <div data-aos="fade-in" data-aos-duration="620">
                <h2 class="header centerAlign headerBorder">About Me</h2>
                <p class="aboutText">
                    Hello, my name is Trayvon Northern. I've recently graduated with my Computer Science degree from OTC. I have 2 MTA certificate in HTML/CSS and Javascript.
                    My favorite aspect of CS is defintely web development, I would consider myself fullstack since I've done plenty of projects that involve both.
            </div>
            <div>
            Certificates
              <ul>
                <li>MTA</li>
              </ul>
            </div>
            <div>
            Awards
              <ul>
                <li>Isabel's House</li>
              </ul>
            </div>

            <div data-aos="fade-up" data-aos-duration="620" class="d-flex justify-content-center center-align flex-wrap">
                <h1 class="w-100 headerBorder">Best Strengths</h1>
                <div class="col-lg-4">
                    <img class="circle hobbiesImg" src="images/programlogo.png" alt="">
                    <h3>Eager Learner</h3>

                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="hobbiesImg circle" src="images/solvelogo.png" alt="">
                    <h3>Solving Problems</h3>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="hobbiesImg circle" src="https://cdn.pixabay.com/photo/2018/03/21/07/16/learning-3245793_960_720.jpg" alt="">
                    <h3>Quick Learner</h3>

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
                <card language="HTML/CSS" image="images/htmlcss.png"></card>
                <card language="ReactJS" image="images/react.png"></card>
                <card language="React Native" image="images/react.png"></card>
                <card language="VueJS" image="images/vue.png"></card>
                <card language="NuxtJS" image="https://upload.wikimedia.org/wikipedia/commons/3/3c/Nuxt-js.png"></card>
                <card language="SASS/SCSS" image="https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Sass_Logo_Color.svg/2000px-Sass_Logo_Color.svg.png"></card>
                <card language="SQL/MySQL" image="data:image/png;base64,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"></card>
                <card language="MVC Coding Practice" image="https://upload.wikimedia.org/wikipedia/commons/a/a7/Rpm1.png"></card>
                <card language="Javascript" image="images/js.png"></card>
                <card language="PHP" image="images/php.png"></card>
                <card language="Laravel" image="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/LaravelLogo.png/800px-LaravelLogo.png"></card>
                <card language="Java" image="images/java_big_logo.jpg"></card>
                <card language="MJML" image="https://miro.medium.com/max/850/1*3qwqkHcvJ_8fCA2Gq57hqA.png"></card>
                <card language="Litmus" image="https://www.thensomehow.com/wp-content/uploads/2016/04/litmus-logo.png"></card>
                <card language="Umbraco CMS" image="https://umbraco.com/media/5024/umbraco_logo_blue05.png"></card>
                <card language="Canvas LMS" image="https://images.g2crowd.com/uploads/product/image/social_landscape/social_landscape_9459058f566e973958ad0690e4f9d655/canvas.png"></card>
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
                <tab name="Laravel" isActive="tabLink" tab="#laravel"></tab>
                <tab name="Java" isActive="tabLink" tab="#java"></tab>
                <tab name="VueJS" isActive="tabLink" tab="#vuejs"></tab>
                <tab name="ReactJS" isActive="tabLink" tab="#reactjs"></tab>
                <tab name="React-Native" isActive="tabLink" tab="#reactnative"></tab>
            </ul>

            <div id="any">
                <div class="d-flex justify-content-center center-align wrapFlex">
                    <projectcard title="Northern's Factory" image="images/northernfactory.png" link="http://trayvonnorthern.com/northernsfactory" language="PHP" codelink="https://github.com/TNortnern/PHPShoppingSite" description="A clothing website that has a cart for multiple orders. It also has a login system that grants a discount.">
                    </projectcard>

                    <projectcard title="Edgewood Creamery Mobile App" image="https://media.discordapp.net/attachments/571194108534587392/656912588289867776/unknown.png?width=472&height=935" link="https://expo.io/@tnorthern/Edgewood-FE" language="React-Native/ReactJS/Laravel" codelink="https://github.com/TNortnern/Edgewood-Creamery" 
                    
                    
                    description="
                    A real world app for the Edgewood Creamery company. Customers can order history (place the same order), place a new order, and cancel an order. After the customer submits, this order gets sent to the Creamery as a pdf and a thank you page shows up. It also has a in depth admin panel that makes the admin users feel complete in control.
                    ">
                    </projectcard>

                    <projectcard title="Portfolio" image="images/portfolio.png" link="http://trayvonnorthern.com/" language="VueJS" codelink="https://github.com/TNortnern/Portfolio-VueJS" description="A portfolio about me.">
                    </projectcard>

                    <projectcard title="AGSelect" image="images/agselect.png" link="http://trayvonnorthern.com/Agselect" language="HTML/CSS/JS" codelink="https://github.com/TNortnern/AgSelect-website" description="A real world project for the AGSelect food production company. The primary goal is to contact Hamilton.">
                    </projectcard>

                    <projectcard title="UOGO College" image="images/agselect.png" link="http://uogo2.herokuapp.com/" language="VueJS/Laravel" codelink="https://github.com/TNortnern/College" description="
                    
                    A prototype university website. Students can sign up and register for courses and drop courses. Instructors can create new courses, modify course options, drop and enroll users, and see what courses their taken and what users are enrolled in their courses.
                    ">
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
            <div id="laravel">
                <div class="d-flex justify-content-center center-align wrapFlex">

                <projectcard title="Edgewood Creamery Mobile App" image="images/northernfactory.png" link="https://expo.io/@tnorthern/Edgewood-FE" language="React-Native/ReactJS/Laravel" codelink="https://github.com/TNortnern/Edgewood-Creamery" 
                    
                    
                    description="
                    A real world app for the Edgewood Creamery company. Customers can order history (place the same order), place a new order, and cancel an order. After the customer submits, this order gets sent to the Creamery as a pdf and a thank you page shows up. It also has a in depth admin panel that makes the admin users feel complete in control.
                    ">
                    </projectcard>

                    <projectcard title="UOGO College" image="images/agselect.png" link="http://uogo2.herokuapp.com/" language="VueJS/Laravel" codelink="https://github.com/TNortnern/College" description="
                    
                    A prototype university website. Students can sign up and register for courses and drop courses. Instructors can create new courses, modify course options, drop and enroll users, and see what courses their taken and what users are enrolled in their courses.
                    ">
                    </projectcard>

                </div>
            </div>
            <div id="reactnative">
                <div class="d-flex justify-content-center center-align wrapFlex">

                <projectcard title="Edgewood Creamery Mobile App" image="https://media.discordapp.net/attachments/571194108534587392/656912588289867776/unknown.png?width=472&height=935" link="https://expo.io/@tnorthern/Edgewood-FE" language="React-Native/ReactJS/Laravel" codelink="https://github.com/TNortnern/Edgewood-Creamery" 
                    
                    
                    description="
                    A real world app for the Edgewood Creamery company. Customers can order history (place the same order), place a new order, and cancel an order. After the customer submits, this order gets sent to the Creamery as a pdf and a thank you page shows up. It also has a in depth admin panel that makes the admin users feel complete in control.
                    ">
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
                <form id="contact-form" class="col s12" method="POST">
                    <div class="input-field col s12">
                        <input required placeholder="Your Name" id="name" type="text" name="name" class="validate">
                        <label for="name">Name</label>
                        <span class="helper-text" data-error="Enter a valid name." data-success="&checkmark;"></span>
                    </div>
                    <div class="input-field col s12">
                        <input required placeholder="Your E-mail" id="email" type="email" name="email" class="validate" >
                        <label for="email">E-mail</label>
                        <span class="helper-text" data-error="Enter a valid e-mail." data-success="&checkmark;"></span>
                    </div>
                    <div class="input-field col s12">
                        <input placeholder="Your Number(optional)" id="number" type="tel" name="number" maxlength="10">
                        <label for="number">Phone Number</label>
                    </div>
                    <div class="input-field col s12">
                        <textarea placeholder="Your Message" name="message" id="message" required class="materialize-textarea validate"></textarea>
                        <label for="message">Message</label>
                        <span class="helper-text" data-error="Leave me a message please." data-success="&checkmark;"></span>
                    </div>
                    <div class="center-align">
                        <button id="sendmessage" type="submit" value="set" name="sendmessage" class="btn">Send Message</button>
                    </div>
                    <div id="messagesent" class="alert alert-success center-align">Your message was sent succesfully. I'll get back to you ASAP.</div>
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
    <script>
        
    </script>

</body>

</html>