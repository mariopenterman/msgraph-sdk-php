<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidForWorkAppConfigurationSchemaItemDataType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

use Microsoft\Graph\Core\Enum;

/**
* AndroidForWorkAppConfigurationSchemaItemDataType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class AndroidForWorkAppConfigurationSchemaItemDataType extends Enum
{
    /**
    * The Enum AndroidForWorkAppConfigurationSchemaItemDataType
    */
    const GRAPHBOOL = "bool";
    const INTEGER = "integer";
    const GRAPHSTRING = "string";
    const CHOICE = "choice";
    const MULTISELECT = "multiselect";
    const BUNDLE = "bundle";
    const BUNDLE_ARRAY = "bundleArray";
    const HIDDEN = "hidden";
}