<?php

function addUser($pdo, $data){

    $firstname =$data['firstname'];
    $lastname =$data['lastname'];
    $email =$data['email'];


    $sql = "
        INSERT INTO user (first_name,last_name, email)
        VALUES ( :firstname, :lastname, :email)
    ";

    $stmt = $pdo->prepare($sql);

    try {
        return $stmt->execute(

            [
                "firstname" => $firstname,
                "lastname" => $lastname,
                "email" => $email
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
        FROM user
        WHERE email = $email AND password = $password;
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