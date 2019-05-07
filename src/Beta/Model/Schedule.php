<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Schedule File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* Schedule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Schedule extends Entity
{
    /**
    * Gets the enabled
    *
    * @return bool The enabled
    */
    public function getEnabled()
    {
        if (array_key_exists("enabled", $this->_propDict)) {
            return $this->_propDict["enabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enabled
    *
    * @param bool $val The enabled
    *
    * @return Schedule
    */
    public function setEnabled($val)
    {
        $this->_propDict["enabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the timeZone
    *
    * @return string The timeZone
    */
    public function getTimeZone()
    {
        if (array_key_exists("timeZone", $this->_propDict)) {
            return $this->_propDict["timeZone"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the timeZone
    *
    * @param string $val The timeZone
    *
    * @return Schedule
    */
    public function setTimeZone($val)
    {
        $this->_propDict["timeZone"] = $val;
        return $this;
    }
    
    /**
    * Gets the provisionStatus
    *
    * @return OperationStatus The provisionStatus
    */
    public function getProvisionStatus()
    {
        if (array_key_exists("provisionStatus", $this->_propDict)) {
            if (is_a($this->_propDict["provisionStatus"], "Microsoft\Graph\Beta\Model\OperationStatus")) {
                return $this->_propDict["provisionStatus"];
            } else {
                $this->_propDict["provisionStatus"] = new OperationStatus($this->_propDict["provisionStatus"]);
                return $this->_propDict["provisionStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the provisionStatus
    *
    * @param OperationStatus $val The provisionStatus
    *
    * @return Schedule
    */
    public function setProvisionStatus($val)
    {
        $this->_propDict["provisionStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the provisionStatusCode
    *
    * @return string The provisionStatusCode
    */
    public function getProvisionStatusCode()
    {
        if (array_key_exists("provisionStatusCode", $this->_propDict)) {
            return $this->_propDict["provisionStatusCode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the provisionStatusCode
    *
    * @param string $val The provisionStatusCode
    *
    * @return Schedule
    */
    public function setProvisionStatusCode($val)
    {
        $this->_propDict["provisionStatusCode"] = $val;
        return $this;
    }
    

     /** 
     * Gets the shifts
     *
     * @return array The shifts
     */
    public function getShifts()
    {
        if (array_key_exists("shifts", $this->_propDict)) {
           return $this->_propDict["shifts"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the shifts
    *
    * @param Shift $val The shifts
    *
    * @return Schedule
    */
    public function setShifts($val)
    {
		$this->_propDict["shifts"] = $val;
        return $this;
    }
    

     /** 
     * Gets the timesOff
     *
     * @return array The timesOff
     */
    public function getTimesOff()
    {
        if (array_key_exists("timesOff", $this->_propDict)) {
           return $this->_propDict["timesOff"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the timesOff
    *
    * @param TimeOff $val The timesOff
    *
    * @return Schedule
    */
    public function setTimesOff($val)
    {
		$this->_propDict["timesOff"] = $val;
        return $this;
    }
    

     /** 
     * Gets the timeOffReasons
     *
     * @return array The timeOffReasons
     */
    public function getTimeOffReasons()
    {
        if (array_key_exists("timeOffReasons", $this->_propDict)) {
           return $this->_propDict["timeOffReasons"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the timeOffReasons
    *
    * @param TimeOffReason $val The timeOffReasons
    *
    * @return Schedule
    */
    public function setTimeOffReasons($val)
    {
		$this->_propDict["timeOffReasons"] = $val;
        return $this;
    }
    

     /** 
     * Gets the schedulingGroups
     *
     * @return array The schedulingGroups
     */
    public function getSchedulingGroups()
    {
        if (array_key_exists("schedulingGroups", $this->_propDict)) {
           return $this->_propDict["schedulingGroups"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the schedulingGroups
    *
    * @param SchedulingGroup $val The schedulingGroups
    *
    * @return Schedule
    */
    public function setSchedulingGroups($val)
    {
		$this->_propDict["schedulingGroups"] = $val;
        return $this;
    }
    
}