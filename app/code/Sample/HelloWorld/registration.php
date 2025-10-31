<?php
/**
 * Sample HelloWorld Module Registration
 */
use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Sample_HelloWorld',
    __DIR__
);
