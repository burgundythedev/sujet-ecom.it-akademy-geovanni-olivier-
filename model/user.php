<?php

// function pour register/login:
function addUser($pdo, $data) {

    $firstname =$data['first_name'];
    $lastname =$data['last_name'];
    $email =$data['email'];
    $password = sha1($data ['password']);
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

function getUser($pdo, $data) {

    $email =$data['email'];
    $password = sha1($data ['password']);


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

function addOrder ($pdo, $id) {
    
    $id = $_SESSION['id'];

    $sql = "
        INSERT INTO `order` (id_client,paid)
        VALUES (:id_client, :paid)
    ";

    $stmt = $pdo->prepare($sql);

    try {
        return $stmt->execute(

            [
                "id_client" => $id,
                "paid" => 0
            ]
        );

    } catch (Exception $e) {

        $pdo->rollBack();

        throw $e;

    }
}

function getItem ($pdo, $data) {

    $data = $_POST['add'];

    $sql ="
    
    INSERT INTO content-order (id_item, quantity)
    VALUES (:id_item, :quantity)

    ";

    $stmt = $pdo->prepare($sql);

    try {
        $stmt->execute(

            [
                "id_item" => $data,
                "quantity" => 0
            ]
        );
        
    } catch (Exception $e) {
        $pdo->rollBack();
        throw $e;
    }
}




// function getAllUser($pdo) {

//     $sql = "
//         SELECT *
//         FROM user;
//     ";

//     $stmt = $pdo->prepare($sql);

//     try {

//          $stmt->execute();

//     } catch (Exception $e) {

//         $pdo->rollBack();

//         throw $e;

//     }
// }


?>