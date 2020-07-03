<?php

use CRM_Civiquickbooks_ExtensionUtil as E;

return array(
  'quickbooks_consumer_key' => array(
    'group_name' => E::ts('QuickBooks Online Settings'),
    'group' => 'civiquickbooks',
    'name' => 'quickbooks_consumer_key',
    'type' => 'String',
    'add' => '4.7',
    'default' => '',
    'title' => E::ts('Client ID'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => E::ts('Initial client id retrieved from quickbooks website'),
    'help_text' => E::ts('Initial client id retrieved from quickbooks website'),
    'html_type' => 'Text',
    'html_attributes' => array(
      'size' => 50,
    ),
    'quick_form_type' => 'Element',
  ),
  'quickbooks_shared_secret' => array(
    'group_name' => E::ts('QuickBooks Online Settings'),
    'group' => 'civiquickbooks',
    'name' => 'quickbooks_shared_secret',
    'type' => 'String',
    'add' => '4.7',
    'default' => '',
    'title' => E::ts('Client Secret'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => E::ts('Initial client secret retrieved from quickbooks website'),
    'help_text' => E::ts('Initial client secret retrieved from quickbooks website'),
    'html_type' => 'Text',
    'html_attributes' => array(
      'size' => 50,
    ),
    'quick_form_type' => 'Element',
  ),
  'quickbooks_access_token' => array(
    'group_name' => E::ts('QuickBooks Online Settings'),
    'group' => 'civiquickbooks',
    'name' => 'quickbooks_access_token',
    'type' => 'String',
    'html_type' => NULL,
    'add' => '4.7',
    'default' => '',
    'title' => E::ts('Current Access Token'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => E::ts('Access token retrieved after user authorization'),
    'help_text' => E::ts('Access token retrieved after user authorization'),
  ),
  'quickbooks_refresh_token' => array(
    'group_name' => E::ts('QuickBooks Online Settings'),
    'group' => 'civiquickbooks',
    'name' => 'quickbooks_refresh_token',
    'type' => 'String',
    'html_type' => NULL,
    'add' => '4.7',
    'default' => '',
    'title' => E::ts('Current Refresh Token'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => E::ts('Refresh token retrieved after user authorization'),
    'help_text' => E::ts('Refresh token retrieved after user authorization'),
  ),
  'quickbooks_state_token' => array(
    'group_name' => E::ts('QuickBooks Online Settings'),
    'group' => 'civiquickbooks',
    'name' => 'quickbooks_state_token',
    'type' => 'String',
    'html_type' => NULL,
    'add' => '4.7',
    'default' => '',
    'title' => E::ts('Current State Token'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => E::ts('State token generated for user authorization'),
    'help_text' => E::ts('State token generated for user authorization'),
  ),
  'quickbooks_access_token_expiryDate' => array(
    'group_name' => E::ts('QuickBooks Online Settings'),
    'group' => 'civiquickbooks',
    'name' => 'quickbooks_access_token_expiryDate',
    'type' => 'String',
    'add' => '4.7',
    'default' => 1,
    'title' => E::ts('Access Token Expiry Date'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => E::ts('Expiry date of the current access token'),
    'help_text' => E::ts('Expiry date of the current access token'),
    'html_type' => 'Text',
    'html_attributes' => array(
      'size' => 50,
      'readonly' => 'true',
    ),
    'quick_form_type' => 'Element',
  ),
  'quickbooks_refresh_token_expiryDate' => array(
    'group_name' => E::ts('QuickBooks Online Settings'),
    'group' => 'civiquickbooks',
    'name' => 'quickbooks_refresh_token_expiryDate',
    'type' => 'String',
    'add' => '4.7',
    'default' => 1,
    'title' => E::ts('Refresh Token Expiry Date'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => E::ts('Expiry date of the current refresh token'),
    'help_text' => E::ts('Expiry date of the current refresh token'),
    'html_type' => 'Text',
    'html_attributes' => array(
      'size' => 50,
      'readonly' => 'true',
    ),
    'quick_form_type' => 'Element',
  ),
  'quickbooks_email_invoice' => array(
    'group_name' => E::ts('QuickBooks Online Settings'),
    'group' => 'civiquickbooks',
    'name' => 'quickbooks_email_invoice',
    'type' => 'String',
    'add' => '4.7',
    'default' => 'unpaid',
    'title' => E::ts('Send Email for new Invoices'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => E::ts('Whether an email should be sent to the Invoicee when a new Invoice is created in Quickbooks.'),
    'help_text' => E::ts('Whether an email should be sent to the Invoicee when a new Invoice is created in Quickbooks.'),
    'html_type' => 'Select',
    'html_attributes' => array(
      'never' => E::ts('Never'),
      'unpaid' => E::ts('Unpaid Invoices Only'),
      'always' => E::ts('Always'),
    ),
    'quick_form_type' => 'Element',
  ),
  'quickbooks_log_dir' => array(
    'group_name' => E::ts('QuickBooks Online Settings'),
    'group' => 'civiquickbooks',
    'name' => 'quickbooks_log_dir',
    'type' => 'String',
    'add' => '2.7', // this is the civiquickboks version number where this was added
    'default' => '/tmp/IdsLogs',
    'title' => E::ts('QBO Log Directory'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => E::ts('Absolute path to writable file system directory for QBO logs.'),
    'help_text' => E::ts('Absolute path to writable file system directory for QBO logs.'),
    'html_type' => 'Text',
    'html_attributes' => array(
      'size' => 30,
    ),
    'quick_form_type' => 'Element',
  ),
  'quickbooks_activate_qbo_logging' => array(
    'group_name' => E::ts('QuickBooks Online Settings'),
    'group' => 'civiquickbooks',
    'name' => 'quickbooks_activate_qbo_logging',
    'type' => 'Boolean',
    'add' => '2.7', // this is the civiquickboks version number where this was added
    'default' => 0,
    'title' => E::ts('Activate QBO logging?'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => E::ts('If selected, QBO will log potentially sensitive data to the QBO Log Directory.'),
    'help_text' => E::ts('If selected, QBO will log potentially sensitive data to the QBO Log Directory.'),
    'html_type' => 'checkbox',
    'quick_form_type' => 'Element',
  ),
  'quickbooks_realmId' => array(
    'group_name' => E::ts('QuickBooks Online Settings'),
    'group' => 'civiquickbooks',
    'name' => 'quickbooks_realmId',
    'type' => 'String',
    'add' => '4.7',
    'default' => '',
    'title' => 'realmId',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => E::ts('realmId retrieved when got access token'),
    'help_text' => E::ts('realmId retrieved when got access token'),
    'html_type' => 'Text',
    'html_attributes' => array(
      'size' => 50,
      'readonly' => 'true',
    ),
  ),
  'quickbooks_company_country' => array(
    'group_name' => E::ts('QuickBooks Online Settings'),
    'group' => 'civiquickbooks',
    'name' => 'quickbooks_company_country',
    'type' => 'String',
    'add' => '4.7',
    'default' => 'AU',
    'title' => E::ts('QuickBooks Company Country'),
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => E::ts('QuickBooks company country code for differentiating US and other countries during including tax in invoices.'),
    'help_text' => E::ts('QuickBooks company country code for differentiating US and other countries during including tax in invoices.'),
    'html_type' => 'Text',
    'html_attributes' => array(
      'size' => 50,
      'readonly' => 'true',
    ),
  ),
);
