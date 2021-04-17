
<div class="container">
		 <h3>Liste des demandes</h3>
    <h4><a href="Liste_des_demandes_pdf.php" class="btn btn-primary btn-lg"><i class="fa fa-file-pdf-o"></i>Liste des demandes</a></h4>
        <table class="table table-primary">
            <tr class="table-light">
			<thead>
                <th>Nom</th>
                <th>Prenom</th>
                <th>sycle</th>
                <th>établissement</th>
				<th>Commune</th>
                <th>Numéro de rang</th>
				<th>Le cadre</th>
                <th>Email</th>
				<th>Type de formation</th>
            </tr>
			</thead>
			<tbody>
            <?php foreach($students as $s): ?>
			
            <tr>
			    <td><?=$s["nom"] ?></td>
                <td><?=$s["prénom"] ?></td>
                <td><?=$s["sycle"] ?></td>
                <td><?=$s["établissement"] ?></td>
                <td><?=$s["commune"] ?></td>
                <td><?=$s["numéro de rang"] ?></td>
			    <td><?=$s["le cadre"] ?></td>
			    <td><?=$s["email"] ?></td>
            </tr>
        <?php endforeach;?>
		<tbody>
        </table>
    </div>