<?php 
 require "page.php";
  require "./files/functions.php";
  $formation= [];
$formation = listFormations();
 echo "<pre>";


?>

 <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-tools">
                        <a href="" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i></a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-sm table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Type de formations</th>
                            <th>Date de création</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($formation as $o) :?>
                            <tr>
                            <td><?=$o['title']?></td><td><?=$o['type']?></td>
                                <td><?=$o['created_at']?></td>
                     
                                <td class="text-center">
                                    <a href="" class="btn btn-info mr-1"><i class="fa fa-info"></i></a>
                                    <a href="" class="btn btn-primary mt-1"><i class="fa fa-edit"></i></a>
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
 
