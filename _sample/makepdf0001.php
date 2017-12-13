<?php

/*
PHPを出力するサンプル
TCPDF+FPDF
主なマニュアル：
http://tcpdf.penlabo.net/
https://manuals.setasign.com/fpdi-manual/v1/
http://www.fpdf.org/
*/

require_once(dirname(dirname(__FILE__)) . '/include/tcpdf/tcpdf.php');
require_once(dirname(dirname(__FILE__)) . '/include/tcpdf/fpdi.php');

////////////////////////////////////////////////
// フォントがおいてあるパスを取得する
function getFontsPath(){
	$base = dirname(dirname(__FILE__));
	return $base . '/include/tcpdf/fonts/';
}

// 初期設定
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

// PDFの余白(上左右)を設定
$pdf->SetMargins(0, 0, 0);
$pdf->SetAutoPageBreak( false, 0);
	
// ヘッダーの出力を無効化
$pdf->setPrintHeader(false);

// フッターの出力を無効化
$pdf->setPrintFooter(false);

$pdf->AddPage();

// フォントを登録
$font1 = new TCPDF_FONTS();
$fontPathRegular = getFontsPath() . 'migmix-2p-regular.ttf'; 				// 太さ：レギュラー
$regularFont = $font1->addTTFfont($fontPathRegular);

$font2 = new TCPDF_FONTS();
$fontPathBold = getFontsPath() . 'migmix-2p-bold.ttf';							// 太さ：ボールド
$boldFont = $font2->addTTFfont($fontPathBold);


//////////////////////////////////////////////////
// 初期設定終了

$pageheight = $pdf->getPageHeight("");

// ページ全体の設定
$top = 10;
$left = 10;
$line_height = 25; // 一行の高さ
$line_top = 31;
$width = 190;

// 行数
$lines_per_page = floor((($pageheight - ($top + $line_top + $line_height)) / $line_height)) + 1;

// 線のスタイル
$line_style = array('width' => 0.1, 'color' => array(128, 128, 128) );
$line_style2 = array('width' => 0.2, 'color' => array(16, 16, 128) );

$headerColor = array(16,16,128);

// 矩形のスタイル
$body_style = array(
'T' => $line_style,
'R' => $line_style,
'B' => $line_style,
'L' => $line_style );

$body_style2 = array(
'T' => $line_style2,
'R' => $line_style2,
'B' => $line_style2,
'L' => $line_style2 );

// ヘッダ塗りつぶし
$pdf->Rect( $left, $top, $width, $line_top - $top, 'DF', $body_style2, $headerColor);

// ヘッダの文字列
$pdf->SetFont($boldFont, 'B', 16); // 13pt
$pdf->SetTextColor(255, 255, 255);
$pdf->SetXY($left + 3, $top + 2);
$pdf->Write(0, 'タカラエステート');

$pdf->SetFont($boldFont, 'B', 24); // 13pt
$pdf->SetXY($left + 8, $top + 9);
$pdf->Write(0, '空室情報一覧');

// 書き込む文字列の文字色を指定
$pdf->SetTextColor(0, 0, 0);
$pdf->SetDrawColor(128, 128, 128, 0);

$boxline = 0; // 0：枠線を表示しない、１：枠線を表示する


for($n = 0; $n < $lines_per_page; $n++){

	$ly = ($n+1) * $line_height + $line_top;

	// 下線を書き込む
	$pdf->Line( $left, $ly, $left + $width, $ly );

	$fy = $n * $line_height + $line_top;

	//////////////////////////////////////////////
	// 書き込む座標を計算する
	$pdf->SetXY($left + 65, $fy + 1);

	// 書き込む文字列のフォントを指定
	$pdf->SetFont($regularFont, '', 13); // 13pt

	// 文字列を書き込む
	$pdf->Cell(30, 8, '物件no5638', $boxline, 0, "L", false, "", 1, true, "T", "B");

	//////////////////////////////////////////////

	// 書き込む文字列のフォントを指定
	$pdf->SetFont($regularFont, '', 11); // 13pt

	// 文字列を書き込む
	$pdf->Cell(95, 8, '敷金0ヶ月 礼金0ヶ月 保証金0ヶ月 保険料18000円/2年', $boxline, 0, "L", false, "", 1, true, "T", "B");

	/////////////////////////////////////////////
	// 書き込む文字列のフォントを指定
	$pdf->SetFont($regularFont, '', 8); // 13pt

	// 書き込む座標を計算する
	$pdf->SetXY($left + 65, $fy + 10);

	// 文字列を書き込む
	$pdf->Cell(125, 4, 'ネット料無料！人気の1DKタイプ！築浅で敷金礼金0円に空き出ました！', $boxline, 0, "L", false, "", 0, true, "T", "B");

	/////////////////////////////////////////////

	// 書き込む座標を計算する
	$pdf->SetXY($left + 65, $fy + 15);

	// 文字列を書き込む
	$pdf->Cell(125, 4, 'DK8.8畳 洋室3.8畳', $boxline, 0, "L", false, "", 0, true, "T", "B");

	/////////////////////////////////////////////
	// 書き込む文字列のフォントを指定
	$pdf->SetFont($regularFont, '', 8); // 13pt

	// 書き込む座標を計算する
	$pdf->SetXY($left + 65, $fy + 20);

	// 文字列を書き込む
	$pdf->Cell(125, 4, '家賃64000円' . " / " . "共益費4000円" . " / " . "駐車料　空有 15120円", $boxline, 0, "L", false, "", 0, true, "T", "B");
		
	// 写真１
	$pdf->Image( "pict1.jpg", $left + 2, $fy + 2, 30, $line_height - 5, 
							"JPEG", "", "", true, 300, "", false, false, 0, false, false, false);	

	// 間取り
	$pdf->Image( "madori.jpg", $left + 32, $fy + 2, 30, $line_height - 5, 
							"JPEG", "", "", true, 300, "", false, false, 0, false, false, false);	
	
}

// レスポンスヘッダーにContent-Dispositionをセットし、ファイル名をreceipt.pdfに指定
header('Content-Disposition: attachment; filename="sample.pdf"');
$pdf->Output('sample.pdf', 'I');

exit();
