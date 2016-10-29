<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Message
 *
 * @property integer $id
 * @property string $message
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Message whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Message whereMessage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Message whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Message whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Message extends Model
{
    //
}
