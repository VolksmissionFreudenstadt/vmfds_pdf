vmfds_pdf
=========

PDF view helpers and tools used with Fluid templates in TYPO3 CMS.

Install
-------

* Drop the files in typo3conf/ext/vmfds_pdf. 
  Alternatively, do:
    `cd typo3conf/ext && git clone git@github.com:potofcoffee/vmfds_pdf.git`

* Create typo3conf/ext/vmfds_pdf.

* (http://www.mpdf1.com Download mPDF) and unpack the archive to typo3conf/ext/vmfds_pdf/lib/mpdf.

* Install the extension using the extension manager.


Use
---

Use this in your Fluid templates as follows:

```html
{namespace vmpdf=TYPO3\VmfdsPdf\ViewHelpers}

<vmpdf:pdf [arguments]>
PDF content goes here.
</vmpdf:pdf>
```

### Arguments

Arguments for the pdf ViewHelper:



