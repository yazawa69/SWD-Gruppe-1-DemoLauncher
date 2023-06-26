<?php

namespace App\Http\Services\Hololens;


class HololensClient 
{
    private String $ip;
    private String $username;
    private String $password;
    private String $api_stream_path;
    private String $query_string;

    public function __construct(String $ip){
        $this->ip = $ip;
        $this->username = "SWD";
        $this->password = "SWD1234567";
        $this->api_stream_path = "/api/holographic/stream/live_high.mp4";
        $this->query_string = "?holo=true&pv=true&mic=false&loopback=false";
    }

    public function getStream(){
        $query_string = "?holo=true&pv=true&mic=false&loopback=false";
        $stream_url = "https://".$this->username.":".$this->password."@192.168.188.27".$this->api_stream_path;
        return view('livestream.hololens', ['stream_url' => $stream_url]);
    }

    //show to matthias -- OPTION  A
    public function getStreamHtmlString()
    {
        $stream_url = "https://".$this->username.":".$this->password."@".$this->ip.$this->api_stream_path;
        return view('livestream.hololens', ['stream_url' => $stream_url])->render();
    }

    // show difference to matthias -- OPTION B
    public function getStreamRaw()
    {
        $stream_url = "https://".$this->username.":".$this->password."@".$this->ip.$this->api_stream_path.$this->query_string;
        return $stream_url;
    }

}

