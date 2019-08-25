<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model {
	use CrudTrait;

	/*
	|--------------------------------------------------------------------------
	| GLOBAL VARIABLES
	|--------------------------------------------------------------------------
	 */

	//protected $table = 'sponsors';
	//protected $primaryKey = 'id';
	// public $timestamps = false;
	// protected $guarded = ['id'];
	protected $fillable = ['title', 'title_ru', 'title_eng', 'image'];
	// protected $hidden = [];
	// protected $dates = [];

	/*
	|--------------------------------------------------------------------------
	| FUNCTIONS
	|--------------------------------------------------------------------------
	 */

	/*
	|--------------------------------------------------------------------------
	| RELATIONS
	|--------------------------------------------------------------------------
	 */

	/*
	|--------------------------------------------------------------------------
	| SCOPES
	|--------------------------------------------------------------------------
	 */

	/*
	|--------------------------------------------------------------------------
	| ACCESORS
	|--------------------------------------------------------------------------
	 */

	/*
	|--------------------------------------------------------------------------
	| MUTATORS
	|--------------------------------------------------------------------------
	 */
	public function setImageAttribute($value) {
		$attribute_name   = "image";
		$disk             = "public_folder";
		$destination_path = "sponsors";
		// if the image was erased
		if ($value == null) {
			\Storage::disk($disk)->delete($this->{ $attribute_name});
			$this->attributes[$attribute_name] = null;
		}
		if (starts_with($value, 'data:image')) {
			// 0. Make the image
			$image = \Image::make($value);
			if ($image->mime == 'image/jpeg') {
				$image->resize(null, 500, function ($constraint) {
						$constraint->aspectRatio();
						$constraint->upsize();
					});
				$filename = 'sponsor'.str_random(7).time().'.jpg';

			} elseif ($image->mime == 'image/png') {
				$image->resize(null, 500, function ($constraint) {
						$constraint->aspectRatio();
						$constraint->upsize();
					});

				$filename = 'sponsor'.str_random(7).time().'.png';
			}
			\Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
			$this->attributes[$attribute_name] = $destination_path.'/'.$filename;
		}
	}

}
