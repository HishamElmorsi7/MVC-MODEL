<?php

class Users extends Dbh {
    protected function get_user($first_name) {
        $sql = "SELECT * FROM users WHERE first_name = ?";
        $dbo = $this->connect();
        $stmt = $dbo -> prepare($sql);
        $stmt -> execute([$first_name]);

        $result = $stmt->fetchAll();

        return $result;
    }

    protected function set_user($first_name, $last_name, $dop) {
        $sql = "INSERT INTO users(first_name, last_name, date_of_birth) VALUES(?, ?, ?)";
        $dbo = $this->connect();
        $stmt = $dbo -> prepare($sql);
        $stmt -> execute([$first_name, $last_name, $dop]);
    }
    
}


