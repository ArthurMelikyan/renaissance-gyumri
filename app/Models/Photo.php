<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model {
	use CrudTrait;

	/*
	|--------------------------------------------------------------------------
	| GLOBAL VARIABLES
	|--------------------------------------------------------------------------
	 */

	//protected $table = 'photos';
	//protected $primaryKey = 'id';
	// public $timestamps = false;
	// protected $guarded = ['id'];
	protected $fillable = ['photo', 'photo_thumb', 'title'];
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
	public function setPhotoAttribute($value) {
		$attribute_name   = "photo";
		$disk             = "public_folder";
		$destination_path = "photoGalery/big";
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
				$image->resize(null, 700, function ($constraint) {
						$constraint->aspectRatio();
						$constraint->upsize();
					});
				$filename = 'photo'.str_random(7).time().'.jpg';

			} elseif ($image->mime == 'image/png') {
				$image->resize(null, 700, function ($constraint) {
						$constraint->aspectRatio();
						$constraint->upsize();
					});

				$filename = 'photo'.str_random(7).time().'.png';
			}
			// 1. Generate a filename.
			// 2. Store the image on disk.
			\Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
			// 3. Save the path to the database
			$this->attributes[$attribute_name] = $destination_path.'/'.$filename;
		}
	}
	public function setPhotoThumbAttribute($value) {
		$attribute_name   = "photo_thumb";
		$disk             = "public_folder";
		$destination_path = "photoGalery/thumb";
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
				$image->resize(null, 500, function ($constraint) {
						$constraint->aspectRatio();
						$constraint->upsize();
					});
				$filename = 'renessance_photo'.str_random(7).time().'.jpg';

			} elseif ($image->mime == 'image/png') {
				$image->resize(null, 500, function ($constraint) {
						$constraint->aspectRatio();
						$constraint->upsize();
					});

				$filename = 'renessance_photo'.str_random(7).time().'.png';
			}
			// 1. Generate a filename.
			// 2. Store the image on disk.
			\Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
			// 3. Save the path to the database
			$this->attributes[$attribute_name] = $destination_path.'/'.$filename;
		}
	}

}
