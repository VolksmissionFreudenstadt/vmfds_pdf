<?php
namespace TYPO3\VmfdsPdf\ViewHelpers;

require_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('vmfds_pdf').'lib/mpdf/mpdf.php');

/**
 *
 * Example
 * {namespace pdf=TYPO3\VmfdsPdf\ViewHelpers}
 * <pdf:pdf> Contents go here </pdf:pdf>
 *
 * @package TYPO3
 * @subpackage vmfds_pdf
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class PdfViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

    /**
     * Renders a text as PDF 
     *
     * @param string $filename The pdf filename
     * @param string $destination Output destination for the rendered
     * @param string $filemode
     * @param string $layout The page layout
     * @param string $defaultfontsize
     * @param string $defaultfont
     * @param string $leftmargin
	 * @param string $rightmargin
	 * @param string $topmargin
	 * @param string $bottommargin
	 * @param string $headermargin
	 * @param string $footermargin
	 * @param string $orientation
  	 * @author Christoph Fischer <christoph.fischer@volksmission.de>
     */
    public function render($filename=NULL, 
    					   $destination='I',
    					   $filemode=NULL, 
    					   $layout=NULL, 
    					   $defaultfontsize=NULL,
    					   $defaultfont=NULL,
    					   $leftmargin=NULL,
    					   $rightmargin=NULL,
    					   $topmargin=NULL,
    					   $bottommargin=NULL,
    					   $headermargin=NULL,
    					   $footermargin=NULL,
    					   $orientation=NULL
						   ) {
		$pdf = new \mPDF($filemode, $layout, $defaultfontsize, $defaultfont, $leftmargin, $rightmargin, $topmargin, $bottommargin, $headermargin, $footermargin, $orientation);
		/*
    	$pdf = new \mPDF($filemode, 
    					$layout, 
    					$defaultfontsize, 
    					$defaultfont, 
    					$leftmargin, 
    					$rightmargin,
    					$topmargin,
    					$bottommargin,
    					$headermargin,
    					$footermargin,
    					$orientation,
						);
		*/
		$this->templateVariableContainer->add('mpdf', $pdf);        
        $pdf->WriteHTML($this->renderChildren());
        $pdf->Output($filename, $destination);
        $this->templateVariableContainer->remove('mpdf');
        exit();
    }
}

?>

