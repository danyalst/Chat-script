<?php 
    session_start();

    if (!isset($_SESSION['userid'])): 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title>Chat</title>
    
    <link rel="stylesheet" type="text/css" href="main.css" />
    
    <script src="room/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="check.js"></script>
	<script>
$(function(){
	$("#userid").focus();
});	
	</script>
</head>

<body>
    <div id="page-wrap"> 
    
    	<div id="header">
        	<h1><a href=""></a></h1>
        </div>
        
    	<div id="section">
        	<form style="margin:auto;" name="form_1" method="post" action="jumpin.php">
            	<label>Your Name:</label>
                <div>
                	<input type="text" id="userid" name="userid" />
                    <input type="submit" value="Check" id="jumpin" />
            	</div>
            </form>
        </div>
        
        <div id="status">
        	<?php if (isset($_GET['error'])): ?>
        		<div class="warning" >Error</div>
        	<?php endif;?>
        </div>
        
    </div>
    
</body>

</html>

<?php 
    else:
        require_once("chatrooms.php");
    endif; 
?>
