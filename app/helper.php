<?php
if (!function_exists('set_active_route')){
    function set_active_route($route){
        return Route::is($route) ? 'active' : '';
    }
}

if (!function_exists('net_a_payer')){
    function net_a_payer($commande){
        $articles=$commande->articles;
        $nap=0;
        foreach($articles as $article){
            $nap+=$article->pu*$article->qte;
        }
        return $nap;
    }
}