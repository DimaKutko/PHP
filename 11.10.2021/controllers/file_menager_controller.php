<?php

class FileMenagerController
{
    public function index()
    {
        $dir    = __DIR__ .  '/../storage';
        $images = array_diff(scandir($dir), array('..', '.'));

        return renderView('file_menager', [
            'images' => $images,
        ]);
    }

    public function upload()
    {
        printArray($_FILES['image']);

        $imageCount = count($_FILES['image']);

        for ($i = 0; $i < $imageCount; $i++) {
            if (!empty($_FILES['image'])) {
                $uploaddir = __DIR__ . '/../storage/';
                $fileName = time() . basename($_FILES['image']['name'][$i]);
                $filePath = $uploaddir . $fileName;
                move_uploaded_file($_FILES['image']['tmp_name'][$i], $filePath);
            }
        }

        redirect('/file_menager');
    }

    public function delete()
    {
        $image = $_POST['image'];

        unlink(__DIR__ . '/../' . getImagePath($image));
        redirect('/file_menager');
    }

    public function rename()
    {
        $oldName = $_POST['oldName'];
        $newName = $_POST['newName'];

        $type = explode('.', $oldName)[1];
        $newName = explode('.', $newName)[0] . '.' . $type;

        $uploaddir = __DIR__ . '/../storage/';

        $dir    = __DIR__ .  '/../storage';
        $images = array_diff(scandir($dir), array('..', '.'));

        if (in_array($newName, $images)) {
            $newName = time() . $newName;
        }

        $newFilePath = $uploaddir . $newName;
        $oldFilePath = $uploaddir . $oldName;

        rename($oldFilePath, $newFilePath);

        redirect('/file_menager');
    }
}
