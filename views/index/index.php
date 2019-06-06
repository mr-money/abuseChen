<!DOCTYPE html>
<html lang="en">
<head>
    <title>骂骂酱(中国)官方网站</title>
    <link href="<?= Yii::getAlias('@web'); ?>/homeindex/css/font-awesome.min.css" rel="stylesheet" type="text/css"
          media="all"/><!-- fontawesome -->
    <link href="<?= Yii::getAlias('@web'); ?>/homeindex/css/bootstrap.css" rel="stylesheet" type="text/css"
          media="all"/><!-- Bootstrap stylesheet -->
    <link href="<?= Yii::getAlias('@web'); ?>/homeindex/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- stylesheet -->
    <!-- meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content=""/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- //meta tags -->
    <!--fonts-->
    <link href="http://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&subset=latin-ext"
          rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
          rel="stylesheet">
    <!--//fonts-->
    <script type="text/javascript" src="<?= Yii::getAlias('@web'); ?>/homeindex/js/jquery-2.1.4.min.js"></script>
    <!-- Required-js -->
    <script src="<?= Yii::getAlias('@web'); ?>/homeindex/js/bootstrap.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@web'); ?>/homeindex/css/component.css"/>
    <!-- css for banner slider -->
    <script src="<?= Yii::getAlias('@web'); ?>/homeindex/js/modernizr.custom.js"></script>
    <!-- js required for banner slider -->
    <link rel="stylesheet" href="<?= Yii::getAlias('@web'); ?>/homeindex/css/colorbox.css"/><!-- css for Gallery -->
</head>
<body>
<!-- slider -->
<div class="w3-slider">
    <div id="boxgallery" class="boxgallery" data-effect="effect-1">
        <div class="panel"><img src="<?= Yii::getAlias('@web'); ?>/homeindex/images/1.jpg" alt="Image 1"/></div>
        <div class="panel"><img src="<?= Yii::getAlias('@web'); ?>/homeindex/images/2.jpg" alt="Image 2"/></div>
        <div class="panel"><img src="<?= Yii::getAlias('@web'); ?>/homeindex/images/3.jpg" alt="Image 3"/></div>
        <div class="panel"><img src="<?= Yii::getAlias('@web'); ?>/homeindex/images/4.jpg" alt="Image 4"/></div>
    </div>
    <div class="w3layouts-header-title">
        <h2>No matter where you go, there you are</h2>
    </div>
</div><!-- /container -->
<!-- js required for banner slider -->
<script src="<?= Yii::getAlias('@web'); ?>/homeindex/js/classie.js"></script>
<script src="<?= Yii::getAlias('@web'); ?>/homeindex/js/boxesFx.js"></script>
<!-- //js required for banner slider -->
<script>
    new BoxesFx(document.getElementById('boxgallery'));
</script>
<!-- //slider -->

<!-- header -->
<header>
    <div class="container">
        <!-- navigation -->
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="w3-logo">
                    <h1><a href="#">Road trip</a></h1>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a class="active" href="javascript:location.reload();">Home</a></li>
                    <li><a class="scroll" href="#w3-agile-about">About</a></li>
                    <li><a class="scroll" href="#agileits-specials">Specials</a></li>
                    <li><a class="scroll" href="#wthree-gallery">Gallery</a></li>
                    <li><a class="scroll" href="#agileinfo-news">News</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="scroll" href="#w3layouts-team">Team</a></li>
                            <li><a class="scroll" href="#w3ls-testimonials">Testimonials</a></li>
                        </ul>
                    </li>
                    <li><a class="scroll" href="#w3-contact">Contact</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
        <div class="clearfix"></div>
        <!-- //navigation -->
    </div>
</header>
<!-- //header -->

<!-- about-section -->
<div class="w3-agileits-about-section" id="w3-agile-about">
    <div class="container">
        <div class="w3agile-about-section-head text-center">
            <h3>About us</h3>
            <span></span>
        </div>
        <div class="about-section-grids">
            <div class="col-md-4 wthree-about-section-grid">
                <img src="<?= Yii::getAlias('@web'); ?>/homeindex/images/abt_pic.jpg" alt=""/>
            </div>
            <div class="col-md-4 wthree-about-section-grid">
                <h5>Heading goes here</h5>
                <p>Travel is the movement of people between relatively distant geographical locations, and can involve
                    travel by foot, bicycle, automobile, train, boat, airplane, or other means, with or without luggage,
                    and can be one way or round trip.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting.</p>
            </div>
            <div class="col-md-4 wthree-about-section-grid">
                <h5>Heading goes here</h5>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                    classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                    professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
                    consectetur, from a Lorem Ipsum passage.</p>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form, by injected humour, or randomised words which don't look even slightly
                    believable.</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //about-section -->

