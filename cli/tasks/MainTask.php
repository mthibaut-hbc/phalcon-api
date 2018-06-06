<?php

namespace Niden\Cli\Tasks;

use Phalcon\CLI\Task as PhTask;

class MainTask extends PhTask
{
    /**
     * Executes the main action of the cli mapping passed parameters to tasks
     */
    public function mainAction()
    {
        // 'green' => "\033[0;32m(%s)\033[0m",
        // 'red'   => "\033[0;31m(%s)\033[0m",

        echo <<<EOF
******************************************************
 Phalcon Team | (C) {date('Y')}
******************************************************
PHP_EOL;
Usage: team <command>

  --help         \e[0;32m(safe)\e[0m shows the help screen/available commands
  --clear-cache  \e[0;32m(safe)\e[0m clears the cache folders

EOF;
    }
}
