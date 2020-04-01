<?php

namespace EloquentJs;

class EloquentJs
{
    public function __construct()
    {
        //
    }

    public function toArray()
    {
        return $this->model->toEloquentJs();
    }
}
