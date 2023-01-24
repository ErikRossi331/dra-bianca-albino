<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [];

    public function imageable()
    {
      return $this->morphTo();
    }

    public function imageUpload($images,  $location = '/images/')
    {
        $data = array();
        if(is_array($images)){

          foreach($images as $image)
          {
            $name = $image->getClientOriginalName();
            $image->move(public_path($location), $name);
            $data[] = $name;
          }
        }else{

          $name = $images->getClientOriginalName();
          $images->move(public_path($location), $name);
          $data = $name;
        }
        return $data;
    }

    public function imageDelete()
    {
        #dd($this);
        #URL::to('/images/events')
        $location = '/images/'.$this->reference_model.'/'.$this->id_name;
        $file = public_path($location);
        #dd($file);
        if(file_exists($file)){
            $res = unlink($file);
            if($res){
                $this->delete();
                return true;
            }
            else
                return false;

            #return true;
        }

    }

}
