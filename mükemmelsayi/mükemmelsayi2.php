<!DOCTYPE html PUBLIC>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mükemmel Sayı Bulma</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
 
<body>
<?php
$sayi=$_POST['sayi'];
 
$muq=0; $i=0;
 
do
{
    $itoplam=0;
    for($k=1;$k<$i;$k++)
    {
        if ($i % $k == 0)
	    {
		    $itoplam+=$k;
	    }
    }
}
while($i<$sayi);
 
if ($itoplam==$i)
{
	$sonuc="Mükemmel Sayı";
}
else
{
	$sonuc="Mükemmel Sayı Değil";
}
 
?>
 
<table width="435" border="1" bgcolor="#FFFF66">
  <tr bgcolor="#00CCCC">
    <td colspan="2" align="center">Mükemmel Sayı Bulma</td>
  </tr>
  <tr bgcolor="#99FF66">
    <td width="206">Girilen Sayı:</td>
    <td width="213"><?php echo $sayi; ?></td>
  </tr>
  <tr bgcolor="#CC9966">
    <td colspan="2">
    
<h1><?php echo $sonuc; ?>  </h1>
 
    
    </td>
  </tr>
</table>
<A HREF="javascript:javascript:history.go(-1)">Geri dön</A>
<br />
 
</body>
</html>