<?php
// plug/controllers/guifi-web.php

//alerts
addS ("guifi-web_alert_index_nodeid","This device is registered at Guifi.net");
addS ("guifi-web_alert_index_no_nodeid","This device is not registered at Guifi.net");
addS ("guifi-web_alert_index_not_initialized","This device is not initialized");
addS ("guifi-web_alert_index_initialized","This device is initialized");
addS ("guifi-web_alert_initialize_curl_empty","Empty reply from remote server at Guifi.net");
addS ("guifi-web_alert_initialize_curl_ok","User successfully authenticated");
addS ("guifi-web_alert_initialize_curl_error","An error occurred");
addS ("guifi-web_alert_initialize_curl_wrong_login","Wrong username or password");
addS ("guifi-web_alert_initialize_curl_wrong_command","Wrong command");
addS ("guifi-web_alert_initialize_file_error","The configuration file could not be created");
addS ("guifi-web_alert_initialize_file_empty","The configuration file is empty");
addS ("guifi-web_alert_initialize_file_different","The configuration was not properly saved");
addS ("guifi-web_alert_initialize_success","The device was successfully initialized");
addS ("guifi-web_alert_initialize_post_empty","The credentials form did not provide any data");
addS ("guifi-web_alert_initialize_post_emptyusername","The credentials form did not provide a username");
addS ("guifi-web_alert_initialize_post_emptypassword","The credentials form did not provide a password");
addS ("guifi-web_alert_register_wrong_nodeid_pre","Node ID");
addS ("guifi-web_alert_register_wrong_nodeid_post","is not valid");
addS ("guifi-web_alert_register_post_empty","The device registration form did not provide any data");
addS ("guifi-web_alert_register_post_emptynode","The device registration form did not provide a node ID");
addS ("guifi-web_alert_register_post_found_pre","Node ID");
addS ("guifi-web_alert_register_post_found_post","found");
addS ("guifi-web_alert_register_post_no_devices","No devices found");



//buttons
addS ("guifi-web_button_back","Back");
addS ("guifi-web_button_back_credentials","Back to the credentials form");
addS ("guifi-web_button_initialize","Initialize the device");
addS ("guifi-web_button_register","Register the device");
addS ("guifi-web_button_submit_check","Check login credentials");
addS ("guifi-web_button_submit_nodeid","Check node ID");
addS ("guifi-web_button_back_register","Back to the registration form");
addS ("guifi-web_button_register_use_node","Use node");
addS ("guifi-web_button_register_new","Register your Cloudy device as a new device in this node");

//common
addS ("guifi-web_common_title","Guifi.net website integration");

//index
addS ("guifi-web_index_description","This page lets you integrate your Cloudy-based device with your user account at Guifi.net.");
addS ("guifi-web_index_not_initialized","The configuration needed to integrate this Cloudy device with Guifi.net's website is not yet initialized. Please click on the button below to start the process.");
addS ("guifi-web_index_not_registered","This Cloudy device is initialized but is not yet registered to Guifi.net's website. Please click on the button below to start the process.");
addS ("guifi-web_index_status","Cloudy device status:");
addS ("guifi-web_index_subtitle","Integration of Cloudy devices with Guifi.net's website");

//initialize
addS ("guifi-web_initialize_description",'To initialize this Cloudy device you need to fill in your Guifi.net login credentials in the form below. If you do not have an account at Guifi.net\'s website you can <a href="http://guifi.net/en/user/register">create it here</a>.');
addS ("guifi-web_initialize_curl_empty","The remote server at Guifi.net could not be contacted, or it provided an empty reply. Please check your Internet connection and retry.");
addS ("guifi-web_initialize_curl_error",'The remote server reported an error. Please go back to the previous form to retry.');
addS ("guifi-web_initialize_curl_authresult","Authentication result:");
addS ("guifi-web_initialize_curl_details","Response details:");
addS ("guifi-web_initialize_curl_url","URL called:");
addS ("guifi-web_initialize_curl_wrong_command",'A wrong command was sent to the remote server. Please go back to the previous form to retry.');
addS ("guifi-web_initialize_curl_wrong_login",'Please go back to the previous form to retry, or <a href="http://guifi.net/en/user/password">click here</a> to reset your password.');
addS ("guifi-web_initialize_result","Device initialization result:");
addS ("guifi-web_initialize_file_error","The configuration file could not be created. Check if you have free space in disk and sufficient permissions and retry.");
addS ("guifi-web_initialize_file_empty","The configuration file was created but could not be written. Check if you have free space in disk and sufficient permissions and retry.");
addS ("guifi-web_initialize_file_different","The configuration file was created but the data was not successfully saved. Check if you have free space in disk and sufficient permissions and retry.");
addS ("guifi-web_initialize_form_password","Password");
addS ("guifi-web_initialize_form_password_tooltip","Your passowrd at Guifi.net's website");
addS ("guifi-web_initialize_form_username","Username");
addS ("guifi-web_initialize_form_username_example","my_username_123");
addS ("guifi-web_initialize_form_username_tooltip","Your username at Guifi.net's website");
addS ("guifi-web_initialize_post_empty","The credentials form did not provide any data. Please go back to the previous page and retry.");
addS ("guifi-web_initialize_post_emptyusername","The credentials form did not provide a username, or it was empty. Please go back to the previous page and retry.");
addS ("guifi-web_initialize_post_emptypassword","The credentials form did not provide a password, or it was empty. Please go back to the previous page and retry.");
addS ("guifi-web_initialize_subtitle","Cloudy device initialization");

//register
addS ("guifi-web_register_subtitle","Cloudy device registration");
addS ("guifi-web_register_description","To register this device you need to fill in the fields of the form below.");
addS ("guifi-web_register_form_nodeid","Guifi node ID");
addS ("guifi-web_register_form_nodeid_tooltip","The ID of the Guifi.net node this Cloudy device belongs to.");
addS ("guifi-web_register_curl_noderesult", "Node ID check result:");
addS ("guifi-web_register_wrong_node", "The provided node ID does not seem to correspond to a valid Guifi.net node. Please go back to the previous page and retry.");
addS ("guifi-web_register_post_empty","The device registration form did not provide any data. Please go back to the previous page and retry.");
addS ("guifi-web_register_post_emptynode","The device registration form did not provide any node ID. Please go back to the previous page and retry.");
addS ("guifi-web_alert_register_post_nodename","Node name:");
addS ("guifi-web_alert_register_post_nodedescription","Node description:");
addS ("guifi-web_alert_register_post_nodedevices","Devices in this node:");
addS ("guifi-web_register_no_devices","This node has no devices. Use the button below to register your Cloudy device in this node as a new device.");
addS ("guifi-web_register_no_servers","This node has no server devices. Use the button below to register your Cloudy device in this node as a new device.");





?>