<?php

namespace App\Factories;

use App\Contracts\IHistoryFactory;
use App\ExecutedCommandHistory;
class ExecutedCommandHistoryFactory implements IHistoryFactory {

    static public function produce () {
        return new ExecutedCommandHistory();
    }

    static public function run() {
        return self::produce();
    }
}