<!-- specials -->
<div class="agileits-w3layouts-specials" id="agileits-specials">
    <h3>OUR SPECIALS</h3>
    <span></span>
    <div class="special-grids">
        <div class="col-md-6 special-left l-grids">
            <figure class="effect-bubba">
                <img src="<?= Yii::getAlias('@web'); ?>/homeindex/images/4.jpg" alt=""/>
                <figcaption>
                    <h4>Tour</h4>
                    <p>She is free in her wildness, she is a wanderess, a drop of free water. She knows nothing of
                        borders and cares nothing for rules or customs. 'Time' for her isn’t something to fight against.
                        Her life flows clean, with passion, like fresh water.</p>
                </figcaption>
            </figure>
        </div>
        <div class="col-md-6 special-right">
            <div class="sp-wid">
                <h4>Books are the plane, and the train, and the road. They are the destination, and the Road trip. They
                    are home.</h4>
                <p>Travel is fatal to prejudice, bigotry, and narrow-mindedness, and many of our people need it sorely
                    on these accounts. Broad, wholesome, charitable views of men and things cannot be acquired by
                    vegetating in one little corner of the earth all one's lifetime </p>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="where-spl">
        <div class="col-md-6 special-right l-left">
            <div class="l-wid">
                <h4>Wherever you go becomes a part of you somehow.</h4>
                <p>What is that feeling when you're driving away from people and they recede on the plain till you see
                    their specks dispersing? - it's the too-huge world vaulting us, and it's good-bye. But we lean
                    forward to the next crazy venture beneath the skies.</p>
            </div>

        </div>
        <div class="col-md-6 special-left l-right l-grids">
            <figure class="effect-bubba">
                <img src="<?= Yii::getAlias('@web'); ?>/homeindex/images/1.jpg" alt=""/>
                <figcaption>
                    <h4>Tour</h4>
                    <p>In sit amet sapien eros quibusdam et aut officiis debitis aut rerum Integer in tincidunt labore
                        et dolore magna aliqua</p>
                </figcaption>
            </figure>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="spl-bot">
        <div class="col-md-6 special-left spl-bot-right l-grids">
            <figure class="effect-bubba">
                <img class="img-responsive" src="<?= Yii::getAlias('@web'); ?>/homeindex/images/2.jpg" alt=" "/>
                <figcaption>
                    <h4>Tour</h4>
                    <p>In sit amet sapien eros quibusdam labore et dolore magna aliqua</p>
                </figcaption>
            </figure>
        </div>
        <div class="col-md-6 spl-bot-left">
            <h4>Travel brings power and love back into your life.</h4>
            <p>I am awfully greedy; I want everything from life. I want to be a woman and to be a man, to have many
                friends and to have loneliness, to work much and write good books, to travel and enjoy myself, to be
                selfish and to be unselfish… You see, it is difficult to get all which I want. And then when I do not
                succeed I get mad with anger.</p>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- specials -->

