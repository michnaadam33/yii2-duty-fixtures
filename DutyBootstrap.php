<?php

namespace michnaadam33\dutyFixtures;

use yii\base\BootstrapInterface;
use yii\base\Application;

class DutyBootstrap implements BootstrapInterface
{
    /**
     * Bootstrap method to be called during application bootstrap stage.
     * @param Application $app the application currently running
     */
    public function bootstrap($app)
    {
        $app->controllerMap = array_merge($app->controllerMap, $this->controllerMap());
    }

    protected function controllerMap()
    {
        return [
            'fixtures' => [
                'class' => 'michnaadam33\dutyFixtures\DutyConsole'
            ]
        ];
    }
}