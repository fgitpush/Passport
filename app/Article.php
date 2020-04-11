<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;


class Article extends Model
{
    use HasApiTokens;
    protected $fillable = ['title', 'body'];
}
