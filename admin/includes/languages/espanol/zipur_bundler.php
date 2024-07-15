<?php

    

/*
* $Id: zipur_bundler.php
* $Loc: /admin/includes/languages/english/
*
* Name: ZipurBundler
* Version: 2.3.0
* Release Date: 04/22/2024
* Author: Preston Lord
* 	 phoenixaddons.com / @zipurman / plord@inetx.ca
*
* License: THIS LICENSE IS VALID FOR VERSION 2.x OF THIS PRODUCT ONLY
* 
* Cannot be distributed
* 
* Commercial use allowed
* 
* Cannot modify source-code for any purpose (cannot create derivative works)
*
* Comments: Copyright (c) 2024: Preston Lord - @zipurman - Intricate Networks Inc.
* 
* All rights reserved.
* 
* THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*
* (Packaged with Zipur Bundler v2.2.0)
*/





    define( 'HEADING_TITLE', 'Zipur Bundler' );

    define( 'TABLE_HEADING_LOCATION', '<span class="text-uppercase">%s</span>' );
    define( 'TABLE_HEADING_FOLDER', 'Bundle' );
    define( 'TABLE_HEADING_VERSION', 'Version' );

    define( 'TABLE_HEADING_DESCRIPTION', 'Description' );
    define( 'TABLE_HEADING_REQUIRED_VERSION', 'Required Version' );
    define( 'TABLE_HEADING_MAX_VERSION', 'Max Version' );
    define( 'TABLE_HEADING_TASKS', 'Tasks' );

    define( 'TEXT_UPDATES_DIRECTORY', 'Bundler Directory:' );
    define( 'TEXT_UPDATES_EMPTY', 'No bundles in directory.' );
    define( 'TEXT_UPDATES_DIRECTORY_CREATE_ERROR', 'Error creating directory.' );
    define( 'TEXT_UPDATES_MAKE_NEW_FOLDER_FAIL', 'Failed to make directory' );
    define( 'TEXT_UPDATES_MAKE_NEW_FOLDER', 'Created directory' );
    define( 'TEXT_UPDATES_FOLDER_EXISTS', 'Folder already exists' );

    define( 'TEXT_UPDATES_FILE_DELETE_FAILED', 'Failed to delete file' );
    define( 'TEXT_UPDATES_FILE_DELETED', 'Deleted file' );
    define( 'TEXT_UPDATES_FILE_ALREADY_DELETED', 'File already deleted' );
    define( 'TEXT_UPDATES_FILE_COPY_FAIL', 'Failed to copy' );
    define( 'TEXT_UPDATES_FILE_COPIED', 'Copied file' );
    define( 'TEXT_UPDATES_REMOVING_PACKAGE', 'Uninstalling bundle from your catalog' );
    define( 'TEXT_UPDATES_MISSING_REQUIRED_VERSION', 'Does not meet requirements.' );

    define( 'TEXT_UPDATES_UNZIP_FAILED', 'UNZIP FAILED' );

    define( 'TEXT_UPDATES_YES', 'YES' );
    define( 'TEXT_UPDATES_NO', 'NO' );
    define( 'TEXT_UPDATES_FILE_TO', 'TO' );
    define( 'TEXT_UPDATES_FILE_FROM', 'FROM' );
    define( 'TEXT_UPDATES_UPDATE', 'UPDATE' );
    define( 'TEXT_UPDATES_MISSING', 'MISSING' );
    define( 'TEXT_UPDATES_DELETE', 'DELETE' );
    define( 'TEXT_UPDATES_CANCEL', 'CANCEL' );
    define( 'TEXT_UPDATES_ACTION_INSTALL', 'install' );
    define( 'TEXT_UPDATES_ACTION_REINSTALL', 'reinstall' );
    define( 'TEXT_UPDATES_ACTION_PROCEED', 'proceed' );
    define( 'TEXT_UPDATES_ACTION_SKIP', 'skip' );
    define( 'TEXT_UPDATES_ACTION_DELETE', 'delete' );
    define( 'TEXT_UPDATES_ACTION_FILES_DELETE', 'files_delete' );
    define( 'TEXT_UPDATES_ACTION_REMOVE', 'remove' );
    define( 'TEXT_UPDATES_ACTION_UNINSTALL', 'uninstall' );
    define( 'TEXT_UPDATES_ACTION_UPGRADE', 'upgrade' );
    define( 'TEXT_UPDATES_ACTION_INSTALLING', 'Installing' );
    define( 'TEXT_UPDATES_ACTION_REMOVING', 'Removing' );
    define( 'TEXT_UPDATES_ACTION_DUPLICATE', 'Duplicate' );
    define( 'TEXT_UPDATES_ACTION_INSTALLER', 'Installer' );
    define( 'TEXT_UPDATES_ACTION_REGULAR_ZIP', 'Regular Zip Bundle' );

    define( 'TEXT_THIS_UPDATE_WILL', 'This bundle will do the following:' );
    define( 'TEXT_THIS_UPDATE_PRE_TITLE', 'Pre-Install Actions:' );
    define( 'TEXT_THIS_UPDATE_FILE_UPDATES', 'File Updates' );
    define( 'TEXT_THIS_UPDATE_POST_TITLE', 'Post-Install Actions:' );
    define( 'TEXT_THIS_UPDATE_CONTINUE', 'continue' );
    define( 'TEXT_THIS_UPDATE_OPTIONAL', 'Optional' );
    define( 'TEXT_THIS_UPDATE_REQUIRED', 'Required' );
    define( 'TEXT_THIS_UPDATE_CONTAINS_ERRORS', 'update.php contains errors.' );
    define( 'TEXT_THIS_UPDATE_MISSING_FILE', 'Missing update.php configuration file.' );
    define( 'TEXT_THIS_UPDATE_DELETEE_CONFIRM', 'Are you sure you want to delete this update and all of it\'s files? <br/>(This will not affect the installed copy of these files)' );

    define( 'TEXT_THIS_UPDATE_COMPLETED', 'Update Completed' );
    //If the following is not empty, then after installing a package a delete option will be available
    //    define( 'TEXT_THIS_UPDATE_DELETE_UPDATE_FILES', 'Delete Update Files' );
    define( 'TEXT_THIS_UPDATE_DELETE_UPDATE_FILES', '' );
    define( 'TEXT_THIS_UPDATE_REMOVED', 'Bundle Uninstalled' );
    define( 'TEXT_THIS_UPDATE_FINISHED', 'All done ... Enjoy!' );

    define( 'TEXT_THIS_MENU_REPORT', 'Version File Report' );
    define( 'TEXT_THIS_MENU_UPDATER', 'Bundles' );

    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_DESCRIPTION', 'This area will allow developers to build deployment bundles for users to use in the Zipur Bundler. Once you save your module, a folder will be created/updated in /admin/updates/ and a update.php file will be created to reflect these settings. All files included in the update will also be adjusted to match your settings.' );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_FILES_HEADER', 'File(s) to Install/Update' );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_FILES_CHOOSE', 'Choose File' );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_SEARCH', 'Search' );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_FILES', 'Files' );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_ACTION', 'Action' );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_TASKS', 'Tasks' );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_NONE', 'None' );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_THESE_FILES', 'These files will be copied from your install to the updates folder for this bundle.' );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_NEW', 'Create New Bundle' );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_EDIT', 'edit' );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_SAVE', 'save bundle' );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_ADD_ACTION', 'ADD ACTION' );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_ADD_FILE', 'ADD FILE' );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_AJAX_TIP', "Each item to be on it's own line.  Example:<br/>modules/order_total/ot_tax<br/>modules_content/cm_in_category" );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_SQL_TIP', "Each sql query to be separated by a semi-colon." );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_FILE_DELETE_TIP', "Each file to be on it's own line.  Example:<br/>includes/modules/header_tags/ht_zipur_header_message.php<br/>includes/languages/english/modules/header_tags/ht_zipur_header_message.php" );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_PRE_INSTALL_TITLE', 'Pre-Install Actions' );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_POST_INSTALL_TITLE', 'Post-Install Actions' );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_UN_INSTALL_TITLE', 'Un-Install Actions' );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_SETTINGS_TITLE', 'Bundle Settings' );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_UPDATE_NAME_TEXT', 'Bundle Name' );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_UPDATE_INSTALLED_VERSION', 'Installed Version ' );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_UPDATE_INSTALL_TEXT', 'Install' );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_UPDATE_REMOVE_TEXT', 'Remove' );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_UPDATE_DESCRIPTION_TEXT', 'Description' );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_UPDATE_VERSION', 'This Bundle Version' );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_UPDATE_DATE', 'Release Date' );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_UPDATE_AUTHOR', 'Author' );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_UPDATE_CONTACT', 'Contact Info' );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_UPDATE_LICENSE', 'License' );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_UPDATE_COMMENTS', 'Comments/Copyrights' );
    define( 'TEXT_UPDATES_FILE_UPDATE_CREATE_FAILED', 'Unable to create update file!' );
    define( 'TEXT_UPDATES_FILE_UPDATE_CREATE_UPDATE_PHP', 'Replace Comments at top of all php files with above settings?' );
    define( 'TEXT_UPDATES_FILE_UPDATE_RANDOMIZE_ZIP', 'Randomize Development Zip File?' );

    define( 'TEXT_UPDATES_FILE_UPDATE_CREATE_UPDATE_COMPATIBLE', 'compatible' );

    //    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_AUTHOR', '' );
    //    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_CONTACT', '' );
    //    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_LICENSE', '' );
    //    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_COMMENTS', '' );

    //defaults for dev of new bundles
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_AUTHOR', 'Preston Lord' );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_CONTACT', 'phoenixaddons.com / @zipurman / plord@inetx.ca' );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_LICENSE', 'Released under the GNU General Public License' );
    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_COMMENTS', 'Copyright (c) 2021: Preston Lord - @zipurman - Intricate Networks Inc.


  Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

  1. Re-distributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

  2. Re-distributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

  3. Neither the name of the copyright holder nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.

  THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.' );

    define( 'TEXT_THIS_FILE_UPDATE_CREATOR_EXCLUDE_FOLDERS', ['.git'] );
    define( 'TABLE_HEADING_IGNORE_FOLDERS', 'Ignore Folders:' );
