<?php
class Fussball
{
    ///
    /// Attribute
    ///
    protected string $farbe = "";
    protected int $durchmesser = 0;

    ///
    /// getter setter
    ///
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

    /**
     * Konstruktor
     */
    public function __construct(array $daten)
    {
        $this->setDaten($daten);
    }

    protected function setDaten(array $daten)
    {
        foreach ($daten as $key => $value) {
            $setter = "set" . ucfirst($key);
            
            if (method_exists($this, $setter))
                $this->$setter($value);
        }
    }

    /**
     * string Definition
     */
    public function __toString(): string
    {
        $beschreibung = "Dieser Fussball ist {$this->getFarbe()} und hat einen Durchmesser von {$this->getDurchmesser()} cm.";

        return $beschreibung;
    }
}
