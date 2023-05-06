<?php

use Symfony\Component\HttpFoundation\Session\Storage\Handler\PdoSessionHandler;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\PhpExecutableFinder;
use Symfony\Component\HttpFoundation\Session\Session;

function createSession(): void
{
    echo 'Create session';

    $databaseUrl       = $_ENV['DATABASE_URL'] ?? '';
    $dsn               = "mysql:$databaseUrl";
    $pdoSessionHandler = new PdoSessionHandler($dsn, ['db_table' => 'sessions']);
    $sessionStorage    = new NativeSessionStorage([], $pdoSessionHandler);

    $session = new Session($sessionStorage);
    $session->start();

    // any profile_id can be provided
    // correct admin profile_id will be set later on 5.5 side
    $session->set('profile_id', 1);
    $session->set('isAdmin', true);

    $session->save();

    $host = isHttps()
        ? $_ENV['XCART_HOST_DETAILS_HTTPS_HOST']
        : $_ENV['XCART_HOST_DETAILS_HTTP_HOST'];

    $webdir = $_ENV['XCART_HOST_DETAILS_WEB_DIR'] ?: '/';

    setcookie(
        'xid',
        $session->getId(),
        [
            'httponly' => true,
            'secure'   => isHttps(),
            'samesite' => 'Lax',
            'domain'   => $host,
            'path'     => $webdir,
        ]
    );

    echo('<br>' . 'OK' . '<br>');
    echo('<br>' . '-----------------------------------------------------------------------------------------------');
}

function clearServiceToolCache(): void
{
    echo '<br>' . '<br>' . 'Clear service-tool cache';

    $phpBinaryPath = (new PhpExecutableFinder())->find() ?: 'php';

    $process = new Process([$phpBinaryPath, './bin/console', 'cache:clear']);
    $process->setWorkingDirectory(getcwd() . "/../service-tool");

    try {
        $process->run();

        if ($process->isSuccessful()) {
            echo nl2br($process->getOutput());

            echo('<br>' . '-----------------------------------------------------------------------------------------------');
        } else {
            throw new ProcessFailedException($process);
        }
    } catch (\Exception $e) {
        throw new ProcessFailedException($process);
    }
}

function createServiceToolTables(): void
{
    echo '<br>' . '<br>' . 'Create tables for service tool entities';

    $phpBinaryPath = (new PhpExecutableFinder())->find() ?: 'php';

    $process = new Process([$phpBinaryPath, './bin/console', 'doctrine:schema:create']);
    $process->setWorkingDirectory(getcwd() . "/../service-tool");

    try {
        $process->run();

        if ($process->isSuccessful()) {
            echo nl2br($process->getOutput());

            echo('<br>' . '-----------------------------------------------------------------------------------------------');
        } else {
            throw new ProcessFailedException($process);
        }
    } catch (\Exception $e) {
        throw new ProcessFailedException($process);
    }
}

function isHttps(): bool
{
    return (
        (
            isset($_SERVER['HTTPS'])
            && (
                strtolower($_SERVER['HTTPS']) === 'on'
                || $_SERVER['HTTPS'] == '1'
            )
        ) || (
            isset($_SERVER['SERVER_PORT'])
            && $_SERVER['SERVER_PORT'] == '443'
        ) || (
            isset($_SERVER['HTTP_X_FORWARDED_PROTO'])
            && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https'
        )
    );
}

