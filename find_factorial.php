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
$message = "The factorial is $factorial";

echo json_encode(array(
    "message" => $message
));