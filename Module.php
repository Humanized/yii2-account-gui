<?php

namespace humanized\usermodule;

/**
 * @package yii2-usermodule
 */
class Module extends \yii\base\Module
{

    public $enableSignup = TRUE;
    public $enableTokenAuthentication = TRUE;
    public $enableTokenGeneration = TRUE;

    public function init()
    {
        parent::init();
    }

}
