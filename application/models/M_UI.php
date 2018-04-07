<?php

class M_UI extends CI_Model {
    function percentColor($percentage) {
        $r = ($percentage > 50 ? 1 - 2 * ($percentage - 50) / 100.0 : 1.0) * 255;
        $g = ($percentage > 50 ? 1.0 : 2 *$percentage / 100.0) * 255;
        return "rgb({$r},{$g},45)";
    }
}
