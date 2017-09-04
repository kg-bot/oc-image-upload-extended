<?php namespace Stefan\ImageUploadExtended;
use Event;
use Backend;
use System\Classes\PluginBase;
/**
 * ImageUploadExtended Plugin Information File
 */
class Plugin extends PluginBase
{
    public $require = ['Raviraj.Rjgallery'];
    public $elevated = true;
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Image Upload Extended',
            'description' => 'RJ Gallery extended with image tags',
            'author'      => 'Stefan Ninic',
            'icon'        => 'icon-leaf'
        ];
    }
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
    }
}