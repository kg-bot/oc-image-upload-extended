<?php namespace Stefan\ImageUploadExtended;

<<<<<<< HEAD
use Event;
=======
>>>>>>> 651edf6c355b93a2b550b00626e495a2383737de
use Backend;
use System\Classes\PluginBase;

/**
 * ImageUploadExtended Plugin Information File
 */
class Plugin extends PluginBase
{

<<<<<<< HEAD
    public $require = ['Raviraj.Rjgallery'];

    public $elevated = true;
=======
    public $require = ['Raviraj.RJGallery'];
>>>>>>> 651edf6c355b93a2b550b00626e495a2383737de
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
<<<<<<< HEAD
            'name'        => 'Image Upload Extended',
            'description' => 'RJ Gallery extended with image tags',
=======
            'name'        => 'stefan.imageuploadextended::lang.plugin.name',
            'description' => 'stefan.imageuploadextended::lang.plugin.description',
>>>>>>> 651edf6c355b93a2b550b00626e495a2383737de
            'author'      => 'Stefan Ninic',
            'icon'        => 'icon-leaf'
        ];
    }

<<<<<<< HEAD
    public function registerFormWidgets()
    {
        return [
            'Stefan\ImageUploadExtended\formwidgets\ImageUpload' => 'imageupload',
        ];
    }

    public function registerComponents()
    {
        return [
            'Stefan\ImageUploadextended\Components\Gallery' => 'extendedGalleryId',
        ];
    }

    /**
     * Method used to remove default RJ Gallery field and insert our custom with image tags
     *
     * @method boot
     *
     * @return void
     */
    public function boot()
    {
        /*
        \Raviraj\Rjgallery\Controllers\Galleries::extendFormFields(function($form, $model, $context) {

            if(!$form->isNested) {

                $form->removeField('images');

                $form->addFields([
                    'gallery_images' => [
                        'label' => 'Gallery Images',
                        'type' => 'repeater',
                        'form' => [
                            'fields' => [
                                'title' => [
                                    'label' => 'Photo Title',
                                    'type' => 'text',
                                ],

                                'tags' => [
                                    'label' => 'Photo Tags',
                                    'type' => 'text',
                                ],

                                'src' => [
                                    'label' => 'Photo',
                                    'type' => 'mediafinder',
                                    'mode' => 'image',
                                    'imageWidth' => '50px',
                                    'imageHeight' => '50px',
                                ]
                            ]
                        ]
                    ]
                ]);
            }
        });*/
=======
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
>>>>>>> 651edf6c355b93a2b550b00626e495a2383737de
    }
}
