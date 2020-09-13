<?php


namespace Todo\Pdf;


interface IPdfBuilderFactory
{
    public function create(): PdfBuilder;
}
