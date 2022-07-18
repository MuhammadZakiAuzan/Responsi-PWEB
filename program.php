<!DOCTYPE html>
<html>
<head>
	<style>
		* {
			box-sizing: border-box;
		}

		body {
			font-family: arial;
			padding: 10px;
			background: black;
			background-image: url("foto 2.jpg");
		}

		.zaki {
			padding: 30px;
			text-align: center;
			background: white
		}

		.zaki h1 {
			font-size: 50px;
			color: beige;
			font-style: italic;
		}
		.zaki h2 {
			font-size: 75px;
			color: black;
		}
		
		.topnav {
			overflow: hidden;
			background-color: #333;
		}

		.topnav a {
			float: left;
			display: block;
			color: #f2f2f2;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		.topnav a:hover {
			background-color: #89585E;
			color: chocolate;
		}

		.leftcolumn {
			float: left;
			width: 25%;
			background-color: #D28481;
			padding-left: 20px
		}

		.centercolumn {
			float: left;
			width: 50%;
			background-color: #D28481;
			padding-left: 20px
		}

		
		

		.fakeimg {
			background-color: #A84938;
			width: 75%;
		}

		

		.row:after {
			content: "";
			display: table;
			clear: both;
		}

		.footer {
			padding: 20px;
			text-align: center;
			background-color: #D28481;
			margin-top: 20px;
		}

		.leftcolumn, . {
			width: 100%
			padding0;
		}
	}

	    .topnav a {
	    	float: none;
	    	width: 100%
	    }
	   	.iphone-operation{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 1000;
    background-color: #d3d4cf;
}
 {
	.second-table
    width: 100px;
    height: 100px;
    background-color: #000;
    color: #fff;
    font-size: 30px;
    text-align: center;
    font-weight: 30;
    font-family: Arial, Helvetica, sans-serif;
    transform: scale(0.7);
    box-shadow: 0px 10px 10px -5px black;
   

}
.second-table{
    padding: 30px;
}

.second-table tr td{
width: 30px;
height: 40px;
}

.second-table .total{
    background-color: #000;
    border-radius: 0;
    text-align: right;
    padding-right: 30px;
}

.zero{
    width: 30px;
    height: 40px;
    border-radius: 40px;
}

button{
    border-radius: 60%;
    width: 60px;
    height: 60px;
    background-color: #333333;
    border: 0;
    color: #fff;
    font-size: 30px;
    font-family: Arial, Helvetica, sans-serif;
    outline: none;

}
button:hover{
    background-color: #5b5a5a;
    cursor: pointer;
}

.aaa{
    background-color: #a5a5a5;
    color: #000;
}
.aaa:hover{
    background-color: #efe7e7;
}

.iphone-operation{
    background-color: #fe9e09;
}
.iphone-operation:hover{
    background-color: #ffc366;;
}

.second-table .total{
font-size: 30px;
}
	   	}
	}
	</style>
