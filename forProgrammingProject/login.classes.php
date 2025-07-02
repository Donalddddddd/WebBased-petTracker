<?php

class login extends dbh{

    protected function getUser($uid, $pwd){
        $stmt = $this->connect()->prepare('SELECT users_pwd FROM users WHERE users_uid = ? OR users_email = ?;');


        if(!$stmt->execute(array($uid, $uid))){
            $stmt = null;
            header("location: login2.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0){
            $stmt = null;
            header("location: login2.php?error=usernotfound1");
            exit();
        }
        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd, $pwdHashed[0]["users_pwd"]);

        if($checkPwd == false){
            $stmt = null;
            header("location: login2.php?error=wrongpassword");
            exit();
        }
        else if($checkPwd == true){
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE users_uid = ? OR users_email = ? AND users_pwd = ?;');

            if(!$stmt->execute(array($uid, $uid, $pwdHashed[0]['user_pwd']))){
                $stmt = null;
                header("location: login2.php?error=stmtfailed");
                exit();
            }

            if($stmt->rowCount() == 0){
                $stmt = null;
                header("location: login2.php?error=usernotfound2");
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
