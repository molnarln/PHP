<?php

class F35 extends Aircraft
{
    function __construct()
    {
        $this->AllDamage = 0;
        $this->Ammunition = 0;
        $this->MaxAmmo = 12;
        $this->BaseDamage = 50;
    }
}
?>