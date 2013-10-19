<html>
    <head>
        <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.min.css">
        <title>Uebung</title>
    </head>
    <?php
    require 'db_conn.php';
    session_start();
   
    
    ?>
    <?php
        $DBH = connect();
       $STH =  select($_GET['index'], $DBH);
       $obj = $STH->fetch();
   
    ?>

    <body>
        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                <a class="navbar-brand" href="#">Tasker</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                   
                            <li class="active"><a href="create.php">Task Updaten</a></li>
                            <li><a href="index.php">Offene Tasks</a></li>
                            <li  ><a href="solved.php">Erledigte Tasks</a></li>
                

                </ul>
               
              
            </div><!-- /.navbar-collapse -->
        </nav>
        
        
        <h1> Update Task</h1>
<br />
<form role="form" action="index.php" method="post">
  <div class="form-group" >
    <label for="titel">Titel</label>
    <?php
     print '<input name="titel" type="text" class="form-control" id="titel" value="'.$obj->titel.'">'
            ?>
  </div>
  <div class="form-group">
    <label for="Content">Content </label><br />
    <textarea rows="4" cols ="100" name="content"><?php print $obj->content ?></textarea>
  </div>
  <div class="form-group">
    <label for="prio">Priority </label><br />
    <select name ="prio">
  <option value="1" <?php if($obj->prio == 1){ print 'selected';}?>>1</option>
  <option value="2" <?php if($obj->prio == 2){ print 'selected';}?>>2</option>
  <option value="3" <?php if($obj->prio == 3){ print 'selected';}?>>3</option>
  <option value="4" <?php if($obj->prio == 4){ print 'selected';}?>>4</option>
</select>
  </div>
    <input type="hidden" name="action" value="update" />
    <?php
     print '<input type="hidden" name="index" value='.$_GET['index'].'" />';
     ?>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
       
    </body></html>