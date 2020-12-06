<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CRUDDirectory extends Model
{
    use HasFactory;

    public static $nameFolderCategory = null;
    public static $defaultPathCategory = 'public/categories/';
    
    public static function sluggableNameFolder($nameCategory) {
       return SlugService::createSlug(Category::class, 'slug',$nameCategory);
    }

    public static function isFolderExistInCategory($nameCategory) {
        self::$nameFolderCategory = self::sluggableNameFolder($nameCategory);
        $allDirectoryInCategory = Storage::allDirectories(self::$defaultPathCategory);
        
        return in_array(self::$defaultPathCategory . self::$nameFolderCategory,$allDirectoryInCategory);
    }

    public static function createFolderInCategory($nameCategory) {
        
        if(!self::isFolderExistInCategory($nameCategory)) {
            Storage::makeDirectory(self::$defaultPathCategory . self::$nameFolderCategory);
            return true;
        }

        return false;
    }

    public static function deleteFolderInCategory($pathOnFolder) {

        $nameFolder = array_pop($pathOnFolder);
        $files = Storage::allFiles(self::$defaultPathCategory . '/' . $nameFolder);
        $folders = Storage::allDirectories(self::$defaultPathCategory . '/' . $nameFolder);
        
        if(count($files) || count($folders)) return false;
        
        Storage::deleteDirectory(self::$defaultPathCategory . $nameFolder);
        return true;
    }

    public static function getPathCategory() {
        return asset('storage') . '/categories/' . self::$nameFolderCategory;
    }
}