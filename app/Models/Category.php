<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    use Sluggable;

  public $attributes = [
      'path_category'=> 'default',
      'parent_categories_id' => null
  ];
    protected $fillable = [
        'title','show','path_category',
    ];

      public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

       public function products()
     {
          return $this->hasMany('App\Models\MattressTopper');
     }

   

     public static function getIdCategories($uri) {
         
     $listUri = explode('/',$uri);
     $idCategory = array_pop($listUri);
    
     if(!is_numeric($idCategory)) return abort(404);
    
     return $idCategory;
    }

    public static function getKeyIdListCategory($listCategory) {
        
        $listCategories = [];
        foreach ($listCategory as $key => &$array) {
            $listCategories[$array->original['id']] = &$array->original;
            $array->original['childs'] = array();
        }

        return $listCategories;
    }

    public static function categoryThree($listCategories) {
    
            foreach ($listCategories as $id => &$category) {
                if(!array_key_exists($category['parent_categories_id'],$listCategories)) continue;
                   
                $listCategories[$category['parent_categories_id']]['childs'][$id] = &$category;
            }


            foreach ($listCategories as $id => $value) {
                if(!$value['parent_categories_id']) {
                    $listCategories[$id] = $value;
                } else {
                    unset($listCategories[$id]);
                }
            }



        return $listCategories;
    }
}