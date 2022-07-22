<?php
session_start();
error_reporting(0);
include('includes/config.php');
if($_SESSION['alogin']!=''){
$_SESSION['alogin']='';
}
if(isset($_POST['login']))
{
$uname=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:uname and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} else{

    echo "<script>alert('Invalid Details');</script>";

}

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    
        <nav>
        <div class="row clearfix">
          
            <ul class="main-nav" animate slideInDown>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Information System</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <head>

    
   
</head>
<body>
     <script src="https://kit.fontawesome.com/95a02bd20d.js"></script>
     

     <div class="panel-body p-60">
  <div class="container">
     <div class="card">
       <div class="face face1">
         <div class="content">
         <img class="logo" src="images/QCU.png"/>              
           <h3>ADMIN LOG IN<h3>
         </div>
       </div>
       <div class="face face2">
         <div class="content">
           <form class="form-horizontal" method="post">
           	
        
                     <div class="col-sm-100">
                     	<label for="uname"><b>Username</b></label>
                 <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Enter username">
                               </div>
                              </div>
                     <div class="input-container">
 			<div class="col-sm-100">
 						<label for="psw"><b>Password</b></label>
                      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Enter password">
                                      </div>
                                        </div>
                             <div class="form-group mt-20">
                                  <button type="submit" name="login" class="btn">Sign in</button>
         </div>
       </div>
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
  background-image: url('images//QCUBG.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
img{
  position:center;
  width: 950px;
 
}
button {
  background-color: #008080;
  color: white;
  padding: 11px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}
.container{
  width: 1000px;
  position: relative;
  display: flex;
  justify-content: space-between;
  flex-wrap:wrap;
  
}
.logo{
  width: 90px;
  height: 90px;
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
  /*box-shadow:
    inset 0 0 60px whitesmoke,
    inset 20px 0 80px #f0f,
    inset -20px 0 80px #0ff,
    inset 20px 0 300px #f0f,
    inset -20px 0 300px #0ff,
    0 0 50px #fff,
    -10px 0 80px #f0f,
    10px 0 80px #0ff;*/
   
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
  color: #FFDF24;
  display: inline-block;
   
}

.container .card .face.face1 .content h3{
  font-size: 1em;
  color: #FFDF24;
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
  color: #8866CC;
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
                                                    	</div>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- /.panel -->
                                        </div>
                                        <!-- /.col-md-11 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                        </section>

                    </div>
                    <!-- /.col-md-6 -->
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

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function(){

            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>
