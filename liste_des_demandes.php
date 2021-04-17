
<div class="container">
		 <h3>Liste des demandes</h3>
        <table class="table table-primary">
            <tr class="table">
			<thead>
                <th>Nom</th>
                <th>Prenom</th>
                <th>cycle</th>
                <th>établissement</th>
				<th>Commune</th>
                <th>Numéro de rang</th>
				<th>cadre</th>
                <th>Email</th>
				<th>Type de formation</th>
			
            </tr>
			</thead>
			<tbody>
            <?php foreach($students as $s): ?>
			
            <tr>
			    <td><?=$s["nom"] ?></td>
                <td><?=$s["prenom"] ?></td>
                <td><?=$s["cycle"] ?></td>
                <td><?=$s["établissement"] ?></td>
                <td><?=$s["commune"] ?></td>
                <td><?=$s["numéro_de_rang"] ?></td>
			    <td><?=$s["cadre"] ?></td>
			    <td><?=$s["email"] ?></td>
            </tr>
        <?php endforeach;?>
		<tbody>
        </table>
    </div>
