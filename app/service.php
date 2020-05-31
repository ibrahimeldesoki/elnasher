<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    public $fillable = ['name' , 'description' , 'image'];
   /**
     * Set the service image.
     *
     * @param  string  $value
     * @return void
     */
    public function imageService($image)
    {

        $name_img = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/images/services/');
        $image->move($destinationPath, $name_img);
        $this->image = '/images/services/'.$name_img;
        $this->update(['image' => $name_img]);
    }
}
