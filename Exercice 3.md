/*
Programme circle
but : Transformer un objet en string, calculer l'air d'un cercle et savoir si un point est dans le cercle ou non
auteur : Guyllian BELAYEL
date : 15/11/2021
*/

import "exercice 2.md"

classe Circle(point,radius) herite de Point
    point = new Point
    radius : entier

    // Constructeur
    Cercle(point, radius) 
    début
        this->point = point
        this->radius = radius
    fin 

    debut
        // calcul aire
        fonction area()
        debut
            retourner pi * (radius^2)
        fin

    // verifier si le point appartient au cercle
    fonction containsPoint(point)
    debut
        // cooordonnées du point
        pX : entier
        pY : entier
        pX = point->getX()
        pY = point->getY()

        // coordonnées du cercle
        cX : entier
        cY : entier
        cX = this->getX()
        cY = this->getY()
        
        si ((pX - cX)^2) + ((pY - cY)^2) < (radius^2) alors
            afficher "Le point est dans le cercle"
        sinon
            afficher "Le point n'est pas dans le cercle"
        finsi
        
    fin
    
    // on convertit l'objet en chaine
    fonction convertToString()
    debut
        str : chaine
        str = "Cercle de centre ["+str(pX)+","+str(pY)+"] et de rayon" + radius
        afficher str
    fin

finclasse

programme transform_object_string()
    cercle : Circle
    centreCercle : Point
    point : Point
    debut
        centreCercle(3,5)
        point(0,2)
        cercle(centreCercle,3)
        cercle->convertToString() //devrait afficher "Cercle de centre [3,5] et de rayon 3"
        afficher "Aire du cercle: "
        afficher str(cercle->area())
        cercle->containsPoint(point)
    fin
fin