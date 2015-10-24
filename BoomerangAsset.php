<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 24.10.2015
 */
namespace skeeks\template\boomerang;

use yii\web\AssetBundle;

class BoomerangAsset extends AssetBundle
{
    public $sourcePath = '@skeeks/template/boomerang/src/';

    /**
     * @param string $asset
     * @return string
     * @throws \yii\base\InvalidConfigException
     */
    static public function getAssetUrl($asset)
    {
        return \Yii::$app->assetManager->getAssetUrl(\Yii::$app->assetManager->getBundle(static::className()), $asset);
    }
}
