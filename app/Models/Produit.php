<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class Produit
 * 
 * @property int $id
 * @property string $nom
 * @property float $prix
 * @property int $stock
 * @property int $categorie_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Category $category
 * @property Collection|Commande[] $commandes
 *
 * @package App\Models
 */
class Produit extends Model
{
    use SoftDeletes;
	protected $table = 'produits';

	protected $casts = [
		'prix' => 'float',
		'stock' => 'int',
		'categorie_id' => 'int'
	];

	protected $fillable = [
		'nom',
		'prix',
		'stock',
		'categorie_id',
		'image',
	];


	public function category()
	{
		return $this->belongsTo(Category::class, 'categorie_id');
	}

	public function commandes()
	{
		return $this->belongsToMany(Commande::class)
					->withPivot('quantite', 'prix_unitaire')
					->withTimestamps();
	}
}
