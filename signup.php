<?php require_once "header.php";

if (isset($_POST['signup'])) {
	inscriptionEmployé($_POST['username'],$_POST['password'],($_POST["nom"]), ($_POST["prenom"]), ($_POST["cycle"]), ($_POST["établissement"]), ($_POST["commune"]),($_POST["cadre"]),($_POST["number_de_rang"]),($_POST["email"]));
} 
?>

    <div class="container" >
        <div class="row">
		<div class="col-lg-8 col-lg-offset-2">
		 <h3><i class="fa fa-user-circle-o"></i> Inscription</h3>
                <form action="signup.php" method="POST" autocomplete="off" >
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nom</label>
                                <input type="text" name="nom" class="form-control" placeholder="Nom">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Prénom</label>
                                <input type="text" name="prenom" class="form-control" placeholder="Prénom">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">cycle</label> 
                                 <select name="cycle" class="form-control" >
                            <option value="school">Ecole</option>
							<option value="college">collége</option>
                            <option value="high">lycée</option>
							</select>
                            </div>
                        </div>
                    </div>
                    <div class="row student">
                    
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">établissement</label>
                                <input type="text" name="établissement" class="form-control" placeholder="établissement">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Commune</label>
                               <select name="commune" class="form-control" >
                            <option value="Ouarzazate(Mun)</">Ouarzazate(Mun)</option>
							<option value="Taznakht(Min)">Taznakht(Min)</option>
                            <option value="Ait zineb">Ait zineb</option>
							<option value="Amerzgane">Amerzgane</option>
							<option value="Iznaguen">Iznaguen</option>
							<option value="Igrem N'ougdal">Igrem N'ougdal</option>
                            <option value="Khouzama">Khouzama</option>
							<option value="Ouisselsate">Ouisselsate</option>
							 <option value="Siroua">Siroua</option>
							<option value="Telouet">Telouet</option>
                            <option value="Tidli">Tidli</option>
							<option value="Ghassate">Ghassate</option>
							 <option value="Imi N'Oulaoune">Imi N'Oulaoune</option>
							<option value="Skoura Ahl EL Oust">Skoura Ahl EL Oust</option>
                            <option value="Tarmigt">Tarmigt</option>
							<option  value="Toundoute">Toundoute</option>
                        </select>
                            </div>
                        </div>
                    </div>
                    <!-- Student -->
                    <div class="row student">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Numéro de rang</label>
                                <input type="number" name="number_de_rang" class="form-control" placeholder="Numéro_de_rang"></input>
                            </div>
                        </div>
                    
					<div>
					<div class="col-md-6">
					<div class="form-group">
					<label for="">Le cadre</label>
					<select name="cadre" class="form-control" >
					<option selected value="Technique">Technique</option>
							<option selected value="Administrateur financier">Administrateur financier</option>
                            <option selected value="Les aides">Les aides</option>
							<option select value="professeur">Professeur</option>
							</select>
					</div>
					</div>
					</div>
                    <!-- utilisateur-->
                  <div class="form-group professeur">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email@taalim.ma" >
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username" >
                    </div>
                    <div class="form-group">
                        <label for="">Mot de passe : </label>
                        <input type="password" class="form-control" name="password" placeholder="Mot de passe" >
                    </div>
                    <div class="form-group">
                        <button type="submit" name="signup" class="btn btn-success btn-lg" > S'inscrire </button>
                    </div>
				
                    </div>
                </form>
            </div>

        </div>
    </div>
	</div>