<!-- team -->
<div class="team" id="w3layouts-team">
    <div class="container">
        <div class="title">
            <h3>Our Team</h3>
            <span class="w3-line"></span>
        </div>
        <div class="team-w3ls-row">
            <div class="col-md-3 team-grids">
                <img src="<?= Yii::getAlias('@web'); ?>/homeindex/images/t1.jpg" alt=""/>
                <div class="img-caption">
                    <div class="img-text">
                        <h4>Alan Ipsum</h4>
                        <p>Etiam pellentesque felis dolor quis efficitur eros </p>
                        <div class="agile-icons">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook fb"></i> </a></li>
                                <li><a href="#"><i class="fa fa-twitter tw"></i> </a></li>
                                <li><a href="#"><i class="fa fa-google-plus gp"></i> </a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 team-grids">
                <img src="<?= Yii::getAlias('@web'); ?>/homeindex/images/t2.jpg" alt=""/>
                <div class="img-caption">
                    <div class="img-text">
                        <h4>Matthew Ava</h4>
                        <p>Vestibulum celit dolor pulvinar ut tempus sit amet </p>
                        <div class="agile-icons">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook fb"></i> </a></li>
                                <li><a href="#"><i class="fa fa-twitter tw"></i> </a></li>
                                <li><a href="#"><i class="fa fa-google-plus gp"></i> </a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 team-grids">
                <img src="<?= Yii::getAlias('@web'); ?>/homeindex/images/t3.jpg" alt=""/>
                <div class="img-caption">
                    <div class="img-text">
                        <h4>Mark Sophia</h4>
                        <p>Suspendi ipsum magna ut luctus eget condimentum </p>
                        <div class="agile-icons">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook fb"></i> </a></li>
                                <li><a href="#"><i class="fa fa-twitter tw"></i> </a></li>
                                <li><a href="#"><i class="fa fa-google-plus gp"></i> </a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 team-grids">
                <img src="<?= Yii::getAlias('@web'); ?>/homeindex/images/t4.jpg" alt=""/>
                <div class="img-caption">
                    <div class="img-text">
                        <h4>Daniel Nyari</h4>
                        <p>Suspendi ipsum magna ut luctus eget condimentum </p>
                        <div class="agile-icons">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook fb"></i> </a></li>
                                <li><a href="#"><i class="fa fa-twitter tw"></i> </a></li>
                                <li><a href="#"><i class="fa fa-google-plus gp"></i> </a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //team -->

<!-- gallery -->
<div class="gallery text-center" id="wthree-gallery">
    <div class="container">
        <h3 class="agileits_head">Gallery</h3>
        <span class="w3-line"></span>
        <div class="w3l_gallery_grids">
            <div class="bs-example bs-example-tabs wthree_example_tab" role="tabpanel" data-example-id="togglable-tabs">
                <div class="w3l_gallery_grids1">
                    <div class="col-md-4 w3l_gallery_grid">
                        <div class="agileinfo_gallery_grid">
                            <a class="group1" href="<?= Yii::getAlias('@web'); ?>/homeindex/images/g1.jpg" title="Road trip">
                                <div class="hovereffect">
                                    <img src="<?= Yii::getAlias('@web'); ?>/homeindex/images/g1.jpg" alt=" "
                                         class="img-responsive"/>
                                    <div class="overlay">
                                        <p class="info">Road trip</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 w3l_gallery_grid">
                        <div class="agileinfo_gallery_grid">
                            <a class="group1" href="<?= Yii::getAlias('@web'); ?>/homeindex/images/g2.jpg" title="Road trip">
                                <div class="hovereffect">
                                    <img src="<?= Yii::getAlias('@web'); ?>/homeindex/images/g2.jpg" alt=" "
                                         class="img-responsive"/>
                                    <div class="overlay">
                                        <p class="info">Road trip</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 w3l_gallery_grid">
                        <div class="agileinfo_gallery_grid">
                            <a class="group1" href="<?= Yii::getAlias('@web'); ?>/homeindex/images/g3.jpg" title="Road trip">
                                <div class="hovereffect">
                                    <img src="<?= Yii::getAlias('@web'); ?>/homeindex/images/g3.jpg" alt=" "
                                         class="img-responsive"/>
                                    <div class="overlay">
                                        <p class="info">Road trip</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 w3l_gallery_grid">
                        <div class="agileinfo_gallery_grid">
                            <a class="group1" href="<?= Yii::getAlias('@web'); ?>/homeindex/images/g4.jpg" title="Road trip">
                                <div class="hovereffect">
                                    <img src="<?= Yii::getAlias('@web'); ?>/homeindex/images/g4.jpg" alt=" "
                                         class="img-responsive"/>
                                    <div class="overlay">
                                        <p class="info">Road trip</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 w3l_gallery_grid">
                        <div class="agileinfo_gallery_grid">
                            <a class="group1" href="<?= Yii::getAlias('@web'); ?>/homeindex/images/g5.jpg" title="Road trip">
                                <div class="hovereffect">
                                    <img src="<?= Yii::getAlias('@web'); ?>/homeindex/images/g5.jpg" alt=" "
                                         class="img-responsive"/>
                                    <div class="overlay">
                                        <p class="info">Road trip</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 w3l_gallery_grid">
                        <div class="agileinfo_gallery_grid">
                            <a class="group1" href="<?= Yii::getAlias('@web'); ?>/homeindex/images/g6.jpg" title="Road trip">
                                <div class="hovereffect">
                                    <img src="<?= Yii::getAlias('@web'); ?>/homeindex/images/g6.jpg" alt=" "
                                         class="img-responsive"/>
                                    <div class="overlay">
                                        <p class="info">Road trip</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 w3l_gallery_grid">
                        <div class="agileinfo_gallery_grid">
                            <a class="group1" href="<?= Yii::getAlias('@web'); ?>/homeindex/images/g7.jpg" title="Road trip">
                                <div class="hovereffect">
                                    <img src="<?= Yii::getAlias('@web'); ?>/homeindex/images/g7.jpg" alt=" "
                                         class="img-responsive"/>
                                    <div class="overlay">
                                        <p class="info">Road trip</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 w3l_gallery_grid">
                        <div class="agileinfo_gallery_grid">
                            <a class="group1" href="<?= Yii::getAlias('@web'); ?>/homeindex/images/g8.jpg" title="Road trip">
                                <div class="hovereffect">
                                    <img src="<?= Yii::getAlias('@web'); ?>/homeindex/images/g8.jpg" alt=" "
                                         class="img-responsive"/>
                                    <div class="overlay">
                                        <p class="info">Road trip</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 w3l_gallery_grid">
                        <div class="agileinfo_gallery_grid">
                            <a class="group1" href="<?= Yii::getAlias('@web'); ?>/homeindex/images/g9.jpg" title="Road trip">
                                <div class="hovereffect">
                                    <img src="<?= Yii::getAlias('@web'); ?>/homeindex/images/g9.jpg" alt=" "
                                         class="img-responsive"/>
                                    <div class="overlay">
                                        <p class="info">Road trip</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= Yii::getAlias('@web'); ?>/homeindex/js/jquery.colorbox.js"></script>
