<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Attachment extends Model
{
    /**
     * @var array
     */
	protected $fillable = [
        'attachmentable_id',
        'attachmentable_id_type',
        'role',
        'type',
        'original_name',
        'name',
        'path',
        'size'
    ];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($model) {
            Storage::disk('attachments')->delete($model->name);
        });
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */

    public function attachmentable()
    {
        return $this->morphTo();
    }

    /**
     * @return string
     */
    public function getSize()
    {
        if ($this->size > 1024) {
            return number_format($this->size / 1024, 2) . ' Mb';
        } else {
            return $this->size . ' Kb';
        }
    }

	public function getUrlAttribute()
	{
		return Storage::disk('attachments')->url($this->name);
	}
}
