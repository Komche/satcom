<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="assets/img/ico/apple-touch-icon-57x57.png">

    <title>Smash by Distinctive Themes</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/pe-icons.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript">
        $(document).ready(function(){
           'use strict';
        jQuery('#headerwrap').backstretch([
          "assets/img/bg/bg1.jpg",
          "assets/img/bg/bg2.jpg",
          "assets/img/bg/bg3.jpg"
        ], {duration: 8000, fade: 500});
    });
    </script>

</head>

<body id="page-top" class="index">

    <div class="preloader">
        <div class="preloader-img">
        	<img src="assets/img/loading-bars.svg" width="100" alt="Loading icon" />
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-shrink bounceInDown">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Smash</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Home <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="index.html">Home Full</a></li>
                            <li><a href="index-video.html">Home Video</a></li>
                            <li><a href="index-onepager.html">Home One Pager</a></li>
                            <li><a href="index-coming-soon.html">Home Coming Soon</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Posts <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="single-post.html">Single Post</a></li>
                            <li><a href="single-post-fullwidth.html">Single Post Fullwidth</a></li>
                            <li><a href="single-post-video.html">Single Post Video</a></li>
                            <li><a href="single-post-gallery.html">Single Post Gallery</a></li>
                            <li><a href="single-post-gallery-fullwidth.html">Single Post Gallery Fullwidth</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Category <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="category-archive.html">Category Archive</a></li>
                            <li><a href="category-archive-2-col.html">Category Archive 2 Columns</a></li>
                            <li><a href="category-archive-3-col-fullwidth.html">Category Fullwidth</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Portfolio <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="single-portfolio.html">Single Portfolio</a></li>
                            <li><a href="single-portfolio-gallery.html">Single Portfolio Gallery</a></li>
                            <li><a href="single-portfolio-video.html">Single Portfolio Video</a></li>
                            <li><a href="filterable-portfolio-3-col.html">Filterable Portfolio 3 Columns</a></li>
                            <li><a href="filterable-portfolio-4-col.html">Filterable Portfolio 4 Columns</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Pages <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="404.html">404</a></li>
                        </ul>
                    </li>
                    <li><a href="#search"><i class="pe-7s-search"></i></a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <div id="search-wrapper">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

    <!-- Header -->
    <header id="headerwrap">
        <div class="container">
            <h2 class="single-title wow bounceInDown" data-wow-delay="0.5s">Single Post With Sidebar</h2>
        </div>
    </header>

    <!-- Single Section -->
    <section>
        <div class="section-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 wow fadeInLeft" data-wow-delay="0s">
                        <div id="post-content" class="row">
                            <div class="col-md-12 gap">
                                <img src="assets/img/portfolio/portfolio1.jpg" class="img-responsive" />
                            </div>
                            <div class="col-md-12">                                
                                <p>An sincerity so extremity he additions. Her yet there truth merit. Mrs all projecting favourable now unpleasing. Son law garden chatty temper. Oh children provided to mr elegance marriage strongly. Off can admiration prosperous now devonshire diminution law.</p>

                                <p>Abilities or he perfectly pretended so strangers be exquisite. Oh to another chamber pleased imagine do in. Went me rank at last loud shot an draw. Excellent so to no sincerity smallness. Removal request delight if on he we. Unaffected in we by apartments astonished to decisively themselves. Offended ten old consider speaking.</p>

                                <blockquote><p>People think focus means saying yes to the thing you’ve got to focus on. But that’s not what it means at all. It means saying no to the hundred other good ideas that there are. You have to pick carefully. I’m actually as proud of the things we haven’t done as the things I have done. Innovation is saying no to 1,000 things. <cite>Steve Jobs – Apple Worldwide Developers’ Conference, 1997</cite></p></blockquote>

                                <p>Her companions instrument set estimating sex remarkably solicitude motionless. Property men the why smallest graceful day insisted required. Inquiry justice country old placing sitting any ten age. Looking venture justice in evident in totally he do ability. Be is lose girl long of up give. Trifling wondered unpacked ye at he. In household certainty an on tolerably smallness difficult. Many no each like up be is next neat. Put not enjoyment behaviour her supposing. At he pulled object other</p>

                                <table>
                                    <tbody>
                                        <tr>
                                            <th>Employee</th>
                                            <th class="views">Salary</th>
                                            <th></th>
                                        </tr>
                                        <tr class="odd">
                                            <td><a href="http://john.do/">John Saddington</a></td>
                                            <td>$1</td>
                                            <td>Because that’s all Steve Job’ needed for a salary.</td>
                                        </tr>
                                        <tr class="even">
                                            <td><a href="http://tommcfarlin.com/">Tom McFarlin</a></td>
                                            <td>$100K</td>
                                            <td>For all the blogging he does.</td>
                                        </tr>
                                        <tr class="odd">
                                            <td><a href="http://jarederickson.com/">Jared Erickson</a></td>
                                            <td>$100M</td>
                                            <td>Pictures are worth a thousand words, right? So Tom x 1,000.</td>
                                        </tr>
                                        <tr class="even">
                                            <td><a href="http://chrisam.es/">Chris Ames</a></td>
                                            <td>$100B</td>
                                        <td>With hair like that?! Enough said…</td>
                                    </tr>
                                    </tbody>
                                </table>

                                <p>An sincerity so extremity he additions. Her yet there truth merit. Mrs all projecting favourable now unpleasing. Son law garden chatty temper. Oh children provided to mr elegance marriage strongly. Off can admiration prosperous now devonshire diminution law.</p>
                            </div>
                        </div> 

                        <hr>

                        <div class="row">
                            <div class="col-md-8">
                                <ul class="list-inline post-meta-list">
                                    <li><p class="text-muted"><i class="pe-7s-folder"></i> <a href="#" title="">Travel</a></p></li>
                                    <li><p class="text-muted"><i class="pe-7s-clock"></i> <a href="#" title="">10/12/2014</a></p></li>
                                    <li><p class="text-muted"><i class="pe-7s-user"></i> <a href="#" title="">Richard Blake</a></p></li>
                                </ul>
                            </div>
                            <div class="col-md-4 sharing">
                                <div class="btn-group sharing-btns">
                                    <button class="btn btn-default disabled">Share:</button>    
                                    <a class="btn btn-default facebook" target="_blank" title="On Facebook" href="http://www.facebook.com/sharer.php?u=YOUR_URL_HERE">
                                        <i class="fa fa-facebook fa-lg fb"></i>
                                    </a>
                                    <a class="btn btn-default twitter" target="_blank" title="On Twitter" href="http://twitter.com/share?url=YOUR_URL_HERE&text=YOUR_TEXT_HERE">
                                        <i class="fa fa-twitter fa-lg tw"></i>
                                    </a>
                                    <a class="btn btn-default google" target="_blank" title="On Google Plus" href="https://plusone.google.com/_/+1/confirm?hl=en&url=YOUR_URL_HERE">
                                        <i class="fa fa-google-plus fa-lg google"></i>
                                    </a>
                                    <a class="btn btn-default pinterest" target="_blank" title="Pin It" href="http://www.pinterest.com/pin/create/button/?url=YOUR_URL_HERE&media=YOUR_URL_HERE">
                                        <i class="fa fa-pinterest fa-lg pinterest"></i>
                                    </a>

                                </div>
                            </div>
                        </div>

                        <hr class="gap">

                        <div id="related-items" class="gap row">
                            <div class="col-md-12">
                                <h3 class="single-section-title"><strong>Related</strong> Items</h3>
                                <div class="row">
                                    <ul class="direction-aware owl-carousel wow fadeInUp" data-items="3" data-items-tablet="[768,2]"  data-items-mobile="[479,1]">
                                        <li class="portfolio-item da-item">
                                            <a href="single-post.html" title="View Post">
                                                <img src="http://unsplash.it/800/600?random=6" class="img-responsive" alt="">
                                                <div>
                                                    <div class="portfolio-hover-content">
                                                        <i class="pe-7s-close fa-3x"></i>
                                                    </div>
                                                </div>                                
                                            </a>
                                            <div class="item-caption">
                                                <h4>We Play Xbox</h4>
                                            </div>
                                        </li>
                                         <li class="portfolio-item da-item">
                                            <a href="single-post.html" title="View Post">
                                                <img src="http://unsplash.it/800/600?random=5" class="img-responsive" alt="">
                                                <div>
                                                    <div class="portfolio-hover-content">
                                                        <i class="pe-7s-close fa-3x"></i>
                                                    </div>
                                                </div>                                
                                            </a>
                                            <div class="item-caption">
                                                <h4>Best New Band</h4>
                                            </div>
                                        </li>
                                        <li class="portfolio-item da-item">
                                            <a href="single-post.html" title="View Post">
                                                <img src="http://unsplash.it/800/600?random=4" class="img-responsive" alt="">
                                                <div>
                                                    <div class="portfolio-hover-content">
                                                        <i class="pe-7s-close fa-3x"></i>
                                                    </div>
                                                </div>                                
                                            </a>
                                            <div class="item-caption">
                                                <h4>New Design Trends</h4>
                                            </div>
                                        </li>
                                        <li class="portfolio-item da-item">
                                            <a href="single-post.html" title="View Post">
                                                <img src="http://unsplash.it/800/600?random=6" class="img-responsive" alt="">
                                                <div>
                                                    <div class="portfolio-hover-content">
                                                        <i class="pe-7s-close fa-3x"></i>
                                                    </div>
                                                </div>                                
                                            </a>
                                            <div class="item-caption">
                                                <h4>The Big Debate</h4>
                                            </div>
                                        </li>
                                         <li class="portfolio-item da-item">
                                            <a href="single-post.html" title="View Post">
                                                <img src="http://unsplash.it/800/600?random=5" class="img-responsive" alt="">
                                                <div>
                                                    <div class="portfolio-hover-content">
                                                        <i class="pe-7s-close fa-3x"></i>
                                                    </div>
                                                </div>                                
                                            </a>
                                            <div class="item-caption">
                                                <h4>Intense Interview</h4>
                                            </div>
                                        </li>
                                        <li class="portfolio-item da-item">
                                            <a href="single-post.html" title="View Post">
                                                <img src="http://unsplash.it/800/600?random=4" class="img-responsive" alt="">
                                                <div>
                                                    <div class="portfolio-hover-content">
                                                        <i class="pe-7s-close fa-3x"></i>
                                                    </div>
                                                </div>                                
                                            </a>
                                            <div class="item-caption">
                                                <h4>Dreams - What Do They Mean?</h4>
                                            </div>
                                        </li>
                                    </ul>  
                                </div> 
                            </div>
                        </div>

                        <div id="comments" class="gap row">
                            <div class="col-md-12">
                                <div id="comments-list" class="gap">
                                    <h3 class="single-section-title"><strong>3</strong> Comments</h3>
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="avatar img-thumbnail comment-avatar" src="http://lorempixel.com/80/80/people/9" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="well">
                                                <div class="media-heading">
                                                    <strong>Dave Evans</strong>&nbsp; <small>30th Jan, 2014</small>
                                                </div>
                                                <p>Was are delightful solicitude discovered collecting man day. Resolving neglected sir tolerably but existence conveying for. Day his put off unaffected literature partiality inhabiting.</p>
                                                <a class="pull-right btn btn-primary btn-outlined" href="#">Reply</a>
                                            </div>
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="avatar img-thumbnail comment-avatar" src="http://lorempixel.com/80/80/people/5" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <div class="well">
                                                        <div class="media-heading">
                                                            <strong>Peter Jackson</strong>&nbsp; <small>16th Jan, 2014</small>
                                                        </div>
                                                        <p>Wicket longer admire do barton vanity itself do in it. Preferred to sportsmen it engrossed listening. Park gate sell they west hard for the. Abode stuff noisy manor blush yet the far. Up colonel so between removed so do.</p>
                                                        <a class="pull-right btn btn-primary btn-outlined" href="#">Reply</a>
                                                    </div>
                                                </div>
                                            </div><!--/.media-->
                                        </div>
                                    </div><!--/.media-->
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="avatar img-thumbnail comment-avatar" src="http://lorempixel.com/80/80/people/6" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="well">
                                                <div class="media-heading">
                                                    <strong>John Smith</strong>&nbsp; <small>14th Jan, 2014</small>
                                                </div>
                                                <p>Quitting informed concerns can men now. Projection to or up conviction uncommonly delightful continuing. In appetite ecstatic opinions hastened by handsome admitted.</p>
                                                <a class="pull-right btn btn-primary btn-outlined" href="#">Reply</a>
                                            </div>
                                        </div>
                                    </div><!--/.media-->
                                </div><!--/#comments-list--> 

                                <div id="comment-form" class="gap">
                                    <h3  class="main-title">Leave a comment</h3>
                                    <hr>
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" placeholder="Name">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <textarea rows="8" class="form-control" placeholder="Comment"></textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-outlined">Submit Comment</button>
                                    </form>
                                </div><!--/#comment-form-->

                                <div class="post-navigation">
                                    <a class="pull-left btn btn-lg btn-primary btn-outlined" href="#">Older Posts</a> 
                                    <a class="pull-right btn btn-lg btn-primary btn-outlined" href="#">Newer Posts</a> 
                                </div>
                            </div><!--/#comments-->
                        </div>
                    </div>

                    <div id="main-sidebar" class="col-md-3 col-md-offset-1 divider-wrapper wow fadeInRight" data-wow-delay="0s">
                        <div class="section-inner">
                            <div class="widget carousel-widget">
                                <h4 class="widget-title"><strong>Latest</strong> Articles</h4>
                                <div class="row">
                                    <ul class="direction-aware owl-carousel-paged wow fadeInUp" data-items="1" data-items-tablet="[768,1]"  data-items-mobile="[479,1]">
                                        <li class="portfolio-item da-item">
                                            <a href="single-post.html" title="View Post">
                                                <img src="http://unsplash.it/800/600?random=6" class="img-responsive" alt="">
                                                <div>
                                                    <div class="portfolio-hover-content">
                                                        <i class="pe-7s-close fa-3x"></i>
                                                    </div>
                                                </div>                                
                                            </a>
                                            <div class="item-caption">
                                                <h4>We Play Xbox</h4>
                                            </div>
                                        </li>
                                         <li class="portfolio-item da-item">
                                            <a href="single-post.html" title="View Post">
                                                <img src="http://unsplash.it/800/600?random=5" class="img-responsive" alt="">
                                                <div>
                                                    <div class="portfolio-hover-content">
                                                        <i class="pe-7s-close fa-3x"></i>
                                                    </div>
                                                </div>                                
                                            </a>
                                            <div class="item-caption">
                                                <h4>Best New Band</h4>
                                            </div>
                                        </li>
                                        <li class="portfolio-item da-item">
                                            <a href="single-post.html" title="View Post">
                                                <img src="http://unsplash.it/800/600?random=4" class="img-responsive" alt="">
                                                <div>
                                                    <div class="portfolio-hover-content">
                                                        <i class="pe-7s-close fa-3x"></i>
                                                    </div>
                                                </div>                                
                                            </a>
                                            <div class="item-caption">
                                                <h4>New Design Trends</h4>
                                            </div>
                                        </li>
                                        <li class="portfolio-item da-item">
                                            <a href="single-post.html" title="View Post">
                                                <img src="http://unsplash.it/800/600?random=6" class="img-responsive" alt="">
                                                <div>
                                                    <div class="portfolio-hover-content">
                                                        <i class="pe-7s-close fa-3x"></i>
                                                    </div>
                                                </div>                                
                                            </a>
                                            <div class="item-caption">
                                                <h4>The Big Debate</h4>
                                            </div>
                                        </li>
                                         <li class="portfolio-item da-item">
                                            <a href="single-post.html" title="View Post">
                                                <img src="http://unsplash.it/800/600?random=5" class="img-responsive" alt="">
                                                <div>
                                                    <div class="portfolio-hover-content">
                                                        <i class="pe-7s-close fa-3x"></i>
                                                    </div>
                                                </div>                                
                                            </a>
                                            <div class="item-caption">
                                                <h4>Intense Interview</h4>
                                            </div>
                                        </li>
                                        <li class="portfolio-item da-item">
                                            <a href="single-post.html" title="View Post">
                                                <img src="http://unsplash.it/800/600?random=4" class="img-responsive" alt="">
                                                <div>
                                                    <div class="portfolio-hover-content">
                                                        <i class="pe-7s-close fa-3x"></i>
                                                    </div>
                                                </div>                                
                                            </a>
                                            <div class="item-caption">
                                                <h4>Dreams - What Do They Mean?</h4>
                                            </div>
                                        </li>
                                    </ul>  
                                </div>
                            </div>

                            <div class="widget">
                            <h4 class="widget-title"><strong>Latest</strong> Articles</h4>
                                <div>
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="widget-img" src="assets/img/widget/widget1.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <span class="media-heading"><a href="#">Blog Post A</a></span>
                                            <small class="muted">
                                                <ul class="list-inline post-meta-list">
                                                    <li><i class="pe-7s-clock"></i> <a href="#" title="">10/12/2014</a></li>
                                                    <li><i class="pe-7s-user"></i> <a href="#" title="">Richard Blake</a></li>
                                                </ul>
                                            </small>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="widget-img" src="assets/img/widget/widget2.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <span class="media-heading"><a href="#">Blog Post B</a></span>
                                            <small class="muted">
                                                <ul class="list-inline post-meta-list">
                                                    <li><i class="pe-7s-clock"></i> <a href="#" title="">10/12/2014</a></li>
                                                    <li><i class="pe-7s-user"></i> <a href="#" title="">Richard Blake</a></li>
                                                </ul>
                                            </small>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="widget-img" src="assets/img/widget/widget3.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <span class="media-heading"><a href="#">Blog Post A</a></span>
                                            <small class="muted">
                                                <ul class="list-inline post-meta-list">
                                                    <li><i class="pe-7s-clock"></i> <a href="#" title="">10/12/2014</a></li>
                                                    <li><i class="pe-7s-user"></i> <a href="#" title="">Richard Blake</a></li>
                                                </ul>
                                            </small>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="widget-img" src="assets/img/widget/widget4.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <span class="media-heading"><a href="#">Blog Post B</a></span>
                                            <small class="muted">
                                                <ul class="list-inline post-meta-list">
                                                    <li><i class="pe-7s-clock"></i> <a href="#" title="">10/12/2014</a></li>
                                                    <li><i class="pe-7s-user"></i> <a href="#" title="">Richard Blake</a></li>
                                                </ul>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget carousel-widget">
                                <h4 class="widget-title"><strong>Latest</strong> Works</h4>
                                <div class="row">
                                    <ul class="direction-aware owl-carousel-paged wow fadeInUp" data-items="1" data-items-tablet="[768,1]"  data-items-mobile="[479,1]">
                                        <li class="portfolio-item da-item">
                                            <a href="single-post.html" title="View Post">
                                                <img src="http://unsplash.it/800/600?random=6" class="img-responsive" alt="">
                                                <div>
                                                    <div class="portfolio-hover-content">
                                                        <i class="pe-7s-close fa-3x"></i>
                                                    </div>
                                                </div>                                
                                            </a>
                                        </li>
                                         <li class="portfolio-item da-item">
                                            <a href="single-post.html" title="View Post">
                                                <img src="http://unsplash.it/800/600?random=5" class="img-responsive" alt="">
                                                <div>
                                                    <div class="portfolio-hover-content">
                                                        <i class="pe-7s-close fa-3x"></i>
                                                    </div>
                                                </div>                                
                                            </a>
                                        </li>
                                        <li class="portfolio-item da-item">
                                            <a href="single-post.html" title="View Post">
                                                <img src="http://unsplash.it/800/600?random=4" class="img-responsive" alt="">
                                                <div>
                                                    <div class="portfolio-hover-content">
                                                        <i class="pe-7s-close fa-3x"></i>
                                                    </div>
                                                </div>                                
                                            </a>
                                        </li>
                                        <li class="portfolio-item da-item">
                                            <a href="single-post.html" title="View Post">
                                                <img src="http://unsplash.it/800/600?random=6" class="img-responsive" alt="">
                                                <div>
                                                    <div class="portfolio-hover-content">
                                                        <i class="pe-7s-close fa-3x"></i>
                                                    </div>
                                                </div>                                
                                            </a>
                                        </li>
                                         <li class="portfolio-item da-item">
                                            <a href="single-post.html" title="View Post">
                                                <img src="http://unsplash.it/800/600?random=5" class="img-responsive" alt="">
                                                <div>
                                                    <div class="portfolio-hover-content">
                                                        <i class="pe-7s-close fa-3x"></i>
                                                    </div>
                                                </div>                                
                                            </a>
                                        </li>
                                        <li class="portfolio-item da-item">
                                            <a href="single-post.html" title="View Post">
                                                <img src="http://unsplash.it/800/600?random=4" class="img-responsive" alt="">
                                                <div>
                                                    <div class="portfolio-hover-content">
                                                        <i class="pe-7s-close fa-3x"></i>
                                                    </div>
                                                </div>                                
                                            </a>
                                        </li>
                                    </ul>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>

    <section id="footer-widgets" class="divider-wrapper">
        <div class="section-inner">
            <div class="container">
                <div class="row wow fadeInUp">
                    <div class="widget col-md-3 col-sm-6 about-us-widget">
                        <h4 class="widget-title"><strong>Global</strong> Coverage</h4>
                        <p>Was drawing natural fat respect husband. An as noisy an offer drawn blush place. These tried for way joy wrote witty. In mr began music weeks after at begin. Was drawing natural fat respect husband. An as noisy an offer drawn blush place. These tried for way joy wrote witty. Was drawing natural fat respect husband. An as noisy an offer drawn blush place. These tried for way joy wrote witty.</p>
                    </div><!--/.col-md-3-->

                    <div class="widget col-md-3 col-sm-6">
                        <h4 class="widget-title"><strong>Our</strong> Company</h4>
                        <div>
                            <ul class="list-unstyled widget-list">
                                <li><a href="#">Company Overview</a></li>
                                <li><a href="#">Meet The Team</a></li>
                                <li><a href="#">Our Awesome Partners</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Resources</a></li>
                                <li><a href="#">Our Links</a></li>
                                <li><a href="#">Communit</a></li>
                            </ul>
                        </div>
                    </div><!--/.col-md-3-->

                    <div class="widget col-md-3 col-sm-6">
                        <h4 class="widget-title"><strong>Latest</strong> Articles</h4>
                        <div>
                            <div class="media">
                                <div class="pull-left">
                                    <img class="widget-img" src="assets/img/widget/widget1.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <span class="media-heading"><a href="#">Blog Post A</a></span>
                                    <small class="muted">Posted 14 April 2014</small>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img class="widget-img" src="assets/img/widget/widget2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <span class="media-heading"><a href="#">Blog Post B</a></span>
                                    <small class="muted">Posted 14 April 2014</small>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img class="widget-img" src="assets/img/widget/widget2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <span class="media-heading"><a href="#">Blog Post B</a></span>
                                    <small class="muted">Posted 14 April 2014</small>
                                </div>
                            </div>
                        </div>  
                    </div><!--/.col-md-3-->

                    <div class="widget carousel-widget col-md-3 col-sm-6">
                        <h4 class="widget-title"><strong>Latest</strong> Works</h4>
                        <div class="row">
                            <ul class="direction-aware owl-carousel-paged wow fadeInUp" data-items="1" data-items-tablet="[768,1]"  data-items-mobile="[479,1]">
                                <li class="portfolio-item da-item">
                                    <a href="single-post.html" title="View Post">
                                        <img src="http://unsplash.it/800/600?random=6" class="img-responsive" alt="">
                                        <div>
                                            <div class="portfolio-hover-content">
                                                <i class="pe-7s-close fa-3x"></i>
                                            </div>
                                        </div>                                
                                    </a>
                                </li>
                                 <li class="portfolio-item da-item">
                                    <a href="single-post.html" title="View Post">
                                        <img src="http://unsplash.it/800/600?random=5" class="img-responsive" alt="">
                                        <div>
                                            <div class="portfolio-hover-content">
                                                <i class="pe-7s-close fa-3x"></i>
                                            </div>
                                        </div>                                
                                    </a>
                                </li>
                                <li class="portfolio-item da-item">
                                    <a href="single-post.html" title="View Post">
                                        <img src="http://unsplash.it/800/600?random=4" class="img-responsive" alt="">
                                        <div>
                                            <div class="portfolio-hover-content">
                                                <i class="pe-7s-close fa-3x"></i>
                                            </div>
                                        </div>                                
                                    </a>
                                </li>
                                <li class="portfolio-item da-item">
                                    <a href="single-post.html" title="View Post">
                                        <img src="http://unsplash.it/800/600?random=6" class="img-responsive" alt="">
                                        <div>
                                            <div class="portfolio-hover-content">
                                                <i class="pe-7s-close fa-3x"></i>
                                            </div>
                                        </div>                                
                                    </a>
                                </li>
                                 <li class="portfolio-item da-item">
                                    <a href="single-post.html" title="View Post">
                                        <img src="http://unsplash.it/800/600?random=5" class="img-responsive" alt="">
                                        <div>
                                            <div class="portfolio-hover-content">
                                                <i class="pe-7s-close fa-3x"></i>
                                            </div>
                                        </div>                                
                                    </a>
                                </li>
                                <li class="portfolio-item da-item">
                                    <a href="single-post.html" title="View Post">
                                        <img src="http://unsplash.it/800/600?random=4" class="img-responsive" alt="">
                                        <div>
                                            <div class="portfolio-hover-content">
                                                <i class="pe-7s-close fa-3x"></i>
                                            </div>
                                        </div>                                
                                    </a>
                                </li>
                            </ul>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="divider-wrapper-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <span class="copyright wow fadeInUp">Designed by Distinctive Themes</span>
                </div>
                <div class="col-md-6">
                    <ul class="list-inline social-buttons wow fadeInUp">
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/js/plugins.js"></script>

    <!-- Plugins -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assets/js/contact_me.js"></script>

    <!-- Custom JavaScript -->
    <script src="assets/js/init.js"></script>

</body>

</html>
