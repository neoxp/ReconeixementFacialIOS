<?php
include"connexion.php";

if(is set($_POST['search'])) {

    $sql = "SELECT * FROM RECONEIXEMENT FACIAL ";
    $search_termn =  mysql_real_escape_string("POST"['id']);
     $search_termp =  mysql_real_escape_string("POST"['id_imagen']);
    $search_termm =  mysql_real_escape_string("POST"['NOM']);
    $search_termp =  mysql_real_escape_string("POST"['DNI']);
    $search_termm =  mysql_real_escape_string("POST"['DELINCUENT']);
     $search_termp =  mysql_real_escape_string("POST"['TERRORISTA']);
    $search_termm =  mysql_real_escape_string("POST"['PEDERASTA']);
     $search_termp =  mysql_real_escape_string("POST"['DESAPAREGUDA']);
     $search_termp =  mysql_real_escape_string("POST"['SEBUSCA']);
    $search_termm =  mysql_real_escape_string("POST"['NACIONALITAT']);
     $search_termp =  mysql_real_escape_string("POST"['PAIS']);
      $search_termp =  mysql_real_escape_string("POST"['EDAD']);
    $search_termc =  mysql_real_escape_string("POST"['SEXE']);
    $sql .="SELECT `id`, `id_imagen`, `NOM`, `DNI`, `DESAPAREGUDA`, `DELINCUENT`, `PEDERASTA`, `TERRORISTA`, `SEBUSCA`, `PAIS`, `NACIONALITAT`, `EDAD`, `SEXE` FROM `RECONEIXEMENT FACIAL` WHERE `id`) ";
}

$query = mysql_query($sql) or die(mysql_error());

?>
<!--<<form name="search_form" method="POST" action="display.php">
Search: <input type="text" name="search_box" value="" />
<input type="submit" name="search" value="search the table..">
</form>-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:18px;
	top:29px;
	width:113px;
	height:133px;
	z-index:1;
	background-image: url(ReconeixementFacial IOS/ReconeixementFacial/ReconeixementFacial/EmiliMarquesFores.png);
}
#Layer2 {
	position:absolute;
	left:133px;
	top:29px;
	width:182px;
	height:37px;
	z-index:2;
}
#Layer3 {
	position:absolute;
	left:136px;
	top:70px;
	width:179px;
	height:41px;
	z-index:3;
}
#Layer4 {
	position:absolute;
	left:133px;
	top:114px;
	width:184px;
	height:46px;
	z-index:4;
}
#Layer5 {
	position:absolute;
	left:20px;
	top:164px;
	width:296px;
	height:37px;
	z-index:5;
}
#Layer6 {
	position:absolute;
	left:20px;
	top:206px;
	width:295px;
	height:39px;
	z-index:6;
}
.Estilo1 {
	font-size: 16px
	font-weight: bold;
	color: #FF0000;
}
#Layer7 {
	position:absolute;
	left:20px;
	top:245px;
	width:296px;
	height:38px;
	z-index:7;
}
#Layer8 {
	position:absolute;
	left:20px;
	top:284px;
	width:295px;
	height:35px;
	z-index:8;
}
#Layer9 {
	position:absolute;
	left:20px;
	top:321px;
	width:295px;
	height:31px;
	z-index:9;
}
#Layer10 {
	position:absolute;
	left:21px;
	top:354px;
	width:294px;
	height:38px;
	z-index:10;
}
#Layer11 {
	position:absolute;
	left:20px;
	top:394px;
	width:295px;
	height:34px;
	z-index:11;
}
#Layer12 {
	position:absolute;
	left:20px;
	top:431px;
	width:294px;
	height:27px;
	z-index:12;
}

-->
</style>
</head>

<body>
<div><table width="440" height="339" border="1">
  <tr>
    <th width="153" height="67" scope="row"><div><img src="http://facialpeople.webcindario.com/EmiliMarquesFores.png" alt="" width="140" height="150" border="0" /></div></th>
    <td width="271"><table width="271" height="146" border="1">
      <tr>
        <th width="49" scope="row"><div>
          <div align="left">ID: </div>
        </div></th>
        <th width="206" scope="row"><div>
          <div align="left"><?php echo $row['id'] ?></div>
          </div></th>
      </tr>
      <tr>
        <th scope="row"><div>
          <div align="left">DNI: </div>
        </div></th>
        <th scope="row"><div>
          <div align="left"><?php echo $row['<img name="id_imagen" src="" width="32" height="32" alt="" />'] ?></div>
        </div></th>
      </tr>
      <tr>
        <th scope="row"><div>
          <div align="left">NOM:</div>
        </div></th>
        <th scope="row"><div>
          <div align="left"><?php echo $row['DNI'] ?></div>
        </div></th>
      </tr>
    </table></td>
  </tr>
  <tr>
    <th scope="row"><div>
      <div align="left">DESAPAREGUD/A:</div>
    </div>      </th>
    <td><div><?php echo $row['DESAPAREGUDA'] ?></div></td>
  </tr>
  <tr>
    <th scope="row"><div>
      <div align="left">DELINCUENT/A:</div>
    </div></th>
    <td><div>
      <div align="left"><?php echo $row['DELIENCUET'] ?></div>
    </div></td>
  </tr>
  <tr>
    <th scope="row"><div>
      <div align="left">TERRORISTA:</div>
    </div></th>
    <td><div>
      <div align="left"><?php echo $row['TERORISTA'] ?></div>
    </div></td>
  </tr>
  <tr>
    <th scope="row"><div align="left">PEDERASTA/ES: </div></th>
    <td><div>
      <div align="left"><?php echo $row['PEDERASTA'] ?></div>
    </div></td>
  </tr>
  <tr>
    <th scope="row"><div>
      <div align="left">SE BUSCA: </div>
    </div></th>
    <td><div>
      <div align="left"><?php echo $row['SEBUSCA'] ?></div>
    </div></td>
  </tr>
  <tr>
    <th scope="row"><div>
      <div align="left">NACIONALITAT:</div>
    </div></th>
    <td><div>
      <div align="left"><?php echo $row['NACIONALITAT'] ?></div>
    </div></td>
  </tr>
  <tr>
    <th scope="row"><div>
      <div align="left">PAIS: </div>
    </div></th>
    <td><div>
      <div align="left"><?php echo $row['PAIS'] ?></div>
    </div></td>
  </tr>
  <tr>
    <th scope="row"><div>
      <div align="left">EDAD: </div>
    </div></th>
    <td><div>
      <div align="left">
        <div><?php echo $row['EDAD'] ?></div>
      </div>
    </div></td>
  </tr>
  <tr>
    <th scope="row"><div>
      <div align="left">SEXE: </div>
    </div></th>
    <td><?php echo $row['SEXE'] ?></td>
  </tr>
</table>
</div>
</body>
</html>
