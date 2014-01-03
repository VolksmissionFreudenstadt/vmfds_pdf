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
class RemoteContentViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

    /**
     * Pulls in url contents from an external website
     *
	 * @param string $url Url of remote content
  	 * @author Christoph Fischer <christoph.fischer@volksmission.de>
     */
    public function render($url) {
    	return file_get_contents($url);
    }
}

?>

