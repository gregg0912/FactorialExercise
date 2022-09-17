<?php

function find_factorial($input)
{
    if ( $input == 0 || $input == 1 )
    {
        return 1;
    }

    return $input * find_factorial($input-1);
}

$input = $_POST["input"];
$factorial = find_factorial($input);

echo json_encode(array(
    "factorial" => $factorial
));