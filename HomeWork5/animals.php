<?php interface AnimalInterface
{
    public function getVoice();
    public function getView();
    public function getArial();
}
class Cat implements AnimalInterface
{
    public function getVoice()
    {
        return 'Мяу';
    }
    public function getView()
    {
        return 'https://cdn.custom-cursor.com/packs/3475/meme-pop-cat-pack.png';
    }
    public function getArial()
    {
        return 'В постельке';
    }
}
class Dog implements AnimalInterface
{
    public function getVoice()
    {
        return 'Гав';
    }
    public function getView()
    {
        return 'https://ribalych.ru/wp-content/uploads/2019/12/korgi_000.jpg';
    }
    public function getArial()
    {
        return 'В будке';
    }
}
class Dolphin implements AnimalInterface
{
    public function getVoice()
    {
        return 'Говрю что-то умное';
    }
    public function getView()
    {
        return 'https://www.meme-arsenal.com/memes/279a8b06207d442cf069a48542e8a444.jpg';
    }
    public function getArial()
    {
        return 'В море';
    }
}
