 <?php   
    if($_SESSION['userlogin']>0){
		header('location:index.php');
	}
	elseif(isset($_POST['login'])) 
	{
		// $_SESSION['userlogin'] = $_POST['username'];
		$username = htmlspecialchars($_POST['username']);
		$password = htmlspecialchars($_POST['password']);
		$sql = "SELECT * FROM utilisateur WHERE username_ut=:username";
		$query = $dbh->prepare($sql);
		$query->bindParam(':username',$username,PDO::PARAM_STR);
		$query-> execute();

		while ($row=$query->fetch(PDO::FETCH_ASSOC)) 
		{
			if ($password == $row['USERNAME_UT']) 
			{
				// }//verifying Password
				// if (password_verify($password, $hashpass)) {
				session_start();
				$_SESSION['userlogin']=$row['USERNAME_UT'];
				$_SESSION['id_ut']=$row['ID_UT'];
				echo "<script>window.location.href='/ganjamah/liste/hotel.php'; </script>";
			}
			else 
			{
				$wrongpassword='
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Oh Snapp!😕</strong> Alert <b class="alert-link">Password: </b>You entered wrong password.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>';
			}
		}
	}
?>