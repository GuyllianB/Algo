/*
Programme cycle_vie_Hippopotamus
but : Afficher le cycle de vie d'un Hippopotame pendant 3 semaines
auteur : Guyllian BELAYEL
date : 15/11/2021
*/

classe Hippopotamus(name,weight,tusksSize) 
    name : chaine  // son nom
    weight : float  // le poids de l'hippopotame en kilos
    tusksSize : reel  // la taille des défenses

    debut

        Hippopotamus(name, weight, tusksSize)
        debut
            this->name = name
            this->weight = weight
            this->tusksSize = tusksSize

        fonction eat()
        debut
            weight += 1
            afficher "L'hippotame a manger et a gagner 1kg"
        fin

        fonction swim()
        debut
            weight -= 0.3
            afficher "L'hippotame a nager et a perdu : 300g"
        fin

        fonction fight(Hippopotamus adversaire)
        debut
            si tusksSize > adversaire.tusksSize
                afficher "Le gagnant est " + name
            sinon si tusksSize < adversaire.tusksSize
                afficher "Le gagnant est " + adversaire.name
            sinon
                afficher "Egalité"
            finsi
        fin

        fonction convertToString()
        debut
            afficher "Hippopotame: " + name + ", pese: " + str(weight) + "kg et la taille de ses défenses est " + str(tusksSize) + "m."
        fin
    fin

finclasse

programme cycle_vie_Hippopotamus()
    hippo1 : Hippopotamus
    hippo2 : Hippopotamus

    debut
        hippo1("Gloria",150, 3)
        hippo2("Higgins", 200, 6)

        hippo1.fight(hippo2)    // devrait afficher : "Le gagnant est Higgins"

        pour i de 1 a 21
            pour j de 1 a 15
                hippo1.eat().eat().swim().swim().swim()
            finpour
            hippo1.convertToString()
            Afficher "fin de la journée " + str(i)
        finpour
    fin
fin