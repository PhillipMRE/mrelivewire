<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agent extends Model
{
    use HasFactory, HasAdvancedFilter, SoftDeletes;

    public $table = 'agents';

    public $filterable = [
        'id',
        'first_name',
        'last_name',
        'contact_phone',
    ];

    protected $dates = [
        'vetting_data',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public $orderable = [
        'id',
        'published',
        'first_name',
        'last_name',
        'contact_phone',
        'is_vetted',
    ];

    protected $casts = [
        'published'           => 'boolean',
        'is_vetted'           => 'boolean',
        'user_confirmed_info' => 'boolean',
        'demo'                => 'boolean',
    ];

    protected $fillable = [
        'published',
        'user_id',
        'display_name',
        'first_name',
        'last_name',
        'notify_phone',
        'contact_phone',
        'timezone',
        'call_line',
        'biography',
        'license',
        'website',
        'facebook',
        'youtube',
        'linkedin',
        'twitter',
        'instagram',
        'settings',
        'office',
        'template',
        'is_vetted',
        'vetting_data',
        'user_confirmed_info',
        'demo',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getVettingDataAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('project.date_format')) : null;
    }

    public function setVettingDataAttribute($value)
    {
        $this->attributes['vetting_data'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getCreatedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function getUpdatedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function getDeletedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }
}
