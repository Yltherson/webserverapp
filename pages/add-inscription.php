<?php include "navbar.php" ?>
<section class="ajoutInscri active">
        <!-- ajouter -->
        <div class="block">
            <h3>Ajouter une Inscription</h3>
            <form action="controllers\ajoutInscription.php" method='POST'>
                <label for="pnom">prenom</label>
                <input type="text" id="pnom" name="prenom" placeholder="Your first name.." required>

                <label for="nom">nom</label>
                <input type="text" id="nom" name="nom" placeholder="Your last name.." required>

                <label for="sex">Sexe</label>
                <select name="sexe" id="sex">
                    <option value="masculin">Masculin</option>
                    <option value="feminin">Feminin</option>
                </select><br><br>

                <label for="birth">Date de naissance</label>
                <input type="date" id="birth" name="dateNaissance" placeholder="Your birthday.." required><br>
                
                <label for="class">Classe </label>
                <select name="classe" id="class">
                    <option value="L1">L1</option>
                    <option value="L2">L2</option>
                    <option value="L3">L3</option>
                    <option value="L4">L4</option>
                </select><br><br>

                <label for="sub">Frais inscription</label>
                <input type="number" id="sub" name="fraisInscription" placeholder="Your fee.." required><br><br>

                <label for="date">Date d'inscription</label>
                <input type="date" id="date" name="dateInscription" placeholder="signup date.." required><br>
            
                <input type="submit" name="submit" value="Ajouter">
            </form>
        </div>
    </section><br>