<?php

declare(strict_types=1);

namespace App\ChapterFour;

class XMLHandler
{
    protected \SimpleXMLElement $xml;
    protected \SimpleXMLElement $lastMatch;

    public function __construct(protected string $file)
    {
        $this->xml = simplexml_load_file($this->file);
    }

    public function write(): void
    {
        file_put_contents($this->file, $this->xml->asXML());
    }

    public function get(string $str): ?string
    {
        $matches = $this->xml->xpath(" /conf/item [@name=\"$str\"]");

        if (count($matches)) {
            $this->lastMatch = $matches[0];
            return (string)$matches[0];
        }

        return null;
    }

    public function set(string $key, string $value): void
    {
        if (false === is_null($this->get($key))) {
            $this->lastMatch[0] = $value;
            return;
        }

        $conf = $this->xml->conf;
        $this->xml->addChild('item', $value)
                  ->addAttribute('name', $key);
    }
}