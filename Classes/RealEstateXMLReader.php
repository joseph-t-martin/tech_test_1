<?php

namespace Classes;

class RealEstateXMLReader
{
    public function read()
    {
        $xml_string = file_get_contents(__DIR__. '/../XML/sample-reaxml.xml');
        $xml = simplexml_load_string($xml_string, "SimpleXMLElement", LIBXML_NOCDATA);
        $json = json_encode($xml);
        $result =  json_decode($json,true);

        $arr = [];
        foreach ($result as $key => $property_type) {
            if (isset($property_type['uniqueID'])) {
                $arr[$property_type['uniqueID']] = $key;
            }
            else {
                foreach ($property_type as $value) {
                    if (isset($value['uniqueID'])) {
                        $arr[$value['uniqueID']] = $key;
                    }
                }
            }

        }
        return $arr;
    }
}
