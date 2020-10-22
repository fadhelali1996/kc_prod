<?php

namespace Proxies\__CG__\GincidentBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class incident extends \GincidentBundle\Entity\incident implements \Doctrine\ORM\Proxy\Proxy
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
  'createdby' => NULL,
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
  'createdby' => NULL,
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {
        unset($this->createdby);

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * 
     * @param string $name
     */
    public function __get($name)
    {
        if (\array_key_exists($name, self::$lazyPropertiesNames)) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', [$name]);
            return $this->$name;
        }

        trigger_error(sprintf('Undefined property: %s::$%s', __CLASS__, $name), E_USER_NOTICE);

    }

    /**
     * 
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        if (\array_key_exists($name, self::$lazyPropertiesNames)) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', [$name, $value]);

            $this->$name = $value;

            return;
        }

        $this->$name = $value;
    }

    /**
     * 
     * @param  string $name
     * @return boolean
     */
    public function __isset($name)
    {
        if (\array_key_exists($name, self::$lazyPropertiesNames)) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__isset', [$name]);

            return isset($this->$name);
        }

        return false;
    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'GincidentBundle\\Entity\\incident' . "\0" . 'id', 'tickets', '' . "\0" . 'GincidentBundle\\Entity\\incident' . "\0" . 'name', '' . "\0" . 'GincidentBundle\\Entity\\incident' . "\0" . 'nomfrs', 'frs', '' . "\0" . 'GincidentBundle\\Entity\\incident' . "\0" . 'description', 'createdby', '' . "\0" . 'GincidentBundle\\Entity\\incident' . "\0" . 'dateinc'];
        }

        return ['__isInitialized__', '' . "\0" . 'GincidentBundle\\Entity\\incident' . "\0" . 'id', 'tickets', '' . "\0" . 'GincidentBundle\\Entity\\incident' . "\0" . 'name', '' . "\0" . 'GincidentBundle\\Entity\\incident' . "\0" . 'nomfrs', 'frs', '' . "\0" . 'GincidentBundle\\Entity\\incident' . "\0" . 'description', '' . "\0" . 'GincidentBundle\\Entity\\incident' . "\0" . 'dateinc'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (incident $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

            unset($this->createdby);
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
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getNomfrs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomfrs', []);

        return parent::getNomfrs();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomfrs($nfrs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomfrs', [$nfrs]);

        return parent::setNomfrs($nfrs);
    }

    /**
     * {@inheritDoc}
     */
    public function getTickets()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTickets', []);

        return parent::getTickets();
    }

    /**
     * {@inheritDoc}
     */
    public function getdescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getdescription', []);

        return parent::getdescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setTickets($tickets)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTickets', [$tickets]);

        return parent::setTickets($tickets);
    }

    /**
     * {@inheritDoc}
     */
    public function setdescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setdescription', [$description]);

        return parent::setdescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getFrs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFrs', []);

        return parent::getFrs();
    }

    /**
     * {@inheritDoc}
     */
    public function setFrs($frs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFrs', [$frs]);

        return parent::setFrs($frs);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
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
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function getDateinc(): \DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateinc', []);

        return parent::getDateinc();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedby()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedby', []);

        return parent::getCreatedby();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedby($createdby)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedby', [$createdby]);

        return parent::setCreatedby($createdby);
    }

    /**
     * {@inheritDoc}
     */
    public function setDateinc(\DateTime $dateinc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateinc', [$dateinc]);

        return parent::setDateinc($dateinc);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function addTicket(\GincidentBundle\Entity\ticket $ticket)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTicket', [$ticket]);

        return parent::addTicket($ticket);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTicket(\GincidentBundle\Entity\ticket $ticket)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTicket', [$ticket]);

        return parent::removeTicket($ticket);
    }

}
