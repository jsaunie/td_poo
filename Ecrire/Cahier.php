<?php

namespace Ecrire;

use Exception;

class Cahier
{

    private const FORMAT_ALLOWED = ["A3", "A4"];
    private $format;
    private $content;

    public function setFormat(string $format): self
    {
        try {
            $format = strtoupper($format);
            if (in_array($format, self::FORMAT_ALLOWED)) {
                $this->format = ucfirst($format);
                return $this;
            } else {
                throw new Exception('Vous n\'avez pas rentrer le bon format de cahier');
            }
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    public function setContent(Phrase $bic)
    {
        $this->content = 'A la page ton texte ' . $bic->getContent() . ' est écris en ' . $bic->getColor() . ' sur un cahier ' . $this->format;
    }

    public function getContent(){
        return $this->content;
    }

    public function lire(): void
    {
        echo $this->getContent();
    }
}