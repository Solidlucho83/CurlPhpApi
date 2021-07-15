<?php

class Curl 
{
    private $url;
    private $option;
    private  $handler;  

    public function __construct($url, $option = null ){
        $this->url = $url;
        $this->option = $option;  
    }

    public function init(){
        $this->handler = curl_init($this->url);
        return $this;       
    }

    public function setOptions($option = null, $value = null){
        curl_setopt($this->handler, is_null($option) ? $this->option : $option, is_null($value) ? $this->url : $value);
    }

    public function execute(){
        return curl_exec($this->handler);
    }

    public function close(){
        return curl_close($this->handler);
        return $this;  
    }
}

