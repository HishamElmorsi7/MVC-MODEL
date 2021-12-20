<?php

class Usersview extends Users {
    public function show_user($first_name) {
        $result = $this -> get_user($first_name);
        echo 'fullName is '. $result[0]['first_name'] . ' ' . $result[0]['last_name'];
        echo '<br>';
        echo 'Date of birth: '.$result[0]['date_of_birth'];
    }
}