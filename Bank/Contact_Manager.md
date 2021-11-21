
/*
Programme contact_manager
but : ajouter les beneficiaire et faire un virement
auteur : Guyllian BELAYEL
date : 16/11/2021
*/

importer "User.md"

fonction nouveau_beneficiaire
    nom_compte_beneficiaire : chaine
    IBAN_beneficiaire : chaine
    BIC_beneficiaire : int

    debut
        afficher "Veuillez entrer l'IBAN, le nom du compte et le BIC du beneficiaire"
        saisir nom_beneciaire, IBAN_beneficiaire, BIC_beneficiaire

        // on recupere alors les informations du benefiaicre
        user->addBeneficiaire(nom_beneciaire,IBAN_beneficiaire, BIC_beneficiaire)
    fin
finfonction

fonction virement
    nom_compte_virement : chaine

    debut
        user->listBeneficiaires()
        afficher "A qui voulez vous faire un virement ?"
        saisir nom_compte_virement

        // fonction qui recherche pour chaque beneficiaire dans listBeneficiaire si le nom du beneficiaire exite (booleen)        
        si rechercherBeneficiaire(nom_compte_virement) == true
            IBAN = user->listBeneficiaires(IBAN)

            // verifie si les premieres lettre son 'FR' ou non 
            si IBAN.verifierCodePays() == "FR"
                // Francais donc envoie dans le "national_wire_transfer.md"
                rediriger vers "National_Wire_Transfer.md" 
            sinon
                // Non francais donc envoie dans le "International_Wire_Transfer.md"
                rediriger vers "International_Wire_Transfer.md" 
            finsi
        sinon
            afficher "Il n'y a pas de beneficiaires à ce nom"
        finsi

    fin
finfonction

programme contact_manager
    debut
        afficher "La listes de vos bénéficiaires :"

        si user->listBeneficiaires() == 0 OU user->listBeneficiaires() == ""
            afficher "Vous n'avez pas de bénéficiaires"
        sinon
            user->listBeneficiaires()
        finsi

        bouton_ajout "Ajouter un bénéficiaires :"
        si bouton_ajout.click()
            nouveau_beneficaire()
        finsi
        
        bouton_virement "Faire un virement :"
        si bouton_virement.click()
            virement()
        finsi

    fin
finprogramme