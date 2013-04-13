<?php

class SelectionController extends Controller
{
	public function actionIndex($sportId)
	{
		$this->render('index');
	}

	public function actionCatalogue($sportId)
	{
		$selection = Article::model()->findAllByAttributes(array("sportId" => $sportId));

		$this->render('catalogue', array('selection' => $selection));
	}

	public function action3DKit($articleId)
	{
		$selection = Article::model()->findByPk($articleId);

		$this->render('3DKit', array('selection' => $selection));
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
//		$color1 = sprintf('%02d', $_POST['color1']);
//		$color2 = sprintf('%02d', $_POST['color2']);
//		$color3 = sprintf('%02d', $_POST['color3']);

		$color1 = $_POST['color1'];
		$color2 = $_POST['color2'];
		$color3 = $_POST['color3'];
		$color4 = $_POST['color4'];
		$color5 = $_POST['color5'];

		$targetfile = "imagesKit/target-{$articleId}-{$color1}-{$color2}-{$color3}.jpg";
		$photoFrame = imagecreatetruecolor(1024, 768);
		$photoAplikacija0 = imagecreatefrompng("imagesKit/ba-m-bg.png");
		$photoAplikacija1 = imagecreatefrompng("imagesKit/ba-m-{$articleId}-1-{$color1}.png");
		$photoAplikacija2 = imagecreatefrompng("imagesKit/ba-m-{$articleId}-2-{$color2}.png");
		$photoAplikacija3 = imagecreatefrompng("imagesKit/ba-m-{$articleId}-3-{$color3}.png");
		$photoAplikacija4 = imagecreatefrompng("imagesKit/ba-m-{$articleId}-4-{$color4}.png");
		$photoAplikacija5 = imagecreatefrompng("imagesKit/ba-m-{$articleId}-5-{$color5}.png");
		$photoCvetex = imagecreatefrompng("imagesKit/ba-m-1-6-Logo.png");
		imagecopy($photoFrame, $photoAplikacija0, 0, 0, 0, 0, 1024, 768);
		imagecopy($photoFrame, $photoAplikacija1, 0, 0, 0, 0, 1024, 768);
		imagecopy($photoFrame, $photoAplikacija2, 0, 0, 0, 0, 1024, 768);
		imagecopy($photoFrame, $photoAplikacija3, 0, 0, 0, 0, 1024, 768);
		imagecopy($photoFrame, $photoAplikacija4, 0, 0, 0, 0, 1024, 768);
		imagecopy($photoFrame, $photoAplikacija5, 0, 0, 0, 0, 1024, 768);
		imagecopy($photoFrame, $photoCvetex, 0, 0, 0, 0, 1024, 768);
//		imagejpeg($photoFrame, $targetfile);
//		imagedestroy($photoFrame);
//		$response = array('ok' => 'ok');
//		echo json_encode($response);
		$dest = imagecreatetruecolor(466, 362);
		imagecopyresampled($dest, $photoFrame, 0, 0, 0, 0, 466, 362, imagesx($photoFrame), imagesy($photoFrame));
		imagejpeg($dest, $targetfile, 100);
		imagedestroy($dest);
	}
}