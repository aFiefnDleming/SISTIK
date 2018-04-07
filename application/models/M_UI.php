<?php

class M_UI extends CI_Model {
    function percentColor($percentage) {
        /*
            https://stackoverflow.com/questions/6394304/algorithm-how-do-i-fade-from-red-to-green-via-yellow-using-rgb-values
        */
        $r = ($percentage > 50 ? 1 - 2 * ($percentage - 50) / 100.0 : 1.0) * 255;
        $g = ($percentage > 50 ? 1.0 : 2 *$percentage / 100.0) * 255;
        return "rgb({$r},{$g},45)";
    }

    function percentColorCard($percentage) {
        /*
            https://stackoverflow.com/questions/6394304/algorithm-how-do-i-fade-from-red-to-green-via-yellow-using-rgb-values
        */
        $r = ($percentage > 50 ? 1 - 2 * ($percentage - 50) / 100.0 : 1.0) * 220;
        $g = ($percentage > 50 ? 1.0 : 2 *$percentage / 100.0) * 220;
        return "rgb({$r},{$g},75)";
    }
}
