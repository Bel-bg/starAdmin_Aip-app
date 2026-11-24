<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Commande
 * 
 * @property int $id
 * @property int $client_id
 * @property Carbon $date_commande
 * @property float $montant
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Client $client
 * @property Collection|Produit[] $produits
 *
 * @package App\Models
 */
class Commande extends Model
{
	protected $table = 'commandes';

	protected $casts = [
		'client_id' => 'int',
		'date_commande' => 'datetime',
		'montant' => 'float'
	];

	protected $fillable = [
		'client_id',
		'date_commande',
		'montant'
	];

	public function client()
	{
		return $this->belongsTo(Client::class);
	}

	public function produits()
	{
			return $this->belongsToMany(Produit::class, 'commande_produit')
				->withPivot('quantite', 'prix_unitaire')
				->withTrashed();
	}
}
