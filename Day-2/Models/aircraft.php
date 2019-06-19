    <?php

    class Aircraft
    {
        public $Ammunition;
        public $MaxAmmo;
        public $BaseDamage;
        public $AllDamage;

        function Fight()
        {
            $damage = $this->Ammunition * $this->BaseDamage;
            $this->Ammunition = 0;
            $this->AllDamage += $damage;
            return $damage;
        }
        function Refill($amountOfRefill)
        {
            $freeStorage = $this->MaxAmmo - $this->Ammunition;
            $remaining = $amountOfRefill;
            if ($amountOfRefill >= $freeStorage) {
                $this->Ammunition = $this->MaxAmmo;
                $remaining = $amountOfRefill - ($this->MaxAmmo - $this->Ammunition);
            } else {
                $this->Ammunition += $amountOfRefill;
                $remaining -= $amountOfRefill;
            }
            return $remaining;
        }

        function GetType()
        {
            return static::class;
        }

        function GetStatus()
        {
            echo "Type " . $this->GetType() .
            ", Ammo: $this->Ammunition 
            Base Damage: $this->BaseDamage, All Damage: $this->AllDamage";
        }
    }

    ?>
