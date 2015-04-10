<?php

namespace NovaPoshta\MethodParameters;

/**
 * Параметры метода removeDocuments модели ScanSheet
 *
 * Class ScanSheet_removeDocuments
 * @package NovaPoshta\DataMethods
 * @property string DocumentRefs
 */
class ScanSheet_removeDocuments extends MethodParameters
{
    /**
     * Устанавливает рефы реестров
     *
     * @param array $documentRefs
     * @return $this
     */
    public function setDocumentRefs(array $documentRefs)
    {
        $this->DocumentRefs = $documentRefs;
        return $this;
    }

    /**
     * Получить рефы реестров
     *
     * @return string
     */
    public function getDocumentRefs()
    {
        return $this->DocumentRefs;
    }

    /**
     * Добавить реф реестра
     *
     * @param $value
     * @return $this
     */
    public function addDocumentRef($value)
    {
        if (!$this->DocumentRefs) {
            $this->DocumentRefs = array();
        }
        $this->DocumentRefs[] = $value;
        return $this;
    }

    /**
     * Очистить рефы реестров
     *
     * @return $this
     */
    public function clearDocumentRefs()
    {
        $this->DocumentRefs = array();
        return $this;
    }
}