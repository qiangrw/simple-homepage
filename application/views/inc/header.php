<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Homepage for Runwei Qiang">
    <meta name="author" content="Runwei Qiang">
    <link rel="icon" href="<?= base_url('images/favicon.ico') ?>">
    <title>Runwei::<?= $title ?></title>
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/simple-homepage.css') ?>" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?2fcea6afd1315fed5f881e0574095171";
            var s = document.getElementsByTagName("script")[0]; 
            s.parentNode.insertBefore(hm, s);
        })();
    </script>

</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= site_url('home') ?>">RUNWEI</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="<?= $active[1] ?>"><a href="<?= site_url('home/experience') ?>">Experience</a></li>
                <li class="<?= $active[2] ?>"><a href="<?= site_url('home/projects') ?>">Projects</a></li>
                <li class="<?= $active[3] ?>"><a href="<?= site_url('home/publications') ?>">Publications</a></li>
                <li class="<?= $active[4] ?>"><a href="<?= site_url('home/honors') ?>">Honors</a></li>
                <li><a href="<?= base_url('download/RunweiQiang_CV_EN.pdf') ?>">CV</a></li>
                <li><a href="http://blog.runwei.info">Blog</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
    </nav>

