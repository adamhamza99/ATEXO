<?php

namespace ContainerIxi9xEs;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3246d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera3494 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties155ea = [
        
    ];

    public function getConnection()
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'getConnection', array(), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'getMetadataFactory', array(), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'getExpressionBuilder', array(), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'beginTransaction', array(), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'getCache', array(), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->getCache();
    }

    public function transactional($func)
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'transactional', array('func' => $func), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'wrapInTransaction', array('func' => $func), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'commit', array(), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->commit();
    }

    public function rollback()
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'rollback', array(), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'getClassMetadata', array('className' => $className), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'createQuery', array('dql' => $dql), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'createNamedQuery', array('name' => $name), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'createQueryBuilder', array(), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'flush', array('entity' => $entity), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'clear', array('entityName' => $entityName), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->clear($entityName);
    }

    public function close()
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'close', array(), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->close();
    }

    public function persist($entity)
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'persist', array('entity' => $entity), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'remove', array('entity' => $entity), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'refresh', array('entity' => $entity), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'detach', array('entity' => $entity), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'merge', array('entity' => $entity), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'getRepository', array('entityName' => $entityName), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'contains', array('entity' => $entity), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'getEventManager', array(), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'getConfiguration', array(), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'isOpen', array(), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'getUnitOfWork', array(), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'getProxyFactory', array(), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'initializeObject', array('obj' => $obj), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'getFilters', array(), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'isFiltersStateClean', array(), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'hasFilters', array(), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return $this->valueHolder3246d->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializera3494 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3246d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3246d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3246d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, '__get', ['name' => $name], $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        if (isset(self::$publicProperties155ea[$name])) {
            return $this->valueHolder3246d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3246d;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3246d;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3246d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3246d;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, '__isset', array('name' => $name), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3246d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3246d;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, '__unset', array('name' => $name), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3246d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3246d;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, '__clone', array(), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        $this->valueHolder3246d = clone $this->valueHolder3246d;
    }

    public function __sleep()
    {
        $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, '__sleep', array(), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;

        return array('valueHolder3246d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera3494 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera3494;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera3494 && ($this->initializera3494->__invoke($valueHolder3246d, $this, 'initializeProxy', array(), $this->initializera3494) || 1) && $this->valueHolder3246d = $valueHolder3246d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3246d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3246d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
