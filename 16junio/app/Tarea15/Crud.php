<?php

namespace App\Models\Tarea15;

interface Crud
{
    public function create();

    public function listar();

    public function update($dni);

    public function delete($dni);
}