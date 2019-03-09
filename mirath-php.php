<!DOCTYPE html>
<html>
<head>
	<title>Calculate Mirath</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<style type="text/css">
	.jumbo{
		text-align: center ;
		margin-top: 10% ;
	}
	.jumboo{
		text-align: center ;
	}
	#Titlee{
		font-size: 50px ;
	}
	.adapt{
		width: 30% ;
	}
	.pink{
		background-color: red ;
		border: 2px solid green ;
	}

</style>
</head>
<body>

	<div>
		<div  class="jumbotron jumboo">
			<h1 id="Titlee">Mawarith Calculator</h1>
			<h4>This is simple program calculate mirath in islam ,your feedback is welcome :)</h4>
		</div>
		<div class="container adapt" >

			<form class="was-validated">
				<div class="mb-3">
					<label for="validationTextarea">Full Name</label>
					<input id="name_id" type="text" class="form-control" id="validationTooltip01" placeholder="Full name" value="Full Name" required>
				</div>

				<hr>
				<label id="sexe_id" class="radio-inline"><input type="radio" value="is Man" name="optradio"> Man </label>
				<label class="radio-inline"><input type="radio" value="is Woman" name="optradio" disabled="disabled"> Woman </label>

				<hr>
				<div>
					<input id="father_id" value="father exist" type="checkbox" >
					<label  >He Have Father</label>
				</div>
				<div>
					<input id="mother_id" value="mother exist" type="checkbox">
					<label  >He Have Mother</label>
				</div>

				<hr>
				<div><p></p></div>
				<div class="form-group">
					<label for="validationTextarea">How Many Brothers</label>
					<select id="brothers_id" class="custom-select" required>
						<option value="">How Many Brothers</option>
						<option value="None">None</option>
						<option value="1st bro">1</option>
						<option value="2nd bro">2</option>
						<option value="3rd bro">3</option>
						<option value="4rd bro">4</option>
						<option value="5th bro">5</option>
						<option value="6th bro">6</option>
						<option value="7th bro">7</option>
						<option value="8th bro">8</option>
						<option value="9th bro">9</option>
						<option value="10th bro">10</option>
					</select>


					<p></p>
					<label for="validationTextarea">How Many Sisters</label>
					<select id="sisters_id" class="custom-select" required>
						<option value="">Hom Many Sisters</option>
						<option value="None">None</option>
						<option value="1st sis">1</option>
						<option value="2nd sis">2</option>
						<option value="3rd sis">3</option>
						<option value="4rd sis">4</option>
						<option value="5th sis">5</option>
						<option value="6th sis">6</option>
						<option value="7th sis">7</option>
						<option value="8th sis">8</option>
						<option value="9th sis">9</option>
						<option value="10th sis">10</option>
					</select>


					<p></p>
					<label for="validationTextarea">How Many Boys</label>
					<select id="boys_id" class="custom-select" required>
						<option value="">Hom Many Boys</option>
						<option value="None">None</option>
						<option value="1st boy">1</option>
						<option value="2nd boy">2</option>
						<option value="3rd boy">3</option>
						<option value="4rd boy">4</option>
						<option value="5th boy">5</option>
						<option value="6th boy">6</option>
						<option value="7th boy">7</option>
						<option value="8th boy">8</option>
						<option value="9th boy">9</option>
						<option value="10th boy">10</option>
					</select>


					<p></p>
					<label for="validationTextarea">How Many Girls</label>
					<select id="girls_id" class="custom-select" required>
						<option value="">Hom Many Girls</option>
						<option value="None">None</option>
						<option value="1st girl">1</option>
						<option value="2nd girl">2</option>
						<option value="3rd girl">3</option>
						<option value="4rd girl">4</option>
						<option value="5th girl">5</option>
						<option value="6th girl">6</option>
						<option value="7th girl">7</option>
						<option value="8th girl">8</option>
						<option value="9th girl">9</option>
						<option value="10th girl">10</option>
					</select>



					<p></p>
					<label for="validationTextarea">How Many Wives</label>
					<select id="wives_id" class="custom-select" required>
						<option value="">Hom Many Wives</option>
						<option value="None">None</option>
						<option value="1st wife">1</option>
						<option value="2nd wife">2</option>
						<option value="3rd wife">3</option>
						<option value="4rd wife">4</option>
					</select>


					<div class="invalid-feedback">Example invalid custom select feedback</div>
				</div>
				
				<button class="btn btn-success" onclick="submite();">Submitt</button>


				<script type="text/javascript">
					function submite(){
						var name_val =  document.getElementById("name_id").value ;
						var sexe_val =  document.getElementById("sexe_id").value ;
						var father_val =  document.getElementById("father_id").value ;
						var mother_val =  document.getElementById("mother_id").value ;
						var brothers_val =  document.getElementById("brothers_id").value ;
						var sisters_val =  document.getElementById("sisters_id").value ;
						var boys_val =  document.getElementById("boys_id").value ;
						var girls_val =  document.getElementById("girls_id").value ;
						var wives_val =  document.getElementById("wives_id").value ;

					alert(name_val);
					alert(sexe_val);
					alert(father_val);
					alert(mother_val);
					alert(brothers_val);
					alert(sisters_val);
					alert(boys_val);
					alert(girls_val);
					alert(wives_val);



					}
				</script>


			</form>
		</div>




		<hr>
		<h2 class="jumbo">Diagram</h2>
		<hr>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 pink">
				</div>
				<div class="col-lg-4 pink">




				</div>
				<div class="col-lg-4 pink">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 pink">test</div>
				<div class="col-lg-4 pink">test</div>
				<div class="col-lg-4 pink">test</div>
			</div>
			<div class="row">
				<div class="col-lg-4 pink">test</div>
				<div class="col-lg-4 pink">test</div>
				<div class="col-lg-4 pink">test</div>
			</div>






		</div>
	</div>








</body>
</html>