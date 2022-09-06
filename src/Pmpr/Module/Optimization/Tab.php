<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63171273d0496             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\164\x6f\160\x5f\x73\160\145\145\x64"; const okeoeeywmosegiiy = "\x66\x61\x69\154\137\x73\141\146\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto eysuawiooiswaseq; } if (function_exists("\147\x65\164\137\156\145\x74\x77\x6f\162\153") && get_network() && is_multisite() && !is_main_site()) { goto suscosoukqeyyqgs; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto kiewcwsykccgocuc; suscosoukqeyyqgs: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\150\x74\164\x70\x73\72\57\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); kiewcwsykccgocuc: eysuawiooiswaseq: return $ucaaeyusaoameywi; } }
