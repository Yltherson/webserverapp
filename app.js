// app.js

function navigateTo(pageName) {
    
    fetch(`/spa/pages/${pageName}.php`)
        .then(response => {
            if (!response.ok) {
                throw new Error(`Error loading ${pageName}.php`);
            }
            return response.text();
        })
        .then(content => {
            console.log(content)
            document.getElementById('app').innerHTML = content;
        })
        .catch(error => {
            console.error(error);
        });
}

window.addEventListener('popstate', () => {
    const pageName = getQueryParam('page') || 'inscription';
    navigateTo(pageName);
});

window.addEventListener('load', () => {
    const pageName = getQueryParam('page') || 'inscription';
    console.log(pageName)
    navigateTo(pageName);
});

document.addEventListener('click', (event) => {
    const target = event.target;
    if (target.tagName === 'A' && target.getAttribute('href')) {
        event.preventDefault();
        const pageName = target.getAttribute('href').substring(0);
        //console.log(pageName)
        navigateTo(pageName);
        // Mettez à jour l'URL sans recharger la page
        history.pushState({ page: pageName }, null, `?page=${pageName}`);
    }
});

function getQueryParam(name) {
    const params = new URLSearchParams(window.location.search);
    return params.get(name);
}

function updateIns(mac) {
    navigateTo("modifier-inscription")
    history.pushState({ page: "modifier-inscription" }, null, `?page=modifier-inscription`);

    // Pase done yo nan fòm la
    setTimeout(()=>{
        document.getElementById("nomUp").value = mac.nom;
        document.getElementById("codeUp").value = mac.codeInscription;
        document.getElementById("prenomUp").value = mac.prenom;
        
        document.getElementById("sexeUp").value = mac.sexe;
        document.getElementById("dateNaissanceUp").value = mac.dateNaissance;
        document.getElementById("classUp").value = mac.classe;
        document.getElementById("fraisInscriptionUp").value = mac.fraisInscription;
        document.getElementById("dateInscriptionUp").value = mac.dateInscription;
    }, 2000)

    // console.log(mac.prenom)
    console.log(mac)
}

function updatePaiement(data) {
    navigateTo("modifier-paiment")
    history.pushState({ page: "modifier-paiment" }, null, `?page=modifier-paiment`);

    setTimeout(()=>{
        document.getElementById("idP").value = data.idPaiement;
        document.getElementById("codeI").value = data.codeInscription;
        document.getElementById("mont").value = data.montant;
        document.getElementById("dateP").value = data.dateP;
    }, 2000)
}
