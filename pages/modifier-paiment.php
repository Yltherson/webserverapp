<?php include "navbar.php" ?>
<!-- block modifier paiement -->
<section class="modifierPaiement active">
        <!-- ajouter -->
        <div class="block">
            <h3>Modifier paiement</h3>
            <form action="controllers\updatePaiement.php" method='POST'>
                <label for="cinsc">id paiement</label>
                <input type="text" id="idP" name="idPaiement" placeholder="Id paiemment.." readonly>

                <label for="cinsc">Code inscription</label>
                <input type="text" id="codeI" name="codeInscription" placeholder="code inscription.." required>

                <label for="mnt">montant</label>
                <input type="text" id="mont" name="montant" placeholder="montant.." required>

                <label for="dP">Date paiement</label>
                <input type="date" id="dateP" name="dateP" placeholder="date paiement.." required><br>
            
                <input type="submit" name="submit" value="Modifier"><input type="reset" value="reset">
            </form>
        </div>
    </section><br>