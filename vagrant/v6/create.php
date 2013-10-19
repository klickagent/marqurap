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
                   
                            <li class="active"><a href="create.php">Task Erstellen</a></li>
                            <li><a href="index.php">Offene Tasks</a></li>
                            <li  ><a href="solved.php">Erledigte Tasks</a></li>
                

                </ul>
               
              
            </div><!-- /.navbar-collapse -->
        </nav>
        
        
        <h1> Create Task</h1>
<br />
<form role="form" action="index.php" method="post">
  <div class="form-group" >
    <label for="titel">Titel</label>
    <input name="titel" type="text" class="form-control" id="titel" placeholder="titel">
  </div>
  <div class="form-group">
    <label for="Content">Content </label><br />
    <textarea rows="4" cols ="100" name="content">Yourtask</textarea>
  </div>
  <div class="form-group">
    <label for="prio">Priority </label><br />
    <select name ="prio">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>
  </div>
    <input type="hidden" name="action" value="create" />
  <button type="submit" class="btn btn-default">Submit</button>
</form>
       
        
        
    </body></html>