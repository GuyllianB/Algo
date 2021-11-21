/*
Programme authentification
but : demander de s'enregistrer si pas deja fait, de se connecter et verifier si les informations sont correctes
auteur : Guyllian BELAYEL
date : 16/11/2021
*/

importe "User.md"

id_user : chaine            // cle primaire random qui sera attaché au pseudo et au password
pseudo : chaine             // pseudo entré par l'utilisateur
password : chaine           // mot de passe entré par l'utilisateur
password_verif : chaine     // sert a la verification que le mot de passe réécrit est le même
email : chaine              // email entré par l'utilisateur
email_verif : chaine        // sert a la verification que le mot de passe réécrit est le même
nom : chaine                // nom entré par l'utilisateur
prenom : chaine             // prenom entré par l'utilisateur
age : entier                // age entré par l'utilisateur
numero_tel : entier         // numero de tel entré par l'utilisateur
carte_i : image             // piece d'identité envoyé par l'utilisateur
expediteur : chaine         // pour l'envoie de email
pays : chaine               // pays ou vit l'utilisateur
expediteur = emailEntreprise@service.com

User = new User


debut
    
    fonction enregistrer    // si pas encore enregistrer
    debut
        afficher "Veuillez entrer votre nom et votre prenom :"
        saisir nom,prenom

        afficher "Veuillez entrer votre age :"
        saisir age

        afficher "Veuillez entrer votre numero de téléphone :"
        saisir numero_tel
        
        afficher "Veuillez inserer votre carte d'identité :"
        inserer carte_i     // formulaire de telechargement de fichier

        afficher "Veuillez entrer votre email :"
        saisir email

        afficher "Veuillez entrer à nouveau votre email :"
        saisir email_verif

        // verifie que les 2 emails entrés sont les mêmes
        si email_verif == email
            afficher "Les emails sont identiques !"
        sinon
            afficher "Les emails sont differents !"
        finsi

        afficher "Informations concernant votre connexion :"
        afficher "Veuillez entrer votre pseudo :"
        saisir pseudo

        afficher "Veuillez entrer votre mot de passe :"
        saisir password

        // verifie que le mot de passe contient un caractere special, un chiffre, une lettre majuscule et une minuscule
        // ainsi qu'au moins 8 caractere
        si !php_preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,20}$/', password)
            afficher "Votre mot de passe n'est pas assez sécurisé !"
            afficher "Il doit contenir au moins 8 caractere, comportant un caractere special, un chiffre, une lettre majuscule et une minuscule."
            retourner FALSE
        else
            afficher "Le mot de passe est bien sécurisé !"
            retourner TRUE
        finsi

        afficher "Veuillez entrer à nouveau votre mot de passe :"
        saisir password_verif

        // verifie que les 2 mots de passes entrés sont les mêmes
        si password_verif == password
            afficher "Les mots de passes sont identiques !"
        sinon
            afficher "Les mots de passes sont differents !"
        finsi

        // verifie si aucun des champs n'est vide
        si champs_vide(nom,prenom,age,numero_tel,carte_i,pseudo,password,password_verif)
            afficher "Il manque des informations"
        sinon
            envoie_email(expediteur,Personne->email)
            User("",pseudo,password,email,nom,prenom,age,pseudo,email,password,numero_tel,carte_i,"",0)
            // dans la fonction, un code HTML avec un bouton de confirmation qui renvoie directement a "Authentification_Reussi.md"

            afficher alerte "Vous venez de recevoir un email de confirmation"
            rediriger vers page "Authentification.md" // reviens sur la page d'acceuil en attendant la confirmation mail
        finsi

    finfonction

    fonction connexion      // si deja enregistrer
        debut
            bdd = appel_bdd()       // fonction qui appelle la bdd
            afficher "Veuillez vous connecter"
            afficher "Entrez votre pseudo"
            saisir pseudo

            afficher "Entrez mot de passe"
            saisir password
            sql = 'SELECT * FROM tbl_name WHERE pseudo="pseudo" AND password="password"
            result = mysql_num_rows(mysql_query(sql))
            si result == 1
                rediriger vers page "page_acceuil"
            sinon
                afficher "le mot de passe ou le pseudo est incorrect"
            finsi
        fin
    finfonction
    
fin

programme authentification 

    debut
        Afficher "Déjà enregistrer ? Connectez vous :"
        connexion()

        Afficher "Voulez vous vous enregistrer ?"
        enregistrer()
    fin

finprogramme