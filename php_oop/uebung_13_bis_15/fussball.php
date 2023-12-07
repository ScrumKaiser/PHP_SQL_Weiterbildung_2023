<?php
class Fussball
{
    protected string $farbe = "weiß";
    protected int $durchmesser = 22;

    public function getFarbe(): string
    {
        return $this->farbe;
    }

    public function setFarbe(string $farbe): Fussball
    {
        $this->farbe = $farbe;

        return $this;
    }

    public function getDurchmesser(): int
    {
        return $this->durchmesser;
    }

    public function setDurchmesser(int $durchmesser): Fussball
    {
        $this->durchmesser = $durchmesser;

        return $this;
    }

    public function beschreibeFussball(): string
    {
        $beschreibung = "Dieser Fussball ist {$this->getFarbe()} und hat einen Durchmesser von {$this->getDurchmesser()} cm.";

        return $beschreibung;
    }
}
