<?php

namespace michnaadam33\dutyfixtures;

use Yii;
use yii\console\Controller;
use yii\helpers\Console;

/**
 * This is just an example.
 */
class DutyConsole extends Controller
{
    public $defaultAction = 'help';

    public function actionHelp()
    {
        $this->stdout('Available action'."\n\n", Console::FG_GREEN);
        $this->stdout('Not implemented yet'."\n", Console::BOLD, Console::BG_RED);
    }
}
