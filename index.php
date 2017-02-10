<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>TP SI6</title>
        <link rel="stylesheet" href="assets/css/bootstrap.css">
    </head>
    <body>
        
        test xavier 
        
	<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
            </ul>
        </div><!--/.nav-collapse -->
      </div>
	          
                    <?php
                     // test sur l'existance du paramètre action d'l'URL
                    if(isset($_GET["action"]))
                    {
                            // récupartion de l'action passée dans l'url
                            $action=$_GET["action"];
                            // test de la valeur de la variable
                            switch ($action) {
                                case "accueil":
                                    include 'index.php';
                                    break;
                                case "classeActuelle":
                                    include ('view/classeActuelle.php');
                                    
                                    break;
                                case "adminEleve":
                                    include 'view/adminEleve.php';
                                    break;
								case "adminClasse":
                                    include 'view/adminClasse.php';
                                    break;
                                case "adminSanction":
                                    include 'view/adminCritSanction.php';
                                    break;
                                case "historiqueColle":
									include 'view/colleHistorique.php';
                                    break;
                                default:
                                    include 'view/accueil.php';
                                    break;
								case "adminProf":
									include 'view/adminProf.php';
                                    break;
                            }
                    }
                    else
                    {
                         include 'index.php';
                    }
                   ?>
            <div style="float: right">
             <p class="navbar-text"><ul class="nav navbar-nav">
                 <li><a href="index.php?action=accueil">Accueil</a></li>
                        <li><a href="index.php?action=compte">Mon compte</a></li>
			<li><a href="index.php?action=about">A propos de...</a></li>
          </ul>
        </p>
            </div>
    </nav>
      <div style="margin-top: -21px">
      <div class="container">
        <div id="navbar" class="collapse navbar-collapse">
            <table>
            <tr class="nav navbar-nav">
              <td style="border: 1px solid black; padding: 20px"><a href="index.php?action=classeActuelle"><center><img src="Classe_Actuelle.png" width="100px" height="100px"/><br/>Classe Actuelle</a></td></center>
              <td style="border: 1px solid black; padding: 20px"><a href="index.php?action=historiqueColle"><center><img src="Historique_Des_Colles.png" width="100px" height="100px"/><br/>Historique des colles</a></td></center>
              <td style="border: 1px solid black; padding: 20px"><a href="index.php?action=adminEleve"><center><img src="Admin_Eleve.png" width="100px" height="100px"/><br/>Administration des &eacutel&egrave;ves</a></td></center>
              <td style="border: 1px solid black; padding: 20px"><a href="index.php?action=adminClasse"><center><img src="Admin_Classe.png" width="100px" height="100px"/><br/>Administration des classes</a></td></center>
              <td style="border: 1px solid black; padding: 20px"><a href="index.php?action=adminSanction"><center><img src="Admin_Sanction.png" width="100px" height="100px"/><br/>Administration des crit&egrave;res de sanctions</a></td></center>
              <td style="border: 1px solid black; padding: 20px"><a href="index.php?action=adminProf"><center><img src="Admin_Users.png" width="100px" height="100px"/><br/>Administration des utilisateurs</a></td></center>
          </tr>
            </table>
        </div>
      </div>
    </div>

       
    </body>
</html>
