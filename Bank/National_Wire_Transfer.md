/*
Programme national_wire_transfer
but : virement national
auteur : Guyllian BELAYEL
date : 16/11/2021
*/

importer "User.md"

programme national_wire_transfer
    nom_compte_virement : chaine
    montant : float

    debut
        afficher "Entrez à nouveau le nom du beneficiaire :"
        saisir nom_compte_virement

        // fonction qui recherche pour chaque beneficiaire dans listBeneficiaire si le nom du beneficiaire exite (booleen)        
        si rechercherBeneficiaire(nom_compte_virement) == true
            afficher "Combien voulez-vous envoyer ?"
            saisir montant

            // fonction qui envoie le montant au beneficiaire
            virementBeneficiaire(user->listBeneficiaire(nom_compte_virement),montant)
        sinon
            afficher "le nom ne correspond pas a votre liste de beneficiaires"
        finsi
    fin
finprogramme