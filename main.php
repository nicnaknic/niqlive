<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="14 days" />
    <meta name="author" content="Nicholas Henseleit" />	
	<meta name="description" content="I'm Nic Henseleit, A newly graduated Web Developer looking to start my career in Web Design/Development" />
    <meta name="keywords" content="Nic, Nicholas, Henseleit, Nic Henseleit, Development, Design, Programming, Programmer, Resume, PHP, HTML, CSS, Javascript, graduate, MySQL, Oracle, SQL" />

    <title>Nic Henseleit</title>

    <link href="css/bootstrap.min.css" rel="stylesheet"> <!--Included CSS Files-->
    <link href="css/sticky-footer.css" rel="stylesheet">
    <link href="css/plax.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/vis-mods.css">
    <style>
        .affix {
            top: 0;
            width: 100%;
            z-index: 250;
        }
        .affix-top {
            position: absolute;
            width: 100%;
        }
        .affix + .container-fluid {
            padding-top: 70px;
        }
        @media (min-width: 768px) {
            .navbar .navbar-nav {
                display: inline-block;
                float: none;
                vertical-align: top;
                /**margin-left: -117.3px;**/
            }
            .navbar .navbar-collapse {
                text-align: center;
            }
        }
        @media (max-width: 768px) {
            .inverse-dropdown{
                text-align: center;
            }
        }
        @media (min-width: 1184px ){
            .container-min{
                min-height: 455px;
            }
        }
        @media (min-width: 992px) and  (max-width: 1183px){
            .container-min{
                min-height: 555px;
            }
        }
        #profile, #experience, #gallery{
            padding-top: 40px;
        }
        #work, #humanitarian{
            padding-top: 10px;
        }
    </style>
    