<script>
    $(document).ready(function () {
        //Examples of how to assign the Colorbox event to elements
        $(".group1").colorbox({rel: 'group1'});
        $(".group2").colorbox({rel: 'group2', transition: "fade"});
        $(".group3").colorbox({rel: 'group3', transition: "none", width: "75%", height: "75%"});
        $(".group4").colorbox({rel: 'group4', slideshow: true});
        $(".ajax").colorbox();
        $(".youtube").colorbox({iframe: true, innerWidth: 640, innerHeight: 390});
        $(".vimeo").colorbox({iframe: true, innerWidth: 500, innerHeight: 409});
        $(".iframe").colorbox({iframe: true, width: "80%", height: "80%"});
        $(".inline").colorbox({inline: true, width: "50%"});
        $(".callbacks").colorbox({
            onOpen: function () {
                alert('onOpen: colorbox is about to open');
            },
            onLoad: function () {
                alert('onLoad: colorbox has started to load the targeted content');
            },
            onComplete: function () {
                alert('onComplete: colorbox has displayed the loaded content');
            },
            onCleanup: function () {
                alert('onCleanup: colorbox has begun the close process');
            },
            onClosed: function () {
                alert('onClosed: colorbox has completely closed');
            }
        });

        $('.non-retina').colorbox({rel: 'group5', transition: 'none'})
        $('.retina').colorbox({rel: 'group5', transition: 'none', retinaImage: true, retinaUrl: true});

        //Example of preserving a JavaScript event for inline calls.
        $("#click").click(function () {
            $('#click').css({
                "background-color": "#f00",
                "color": "#fff",
                "cursor": "inherit"
            }).text("Open this window again and this message will still be here.");
            return false;
        });
    });
</script>
<!-- //gallery -->
<div class="tlinks">Collect from <a href="http://www.abusechan.cn/">骂骂酱官方网站</a></div>

