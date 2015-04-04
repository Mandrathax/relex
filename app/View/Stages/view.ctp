
<div class="container">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $stage['Stage']['entreprise'];?> &middot; <?php echo $stage['Stage']['mission'];?></div>
            
            <ul class="list-group">
                <li class="list-group-item">Fait par : <a href="https://www.frankiz.net/tol/see/<?php echo lcfirst($stage['Stage']['prenom']).'.'.lcfirst($stage['Stage']['nom']);?>"><?php echo ucfirst($stage['Stage']['prenom']).' '.ucfirst($stage['Stage']['nom']);?></a></li>
                <li class="list-group-item">Promo : <?php echo $stage['Stage']['promo'];?></li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
            <div class="panel-body">
                <p>Stage réalisé par</p>
            </div>
        </div>
    </div>
</div>
