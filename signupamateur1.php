 <?php 
 include("connection.php");
		  if(isset($_POST["submit"]))
		  {
			
					
					
                    $fname=$_POST['fname'];
					$lname=$_POST['lname'];     				
                    $date=$_POST['date'];
                    $adress=$_POST['adress'];
					$email=$_POST['email'];
				    $reponse=$_POST['reponse'];
					$question=$_POST['question'];
					$user=$_POST['user'];
					$pass=$_POST['pass'];
					$sex=$_POST['sex'];
					$tel=$_POST['tel'];
		$sql="INSERT INTO `amateur`( `namateur`, `pamateur`, `ddn`, `f`, `tel`, `question_secret`, `adress`, `email`, `user`, `pwd`, `reponse_secret`, `Active`) VALUES ('$fname','$lname','$date',$sex,'$tel','$question','$adress','$email','$user','$pass','$reponse',1);";
	
        $query= mysqli_query($conn,$sql); 
		if(!$query)
			{
				die('could not enter data:'.mysqli_error($conn));
			}
			else{
				
			?> 
		
		  <div >
                  WELCOME
                  WELCOME
             You are now a Amateur in our site. PLease <a href="index.html">Login </a> to profit from our services.
              
            </div>
          </div>
          <?php
			}
		  }
		  ?>