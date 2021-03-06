<?php
/**
 * This file is part of the SevenShores/NetSuite library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/ryanwinchester/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 *
 * generated:  2016-03-04 07:23:27 PM UTC
 */

namespace NetSuite\Classes;

class TimeBillSearchRowBasic extends SearchRowBasic {
    public $break;
    public $class;
    public $customer;
    public $date;
    public $dateCreated;
    public $department;
    public $durationDecimal;
    public $employee;
    public $endTime;
    public $externalId;
    public $hours;
    public $internalId;
    public $isBillable;
    public $isExempt;
    public $isProductive;
    public $isUtilized;
    public $item;
    public $lastModified;
    public $location;
    public $memo;
    public $paidExternally;
    public $payItem;
    public $payrollDate;
    public $rate;
    public $startTime;
    public $status;
    public $subsidiary;
    public $supervisorApproval;
    public $temporaryLocalJurisdiction;
    public $temporaryStateJurisdiction;
    public $type;
    public $customFieldList;
    static $paramtypesmap = array(
        "break" => "SearchColumnStringField[]",
        "class" => "SearchColumnSelectField[]",
        "customer" => "SearchColumnSelectField[]",
        "date" => "SearchColumnDateField[]",
        "dateCreated" => "SearchColumnDateField[]",
        "department" => "SearchColumnSelectField[]",
        "durationDecimal" => "SearchColumnDoubleField[]",
        "employee" => "SearchColumnSelectField[]",
        "endTime" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnStringField[]",
        "hours" => "SearchColumnStringField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isBillable" => "SearchColumnBooleanField[]",
        "isExempt" => "SearchColumnBooleanField[]",
        "isProductive" => "SearchColumnBooleanField[]",
        "isUtilized" => "SearchColumnBooleanField[]",
        "item" => "SearchColumnStringField[]",
        "lastModified" => "SearchColumnDateField[]",
        "location" => "SearchColumnSelectField[]",
        "memo" => "SearchColumnStringField[]",
        "paidExternally" => "SearchColumnBooleanField[]",
        "payItem" => "SearchColumnSelectField[]",
        "payrollDate" => "SearchColumnDateField[]",
        "rate" => "SearchColumnDoubleField[]",
        "startTime" => "SearchColumnDateField[]",
        "status" => "SearchColumnStringField[]",
        "subsidiary" => "SearchColumnStringField[]",
        "supervisorApproval" => "SearchColumnBooleanField[]",
        "temporaryLocalJurisdiction" => "SearchColumnStringField[]",
        "temporaryStateJurisdiction" => "SearchColumnStringField[]",
        "type" => "SearchColumnEnumSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}

