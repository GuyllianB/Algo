/*
Programme authentification_reussi
but : verification des données
auteur : Guyllian BELAYEL
date : 16/11/2021
*/

importer "User.md"

// page d'activation via le lien recu par mail

Programme Authentification_reussi

    User = new User

    debut

        // genere une cle_aleatoire
        fonction cle_aleatoire()
            caractere = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"
            nombre = ''
            debut
                pour i allant de 0 a 50
                    nombre .= caractere[rand(0, php_strlen(caractere) - 1 )]
                finpour
                retourner nombre
            fin
        finfonction

        // creation iban
        fonction iban
            codePays : chaine   // Code du pays standard ISO 3166
            codeRib : int       // 25 Numeros derriere le code Pays 

            codePays = FR
            codeRib = "0123456789"
            RIB = ""
            debut
                RIB .= codePays
                pour i allant de 0 a 25
                    RIB .= codeRib[rand(0, php_strlen(codeRib) - 1 )]
                finpour
                retouner RIB
            fin
        finfonction

        // affecter la clé a la nouvelle personne
        User->id_user = cle_aleatoire()

        // affecter l'iban a la nouvelle personne
        User->IBAN = iban()

        // affecter un conseiller a la nouvelle personne
        User->id_conseiller = affectationConseiller()

        // envoie de toutes les informations de la personne dans la base de donnée
        envoie_donnée_bdd(User)

        afficher "Vous étes bien enregistrer cliquez ici pour vous connecter"
        rediriger vers "Authentification.md"
    fin
finclasse