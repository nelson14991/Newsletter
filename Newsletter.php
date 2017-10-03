<?php
require('Database.php');

class Newsletter{
    private static $email;
    private static $name;
    private static $datetime = null;
    
    public static function register($email,$name){
        self::$email    = $email;
        self::$name    = $name;
        self::$datetime    = date('Y-m-d H:i:s');    
        $pdo = Database::connect();
        $checkExistingEmail = $pdo->prepare("SELECT COUNT(*) FROM subscribers WHERE subscriber_email='$email'");
        $checkExistingEmail->execute();
        $data_exists = ($checkExistingEmail->fetchColumn() > 0) ? true : false;
        if (!$data_exists) {
            $sql = "INSERT INTO subscribers (subscriber_email, subscriber_name,subscribtion_date) VALUES (:email,:name ,:datetime)";
            $q = $pdo->prepare($sql);
            $q->execute(
                array(':email' => self::$email, ':name' => self::$name,':datetime' => self::$datetime));
            if ($q) {
                $status  = "success";
                $message = "You have been successfully subscribed";
            } else {
                $status  = "error";
                $message = "An error occurred, please try again";
            }
        } else {
            $status  = "error";
            $message = "This email is already subscribed";
        }
        
        $data = array(
            'status'  => $status,
            'message' => $message
        );
        echo json_encode($data);
        Database::disconnect();
    }

    public static function getSubscribers(){
        
        $pdo = Database::connect();
        $subscriberData = $pdo->prepare("SELECT * FROM subscribers");
        $subscriberData->execute();
        $result = $subscriberData->fetchAll(PDO::FETCH_ASSOC);
        $data = array(
		"sEcho" => 1,
        "iTotalRecords" => count($result),
        "iTotalDisplayRecords" => count($result),
        "aaData"=>$result);
        echo json_encode($data);
        Database::disconnect();
    }

}
?>