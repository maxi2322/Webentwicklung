<?php
if(isset($_POST["email"])) {
    $email = $_POST["email"];
    $file = "subscribers.txt";

    if(file_put_contents($file, $email . PHP_EOL, FILE_APPEND | LOCK_EX) !== false) {
        $response = array('success' => true, 'message' => 'Vielen Dank für die Anmeldung!');
        echo json_encode($response);
    } else {
        $response = array('success' => false, 'message' => 'Es gab ein Problem bei der Anmeldung.');
        echo json_encode($response);
    }
}
?>
