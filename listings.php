<?php
	mysql_connect('localhost', 'root', 'password') or die(mysql_error());
    mysql_select_db('Test');
?>
<html>
    <head>
      <title>WatHelp - Listings</title>
      <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body id="tut">		
      <div id="header">;
        <div id="tutor_heading">LISTINGS</div>
        <div id="title_tut">Wat<span id="bold">Help</span></div>
      </div>
	  <?php		
			$result = mysql_query('SELECT * from Test.tutors');
			if(!$result)
			{
				die('Invalid query: ' . mysql_error());
			}   
				   
            echo"<table class='listing-table'>";
            echo"<tr class='listing-headers-row'>";
            echo"<td>First Name</td>";
            echo"<td>Last Name</td>";
            echo"<td>Email</td>";
            echo"<td>Price (hourly)</td>";
            echo"<td>Monday</td>";
            echo"<td>Tuesday</td>";
            echo"<td>Wednesday</td>";
            echo"<td>Thursday</td>";
            echo"<td>Friday</td>";
            echo"<td>Saturday</td>";
            echo"<td>Sunday</td>";
            echo"</tr>";
                       
            while($row = mysql_fetch_array($result))
			{			
				$firstname = $row['firstname'];
				$lastname = $row['lastname'];
				$email = $row['email'];
				$price = $row['price'];
				$monday = $row['monday'];
				$tuesday = $row['tuesday'];
				$wednesday = $row['wednesday'];
				$thursday = $row['thursday'];
				$friday = $row['friday'];
				$saturday = $row['saturday'];
				$sunday = $row['sunday'];
				
				echo"<tr class='listing-content-row'>";
                echo"<td>".$firstname."</td>";
                echo"<td>".$lastname."</td>";
                echo"<td>".$email."</td>";
                echo"<td>".$price."</td>";
                echo"<td>".$monday."</td>";
                echo"<td>".$tuesday."</td>";
                echo"<td>".$wednesday."</td>";
                echo"<td>".$thursday."</td>";
                echo"<td>".$friday."</td>";
                echo"<td>".$saturday."</td>";
                echo"<td>".$sunday."</td>";
                echo"</tr>";
			}	
            echo"</table>";
	  ?>
      <script type="text/javascript" src="jquery.js"></script>
	  <script type="text/javascript" src="script.js"></script>
    </body>
</html>
