<?php

namespace AwStudio\EloquentJs;

class EloquentJs
{
    public function toArray()
    {
        return $this->model->toEloquentJs();
    }
}
