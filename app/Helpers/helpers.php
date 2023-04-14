<?php

use App\Models\GetAQuote;
use App\Models\Theme;

 //hero section
    function GetAQuote(){

    $getAquote = GetAQuote::all();
     return $getAquote;
    }

    //theme section
     function Theme(){

      $theme = Theme::all();
       return $theme;
   }