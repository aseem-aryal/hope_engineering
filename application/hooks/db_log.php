<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Db_log{
    function construct()
    {
     
    }
    
    function logQueries(){
        $CI = & get_instance();
 
        $filepath = APPPATH . 'logs/Query-log-' . date('Y-m-d') . '.php'; // Creating Query Log file with today's date in application/logs folder
        $handle = fopen($filepath, "a+");                 // Opening file with pointer at the end of the file
 
        $times = $CI->db->query_times;                   // Get execution time of all the queries executed by controller
        foreach ($CI->db->queries as $key => $query) { 
            $sql = $query . " \n Execution Time:" . $times[$key]; // Generating SQL file alongwith execution time
            fwrite($handle, $sql . "\n\n");              // Writing it in the log file
        }
 
        fclose($handle);      // Close the file
    }
}

