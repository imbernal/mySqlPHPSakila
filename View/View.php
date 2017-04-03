<?php

class View
{

    public function showActors($actors)
    {

        $output = '<table border="1"><th>Actors Id</th><th>First Name</th><th>Last Name</th>';
        for ($i = 0; $i < 20; $i++) {
            $output .= "<tr><td>" . $actors[$i]['actor_id'] . "</td>";
            $output .= "<td>" . $actors[$i]['first_name'] . "</td>";
            $output .= "<td>" . $actors[$i]['last_name'] . "</td></tr>";
        }
        return $output;
    }
}
