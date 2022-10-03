<?php

class App {
    public function __construct()
    {
        $url = $this->parseURL();
        var_dump($url);
    }

    public function parseURL() 
    {
        if (isset($_GET['url']) ) {
            // fungi rtrim digunakan untuk dapat menghapus spasi atau karakter standar lainnya dari sisi kanan string (disini yang akan dihapus "/")
            $url = rtrim($_GET['url'], '/');
            // membersihkan karakter aneh pada url menggunakan parameter filter sanitize
            $url = filter_var($url, FILTER_SANITIZE_URL);
            // memcahkan url dengan fungsi explode
            $url = explode('/', $url);
            return $url;
        }
    }
}