<?php

declare(strict_types=1);

if (! defined('WHMCS')) {
    exit('Direct access is not permitted.');
}

require_once __DIR__.'/bootstrap.php';

use YourReselling\Whmcs\SslCertificate\Integration\WhmcsModule;

/** SSL-Zertifikat: MetaData. */
function yourresellingsslcertificate_MetaData(): array
{
    return ['DisplayName' => 'Your-Reselling · SSL-Zertifikat', 'APIVersion' => '1.1', 'RequiresServer' => true];
}

/** SSL-Zertifikat: ConfigOptions. */
function yourresellingsslcertificate_ConfigOptions(): array
{
    return WhmcsModule::configOptions('ssl_certificate');
}

/** SSL-Zertifikat: CreateAccount. */
function yourresellingsslcertificate_CreateAccount(array $params): string
{
    return WhmcsModule::run('ssl_certificate', 'create', $params);
}

/** SSL-Zertifikat: TestConnection. */
function yourresellingsslcertificate_TestConnection(array $params): array
{
    return WhmcsModule::testConnection($params);
}

/** SSL-Zertifikat: ClientArea. */
function yourresellingsslcertificate_ClientArea(array $params): array
{
    return WhmcsModule::clientArea('ssl_certificate', $params);
}

/** SSL-Zertifikat: AdminCustomButtonArray. */
function yourresellingsslcertificate_AdminCustomButtonArray(): array
{
    return WhmcsModule::adminButtons('ssl_certificate');
}

/** SSL-Zertifikat: RefreshStatus. */
function yourresellingsslcertificate_RefreshStatus(array $params): string
{
    return WhmcsModule::run('ssl_certificate', 'refresh', $params);
}

/** SSL-Zertifikat: TerminateAccount. */
function yourresellingsslcertificate_TerminateAccount(array $params): string
{
    return WhmcsModule::run('ssl_certificate', 'termination', $params);
}
