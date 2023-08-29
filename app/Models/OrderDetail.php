<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\OrderDetail
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string|null $phone
 * @property string $address1
 * @property string $address2
 * @property string|null $neighborhood
 * @property string|null $complement
 * @property string $city
 * @property string|null $state
 * @property string $zipcode
 * @property string $country-code
 * @property string|null $reference
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereAddress1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereAddress2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereComplement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereCountryCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereNeighborhood($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetail whereZipcode($value)
 * @mixin \Eloquent
 */
class OrderDetail extends Model
{
    use HasFactory;
}
