function update(data) {
    // console.log(mac.dateNaissance)
    // Pase done yo nan fòm la
    document.getElementById("idP").value = data.idPaiement;
    document.getElementById("codeI").value = data.codeInscription;
    document.getElementById("mont").value = data.montant;
    document.getElementById("dateP").value = data.dateP;
    
    
    // console.log(mac.prenom)
    console.log(data)
}
