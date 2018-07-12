<?php 
	error_reporting(0);
	if(!($_GET)) 
	{
		include('id.php');
	}
	elseif($_GET["lang"]=="en") 
	{
		include('en.php');
	}
	else
	{
		include('id.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Share Trans</title>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/semantic.min.css">
	<link rel="icon" type="image/jpg" href="assets/img/logo-header.png">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="assets/js/semantic.min.js"></script>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<meta name       ="description" content="Share Trans is a marketplace connecting individuals and institutions/companies who want to rent their vehicles with individuals and institutions/companies that are in need of a vehicle for a particular purpose. Through Share Trans individuals or institutions can register the vehicle easily and free of charge, as well as provide information about vehicle hire online to individuals or agencies who need a vehicle.">
	<meta name       ='keywords' content="Rent car, Sewa Kendaraan"/>
	<meta http-equiv ="content-type" content="text/html;charset=UTF-8">
	<meta property   ="og:type" content="website" />
	<meta property   ="og:title" content="Share Trans" />
	<meta property   ="og:site_name" content="Share Trans"/>
	<meta property   ="og:image" itemprop="image" content="http://sharetrans.id/assets/img/capture.jpg" />

	<script src="assets/js/style.js" type="text/javascript"></script> 
</head>
<body>
	<div class="preloader"></div>
	<div id="navibar">
		<div class="container">
			<div class="ui grid">
				<div class="right floated left aligned two wide computer four wide tablet four wide mobile column">
					<div class="ui compact selection dropdown" id="lang">
						<input type="hidden" name="country">
						<i class="dropdown icon"></i>
						<div class="default text"><?php if($_GET["lang"]=="en"){?><i class="gb flag"></i><?php }else{ ?><i class="id flag"></i><?php } ?></div>
						<div class="menu">
							<a href="?lang=id" class="item" data-value="id"><i class="id flag"></i></a>
							<a href="?lang=en" class="item" data-value="gb"><i class="gb flag"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section id="header">
		<div class="container">
			<div class="ui centered grid">
				<div class="seven wide computer seven wide tablet fifteen wide mobile column" style="text-align:center;">						
					<div class="ui small image">
						<img src="assets/img/logo-header.png">
					</div>
					<p id="logo-text">S H A R E <span>T R A N S</span></p>
					<p id="sublogo-text">find it | use it | return it</p>
					<br>
					<div class="ui teal raised padded segment">
						<h3><?php echo $headAbout;?></h3>
						<p align="justify" style="font-size:15px"><?php echo $contAbout;?></p>
					</div>

					
				</div>
				<div class="seven wide computer seven wide tablet fifteen wide mobile column" style="text-align:center;">
					<span class="ui basic teal large button"><?php echo $headTeam;?></span>
					<div class="team">
						<div class="ui grid">
							<div class="two wide computer four wide tablet eight wide mobile column">
								<center><img src="assets/img/guspur.jpg" class="ui small circular image"></center>
								<p class="name">Guspur</p>
								<p class="position">CEO</p>
							</div>
							<div class="two wide computer four wide tablet eight wide mobile column">
								<center><img src="assets/img/tio.jpg" class="ui small circular image"></center>
								<p class="name">Tio</p>
								<p class="position">COO</p>
							</div>
							<div class="two wide computer four wide tablet eight wide mobile column">
								<center><img src="assets/img/gede.jpg" class="ui small circular image"></center>
								<p class="name">Sugita</p>
								<p class="position">CMO</p>
							</div>
							<div class="two wide computer four wide tablet eight wide mobile column">
								<center><img src="assets/img/maha.jpg" class="ui small circular image"></center>
								<p class="name">Maha</p>
								<p class="position">CTO</p>
							</div>
							<div class="two wide computer four wide tablet eight wide mobile column">
								<center><img src="assets/img/riska.jpg" class="ui small circular image"></center>
								<p class="name">Riska</p>
								<p class="position">Designer</p>
							</div>
							<div class="two wide computer four wide tablet eight wide mobile column">
								<center><img src="assets/img/yoga.jpg" class="ui small circular image"></center>
								<p class="name">Yoga</p>
								<p class="position">Tech Officer</p>
							</div>
							<div class="two wide computer four wide tablet eight wide mobile column">
								<center><img src="assets/img/abhi.jpg" class="ui small circular image"></center>
								<p class="name">Abhi</p>
								<p class="position">Op Officer</p>
							</div>
							<div class="two wide computer four wide tablet eight wide mobile column">
								<center><img src="assets/img/satya.jpg" class="ui small circular image"></center>
								<p class="name">Satya</p>
								<p class="position">Tech Officer</p>
							</div>
						</div>
					</div>
					<div class="ui blue raised padded compact segment">
						<form action="index.php" method="post" enctype="multipart/form-data" class="ui form segment">
							<h5><?php echo $headSubs;?></h5>
							<div class="one field">
								<div class="ui left icon medium action input">
									<i class="mail outline icon"></i>
									<input name="email" type="email" placeholder="<?php echo $contSubs;?>" required="required">
									<div class="ui blue submit button"><?php echo $buttonSubs;?></div>
								</div>
							</div>
							<div class="ui error message"></div>
						</form>
					</div>
					<h3><?php echo $headDev;?></h3>
					<img src="assets/img/tecart.png" class="ui mini image" style="display:inline;text-align:center">
				</div>
			</div>
		</div>
	</section>
	<script type="text/javascript">
		$('.ui.form').form({fields:{email     : ['empty', 'email']}});
		$( ".submit" ).click(function() {
		  	$( ".ui.form" ).submit();
		});
		$('#lang').dropdown();
	</script>
	<?php 
	$host	="localhost";
	$user 	="u346754904_trans";
	$pass 	="sharetrans";
	$db 	="u346754904_trans";
	$conn 	= mysqli_connect($host,$user,$pass, $db);

	if (mysqli_connect_errno())
	{
		//echo "<script type='text/javascript'>alert('Failed to connect to MySQL:  ".mysqli_connect_error()."');</script>";
	}
	if (($_POST) && $_POST['email']!='') 
	{
		$email = $_POST['email'];

		$sql = "INSERT INTO subscribers(email)VALUES('$email')";

		if (mysqli_query($conn, $sql))
		{
	    	echo 	'<script type="text/javascript">
	    				notifyMe("Notification", "Your email has been submit!", "http://sharetrans.id")
	     			</script>';
		} 
		else 
		{
		    echo "Error: " . $sql . "<br>" . $conn->error;
		    echo '<script type="text/javascript">
	    				notifyMe("Notification", "Unsuccess", "http://sharetrans.id")
	     			</script>';
		}

		$conn->close();
	}
?>
</body>
</html>