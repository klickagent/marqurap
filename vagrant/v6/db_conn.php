<?php

class task {  
    public $pkey;  
    public $titel;  
    public $content;  
    public $date;  
    public $prio;
    public $solved;
} 

function connect() {
 try {  
  # MS SQL Server and Sybase with PDO_DBLIB  
  $DBH = new PDO("mysql:host=localhost;dbname=task", "root", "rootpass");  
}  catch (PDOException $e) {  
    echo $e->getMessage();  
};   
return $DBH;
}

function selectall($solved, $DBH){
    $solve= array('solved' => $solved);
    $STH = $DBH->prepare('SELECT pkey, titel, content, date, prio, solved from tasks where solved = :solved');  
    $STH->execute($solve);
    $STH->setFetchMode(PDO::FETCH_CLASS, 'task');  
    return $STH;
}

function select($index, $DBH){
 
    $id= array( 'index' => $index);
    $STH = $DBH->prepare('SELECT pkey, titel, content, date, prio, solved from tasks where pkey = :index');  
    $STH->execute($id);
    $STH->setFetchMode(PDO::FETCH_CLASS, 'task');  
    return $STH;
}

function insert($data, $DBH){
    
    $STH = $DBH->prepare("INSERT INTO tasks (titel, content, date, prio, solved) value (:titel, :content, :date, :prio, :solved)");  
    $STH->execute($data); 
}

function update($data, $DBH){
    $STH = $DBH->prepare("UPDATE tasks SET titel=:titel, content=:content, date=:date, prio=:prio, solved=:solved WHERE pkey=:index");  
    $STH->execute($data); 
    
}

function delete($index, $DBH){
    $data = array( 'id' => $index);
    $STH = $DBH->prepare("DELETE FROM tasks WHERE pkey=:id");  
    $STH->execute($data); 
    
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
