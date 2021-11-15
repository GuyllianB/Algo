/*
Programme transform_object_string
but : Transformer un objet en string
auteur : Guyllian BELAYEL
date : 15/11/2021
*/

classe Point(x,y) 
    x : entier
    y : entier

    debut
        fonction getX()
        debut
            retourne x
        fin

        fonction getY()
        debut
            retourne y
        fin

        fonction setX(int: reel)
        debut
            x = int
        fin

        fontion setY(int: reel)
        debut
            y = int
        fin

        convertToString()
        debut
            afficher "x : " + str(x) + ", y : " + str(y)
        fin
    fin
finclasse

programme transform_object_string()
    point1 : Point

    debut
        point1.setX(1)
        point2.setY(5)

        point.convertToString()
    fin
fin