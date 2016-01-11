<!Doctype html>
<html>
		<head>
				<title>Latihan</title>
				<link rel="stylesheet" href="style.css">
		</head>
<body onload="">
		<script type="text/javascript">
				function check(){
					var tes = document.getElementById("input_nama");
					if(tes.value !=""){

									alert("namamu adalah "+ input_nama.value);
									location.href="sinau_php_5_4.php";
					}
					else{

								alert("Mosok seh kon gak duwe jeneng");
					}
				}
		</script>
		<h1 class="tit">Masukkan Namamu</h1>
		<input type="text" id="input_nama" class="input_nama">
		<input type="submit" onclick="check()" class="inp_btn">	

		<div class="jarak"></div>

		<script type="text/javascript">
				function check2(){
						alert("Njajal JSON");
						var link= new XMLHttpRequest();
						link.open(form.method, form.action, true);
						link.setRequestHeader('Content-Type','application/json; chartset=UTF-8');
						var a ={
									"first_name":"";
									"last_name":"";
						};
						link.send(JSON.stringify(a));
				}
		</script>

			<h1 class="tit">Form Input Dengan JS &amp; JASON</h1>
		<form action="sinau_php_5_4.php" method="POST" name="form">
				<p>
						<label for="first_name">First name: </label>
						<input type="text" name="first_name" class="input_nama">
				</p>
				<p>
						<label for="last_name">Last name: </label>
						<input type="text" name="last_name" class="input_nama">
				</p>
				<input value="Submit" onclick="check2()" type="submit" class="inp_btn">
		</form>

		<div class="jarak"></div>
</body>
</html>