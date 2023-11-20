<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Gestion des Etudiants </title>
      <link rel="stylesheet" href="style1.css">
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
    <div class="background-image"></div>
      <div class="btn">
         <span class="fas fa-bars"></span>
      </div>
      <nav class="sidebar">
         <div class="text">
            My Scolarity 
         </div>
         <ul>
            <li>
               <a href="#" class="feat-btn">Données 
               <span class="fas fa-caret-down first"></span>
               </a>
               <ul class="feat-show">
                <li><a href="gestionEtudiant.php">Gestion des étudiants</a></li>
                  <li><a href="#">Gestion des matières</a></li>
                  <li><a href="#">Gestion des classes</a></li>
                  <li><a href="#">Gestion des professeurs</a></li>
                  <li><a href="#">Gestion des départements</a></li>
                  <li><a href="#">Gestion des salles</a></li>
               </ul>
            </li>




            <li>
               <a href="#" class="serv-btn">Paramétrage
               <span class="fas fa-caret-down second"></span>
               </a>
               <ul class="serv-show">
                <li><a href="#">Paramétrage des notes</a></li>
                <li><a href="#">Paramétrage des taux d'absence</a></li>
                <li><a href="#">Mot de passe par défaut</a></li>
                <li><a href="#">Paramètre Iset-So</a></li>
               </ul>
            </li>


            <li>
                <a href="#" class="serv-btn">Notes et Moyennes
                <span class="fas fa-caret-down third"></span>
                </a>
                <ul class="serv-show">
                    <li><a href="#">Saisi des notes</a></li>
                    <li><a href="#">Calcul Moyenne Géneral </a></li>
                    <li><a href="#">Calcul des rangs</a></li>
                    <li><a href="#">Gestion de la session de Controle</a></li>
                </ul>
             </li>



             <li>
                <a href="#" class="serv-btn"> Discipline
                <span class="fas fa-caret-down second"></span>
                </a>
                <ul class="serv-show">
                    <li><a href="#">Saisi des Absences</a></li>
                    <li><a href="#">Calcul du taux d'absence par matiére</a></li>
                    <li><a href="#">Calcul du taux global d'absence</a></li>
                    <li><a href="#">Détail d'absence par étudiant</a></li>
                    <li><a href="#">Taux d'absence par classe</a></li>
                </ul>
             </li>


             <li>
                <a href="#" class="serv-btn"> Gestion Administratif
                <span class="fas fa-caret-down second"></span>
                </a>
                <ul class="serv-show">
                    <li><a href="#">Certificat d'inscription</a></li>
                    <li><a href="#">Attestation de présence</a></li>
                    <li><a href="#">Lettre d'admission</a></li>
                    <li><a href="#">Avis</a></li>
                    <li><a href="#">Registre par classe</a></li>
                    <li><a href="#">Registre par enseignant</a></li>
                    <li><a href="#">Attestation de réussite principale</a></li>
                    <li><a href="#">Attestation de réussite Controle</a></li>
                </ul>
             </li>



             <li>
                <a href="#" class="serv-btn"> Discipline
                <span class="fas fa-caret-down second"></span>
                </a>
                <ul class="serv-show">
                    <li><a href="#">Saisi des Absences</a></li>
                    <li><a href="#">Calcul du taux d'absence par matiére</a></li>
                    <li><a href="#">Calcul du taux global d'absence</a></li>
                    <li><a href="#">Détail d'absence par étudiant</a></li>
                    <li><a href="#">Taux d'absence par classe</a></li>
                </ul>
             </li>



         </ul>
      </nav>

      <script>
         $('.btn').click(function(){
           $(this).toggleClass("click");
           $('.sidebar').toggleClass("show");
         });
           $('.feat-btn').click(function(){
             $('nav ul .feat-show').toggleClass("show");
             $('nav ul .first').toggleClass("rotate");
           });
           $('.serv-btn').click(function(){
             $('nav ul .serv-show').toggleClass("show1");
             $('nav ul .second').toggleClass("rotate");
           });
           $('nav ul li').click(function(){
             $(this).addClass("active").siblings().removeClass("active");
           });
      </script>
      <div class="content">
        <h1>Gestion des Étudiants</h1>
        <table>
            <thead>
                <tr>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Connexion à la base de données (mettez vos informations de connexion)
                $servername = "localhost"; 
                $username = "root"; 
                $password = ""; 
                $dbname = "Projet_web";
                
                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("La connexion à la base de données a échoué : " . $conn->connect_error);
                }

                // Récupération des données des étudiants depuis la base de données
                $sql = "SELECT Matri, Nom, Prenom FROM Etudiant";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["Matri"] . "</td>";
                        echo "<td>" . $row["Nom"] . "</td>";
                        echo "<td>" . $row["Prenom"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "Aucun étudiant trouvé.";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
   </body>
</html>