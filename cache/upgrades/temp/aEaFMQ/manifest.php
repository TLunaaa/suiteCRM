<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
      0 => '6.5.25',
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (
      0 => 'CE',
      1 => 'PRO',
      2 => 'ENT',
    ),
  ),
  'readme' => '',
  'key' => '',
  'author' => 'fernandos',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Especialidadesxprestador',
  'published_date' => '2019-08-26 14:00:01',
  'type' => 'module',
  'version' => 1566828004,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'Especialidadesxprestador',
  'relationships' => 
  array (
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/en_us.Especialidadesxprestador.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/include/language/es_ES.Especialidadesxprestador.php',
      'to_module' => 'application',
      'language' => 'es_ES',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Opportunities/language/en_us.lang.php',
      'to_module' => 'Opportunities',
      'language' => 'en_us',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Opportunities/language/es_ES.lang.php',
      'to_module' => 'Opportunities',
      'language' => 'es_ES',
    ),
  ),
  'custom_fields' => 
  array (
    'Opportunitiesespecialidad_c' => 
    array (
      'id' => 'Opportunitiesespecialidad_c',
      'name' => 'especialidad_c',
      'label' => 'LBL_ESPECIALIDAD',
      'comments' => '',
      'help' => '',
      'module' => 'Opportunities',
      'type' => 'relate',
      'max_size' => '255',
      'require_option' => '1',
      'default_value' => NULL,
      'date_modified' => '2019-08-24 00:53:39',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => '',
      'ext2' => 'Espe_Especialidades',
      'ext3' => 'espe_especialidades_id_c',
      'ext4' => '',
    ),
    'Opportunitiesespe_especialidades_id_c' => 
    array (
      'id' => 'Opportunitiesespe_especialidades_id_c',
      'name' => 'espe_especialidades_id_c',
      'label' => 'LBL_ESPECIALIDAD_ESPE_ESPECIALIDADES_ID',
      'comments' => '',
      'help' => '',
      'module' => 'Opportunities',
      'type' => 'id',
      'max_size' => '36',
      'require_option' => '0',
      'default_value' => NULL,
      'date_modified' => '2019-08-24 00:53:39',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '0',
      'importable' => 'true',
      'ext1' => '',
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
    'Opportunitiesestado_sol_prestador_c' => 
    array (
      'id' => 'Opportunitiesestado_sol_prestador_c',
      'name' => 'estado_sol_prestador_c',
      'label' => 'LBL_ESTADO_SOL_PRESTADOR',
      'comments' => '',
      'help' => '',
      'module' => 'Opportunities',
      'type' => 'enum',
      'max_size' => '100',
      'require_option' => '0',
      'default_value' => 'REV',
      'date_modified' => '2019-08-24 01:01:02',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => 'aDom_Estado_Sol_Prestador',
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
    'Opportunitiesjjwg_maps_address_c' => 
    array (
      'id' => 'Opportunitiesjjwg_maps_address_c',
      'name' => 'jjwg_maps_address_c',
      'label' => 'LBL_JJWG_MAPS_ADDRESS',
      'comments' => 'Address',
      'help' => 'Address',
      'module' => 'Opportunities',
      'type' => 'varchar',
      'max_size' => '255',
      'require_option' => '0',
      'default_value' => NULL,
      'date_modified' => '2019-07-02 15:44:18',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => NULL,
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
    'Opportunitiesjjwg_maps_geocode_status_c' => 
    array (
      'id' => 'Opportunitiesjjwg_maps_geocode_status_c',
      'name' => 'jjwg_maps_geocode_status_c',
      'label' => 'LBL_JJWG_MAPS_GEOCODE_STATUS',
      'comments' => 'Geocode Status',
      'help' => 'Geocode Status',
      'module' => 'Opportunities',
      'type' => 'varchar',
      'max_size' => '255',
      'require_option' => '0',
      'default_value' => NULL,
      'date_modified' => '2019-07-02 15:44:18',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => NULL,
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
    'Opportunitiesjjwg_maps_lat_c' => 
    array (
      'id' => 'Opportunitiesjjwg_maps_lat_c',
      'name' => 'jjwg_maps_lat_c',
      'label' => 'LBL_JJWG_MAPS_LAT',
      'comments' => '',
      'help' => 'Latitude',
      'module' => 'Opportunities',
      'type' => 'float',
      'max_size' => '10',
      'require_option' => '0',
      'default_value' => '0.00000000',
      'date_modified' => '2019-07-02 15:44:18',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => '8',
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
    'Opportunitiesjjwg_maps_lng_c' => 
    array (
      'id' => 'Opportunitiesjjwg_maps_lng_c',
      'name' => 'jjwg_maps_lng_c',
      'label' => 'LBL_JJWG_MAPS_LNG',
      'comments' => '',
      'help' => 'Longitude',
      'module' => 'Opportunities',
      'type' => 'float',
      'max_size' => '11',
      'require_option' => '0',
      'default_value' => '0.00000000',
      'date_modified' => '2019-07-02 15:44:18',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => '8',
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
    'Opportunitiesmatricula_nac_c' => 
    array (
      'id' => 'Opportunitiesmatricula_nac_c',
      'name' => 'matricula_nac_c',
      'label' => 'LBL_MATRICULA_NAC',
      'comments' => NULL,
      'help' => NULL,
      'module' => 'Opportunities',
      'type' => 'varchar',
      'max_size' => '255',
      'require_option' => '0',
      'default_value' => NULL,
      'date_modified' => '2019-08-24 01:09:52',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => NULL,
      'ext2' => NULL,
      'ext3' => NULL,
      'ext4' => NULL,
    ),
    'Opportunitiesmatricula_prov_c' => 
    array (
      'id' => 'Opportunitiesmatricula_prov_c',
      'name' => 'matricula_prov_c',
      'label' => 'LBL_MATRICULA_PROV',
      'comments' => '',
      'help' => '',
      'module' => 'Opportunities',
      'type' => 'varchar',
      'max_size' => '255',
      'require_option' => '0',
      'default_value' => '',
      'date_modified' => '2019-08-24 00:57:06',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => '',
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
    'Opportunitiesobs_estado_sol_c' => 
    array (
      'id' => 'Opportunitiesobs_estado_sol_c',
      'name' => 'obs_estado_sol_c',
      'label' => 'LBL_OBS_ESTADO_SOL',
      'comments' => '',
      'help' => '',
      'module' => 'Opportunities',
      'type' => 'text',
      'max_size' => NULL,
      'require_option' => '0',
      'default_value' => '',
      'date_modified' => '2019-08-24 01:01:29',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => '',
      'ext2' => '4',
      'ext3' => '20',
      'ext4' => '',
    ),
    'Opportunitiesprioridad_c' => 
    array (
      'id' => 'Opportunitiesprioridad_c',
      'name' => 'prioridad_c',
      'label' => 'LBL_PRIORIDAD',
      'comments' => NULL,
      'help' => NULL,
      'module' => 'Opportunities',
      'type' => 'enum',
      'max_size' => '100',
      'require_option' => '0',
      'default_value' => 'Alta',
      'date_modified' => '2019-08-24 00:58:46',
      'deleted' => '0',
      'audited' => '1',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => 'aDom_Prioridad_Sol_Prestador',
      'ext2' => NULL,
      'ext3' => NULL,
      'ext4' => NULL,
    ),
    'Opportunitiesvigencia_nac_c' => 
    array (
      'id' => 'Opportunitiesvigencia_nac_c',
      'name' => 'vigencia_nac_c',
      'label' => 'LBL_VIGENCIA_NAC',
      'comments' => '',
      'help' => '',
      'module' => 'Opportunities',
      'type' => 'date',
      'max_size' => NULL,
      'require_option' => '0',
      'default_value' => '',
      'date_modified' => '2019-08-24 00:56:32',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => '',
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
    'Opportunitiesvigencia_prov_c' => 
    array (
      'id' => 'Opportunitiesvigencia_prov_c',
      'name' => 'vigencia_prov_c',
      'label' => 'LBL_VIGENCIA_PROV',
      'comments' => '',
      'help' => '',
      'module' => 'Opportunities',
      'type' => 'date',
      'max_size' => NULL,
      'require_option' => '0',
      'default_value' => '',
      'date_modified' => '2019-08-24 00:57:43',
      'deleted' => '0',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '0',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => '',
      'ext2' => '',
      'ext3' => '',
      'ext4' => '',
    ),
  ),
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Opportunities/metadata/SearchFields.php',
      'to' => 'custom/modules/Opportunities/metadata/SearchFields.php',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Opportunities/metadata/SearchFields.php',
      'to' => 'custom/working/modules/Opportunities/metadata/SearchFields.php',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Opportunities/metadata/dashletviewdefs.php',
      'to' => 'custom/modules/Opportunities/metadata/dashletviewdefs.php',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Opportunities/metadata/dashletviewdefs.php',
      'to' => 'custom/working/modules/Opportunities/metadata/dashletviewdefs.php',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Opportunities/metadata/detailviewdefs.php',
      'to' => 'custom/modules/Opportunities/metadata/detailviewdefs.php',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Opportunities/metadata/detailviewdefs.php',
      'to' => 'custom/working/modules/Opportunities/metadata/detailviewdefs.php',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Opportunities/metadata/editviewdefs.php',
      'to' => 'custom/modules/Opportunities/metadata/editviewdefs.php',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Opportunities/metadata/editviewdefs.php',
      'to' => 'custom/working/modules/Opportunities/metadata/editviewdefs.php',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Opportunities/metadata/listviewdefs.php',
      'to' => 'custom/modules/Opportunities/metadata/listviewdefs.php',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Opportunities/metadata/popupdefs.php',
      'to' => 'custom/modules/Opportunities/metadata/popupdefs.php',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Opportunities/metadata/popupdefs.php',
      'to' => 'custom/working/modules/Opportunities/metadata/popupdefs.php',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Opportunities/metadata/quickcreatedefs.php',
      'to' => 'custom/modules/Opportunities/metadata/quickcreatedefs.php',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Opportunities/metadata/quickcreatedefs.php',
      'to' => 'custom/working/modules/Opportunities/metadata/quickcreatedefs.php',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Opportunities/metadata/searchdefs.php',
      'to' => 'custom/modules/Opportunities/metadata/searchdefs.php',
    ),
    14 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Opportunities/metadata/searchdefs.php',
      'to' => 'custom/working/modules/Opportunities/metadata/searchdefs.php',
    ),
    15 => 
    array (
      'from' => '<basepath>/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_espe_especialidades_id_c.php',
      'to' => 'custom/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_espe_especialidades_id_c.php',
    ),
    16 => 
    array (
      'from' => '<basepath>/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_matricula_prov_c.php',
      'to' => 'custom/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_matricula_prov_c.php',
    ),
    17 => 
    array (
      'from' => '<basepath>/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_jjwg_maps_lng_c.php',
      'to' => 'custom/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_jjwg_maps_lng_c.php',
    ),
    18 => 
    array (
      'from' => '<basepath>/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_prioridad_c.php',
      'to' => 'custom/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_prioridad_c.php',
    ),
    19 => 
    array (
      'from' => '<basepath>/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_jjwg_maps_lat_c.php',
      'to' => 'custom/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_jjwg_maps_lat_c.php',
    ),
    20 => 
    array (
      'from' => '<basepath>/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_estado_sol_prestador_c.php',
      'to' => 'custom/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_estado_sol_prestador_c.php',
    ),
    21 => 
    array (
      'from' => '<basepath>/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_vigencia_nac_c.php',
      'to' => 'custom/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_vigencia_nac_c.php',
    ),
    22 => 
    array (
      'from' => '<basepath>/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_vigencia_prov_c.php',
      'to' => 'custom/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_vigencia_prov_c.php',
    ),
    23 => 
    array (
      'from' => '<basepath>/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_jjwg_maps_address_c.php',
      'to' => 'custom/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_jjwg_maps_address_c.php',
    ),
    24 => 
    array (
      'from' => '<basepath>/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_opportunity_type.php',
      'to' => 'custom/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_opportunity_type.php',
    ),
    25 => 
    array (
      'from' => '<basepath>/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_jjwg_maps_geocode_status_c.php',
      'to' => 'custom/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_jjwg_maps_geocode_status_c.php',
    ),
    26 => 
    array (
      'from' => '<basepath>/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_date_closed.php',
      'to' => 'custom/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_date_closed.php',
    ),
    27 => 
    array (
      'from' => '<basepath>/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_especialidad_c.php',
      'to' => 'custom/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_especialidad_c.php',
    ),
    28 => 
    array (
      'from' => '<basepath>/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_matricula_nac_c.php',
      'to' => 'custom/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_matricula_nac_c.php',
    ),
    29 => 
    array (
      'from' => '<basepath>/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_obs_estado_sol_c.php',
      'to' => 'custom/Extension/modules/Opportunities/Ext/Vardefs/_override_sugarfield_obs_estado_sol_c.php',
    ),
    30 => 
    array (
      'from' => '<basepath>/Extension/modules/Opportunities/Ext/Layoutdefs/_overrideOpportunity_subpanel_contacts.php',
      'to' => 'custom/Extension/modules/Opportunities/Ext/Layoutdefs/_overrideOpportunity_subpanel_contacts.php',
    ),
  ),
);