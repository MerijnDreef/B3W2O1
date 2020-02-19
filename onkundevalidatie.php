<?php
    session_start();

    $vraag1Err = $vraag2Err = $vraag3Err = $vraag4Err  $vraag5Err = $vraag6Err = $vraag7Err = "";
    $vraag1 = $vraag2 = $vraag3 = $vraag4  $vraag5 = $vraag6 = $vraag7 = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["vraag1"])) {
            $vraag1Err = "U heeft de eerste niet ingevuld";
        } else {
            $vraag1 = test_input($_POST["vraag1"]);
        }

            if (empty($_POST["vraag2"])) {
                $vraag2Err = "U heeft de tweede niet ingevuld";
            } else {
                $vraag2 = test_input($_POST["vraag2"]);
            }

                if (empty($_POST["vraag3"])) {
                    $vraag3Err = "U heeft de derde niet ingevuld";
                } else {
                    $vraag3 = test_input($_POST["vraag3"]);
                }

            if (empty($_POST["vraag4"])) {
                $vraag4Err = "U heeft de vierde niet ingevuld";
            } else {
                $vraag4 = test_input($_POST["vraag4"]);
            }

        if (empty($_POST["vraag5"])) {
            $vraag5Err = "U heeft de zesde niet ingevuld";
        } else {
            $vraag5 = test_input($_POST["vraag5"]);
            }
                
                if (empty($_POST["vraag6"])) {
                    $vraag6Err = "U heeft de zevende niet ingevuld";
                } else {
                    $vraag6 = test_input($_POST["vraag6"]);
                    }

                    if (empty($_POST["vraag7"])) {
                        $vraag7Err = "U heeft de zevende niet ingevuld";
                    } else {
                        $vraag7 = test_input($_POST["vraag7"]);
                        }

                            function test_input($data) {
                                $data = trim($data);
                                $data = stripslashes($data);
                                $data = htmlspecialchars($data);
                                return $data;
                              }
    }
?>