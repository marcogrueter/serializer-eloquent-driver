<?php

namespace NilPortugues\Tests\Serializer\Drivers\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var string
     */
    protected $table = 'groups';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
