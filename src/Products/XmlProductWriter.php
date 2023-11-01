<?php

declare(strict_types=1);

namespace App\Products;

use App\Products\ShopProductWriter;
use XMLWriter;

class XmlProductWriter extends ShopProductWriter
{

    public function write(): void
    {
        $writer = new XMLWriter();
        $writer->openMemory();
        $writer->startDocument('1.0', 'UTF-8');
        $writer->startElement('Goods');
        /**
         * @var ShopProduct $product
         */
        foreach ($this->products as $product) {
            $writer->startElement('Commodity');
            $writer->writeAttribute('Naming', $product->getTitle());
            $writer->startElement("Resume");
            $writer->text($product->getSummaryLine());
            $writer->endElement();
        }
    }
}