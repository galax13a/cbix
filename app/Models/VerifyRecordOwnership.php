<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;

class VerifyRecordOwnership extends Model
{
    public function deleteByUser()
    {
        if ($this->userCanModify()) {
            $this->delete();
            return true;
        } else {
            return false;
        }
    }

    public function updateByUser(array $data)
    {
        if ($this->userCanModify()) {
            $this->update($data);
            return true;
        } else {
            return false;
        }
    }

    public function userCanModify()
    {
        // Si el usuario autenticado es el usuario root (id = 1)
        // le permite realizar cualquier operación sin restricciones
        if (Auth::user()->id === 1) {
            return true;
        }

        // Si el modelo tiene una columna 'user_id'
        if (Schema::hasColumn($this->getTable(), 'user_id')) {
            // Si el usuario autenticado es el dueño del registro
            if (Auth::user()->id === $this->user_id) {
                return true;
            }
        } else {
            // Si no tiene la columna 'user_id', cualquier usuario puede modificar el registro
            return true;
        }

        return false;
    }
}
