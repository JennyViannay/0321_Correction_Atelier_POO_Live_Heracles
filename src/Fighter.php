<?php

/* Fighter class definition */
class Fighter 
{
    const MAX_LIFE = 100;

    private string $name;
    private string $strength;
    private string $dexterity;
    private string $life;

    public function __construct(string $name, int $strength, int $dexterity)
    {
        $this->name = $name;
        $this->strength = $strength;
        $this->dexterity = $dexterity;
        $this->life = self::MAX_LIFE;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

        /**
         * Get the value of strength
         */ 
        public function getStrength()
        {
                return $this->strength;
        }

        /**
         * Set the value of strength
         *
         * @return  self
         */ 
        public function setStrength($strength)
        {
                $this->strength = $strength;

                return $this;
        }

        /**
         * Get the value of dexterity
         */ 
        public function getDexterity()
        {
                return $this->dexterity;
        }

        /**
         * Set the value of dexterity
         *
         * @return  self
         */ 
        public function setDexterity($dexterity)
        {
                $this->dexterity = $dexterity;

                return $this;
        }

    /**
     * Get the value of life
     */ 
    public function getLife()
    {
        return $this->life;
    }

    /**
     * Set the value of life
     *
     * @return  self
     */ 
    public function setLife($life)
    {
        $this->life = $life;

        return $this;
    }

    public function attack(): int
    {
        return rand(1, $this->getStrength());
    }

    public function defense(int $attack): int
    {
        // if ($attack - $this->getDexterity() > 0) {
        //     return $attack - $this->getDexterity();
        // } else {
        //     return 0;
        // }

        return ($attack - $this->getDexterity() > 0) ? ($attack - $this->getDexterity()) : 0; 
    }

    public function fight(Fighter $enemy) 
    {
        $attack = $this->attack();
        $defense = $enemy->defense($attack);
        $enemy->setLife(($enemy->getLife() - $defense > 0) ? ($enemy->getLife() - $defense) : 0);
    }
}