<?php  
 //load_video.php  
 $connect = mysqli_connect("localhost", "root", "", "booksmart");  
 if(isset($_POST["price"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM product WHERE product_price <= ".$_POST['price']." ORDER BY product_price desc";  
      $result = mysqli_query($connect, $query);  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= ' 
			 <div class="content" id="content">
				<h2>Idea</h2>
				<div id="wrapper">
				  <div id="video">
					 <video id="video" width="700" height="300" autoplay="autoplay" loop>
					    <source src="video/mansion.mp4" type="video/mp4" />
					 </video>
				  </div>
			  ';  
           }  
      }  
      else  
      {  
           $output = "No Video Found";  
      }  
      echo $output;  
 }  
 ?>  