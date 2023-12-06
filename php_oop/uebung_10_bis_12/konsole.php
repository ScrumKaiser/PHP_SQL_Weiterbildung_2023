<?php
class Konsole
{
    // Modell
    protected $modell = "Xbox Series X";

    public function getModell()
    {
        return $this->modell;
    }

    public function setModell($modell)
    {
        $this->modell = $modell;
    }

    // Hersteller
    protected $hersteller = "Microsoft";

    public function getHersteller()
    {
        return $this->hersteller;
    }

    public function setHersteller($hersteller)
    {
        $this->hersteller = $hersteller;
    }

    // Produktionsjahr
    protected $produktionsjahr = 2020;

    public function getProduktionsjahr()
    {
        return $this->produktionsjahr;
    }

    public function setProduktionsjahr($produktionsjahr)
    {
        $this->produktionsjahr = $produktionsjahr;
    }
}
