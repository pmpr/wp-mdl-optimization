<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642c3cb2b5661             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\x6f\160\137\x73\160\x65\145\x64"; const okeoeeywmosegiiy = "\x66\x61\x69\154\x5f\163\x61\x66\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto uyeyscsaigimsqwq; } if (function_exists("\147\x65\x74\x5f\156\x65\164\x77\x6f\162\x6b") && get_network() && is_multisite() && !is_main_site()) { goto eekaiaeqewiqkkgm; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto kceuusiekagyeoys; eekaiaeqewiqkkgm: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\164\x74\160\163\72\57\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); kceuusiekagyeoys: uyeyscsaigimsqwq: return $ucaaeyusaoameywi; } }
