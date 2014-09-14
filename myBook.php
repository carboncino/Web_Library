<!DOCTYPE html>
	<html>
		<head>
			<title>Web Library</title>
			<meta charset="utf-8"/>
			<style type="text/css"></style>
			<link rel="stylesheet" type="text/css" href="skin.css">
		</head>
		<body>
		<div class="conten">
			<div class="header">

			</div>
			<div class="body_sx">
						<ul>
						<li><b><a href="home.html">HOME</a></b></li>
						<li><b><a href="reg.html">REGISTRATI</a></b></li>
						<li><b><a href="myBook.html">MyBook</b></li>
						<li><b><a href="elencoLibri.html">ELENCO LIBRI</a></b></li>
						<li><b><a href="Noleggia.html">NOLEGGIA</a></b></li>
						<li><b><a href="admin.html">ADMINISTRATOR</a></b></li>
					</ul>
			</div>
			<div class="body_dx">
			<p><h4>MYBOOK</p>
			<table >
				
				<?
					$db_host = "localhost";
					$db_user = "carboneMarco";
					$db_pass = "cardellino543";
					$db_name = "carboneMarco";
					$nome = $_POST['nome'];
					$pass = $_POST['password'];
					if($nome!=null && $pass!=null)
					{
						
						$db = mysql_connect($db_host,$db_user,$db_pass) or die ('ERRORE CONNESSIONE DB');
						mysql_select_db($db_name, $db) or die ('ERRORE SELEZIONE DB');
						
						$query2 = "SELECT * FROM Utenti WHERE nome='$nome' AND password='$pass'";

						$result2 = mysql_query($query2);
						$num2= mysql_num_rows($result2);
						$k=0;
						if($num2 < 1)
							{
								echo "errore ricerca";
							}
						else{

									while($num2 > $k)
											{
												$id = mysql_result($result2,$k,"id");
												$nome = mysql_result($result2,$k,"nome");
												$cognome = mysql_result($result2,$k,"cognome");
												$sesso = mysql_result($result2,$k,"sesso");
												$pass = mysql_result($result2,$k,"password");
												$mail = mysql_result($result2,$k,"e_mail");
												echo("<tr><th bgcolor='1E90FF'>ID</th><td>$id</td></tr>
															<tr><th bgcolor='1E90FF'>Nome</th><td>$nome</td></tr>
															<tr><th bgcolor='1E90FF'>Cognome</th><td>$cognome</td></tr>
															<tr><th bgcolor='1E90FF'>password</th><td>$pass</td></tr>
															<tr><th bgcolor='1E90FF'>e_mail</th><td>$mail</td></tr>
															<tr><th bgcolor='1E90FF'>Sesso</th><td>$sesso</td></tr>");
												$k++;
											}
								}


						$query = "SELECT  Libri.id,
															Libri.titolo,
															Libri.autore,
															Libri.editore 
											FROM Libri JOIN Utenti ON Libri.id = Utenti.id_libro WHERE nome='$nome' AND password='$pass'";

						$result = mysql_query($query);
						$num= mysql_num_rows($result);
						$i=0;
						if($num < 1)
							{
								echo "errore ricerca";
							}
						else{
									echo"<tr bgcolor='#FF0000'><th>#ID</th><th>Titolo</th><th>Autore</th><th>editore</th></tr>";
									while($num > $i)
											{
												$id = mysql_result($result,$i,"Libri.id");
												$titolo = mysql_result($result,$i,"Libri.titolo");
												$autore = mysql_result($result,$i,"Libri.autore");
												$editore = mysql_result($result,$i,"Libri.editore");
												echo"<tr><td>$id</td><td>$titolo</td><td>$autore</td><td>$editore</td></tr>";
												$i++;
											}
								}
						}else{
							echo"<h2>***ATTENZIONE***<br>Errore compilazione campi</h2><br>";
									}
				?>	
				</table>
				<input type="button" onclick="document.location.href='home.html';" value="HOME">
				<input type="button" onclick="document.location.href='myBook.html';" value="Indietro">
				<form action="myBook2.php" method="POST">
					<input type="text" name="ID_libro" size="2">
					<input type="submit" name="submit" value="RESTITUZIONE">
				</form>
			</div>
		</div>
		</body>
	</html>
