<?php

class SelectionController extends Controller
{
	public function actionIndex($sportId)
	{
		$this->render('index');
	}

	public function actionCatalogue($sportId, $sex)
	{
		$selection = Article::model()->findAllByAttributes(array('sportId' => $sportId, 'sex' => $sex));

		$this->render('catalogue', array('selection' => $selection));
	}

	public function action3DKit($articleId)
	{
		$selection = Article::model()->findByPk($articleId);
		$sportCode = array(3 => 'fo', 4 => 'ba');
		$sportCode = $sportCode[$selection->sportId];

		$this->render('3DKit', array('selection' => $selection, 'sportCode' => $sportCode));
	}

	public function actionOrderForm($articleId, $colors)
	{
		$selection = Article::model()->findByPk($articleId);

		$orderForm = new FormOrder();

		$this->render('orderForm', array('selection' => $selection, 'colors' => $colors, 'orderForm' => $orderForm));
	}

	public function actionTest()
	{
		$this->render('test');
	}

	public function actionTestAjax()
	{
//		die(var_dump($_POST));
		$data = '';
//		echo $this->renderPartial('testView', array('ID' => $_POST['ID']));
		$response = array('ID' => $_POST['ID']);

		echo json_encode($response);
	}

	public function action3DKitAjax()
	{
		$articleId = $_POST['articleId'];
		$sportId = $_POST['sportId'];
//		$color1 = sprintf('%02d', $_POST['color1']);
//		$color2 = sprintf('%02d', $_POST['color2']);
//		$color3 = sprintf('%02d', $_POST['color3']);
		$sportCode = array(3 => 'fo', 4 => 'ba');
		$sportCode = $sportCode[$sportId];

		$color1 = $_POST['color1'];
		$color2 = $_POST['color2'];
		$color3 = $_POST['color3'];
		$color4 = $_POST['color4'];
		$color5 = $_POST['color5'];

		$targetFileRegularFront = "imagesKit/target-{$articleId}-{$color1}-{$color2}-{$color3}-{$color4}-{$color5}-front.jpg";
		$targetFileBigFront = "imagesKit/target-{$articleId}-{$color1}-{$color2}-{$color3}-{$color4}-{$color5}-front-big.jpg";
		$targetFileSmallFront = "imagesKit/target-{$articleId}-{$color1}-{$color2}-{$color3}-{$color4}-{$color5}-front-small.jpg";
		$targetFileRegularRear = "imagesKit/target-{$articleId}-{$color1}-{$color2}-{$color3}-{$color4}-{$color5}-rear.jpg";
		$targetFileBigRear = "imagesKit/target-{$articleId}-{$color1}-{$color2}-{$color3}-{$color4}-{$color5}-rear-big.jpg";
		$targetFileSmallRear = "imagesKit/target-{$articleId}-{$color1}-{$color2}-{$color3}-{$color4}-{$color5}-rear-small.jpg";
//die($targetFile);
		$photoFrame = imagecreatetruecolor(1024, 768);
		$photoAplikacija0 = imagecreatefrompng("imagesKit/{$sportCode}-bg.png");
		$photoAplikacija1 = imagecreatefrompng("imagesKit/{$sportCode}-{$articleId}-1-{$color1}-front.png");
		$photoAplikacija2 = imagecreatefrompng("imagesKit/{$sportCode}-{$articleId}-2-{$color2}-front.png");
		$photoAplikacija3 = imagecreatefrompng("imagesKit/{$sportCode}-{$articleId}-3-{$color3}-front.png");
		$photoCvetex = imagecreatefrompng("imagesKit/{$sportCode}-{$articleId}-6-Logo.png");
		imagecopy($photoFrame, $photoAplikacija0, 0, 0, 0, 0, 1024, 768);
		imagecopy($photoFrame, $photoAplikacija1, 0, 0, 0, 0, 1024, 768);
		imagecopy($photoFrame, $photoAplikacija2, 0, 0, 0, 0, 1024, 768);
		imagecopy($photoFrame, $photoAplikacija3, 0, 0, 0, 0, 1024, 768);
		if(is_file("imagesKit/{$sportCode}-{$articleId}-4-{$color4}-front.png")) {
			$photoAplikacija4 = imagecreatefrompng("imagesKit/{$sportCode}-{$articleId}-4-{$color4}-front.png");
			imagecopy($photoFrame, $photoAplikacija4, 0, 0, 0, 0, 1024, 768);
		}
		if(is_file("imagesKit/{$sportCode}-{$articleId}-5-{$color4}-front.png")) {
			$photoAplikacija5 = imagecreatefrompng("imagesKit/{$sportCode}-{$articleId}-5-{$color5}-front.png");
			imagecopy($photoFrame, $photoAplikacija5, 0, 0, 0, 0, 1024, 768);
		}
		imagecopy($photoFrame, $photoCvetex, 0, 0, 0, 0, 1024, 768);
		imagejpeg($photoFrame, $targetFileBigFront, 100);
		imagejpeg($photoFrame, $targetFileSmallFront, 100);
//		imagedestroy($photoFrame);
//		$response = array('ok' => 'ok');
//		echo json_encode($response);
		$dest = imagecreatetruecolor(466, 362);
		$destSmall = imagecreatetruecolor(230, 173);
		imagecopyresampled($dest, $photoFrame, 0, 0, 0, 0, 466, 362, imagesx($photoFrame), imagesy($photoFrame));
		imagejpeg($dest, $targetFileRegularFront, 80);
		imagecopyresampled($destSmall, $photoFrame, 0, 0, 0, 0, 230, 173, imagesx($photoFrame), imagesy($photoFrame));
		imagejpeg($destSmall, $targetFileSmallFront, 80);
		imagedestroy($dest);
		imagedestroy($destSmall);

		$photoFrame = imagecreatetruecolor(1024, 768);
		$photoAplikacija0 = imagecreatefrompng("imagesKit/{$sportCode}-bg.png");
		$photoAplikacija1 = imagecreatefrompng("imagesKit/{$sportCode}-{$articleId}-1-{$color1}-rear.png");
		$photoAplikacija2 = imagecreatefrompng("imagesKit/{$sportCode}-{$articleId}-2-{$color2}-rear.png");
		$photoAplikacija3 = imagecreatefrompng("imagesKit/{$sportCode}-{$articleId}-3-{$color3}-rear.png");
		$photoCvetex = imagecreatefrompng("imagesKit/{$sportCode}-{$articleId}-6-Logo.png");
		imagecopy($photoFrame, $photoAplikacija0, 0, 0, 0, 0, 1024, 768);
		imagecopy($photoFrame, $photoAplikacija1, 0, 0, 0, 0, 1024, 768);
		imagecopy($photoFrame, $photoAplikacija2, 0, 0, 0, 0, 1024, 768);
		imagecopy($photoFrame, $photoAplikacija3, 0, 0, 0, 0, 1024, 768);
		if(is_file("imagesKit/{$sportCode}-{$articleId}-4-{$color4}-rear.png")) {
			$photoAplikacija4 = imagecreatefrompng("imagesKit/{$sportCode}-{$articleId}-4-{$color4}-rear.png");
			imagecopy($photoFrame, $photoAplikacija4, 0, 0, 0, 0, 1024, 768);
		}
		if(is_file("imagesKit/{$sportCode}-{$articleId}-5-{$color4}-rear.png")) {
			$photoAplikacija5 = imagecreatefrompng("imagesKit/{$sportCode}-{$articleId}-5-{$color5}-rear.png");
			imagecopy($photoFrame, $photoAplikacija5, 0, 0, 0, 0, 1024, 768);
		}
		imagecopy($photoFrame, $photoCvetex, 0, 0, 0, 0, 1024, 768);
		imagejpeg($photoFrame, $targetFileBigRear, 100);
		imagejpeg($photoFrame, $targetFileSmallRear, 100);
//		imagedestroy($photoFrame);
//		$response = array('ok' => 'ok');
//		echo json_encode($response);
		$dest = imagecreatetruecolor(466, 362);
		$destSmall = imagecreatetruecolor(230, 173);
		imagecopyresampled($dest, $photoFrame, 0, 0, 0, 0, 466, 362, imagesx($photoFrame), imagesy($photoFrame));
		imagejpeg($dest, $targetFileRegularRear, 80);
		imagecopyresampled($destSmall, $photoFrame, 0, 0, 0, 0, 230, 173, imagesx($photoFrame), imagesy($photoFrame));
		imagejpeg($destSmall, $targetFileSmallRear, 80);
		imagedestroy($dest);
	}
}