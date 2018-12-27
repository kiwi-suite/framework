<?php
namespace Ixocreate\Framework;
/** @var \Ixocreate\Translation\Config\Configurator $translator */

$translator->addExtractDirectory(getcwd() . '/templates');
$translator->setExtractTarget(getcwd() . '/resources/translation/extracted.json');
$translator->setDefaultCatalogue("web");
