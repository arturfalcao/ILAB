<?php
namespace TCPDF\TCPDFBundle;
use TCPDF;
use TCPDF_STATIC;
use TCPDF_FONTS;

class PDF extends TCPDF{

    protected $cf;

    public function __construct($orientation='P', $unit='mm', $format='A4', $unicode=true, $encoding='UTF-8', $diskcache=false, $pdfa=false,$custom_footer = false) {
        /* Set internal character encoding to ASCII */
        if (function_exists('mb_internal_encoding') AND mb_internal_encoding()) {
            $this->internal_encoding = mb_internal_encoding();
            mb_internal_encoding('ASCII');
        }
        // set file ID for trailer
        $this->cf = $custom_footer;
        $serformat = (is_array($format) ? json_encode($format) : $format);
        $this->file_id = md5(TCPDF_STATIC::getRandomSeed('TCPDF'.$orientation.$unit.$serformat.$encoding));
        $this->font_obj_ids = array();
        $this->page_obj_id = array();
        $this->form_obj_id = array();
        // set pdf/a mode
        $this->pdfa_mode = $pdfa;
        $this->force_srgb = false;
        // set language direction
        $this->rtl = false;
        $this->tmprtl = false;
        // some checks
        $this->_dochecks();
        // initialization of properties
        $this->isunicode = $unicode;
        $this->page = 0;
        $this->transfmrk[0] = array();
        $this->pagedim = array();
        $this->n = 2;
        $this->buffer = '';
        $this->pages = array();
        $this->state = 0;
        $this->fonts = array();
        $this->FontFiles = array();
        $this->diffs = array();
        $this->images = array();
        $this->links = array();
        $this->gradients = array();
        $this->InFooter = false;
        $this->lasth = 0;
        $this->FontFamily = defined('PDF_FONT_NAME_MAIN')?PDF_FONT_NAME_MAIN:'helvetica';
        $this->FontStyle = '';
        $this->FontSizePt = 12;
        $this->underline = false;
        $this->overline = false;
        $this->linethrough = false;
        $this->DrawColor = '0 G';
        $this->FillColor = '0 g';
        $this->TextColor = '0 g';
        $this->ColorFlag = false;
        $this->pdflayers = array();
        // encryption values
        $this->encrypted = false;
        $this->last_enc_key = '';
        // standard Unicode fonts
        $this->CoreFonts = array(
            'courier'=>'Courier',
            'courierB'=>'Courier-Bold',
            'courierI'=>'Courier-Oblique',
            'courierBI'=>'Courier-BoldOblique',
            'helvetica'=>'Helvetica',
            'helveticaB'=>'Helvetica-Bold',
            'helveticaI'=>'Helvetica-Oblique',
            'helveticaBI'=>'Helvetica-BoldOblique',
            'times'=>'Times-Roman',
            'timesB'=>'Times-Bold',
            'timesI'=>'Times-Italic',
            'timesBI'=>'Times-BoldItalic',
            'symbol'=>'Symbol',
            'zapfdingbats'=>'ZapfDingbats'
        );
        // set scale factor
        $this->setPageUnit($unit);
        // set page format and orientation
        $this->setPageFormat($format, $orientation);
        // page margins (1 cm)
        $margin = 28.35 / $this->k;
        $this->SetMargins($margin, $margin);
        $this->clMargin = $this->lMargin;
        $this->crMargin = $this->rMargin;
        // internal cell padding
        $cpadding = $margin / 10;
        $this->setCellPaddings($cpadding, 0, $cpadding, 0);
        // cell margins
        $this->setCellMargins(0, 0, 0, 0);
        // line width (0.2 mm)
        $this->LineWidth = 0.57 / $this->k;
        $this->linestyleWidth = sprintf('%F w', ($this->LineWidth * $this->k));
        $this->linestyleCap = '0 J';
        $this->linestyleJoin = '0 j';
        $this->linestyleDash = '[] 0 d';
        // automatic page break
        $this->SetAutoPageBreak(true, (2 * $margin));
        // full width display mode
        $this->SetDisplayMode('fullwidth');
        // compression
        $this->SetCompression();
        // set default PDF version number
        $this->setPDFVersion();
        $this->tcpdflink = true;
        $this->encoding = $encoding;
        $this->HREF = array();
        $this->getFontsList();
        $this->fgcolor = array('R' => 0, 'G' => 0, 'B' => 0);
        $this->strokecolor = array('R' => 0, 'G' => 0, 'B' => 0);
        $this->bgcolor = array('R' => 255, 'G' => 255, 'B' => 255);
        $this->extgstates = array();
        $this->setTextShadow();
        // signature
        $this->sign = false;
        $this->tsa_timestamp = false;
        $this->tsa_data = array();
        $this->signature_appearance = array('page' => 1, 'rect' => '0 0 0 0', 'name' => 'Signature');
        $this->empty_signature_appearance = array();
        // user's rights
        $this->ur['enabled'] = false;
        $this->ur['document'] = '/FullSave';
        $this->ur['annots'] = '/Create/Delete/Modify/Copy/Import/Export';
        $this->ur['form'] = '/Add/Delete/FillIn/Import/Export/SubmitStandalone/SpawnTemplate';
        $this->ur['signature'] = '/Modify';
        $this->ur['ef'] = '/Create/Delete/Modify/Import';
        $this->ur['formex'] = '';
        // set default JPEG quality
        $this->jpeg_quality = 75;
        // initialize some settings
        TCPDF_FONTS::utf8Bidi(array(''), '', false, $this->isunicode, $this->CurrentFont);
        // set default font
        $this->SetFont($this->FontFamily, $this->FontStyle, $this->FontSizePt);
        $this->setHeaderFont(array($this->FontFamily, $this->FontStyle, $this->FontSizePt));
        $this->setFooterFont(array($this->FontFamily, $this->FontStyle, $this->FontSizePt));
        // check if PCRE Unicode support is enabled
        if ($this->isunicode AND (@preg_match('/\pL/u', 'a') == 1)) {
            // PCRE unicode support is turned ON
            // \s     : any whitespace character
            // \p{Z}  : any separator
            // \p{Lo} : Unicode letter or ideograph that does not have lowercase and uppercase variants. Is used to chunk chinese words.
            // \xa0   : Unicode Character 'NO-BREAK SPACE' (U+00A0)
            //$this->setSpacesRE('/(?!\xa0)[\s\p{Z}\p{Lo}]/u');
            $this->setSpacesRE('/(?!\xa0)[\s\p{Z}]/u');
        } else {
            // PCRE unicode support is turned OFF
            $this->setSpacesRE('/[^\S\xa0]/');
        }
        $this->default_form_prop = array('lineWidth'=>1, 'borderStyle'=>'solid', 'fillColor'=>array(255, 255, 255), 'strokeColor'=>array(128, 128, 128));
        // set document creation and modification timestamp
        $this->doc_creation_timestamp = time();
        $this->doc_modification_timestamp = $this->doc_creation_timestamp;
        // get default graphic vars
        $this->default_graphic_vars = $this->getGraphicVars();
        $this->header_xobj_autoreset = false;
        $this->custom_xmp = '';
        // Call cleanup method after script execution finishes or exit() is called.
        // NOTE: This will not be executed if the process is killed with a SIGTERM or SIGKILL signal.
        register_shutdown_function(array($this, '_destroy'), true);
    }

