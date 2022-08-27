<?php

class Login
{

    /**
     * @var Database
     */
    private $db;

    public function __construct(){
        $this->db = Database::getInstance();
    }

    /**
     * Login the student
     * @param string $student_id
     * @param string $student_pin
     * @return void
     */
    public function studentLogin(string $student_id, string $student_pin){

        try {

        $sql = "SELECT * FROM `student_accounts` WHERE `student_id` = :sid LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":sid", $student_id, PDO::PARAM_STR);
            if ($stmt->execute()){
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($stmt->rowCount() > 0){
                    $hashed_pin = $row['student_pin'];
                    if (password_verify($student_pin, $hashed_pin)){

                        Session::setSession('sid', $row['student_id']);
                        Session::setSession('isLoggedIn', true);

                        return true;

                    } else {
                        echo "Incorrect PIN";
                    }
                } else {
                    echo "No record found";
                }
            } else {
                echo "Something went wrong with the database";
            }

        } catch (Exception $e){
            echo "Error: " . $e->getMessage();
        }

    }

    private function verifyPIN($plain, $hashed)
    {
        if (password_verify($plain, $hashed)){
            return true;
        }
    }

}