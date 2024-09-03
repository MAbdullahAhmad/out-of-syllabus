<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model {

    use HasFactory;

    /**
     * mass-assignable attributes.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'nick'
    ];


    /**
     * Get the user that owns the admin.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo(User::class);
    }
    
}
