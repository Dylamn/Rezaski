<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 12 Apr 2019 21:29:40 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Category
 * 
 * @property int $id
 * @property string $label
 * @property float $adultPrice
 * @property float $childrenPrice
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models\Base
 */
class Category extends Eloquent
{
	protected $table = 'rezaski.categories';

	protected $casts = [
		'adultPrice' => 'float',
		'childrenPrice' => 'float'
	];
}
