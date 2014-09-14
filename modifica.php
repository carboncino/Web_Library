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
				<table>
					<tr bgcolor="1E90FF"><th>ID#</th><th>Nome</th><th>Cognome</th><th>password</th><th>ID_libro</th><th>e_mail</th><th>Sesso</th></tr>
				<?
					$db_host = "localhost";
					$db_user = "carboneMarco";
					$db_pass = "cardellino543";
					$db_name = "carboneMarco";
					$ID_mod = $_REQUEST['ID'];

									$db = mysql_connect($db_host,$db_user,$db_pass) or die ('ERRORE CONNESSIONE DB');
									mysql_select_db($db_name, $db) or die ('ERRORE SELEZIONE DB');
									$query = "SELECT * FROM Utenti WHERE id='$ID_mod'";
									
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
												$nome = mysql_result($result,$i,"nome");
												$cognome = mysql_result($result,$i,"cognome");
												$password = mysql_result($result,$i,"password");
												$id_libro = mysql_result($result,$i,"id_libro");
												$mail = mysql_result($result,$i,"e_mail");
												$sesso = mysql_result($result,$i,"sesso");
												echo"<tr><td>$id</td><td>$nome</td><td>$cognome</td><td>$password</td><td>$id_libro</td><td>$mail</td><td>$sesso</td></tr>";
												$i++;
											}
											}
									
				?>
				<form method="POST" action="modifica2.php"> 
					<tr>
						<td><input type="text" name="id" value="<?echo($id);?>" size="2"></td>
						<td><input type="text" name="nome" value="<?echo($nome);?>" size="12"></td>
						<td><input type="text" name="cognome" value="<?echo($cognome);?>" size="12"></td>
						<td><input type="text" name="password" value="<?echo($password);?>" size="12"></td>
						<td>&nbsp;</td>
						<td><input type="text" name="mail" value="<?echo($mail);?>" size="12"></td>
						<td><input type="text" name="sesso" value="<?echo($sesso);?>" size="12"></td>
					</tr>
					<tr>
						<td><input type="button" onclick="document.location.href='admin.html';" value="Indietro"></td>
						<td><input type="submit" value="Applica modifiche"></td>
					</tr>
				</form>	
				
			</div>
		</div>
		</body>
	</html>
