<?php

/*
 * This file is part of the DataGridBundle.
 *
 * (c) Abhoryo <abhoryo@free.fr>
 * (c) Stanislav Turza
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace APY\DataGridBundle\Grid\Column;

use APY\DataGridBundle\Grid\Filter;

class ArrayColumn extends Column
{
    protected $separator;

    public function __initialize(array $params)
    {
        parent::__initialize($params);

        $this->setSeparator($this->getParam('separator', "<br />"));
        $this->setOperators($this->getParam('operators', array(
            self::OPERATOR_LIKE,
            self::OPERATOR_NLIKE,
            self::OPERATOR_EQ,
            self::OPERATOR_NEQ,
            self::OPERATOR_ISNULL,
            self::OPERATOR_ISNOTNULL,
        )));
        $this->setDefaultOperator($this->getParam('defaultOperator', self::OPERATOR_LIKE));
    }

    public function getFilters($source)
    {
        $parentFilters = parent::getFilters($source);

        $filters = array();
        foreach($parentFilters as $filter) {
            $len = strlen($filter->getValue());
            $value = 's:'.$len.':"'.$filter->getValue().'";';

            switch ($filter->getOperator()) {
                case self::OPERATOR_EQ:
                case self::OPERATOR_NEQ:
                    $filters[] =  new Filter($filter->getOperator(), 'a:1:{'.$value.'}');
                    break;
                case self::OPERATOR_LIKE:
                case self::OPERATOR_NLIKE:
                    $filters[] =  new Filter($filter->getOperator(), $value);
                    break;
                case self::OPERATOR_ISNULL:
                    $filters[] =  new Filter(self::OPERATOR_ISNULL);
                    $filters[] =  new Filter(self::OPERATOR_EQ, 'a:0:{}');
                    $this->setDataJunction(self::DATA_DISJUNCTION);
                    break;
                case self::OPERATOR_ISNOTNULL:
                    $filters[] =  new Filter(self::OPERATOR_ISNOTNULL);
                    $filters[] =  new Filter(self::OPERATOR_NEQ, 'a:0:{}');
                    break;
                default:
                    $filters[] = $filter;
            }
        }

        return $filters;
    }

    public function renderCell($values, $row, $router)
    {
        if (is_callable($this->callback)) {
            return call_user_func($this->callback, $values, $row, $router);
        }

        $return = array();
        foreach ($values as $key => $value) {
            $return[$key] = (key_exists((string)$value, $this->values)) ? $value = $this->values[$value] : $value;
        }

        return $return;
    }

    public function setSeparator($separator)
    {
        $this->separator = $separator;

        return $this;
    }

    public function getSeparator()
    {
        return $this->separator;
    }

    public function getType()
    {
        return 'array';
    }
}
