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

/*


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



function getUser($pdo, $id) {

    $sql = "
        SELECT *
        FROM user
        WHERE id = $id;
    ";

    $stmt = $pdo->prepare($sql);

    try {

         $stmt->execute();

    } catch (Exception $e) {

        $pdo->rollBack();

        throw $e;
    }
}


function deleteUser () {
    
}
*/
?>