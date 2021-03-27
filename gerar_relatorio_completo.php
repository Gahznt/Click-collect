<?php
include 'verifica_login.php';
include 'conexao.php';
session_start();

 $arquivo = 'relatorio_despachos.xls';
 $html = "";
 $html .= "<table border = '1'>";
 $html .= '<tr>';
 $html .= "<td colspan='7'>Relatório de pedidos despachados</td>";
 $html .= '</tr>';

 $html .= '<tr>';
 $html .= '<td align="center"><b>Pedido<b></td>';
 $html .= '<td align="center"><b>Loja<b></td>';
 $html .= '<td align="center"><b>Data de despacho<b></td>';
 $html .= '<td align="center"><b>Recebido?<b></td>';
 $html .= '<td align="center"><b>Data de recebimento Loja<b></td>';
 $html .= '<td align="center"><b>Conferente<b></td>';
 $html .= '<td align="center"><b>Matricula Conferente<b></td>';
 $html .= '</tr>';

		//Selecionar todos os itens da tabela 
		$dataloja = $_POST['loja'];
		$query = "SELECT * FROM despacho WHERE loja ='".$dataloja."';";
		$resultado_query = mysqli_query($conexao, $query);
		
		while($row_query = mysqli_fetch_assoc($resultado_query)){
			$html .= '<tr>';
			$html .= '<td align="center">'.$row_query["gaiolas"].'</td>';
			$html .= '<td align="center">'.$row_query["loja"].'</td>';
			$html .= '<td align="center">'.$row_query["datadespacho"].'</td>';
			$html .= '<td align="center">'.$row_query["recebimentoloja"].'</td>';
			$html .= '<td align="center">'.$row_query["datarecebimento"].'</td>';
			$html .= '<td align="center">'.$row_query["conferente"].'</td>';
			$html .= '<td align="center">'.$row_query["matricula_conferente"].'</td>';
			$html .= '</tr>';
		}
		// Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
 ?>


</body>
</html>