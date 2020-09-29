<?php

namespace ERROR;

class Error
{
    private $cdError = [];
    private $dsError = [];

    public function insertError($CDError, $DSError)
    {
        $this->cdError += $CDError;
        $this->dsError += $DSError;
    }

    public function searchError($cdError)
    {
        foreach ($this->cdError as $CDError) {
            if ($cdError == $CDError) {
                return $this->dsError;
            }
        }

        return false;
    }
}
