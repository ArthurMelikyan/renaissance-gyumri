<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Image;

class Article extends Model {
	use CrudTrait;

	/*
	|--------------------------------------------------------------------------
	| GLOBAL VARIABLES
	|--------------------------------------------------------------------------
	 */

	//protected $table = 'articles';
	//protected $primaryKey = 'id';
	// public $timestamps = false;
	// protected $guarded = ['id'];
	protected $fillable = [
		'title', 'image', 'little_image', 'text', 'desc', 'published_at',
		'title_eng', 'title_ru', 'text_eng', 'text_ru', 'desc_eng', 'desc_ru',
	];
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
		$destination_path = "images/news/big";
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
				$image->resize(null, 600, function ($constraint) {
						$constraint->aspectRatio();
						$constraint->upsize();
					});
				$filename = 'renessance'.str_random(7).time().'.jpg';

			} elseif ($image->mime == 'image/png') {
				$image->resize(null, 500, function ($constraint) {
						$constraint->aspectRatio();
						$constraint->upsize();
					});

				$filename = 'renessance'.str_random(7).time().'.png';
			}
			// 1. Generate a filename.
			// 2. Store the image on disk.
			\Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
			// 3. Save the path to the database
			$this->attributes[$attribute_name] = $destination_path.'/'.$filename;
		}
	}
	public function setLittleImageAttribute($value) {
		$attribute_name   = "little_image";
		$disk             = "public_folder";
		$destination_path = "news";
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
				$image->resize(600, 400, function ($constraint) {
						$constraint->aspectRatio();
						$constraint->upsize();
					});
				$filename = 'thumb'.str_random(7).time().'.jpg';
			} elseif ($image->mime == 'image/png') {
				$image->resize(600, 400, function ($constraint) {
						$constraint->aspectRatio();
						$constraint->upsize();
					});
				$filename = 'thumb'.str_random(7).time().'.png';
			}
			// 1. Generate a filename.
			// 2. Store the image on disk.
			\Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
			// 3. Save the path to the database
			$this->attributes[$attribute_name] = $destination_path.'/'.$filename;
		}
	}

}
