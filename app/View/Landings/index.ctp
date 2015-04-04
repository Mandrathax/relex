<div class="container" id='startchange'>
    <div class="row mt centered">
        <div class="col-lg-6 col-lg-offset-3">
            <h1><?php echo __('Présentez votre entreprise');?><br/><?php echo __('à l\'École polytechnique');?></h1>
            <h3><?php echo __('Découvrez nos offres d\'événements entreprise');?></h3>
        </div>
    </div><!-- /row -->

    <div class="row mt centered">
        <div class="col-lg-6">
                    <?php echo $this->Html->image("amphi.jpg",array('height'=>'180','class'=>'img-rounded'))?>
            <h4><?php echo __('Amphithéâtre de présentation');?></h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
        </div><!--/col-lg-6 -->

        <div class="col-lg-6">
                    <?php echo $this->Html->image("table-ronde.jpg",array('height'=>'180','class'=>'img-rounded'))?>
            <h4><?php echo __('Table ronde');?></h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>

        </div><!--/col-lg-6 -->
    </div><!-- /row -->
    <div class="row mt centered">
        <div class="col-lg-6">
                    <?php echo $this->Html->image("etude-cas.jpg",array('height'=>'180','class'=>'img-rounded'))?>
            <h4><?php echo __('Étude de cas');?></h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>

        </div><!--/col-lg-6 -->
        <div class="col-lg-6">
                    <?php echo $this->Html->image("petit-dej.jpg",array('height'=>'180','class'=>'img-rounded'))?>
            <h4><?php echo __('Petit déjeuner');?></h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>

        </div><!--/col-lg-6 -->
    </div><!-- /row -->
</div><!-- /container -->

<div class="container">
    <hr>
</div><!-- /container -->

<div class="container">
    <div class="row mt centered">
        <div class="col-lg-6 col-lg-offset-3">
            <h1><?php echo __('Devenez parrain d\'une promotion');?></h1>
            <h3><?php echo __('Soyez au coeur de la vie d\'une promotion, premier interlocuteur des élèves dans le monde de l\'entreprise');?></h3>
        </div>
    </div><!-- /row -->

    <! -- CAROUSEL -->
    <div class="row mt centered">
        <div class="col-lg-6 col-lg-offset-3">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                                <?php echo $this->Html->image("p01.png")?>
                    </div>
                    <div class="item">
                                <?php echo $this->Html->image("p02.png")?>
                    </div>
                    <div class="item">
                                <?php echo $this->Html->image("p03.png")?>
                    </div>
                </div>
            </div>			
        </div><!-- /col-lg-8 -->
    </div><!-- /row -->
</div><! --/container -->

<div class="container">
    <hr>
</div><!-- /container -->

<div class="container">
    <div class="row mt centered">
        <div class="col-lg-6 col-lg-offset-3">
            <h1><?php echo __('Contactez nous');?></h1>
            <h3>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h3>
        </div>
    </div><!-- /row -->

    <div class="row mt centered">
        <div class="col-lg-4">
                    <?php echo $this->Html->image("pic1.jpg",array('class'=>'img-circle','width'=>'140'))?>
            <h4>Michael Robson</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
            <p><i class="glyphicon glyphicon-send"></i> <i class="glyphicon glyphicon-phone"></i> <i class="glyphicon glyphicon-globe"></i></p>
        </div><!--/col-lg-4 -->

        <div class="col-lg-4">
                    <?php echo $this->Html->image("pic2.jpg",array('class'=>'img-circle','width'=>'140'))?>
            <h4>Pete Ford</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
            <p><i class="glyphicon glyphicon-send"></i> <i class="glyphicon glyphicon-phone"></i> <i class="glyphicon glyphicon-globe"></i></p>
        </div><!--/col-lg-4 -->

        <div class="col-lg-4">
                    <?php echo $this->Html->image("pic3.jpg",array('class'=>'img-circle','width'=>'140'))?>
            <h4>Angelica Finning</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
            <p><i class="glyphicon glyphicon-send"></i> <i class="glyphicon glyphicon-phone"></i> <i class="glyphicon glyphicon-globe"></i></p>
        </div><!--/col-lg-4 -->
    </div><!-- /row -->
</div><!-- /container -->

<div class="container">
    <hr>
    <div class="row centered">
        <div class="col-lg-6 col-lg-offset-3">
            <form class="form-inline" role="form">
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email address">
                </div>
                <button type="submit" class="btn btn-warning btn-lg">Invite Me!</button>
            </form>					
        </div>
        <div class="col-lg-3"></div>
    </div><!-- /row -->
    <hr>
    <p class="centered">Created by BlackTie.co - Attribution License 3.0 - 2013</p>
</div><!-- /container -->