<?php

class adminLogin extends dbh{

    protected function getUser($uid, $pwd){
        $stmt = $this->connect()->prepare('SELECT admin_password FROM admin WHERE admin_username = ? OR admin_gmail = ?;');


        if(!$stmt->execute(array($uid, $uid))){
            $stmt = null;
            header("location: adminLogin.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0){
            $stmt = null;
            header("location: adminLogin.php?error=usernotfound1");
            exit();
        }
        $pwd = $stmt->fetchAll(PDO::FETCH_ASSOC);


        if($pwd == false){
            $stmt = null;
            header("location: adminLogin.php?error=wrongpassword");
            exit();
        }
        else if($pwd == true){
            $stmt = $this->connect()->prepare('SELECT * FROM admin WHERE admin_username = ? OR admin_gmail = ? AND admin_password = ?;');

            if(!$stmt->execute(array($uid, $uid, $pwd))){
                $stmt = null;
                header("location: adminLogin.php?error=stmtfailed");
                exit();
            }

            if($stmt->rowCount() == 0){
                $stmt = null;
                header("location: adminLogin.php?error=usernotfound2");
                exit();
            }
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);


            session_start();
            $_SESSION["userid"] = $user[0]["users_id"];
            $_SESSION["useruid"] = $user[0]["users_uid"];
            $stmt = null;
        }
        $stmt = null;

    }
}
