<?php
require_once 'aircraft.php';
    class F16 extends Aircraft
    {
        function __construct()
        {
            $this->Ammunition = 0;
            $this->MaxAmmo = 8;
            $this->BaseDamage = 30;
        }
    }
?>