<?php
/*********************************************************************************
 * Copyright (C) 2011-2014 X2Engine Inc. All Rights Reserved.
 *
 * X2Engine Inc.
 * P.O. Box 66752
 * Scotts Valley, California 95067 USA
 *
 * Company website: http://www.x2engine.com
 * Community and support website: http://www.x2community.com
 *
 * X2Engine Inc. grants you a perpetual, non-exclusive, non-transferable license
 * to install and use this Software for your internal business purposes.
 * You shall not modify, distribute, license or sublicense the Software.
 * Title, ownership, and all intellectual property rights in the Software belong
 * exclusively to X2Engine.
 *
 * THIS SOFTWARE IS PROVIDED "AS IS" AND WITHOUT WARRANTIES OF ANY KIND, EITHER
 * EXPRESS OR IMPLIED, INCLUDING WITHOUT LIMITATION THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, TITLE, AND NON-INFRINGEMENT.
 ********************************************************************************/

Yii::import('application.components.sortableWidget.*');
Yii::import('application.components.X2Settings.*');
Yii::import('application.modules.users.models.*');
Yii::import('application.modules.bugReports.models.*');

/**
 * Base non-database test class
 * @package application.tests
 * @author Demitri Morgan <demitri@x2engine.com>
 */
class X2TestCase extends CTestCase {

    public static function setUpBeforeClass(){
        Yii::app()->beginRequest();
        Yii::app()->fixture->load(array(
            'profile'=>'Profile',
            'user' => 'User'));
        parent::setUpBeforeClass();
    }

}

?>
