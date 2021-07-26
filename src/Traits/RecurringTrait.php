<?php

namespace Omnipay\FirstAtlanticCommerce\Traits;

trait RecurringTrait
{
    public function setExecutionDate($value)
    {
        return $this->setParameter('ExecutionDate', $value);
    }

    public function getExecutionDate()
    {
        return $this->getParameter('ExecutionDate');
    }

    public function setIsRecurring(bool $value = false)
    {
        return $this->setParameter('isRecurring', $value );
    }

    public function getIsRecurring()
    {
        return $this->getParameter('isRecurring');
    }

    public function setFrequency($value = 'M')
    {
        return $this->setParameter('Frequency', $value);
    }

    public function getFrequency()
    {
        return $this->getParameter('Frequency');
    }    
    
    public function setNumberOfRecurrences(int $value)
    {
        return $this->setParameter('NumberOfRecurrences', $value);
    }

    public function getNumberOfRecurrences()
    {
        return $this->getParameter('NumberOfRecurrences');
    }
}
