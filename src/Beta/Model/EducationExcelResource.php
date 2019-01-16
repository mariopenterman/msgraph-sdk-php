<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationExcelResource File
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
* EducationExcelResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class EducationExcelResource extends EducationResource
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.educationExcelResource");
    }

    /**
    * Gets the fileUrl
    *
    * @return string The fileUrl
    */
    public function getFileUrl()
    {
        if (array_key_exists("fileUrl", $this->_propDict)) {
            return $this->_propDict["fileUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fileUrl
    *
    * @param string $val The value of the fileUrl
    *
    * @return EducationExcelResource
    */
    public function setFileUrl($val)
    {
        $this->_propDict["fileUrl"] = $val;
        return $this;
    }
}