<?php
    /*
     * Validate a color
     *
     * @param String color
     * @return boolean
     */
    function validColor($color)
    {
        global $f3;
        return in_array($color, $f3->get('color'));
    }

    function validSting($type)
    {
        if (!empty($type) && ctype_alpha($type))
        {
            return true;
        }
    }
?>
