<?php include "navbar.php" ?>
<section class="ajoutP active">
        <!-- ajouter -->
        <div class="block">
            <h3>Ajouter une paiement</h3>
            <form action="controllers\ajoutPaiement.php" method='POST'>
                <label for="cinsc">Code inscription</label>
                <input type="text" id="cinsc" name="codeInscription" placeholder="code inscription.." required>

                <label for="mnt">montant</label>
                <input type="text" id="mnt" name="montant" placeholder="montant.." required>

                <label for="dP">Date de paiement</label>
                <input type="date" id="dP" name="dateP" placeholder="date paiement.." required><br>
            
                <input type="submit" name="submit" value="Ajouter">
            </form>
        </div>
    </section><br>