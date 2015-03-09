<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12.02.2015
 * Time: 22:00
 */

include_once "../NovaPoshta/autoload.php";

use NovaPoshta\ApiModels\ScanSheet;

class ScanSheet_example
{
    static public function save()
    {
        $scanSheets = array('70ec0f61-bf6b-11e4-a77a-005056887b8d', '70ec0f33-bf6b-11e4-a77a-005056887b8d');

        $scanSheet = new ScanSheet();
        $scanSheet->setDate('16.03.2015');

        $scanSheet->setDocumentRefs($scanSheets);

        // или

        $scanSheet->addDocumentRef('70ec0f2a-bf6b-11e4-a77a-005056887b8d');
        $scanSheet->addDocumentRef('70ec0f42-bf6b-11e4-a77a-005056887b8d');

        return $scanSheet->save();
    }

    static public function update()
    {
        $scanSheet = new ScanSheet();
        $scanSheet->setRef('1c65213d-c00b-11e4-ac12-005056801333');
        $scanSheet->setDate('16.03.2015');
        $scanSheet->addDocumentRef('70ec0dfd-bf6b-11e4-a77a-005056887b8d');
        $scanSheet->addDocumentRef('9d014a5e-bf43-11e4-a77a-005056887b8d');

        return $scanSheet->update();
    }

    static public function delete()
    {
        $scanSheet = new ScanSheet();
        $scanSheet->setRef('1c65213d-c00b-11e4-ac12-005056801333');

        return $scanSheet->delete();
    }

    static public function removeDocuments()
    {
        $arrayDocuments = array('70ec0f2a-bf6b-11e4-a77a-005056887b8d', '70ec0f33-bf6b-11e4-a77a-005056887b8d');

        $data = new \NovaPoshta\DataMethods\ScanSheet_removeDocuments();

        $data->setDocumentRefs($arrayDocuments);

        // или

        $data->addDocumentRef('70ec0f42-bf6b-11e4-a77a-005056887b8d');
        $data->addDocumentRef('70ec0f61-bf6b-11e4-a77a-005056887b8d');

        return ScanSheet::removeDocuments($data);
    }

    static public function getScanSheet()
    {
        $data = new \NovaPoshta\DataMethods\ScanSheet_getScanSheet();
        $data->setRef('9120e925-c00c-11e4-ac12-005056801333');

        return ScanSheet::getScanSheet($data);
    }

    static public function getScanSheetList()
    {
        return ScanSheet::getScanSheetList();
    }

    static public function printScanSheet()
    {
        $data = new \NovaPoshta\DataMethods\ScanSheet_printScanSheet();

        $data->addDocumentRef('39d5aadd-c5ed-11e4-ac12-005056801333');
        // или
        //        $data->setDocumentRefs(array('39d5aadd-c5ed-11e4-ac12-005056801333'));
        // или
        // $data->addNumber('105-0002898');

        $data->setType(ScanSheet::PRINT_TYPE_PDF);

        return ScanSheet::printScanSheet($data);
    }
}


$result = ScanSheet_example::printScanSheet();

var_dump($result);