<!DOCTYPE html>
	<html>
		<head>
			<title>Web Library</title>
			<meta charset="utf-8"/>
			<style type="text/css"></style>
			<link rel="stylesheet" type="text/css" href="skin.css">
			<script type="text/javascript" src="lib/jquery-2.1.1.js"></script>
			
		</head>
		<body>
		
		<div class="conten_noleg">
			<div class="header">

			</div>
			<div class="body_sx_noleg">
			<div class="cont_sx_noleg">
						<ul>
						<li><b><a href="home.html">HOME</a></b></li>
						<li><b><a href="reg.html">REGISTRATI</a></b></li>
						<li><b><a href="myBook.html">MyBook</b></li>
						<li><b><a href="elencoLibri.html">ELENCO LIBRI</a></b></li>
						<li><b><a href="Noleggia.html">NOLEGGIA</a></b></li>
						<li><b><a href="admin.html">ADMINISTRATOR</a></b></li>
					</ul>
			</div>
			</div>
			<div class="body_dx_noleg">
			
			<p><h4>Questo elenco rappresenta tutti i libri disponibili presenti nel nostro archivio</p>
			<table border="1">
				<tr bgcolor="red"><th>ID#</th><th>Titolo</th><th>Autore</th><th>editore</th><th>stato</th><th>Locazione</th></tr>
				<?
					$db_host = "localhost";
					$db_user = "carboneMarco";
					$db_pass = "cardellino543";
					$db_name = "carboneMarco";
					
					$db = mysql_connect($db_host,$db_user,$db_pass) or die ('ERRORE CONNESSIONE DB');
					mysql_select_db($db_name, $db) or die ('ERRORE SELEZIONE DB');
						$query = "SELECT id,titolo,autore,editore,stato,locazione FROM Libri";

						$result = mysql_query($query);
						$num= mysql_num_rows($result);
						$i=0;
						if($num < 1)
							{
								echo "errore ricerca";
							}
						else{
									while($num > $i)
											{
												$id = mysql_result($result,$i,"id");
												$titolo = mysql_result($result,$i,"titolo");
												$autore = mysql_result($result,$i,"autore");
												$editore = mysql_result($result,$i,"editore");
												$stato = mysql_result($result,$i,"stato");
												$loc = mysql_result($result,$i,"locazione");
												echo"<tr><td>$id</td><td>$titolo</td><td>$autore</td><td>$editore</td><td>$stato</td><td>$loc</td></tr>";
												$i++;
											}
								}

				?>	
				</table>
				<form method="POST" action="noleggia2.php">

					<table  class="centrata">
							<tr><td align="right"><label>ID_LIBRO</label></td>
									<td><input type="text" name="ID_libro" size="2"></td>
							</tr>
							<tr><td align="right"><label>Nome</label></td>
									<td><input type="text" name="nome"></td>
							</tr>
							<tr><td align="right"><label>Password</label></td>
									<td><input type="password" name="password"></td>
							</tr>
							<tr><td>&nbsp;</td>
									<td><input type="submit" name="submit" value="OK">
											<input type="button" onclick="document.location.href='home.html';" value="TORNA ALLA HOME">
											<input type="reset" value="Cancella">
									</td>
							</tr>
						</table>
				</form>
			<script>$(".body_dx_noleg").hide();$(".body_dx_noleg").fadeIn(2000);</script>
			</div>
		</div>
		</body>
	</html>
