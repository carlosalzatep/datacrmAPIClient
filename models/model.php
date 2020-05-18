<?php

class Cliente {

    public $username, $claveAcceso;
    
    public function __construct($username, $claveAcceso) {
        $this->username = $username;
        $this->claveAcceso = $claveAcceso;
    }

    public function getchallenge() {

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://developold.datacrm.la/datacrm/pruebatecnica/webservice.php?operation=getchallenge&username=".$this->username,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $response = json_decode($response,true);//Json->Array

        return $response['result']['token'];
    }

    public function getAccessKey($tokenString){
        return md5($tokenString.$this->claveAcceso);
    }

    public function login($AccessKey) {

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://developold.datacrm.la/datacrm/pruebatecnica/webservice.php",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "operation=login&username=".$this->username."&accessKey=".$AccessKey,
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/x-www-form-urlencoded"
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $response = json_decode($response,true);//Json->Array

        return $response;

    }

    public function getContacts($SessionName){

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://developold.datacrm.la/datacrm/pruebatecnica/webservice.php?operation=query&sessionName=".$SessionName."&query=select%20*%20from%20Contacts;",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $response = json_decode($response,true);//Json->Array

        return $response['result'];

    }

}
?>

