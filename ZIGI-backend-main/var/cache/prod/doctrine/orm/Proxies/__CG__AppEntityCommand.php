<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Command extends \App\Entity\Command implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as private;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    public function __load(): void
    {
        $this->initializeLazyObject();
    }
    

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'amount' => [parent::class, 'amount', null],
        "\0".parent::class."\0".'currency' => [parent::class, 'currency', null],
        "\0".parent::class."\0".'dateCommand' => [parent::class, 'dateCommand', null],
        "\0".parent::class."\0".'detailsCommands' => [parent::class, 'detailsCommands', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'idUser' => [parent::class, 'idUser', null],
        "\0".parent::class."\0".'statut_com' => [parent::class, 'statut_com', null],
        'amount' => [parent::class, 'amount', null],
        'currency' => [parent::class, 'currency', null],
        'dateCommand' => [parent::class, 'dateCommand', null],
        'detailsCommands' => [parent::class, 'detailsCommands', null],
        'id' => [parent::class, 'id', null],
        'idUser' => [parent::class, 'idUser', null],
        'statut_com' => [parent::class, 'statut_com', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
