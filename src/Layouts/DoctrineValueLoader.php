<?php

namespace App\Layouts;

use App\Repository\ScreencastRepository;
use Netgen\Layouts\Item\ValueLoaderInterface;

class DoctrineValueLoader implements ValueLoaderInterface
{
    public function __construct(
        private ScreencastRepository $screencastRepository
    )
    {
    }

    public function load($id): ?object
    {
        return $this->screencastRepository->find($id);
    }

    public function loadByRemoteId($remoteId): ?object
    {
        return $this->load($remoteId);
    }
}