<!-- news-section -->
<div class="news-section" id="agileinfo-news">
    <div class="container">
        <div class="agileits-news-section-head text-center">
            <h3 class="agileits_head">Latest News</h3>
            <span class="w3-line"></span>
        </div>
        <div class="news-section-grids">
            <div class="col-md-4 w3ls-news-section-grid">
                <img src="<?= Yii::getAlias('@web'); ?>/homeindex/images/n1.jpg" alt=""/>
                <div class="info">
                    <h5>News post title1</h5>
                    <label>september 12</label>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.</p>
                    <a class="more" href="#" data-toggle="modal" data-target="#myModal">Read more</a>
                    <!-- Modal-->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">
                                        News post title1</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book. There are many variations of passages of Lorem Ipsum available, but the
                                        majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to
                                        use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                        embarrassing hidden in the middle of text.Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Curabitur pellentesque semper quam, quis dapibus mi
                                        sagittis nec. Donec eget dignissim orci, a scelerisque mauris. Fusce rutrum,
                                        enim a elementum condimentum, urna eros rutrum mauris, at ullamcorper odio
                                        sapien nec augue.</p>
                                </div>
                            </div>
                            <!-- //Modal content-->
                        </div>
                    </div>
                    <!-- //Modal-->
                </div>
            </div>
            <div class="col-md-4 w3ls-news-section-grid">
                <img src="<?= Yii::getAlias('@web'); ?>/homeindex/images/n2.jpg" alt=""/>
                <div class="info">
                    <h5>News post title2</h5>
                    <label>October 25</label>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.</p>
                    <a class="more" href="#" data-toggle="modal" data-target="#myModal1">Read more</a>
                    <!-- Modal-->
                    <div class="modal fade" id="myModal1" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">
                                        News post title2</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book. There are many variations of passages of Lorem Ipsum available, but the
                                        majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to
                                        use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                        embarrassing hidden in the middle of text.Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Curabitur pellentesque semper quam, quis dapibus mi
                                        sagittis nec. Donec eget dignissim orci, a scelerisque mauris. Fusce rutrum,
                                        enim a elementum condimentum, urna eros rutrum mauris, at ullamcorper odio
                                        sapien nec augue.</p>
                                </div>
                            </div>
                            <!-- //Modal content-->
                        </div>
                    </div>
                    <!-- //Modal-->
                </div>
            </div>
            <div class="col-md-4 w3ls-news-section-grid">
                <img src="<?= Yii::getAlias('@web'); ?>/homeindex/images/n3.jpg" alt=""/>
                <div class="info">
                    <h5>News post title3</h5>
                    <label>october 30</label>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.</p>
                    <a class="more" href="#" data-toggle="modal" data-target="#myModal2">Read more</a>
                    <!-- Modal-->
                    <div class="modal fade" id="myModal2" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">
                                        News post title3</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book. There are many variations of passages of Lorem Ipsum available, but the
                                        majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable. If you are going to
                                        use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                        embarrassing hidden in the middle of text.Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Curabitur pellentesque semper quam, quis dapibus mi
                                        sagittis nec. Donec eget dignissim orci, a scelerisque mauris. Fusce rutrum,
                                        enim a elementum condimentum, urna eros rutrum mauris, at ullamcorper odio
                                        sapien nec augue.</p>
                                </div>
                            </div>
                            <!-- //Modal content-->
                        </div>
                    </div>
                    <!-- //Modal-->
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //news-section -->

