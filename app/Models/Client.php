<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 * 
 * @property int $id
 * @property string $nom
 * @property string|null $email
 * @property Carbon|null $date_inscription
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Commande[] $commandes
 *
 * @package App\Models
 */
class Client extends Model
{
	protected $table = 'clients';

	protected $casts = [
		'date_inscription' => 'datetime'
	];

	protected $fillable = [
		'nom',
		'email',
		'date_inscription'
	];

	public function commandes()
	{
		return $this->hasMany(Commande::class);
	}
}
