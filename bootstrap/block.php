<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOLIT GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Framework;

use Ixocreate\Cms\Block\BlockConfigurator;

/** @var BlockConfigurator $block */
$block->addDirectory(\getcwd() . '/src/App/Block', true);
