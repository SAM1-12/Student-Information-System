<?php
session_start();
error_reporting(0);
include('includes/config.php');?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Information System</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/icheck/skins/flat/blue.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
   
       
<image class="bg" src="images/QCUBG.jpg"/>


            <div class="panel-body p-60">
                              <div class="container">
     <div class="card">
       <div class="face face1">
         <div class="content">
            <img class="logo" src="images/QCU.png" />         
           <h3>Quezon City University</h3>
         </div>
       </div>
       <div class="face face2">
        <form action="result.php" method="post">
           <div class="form-group">
                                  <div class="content">
           <form class="form-horizontal" method="post">
            <div class="input-container">
            <i class="fa fa-id-card icon"></i>
                                  
                                        <input type="text" class="form-control" id="rollid" placeholder="Enter Your Student Id" autocomplete="off" name="rollid">
                                  </div>
                                <div class="input-container">
                  <i class="fa fa-graduation-cap icon"></i>
                                
                                    <select name="class" class="form-control" id="default" required="required">
            <option value="">Select Course</option>
              <?php $sql = "SELECT * from tblclasses";
            $query = $dbh->prepare($sql);
                  $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                if($query->rowCount() > 0)
              {
          foreach($results as $result)
                {   ?>
            <option value="<?php echo htmlentities($result->id); ?>"><?php echo htmlentities($result->ClassName); ?>&nbsp; Section-<?php echo htmlentities($result->Section); ?></option>
              <?php }} ?>
              </select>
                  </div>
                           <button type="submit" class="btn btn-primary btn-labeled pull-right">Search<span class=" search button"><i class=""></i></span></button>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                       <div class="col-sm-10">
                                        <a href="../home-1.php">Back to Home</a>
                               </div>
                                     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                    <style>
                              
                              
                              
                              
body{
  display:flex;
  margin:0;
  padding:0;
  min-height: 100vh;
  
  justify-content: center;
  align-items: center;
  font-family: arial;
 
}
.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}


.logo{
  width: 90px;
  height: 90px;
}
.bg{
  position: absolute;
  
    width: 100%;
    height: 100%;
   
    background-size: cover;
   
    z-index: 0;
}

.icon {
  padding: 10px;
  background: #008080;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: #008080;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
.container{
  width: 1000px;
  position: relative;
  display: flex;
  justify-content: space-between;
  flex-wrap:wrap; 
}
.container .card{
  position: relative;
}

.container .card .face{
  width:400px;
  height: 200px;
  transition:.5s;
  
}

.container .card .face.face1{
  position: relative;
  background: #333;
  display: flex;
  justify-content: center;
  align-content:center;
  align-items: center;
  z-index: 1;
  transform: translateY(100px);
}

.container .card:hover .face.face1{
  transform: translateY(0);
  
 
}

.container .card .face.face1 .content{
  opacity: .2;
  transition:  0.5s;
  text-align: center;
  
}

.container .card:hover .face.face1 .content{
  opacity: 1;
 
}

.container .card .face.face1 .content i{
  font-size: 3em;
  color: #FFD700;
  display: inline-block;
   
}

.container .card .face.face1 .content h3{
  font-size: 1em;
  color: #FFD700;
  text-align: center;
  

}

.container .card .face.face1 .content a{
   transition: .5s;
}

.container .card .face.face2{
   position: relative;
   background: whitesmoke;
   display: flex;
   align-items: center;
   justify-content: center;
   padding: 20px;
  box-sizing: border-box;
  box-shadow: 0 20px 50px rgba(0,0,0,.8);
  transform: translateY(-100px);
}

.container .card:hover .face.face2{
    transform: translateY(0);

}

.container .card .face.face2 .content p, a{
  font-size: 10pt;
  margin: 0 ;
  padding: 0;
  color:#333;
}

.container .card .face.face2 .content a{
  text-decoration:none;
  color: black;
  box-sizing: border-box;
  outline : 1px dashed #333;
  padding: 10px;
  margin: 15px 0 0;
  display: inline-block;
}

.container .card .face.face2 .content a:hover{
  background: #333 ;
  color: whitesmoke; 
  box-shadow: inset 0px 0px 10px rgba(0,0,0,0.5);
}

                                        }
                                            </style>
                                            </head>
                                                <body>
                                   
                                    </div>
                                </form>
                                <hr>
                            </div>
                        </div>
                        <!-- /.panel -->
                    
                    </div>
                    <!-- /.col-md-6 col-md-offset-3 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /. -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/icheck/icheck.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function(){
                $('input.flat-blue-style').iCheck({
                    checkboxClass: 'icheckbox_flat-blue'
                });
            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>
