<?php

declare(strict_types=1);

namespace Ghostwriter\Syntax;

use Ghostwriter\Container\Container;
use Ghostwriter\Container\Contract\ContainerInterface;
use Ghostwriter\EventDispatcher\Contract\ListenerProviderInterface;
use Ghostwriter\EventDispatcher\Dispatcher;
use Ghostwriter\EventDispatcher\ListenerProvider;
use Ghostwriter\Syntax\Event\ConsoleEvent;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\SingleCommandApplication;
use Symfony\Component\Finder\Finder;
use function dirname;
use function sprintf;

/** @var ?string $_composer_autoload_path */
(static function (string $composerAutoloadPath): void {
    /** @psalm-suppress UnresolvableInclude */
    require $composerAutoloadPath ?: fwrite(
        STDERR,
        sprintf('[ERROR]Cannot locate "%s"\n please run "composer install"\n', $composerAutoloadPath)
    ) && exit(1);

    /**
     * #BlackLivesMatter!
     */
    $container = Container::getInstance();

    $container->alias(ListenerProviderInterface::class, ListenerProvider::class);

    $container->extend(
        ListenerProviderInterface::class,
        static function (
            ContainerInterface $container,
            ListenerProviderInterface $listenerProvider
        ): ListenerProviderInterface {
            $finder = $container->build(Finder::class)
                ->files()
                ->in(dirname(__DIR__) . '/src/Listener/')
                ->name('*Listener.php')
                ->notName('Abstract*.php')
                ->sortByName();

            foreach ($finder->getIterator() as $splFileInfo) {
                $listenerProvider->bindListener(
                    sprintf('%s\Event\%s', __NAMESPACE__, $splFileInfo->getBasename('Listener.php')),
                    sprintf('%s\Listener\%s', __NAMESPACE__, $splFileInfo->getBasename('.php'))
                );
            }

            return $listenerProvider;
        }
    );

    $container->build(SingleCommandApplication::class)
        ->setName('Syntax - Lexical Analysis library for PHP. #BlackLivesMatter✊🏾')
        ->setVersion('1.0.0')
        ->setDescription('Parse a PHP file and render the abstract syntax tree (AST).')
        ->addArgument('file', InputArgument::REQUIRED, 'The file to parse.')
        ->addOption(
            'save',
            's',
            InputOption::VALUE_NONE,
            'Save the abstract syntax tree (AST) as JSON (file.php => file.tree.json).'
        )
        ->setCode(
            static fn (
                InputInterface $input,
                OutputInterface $output
            ): int => $container->get(Dispatcher::class)
                ->dispatch(new ConsoleEvent($input, $output))
                ->isPropagationStopped() ?
                Command::FAILURE :
                Command::SUCCESS
        )
        ->run();
})($_composer_autoload_path ?? dirname(__DIR__) . '/vendor/autoload.php');
