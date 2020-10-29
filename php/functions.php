<?php

    function validate($data)
    {
        $data=trim(stripslashes(htmlspecialchars($data)));
        return $data;
    }

?>
