<?php
// Script Name: Check_valid_email.php
// Description: Description du script.
//
// Created by: Martin Lechêne
// Date: 19/07/2023
// Version: 1.0
//

$email = readline("Enter Your E-mail: ");
$k = $j = $d = 0;

if (strlen($email) >= 6) {
    if (ctype_alpha($email[0])) {
        if (substr_count($email, "@") === 1) {
            if ($email[strlen($email) - 4] === "." xor $email[strlen($email) - 3] === ".") {
                for ($i = 0; $i < strlen($email); $i++) {
                    if (ctype_space($email[$i])) {
                        $k = 1;
                    } elseif (ctype_alpha($email[$i])) {
                        if ($email[$i] === strtoupper($email[$i])) {
                            $j = 1;
                        }
                    } elseif (ctype_digit($email[$i])) {
                        continue;
                    } elseif ($email[$i] === "_" || $email[$i] === "." || $email[$i] === "@") {
                        echo 'Your email is perfect !' . PHP_EOL;
                        continue;
                    } else {
                        $d = 1;
                    }
                }

                if ($k === 1 || $j === 1 || $d === 1) {
                    echo "Wrong E-mail !!! Invalid Character Use" . PHP_EOL;
                }
            } else {
                echo "Wrong E-mail !!! . is not at the right position" . PHP_EOL;
            }
        } else {
            echo "Wrong E-mail !!! Counting Of @ Should Be 1" . PHP_EOL;
        }
    } else {
        echo "Wrong Email !!! First Character Should be an Alphabet" . PHP_EOL;
    }
} else {
    echo "Wrong E-mail !!! Length Should Be Greater Or Equal to 6" . PHP_EOL;
}
?>
