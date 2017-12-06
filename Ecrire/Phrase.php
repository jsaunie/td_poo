<?php
/**
 * Created by PhpStorm.
 * User: Alpha
 * Date: 06/12/2017
 * Time: 16:49
 */

namespace Ecrire;


class Phrase
{

    private $content;
    private $color;

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;
        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function sur(Cahier $cahier): self
    {
        $cahier->setContent($this);
        return $this;
    }

}