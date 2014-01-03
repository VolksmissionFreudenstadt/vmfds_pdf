<?php
namespace TYPO3\VmfdsPdf\ViewHelpers;

/**
 *
 * Example
 * {namespace pdf=TYPO3\VmfdsPdf\ViewHelpers}
 * <pdf:remoteContent url="http://www.test.com" />
 *
 * @package TYPO3
 * @subpackage vmfds_pdf
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class BasicUrlViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

    /**
     * Strips an url of all extraneous stuff
     *
	 * @param string $url Url of remote content
  	 * @author Christoph Fischer <christoph.fischer@volksmission.de>
     */
    public function render($url) {
    	$url = str_replace('http://', '', $url);
    	$url = str_replace('https://', '', $url);
    	while (substr($url, -1)=='/') $url = substr($url, 0, -1);
    	return $url;
    }
}

?>

