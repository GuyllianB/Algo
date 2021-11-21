/*
Programme chat
but : pouvoir parler avec un chat automatique
auteur : Guyllian BELAYEL
date : 16/11/2021
*/

importer "User.md"



debut

    fonction envoiMessage
        exit : booleen
        message : chaine
        debut
            tantque exit == faux
                user->messageConseiller(message)
                si bouton_envoyer.click
                afficher "message envoyer"
            fintantque
        fin
    finfonction

fin

programme chat
    debut
        // chatbox en bas a droite de la page non dérouler initialement
        bouton_chatbox "Si vous avez des questions n'hesitez pas à nous envoyer un message"
        si bouton_chatbox.click
            envoiMessage()
        finsi
        
        // fonction qui comprends qu'un message a ete recu
        si message_recu(user->idConseiller) == vrai
            afficher "Vous avez un nouveau message"
            si bouton_chatbox.click
                envoiMessage()
            finsi
        finsi
    fin
finprogramme