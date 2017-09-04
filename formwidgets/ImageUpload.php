<?php namespace Stefan\ImageUploadExtended\FormWidgets;

use \Backend\FormWidgets\FileUpload;

/**
 * ImageUpload Form Widget
 */
class ImageUpload extends FileUpload
{
    /**
     * @inheritDoc
     */
    protected $defaultAlias = 'imageupload';


    /**
     *
     *   Methods used to extend default FileUpload form widget
     */

<<<<<<< HEAD
=======
    /**
     * @inheritDoc
     */
    public function render()
    {
        $this->prepareVars();
        return $this->makePartial('imageupload');
    }
>>>>>>> 651edf6c355b93a2b550b00626e495a2383737de


    /**
     * Commit the changes of the attachment configuration form.
     */
    public function onSaveAttachmentConfig()
    {
        try {
            $fileModel = $this->getRelationModel();
            if (($fileId = post('file_id')) && ($file = $fileModel::find($fileId))) {
                $file->title = post('title');
                $file->description = post('description');
                $file->tags = post('tags');
                $file->save();

                return ['displayName' => $file->title ?: $file->file_name];
            }

            throw new ApplicationException('Unable to find file, it may no longer exist');
        }
        catch (Exception $ex) {
            return json_encode(['error' => $ex->getMessage()]);
        }
    }
}
