<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Page extends Model
{
  use SoftDeletes;

  protected $dates = ['deleted_at'];

  public function getRouteKeyName()
  {
    return 'url';
  }

  public function convertToUrl($titulo)
  {
        $str_nao_permitidas = array('ã','á','â','à','ẽ','ê','é','è','ĩ','î','í','ì','ó','ò','ô','õ','ú','ù','ũ','û','ç','Ã','Á','Â','À','Ẽ','Ê','É','È','Ĩ','Î','Í','Ì','Ó','Ò','Ô','Õ','Ú','Ù','Ũ','Û','Ç',' ',',','!','?','.','/');
        $str_troca          = array('a','a','a','a','e','e','e','e','i','i','i','i','o','o','o','o','u','u','u','u','c','A','A','A','A','E','E','E','E','I','I','I','I','O','O','O','O','U','U','U','U','C','-','','','','','');

        $string = str_replace($str_nao_permitidas, $str_troca, $titulo);
        $string = strtolower($string);
        return $string;
  }
}
