<?php

namespace Web;


use Illuminate\Database\Eloquent\Model;
use Delgont\Cms\Models\Concerns\Categorable;
use Delgont\Cms\Models\Concerns\Iconable;
use Delgont\Cms\Models\Concerns\Downloadable;
use Delgont\Cms\Models\Concerns\HasAuthor;
use Delgont\Cms\Models\Concerns\UpdatedBY;
use Delgont\Cms\Models\Concerns\HasComments;

use Illuminate\Database\Eloquent\SoftDeletes;



class Post extends Model
{
    use Categorable, Iconable, HasAuthor, UpdatedBy, SoftDeletes, HasComments;

    protected $with = ['author:id,name'];



}
