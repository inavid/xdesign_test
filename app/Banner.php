<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'banner';

    /**
     * Get the phone record associated with the user.
     */
    public function CatalogoTipoBanner()
    {
        return $this->hasOne('App\CatalogoTipoBanner');
    }
}
