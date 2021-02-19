<?php


namespace App\Services;


class MyFunctions
{
    public function isHomePage() {
        return (substr_count(substr(url()->current(), strpos(url()->current(),'//')+2),'/')==0) ? true : false ;
    }
    public function currentUrl() {
        return url()->current() ;
    }

}
