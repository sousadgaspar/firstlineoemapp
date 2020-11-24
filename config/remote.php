<?php 

return [

    'default' => 'test',

    'connections' => [
                        "TCRLS04" => [
                                        "host" => env("TCRLS04"), 
                                        "hostName" => "TCRLS04", 
                                        "username"  => env("TCRLS04_USER"), 
                                        "password"  => env("TCRLS04_PASSWORD"), 
                                        "timeout"   => env("TCRLS04_TIMOUT"),
                                    ],
                                    "TCRLS03" => ["host" => env("TCRLS03"), "hostName" => "TCRLS03", "username"  => env("TCRLS03_USER"), "password"  => env("TCRLS03_PASSWORD"), "timeout"   => env("TCRLS03_TIMOUT"),],
                                    "TCRLS02" => ["host" => env("TCRLS02"), "hostName" => "TCRLS02", "username"  => env("TCRLS02_USER"), "password"  => env("TCRLS02_PASSWORD"), "timeout"   => env("TCRLS02_TIMOUT"),],
                                    "TCRLS01" => ["host" => env("TCRLS01"), "hostName" => "TCRLS01", "username"  => env("TCRLS01_USER"), "password"  => env("TCRLS01_PASSWORD"), "timeout"   => env("TCRLS01_TIMOUT"),],
    ],
];
