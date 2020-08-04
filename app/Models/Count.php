<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Count extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function storeCount(Int $user_id)
    {
        $this->user_id = $user_id;
        $this->save();

        return;
    }
}
