<?php
declare(strict_types=1);

namespace Ixocreate\Framework\Package;

use Ixocreate\Application\Console\BootstrapGenerateCommand;
use Ixocreate\Application\Console\BootstrapListCommand;
use Ixocreate\Application\Console\ConfigGenerateCommand;
use Ixocreate\Application\Console\ConfigListCommand;
use Ixocreate\Application\Console\PublishCommand;
use Ixocreate\Application\Console\PublishListCommand;
use Ixocreate\Application\Console\ConsoleConfigurator;
use Ixocreate\Framework\Package\Console\ApplicationPrepareConsole;
use Ixocreate\Framework\Package\Console\DatabasePrepareConsole;
use Ixocreate\Framework\Package\Console\Factory\ServiceManagerPrepareConsoleFactory;
use Ixocreate\Framework\Package\Console\ServiceManagerPrepareConsole;
use Ixocreate\Framework\Package\Console\SetupConsole;

/** @var ConsoleConfigurator $console */

$console->addCommand(BootstrapListCommand::class);
$console->addCommand(BootstrapGenerateCommand::class);
$console->addCommand(PublishCommand::class);
$console->addCommand(PublishListCommand::class);
$console->addCommand(ConfigListCommand::class);
$console->addCommand(ConfigGenerateCommand::class);
$console->addCommand(SetupConsole::class);
$console->addCommand(ApplicationPrepareConsole::class);
$console->addCommand(DatabasePrepareConsole::class);
$console->addCommand(ServiceManagerPrepareConsole::class, ServiceManagerPrepareConsoleFactory::class);

$console->addDirectory(getcwd() . '/src/App/Console', true);
$console->addDirectory(getcwd() . '/src/Admin/Console', true);
