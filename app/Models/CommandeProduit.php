<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CommandeProduit
 * 
 * @property int $commande_id
 * @property int $produit_id
 * @property int $quantite
 * @property float $prix_unitaire
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Commande $commande
 * @property Produit $produit
 *
 * @package App\Models
 */
class CommandeProduit extends Model
{
	protected $table = 'commande_produit';
	public $incrementing = false;

	protected $casts = [
		'commande_id' => 'int',
		'produit_id' => 'int',
		'quantite' => 'int',
		'prix_unitaire' => 'float'
	];

	protected $fillable = [
		'quantite',
		'prix_unitaire'
	];

	public function commande()
	{
		return $this->belongsTo(Commande::class);
	}

	public function produit()
	{
		return $this->belongsTo(Produit::class);
	}
}
