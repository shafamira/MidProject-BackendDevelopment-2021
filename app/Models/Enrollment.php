<?php

namespace App\Models;

use App\Scopes\EnrollmentScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enrollment extends Model
{
    use SoftDeletes;

    public $table = 'enrollments';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'status',
        'user_id',
        'course_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const STATUS_RADIO = [
        'awaiting' => 'Awaiting',
        'accepted' => 'Accepted',
        'rejected' => 'Rejected',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
