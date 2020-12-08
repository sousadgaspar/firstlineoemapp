<?php 

return [

    'default' => 'test',

    'connections' => [
 "AGWLS02" => ["host" => env("AGWLS02"), "hostName" => "AGWLS02", "username"  => env("AGWLS02_USER"), "password"  => env("AGWLS02_PASSWORD"), "timeout"   => env("AGWLS02_TIMOUT"),],
 "AGWLS01" => ["host" => env("AGWLS01"), "hostName" => "AGWLS01", "username"  => env("AGWLS01_USER"), "password"  => env("AGWLS01_PASSWORD"), "timeout"   => env("AGWLS01_TIMOUT"),],
 "AGWLS02" => ["host" => env("AGWLS02"), "hostName" => "AGWLS02", "username"  => env("AGWLS02_USER"), "password"  => env("AGWLS02_PASSWORD"), "timeout"   => env("AGWLS02_TIMOUT"),],
 "AGWLS01" => ["host" => env("AGWLS01"), "hostName" => "AGWLS01", "username"  => env("AGWLS01_USER"), "password"  => env("AGWLS01_PASSWORD"), "timeout"   => env("AGWLS01_TIMOUT"),],
 "AGWLS01" => ["host" => env("AGWLS01"), "hostName" => "AGWLS01", "username"  => env("AGWLS01_USER"), "password"  => env("AGWLS01_PASSWORD"), "timeout"   => env("AGWLS01_TIMOUT"),],
 "AGWLS02" => ["host" => env("AGWLS02"), "hostName" => "AGWLS02", "username"  => env("AGWLS02_USER"), "password"  => env("AGWLS02_PASSWORD"), "timeout"   => env("AGWLS02_TIMOUT"),],
 "AGWLS01" => ["host" => env("AGWLS01"), "hostName" => "AGWLS01", "username"  => env("AGWLS01_USER"), "password"  => env("AGWLS01_PASSWORD"), "timeout"   => env("AGWLS01_TIMOUT"),],
 "DCR01" => ["host" => env("DCR01"), "hostName" => "DCR01", "username"  => env("DCR01_USER"), "password"  => env("DCR01_PASSWORD"), "timeout"   => env("DCR01_TIMOUT"),],
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
