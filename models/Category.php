<?php namespace Stefan\ImageUploadextended\Models;

use Raviraj\Rjgallery\Models\Category as RJCategory;
use Stefan\ImageUploadextended\Models\Gallery;

/**
 * Gallery Model
 */
class Category extends RJCategory
{

    /**
     * @var array Relations
     */
   
    public $belongsToMany = [
        'galeries' => ['Stefan\ImageUploadextended\Models\Gallery',
                'table'  => 'raviraj_rjgallery_galleries_categories',
                'order'  => 'published_at desc',
                'scope'  => 'isPublished'
        ]
    ];


}