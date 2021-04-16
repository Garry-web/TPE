<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Happy Free Friends</title>
</head>
<body>


<div id="hautdepage">

    <div id="haut">    
        <h1>Happy Free Friends</h1>
    </div>

    <div id="perso">
    <p>Fiche de la personne co à ajouter en php</p>
  <div id="conex">
    <a href="connexion.php" class="actif">Connexion</a>
  </div>
</div>

    <div id="soustitre">
        <p>Votre comité d'entreprise depuis 2001<p>
    </div>


<ul class="menu">
              <li>
                <a href="index.php" class="actif">Accueil</a>
              </li>
              <li>
                <a href="parcs.php">Les parcs</a>
              </li>
              <li>
                <a href="cinema.php">Cinéma</a>
              </li>
              <li>
                <a href="boutique.php">Boutiques</a>
              </li>
        </ul>
</div>

<div id="conteneura">

</br></br></br></br></br></br>
</br></br></br>

<div id="container">
            <!-- zone de connexion -->
            
            <form action="verification.php" method="POST">
                <h2>Connexion</h2>
                </br>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='Connexion' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
        </form>
    </div>


</br></br></br></br></br></br>
</br></br></br>



</div>



    <div id="foot">
        <div id="enhaut">
        <a href="#haut">Retour en haut de la page</a>
        </div>
    </div>

</body>
</html>