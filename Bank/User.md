/*
Programme user
but : creer un user
auteur : Guyllian BELAYEL
date : 16/11/2021
*/

classe User
    id_user : chaine            // cle primaire random qui sera attaché au pseudo et au password
    pseudo : chaine             // pseudo entré par l'utilisateur
    password : chaine           // mot de passe entré par l'utilisateur
    email : chaine              // mail entré par l'utilisateur
    nom : chaine                // nom entré par l'utilisateur
    prenom : chaine             // prenom entré par l'utilisateur
    age : entier                // age entré par l'utilisateur
    numero_tel : entier         // numero de numero_tel entré par l'utilisateur
    carte_i : fichier           // piece d'identité envoyé par l'utilisateur
    idConseiller : entier       // pour le conseiller, a chaque client son conseiller
    IBAN : chaine               // chaque compte client a un IBAN
    listBeneficiaires[0..*] : entier      // id des beneficiaire

    User(id_user,nom,prenom,age,pseudo,email,password,numero_tel,carte_i,IBAN,idConseiller)
    debut
        this->id_user = id_user
        this->pseudo = pseudo
        this->password = password
		this->email = email
        this->nom = nom
        this->prenom = prenom
        this->age = age
        this->numero_tel = numero_tel
        this->carte_i = carte_i
        this->IBAN = IBAN
        this->idConseiller = idConseiller
    fin

    debut
        ///////// GET /////////
        fonction getIdUser()
        debut
            retourner this->id_user
        fin

        fonction getPseudo()
        debut
            retourner this->pseudo
        fin

        fonction getPassword()
        debut
            retourner this->password
        fin

        fonction getEmail()
        debut
            retourner this->email
        fin

        fonction getNom()
        debut
            retourner this->nom
        fin

        fonction getPrenom()
        debut
            retourner this->prenom
        fin

        fonction getAge()
        debut
            retourner this->age
        fin

        fonction getCarte_i()
        debut
            retourner this->carte_i
        fin
        

        fonction getNumero_tel()
        debut
            retourner this->numero_tel
        fin

        fonction getIBAN()
        debut
            retourner this->IBAN
        fin

        fonction getIdConseiller()
        debut
            retourner this->idConseiller
        fin

        ///////// SET /////////
        fonction setPseudo(pseudo)
        debut
            this->pseudo = pseudo
        fin

        fonction setPassword(password)
        debut
            this->password = password
        fin

        fonction setEmail(email)
        debut
            this->email = email
        fin

        fonction setIdUser(id_user)
        debut
            this->id_user = id_user
        fin

        fonction setNom(nom)
        debut
            this->nom = nom
        fin

        fonction setPrenom(prenom)
        debut
            this->prenom = prenom
        fin

        fonction setAge(age)
        debut
            this->age = age
        fin

        fonction setCarte_i(carte_i)
        debut
            this->carte_i = carte_i
        fin

        fonction setNumero_tel(numero_tel)
        debut
            this->numero_tel = numero_tel
        fin

        fonction setIBAN(IBAN)
        debut
            this->IBAN = IBAN
        fin

        fonction setIdConseiller(idConseiller)
        debut
            this->idConseiller = idConseiller
        fin
        

        fonction addBeneficiaire(nom_compte_beneficiaire,IBAN_beneficiaire,BIC_beneficiaire)
        debut
            listBeneficiaires->add(nom_compte_beneficiaire,IBAN_beneficiaire,BIC_beneficiaire)
        fin

        fonction listBeneficiaires()  // recherche les beneficiaires
            pour chaque beneficiaire dans idBeneficiaires
                afficher nom_compte_beneficiaire
                afficher IBAN_beneficiaire
                afficher BIC_beneficiaire
            finpour
        fin

        fonction messageConseiller(message)
        debut
            // le message s'envoie donc au conseiller
            envoyerMessageConseiller(getIdConseiller(idConseiller),message)
        fin

    fin
finclasse