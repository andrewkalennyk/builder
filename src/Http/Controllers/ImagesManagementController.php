<?php

namespace Admin\Builder\Http\Controllers;

use Illuminate\Routing\Controller;
use Admin\Builder\Http\Definitions\Resource;
use Admin\Builder\Http\Requests\UploadPictureRequest;

class ImagesManagementController extends Controller
{
    private Resource $definition;

    public function __construct()
    {
        $pathDefinition = request('path_model');

        $this->definition = new $pathDefinition();
    }

    public function upload(UploadPictureRequest $request)
    {
        return $this->getThisField()->upload($this->definition, $request->file('image'));
    }

    public function selectPhotos()
    {
        return $this->getThisField()->selectWithUploadedImages();
    }

    private function getThisField()
    {
        return $this->definition->getAllFields()[request('ident')];
    }
}

