<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use yasmuru\LaravelTinify\Facades\Tinify;


class AvatarUploadController extends Controller
{

// Осуществляет превью и загрузку аватара на странице /fillprofile.

    public function avatarUpload(Request $request)
    {
    	
    	$data = $request['image'];

    	// разбивает строку по разделителю и выдает массив из частей
		$image_array = explode(",", $data);
		$data = base64_decode($image_array[1]);

		// Имя, путь, создание файла
		$imageName = 'avatar' . time() . '.jpg';
		$imagePath = 'storage/avatarUploads/' . $imageName;
		file_put_contents($imagePath, $data);

		// используя API TiniPng, уменьшается размер аватара
		$result = Tinify::fromFile($imagePath);
		$result->toFile($imagePath);

		// echo filesize($imagePath); - размер файла

		echo '<img src="' . $imagePath .'" class="img-thumbnail" />';

		// путь к аватару сохранятся в БД
		$user = Auth::user();

		if($user->image){
			unlink($user->image);
		}

		$user->update([
			'image' => $imagePath,
		]);
    }
}