</head>
<body>

	<div class="zaki" style="background-color: dimgrey;">
		<h1 style="font-family: serif;">Welcome to my Website!!!</h1>
		<h2 style="font-family: sans-serif;">Muhammad Zaki Auzan</h2>
	</div>

	<div class="rightcolumn">
			<div class="card" style="background-color: lightslategray;">
				<h2 style="font-family: arial"> This is me!!!</h2>
				<p>halo, nama saya Muhammad Zaki Auzan saya berasal dari pekanbaru, riau.
				Hobi saya bermain game dan melihat keindahan ciptaan tuhan, contohnya langit.
			saya bercita-cita menjadi orang kaya dan beriman. Ketertarikan saya kepada dunia IT dimulai sejak saya suka mengotak-atik hp dan saya senang bermain game. Sebelum memutuskan untuk masuk Informatika saya kepengen masuk FKH (Fakultas Kedokteran Hewan) dikarenakan rasa peduli saya yang besar terhadap teman-teman saya, saya takut jika teman-teman saya sakit biaya untuk berobatnya mahal, tapi karna ditakdirkan berbeda maka saya masuk ke dalam lingkup Informatika.</p>
			</div>

		</div>

	<div class="row">
		<div class="centercolumn">
			<div class="card" style="background-color: darkgrey;">
				<h2 align="center" style="font-family: cursive;">Silahkan Berkunjung!!!</h2><br><br>

				<div style="background-color: darkgrey;">
					<img src="foto 3.jpg" width="550px" height="350px">
					<div align="center"><strong><font size="5" face="courier New, courier,mono">Isi Data Diri</font></strong></div>
		            <form name="nama" method="post" action="proses.php">
			        <table width="54%" border="0" align="center">
				    <tr>
					    <td><h4>Nama lengkap</h4></td>
					    <td><input style="background-color:whitesmoke;" type="text" name="nama" id="nama"></td>
				    </tr>
				    <tr>
					    <td><h4>NIM</h4></td>
					    <td><input style="background-color:whitesmoke;" type="text" name="nim" id="nim"></td>
				    </tr>
				    <tr>
					    <td><h4>Prodi</h4></td>
					<td><select style="background-color:whitesmoke;" type="text" name="prodi" id="prodi">
					    <option>Informatika</option>
						<option>Hukum</option>
						<option>Kedokteran</option>
						<option>Psikologi</option>
						<option>Farmasi</option>
					    </select></td>
				    </tr>
				    <tr>
					<td><h4>Fakulktas</h4></td>
					<td><select style="background-color:whitesmoke;" name="prodi" id="prodi">
						<option>Teknologi Industri</option>
						<option>Hukum</option>
						<option>Kedokteran</option>
						<option>Kesehatan Masyarakat</option>
						<option>Farmasi</option>
					</select></td>
					</tr>
					<tr>
					<td><h4>alamat </h4></td>
					<td><input style="background-color:lightsalmon;" type="text" name="alamat" id="alamat"></td>
					</tr>
					<tr>
					<td>&nbsp</td>
					<td><input style="background-color:lightsalmon;" type="submit" name="submit" value="kirim" id="kirim"><input style="background-color:lightblue;" type="reset" name="reset" value="batal"></td>
				</tr>
				
			</table>
		</form>
		<br>
		<div align="center"><strong><a href="index.php">::MY BIODATA::</a></strong></div>
				</div>
			</div>

			
         

			<div class="card" style="background-color: dimgrey;">
				<h1><center>KALENDER</center></h1>
				<h2><center>July 2022</center></h2>
				<?php
                $hari	= date("d");
                $bulan	= date ("m");
                $tahun	= date("Y");
                $jumlahhari=date("t",mktime(0,0,0,$bulan,$hari,$tahun));
                ?>

                <table style="border:2px solid #00000f " align="center" width="10%" height="35%">
                <tr style="background-color: dimgrey;">
                    <td align=center><font color="#FF0000">Minggu</font></td>
                    <td align=center>Senin</td>
                    <td align=center>Selasa</td>
                    <td align=center>Rabu</td>
                    <td align=center>Kamis</td>
                    <td align=center>Jumat</td>
                    <td align=center>Sabtu</td>
                </tr>
                <?php
                $s=date ("w", mktime (0,0,0,$bulan,1,$tahun));
                for ($ds=1;$ds<=$s;$ds++) {
                    echo "<td></td>";
                }
 
                for ($d=1;$d<=$jumlahhari;$d++) {
	                if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 0) {
		                echo "<tr>"; 
		            }
                $warna="#000000";
 
                if (date("l",mktime (0,0,0,$bulan,$d,$tahun)) == "Sunday") { $warna="#D28481"; }
                echo "<td align=center valign=middle> <span style=\"color:$warna\">$d</span></td>"; 
                if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 6) { echo "</tr>"; }
                }
                echo '</table>'; 
				?>
		    </div>
		</div>

<div class="calculator"; style="background-color: dimgrey;">
				<h1><center style="font-family:cursive ;">KALKULATOR</center></h1>
			<table border="1" cellspacing="10" align="center" cellpadding="">
                <tr>
                    <td colspan="4" id="inputLabel">0</td>
                </tr>

                <tr>
                    <td colspan="3"><button onclick="pushBtn(this);">AC</button></td>
                    <td><button onclick="pushBtn(this);">/</button></td>
                </tr>

                <tr>
                    <td><button onclick="pushBtn(this);">7</button></td>
                    <td><button onclick="pushBtn(this);">8</button></td>
                    <td><button onclick="pushBtn(this);">9</button></td>
                    <td><button onclick="pushBtn(this);">*</button></td>
                </tr>

                <tr>
                    <td><button onclick="pushBtn(this);">4</button></td>
                    <td><button onclick="pushBtn(this);">5</button></td>
                    <td><button onclick="pushBtn(this);">6</button></td>
                    <td><button onclick="pushBtn(this);">-</button></td>
                </tr>

                <tr>
                    <td><button onclick="pushBtn(this);">1</button></td>
                    <td><button onclick="pushBtn(this);">2</button></td>
                    <td><button onclick="pushBtn(this);">3</button></td>
                    <td><button onclick="pushBtn(this);">+</button></td>
                </tr>

                <tr>
                   <td colspan="2"><button onclick="pushBtn(this);">0</button></td>
                   <td><button onclick="pushBtn(this);">.</button></td>
                   <td><button onclick="pushBtn(this);">=</button></td>
                </tr>
                </table>
                <script type="text/javascript">
                var inputLabel = document.getElementById('inputLabel');
                function pushBtn(obj) {
                    var pushed = obj.innerHTML
                    if (pushed == '=') {
                    // Calculate
                    inputLabel.innerHTML = eval(inputLabel.innerHTML);
                    } else if (pushed == 'AC') {
                    // All Clear
                    inputLabel.innerHTML = '0';
                    } else {
                        if (inputLabel.innerHTML == '0') {
                               inputLabel.innerHTML = pushed;  
                    } else {
                        inputLabel.innerHTML += pushed;   
                    }
                }
            }
            </script>
            </div>

    
</body>
</html>