<!-- testimonial -->
<div class="testimonial" id="w3ls-testimonials">
    <div class="container">
        <div class="w3-testimonial-heading">
            <h3>People say about us</h3>
            <span class="w3-line"></span>
        </div>
        <div class="w3agile-slider">
            <ul class="rslides" id="slider">
                <li>
                    <div class="w3agile-slider-grid">
                        <div class="w3agile-slider-grid-img">
                            <img src="<?= Yii::getAlias('@web'); ?>/homeindex/images/mem1.jpg" alt=""/>
                        </div>
                        <div class="w3agile-slider-grid-info">
                            <h5>Sed suscipit</h5>
                            <p>Donec iaculis ligula justo, eu tempus sapien consequat in. Ut malesuada nibh arcu, in
                                molestie felis maximus vel. Pellentesque cursus tempus magna, a placerat nisl
                                condimentum et.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3agile-slider-grid">
                        <div class="w3agile-slider-grid-img">
                            <img src="<?= Yii::getAlias('@web'); ?>/homeindex/images/mem2.jpg" alt=""/>
                        </div>
                        <div class="w3agile-slider-grid-info">
                            <h5>Malesuada</h5>
                            <p>Donec iaculis ligula justo, eu tempus sapien consequat in. Ut malesuada nibh arcu, in
                                molestie felis maximus vel. Pellentesque cursus tempus magna, a placerat nisl
                                condimentum et.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3agile-slider-grid">
                        <div class="w3agile-slider-grid-img">
                            <img src="<?= Yii::getAlias('@web'); ?>/homeindex/images/mem3.jpg" alt=""/>
                        </div>
                        <div class="w3agile-slider-grid-info">
                            <h5>Consequat</h5>
                            <p>Donec iaculis ligula justo, eu tempus sapien consequat in. Ut malesuada nibh arcu, in
                                molestie felis maximus vel. Pellentesque cursus tempus magna, a placerat nisl
                                condimentum et.</p>
                        </div>
                    </div>
                </li>
            </ul>
            <script src="<?= Yii::getAlias('@web'); ?>/homeindex/js/responsiveslides.min.js"></script>
            <script>
                // You can also use "$(window).load(function() {"
                $(function () {
                    // Slideshow 4
                    $("#slider").responsiveSlides({
                        auto: true,
                        pager: true,
                        nav: false,
                        speed: 500,
                        namespace: "callbacks",
                        before: function () {
                            $('.events').append("<li>before event fired.</li>");
                        },
                        after: function () {
                            $('.events').append("<li>after event fired.</li>");
                        }
                    });

                });
            </script>
        </div>
    </div>
</div>
<!-- //testimonial -->

<!-- contact-section -->
<div class="contact-section" id="w3-contact">
    <div class="container">
        <div class="contact-section-head text-center">
            <h3>Contact us</h3>
            <span></span>
        </div>
        <div class="agileits-map">
            <iframe src="" allowfullscreen></iframe>
        </div>
        <div class="w3l-contact-form-bottom">
            <div class="col-md-4 w3ls-address">
                <address>
                    <strong>Address :</strong>
                    <p>Road Trip Company</p>
                    <p>1st cross Road. Ave., R10/R18</p>
                    <p class="bottom">New York, MA 01234-4321 USA</p>
                    <strong><abbr title="phone">Phone :</abbr></strong>
                    <p>040 561234999</p>
                </address>
            </div>
            <form action="#" method="get">
                <div class="col-md-4 w3l-contact-form">
                    <div class="w3l-contact-form-row">
                        <div>
                            <span>Name</span>
                            <input type="text" class="text" placeholder="" required="required"/>
                        </div>
                        <div>
                            <span>Email</span>
                            <input type="email" class="text" placeholder="" required="required"/>
                        </div>
                        <div>
                            <span>phone</span>
                            <input type="text" class="text" placeholder="" required="required"/>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-4 w3l-contact-form-row comments">
                    <div>
                        <span>Comments</span>
                        <textarea onfocus="this.value = '';"
                                  onblur="if (this.value == '') {this.value = '';}"></textarea>
                    </div>
                    <input type="submit" value="Submit"/>
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
<!-- //contact-section -->

<!-- footer-section -->
<footer>
    <div class="container">
        <div class="w3ls-icons">
            <a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#" title="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            <a href="#" title="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        </div>
        <div class="copyright">
            <p>Copyright &copy; 2019.Company name All rights reserved.Abuse Chan<a href="http://www.abusechan.cn/"
                                                                                   target="_blank" title="骂骂酱官方网站">骂骂酱官方网站</a>
                - Collect from <a href="http://www.abusechan.cn/" title="骂骂酱官方网站" target="_blank">骂骂酱官方网站</a></p>
            <p>网站备案号 <a href="http://www.miitbeian.gov.cn/" rel="external nofollow" target="_blank">苏ICP备19011897号-1</a></p>
        </div>
        <div class="clearfix"></div>
    </div>
</footer>
<!-- footer-section -->

<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="
<?= Yii::getAlias('@web'); ?>/homeindex/js/move-top.js"></script>
<script type="text/javascript" src="
<?= Yii::getAlias('@web'); ?>/homeindex/js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- //here ends scrolling icon -->
</body>
</html>