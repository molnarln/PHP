    <?php

    class Aircraft
    {
        public $Ammunition;
        public $MaxAmmo;
        public $BaseDamage;

        function Fight()
        {
            $damage = $this->Ammunition * $this->BaseDamage;
            $this->Ammunition = 0;
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
    }

    ?>
