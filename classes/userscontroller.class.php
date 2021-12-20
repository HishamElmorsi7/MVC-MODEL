<?php
class Userscontroller extends users {
    public function create_user($first_name, $last_name, $dop) {
        $this -> set_user($first_name, $last_name, $dop);
    }
}