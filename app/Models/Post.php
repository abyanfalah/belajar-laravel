<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['user', 'category'];

    // public function scopeFilter($query){
    //     $search = request('search');
    //     return $query
    //             ->where('title', 'like', '%'. $search.'%')
    //             ->orWhere('body', 'like', '%'. $search.'%');
    // }

    public function scopeFilter($query, array $filters)
    {
        // search
        if(isset($filters['search'])){
            $search = $filters['search'];
            return $query
                ->where('title', 'like', '%'. $search .'%')
                ->orWhere('body', 'like', '%'. $search .'%');
        }
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
