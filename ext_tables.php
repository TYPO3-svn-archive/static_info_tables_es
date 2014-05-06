<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}
$tablesAdditionalFields = array (
	'static_countries' => array (
		'cn_short_en' => 'cn_short_es',
	),
	'static_country_zones' => array (
		'zn_name_en' => 'zn_name_es',
	),
	'static_currencies' => array (
		'cu_name_en' => 'cu_name_es',
		'cu_sub_name_en' => 'cu_sub_name_es',
	),
	'static_languages' => array (
		'lg_name_en' => 'lg_name_es',
	),
	'static_territories' => array (
		'tr_name_en' => 'tr_name_es',
	),
);

foreach ($tablesAdditionalFields as $table => $additionalFields) {
	if (\TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger(TYPO3_version) < 6001000) {
		\TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA($table);
	}
	foreach ($additionalFields as $sourceField => $destField) {
		$additionalColumns = array();
		$additionalColumns[$destField] = $GLOBALS['TCA'][$table]['columns'][$sourceField];
		$additionalColumns[$destField]['label'] = 'LLL:EXT:static_info_tables_es/Resources/Private/Language/locallang_db.xml:' . $table . '_item.' . $destField;
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns($table, $additionalColumns, 1);
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes($table, $destField, '', 'after:' . $sourceField);
	}
}
unset($additionalColumns);
unset($tablesAdditionalFields);

?>