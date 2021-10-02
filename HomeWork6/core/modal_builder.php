<?php

interface ModalBuilderInterface
{
    public function setTitle($title);
    public function setMessage($message);
    public function setButton($btn);
    public function render();
}

class ModalBuilder implements ModalBuilderInterface
{
    private $title;
    private $message;
    private $btn;

    public function __construct()
    {
        $this->title = '123';
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    public function setButton($btn)
    {
        $this->btn = $btn;

        return $this;
    }

    public function render()
    {
        renderView(
            'modal',
            [
                'title' => $this->title ?? null,
                'message' => $this->message,
                'btn' =>  $this->btn,
            ]
        );

        return $this;
    }
}
