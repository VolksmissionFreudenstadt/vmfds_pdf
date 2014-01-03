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

### pdf view helper
This view helper creates a pdf file from its contents, using mPDF. Use this in your Fluid templates as follows:

```html
{namespace vmpdf=TYPO3\VmfdsPdf\ViewHelpers}

<vmpdf:pdf [arguments]>
PDF content goes here.
</vmpdf:pdf>
```

#### Arguments

Arguments for the pdf ViewHelper:

```html
{namespace vmpdf=TYPO3\VmfdsPdf\ViewHelpers}

<vmpdf:pdf filename="" destination="" filemode="" layout="" defaultfontsize="" defaultfont="" leftmargin="" rightmargin="" topmargin="" bottommargin="" headermargin="" footermargin="" orientation="">
PDF content goes here.
</vmpdf:pdf>
```

The meaning of the arguments can be inferred from the mPDF documentation of (http://mpdf1.com/manual/index.php?tid=184 mPDF()) and (http://mpdf1.com/manual/index.php?tid=125 Output()).

### basicUrl ViewHelper

This ViewHelper strips all http:// and trailing slashes from a url. Use this in your Fluid templates as follows:

```html
{namespace vmpdf=TYPO3\VmfdsPdf\ViewHelpers}

<vmpdf:basicUrl url="http://my.long.url/">
```

### remoteContent ViewHelper

This ViewHelper includes html from a remote location. Use this in your Fluid templates as follows:

```html
{namespace vmpdf=TYPO3\VmfdsPdf\ViewHelpers}

<vmpdf:remoteContent url="http://my.external.url/">
```



