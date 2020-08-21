<?php

/**
 * @copyright   Copyright (C) 2019-2020 Jeffrey Bostoen
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2020-01-27 19:00:07
 *
 * iTop module definition file
 */

SetupWebPage::AddModule(
        __FILE__, // Path to the current file, all other file names are relative to the directory containing this file
        'jb-framework/2.6.200127',
        array(
                // Identification
                //
                'label' => 'Framework (for extensions by Jeffrey Bostoen)',
                'category' => 'tools',

                // Setup
                //
                'dependencies' => array(
                ),
                'mandatory' => true,
                'visible' => false,

                // Components
                //
                'datamodel' => array(
					'components/ApplicationHelper.class.inc.php',
					'components/CMDBChangeHelper.class.inc.php',
					'components/DBObjectHelper.class.inc.php',
					'components/ormCustomCaseLog.class.inc.php',
					'components/ScheduledProcess.class.inc.php',
					'components/TraceLog.class.inc.php',
                ),
                'webservice' => array(

                ),
                'data.struct' => array(
					// add your 'structure' definition XML files here,
                ),
                'data.sample' => array(
					// add your sample data XML files here,
                ),

                // Documentation
                //
                'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
                'doc.more_information' => '', // hyperlink to more information, if any

                // Default settings
                //
                'settings' => array(
                        // Module specific settings go here, if any
                ),
        )
);
