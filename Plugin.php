<?php namespace Stefan\ImageUploadExtended;

use Backend;
use System\Classes\PluginBase;

/**
 * ImageUploadExtended Plugin Information File
 */
class Plugin extends PluginBase
{

    public $require = ['Raviraj.RJGallery'];
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'stefan.imageuploadextended::lang.plugin.name',
            'description' => 'stefan.imageuploadextended::lang.plugin.description',
            'author'      => 'Stefan Ninic',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerNavigation()
    {
        return [
            'gallery' => [
                'label' => 'stefan.imageuploadextended::lang.menu.name',
                'url'   => Backend::url('stefan/imageuploadextended/galleries'),
                'icon'        => 'icon-picture-o',
                'permissions' => ['stefan.imageuploadextended.*'],
                'order'       => 500,

                'sideMenu' => [
                    'new_gallery' => [
                        'label'       => 'stefan.imageuploadextended::lang.menu.new_gallery',
                        'icon'        => 'icon-plus',
                        'url'         => Backend::url('stefan/imageuploadextended/galleries/create'),
                        'permissions' => ['stefan.imageuploadextended.access_galleries']
                    ],
                    'galleries' => [
                        'label'       => 'stefan.imageuploadextended::lang.menu.galleries',
                        'icon'        => 'icon-file-image-o',
                        'url'         => Backend::url('stefan/imageuploadextended/galleries'),
                        'permissions' => ['stefan.imageuploadextended.access_galleries']
                    ],
                    'new_category' => [
                        'label'       => 'stefan.imageuploadextended::lang.menu.new_category',
                        'icon'        => 'icon-plus',
                        'url'         => Backend::url('stefan/imageuploadextended/categories/create'),
                        'permissions' => ['stefan.imageuploadextended.access_galleries']
                    ],
                    'categories' => [
                        'label'       => 'stefan.imageuploadextended::lang.menu.categories',
                        'icon'        => 'icon-server',
                        'url'         => Backend::url('stefan/imageuploadextended/categories'),
                        'permissions' => ['stefan.imageuploadextended.access_categories']
                    ]
                ]
            ],
        ];
    }

    public function registerPermissions()
    {
        return [
            'stefan.imageuploadextended.*' => ['tab' => 'stefan.imageuploadextended::lang.plugin.name', 'label' => 'stefan.imageuploadextended::lang.permissions.all']
        ];
    }

    public function registerFormWidgets()
    {
        return [
            'Stefan\ImageUploadExtended\formwidgets\ImageUpload' => 'imageupload',
        ];
    }
}
