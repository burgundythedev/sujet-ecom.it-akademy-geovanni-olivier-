<?php

// function pour register/login:
function addUser($pdo, $data) {

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



// #####################function pour produit/panier:


function addItem($pdo, $data) {

    $idItem = $data['id_item'];
    $quantity = $data['quantity'];



    $sql = "
        INSERT INTO content-order (id_item, quantity)
        VALUES ( :id_item, :quantity)
    ";

    $stmt = $pdo->prepare($sql);

    try {
        return $stmt->execute(

            [
                "id_item" => $idItem,
                "quantity" => $quantity

            ]
        );

    } catch (Exception $e) {

        $pdo->rollBack();

        throw $e;

    }
}

function getItem($pdo, $data) {


    $sql = "
        SELECT *
        FROM item
        WHERE id = :id;
    ";

    $stmt = $pdo->prepare($sql);

    try {

         $stmt->execute(array ("id"=> $id));
         
         $product = $stmt -> fetch();

        return $product;
        
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