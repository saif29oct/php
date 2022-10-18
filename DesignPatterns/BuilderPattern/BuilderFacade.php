<?php

namespace Saif\Php\DesignPatterns\BuilderPattern;

class BuilderFacade
{
    public static function khataBuilder(): ProductBuilderInterface{
        return new KhataBuilder();
    }
}