</head>
<body data-spy="scroll" data-target="#topNav" data-offset="100">

    
    <section class="bg-1 text-center" id="top"><!--TOP DISPLAY FEATURE PAGE | START-->

        <h1 style="font-size: 350%; font-weight: 300;">Nicholas Henseleit</h1>
        <p class="lead" style="margin-bottom: 8vh; color: white;">Junior Web Developer/Designer</p>

        <nav id="nav" class="navbar navbar-default" role="navigation">
            <ul class="nav-no-decor nav-top-inline">
                <li><a href="mailto:nicholashens@gmail.com"><button type="button" class="btn-mod btn-mod-clean btn-mod-lg ripplelink"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;&nbsp;Contact Me</button></a></li>     
                <li><a href="resources/resume/Resume-2017r2.pdf" target="_blank"><button type="button" class="btn-mod btn-mod-clean btn-mod-lg ripplelink" ><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>&nbsp;&nbsp;View Resume</button></br></a></li>   </br>  
            </ul> 
        </nav>
        <nav id="nav" class="navbar navbar-default nav-bottom c-more" role="navigation">
            <ul class="nav-no-decor"  style="width: 100%;">
                <li>
                    <a href="#profile">
                        <div class="arrow bounce">
                                <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                        </div> 
                    </a>
                </li> 
            </ul>
        </nav>
    </section><!--TOP DISPLAY FEATURE PAGE | END-->

    <nav id="topNav" class="navbar navbar-inverse navbar-static-top" data-spy="affix" data-smart-affix data-offset-top><!--TOP AFFIX NAVBAR | START-->
        <div class="container">
            <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li data-toggle="tooltip" data-placement="bottom" title="Back to the Top!"><a href="#top" class="ripplelink"><span class="glyphicon glyphicon-chevron-up"></span></a></li>
                    <li><a href="#profile" class="ripplelink">My Profile</a></li>
                    <li><a href="#skills" class="ripplelink">Skills</a></li>
                    <li><a href="#" class="dropdown-toggle ripplelink text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Experiences&nbsp;&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu inverse-dropdown">
                            <li><a href="#experience">Education</a></li>
                            <li><a href="#work">Work Experience</a></li>
                            <li><a href="#humanitarian">Humanitarian Work</a></li>
                        </ul>
                    </li>
                    <li><a href="#activities" class="ripplelink">Interests</a></li>
                    <li><a href="#gallery" class="ripplelink">Gallery</a></li>
                    <li><a href="#feedback" class="ripplelink">Feedback</a></li>
                    <li><a href="#contact" class="ripplelink">Contact Me</a></li>
                </ul>
            </div>
        </div>
    </nav><!--TOP AFFIX NAVBAR | END-->

    <div id="profile"></div>
    <div class="container text-center" style="margin-bottom: 60px;"><!--MY PROFILE CONTAINTER | START-->
        

        <div class="row">
            <div class="col-sm-12">
                <h2 class="title title-primary">My Profile</h2>
                <h4 class="sub-title">I'm a creative design centric Web Developer/Designer</h4>
                <div class="page-header page-header-mod"></div>    
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4 text-left">
                <h3 class="title-small title-small-primary">About me</h3>
                <p>
                    I am a newly graduated Computer Science student with skills tailored towards Web development. My preference when it comes to web development is front-end/Web design. I am comfortable working with PHP and MySQL, how ever my skills really shine when working on the client side of development. I believe that working with a team is one of the most crucial aspects of software development as it not only diversifies the project you are working on, but also helps you obtain new skills and experiences quicker than you can do on your own.
                </p>
            </div>
            <div class="col-sm-4" style="padding-top: 60px;">
                <img  class="profile-img" src="resources/profile2.png" alt="About Me">
            </div>
            <div class="col-sm-4 text-left" style="padding-left: 25px;">
                <h3 class="title-small title-small-primary">Details</h3>
                <strong>Name:</strong>
                <p>Nicholas Henseleit</p>
                <strong>Age:</strong>
                <p>20 years</p>
                <strong>Location:</strong>
                <p>Kelowna, BC, Canada</p>
                <strong>Language Capabilities:</strong>
                <p>Fluent English speaking, reading &amp; writing</p>
                <!--<strong>Searching for:</strong>
                <p>Web Development/Design; either front or back-end development</p>-->
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h3 class="title-small title-small-primary">Creative Mindset</h3>
                <p>
                    Since I can remember I have always been inspired by excellent designs. When I 8 years old I had decided I wanted to become an architect. I would design buildings; sketch house exteriors, design floor plans, make 3D views of the interiors of these buildings all on paper. Later on I took my drawing skills to the digital world. I would do all what I had done on paper, but was now building these projects using Google Sketchup. My skills using Sketchup were less than adequate, however I was satisfied seeing what I had made in more detail. When Minecraft was released I got hooked. Not for the actual gameplay, but for the creative aspect in which it provided. After several years playing Minecraft and working as staff member on one of the largest creative servers in the game, I began to gain a reputation as the ‘Modern Builder’. I would design lifesize cities and <a href="https://www.planetminecraft.com/project/the-invue-pwego-server/" target="_blank">skyscrapers</a>. <a href="https://www.planetminecraft.com/project/traditional-home-pwego-server/" target="_blank">Houses</a> of all different styles and scale, even building lifelike <a href="https://www.planetminecraft.com/project/coastal-island-cinematic-map/" target="_blank">landscapes</a> using a program called World Builder. Later on I was asked to join a build team where me and several other players worked as a team to build <a href="https://www.planetminecraft.com/project/full-prison-server-map-download-by-pi-creative-team/" target="_blank">projects</a> for clients. Making money, while also doing what I loved. Eventually I lost interest in Minecraft as schooling began taking up more of my time. During my final year of highschool when looking to plan my future I realized that my passion for design was not simply limited to buildings. Having grown up being the family tech support with an unusual understanding of computers and hardware, I decided that I should pursue a career in Software development, with a focus towards the visual side of development. 
                </p>
            </div>
        </div>
    </div><!--MY PROFILE CONTAINER | END-->

    <section id="skills" class="bg-2 sec-mid text-center"><!--PARALLAX BG2 SECTION | START-->
        <p class="lead" style="color: white;">Creative, Devoted, Passionate</p>
    </section><!--PARALLAX BG2 SECTION | END-->
    
    <div class="container text-center" style="margin-bottom: 60px;"><!--SKILLS AND ABILITIES OUTER CONTAINER | START-->
        
        <div class="row"><!--MY SKILLS AND ABILITIES TOP HEADER | START-->
            <div class="col-sm-12">
                <h2 class="title title-primary">My Skills &amp; Abilities</h2>
                <h4 class="sub-title">"Unless you try to do something beyond what you have already mastered, you will never grow."</h4>
                <h4 class="sub-title"><emp-it>-Ralph Waldo Emerson</emp-it></h4>
                <div class="page-header page-header-mod"></div>    
            </div>
        </div><!--MY EXPERIENCES TOP HEADER | END-->
        <div class="row"><!--SKILLS AND ABILITES CONTENT ROW | START-->
            <div class="col-md-4  col-sm-12 text-left"><!--SKILLS AND ABILITIES COLUMN LEFT | START-->
                 <div class="list-group">
                    <div class="list-group-item">
                        <h4 class="list-group-item-heading title-small-primary"><strong>&lt;&#47;&gt;</strong>&nbsp;&nbsp;Web Development</h4>
                        <p class="list-group-item-text">&bull; Back-End Server development with PHP</p>
                        <p class="list-group-item-text">&bull; Front-End development with HTML5, CSS3 &amp; Javascript</p>
                        <p class="list-group-item-text">&bull; Experience using Bootstrap &amp; jQuery</p>
                        <p class="list-group-item-text">&bull; Database querying using MySQLi</p>
                        <p class="list-group-item-text">&bull; Database Management using MySQL/phpMyAdmin</p>
                        <p class="list-group-item-text">&bull; Basic understanding/experience with XML/XSL</p>
                        <p class="list-group-item-text">&bull; Experience managing WAMP/LAMP web servers</p>
                        <p class="list-group-item-text"><br></p>
                    </div>
                    <div class="list-group-item">
                        <h4 class="list-group-item-heading title-small-primary"><span class="glyphicon glyphicon-hdd"></span>&nbsp;&nbsp;Database Management</h4>
                        <p class="list-group-item-text">&bull; Experience using MySQL Databases</p>
                        <p class="list-group-item-text">&bull; Experience using Oracle SQL Databases</p>
                        <p class="list-group-item-text">&bull; Little experience using MSSQL Databases</p>
                        <p class="list-group-item-text">&bull; Experience building Databases &amp; table normalization</p>
                        <p class="list-group-item-text">&bull; Experience with Oracle's PL/SQL &amp; general SQL</p>
                    </div>
                </div>
            </div><!--SKILLS AND ABILITIES COLUMN LEFT | END-->

            <div class="col-md-4 col-sm-12 text-left"><!--SKILLS AND ABILITIES COLUMN MIDDLE | START-->
                 <div class="list-group">
                    <div class="list-group-item">
                        <h4 class="list-group-item-heading title-small-primary"><span class="glyphicon glyphicon-console"></span>&nbsp;&nbsp;Other Development Skills</h4>
                        <p class="list-group-item-text">&bull; Experience developing with Java &amp; Java Swing</p>
                        <p class="list-group-item-text">&bull; Experience developing with C/C++ and Visal Basic</p>
                        <p class="list-group-item-text">&bull; basic experience working with AWK (AWK Scripting)</p>
                        <p class="list-group-item-text">&bull; Experience working with Git version control system</p>
                        <p class="list-group-item-text">&bull; Knowledge and experience working with Data Structures</p>
                        <p class="list-group-item-text">&bull; Knowledge of various Object Orientated Design patters such as Singletons, Factory Method (etc)</p>
                        <p class="list-group-item-text">&bull; Experience with the Agile software development methodology using JIRA</p>
                        <p class="list-group-item-text">&bull; Understanding of Scrum methodology</p>
                    </div>
                    <div class="list-group-item">
                        <h4 class="list-group-item-heading title-small-primary"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;General Skills</h4>
                        <p class="list-group-item-text">&bull; Basic knowledge and skills relating to project management</p>
                        <p class="list-group-item-text">&bull; Creative and Critial thinking</p>
                        <p class="list-group-item-text">&bull; Proposals and Reporting</p>
                        <p class="list-group-item-text">&bull; Preparing and presenting presentations</p>
                    </div>
                </div>
            </div><!--SKILLS AND ABILITIES COLUMN MIDDLE | END-->

            <div class="col-md-4 col-sm-12 text-left"><!--SKILLS AND ABILITIES COLUMN RIGHT | START-->
                 <div class="list-group">
                     <div class="list-group-item">
                        <h4 class="list-group-item-heading title-small-primary"><span class="glyphicon glyphicon-wrench"></span>&nbsp;&nbsp;Tools I Use</h4>
                        <p class="list-group-item-text">&bull; Visual Studio 2017 (C/C++, Visual Basic)</p>
                        <p class="list-group-item-text">&bull; Visual Studio Code(HTML, CSS, Javascript, PHP)</p>
                        <p class="list-group-item-text">&bull; Eclipse IDE (Java/Java Swing)</p>
                        <p class="list-group-item-text">&bull; BlueJay IDE (Java/Java Swing)</p>
                        <p class="list-group-item-text">&bull; NetBeans IDE (PHP development on Linux)</p>
                        <p class="list-group-item-text">&bull; Git Bash/Git GUI</p>
                        <p class="list-group-item-text">&bull; GIMP2 (Photo editing)</p>
                        <p class="list-group-item-text">&bull; (Basic) Adobe Photoshop &amp; Illustrator</p>
                        <p class="list-group-item-text">&bull; Draw.IO (UML/Diagram tool)</p>
                        <p class="list-group-item-text">&bull; Microsoft Word &amp; Google Docs</p>
                        <p class="list-group-item-text">&bull; Microsoft PowerPoint &amp; Google Slides</p>
                        <p class="list-group-item-text"><br></p>
                    </div>
                    <div class="list-group-item">
                        <h4 class="list-group-item-heading title-small-primary"><span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;&nbsp;Other Notable Skills</h4>
                        <p class="list-group-item-text">&bull; Principles Of Information Systems Security</p>
                        <p class="list-group-item-text">&bull; Experience Designing User Interfaces</p>
                        <p class="list-group-item-text">&bull; Various forms of Photography</p>
                    </div>
                </div>
            </div><!--SKILLS AND ABILITIES COLUMN RIGHT | END-->
        </div><!--SKILLS AND ABILITES CONTENT ROW | END-->

    </div><!--SKILLS AND ABILITIES OUTER CONTAINER | END-->


    <div id="experience"></div>
    <div class="container-fluid container-colored text-center"><!--COLORED BACKGROUND CONTAINER | START-->

        <div class="container" style="margin-bottom: 60px;"><!--NESTED INNER CONTAINER HOLDING PARENT CONTENT | START-->
            
            <div class="row"><!--MY EXPERIENCES TOP HEADER | START-->
                <div class="col-sm-12">
                    <h2 class="title title-primary">My Experiences</h2>
                    <h4 class="sub-title">"There is no end to education. It is not that you read a book, pass an examination, and finish with education.</br> 
                        The whole of life, from the moment you are born to the moment you die, is a process of learning."</h4>
                    <h4 class="sub-title"><emp-it>-Jiddu Krishnamurti<emp-it></h4>
                    <div class="page-header page-header-mod-secondary"></div>  
                </div>
            </div><!--MY EXPERIENCES TOP HEADER | END-->
            
            <div class="row"><div class="col-sm-12 text-left"><h3 class="title-small title-small-primary" style="margin-bottom: 30px;">Education</br></h3></div></div>

            <div class="row" style="margin-bottom: 30px;"><!--Education Section 1 START-->
                <div class="col-sm-3  text-left">
                    <h5  style="font-size: 110%;"><strong>Okanagan College</strong></h5>
                    <p class="date">Sept 4, 2015 - April 21, 2017</p>
                </div>
                <div class="col-sm-9 text-left">
                    <h5><strong>Diploma - Computer Information Systems</strong></h5>
                    <p>
                        During this 2 year course I learned many of the fundamentals of Software development. This course included learning several fundamental programming languages and packages, and various methodologies and principles. My main take away from this experience was a solid understanding of core programming concepts and more diverse skills relating to Web Development. Check out my <a href="#skills">Skills and Abilities</a> section for more details on what skills I obtained.
                    </p>
                </div>
            </div><!--Education Section 2 END-->

            <div class="row"  style="margin-bottom: 30px;"><!--Education Section 2 START-->
                <div class="col-sm-3  text-left">
                    <h5 style="font-size: 110%;"><strong>Kelowna Christian School</strong></h5>
                    <p class="date">Sept 4, 2013 - June 15, 2015</p>
                </div>
                <div class="col-sm-9 text-left">
                    <h5><strong>Diploma - General Highschool Studies</strong></h5>
                    <p>
                        During my 2 years in high school I focused my studies towards Maths, Sciences and technologies. During my final year I attended an online course in Web Development where I learned the basics of developing with HTML and CSS. I also took an Information Technologies class where I learned basic C++, Application development with Java &amp; Flash and Adobe Photoshop/Illustrator which we used to create vector graphics. During my last semester I attended an online class in Photography, which later ended up developing into one of my favorite pastime <a href="#gallery">hobbies.</a> 
                    </p>
                </div>
            </div><!--Education Section 2 END-->

            <div id="work"></div>
            <div class="row"><div class="col-sm-12 text-left"><div class="page-header page-header-mod-secondary"></div></div></div><!--SECTION SPLITTER BAR-->
            <div class="row"><div class="col-sm-12 text-left"><h3 class="title-small title-small-primary" style="margin-bottom: 30px;">Work Experience</br></h3></div></div><!--WORK EXPERIENCE HEADER-->
            
            <div class="row"  style="margin-bottom: 30px;"><!--WORK EXPERIENCE SECTION 1 | START-->
                <div class="col-sm-3  text-left">
                    <h5 style="font-size: 110%;"><strong>Okanagan Staffing Services</strong></h5>
                    <p class="date">Jan 2017 - Present</p>
                </div>
                <div class="col-sm-9 text-left">
                    <h5><strong>Project Leader - Coordinator, Front-End Developer &amp; Designer</strong></h5>
                    <p>
                     This project started during my final semester at Okanagan College. The “Projects in Computer Science” course which I was taking required that we broke up into teams of up to 4 people and built software for a client located in Kelowna. I took the position of Project Leader, Designer, architect and Front-End developer during this project.</br>This Project included taking physical Paper Forms and translating them into Web Forms to be used by applicants on their website. The project also included creating a backend CMS to be used by the staff members where they could view/search for applicant data, add tags to their applications, and leave ratings on these applicants before contacting them.</br>My job included creating the User interface for the project, designing the flow of the program, creating PHP scripts to server content to Okanagan Staffing members, and communicating with project stakeholders in order to complete the project. 
                    </p>
                    <p class="title-small-primary"><span class="glyphicon glyphicon-map-marker"></span>  1000 K.L.O. Road; Kelowna BC, Canada      |      <a href="http://www.okanaganstaffing.com/"><span class="glyphicon glyphicon-link"></span>    http://www.okanaganstaffing.com/</a></p>
                </div>
            </div><!--WORK EXPERIENCE SECTION 1 | END-->

            <div class="row"  style="margin-bottom: 30px;"><!--WORK EXPERIENCE SECTION 2 | START-->
                <div class="col-sm-3  text-left">
                    <h5 style="font-size: 110%;"><strong>Future Shop</strong></h5>
                    <p  class="date">June 2013 - January 2014</p>
                </div>
                <div class="col-sm-9 text-left">
                    <h5><strong>Sales Associate</strong></h5>
                    <p>
                        My job working at Future Shop was the first one I ever had. At the age of 15, I was the youngest staff the Kelowna Future Shop had ever hired.  I was put incharge of the tablet and computer accessory department due to my extensive knowledge of Apples iOS and Googles Android Operating Systems and hardware. I regularly met the required Sales Quotas for my section and always offered exceptional customer advice. On many occasions I was asked by the Mobile Phone department to help customers pick out a phone that would fit their needs. 
                    </p>
                    <p class="title-small-primary"><span class="glyphicon glyphicon-map-marker"></span>  1876 Cooper Rd #100, Kelowna BC, Canada (NOW CLOSED)</p>
                </div>
            </div><!--WORK EXPERIENCE SECTION 2 | END-->

            <div class="row"  style="margin-bottom: 30px;"><!--WORK EXPERIENCE SECTION 3 | START-->
                <div class="col-sm-3  text-left">
                    <h5 style="font-size: 110%;"><strong>DAVIDsTEA</strong></h5>
                    <p  class="date">Nov 2014 - Jan 2015</p>
                </div>
                <div class="col-sm-9 text-left">
                    <h5><strong>Floor Coordinator</strong></h5>
                    <p>
                        Due to my previous experience working in retail at Future Shop, and my love for high quality tea’s, I landed a job working at DAVIDsTEA as a Floor Coordinator. This job was only seasonal however since they only needed help during the Christmas Season rush. Even though I did not work there long, it was enjoyable working with a small team selling products we were passionate about. 
                    </p>
                    <p class="title-small-primary"><span class="glyphicon glyphicon-map-marker"></span>  2271 Harvey Ave, Kelowna BC, Canada</p>
                </div>
            </div><!--WORK EXPERIENCE SECTION 3 | END-->

            <div class="row"  style="margin-bottom: 30px;"><!--WORK EXPERIENCE SECTION 4 | START-->
                <div class="col-sm-3  text-left">
                    <h5 style="font-size: 110%;"><strong>Booster Juice</strong></h5>
                    <p  class="date">May 2016 - June 2017</p>
                </div>
                <div class="col-sm-9 text-left">
                    <h5><strong>General Employee</strong></h5>
                    <p>
                        After completing my first year of College I decided I wanted to pick up on some work over the coming year. I was looking for a simple job which would allow me to take shifts when my schedule was less busy and I had more free time. Working at Booster Juice was a fun experience which taught me how to work in a fast paced environment with few other staff members in order to bring out quality and consistent smoothies to customers.
                    </p>
                    <p class="title-small-primary"><span class="glyphicon glyphicon-map-marker"></span>  2271 Harvey Ave #410, Kelowna BC, Canada</p>
                </div>
            </div><!--WORK EXPERIENCE SECTION 4 | END-->

            <div id="humanitarian"></div>
            <div class="row"><div class="col-sm-12 text-left"><div class="page-header page-header-mod-secondary"></div></div></div><!--SECTION SPLITTER BAR-->
            <div class="row"><div class="col-sm-12 text-left"><h3 class="title-small title-small-primary" style="margin-bottom: 30px;">Humanitarian Work</br></h3></div></div><!--WORK EXPERIENCE HEADER-->

            <div class="row"  style="margin-bottom: 30px;"><!--HUMANITARIAN WORK SECTION 1 | START-->
                <div class="col-sm-3  text-left">
                    <h5 style="font-size: 110%;"><strong>Camp Media Tech</strong></h5>
                    <p  class="date">July 2016 - Aug 2016</p>
                </div>
                <div class="col-sm-9 text-left">
                    <h5><strong>Gardom Lake Bible Camp</strong></h5>
                    <p>
                        During the summer of 2016, Gardom Lake Bible Camp was in desperate need of a Media Tech that could stay the entire summer helping out with photo and video production. I was offered a position working for them due to my knowledge and skills in photography and videography. This job required me to take photo’s and videos from 9am until 10pm every day from Monday - Friday. Often times staying up until 3am editing videos in order to meet deadlines.</br>While the work was hard, it was an enjoyable experience making people smile with what I was creating . Even though this position was not paid for, I would definitely do it again if given the time and opportunity. 
                    </p>
                    <p class="title-small-primary"><span class="glyphicon glyphicon-map-marker"></span>  651 Glenmary Rd, Enderby BC, Canada</p>
                </div>
            </div><!--HUMANITARIAN WORK SECTION 1 | END-->

            <div class="row"  style="margin-bottom: 30px;"><!--HUMANITARIAN WORK SECTION 2 | START-->
                <div class="col-sm-3  text-left">
                    <h5 style="font-size: 110%;"><strong>Bolivia Missions</strong></h5>
                    <p  class="date">March 2015 - April 2015</p>
                </div>
                <div class="col-sm-9 text-left">
                    <h5><strong>Kelowna Christian School</strong></h5>
                    <p>
                        Kelowna Christian School hosts a Missions trip every year in which a few students can attend during their spring break. Having always wanted to go on one of these trips, within my last year attending the school I managed to join the team on their journey to Bolivia. This trip involved a lot of planning and fundraising before actually leaving Canada. Our team managed to fundraise several thousand dollars, along with having hundreds of toys, clothing articles, books, and dried food donated to our group. While in Bolivia we worked on various projects and helped support several families whom we had been keeping in contact with before leaving to Bolivia. This trip was extremely meaningful to me as it showed a complete contrast to the life I live back home. 
                    </p>
                    <p class="title-small-primary"><span class="glyphicon glyphicon-map-marker"></span>  Santa Cruz, Bolivia</p>
                </div>
            </div><!--HUMANITARIAN WORK SECTION 2 | END-->

            <div class="row"  style="margin-bottom: 30px;"><!--HUMANITARIAN WORK SECTION 3 | START-->
                <div class="col-sm-3  text-left">
                    <h5 style="font-size: 110%;"><strong>Guatemala Missions</strong></h5>
                    <p  class="date">March 2011 - April 2011</p>
                </div>
                <div class="col-sm-9 text-left">
                    <h5><strong>Trinity Baptist Church</strong></h5>
                    <p>
                        When I was 13 years old I attended my first Mission trip in Guatemala. This trip lasted for 3 weeks during the Spring of 2011. While down in Guatemala our group helped support a children's orphanage which was located across from the Compound we were staying at. Many of the projects we worked on included hard labour working out in the sun; digging drainage trenches, clearing out fields of leaves and weeds or even moving trash to be burned. Many of our evenings were spent playing with the children at the orphanage, singing songs, or hosting fun events for them. My take away from this trip was understanding the importance of doing work for other without expecting anything in return.  
                    </p>
                    <p class="title-small-primary"><span class="glyphicon glyphicon-map-marker"></span>  Guatemala City, Guatemala</p>
                </div>
            </div><!--HUMANITARIAN WORK SECTION 3 | END-->
            

        </div><!--NESTED INNER CONTAINER HOLDING PARENT CONTENT | END-->

    </div><!--OUTER COLORED BACKGROUND CONTAINER | END-->
    
    <section id="activities" class="bg-3 sec-mid text-center"><!--PARALLAX BG2 SECTION | START-->
        <p class="lead" style="color: white;">Creative, Devoted, Passionate</p>
    </section><!--PARALLAX BG3 SECTION | END-->
    
    <div class="container text-center" style="margin-bottom: 60px;"><!--INTEREST AND ACTIVITIES CONTAINER | START-->

        <div class="row"><!--MY INTERESTS TOP HEADER | START-->
            <div class="col-sm-12">
                <h2 class="title title-primary">My Interests &amp; Activities</h2>
                <h4 class="sub-title">"All that is valuable in human society depends upon the opportunity for 
                                            development accorded the individual."</h4>
                <h4 class="sub-title"><emp-it>-Albert Einstein</emp-it></h4>
                <div class="page-header page-header-mod"></div>  
            </div>
        </div><!--MY INTERESTS TOP HEADER | END-->

        <div class="row"><!--MY INTERESTS CONTENT ROW | START-->

            <div class="col-md-4 col-sm-12 text-left"><!--MY INTERESTS DESIGN COLUMN | START-->
                 <div class="list-group">
                    <div class="list-group-item container-min">
                        <h4 class="list-group-item-heading title-small-primary"><span class="glyphicon glyphicon-heart-empty"></span>&nbsp;&nbsp;Design</h4>
                        <p class="list-group-item-text">
                            I have always loved designing things. Sand Castles on the beach, a building I sketched up on paper. Even the layout of my room has been designed to personal perfection. Maybe it's my OCD, but I hate settling on something simply being mediocre. Tokyo Japan; a city that brings me inspiration. The styles of architecture, the layout of buildings, the unique feeling you get when walking down the street, the efficiency in urban planning. It invokes a feeling in me which not many cities have been able to provide. Everything is kept clean and orderly. It is a city that just works well in almost every aspect urban planning. For me, when it comes to design things need to make sense and have a level of originality to them. After starting college my interest in UI/UX design really started to become apparent. Often focusing a majority of my time perfecting the visual design of a project instead of actually working on the project's functionality. This driving passion for design has lead me into countless hours of self researching design methodologies and technologies used within the industry. 
                        </p>
                    </div>
                </div>
            </div><!--MY INTERESTS DESIGN COLUMN | END-->

            <div class="col-md-4 col-sm-12 text-left"><!--MY INTERESTS PHOTOGRAPHY COLUMN | START-->
                 <div class="list-group">
                    <div class="list-group-item container-min">
                        <h4 class="list-group-item-heading title-small-primary"><span class="glyphicon glyphicon-camera"></span>&nbsp;&nbsp;Photography</h4>
                        <p class="list-group-item-text">
                            I have been working on my photographic skills for a little over 3 years now. I got my first DSLR camera during my final year of highschool, and since then I have gotten hooked. Back when I first started, I was terrible. I didn't know how to use a DSLR camera, knew almost nothing about composition, had no idea what the various measurements meant. The only thing I knew was how to hit the shutter release button. Eventually I started digging into the settings, reading tutorials online and took a class back in highschool so I could learn the basics. Since then my skills have improved drastically. I’ve always enjoyed being able to capture a moment through a frame in which I setup. My personal favorite subjects to take pictures of has always been landscapes in low light. Its one of the most challenging variants, however it has forced me to learn new skills and question my knowledge regarding my own style of shooting.  
                        </p>
                    </div>
                </div>
            </div><!--MY INTERESTS PHOTOGRAPHY COLUMN | END-->

            <div class="col-md-4 col-sm-12 text-left"><!--MY INTERESTS TECHNOLOGY COLUMN | START-->
                 <div class="list-group">
                    <div class="list-group-item container-min">
                        <h4 class="list-group-item-heading title-small-primary"><span class="glyphicon glyphicon-console"></span>&nbsp;&nbsp;Technology &amp; Computing</h4>
                        <p class="list-group-item-text">
                            Since I can remember technology has intrigued me. At the age of 13 I was branded “The family tech support”. I could always figure out how things worked. When the first iPod touch was released, I knew I had to get one. The idea of being able to have a compact computer in your pocket at all times fascinated me. After only a few weeks of getting one, I decided to <a href="https://en.wikipedia.org/wiki/IOS_jailbreaking">JailBreak</a> it. I wanted to be able to do more with it, be able to tweak the OS and make it feel unique to how I wanted it.  Eventually I got my first Android Phone, first thing I did was <a href="https://en.wikipedia.org/wiki/Rooting_(Android_OS)">Root</a> the device and install a Custom ROM. Since then my fascination and understanding of software has grown exponentially. I believe that mobile phones were my catalyst to becoming a software developer. After having spent hundreds of hours self researching these devices, my passion for technology really became obvious to me.
                        </p>
                    </div>
                </div>
            </div><!--MY INTERESTS TECHNOLOGY COLUMN | END-->


        </div><!--MY INTERESTS CONTENT ROW | END-->

    </div><!--INTEREST AND ACTIVITIES CONTAINER | END-->

    <div id="gallery"></div>
    <div class="container text-center" style="margin-bottom: 80px;"><!--PHOTO GALLERY CONTAINTER | START-->

            <div class="row"><!--MY GALLERY TOP HEADER | START-->
                <div class="col-sm-12">
                    <h2 class="title title-primary" >My Photo Gallery</h2>
                    <h4 class="sub-title">"Youth is happy because it has the capacity to see beauty. Anyone who keeps the ability to see beauty never grows old."</h4>
                    <h4 class="sub-title"><emp-it>-Franz Kafka</emp-it></h4>
                    <div class="page-header page-header-mod-secondary"></div>  
                </div>
            </div><!--MY GALLERY TOP HEADER | END-->

            <div class="row" ><!--GALLERY ROW 1 | START-->

                <div class="col-md-3 col-sm-6 img-col-padding">
                    <a class="pop"  data-toggle="tooltip">
                        <div class="img-container">
                            <img src="resources/gallery/img1.png" class="img-responsive" alt="Gallery image 1">
                            <div class="img-overlay img-ripple">
                                <div class="img-content">Tokyo Rainbow Bridge</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 img-col-padding">
                    <a class="pop">
                        <div class="img-container">
                            <img src="resources/gallery/img2.png" class="img-responsive" alt="Gallery image 1">
                            <div class="img-overlay img-ripple">
                                <div class="img-content">Tokyo Big Sight</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="col-md-3 col-sm-6 img-col-padding">
                    <a class="pop">
                        <div class="img-container">
                            <img src="resources/gallery/img3.png" class="img-responsive" alt="Gallery image 1">
                            <div class="img-overlay img-ripple">
                                <div class="img-content">Yamanouchi, Nagano Japan</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 img-col-padding">
                    <a class="pop">
                        <div class="img-container">
                            <img src="resources/gallery/img9.jpg" class="img-responsive" alt="Gallery image 1">
                            <div class="img-overlay img-ripple">
                                <div class="img-content">Hakone, Kanagawa Japan</div>
                            </div>
                        </div>
                    </a>
                </div>
                
            </div><!--GALLERY ROW 1 | END-->

            <div class="row"><!--GALLERY ROW 2 | START-->

                <div class="col-md-3 col-sm-6 img-col-padding">
                    <a class="pop">
                        <div class="img-container">
                            <img src="resources/gallery/img5.jpg" class="img-responsive" alt="Gallery image 1">
                            <div class="img-overlay img-ripple">
                                <div class="img-content">Kanazawa Samurai House</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 img-col-padding">
                    <a class="pop">
                        <div class="img-container">
                            <img src="resources/gallery/img6.jpg" class="img-responsive" alt="Gallery image 1">
                            <div class="img-overlay img-ripple">
                                <div class="img-content">Meiji Shrine, Tokyo</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="col-md-3 col-sm-6 img-col-padding">
                    <a class="pop">
                        <div class="img-container">
                            <img src="resources/gallery/img7.jpg" class="img-responsive" alt="Gallery image 1">
                            <div class="img-overlay img-ripple">
                                <div class="img-content">Hiroshima Peace Memorial</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 img-col-padding">
                    <a class="pop">
                        <div class="img-container">
                            <img src="resources/gallery/img8.jpg" class="img-responsive" alt="Gallery image 1">
                            <div class="img-overlay img-ripple">
                                <div class="img-content">Mt Fuji Shrine</div>
                            </div>
                        </div>
                    </a>
                </div>
                
            </div><!--GALLERY ROW 2 | END-->

            <div class="row"><!--GALLERY ROW 3 | START-->

                <div class="col-md-3 col-sm-6 img-col-padding">
                    <a class="pop">
                        <div class="img-container">
                            <img src="resources/gallery/img10.jpg" class="img-responsive" alt="Gallery image 1">
                            <div class="img-overlay img-ripple">
                                <div class="img-content">Kushida Shrine, Fukuoka</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 img-col-padding">
                    <a class="pop">
                        <div class="img-container">
                            <img src="resources/gallery/img11.jpg" class="img-responsive" alt="Gallery image 1">
                            <div class="img-overlay img-ripple">
                                <div class="img-content">Yamanouchi, Nagano Japan</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="col-md-3 col-sm-6 img-col-padding">
                    <a class="pop">
                        <div class="img-container">
                            <img src="resources/gallery/img12.jpg" class="img-responsive" alt="Gallery image 1">
                            <div class="img-overlay img-ripple">
                                <div class="img-content">Crawford Falls, Kelowna</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 img-col-padding">
                    <a class="pop">
                        <div class="img-container">
                            <img src="resources/gallery/img13.jpg" class="img-responsive" alt="Gallery image 1">
                            <div class="img-overlay img-ripple">
                                <div class="img-content">Crawford Falls, Kelowna</div>
                            </div>
                        </div>
                    </a>
                </div>
                
            </div><!--GALLERY ROW 3 | END-->

            <div class="row"><!--GALLERY ROW 4 | START-->

                <div class="col-md-3 col-sm-6 img-col-padding">
                    <a class="pop">
                        <div class="img-container">
                            <img src="resources/gallery/img14.jpg" class="img-responsive" alt="Gallery image 1">
                            <div class="img-overlay img-ripple">
                                <div class="img-content">Mission Creek, Kelowna</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 img-col-padding">
                    <a class="pop">
                        <div class="img-container">
                            <img src="resources/gallery/img18.jpg" class="img-responsive" alt="Gallery image 1">
                            <div class="img-overlay img-ripple">
                                <div class="img-content">Kelowna, BC Canada</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="col-md-3 col-sm-6 img-col-padding">
                    <a class="pop">
                        <div class="img-container">
                            <img src="resources/gallery/img16.jpg" class="img-responsive" alt="Gallery image 1">
                            <div class="img-overlay img-ripple">
                                <div class="img-content">Inari Taisha, Kyoto</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 img-col-padding">
                    <a class="pop">
                        <div class="img-container">
                            <img src="resources/gallery/img17.jpg" class="img-responsive" alt="Gallery image 1">
                            <div class="img-overlay img-ripple">
                                <div class="img-content">Matsumoto Castle, Nagano</div>
                            </div>
                        </div>
                    </a>
                </div>
                
            </div><!--GALLERY ROW 4 | END-->

            <div class="page-header page-header-mod"></div> 

            <div class="row"><!--MY GALLERY TOP HEADER | START-->
                <div class="col-sm-12">
                    <h4 class="sub-title"><strong>PLEASE NOTE:</strong> Do not distribute any of these images without my permission. If you wish to use any, please contact me first in order to gain approval.</h4> 
                </div>
            </div><!--MY GALLERY TOP HEADER | END-->

    </div> <!--PHOTO GALLERY CONTAINTER | END-->

    <section id="feedback" class="bg-4 sec-mid text-center"><!--PARALLAX BG2 SECTION | START-->
        <p class="lead" style="color: white;">Creative, Devoted, Passionate</p>
    </section><!--PARALLAX BG2 SECTION | END-->

    <div class="container text-center" style="margin-bottom: 60px;"><!--FEEDBACK CONTAINER | START-->

        <div class="row"><!--LEAVE FEEDBACK HEADER | START-->
            <div class="col-sm-12">
                <h2 class="title title-primary">Leave Feedback</h2>
                <h4 class="sub-title">If you enjoyed what you have seen please feel free to leave a comment expressing what you have, or have no enjoyed about my Interactive Resume. Please be considerate and avoid posting spam comments</h4>
                <div class="page-header page-header-mod"></div>  
            </div>
        </div><!--LEAVE FEEDBACK HEADER | END-->
        
        <div class="pagination-container"><!--PAGINATION CONTAINER | START-->
        <?php

            $mysqli = mysqli_connect("localhost", "p0d7k8w1_p23sd45", 'Nn1029384756', "p0d7k8w1_resumedb");
            //$mysqli = mysqli_connect("localhost", "root", 'root', "resumedb");
            $dbRowCount = 0;
            if($mysqli -> connect_error){
                die("Connection failed: " . $conn->connect_error);
            }else{
                $countSql  = 'SELECT COUNT(*) As counter FROM feedback'; //create a count of all the rows in the table
                $pg1Sql  = 'SELECT name, date, content FROM feedback ORDER BY cmID DESC LIMIT 4'; //create a count of all the rows in the table
                $countQuery = mysqli_query($mysqli, $countSql) or die(mysqli_error($mysqli)); //execute countSQL query
                $pg1Query = mysqli_query($mysqli, $pg1Sql) or die(mysqli_error($mysqli)); //execute countSQL query

                while ($row = mysqli_fetch_array($countQuery)) {//obtain the single number into variable "dbRowCount"
				    $dbRowCount = $row['counter'];
                }

                $pageNum = ceil($dbRowCount / 4); //round the number UP, divide by 5 to obtain the page counter

                if($dbRowCount == 0){ ?>

                   <p>No one has commented yet :/ Be the first to do so!

                <?php }else{

                
                echo "<div data-page=\"1\" style=\"min-height: 300px;\">\n";
                while ($row = mysqli_fetch_array($pg1Query)) {//print out Divs for first 5 DB entries "
				    $name = $row['name'];
                    $date = $row['date'];
                    $content = $row['content']; 
                    $formDate = strtotime($date);
                    $viewDate = date('F jS\, Y', $formDate); ?>

                    <div class="row">
                        <div class="col-sm-3 col-xs-3 text-left">
                            <h4 class="list-group-item-heading title-small-primary"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<?php echo $name; ?></h4>
                            <p class="date"><?php echo $viewDate; ?></p>
                        </div>
                        <div class="col-sm-9 col-xs-9 text-left">
                            <p class="list-group-item-text">"<?php echo $content; ?>"</p>  
                        </div>    
                    </div>
                    <div class="page-header page-header-mod-comments"></div> 

                <?php }
                echo "</div>\n";

                for($pgCount = 2; $pgCount <= $pageNum; $pgCount++){ //create data-pages for the remaining items in the DB

                    echo "<div data-page=\"$pgCount\" style=\"display: none; min-height: 300px;\">\n"; //Create the Div header

                    $pgOffset = (($pgCount * 4) - 4); //make an offset for the LIMIT SQL clause to bring up the next 4 items
                    $pgNxtSql  = 'SELECT name, date, content FROM feedback ORDER BY cmID DESC LIMIT '.$pgOffset.', 4';//create dynamic SQL Query for remaining items
                    $pgNxtQuery = mysqli_query($mysqli, $pgNxtSql) or die(mysqli_error($mysqli)); //execute the above Query 

                    while ($row = mysqli_fetch_array($pgNxtQuery)) { //print out Divs for first remaining DB entries "
				        $name = $row['name'];
                        $date = $row['date'];
                        $content = $row['content'];
                        $formDate = strtotime($date);
                        $viewDate = date('F jS\, Y', $formDate); ?>

                        <div class="row">
                            <div class="col-sm-3 col-xs-3 text-left">
                                <h4 class="list-group-item-heading title-small-primary"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<?php echo $name; ?></h4>
                                <p class="date"><?php echo $viewDate; ?></p>
                            </div>
                            <div class="col-sm-9 col-xs-9 text-left">
                                <p class="list-group-item-text">"<?php echo $content; ?>"</p>  
                            </div>    
                        </div>
                        <div class="page-header page-header-mod-comments"></div>

                    <?php }
                    echo "</div>\n";
                }//END FOR LOOP 
			}
            }
        ?>
        
            <div><!--PAGINATION NAVBAR | START-->
                <div class="pagination pagination-centered">
                    <ul class="pagination pagination-sm"><!--Create Pagination bar depending on Pages in DB-->
                        <li data-page="-" ><a href="#" >&lt;</a></li>
                        <li data-page="1"><!--Create First page with state active (currently selected)-->
                            <a href="#" >1</a>
                        </li>
                        <?php
                            for($pgCount = 2; $pgCount <= $pageNum; $pgCount++){ //Count through the pageNum var
                                echo "<li data-page=\"$pgCount\"><a href=\"#\">$pgCount</a></li>\n"; //Print a new page link for the pgCount num
                            }   
                        ?>
                        <li data-page="+"><a href="#" >&gt;</a></li>
                    </ul>
                </div>
            </div><!--PAGINATION NAVBAR | END-->

        </div><!--PAGINATION CONTAINER | END-->





        <div class="row">

            <div class="page-header page-header-mod" style="margin-top: 0px;"></div> 

            <form method="POST" action="subFeed.php">
                <div class="col-sm-3 col-xs-3">
                    <div class="form-group" data-toggle="tooltip" title="Leave blank if you do not wish to display your name">
                        <input type="text" class="form-control text-center" name="cmName" aria-describedby="EnterName" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-submit">Submit</button>
                    </div>
                </div>
                <div class="col-sm-9 col-xs-9">
                    <div class="form-group">
                        <textarea class="form-control" name="cmContent" maxlength="500" rows="4" placeholder="Please Leave me some feedback!" data-toggle="tooltip" title="Limited to 500 characters. For more detailed feedback, email me!"required></textarea>
                    </div>
                </div>
            </form>

        </div>

    </div><!--FEEDBACK CONTAINER | END-->
    
    <div id="contact"></div>
    <div class="container-fluid container-colored-bottom"><!--CONTACT ME CONTAINER FLUID | START-->

        <div class="container text-center" style="margin-top: 60px; margin-bottom: 30px;">

            <div class="row"><!--LEAVE FEEDBACK HEADER | START-->
                <div class="col-sm-12">
                    <h2 class="title title-footer">Contact Me</h2>
                    <h4 class="sub-title-footer">If you wish to get in contact with me, concerning either updates to this website, project proposals or potential job openings please feel free to do so! If you wish to send me a call/text, please request my phone number in an email.</h4>
                    <div class="page-header page-header-mod-bottom"></div>  
                </div>
            </div><!--LEAVE FEEDBACK HEADER | END-->

            <div class="row" style="margin-top: 60px; margin-bottom: 60px;">
                <div class="col-sm-4 text-center">
                    <a href="https://www.linkedin.com/in/nicholas-henseleit-088499116/" class="no-style">
                        <p class="media-link"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;http://linkedin.com/nicholas-henseleit/</p>
                    </a>
                </div>
                
                <div class="col-sm-4 text-center">
                    <a href="mailto:nicholashens@gmail.com" class="no-style">
                        <p class="media-link"><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;nicholashens@gmail.com</p>
                    </a>
                </div>
                <div class="col-sm-4 text-center">
                    <a href="https://www.instagram.com/_720phd/" class="no-style">
                        <p class="media-link"><span class="glyphicon glyphicon-picture"></span>&nbsp;&nbsp;https://www.instagram.com/_720phd/</p>
                    </a>
                </div>
            </div>

            <div class="page-header page-header-mod-bottom"></div>  

            <p class="date" style="margin-top: 200px;">Website Design by Nicholas Henseleit</p>   
        </div>

    </div><!--CONTACT ME CONTAINER FLUID | END-->





    <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><!--IMAGE EXPAND MODAL | START-->
        <div class="modal-dialog modal-lg" data-dismiss="modal">
            <div class="modal-content">              
                <div class="modal-body"  style="padding: 0px;">
                    <img src="" class="imagepreview" style="width: 100%;" >
                </div>    
            </div>
        </div>
    </div><!--IMAGE EXPAND MODAL | END-->

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> <!--Required script references-->
    <script type="text/javascript" src="/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plax.js"></script>
    <script src="js/vis-mods.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("body").tooltip({ selector: '[data-toggle=tooltip]' });
        });
    </script>

    <script type="text/javascript">
        var paginationHandler = function(){
            // store pagination container so we only select it once
            var $paginationContainer = $(".pagination-container"),
            $pagination = $paginationContainer.find('.pagination ul');
            // click event
            $pagination.find("li a").on('click.pageChange',function(e){
                e.preventDefault();
                // get parent li's data-page attribute and current page
                var parentLiPage = $(this).parent('li').data("page"),
                currentPage = parseInt( $(".pagination-container div[data-page]:visible").data('page') ),
                numPages = $paginationContainer.find("div[data-page]").length;
                // make sure they aren't clicking the current page
                if ( parseInt(parentLiPage) !== parseInt(currentPage) ) {
                    // hide the current page
                    $paginationContainer.find("div[data-page]:visible").hide();
                    if ( parentLiPage === '+' ) {
                        // next page
                        $paginationContainer.find("div[data-page="+( currentPage+1>numPages ? numPages : currentPage+1 )+"]").show();
                    } else if ( parentLiPage === '-' ) {
                        // previous page
                        $paginationContainer.find("div[data-page="+( currentPage-1<1 ? 1 : currentPage-1 )+"]").show();
                    } else {
                        // specific page
                        $paginationContainer.find("div[data-page="+parseInt(parentLiPage)+"]").show();
                    }
                }
            });
        };
        $( document ).ready( paginationHandler );
    </script>

    
</body>
</html>
