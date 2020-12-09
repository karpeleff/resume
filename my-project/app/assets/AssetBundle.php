<?php

namespace app\assets;

use yii\bootstrap4\BootstrapAsset;
use yii\web\YiiAsset;

class AssetBundle extends \yii\web\AssetBundle
{
	public $sourcePath = '@app/assets';

	public $css = [
		'css/site.css',
		'css/bootstrap-datepicker.css',
		'css/jquery.nselect.css',
		'css/jquery-editable-select.css',
		'css/main.css',
		'css/tagsinput.css',
	];
	public $js = [
	];
	public $depends = [
		YiiAsset::class,
		BootstrapAsset::class,
		FontAwesomeAsset::class,
	];
}
