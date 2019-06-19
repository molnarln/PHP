<?php
require_once 'aircraft.php';
    class F16 extends Aircraft
    {
        function __construct()
        {
            $this->AllDamage = 0;
            $this->Ammunition = 0;
            $this->MaxAmmo = 8;
            $this->BaseDamage = 30;
        }
    }
?>