<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Models\CustomerAddress
 *
 * @property int $id
 * @property string $type
 * @property string $address1
 * @property string $address2
 * @property string $city
 * @property string|null $state
 * @property string $zipcode
 * @property string $country_code
 * @property int $customer_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Country $country
 * @property-read \App\Models\Customer|null $customer
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerAddress newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerAddress newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerAddress query()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerAddress whereAddress1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerAddress whereAddress2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerAddress whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerAddress whereCountryCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerAddress whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerAddress whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerAddress whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerAddress whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerAddress whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerAddress whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerAddress whereZipcode($value)
 * @mixin \Eloquent
 */
class CustomerAddress extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'address1', 'address2', 'city', 'state', 'zipcode', 'country_code', 'customer_id'];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_code', 'code');
    }
}
