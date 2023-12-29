function updateIns(mac) {
    console.log(mac.dateNaissance)
    // Pase done yo nan fòm la
    document.getElementById("nomUp").value = mac.nom;
    document.getElementById("codeUp").value = mac.codeInscription;
    document.getElementById("prenomUp").value = mac.prenom;
    
    document.getElementById("sexeUp").value = mac.sexe;
    document.getElementById("dateNaissanceUp").value = mac.dateNaissance;
    document.getElementById("classUp").value = mac.classe;
    document.getElementById("fraisInscriptionUp").value = mac.fraisInscription;
    document.getElementById("dateInscriptionUp").value = mac.dateInscription;
    
    
    console.log(mac.prenom)
    console.log(mac)
}