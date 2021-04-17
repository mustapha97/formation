<?php
require "header.php";



?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3><i class="fa fa-user-circle-o"></i> <?=$users["first_name"] ?> <?=$users["last_name"] ?></h3>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h4>cycle :<?= $users["cycle"]; ?></h4>
                        <h4>Email : <a target="_blank" href="mailto:<?=$users["email"]; ?>"><?= $users["email"]; ?></a></h4>
                        <h4>établissement : <?= $users["établissement"]; ?></h4>
                        <h4>Commune : <?= $users["Commune"]; ?></h4>
                    </div>
                </div>
            </div>
			
          </div>
 </div>		  
 </div> 