



<html lang="en">
 <head>
        <!-- Title -->
        <title>Backend_contact</title>
        <!-- Meta -->
       <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
    </head>
    <body>

      
            <!-- === BEGIN CONTENT === -->
          
                    <div class=" margin-vert-30">
                        <!-- Register Box -->
                       <div class="col-md-12">
                         <div class="col-md-6">
                           <font size="7">Backend : PDF</font>
                           </div>
                            <div class="col-md-6">
                          <p class="text-right"> <font size="6">
                           <a href="admin.php"><span type="span" class="label label-warning">Home</span></a>
                            <a href="be_pdf_insert.php"><span type="span" class="label label-warning">insert</span></a></font></p>
                            </div>
                            <br>
                             <br> <br>
                        <div class="col-md-12">
                           
                              
                <!-- titles -->  
                  <div class="row text-center">
             <div class="col-sm-1 col-xs-1">
                                <label>id</label>                 
             </div>
               <div class="col-sm-2 col-xs-2">
                                <label>category</label>                 
             </div>
               <div class="col-sm-3 col-xs-3">
                                <label>name</label>                 
             </div>
               <div class="col-sm-2 col-xs-2">
                                <label>size</label>                 
             </div>
               <div class="col-sm-3 col-xs-3">
                                <label>upload</label>                 
             </div>
                    <div class="col-sm-1 col-xs-1">
                                                
             </div>                
                        
       </div>                    




<?php 

	$con=mysqli_connect("localhost","root","");
	   
if(!$con)				  

{	
	die("Could not connect" . mysql_error());  
 }
	mysqli_select_db($con,"CITY");

	
	$query  = "SELECT * FROM pdf";
	$qqq=mysqli_query($con,$query) or  die("Error, query failed1");
//$row = mysqli_fetch_array($qqq)
$num_rows = mysqli_num_rows($qqq);
//echo $num_rows;
$nr=1;
while($num_rows>0)
{
	
//	$_SESSION['num_rows'] = $nr;
	
	
//	$var_value =$_SESSION['num_rows'];
//	echo $var_value;
	$query1  = "SELECT * FROM pdf WHERE id1=$nr";
	$qqq1=mysqli_query($con,$query1) or  die("Error, query failed2");
	$row1 = mysqli_fetch_array($qqq1)

?>
	 <div class="row">
 	 <form action="be_pdf_1.php" method="POST">
             <div class="col-sm-1 col-xs-1">
                                <input name="id" class="form-control margin-bottom-20" type="text" value="<?php echo $row1['id1']; ?>">
             </div>
          <div class="col-sm-2 col-xs-2">
                                <input name="category" class="form-control margin-bottom-20" type="text" value="<?php echo $row1['category']; ?>" >
             </div>
               <div class="col-sm-3 col-xs-3">
                                <input name="name" class="form-control margin-bottom-20" type="text" value="<?php echo $row1['name']; ?>" >
             </div>
               <div class="col-sm-2 col-xs-2">
                                <input name="size" type="text" class="form-control margin-bottom-20" value="<?php echo $row1['size']; ?>"> 
             </div>
               <div class="col-sm-3 col-xs-3">
                                <input name="userfile" id="userfile"  type="file" class="form-control margin-bottom-20">
             </div>  
             <div class="col-sm-1 col-xs-1">
                           <input type="submit" value="<--" >
             </div> 
     </form>                 
       </div>
       <?php
	$num_rows--;
	$nr++;
}
?>


                    <!--end titles --> 
      
                                 
                          
                        </div>
                        <!-- End Register Box -->
                       
        			</div>
    </body>
</html>





<?php
mysqli_close($con);
?>
<!--// application/pdf
//application/vnd.openxmlformats-officedocument.wordprocessingml.document
application/msword
-->



