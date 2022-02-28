<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;

    public $table = 'courses';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'price',
        'created_at',
        'updated_at',
        'deleted_at',
        'description',
        'institution_id',
    ];

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class, 'course_id', 'id');
    }

    public function materials()
    {
        return $this->belongsToMany(Material::class);
    }

    public function getPrice()
    {
        return $this->price ? 'Rp'.number_format($this->price, 3) : 'FREE';
    }

    public function scopeSearchResults($query)
    {
        $query->when(request('material'), function($query) {
                $query->whereHas('materials', function($query) {
                    $query->whereId(request('material'));
                });
            });
    }
}
