<?php
class Konsole
{
    protected string $modell = "Xbox Series X";
    protected string $hersteller = "Microsoft";
    protected int $produktionsjahr = 2020;

    public function getModell(): string
    {
        return $this->modell;
    }

    public function setModell(string $modell): Konsole
    {
        $this->modell = $modell;

        return $this;
    }

    public function getHersteller(): string
    {
        return $this->hersteller;
    }

    public function setHersteller(string $hersteller): Konsole
    {
        $this->hersteller = $hersteller;

        return $this;
    }

    public function getProduktionsjahr(): int
    {
        return $this->produktionsjahr;
    }

    public function setProduktionsjahr(int $produktionsjahr): Konsole
    {
        $this->produktionsjahr = $produktionsjahr;

        return $this;
    }
}
