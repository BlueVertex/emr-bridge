<?php

namespace BlueVertex\EMRBridge\Contracts;

/**
 * Get a patient record by ID
 *
 * @param string $id
 * @return object Patient Record
 */

interface EMRAPI
{
    public function getPatient($id);
}
