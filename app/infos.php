<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class infos extends Model
{
    //
    protected $fillable = ['name', 'address', 'phone', 'email', 'logo', 'about'];

    protected $appends = ['logo_link'];

    public function getLogoLinkAttribute()
    {
        return $this->logo ? '/Images/logo/' . $this->logo : asset('Images/logo.png');
    }
}
