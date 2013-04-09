<?php

class SelectionController extends Controller
{

	public function actionIndex($sportId)
	{
		$selection = Article::model()->findAllByAttributes(array("sportId" => $sportId));

		$this->render('index', array('selection' => $selection));
	}
}