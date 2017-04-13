<?php

session_start();

function getPDO() {
    return new PDO("mysql:host=localhost;dbname=eurobasket", 'root', '');
}

function dbExecute($query, $values) {
    $pdo = getPDO();
    $statement = $pdo->prepare($query);
    for($i = 0; $i < count($values); $i++) {
        $statement->bindValue($i + 1, $values[$i]);
    }
    $statement->execute();
}

function loadArray($query, $values = array()){
    $pdo = getPDO();
    $stmt = $pdo->prepare($query);
    for($i = 0; $i < count($values); $i++) {
        $stmt->bindValue($i + 1, $values[$i]);
    }
    $stmt->setFetchMode(PDO::FETCH_ASSOC);


    $stmt->execute();
    return $stmt;

/*
    $q = $pdo->query($query);
    $q->setFetchMode(PDO::FETCH_ASSOC);
    return $q;
    */
}

function loadRow($query){
    $pdo = getPDO();
    $q = $pdo->query($query);
    $row = $q->fetch();
    return $row;
}
