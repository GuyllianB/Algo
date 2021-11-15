<?php

// Programme cycle_vie_Hippopotamus
// but : echo le cycle de vie d'un Hippopotame pendant 3 semaines
// auteur : Guyllian BELAYEL
// date : 15/11/2021

class Hippopotamus {

    /**
     * @var string
     */
    private $name; // son nom

    /**
     * @var float
     */
    private $weight; // le poids de l'hippopotame en kilos

    /**
     * @var int
     */
    private $tusksSize; // la taille des défenses

    /******** GETTER  ********/
    /**
     * Get the value of name
     *
     * @return  string
     */ 
    public function getName(){
        return $this->name;
    }

    /**
     * Get the value of weight
     *
     * @return  float
     */ 
    public function getWeight(){
        return $this->weight;
    }

    /**
     * Get the value of tusksSize
     *
     * @return  int
     */ 
    public function getTusksSize() {
        return $this->tusksSize;
    }
    
    /******** SETTER  ********/
    /**
     * Set the value of name
     *
     * @param  string  $name
     *
     * @return  self
     */ 
    public function setName(string $name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Set the value of weight
     *
     * @param  float  $weight
     *
     * @return  self
     */ 
    public function setWeight(float $weight) {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Set the value of tusksSize
     *
     * @param  int  $tusksSize
     *
     * @return  self
     */ 
    public function setTusksSize(int $tusksSize) {
        $this->tusksSize = $tusksSize;

        return $this;
    }

    public function __construct(string $name, int $weight, int $tusksSize)
    {
        $this->setName($name)
            ->setWeight($weight)
            ->setTusksSize($tusksSize);
    }

    public function eat() {
        $this->weight = $this->weight + 1;
        echo "L'hippotame a manger et a gagner 1kg. <br/>" ;
    }

    public function swim() {
        $this->weight = $this->weight - 0.3;
        echo "L'hippotame a nager et a perdu : 300g. <br/>" ;
    }

    public function fight(Hippopotamus $adversaire) {
        if ($this->tusksSize > $adversaire->tusksSize) { echo "Le gagnant est " . $this->name . "<br/>"; }
        elseif ($this->tusksSize < $adversaire->tusksSize) { echo "Le gagnant est " . $adversaire->name . "<br/>"; }
        else { echo "Egalité <br/>";}
    }

    function convertToString() {
        echo "Hippopotame: " . $this->name . ", pese: " . $this->weight . "kg et la taille de ses défenses est " . $this->tusksSize . "m. <br/>" ;
    }

}
?>