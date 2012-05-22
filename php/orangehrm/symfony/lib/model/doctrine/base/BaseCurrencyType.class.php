<?php

/**
 * BaseCurrencyType
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $code
 * @property string $currency_id
 * @property string $currency_name
 * @property Doctrine_Collection $PayGradeCurrency
 * @property Doctrine_Collection $EmpBasicsalary
 * 
 * @method integer             getCode()             Returns the current record's "code" value
 * @method string              getCurrencyId()       Returns the current record's "currency_id" value
 * @method string              getCurrencyName()     Returns the current record's "currency_name" value
 * @method Doctrine_Collection getPayGradeCurrency() Returns the current record's "PayGradeCurrency" collection
 * @method Doctrine_Collection getEmpBasicsalary()   Returns the current record's "EmpBasicsalary" collection
 * @method CurrencyType        setCode()             Sets the current record's "code" value
 * @method CurrencyType        setCurrencyId()       Sets the current record's "currency_id" value
 * @method CurrencyType        setCurrencyName()     Sets the current record's "currency_name" value
 * @method CurrencyType        setPayGradeCurrency() Sets the current record's "PayGradeCurrency" collection
 * @method CurrencyType        setEmpBasicsalary()   Sets the current record's "EmpBasicsalary" collection
 * 
 * @package    orangehrm
 * @subpackage model\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCurrencyType extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('hs_hr_currency_type');
        $this->hasColumn('code', 'integer', 4, array(
             'type' => 'integer',
             'default' => '0',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('currency_id', 'string', 3, array(
             'type' => 'string',
             'fixed' => 1,
             'primary' => true,
             'length' => 3,
             ));
        $this->hasColumn('currency_name', 'string', 70, array(
             'type' => 'string',
             'default' => '',
             'notnull' => true,
             'length' => 70,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('PayGradeCurrency', array(
             'local' => 'currency_id',
             'foreign' => 'currency_id'));

        $this->hasMany('EmpBasicsalary', array(
             'local' => 'currency_id',
             'foreign' => 'currency_id'));
    }
}