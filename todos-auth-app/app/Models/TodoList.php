<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $title
 * @method static \Database\Factories\TodoListFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TodoList newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TodoList newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TodoList query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TodoList whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TodoList whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TodoList whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TodoList whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TodoList extends Model
{
    /** @use HasFactory<\Database\Factories\TodoListFactory> */
    use HasFactory;


    public function todos():HasMany{
        return $this->hasMany(Todo::class);
    }

    public function completedTodos():HasMany{
        return $this->hasMany(Todo::class)->where('completed',true);
    }


}
