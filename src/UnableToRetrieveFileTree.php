<?php

declare(strict_types=1);

namespace RoyVoetman\FlysystemGitlab;

use League\Flysystem\FilesystemOperationFailed;
use RuntimeException;

/**
 * Class UnableToRetrieveFileTree
 *
 * @package RoyVoetman\FlysystemGitlab
 */
final class UnableToRetrieveFileTree extends RuntimeException implements FilesystemOperationFailed
{
    /**
     * @return string
     */
    public function operation(): string
    {
        return FilesystemOperationFailed::OPERATION_READ;
    }
}
