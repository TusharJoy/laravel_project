<?php

namespace App;
use Carbon\Carbon ;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','body','user_id'] ;

    public function comments()
     {
    	return $this->hasMany(Comment::class) ;
    }

    public function addComment($var)
    {

    	$this->comments()->create(['body'=>$var]) ;
    }

    public function user()
    {
    	 return $this->belongsTo(User::class) ; 
    }

    public function scopeFilter($query,$filters)
    {
       // dd($filters) ;
        
        if ( $month = $filters['month'])
        {
            $query->whereMonth('created_at',Carbon::parse($month)->month) ;
        }

        if ( $year = $filters['year'])
        {
            $query->whereYEAR('created_at',$year) ;
        }

    }

    public static function archives()
    {
        return static::selectRaw('YEAR(created_at) YEAR,
                
                MONTHNAME(created_at) MONTH,
                COUNT(*) published')
                ->groupBy('YEAR','MONTH')
                ->orderByRaw('min(created_at) desc')
                ->get()->toArray() ;
    }
}

