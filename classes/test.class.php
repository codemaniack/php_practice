<?php
    class Test extends Dbh {
        public function getUsers(){
            $sql = "SELECT * FROM users";
            $stmt = $this->connect()->query($sql);
            while($row = $stmt->fetch()){
                echo $row['user_email'] . "<br>";
            }
        }

        public function getUsersStmt($email){
            $sql = "SELECT * FROM users WHERE user_email = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$email]);
            $users = $stmt->fetchAll();
        }
    }