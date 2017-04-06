<?php
return array(
  'quickbooks_consumer_key' => array(
    'group_name' => 'QuickBooks Online Settings',
    'group' => 'civiquickbooks',
    'name' => 'quickbooks_consumer_key',
    'type' => 'String',
    'add' => '4.7',
    'default' => '',
    'title' => 'Consumer Key',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Initial consumer key retrieved from quickbooks website',
    'help_text' => 'Initial consumer key retrieved from quickbooks website',
    'html_type' => 'Text',
    'html_attributes' => array(
      'size' => 50,
    ),
    'quick_form_type' => 'Element',
  ),
  'quickbooks_shared_secret' => array(
    'group_name' => 'QuickBooks Online Settings',
    'group' => 'civiquickbooks',
    'name' => 'quickbooks_shared_secret',
    'type' => 'String',
    'add' => '4.7',
    'default' => '',
    'title' => 'Shared Secret',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Initial shared secret retrieved from quickbooks website',
    'help_text' => 'Initial shared secret retrieved from quickbooks website',
    'html_type' => 'Text',
    'html_attributes' => array(
      'size' => 50,
    ),
    'quick_form_type' => 'Element',
  ),
  'quickbooks_access_token' => array(
    'group_name' => 'QuickBooks Online Settings',
    'group' => 'civiquickbooks',
    'name' => 'quickbooks_access_token',
    'type' => 'String',
    'html_type' => NULL,
    'add' => '4.7',
    'default' => '',
    'title' => 'Current Access Token',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Access token retrieved after user authorization',
    'help_text' => 'Access token retrieved after user authorization',
    'html_type' => '',
  ),
  'quickbooks_access_token_secret' => array(
    'group_name' => 'QuickBooks Online Settings',
    'group' => 'civiquickbooks',
    'name' => 'quickbooks_access_token_secret',
    'type' => 'String',
    'add' => '4.7',
    'default' => '',
    'title' => 'Current Access Secret',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Access secret retrieved after user authorization',
    'help_text' => 'Access secret retrieved after user authorization',
    'html_type' => '',

  ),
  'quickbooks_access_token_expiryDate' => array(
    'group_name' => 'QuickBooks Online Settings',
    'group' => 'civiquickbooks',
    'name' => 'quickbooks_access_token_expiryDate',
    'type' => 'String',
    'html_type' => NULL,
    'add' => '4.7',
    'default' => 1,
    'title' => 'Access Token Expiry Date',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Expiry date of the current access token and secret',
    'help_text' => 'Expiry date of the current access token and secret',
    'html_type' => 'Text',
    'html_attributes' => array(
      'size' => 50,
      'readonly' => 'true',
    ),
    'quick_form_type' => 'Element',
  ),
  'quickbooks_realmId' => array(
    'group_name' => 'QuickBooks Online Settings',
    'group' => 'civiquickbooks',
    'name' => 'quickbooks_realmId',
    'type' => 'String',
    'html_type' => NULL,
    'add' => '4.7',
    'default' => '',
    'title' => 'realmId',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'realmId retrieved when got access token',
    'help_text' => 'realmId retrieved when got access token',
    'html_type' => '',
  ),
  'quickbooks_company_country' => array(
    'group_name' => 'QuickBooks Online Settings',
    'group' => 'civiquickbooks',
    'name' => 'quickbooks_company_country',
    'type' => 'String',
    'html_type' => NULL,
    'add' => '4.7',
    'default' => 'AU',
    'title' => 'quickbooks_company_country',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'QuickBooks company country code for differentiating US and other countries during including tax in invoices.',
    'help_text' => 'QuickBooks company country code for differentiating US and other countries during including tax in invoices.',
    'html_type' => '',
  ),
);