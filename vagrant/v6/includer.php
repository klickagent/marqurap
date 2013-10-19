<?php  

function printTasks($solved){
       $DBH = connect();
       $STH =  selectall($solved, $DBH);
        while($obj = $STH->fetch()) { 
                taskdetais($obj);
        }  
}
function taskdetais($obj){
    if($obj->solved == "0"){
        $done = "Done";
    }else{
        $done = "UnDone";
    }
    print'
    <table border="1">
    <tr>
    <td>Titel:</td>
    <td>'.$obj->titel.'</td>
    </tr>
    <tr>
    <td>Inhalt:</td>
    <td>'.$obj->content.'</td>
    </tr>
    <tr>
    <td>Prioritaet:</td>
    <td>'.$obj->prio.'</td>
    </tr>
    <tr>
    <td><a href="?action=delete&index='.$obj->pkey.'">Delete</a></td>

    <td><a href="?action=switch&index='.$obj->pkey.'">'.$done.'</a></td>
    </tr>
    </table> <br />';
}
    
    
    
    
    if(isset($_POST['action'])){
        $DBH = connect();
        if($_POST['action']=='create'){
            $data = array('titel'=>$_POST['titel'], 'content'=>$_POST['content'], 'date'=>time(), 'prio'=>$_POST['prio'], 'solved'=>0);
            insert($data, $DBH);
        }if($_POST['action']=='update'){
            $data = array('index'=>$_POST['index'], 'titel'=>$_POST['titel'], 'content'=>$_POST['content'], 'date'=>time(), 'prio'=>$_POST['prio'], 'solved'=>0);
            update($data, $DBH);
        }
        }
        
    if(isset($_GET['action'])&& $_GET['action']=="delete"){
           $DBH = connect();
            delete($_GET['index'], $DBH);
    }
    if(isset($_GET['action'])&& $_GET['action']=="switch"){
           $DBH = connect();
           $STH =  select($_GET['index'], $DBH);
           $obj = $STH->fetch();
           if($obj->solved == 0){
            $solved =  1;
           }  else {
            $solved = 0;    
           }
           $data = array('index'=>$_GET['index'], 'titel'=>$obj->titel, 'content'=>$obj->content, 'date'=>$obj->date, 'prio'=>$obj->prio, 'solved'=>$solved);
           update($data, $DBH);
    }
        ?>