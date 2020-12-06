<?php
namespace Dcat\Admin\Form\Concerns;

trait HasScripts
{
    protected $savedScript;
    protected $errorScript;

    public function setSavedScript ($script) {
        $this->savedScript = $script;
    }

    public function savedScript () {
        return $this->savedScript;
    }

    public function setErrorScript ($script) {
        $this->errorScript = $script;
    }

    public function errorScript () {
        return $this->errorScript;
    }
}
