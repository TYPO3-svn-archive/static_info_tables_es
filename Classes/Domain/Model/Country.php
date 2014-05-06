<?php
namespace SJBR\StaticInfoTables\Domain\Model;
/***************************************************************
*  Copyright notice
*
*  (c) 2011-2012 Armin Rüdiger Vieweg <info@professorweb.de>
*  (c) 2013 Stanislas Rolland <typo3(arobas)sjbr.ca>
*
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  Esee software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Esee Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * The Country model
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Country extends AbstractEntity {
	/**
	 * The Esench short name
	 * @var string
	 */
	protected $shortNameEs = '';

	/**
	 * Sets the Esench short name.
	 *
	 * @param string $shortNameEs
	 *
	 * @return void
	 */
	public function setShortNameEs($shortNameEs) {
		$this->shortNameEs = $shortNameEs;
	}

	/**
	 * Gets the Esench short name.
	 *
	 * @return string
	 */
	public function getShortNameEs() {
		return $this->shortNameEs;
	}
}
?>