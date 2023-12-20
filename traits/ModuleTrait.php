<?php

namespace polucorus\user\traits;

use polucorus\user\Module;

/**
 * Trait ModuleTrait
 *
 * @property-read Module $module
 * @package polucorus\user\traits
 */
trait ModuleTrait
{
    /**
     * @return Module
     */
    public function getModule()
    {
        return \Yii::$app->getModule('user');
    }

    /**
     * @return string
     */
    public static function getDb()
    {
        return \Yii::$app->getModule('user')->getDb();
    }
}
