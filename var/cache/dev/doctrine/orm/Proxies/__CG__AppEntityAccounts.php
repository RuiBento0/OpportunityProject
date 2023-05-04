<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Accounts extends \App\Entity\Accounts implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Accounts' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Accounts' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Accounts' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Accounts' . "\0" . 'created_at', '' . "\0" . 'App\\Entity\\Accounts' . "\0" . 'updated_at', '' . "\0" . 'App\\Entity\\Accounts' . "\0" . 'id_user', '' . "\0" . 'App\\Entity\\Accounts' . "\0" . 'id_type', '' . "\0" . 'App\\Entity\\Accounts' . "\0" . 'created_by', '' . "\0" . 'App\\Entity\\Accounts' . "\0" . 'updated_by', '' . "\0" . 'App\\Entity\\Accounts' . "\0" . 'departments', '' . "\0" . 'App\\Entity\\Accounts' . "\0" . 'id_area'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Accounts' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Accounts' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Accounts' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Accounts' . "\0" . 'created_at', '' . "\0" . 'App\\Entity\\Accounts' . "\0" . 'updated_at', '' . "\0" . 'App\\Entity\\Accounts' . "\0" . 'id_user', '' . "\0" . 'App\\Entity\\Accounts' . "\0" . 'id_type', '' . "\0" . 'App\\Entity\\Accounts' . "\0" . 'created_by', '' . "\0" . 'App\\Entity\\Accounts' . "\0" . 'updated_by', '' . "\0" . 'App\\Entity\\Accounts' . "\0" . 'departments', '' . "\0" . 'App\\Entity\\Accounts' . "\0" . 'id_area'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Accounts $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(string $name): \App\Entity\Accounts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(string $description): \App\Entity\Accounts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTimeInterface $created_at): \App\Entity\Accounts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$created_at]);

        return parent::setCreatedAt($created_at);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTimeInterface $updated_at): \App\Entity\Accounts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updated_at]);

        return parent::setUpdatedAt($updated_at);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdUser(): ?\App\Entity\users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdUser', []);

        return parent::getIdUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdUser(?\App\Entity\users $id_user): \App\Entity\Accounts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdUser', [$id_user]);

        return parent::setIdUser($id_user);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdType(): ?\App\Entity\accountstype
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdType', []);

        return parent::getIdType();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdType(?\App\Entity\accountstype $id_type): \App\Entity\Accounts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdType', [$id_type]);

        return parent::setIdType($id_type);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedBy(): ?\App\Entity\users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedBy', []);

        return parent::getCreatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedBy(?\App\Entity\users $created_by): \App\Entity\Accounts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedBy', [$created_by]);

        return parent::setCreatedBy($created_by);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedBy(): ?\App\Entity\users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedBy', []);

        return parent::getUpdatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedBy(?\App\Entity\users $updated_by): \App\Entity\Accounts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedBy', [$updated_by]);

        return parent::setUpdatedBy($updated_by);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepartments(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepartments', []);

        return parent::getDepartments();
    }

    /**
     * {@inheritDoc}
     */
    public function addDepartment(\App\Entity\departments $department): \App\Entity\Accounts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDepartment', [$department]);

        return parent::addDepartment($department);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDepartment(\App\Entity\departments $department): \App\Entity\Accounts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDepartment', [$department]);

        return parent::removeDepartment($department);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdArea(): ?\App\Entity\area
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdArea', []);

        return parent::getIdArea();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdArea(?\App\Entity\area $id_area): \App\Entity\Accounts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdArea', [$id_area]);

        return parent::setIdArea($id_area);
    }

}