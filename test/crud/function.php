<?php
require "../connection.php";

function inputData($input=[])
{
    include '../connection.php';
    $sql='INSERT INTO perpustakaan(judul,halaman,penulis) VALUES(?,?,?)';

    $result=$db->prepare($sql);
    $result->bindValue(1, $input['judul'], PDO::PARAM_STR);
    $result->bindValue(2, $input['halaman'], PDO::PARAM_STR);
    $result->bindValue(3, $input['penulis'], PDO::PARAM_STR);
    $result->execute();
}

function deleteSiswa($delete) {
    include '../connection.php';

    $sql = 'DELETE FROM perpustakaan WHERE id = ?';

    try {
        $result = $db->prepare($sql);
        $result->bindValue(1, $delete['id'], PDO::PARAM_INT);
        $result->execute();
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "<br />";
        return false;
    }
    return true;
}

function edit($edit=[]) {
    include '../connection.php';

    $sql = 'UPDATE perpustakaan SET judul = ? WHERE id = ?';

    $result=$db->prepare($sql);
    $result->bindValue(1, $edit['judul'], PDO::PARAM_STR);
    $result->bindValue(2, $edit['id'], PDO::PARAM_INT);
    $result->execute();
}

function comand($query)
{
    include '../connection.php';

    global $db;
    $result = $db->query($query);
    $rows=[];
    while($row=$result->fetch(PDO::FETCH_ASSOC))
    {
        $rows[]=$row;
    }
    return $rows;
}
function searching($keyword){
    $query="SELECT * FROM perpustakaan WHERE judul LIKE '%$keyword%' OR halaman LIKE '%$keyword%' OR penulis LIKE '%$keyword%' ";
    return comand($query);
}
