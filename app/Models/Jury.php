<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Jury extends Model {
	use CrudTrait;

	/*
	|--------------------------------------------------------------------------
	| GLOBAL VARIABLES
	|--------------------------------------------------------------------------
	 */

	//protected $table = 'jurys';
	//protected $primaryKey = 'id';
	// public $timestamps = false;
	// protected $guarded = ['id'];
	protected $fillable = ['text', 'text_ru', 'text_eng'];
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
	// public function setImageAttribute($value) {
	// 	$attribute_name   = "image";
	// 	$disk             = "public_folder";
	// 	$destination_path = "jury";
	// 	// if the image was erased
	// 	if ($value == null) {
	// 		// delete the image from disk
	// 		\Storage::disk($disk)->delete($this->{ $attribute_name});
	// 		// set null in the database column
	// 		$this->attributes[$attribute_name] = null;
	// 	}
	// 	// if a base64 was sent, store it in the db
	// 	if (starts_with($value, 'data:image')) {
	// 		// 0. Make the image
	// 		$image = \Image::make($value);
	// 		if ($image->mime == 'image/jpeg') {
	// 			//     $image->resize(null, 500, function ($constraint) {
	// 			//     $constraint->aspectRatio();
	// 			//     $constraint->upsize();
	// 			// });
	// 			$filename = 'jury_'.str_random(7).time().'.jpg';

	// 		} elseif ($image->mime == 'image/png') {
	// 			// $image->resize(null, 500, function ($constraint) {
	// 			//         $constraint->aspectRatio();
	// 			//         $constraint->upsize();
	// 			//     });

	// 			$filename = 'jury_'.str_random(7).time().'.png';
	// 		}
	// 		// 1. Generate a filename.
	// 		// 2. Store the image on disk.
	// 		\Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
	// 		// 3. Save the path to the database
	// 		$this->attributes[$attribute_name] = $destination_path.'/'.$filename;
	// 	}
	// }

}
