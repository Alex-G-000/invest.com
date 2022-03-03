<?php

//economic calendar
add_action( 'init', 'inv_setcookie_calendar' );
function inv_setcookie_calendar() {
    if(!isset($_COOKIE['calendarToken'])){
        
        $estimate = 80399;        
        $filename = 'key.json';         
        $curr_time = time();
        
        // File modification date check
        $file = file_get_contents($filename);        
        $data_from_json = json_decode($file,TRUE);         
        $curr_file_date =  date("Y-m-d H:i:s", filemtime($filename));        
        $file_date_update =  date("Y-m-d H:i:s", $estimate);
        
        setcookie('calendarToken', $data_from_json[0]['key'], $data_from_json[0]['date'] + $estimate);
        $_COOKIE['calendarToken'] = $data_from_json[0]['key'];
        
        // key update
        if ($curr_time >= $estimate + $data_from_json[0]['date']) {
            $ch = curl_init();
        
            curl_setopt($ch, CURLOPT_URL, 'https://authorization.fxstreet.com/v2/token');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
        
            $headers = array();
            $headers[] = 'Content-Type: application/x-www-form-urlencoded';
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
            $payload = [
                'grant_type' => 'client_credentials',
                'client_id' => '73D7E3EFFB5E44EFB54A',
                'client_secret' => 'F604B4591798428F95AD',
                'scope' => 'calendar'
            ];
        
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
        
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        
            $result = curl_exec($ch);
            if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch);
            }
        
            $data = json_decode($result);
            curl_close($ch);
        
            $dataToWrite = array (
                "0" => array (
                    "key" => $data->access_token,
                    "date" => time()
                )
            );
        
            setcookie('calendarToken', $dataToWrite[0]['key'], $dataToWrite[0]['date'] + $estimate);
            $_COOKIE['calendarToken'] = $dataToWrite[0]['key'];
        
            file_put_contents('key.json',json_encode($dataToWrite)); // Convert to format and write to file.
        
            unset($taskList);
        }
    }
}
