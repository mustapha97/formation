<?php 
 require "page.php";
  require "./files/functions.php";
  $demande = [];
$demande = listDemande();
 echo "<pre>";


?>
<div class="row">
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-sm table-bordered table-striped">
                        <thead>
                        <tr>
                            
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Cycle</th>
                            <th>établissement</th>
							<th>Commune</th>
							<th>rang_number</th>
							<th>crade</th>
							<th>Email</th>
							<th>Type de formation</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($demande as $d) :?>
                            <tr>
                    
                                <td><?=$d['nom']?></td>
                                <td><?=$d['prenom']?></td>
                                <td><?=$d['cycle']?></td>
								<td><?=$d['établissement']?></td>
                                <td><?=$d['cycle']?></td>
                                <td><?=$d['rang_number']?></td>
								<td><?=$d['crade']?></td>
                                <td><?=$d['email']?></td>
								<td><?=$d['Type de formation']?></td>
                                <td class="text-center">
                                    <a onclick="" class="btn btn-danger mt-1"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach ;?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
 
