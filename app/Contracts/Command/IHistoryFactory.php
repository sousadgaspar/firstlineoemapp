<?php
    namespace App\Contracts;

    interface IHistoryFactory {
        static function produce();
        static function run();
    }