<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Relex -
		<?php echo $this->fetch('title'); ?>
        </title>
        <?php echo $this->Html->charset(); ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>FLATTY - Free Bootstrap 3 Landing Page</title>

        <?php
        echo $this->Html->meta('favicon','img/favicon.png',array('type' => 'icon'));
        echo $this->Html->css('bootstrap.min');
        echo $this->Html->css('bootflat.min');
        echo $this->Html->css('main');
        ?>

        <!-- Fonts from Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><b>RELEX</b></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/relex/fkz-login"><?php echo __('Accès polytechnicien');?></a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>

        <div id="headerwrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h1><?php echo __('Relations entreprises');?><br/>
                            <?php echo __('de la Kès');?></h1>
                        <h2><?php echo __('Bureau des élèves de l\'École polytechnique');?></h2>
                    </div><!-- /col-lg-6 -->
                    <div class="col-lg-6">
                        <?php echo $this->Html->image("logo_kes.png",array('class'=>'img-responsive'))?>
                    </div><!-- /col-lg-6 -->

                </div><!-- /row -->
            </div><!-- /container -->
        </div><!-- /headerwrap -->
        
        <?php echo $this->fetch('content'); ?>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <?php 
        echo $this->element('sql_dump'); 
        echo $this->Html->script('jquery-1.11.2.min');
        echo $this->Html->script('bootstrap.min');
        echo $this->Html->script('main');
        ?>
    </body>
</html>


