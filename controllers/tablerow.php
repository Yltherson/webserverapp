echo « <table style='border : solid 1px black ;' > » ;
echo « <tr><th>Id</th><th>Prénom</th><th>Nom</th></tr> » ;

<?php
    class TableRows extends RecursiveIteratorIterator { function __construct($it) {

        parent ::__construct($it, self ::LEAVES_ONLY) ;
        
        
        } function current() {
        return « <td style='largeur : 150px ; bordure : 1px noir uni ;' > » . parent ::current(). « </td> » ;
        
        
        } function beginChildren() {
        echo « <tr> » ;
        
        
        } function endChildren() {
        echo « </tr> » . « \n » ;
        }
        }
?>