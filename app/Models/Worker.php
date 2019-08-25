<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model {
	use CrudTrait;

	/*
	|--------------------------------------------------------------------------
	| GLOBAL VARIABLES
	|--------------------------------------------------------------------------
	 */

	//protected $table = 'workers';
	//protected $primaryKey = 'id';
	// public $timestamps = false;
	// protected $guarded = ['id'];
	protected $fillable = ['name', 'name_ru', 'name_eng', 'bio', 'bio_ru', 'bio_eng', 'image'];
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
		$destination_path = "workers";
		// if the image was erased
		if ($value == null) {
			// delete the image from disk
			\Storage::disk($disk)->delete($this->{ $attribute_name});
			// set null in the database column
			$this->attributes[$attribute_name] = null;
		}
		// if a base64 was sent, store it in the db
		if (starts_with($value, 'data:image')) {
			// 0. Make the image
			$image = \Image::make($value);
			if ($image->mime == 'image/jpeg') {
				//     $image->resize(null, 500, function ($constraint) {
				//     $constraint->aspectRatio();
				//     $constraint->upsize();
				// });
				$filename = 'worker_'.str_random(7).time().'.jpg';

			} elseif ($image->mime == 'image/png') {
				// $image->resize(null, 500, function ($constraint) {
				//         $constraint->aspectRatio();
				//         $constraint->upsize();
				//     });

				$filename = 'worker_'.str_random(7).time().'.png';
			}
			// 1. Generate a filename.
			// 2. Store the image on disk.
			\Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
			// 3. Save the path to the database
			$this->attributes[$attribute_name] = $destination_path.'/'.$filename;
		}
	}

}
