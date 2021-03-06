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

namespace APY\DataGridBundle\Grid\Action;

class MassAction implements MassActionInterface
{
    protected $title;
    protected $callback;
    protected $confirm;
    protected $parameters = array();

    /**
     * Default MassAction constructor
     *
     * @param string $title Title of the mass action
     * @param string $callback Callback of the mass action
     * @param boolean $confirm Show confirm message if true
     * @return \APY\DataGridBundle\Grid\Action\MassAction
     */
    public function __construct($title, $callback = null, $confirm = false, $parameters = array())
    {
        $this->title = $title;
        $this->callback = $callback;
        $this->confirm = $confirm;
        $this->confirmMessage = 'Do you want to '.strtolower($title).' the seleted rows?';
        $this->parameters = $parameters;
    }

    /**
     * Set action title
     *
     * @param $title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * get action title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set action callback
     *
     * @param  $callback
     *
     * @return self
     */
    public function setCallback($callback)
    {
        $this->callback = $callback;

        return $this;
    }

    /**
     * get action callback
     *
     * @return string
     */
    public function getCallback()
    {
        return $this->callback;
    }

    /**
     * Set action confirm
     *
     * @param  $confirm
     *
     * @return self
     */
    public function setConfirm($confirm)
    {
        $this->confirm = $confirm;

        return $this;
    }

    /**
     * Get action confirm
     *
     * @return boolean
     */
    public function getConfirm()
    {
        return $this->confirm;
    }

    /**
     * Set action confirmMessage
     *
     * @param string $confirmMessage
     *
     * @return self
     */
    public function setConfirmMessage($confirmMessage)
    {
        $this->confirmMessage = $confirmMessage;

        return $this;
    }

    /**
     * get action confirmMessage
     *
     * @return string
     */
    public function getConfirmMessage()
    {
        return $this->confirmMessage;
    }

    /**
     * Set action/controller parameters
     *
     * @param array $parameters
     */
    public function setParameters(array $parameters)
    {
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * Get action/controller parameters
     *
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }
}
