<?php

class ModalController
{
    static private $title;
    static private $message;
    static private $btn;

    public function index($data = [])
    {
        $title = $data['title'] ?? null;
        $message = $data['message'] ?? null;
        $btn = $data['btn'] ?? null;

        if ($title == self::$title && $message == self::$message  && $btn == self::$btn) {
            header('/');
        } else {
            self::$title = $title;
            self::$message = $message;
            self::$btn = $btn;

            $modal = (new ModalBuilder())
                ->setTitle(self::$title)
                ->setMessage(self::$message)
                ->setButton(self::$btn)
                ->render();
        }
    }
}
