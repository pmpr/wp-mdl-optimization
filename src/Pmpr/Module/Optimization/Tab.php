<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62c868b328afe             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; class Tab extends SettingTab { const miaqqqiaweeausws = "\164\157\160\x5f\163\x70\x65\145\x64"; const okeoeeywmosegiiy = "\x66\141\x69\x6c\137\x73\141\146\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto yykqaowwsqgqysmq; } if (function_exists("\147\145\x74\137\156\x65\x74\x77\x6f\162\153") && get_network() && is_multisite() && !is_main_site()) { goto oeocukauoyosicso; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto suqceasgacskcmkc; oeocukauoyosicso: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\164\164\x70\x73\x3a\57\57" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); suqceasgacskcmkc: yykqaowwsqgqysmq: return $ucaaeyusaoameywi; } }
