<?php

namespace Ferran\App\Controllers;

use Ferran\App\Models\ListModel;
use Ferran\App\Views\ListView;


class ListController
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->setModel(new ListModel());
        $this->setView(new ListView());
        // $this->model = new ListModel();
        // $this->view = new ListView();
    }

    /**
     * Set the value of model
     *
     * @return  self
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Set the value of view
     *
     * @return  self
     */
    public function setView($view)
    {
        $this->view = $view;

        return $this;
    }

    /**
     * Get the value of model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Get the value of view
     */
    public function getView()
    {
        return $this->view;
    }
}
