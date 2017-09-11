<?php

namespace Ikeraslt\Settings;


use Illuminate\Database\Eloquent\Model;

/**
 * Ikeraslt\Setting
 *
 * @property int $id
 * @property string $key
 * @property string $value
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ikeraslt\Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ikeraslt\Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ikeraslt\Setting whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ikeraslt\Setting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ikeraslt\Setting whereValue($value)
 */
class Setting extends Model
{
    protected $fillable = ['key', 'value'];
}