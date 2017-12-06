<?php
/**
 * Created by PhpStorm.
 * User: Alpha
 * Date: 06/12/2017
 * Time: 15:31
 */

namespace Ecrire;


class Bic extends Phrase
{
    protected $color;

    public function __construct($color)
    {
        $this->color = $color;

    }

    public function ecrire(string $content): Phrase
    {
        $phrase = new Phrase();
        $phrase->setContent($content);
        $phrase->setColor($this->color);
        return $phrase;
    }

    public function en(string $string): self
    {
        $this->color = $string;
        return $this;
    }

    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

}