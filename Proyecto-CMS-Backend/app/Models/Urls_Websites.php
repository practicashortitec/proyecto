<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Urls_Websites extends Model
{
    protected $table = "urls_websites";
    protected $fillable = ["url_web", "web_name","added_by"];
    protected $primaryKey = "url_web";
    public $incrementing = false;

    public $timestamps = false;
}


