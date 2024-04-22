<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Web_Test extends Model
{
    protected $table = "web_test";
    protected $fillable = ["url_web","test_1","test_2","test_3","test_4",
    "test_5","test_6","test_7","test_8","test_9","test_10",
    "test_11","test_12","test_13","test_14","result_CMS"];

    protected $primaryKey = "url_web";
    public $incrementing = false;

    public $timestamps = false;
}


