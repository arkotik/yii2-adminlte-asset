<?php
namespace dmstr\adminlte\web;

use yii\web\AssetBundle;

/**
 * FontAwesome AssetBundle
 */
class FontAwesomeAsset extends AssetBundle
{
	public $sourcePath = '@vendor/arkotik/adminlte/plugins/fontawesome-free';

	public $css = [
		'css/all.min.css',
	];
}
