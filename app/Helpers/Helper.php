<?php
  /*
  *
  * This helpers are mainly to treat the responses from ssh commands 
  * comming from the VAS servers
  *
  */


  /**
   * 
   * MEMORY
   * Template input:
   * 
   * Total\tUsed\tFree\n
   * 31G\t20G\t1.1G\n
   * 
   * 
   */



   /**
    * 
    * Parse bash output to Json
    *
   */

   function parseToJson($bashOutput) {
    return preg_replace('/\n/', '', $bashOutput);
   }


   function getKPIFrom($bashOutput, $kpi) {

    (new class {
      public function className ($kpi) {
        return ucfirst(strtolower($kpi));
      }

      

    });
    

   }

   


   function parseToArray($bashOutput, $delimiter="||") {
  
      $outputArray = explode($delimiter, $bashOutput);
      $keyValuePairs = [];

      foreach($outputArray as $element) {
        $kpiAndValue = explode("=>", $element);
        $keyValuePairs[] = $kpiAndValue;
      }

      return array_filter($keyValuePairs, function ($array) {
        if(count($array) == 2) {
          return $array;
        }
      });
   }

  // Implementation with anonymous function
  //  function getRowKPI ($kpiName, $rowData) {
  //   $rowKPI = array_filter($rowData, function ($element) use (&$kpiName) {
  //     if($element[0] === $kpiName) {
  //       echo $element[0];
  //     }
  //     else {
  //       throw new Exception("Erro ao processar KPI " . $kpiName);
  //     }
  //   });

  //   return $rowKPI;
  //  }

  // Implementatin with for loop
  function getRowKPI ($kpiName, $rowData) {
    $result = '';

    for($i = 0; $i < count($rowData); $i++) {
      if(str_replace("\n", '', $rowData[$i][0]) == $kpiName) {
        $result = $rowData[$i][1];
        break;
      }
      // else {
      //   throw new Exception("O indicador $kpiName nao existe."); // Why this exception is being throwed if the condition is not met?
      // }
    }
    return $result;
  }


  //Memory indicators KPI 
  /*
    Expected $rowDataResult format
    """
    Total\tUsed\tFree\n
    31G\t1.0G\t358M
    """
  */
  function getUsedMemory ($rowDataResult) {

    print $rowDataResult;

  }
