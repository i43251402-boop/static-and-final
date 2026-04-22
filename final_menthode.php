<?php

class Kendaraan {

final public function mesin() {
        echo "Mesin standar";
    }

}

class Mobil extends Kendaraan {

    // Eror jika override
    public function mesin() {
        echo "Mesin mobile";
    }

}

?>