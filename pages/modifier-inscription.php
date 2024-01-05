<?php include "navbar.php" ?>
<section class="updateIns">
<!-- ------------------------------------------------------------------------------------------------------------------------- -->
        <div class="block">
            <h3>Modifier Inscription</h3>
            <form action="controllers\modifierInscription.php" method='POST'>
                <label for="nom">Prenom</label><br/>
                <input type="text" name="prenom" id="prenomUp" required/><br>
                
                <label for="nom">Nom</label><br/>
                <input type="text" name="nom"  id="nomUp" required/><br>

                <label for="birth">Date de naissance</label><br/>
                <input type="date" id="dateNaissanceUp" name="dateNaissance" placeholder="Your birthday.." required><br>

                <label for="birth">Date d'inscription</label><br/>
                <input type="date" id="dateInscriptionUp" name="dateInscription" placeholder="signup date.." required><br>

                <label for="sub">Frais inscription</label><br/>
                <input type="number" id="fraisInscriptionUp" name="fraisInscription" placeholder="Your fee.." required><br>

                <label for="class">Classe </label><br>
                <select name="classe" id="classUp">
                    <option value="L1">L1</option>
                    <option value="L2">L2</option>
                    <option value="L3">L3</option>
                    <option value="L4">L4</option>
                </select><br>
                
                <label for="sex">Sexe</label><br>
                <select name="sexe" id="sexeUp">
                    <option value="masculin">Masculin</option>
                    <option value="feminin">Feminin</option>
                </select><br>
                <input style="display:none;" name="code" id="codeUp" required/>

                <input type="submit" name="submit" value="Update">
                <button type="reset" name="submit">Cancel</button>
            </form>
        </div>
    </section><br>