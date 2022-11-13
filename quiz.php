<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quiz</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
	<style type="text/css">
	* {
		font-family: roboto;
	}
	body {
		background-image: url(paolo.jpg);
		object-fit: cover;
		
		padding-bottom: 100px;
	}	
	header {
		background-color: white;
		text-align: center;
		border-radius: 100px;
		box-shadow: 0px 0px 15px black;
	}
	div {
		margin-bottom: 3px;
		padding: 0;
		font-size: 14px;
		font-family: sans-serif;
		
		

	}
	div.questions {
		margin-bottom: 10px;
	}
	div.number-one {
		margin-bottom: 20px;
		margin-left: 20px;
		text-align: left;
	}
	input {
		font-family: sans-serif;
	}
	.form-container {
		margin-left: 50px;
		margin-bottom: 50px;
		margin-top: 50px;
		
		
		border-radius: 10px;
		flex: 1;
		background-color: white;
		box-shadow: 1px 1px 10px black;

		
		width: 50%;
	}
	.container {
		
	}
	.button {
		padding: 10px;
		width: 100px;
		margin-top: 20px;
		margin-left: 20px;
		color: white;
		border-radius: 50px;
		background-color:#008272;
		margin-bottom: 20px;
		transition: .2s;
		border: none;
		height: 50px;
		box-shadow: 0px 0px 5px black;
	}
	.button:hover {
		background-color: #04A662;
		cursor: pointer;
		color: white;
	}
	h3 {
		color: #008272;
	}
	.flex-cont {
		display: flex;
		background-color: floralwhite;
		border-radius: 100px;
		background-color: transparent;
	}
	.flex-cont-two {
		flex: 1;
		width: 20px;
		background-color: transparent;
		
		vertical-align: middle;

	}
	.img-contain {
		
		background-image: url(ito.jpg);
		object-position: left;
		border-radius: 100px;
	}
	.img-kontain {
		width: 500px;
	}
	.output {
		text-align: center;
		margin-top: 0;
		padding: 20px;
		font-size: 50px;
		background-color: white;
		box-shadow: 1px 1px 10px black;
		border-radius: 10px;
		color: #7BBEB6;
		transition: 1s;
	}
	.titless {
		font-size: 60px;
		font-family: roboto;
		margin-top: 30px;
		margin-left: 50px;
		color:  #008272;
		font-weight: bold;
		display: inline-block;
		background-color: transparent;
		padding: 20px;
		border-radius: 60px;
		box-shadow: 0px 0px 4px gray;
	}
	span {
		color: #FF0000;
		background-color: #FFB3B3;
	}
	.pangalan {
		margin-top: 350px;
		background-color: whitesmoke;
		padding: 20px;
		font-size: 20px;
		border-radius: 10px;
		transition: 1s;
	}
	</style>
</head>
<body>

	<?php 


	$num1 = $num2 = $num3 = $num4 = $num5 = "";
	
	$num1Err = $num2Err = $num3Err = $num4Err = $num5Err = "";
	$wew = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// code...
		if (empty($_POST["choices-in-1"])) {
			// code...
			$wew = "*";
			$num1Err = $wew . " Please Answer The Question.";
			
	} else {
			$num1 = $_POST['choices-in-1'];
			
			}
		if (empty($_POST["choices-in-2"])) {
			// code...
			$wew = "*";
			$num2Err = $wew . " Please Answer The Question.";
	} else {
			$num2 = $_POST['choices-in-2'];
	}
		if (empty($_POST["choices-in-3"])) {
			// code...
			$wew = "*";
			$num3Err = $wew . " Please Answer The Question.";
	} else {
			$num3 = $_POST['choices-in-3'];
	}

	    if (empty($_POST["choices-in-4"])) {
			// code...
			$wew = "*";
			$num4Err = $wew . " Please Answer The Question.";
	} else {
			$num4 = $_POST['choices-in-4'];
	}
		if (empty($_POST["choices-in-5"])) {
			// code...
			$wew = "*";
			$num5Err = $wew . " Please Answer The Question.";
	} else {
			$num5 = $_POST['choices-in-5'];
	}


}
	

	 ?>



