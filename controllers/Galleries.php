<?php namespace Stefan\ImageUploadextended\Controllers;

use Flash;
use BackendMenu;
use Raviraj\Rjgallery\Controllers\Galleries as RJGalleriesController;
use Stefan\ImageUploadextended\Models\Gallery;

/**
 * Galleries Back-end Controller
 */
class Galleries extends RJGalleriesController
{

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Stefan.ImageUploadExtended', 'gallery', 'galleries');
    }
}
