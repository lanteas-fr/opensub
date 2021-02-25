<?php

/**
 * @license GNU General Public License < https://www.gnu.org/licenses/ >
 * @author  Lanteas™ < contact@lanteas.com >
 * @package OpenSub™
*/

$popupMeta = array (
    'moduleMain' => 'Employees',
    'varName' => 'Employee',
    'orderBy' => 'employees.first_name, employees.last_name',
    'whereClauses' => array (
  'first_name' => 'employees.first_name',
  'last_name' => 'employees.last_name',
  'employee_status' => 'employees.employee_status',
  'title' => 'employees.title',
  'phone' => 'employees.phone',
  'email' => 'employees.email',
  'address_street' => 'employees.address_street',
  'address_city' => 'employees.address_city',
  'address_state' => 'employees.address_state',
  'address_postalcode' => 'employees.address_postalcode',
  'address_country' => 'employees.address_country',
  'employee_unite_travail' => 'employees.employee_unite_travail',
  'employee_service' => 'employees.employee_service',
  'employee_direction' => 'employees.employee_direction',
  'employee_pole' => 'employees.employee_pole',
  'employee_direction_generale' => 'employees.employee_direction_generale',
  
),
    'searchInputs' => array (
  0 => 'first_name',
  1 => 'last_name',
  2 => 'employee_status',
  3 => 'title',
  4 => 'phone',
  5 => 'email',
  6 => 'address_street',
  7 => 'address_city',
  8 => 'address_state',
  9 => 'address_postalcode',
  10 => 'address_country',
  11 => 'employee_unite_travail',
  12 => 'employee_service',
  13 => 'employee_direction',
  14 => 'employee_pole',
  15 => 'employee_direction_generale',

),
    'searchdefs' => array (
  'first_name' => 
  array (
    'name' => 'first_name',
    'width' => '10%',
  ),
  'last_name' => 
  array (
    'name' => 'last_name',
    'width' => '10%',
  ),
  'employee_status' => 
  array (
    'name' => 'employee_status',
    'width' => '10%',
  ),
  'title' => 
  array (
    'name' => 'title',
    'width' => '10%',
  ),
  'phone' => 
  array (
    'name' => 'phone',
    'label' => 'LBL_ANY_PHONE',
    'type' => 'name',
    'width' => '10%',
  ),
  'email' => 
  array (
    'name' => 'email',
    'label' => 'LBL_ANY_EMAIL',
    'type' => 'name',
    'width' => '10%',
  ),
  'address_street' => 
  array (
    'name' => 'address_street',
    'label' => 'LBL_ANY_ADDRESS',
    'type' => 'name',
    'width' => '10%',
  ),
  'address_city' => 
  array (
    'name' => 'address_city',
    'label' => 'LBL_CITY',
    'type' => 'name',
    'width' => '10%',
  ),
  'address_state' => 
  array (
    'name' => 'address_state',
    'label' => 'LBL_STATE',
    'type' => 'name',
    'width' => '10%',
  ),
  'address_postalcode' => 
  array (
    'name' => 'address_postalcode',
    'label' => 'LBL_POSTAL_CODE',
    'type' => 'name',
    'width' => '10%',
  ),
  'address_country' => 
  array (
    'name' => 'address_country',
    'label' => 'LBL_COUNTRY',
    'type' => 'name',
    'width' => '10%',
  ),
  'employee_unite_travail' => 
  array (
    'type' => 'varchar',
    'studio' => 'visible',
    'label' => 'LBL_EMPLOYEE_UNITE_TRAVAIL',
    'width' => '10%',
    'name' => 'employee_unite_travail',
  ),
  'employee_service' => 
  array (
    'type' => 'varchar',
    'studio' => 'visible',
    'label' => 'LBL_EMPLOYEE_SERVICE',
    'width' => '10%',
    'name' => 'employee_service',
  ),
  'employee_direction' => 
  array (
    'type' => 'varchar',
    'studio' => 'visible',
    'label' => 'LBL_EMPLOYEE_DIRECTION',
    'width' => '10%',
    'name' => 'employee_direction',
  ),
  'employee_pole' => 
  array (
    'type' => 'varchar',
    'studio' => 'visible',
    'label' => 'LBL_EMPLOYEE_POLE',
    'width' => '10%',
    'name' => 'employee_pole',
  ),
  'employee_direction_generale' => 
  array (
    'type' => 'varchar',
    'studio' => 'visible',
    'label' => 'LBL_EMPLOYEE_DIRECTION_GENERALE',
    'width' => '10%',
    'name' => 'employee_direction_generale',
  ),
),
);
