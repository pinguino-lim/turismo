<?php
/**
 * Class to consume Amadeus API Rest
 * The operations allowed:
 * 
 *  - GET       : Request 
 * 
 * Extras
 *  - Authentication to get the TOKEN
 *  - Conver Array to JSON
 * 
 * @author      Elwin Huaman <@Elwinlhq>
 * @version     1.0
 */
class API{
/**
     * Consul to a server through the protocol HTTP (GET)
     * Used to request resources from an API REST
     * 
     * @param string $url   URL from the resources e.g.:https://test.api.amadeus.com/v1/shopping/flight-offers?origin=MAD&destination=LIM&departureDate=2018-09-25&returnDate=2018-09-28&adults=1&travelClass=BUSINESS&nonStop=true&max=2
     * @param string $token TOKEN of authentication
     * @return JSON
     */
    static function GET($url){ 
        $ch = curl_init();        
        $headers = array();
        $headers[] = "Accept: application/json";
        curl_setopt($ch, CURLOPT_URL, $url."&api_key=V8p7DUAN3G3mwh5H");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);    
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}
?>