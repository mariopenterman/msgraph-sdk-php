<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupPolicyPresentationValueLongDecimal File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* GroupPolicyPresentationValueLongDecimal class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class GroupPolicyPresentationValueLongDecimal extends GroupPolicyPresentationValue
{
    /**
    * Gets the value
    * An unsigned long value for the associated presentation.
    *
    * @return int The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the value
    * An unsigned long value for the associated presentation.
    *
    * @param int $val The value
    *
    * @return GroupPolicyPresentationValueLongDecimal
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = intval($val);
        return $this;
    }
    
}