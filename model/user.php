<?php
function addUser($pdo, $data){

    $firstname =$data['first_name'];
    $lastname =$data['last_name'];
    $email =$data['email'];
    $password = $data['password'];
    $phone = $data['phone'];


    $sql = "
        INSERT INTO client (first_name,last_name, email, password, phone)
        VALUES ( :first_name, :last_name, :email, :password, :phone)
    ";

    $stmt = $pdo->prepare($sql);

    try {
        return $stmt->execute(

            [
                "first_name" => $firstname,
                "last_name" => $lastname,
                "email" => $email,
                "password" => $password,
                "phone" => $phone
            ]
        );

    } catch (Exception $e) {

        $pdo->rollBack();

        throw $e;

    }
}

function getAllUser($pdo) {

    $sql = "
        SELECT *
        FROM user;
    ";

    $stmt = $pdo->prepare($sql);

    try {

         $stmt->execute();

    } catch (Exception $e) {

        $pdo->rollBack();

        throw $e;

    }
}



function getUser($pdo, $data) {

    $email =$data['email'];
    $password =$data['password'];


    $sql = "
        SELECT *
        FROM client
        WHERE email = :email AND password = :password;
    ";

    $stmt = $pdo->prepare($sql);

    try {

         $stmt->execute(array ("email"=> $email, "password"=> $password));
         
         $clientInfo = $stmt -> fetch();

        return $clientInfo;
        
    } catch (Exception $e) {

        $pdo->rollBack();

        throw $e;
    }
}

// function getUserId($pdo) {

//     $getid = intval($_GET['id']); // intval retourne la valeur entière de la variable

//     $sql = "
//         SELECT *
//         FROM user
//         WHERE id = ?
//     ";

//     $stmt = $pdo->prepare($sql);

//     try {

//          $stmt->execute(array($getid));
//          $clientInfo = $stmt -> fetch();

//          $_SESSION ['first_name']= $clientInfo ['first_name'];
//          $_SESSION ['last_name']= $clientInfo ['last_name'];
//          $_SESSION ['email']= $clientInfo ['email'];
//          $_SESSION ['phone']= $clientInfo ['phone'];

//     } catch (Exception $e) {

//         $pdo->rollBack();

//         throw $e;
//     }
// }


function deleteUser () {
    
}

?>