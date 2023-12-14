<?php
class Adresse
{
    ///
    /// Attribute
    ///
    protected string $strasse = "N/A";
    protected string $hausnummer = "N/A";
    protected string $plz = "N/A";
    protected string $ort = "N/A";

    ///
    /// getter setter
    ///
    public function getStrasse(): string
    {
        return $this->strasse;
    }

    public function setStrasse(string $strasse): Adresse
    {
        $this->strasse = $strasse;

        return $this;
    }

    public function getHausnummer(): string
    {
        return $this->hausnummer;
    }

    public function setHausnummer(string $hausnummer): Adresse
    {
        $this->hausnummer = $hausnummer;

        return $this;
    }

    public function getPlz(): string
    {
        return $this->plz;
    }

    public function setPlz(string $plz): Adresse
    {
        $this->plz = $plz;

        return $this;
    }

    public function getOrt(): string
    {
        return $this->ort;
    }

    public function setOrt(string $ort): Adresse
    {
        $this->ort = $ort;

        return $this;
    }
}
