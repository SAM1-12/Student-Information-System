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
    <body class="">
        <div class="main-wrapper">

            <div class="login-bg-color bg-primary-300">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel login-box">
                            <div class="panel-heading">
                                <div class="panel-title text-center">
                                    <h4>Student Information System</h4>
                                </div>
                            </div>
                            <div class="panel-body p-60">
                                <form action="result.php" method="post">
                                	<div class="form-group">
                                		<label for="rollid">Student Id</label>
                                        <input type="text" class="form-control" id="rollid" placeholder="Enter Your Student Id" autocomplete="off" name="rollid">
                                	</div>
                               <div class="form-group">
                                        <label for="default" class="col-sm-100 control-label">Course</label>
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
                                     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                    <style>
                                body {font-family: Arial, Helvetica, sans-serif;}
                                * {box-sizing: border-box;}

                                    .input-container {
                                    display: -ms-flexbox; /* IE10 */
                                        display: flex;
                                         width: 100%;
                                        margin-bottom: 15px;
                                            }

                                            .icon {
                                          padding: 10px;
                                         background:#3EA99F;
                                        color: white;
                                        min-width: 50px;
                                        text-align: center;
                                            }

                                    .input-field:focus {
                                        border: 1px solid #3EA99F;
                                            }
                                                /* Set a style for the submit button */
                                    .btn {
                                        background-color: #3EA99F;
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
                                            </style>
                                            </head>
                                                <body>
                                    <div class="form-group mt-80">
                                        <div class="">
                                            <button type="submit" class="btn btn-primary btn-labeled pull-right">Search<span class=" search button"><i class=""></i></span></button>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                       <div class="col-sm-50">
                                        <a href="index.php">Back to Home</a>
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
