<?php namespace Stefan\ImageUploadextended\Controllers;

use BackendMenu;
use Raviraj\Rjgallery\Controllers\Categories as RJCategoriesController;

/**
 * Categories Back-end Controller
 */
class Categories extends RJCategoriesController
{
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Stefan.ImageUploadExtended', 'gallery', 'categories');
    }
}