<?php
    class User {
        public $firstname;
        public $surname;
        public $greeting;
        public function greetTheUser() {
            return $this -> greeting . ', ' . $this -> firstname . ' ' . $this -> surname . '!<br>';
        }
    }

    $user1 = new User();
    $user2 = new User();

    $user1 -> firstname = 'Rokas';
    $user1 -> surname = 'Blekaitis';
    $user1 -> greeting = 'It\'s been too long';

    $user2 -> firstname = 'Raminta';
    $user2 -> surname = 'Alisauskaite';
    $user2 -> greeting = 'Keep up the good work';

    echo $user1 -> greetTheUser();
    echo $user2 -> greetTheUser();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP13 namu darbas</title>
    </head>
    <body>
    </body>
</html>
