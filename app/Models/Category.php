<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * 
 * @property int $id
 * @property string $nom
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Produit[] $produits
 *
 * @package App\Models
 */
class Category extends Model
{
	protected $table = 'categories';

	protected $fillable = [
		'nom'
	];

	public function produits()
	{
		return $this->hasMany(Produit::class, 'categorie_id');
	}
}
