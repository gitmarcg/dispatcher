<head>
<meta charset="utf-8">
<title>Log-In</title>
<link href="css/style.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <div class="card card-container">
        <img id="profile-img" class="profile-img-card" src="images/LogoLong.jpg?sz=120" alt="" />
          <?php
          switch($_GET['erreur'])
          {
             case '001':
                echo ' 001 - Ce Pseudo est vide ou invalide  <br/>';
             break;
             case '002':
                echo ' 002 - Ce Pseudo n\'exist pas dans notre base de données  <br/>';
             break;
              case '003':
                echo ' 003 - Mot de passe invalide  <br/>';
             break;
             case '004':
                echo ' 004 - Vous devez être connecté <br/>';
             break;   
             case '005':
                echo ' 005 - Le Pseudo entré n\'est pas valide ou inexistant !<br/>';
             break;   
             case '006':
                echo ' 006 - Le numéro de client n\'est pas valide ou inexistant ! <br/>';
             break;  
             case '007':
                echo ' 007 - Votre compte n\'est pas encore activé par notre servcice technique <br/>';
             break; 
              case '008':
                echo ' 008 - Attention votre compte n\'a pas de Numéro de compagnie attribuer par notre servcice technique <br/>';
               case '009':
                echo ' 009 - Attention votre compte n\'est pas autoriser dans cette section : Merci <br/>';  
             break;                  
             default:
             echo 'Erreur !';
          }
          ?>
         <a href="index.php" class="forgot-password">
                Retour au menu connexion         <br/>
        </a>    
        </div><!-- /card-container -->
    </div><!-- /container -->

</body>
</html>

