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
        include 'includer.php';
    
    
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
                   
                           <li ><a href="create.php">Task Erstellen</a></li>
                            <li class="active"><a href="index.php">Offene Tasks</a></li>
                            <li><a href="solved.php">Erledigte Tasks</a></li>
                

                </ul>
               
              
            </div><!-- /.navbar-collapse -->
        </nav>
        
        
        <h1> Your Tasks</h1>
<br />
        
        <?php
              printTasks(0);  
                
     
       ?> 
        
        
    </body></html>