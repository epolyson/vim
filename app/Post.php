<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function getPaginateByLimit(int $limit_count = 10)
    {
        // updated_atで降順に並べたあと、limitで制限をかける
        return $this->orderBy("updated_at","desc")->paginate($limit_count);
    }
}