<?php function input_t($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

  ?>





  <?php 
//SAGOT AY B,A,D,C,A

  $count = 0;
  $oneans = "B";
  $twoans = "A";
  $threeans = "D";
  $fourans = "C";
  $fiveans = "A";
  $scorecall = "";
  $upper = $avg = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if ($num1 == $oneans) {
  	// code...
  	$count++;
  }
  if ($num2 == $twoans) {
  	// code...
  	$count++;
  }
  if ($num3 == $threeans) {
  	// code...
  	$count++;
  }
  if ($num4 == $fourans) {
  	// code...
  	$count++;
  }
  if ($num5 == $fiveans) {
  	// code...
  	$count++;
  }
  $scorecall = "You've got ($count / 5)<br>";
  $upper = "<strong>Result | Quiz By: John Paolo F. Badiang BSIT 3-A </strong>";
  $count = $count / 5 *100;
  $avg = "your average is: $count%";
}

   ?>


	


	<header>
		<div class="img-contain"> 
			<img class="img-kontain" src="psu-logo.png">
		</div>
	</header>

	<div class="titless">
		QUIZ NUMBER 1
	</div>

	<div class="flex-cont">
		<div class="form-container">
		<form class="forms"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

		<div class="container">


		
		<div class="number-one">
		<!-- NUMBER 1 !!!-->
		<div class="questions"><h3>1. What does PHP stand for?</h3><span><?php echo $num1Err; ?></span></div>
		<div>
			<input type="radio" name="choices-in-1" value="A" />
			<label for="choices-in-1">A) Philippine Hyper Personal</label>
		</div>
		<div>
			<input type="radio" name="choices-in-1" value="B" />
			<label for="choices-in-1">B) PHP: HYPERTEXT PREPROCESSOR </label>
		</div>
		<div>
			<input type="radio" name="choices-in-1" value="C" />
			<label for="choices-in-1">C) PRIVATE HOMEPAGE</label>
		</div>
		<div>
			<input type="radio" name="choices-in-1" value="D" />
			<label for="choices-in-1">D) PERSONAL HOME PAGE</label>
		</div>
		</div>





		<div class="number-one">
		<!-- NUMBER 2 !!!-->
		<div class="questions"><h3>2. What year was the very first model of the iPhone released?</h3><span><?php echo $num2Err; ?></span></div>
		<div>
			<input type="radio" name="choices-in-2" value="A" />
			<label for="choices-in-2">A) 2007</label>
		</div>
		<div>
			<input type="radio" name="choices-in-2" value="B" />
			<label for="choices-in-2">B) 2003</label>
		</div>
		<div>
			<input type="radio" name="choices-in-2" value="C" />
			<label for="choices-in-2">C) 2018</label>
		</div>
		<div>
			<input type="radio" name="choices-in-2" value="D" />
			<label for="choices-in-2">D) 2019</label>
		</div>
		</div>





		<div class="number-one">
		<!-- NUMBER 3 !!!-->
		<div class="questions"><h3>3. What’s the shortcut for the “copy” function on most computers?</h3><span><?php echo $num3Err; ?></span></div>
		<div>
			<input type="radio" name="choices-in-3" value="A" />
			<label for="choices-in-3">A) ctrl + R</label>
		</div>
		<div>
			<input type="radio" name="choices-in-3" value="B" />
			<label for="choices-in-3">B) ctrl + F</label>
		</div>
		<div>
			<input type="radio" name="choices-in-3" value="C" />
			<label for="choices-in-3">C) ctrl + G</label>
		</div>
		<div>
			<input type="radio" name="choices-in-3" value="D" />
			<label for="choices-in-3">D) ctrl + C</label>
		</div>
		</div>






		<div class="number-one">
		<!-- NUMBER 4 !!!-->
		<div class="questions"><h3>4. Who is often called the father of the computer?</h3><span><?php echo $num4Err; ?></span></div>
		<div>
			<input type="radio" name="choices-in-4" value="A" />
			<label for="choices-in-4">A) Lincoln Velasquez</label>
		</div>
		<div>
			<input type="radio" name="choices-in-4" value="B" />
			<label for="choices-in-4">B) Tupac</label>
		</div>
		<div>
			<input type="radio" name="choices-in-4" value="C" />
			<label for="choices-in-4">C) Charles Babbage</label>
		</div>
		<div>
			<input type="radio" name="choices-in-4" value="D" />
			<label for="choices-in-4">D) Dingdong Dantes</label>
		</div>
		</div>






		<div class="number-one">
		<!-- NUMBER 5 !!!-->
		<div class="questions"><h3>5. Which email service is owned by Microsoft?</h3><span><?php echo $num5Err; ?></span></div>
		<div>
			<input type="radio" name="choices-in-5" value="A" />
			<label for="choices-in-5">A) Hotmail</label>
		</div>
		<div>
			<input type="radio" name="choices-in-5" value="B" />
			<label for="choices-in-5">B) Yahoo</label>
		</div>
		<div>
			<input type="radio" name="choices-in-5" value="C" />
			<label for="choices-in-5">C) Gmail</label>
		</div>
		<div>
			<input type="radio" name="choices-in-5" value="D" />
			<label for="choices-in-5">D) Outlook</label>
		</div>
		</div>


		<div>
			<input class="button" type="submit" name="submit" value="Submit">
			<input class="button" type="reset" name="Reset" value="Reset">
			<input style="text-align: center;
						  padding: 0px;"  onclick="window.location.href='quiz.php'" class="button" value="Restart">
		</div>

		</div>

		
		
	</form>

		
		




	</div>

	<div class="flex-cont-two">
		<p class="pangalan"><?php echo $upper; ?></p>
		<p class="output">
			
			<?php 
			
			/*echo $num1. "<br>";
			echo $num2. "<br>";
			echo $num3. "<br>";
			echo $num4. "<br>";
			echo $num5. "<br>"; */
			echo $scorecall;
			echo $avg;
			 ?>
		</p>
	</div>



	</div>
	
	
	
<footer style="
text-align: center;
"><hr>Created By: John Paolo F. Badiang 2022</footer>
	
</body>
</html>