<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    //Hardware checks
    const CHECK_MEMORY_STATUS = ["free -h | head -2 | awk -F\" \" '{print $2\"\t\t\"$3\"\t\"$4}' | sed s/used/Total/g | sed s/free/Used/g | sed s/shared/Free/g"];
    const CHECK_PARTITIONS = ["df -h | egrep -v '^tmpf|^dev|.boot$'"];
    const CHECK_JBOSS_STATUS = ['ps -ef | grep jboss'];
    const CHECK_MYSQL_STATUS = ['service mysql status'];
    const CHECK_MCI_PROCESS_STATUS = ['/apps/omn/bin/mci list | grep -v Running'];
    const CHECK_SCI_PROCESS_STATUS = ['/apps/omn/bin/sci -list | grep -v Running'];
    const CHECK_BCI_PROCESS_STATUS = ['/apps/omn/bin/bci -listsev1s'];
    const CHECK_CONNECTION_WITH_OCCS = ['netstat -an | grep -w 3868 | wc -l']; //integer normal state 8 if above 1 has no connecion


    //Basic SMSC Actions
    const GET_USER_CDR = [];
    const GET_ESME_CDR = [];
    const GET_BUFFER_DUMP = [];


}