    // Page footer
    public function Footer() {

        if($this->cf == 1) {
            $html = '<table >
                        <tr>
                            <td style="width: 15%;border-bottom: 2px solid black;font-weight: bold;" class="data_border">Data:</td>
                            <td style="width:2%;"></td>
                            <td style="width: 80%; border-bottom: 2px solid black;font-weight: bold;" class="rubrica_border">Rubrica:</td>
                        </tr>
                        <tr>
                            <td style=" width: 15%;"></td>
                            <td style="width: 2%"></td>
                            <td style="width:20%;font-size: 8px;">Sementeira:</td>
                            <td style="width:20%;font-size: 8px;">Leitura/Repicagens:</td>
                            <td style="width:20%;font-size: 8px;">Resultado:</td>
                            <td style="width:20%;font-size: 8px;">Validado por:</td>
                        </tr>
                        <tr>
                            <td style="width: 15%;font-size: 8px;">____-____-____</td>
                            <td style="width: 2%;"></td>
                            <td style="width:20%;font-size: 8px;">________________________</td>
                            <td style="width:20%;font-size: 8px;">________________________</td>
                            <td style="width:20%;font-size: 8px;">________________________</td>
                            <td style="width:20%;font-size: 8px;">________________________</td>
                        </tr>
                        
                      </table>';
            $this->writeHTMLCell(0, 50, 5, 270,
                $html,
                $border = 0,
                $ln = 0,
                $fill = false,
                $reseth = true,
                $align = '',
                $autopadding = true
            );
        }

        else {
            $cur_y = $this->y;
            $this->SetTextColorArray($this->footer_text_color);
            //set style for cell border
            $line_width = (0.85 / $this->k);
            $this->SetLineStyle(array('width' => $line_width, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => $this->footer_line_color));
            //print document barcode
            $barcode = $this->getBarcode();
            if (!empty($barcode)) {
                $this->Ln($line_width);
                $barcode_width = round(($this->w - $this->original_lMargin - $this->original_rMargin) / 3);
                $style = array(
                    'position' => $this->rtl ? 'R' : 'L',
                    'align' => $this->rtl ? 'R' : 'L',
                    'stretch' => false,
                    'fitwidth' => true,
                    'cellfitalign' => '',
                    'border' => false,
                    'padding' => 0,
                    'fgcolor' => array(0, 0, 0),
                    'bgcolor' => false,
                    'text' => false
                );
                $this->write1DBarcode($barcode, 'C128', '', $cur_y + $line_width, '', (($this->footer_margin / 3) - $line_width), 0.3, $style, '');
            }
            $w_page = isset($this->l['w_page']) ? $this->l['w_page'] . ' ' : '';
            if (empty($this->pagegroups)) {
                $pagenumtxt = $w_page . $this->getAliasNumPage() . ' / ' . $this->getAliasNbPages();
            } else {
                $pagenumtxt = $w_page . $this->getPageNumGroupAlias() . ' / ' . $this->getPageGroupAlias();
            }
            $this->SetY($cur_y);
            //Print page number
            if ($this->getRTL()) {
                $this->SetX($this->original_rMargin);
                $this->Cell(0, 0, $pagenumtxt, 'T', 0, 'L');
            } else {
                $this->SetX($this->original_lMargin);
                $this->Cell(0, 0, $this->getAliasRightShift() . $pagenumtxt, 'T', 0, 'R');
            }
        }
    }


}