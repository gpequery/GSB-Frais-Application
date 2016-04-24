<?php

namespace Proxies\__CG__\GsbBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Fichefrais extends \GsbBundle\Entity\Fichefrais implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
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
            return array('__isInitialized__', '' . "\0" . 'GsbBundle\\Entity\\Fichefrais' . "\0" . 'idfiche', '' . "\0" . 'GsbBundle\\Entity\\Fichefrais' . "\0" . 'datecreation', '' . "\0" . 'GsbBundle\\Entity\\Fichefrais' . "\0" . 'nbjustificatifs', '' . "\0" . 'GsbBundle\\Entity\\Fichefrais' . "\0" . 'montantvalide', '' . "\0" . 'GsbBundle\\Entity\\Fichefrais' . "\0" . 'datemodif', '' . "\0" . 'GsbBundle\\Entity\\Fichefrais' . "\0" . 'idvisiteur', '' . "\0" . 'GsbBundle\\Entity\\Fichefrais' . "\0" . 'idetatfiche', '' . "\0" . 'GsbBundle\\Entity\\Fichefrais' . "\0" . 'idetatfraisforfait', '' . "\0" . 'GsbBundle\\Entity\\Fichefrais' . "\0" . 'idetatfraishorsclassification');
        }

        return array('__isInitialized__', '' . "\0" . 'GsbBundle\\Entity\\Fichefrais' . "\0" . 'idfiche', '' . "\0" . 'GsbBundle\\Entity\\Fichefrais' . "\0" . 'datecreation', '' . "\0" . 'GsbBundle\\Entity\\Fichefrais' . "\0" . 'nbjustificatifs', '' . "\0" . 'GsbBundle\\Entity\\Fichefrais' . "\0" . 'montantvalide', '' . "\0" . 'GsbBundle\\Entity\\Fichefrais' . "\0" . 'datemodif', '' . "\0" . 'GsbBundle\\Entity\\Fichefrais' . "\0" . 'idvisiteur', '' . "\0" . 'GsbBundle\\Entity\\Fichefrais' . "\0" . 'idetatfiche', '' . "\0" . 'GsbBundle\\Entity\\Fichefrais' . "\0" . 'idetatfraisforfait', '' . "\0" . 'GsbBundle\\Entity\\Fichefrais' . "\0" . 'idetatfraishorsclassification');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Fichefrais $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getIdfiche()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdfiche();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdfiche', array());

        return parent::getIdfiche();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatecreation($datecreation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatecreation', array($datecreation));

        return parent::setDatecreation($datecreation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatecreation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatecreation', array());

        return parent::getDatecreation();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbjustificatifs($nbjustificatifs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbjustificatifs', array($nbjustificatifs));

        return parent::setNbjustificatifs($nbjustificatifs);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbjustificatifs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbjustificatifs', array());

        return parent::getNbjustificatifs();
    }

    /**
     * {@inheritDoc}
     */
    public function setMontantvalide($montantvalide)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMontantvalide', array($montantvalide));

        return parent::setMontantvalide($montantvalide);
    }

    /**
     * {@inheritDoc}
     */
    public function getMontantvalide()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMontantvalide', array());

        return parent::getMontantvalide();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatemodif($datemodif)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatemodif', array($datemodif));

        return parent::setDatemodif($datemodif);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatemodif()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatemodif', array());

        return parent::getDatemodif();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdvisiteur(\GsbBundle\Entity\Visiteur $idvisiteur = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdvisiteur', array($idvisiteur));

        return parent::setIdvisiteur($idvisiteur);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdvisiteur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdvisiteur', array());

        return parent::getIdvisiteur();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdetatfiche(\GsbBundle\Entity\Etat $idetatfiche = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdetatfiche', array($idetatfiche));

        return parent::setIdetatfiche($idetatfiche);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdetatfiche()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdetatfiche', array());

        return parent::getIdetatfiche();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdetatfraisforfait(\GsbBundle\Entity\Etat $idetatfraisforfait = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdetatfraisforfait', array($idetatfraisforfait));

        return parent::setIdetatfraisforfait($idetatfraisforfait);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdetatfraisforfait()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdetatfraisforfait', array());

        return parent::getIdetatfraisforfait();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdetatfraishorsclassification(\GsbBundle\Entity\Etat $idetatfraishorsclassification = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdetatfraishorsclassification', array($idetatfraishorsclassification));

        return parent::setIdetatfraishorsclassification($idetatfraishorsclassification);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdetatfraishorsclassification()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdetatfraishorsclassification', array());

        return parent::getIdetatfraishorsclassification();
    }

}
