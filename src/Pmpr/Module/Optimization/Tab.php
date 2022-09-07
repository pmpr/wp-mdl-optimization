<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             631839907f5b7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\x74\x6f\x70\137\163\x70\145\x65\x64"; const okeoeeywmosegiiy = "\x66\141\x69\154\137\163\x61\x66\x65"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto eysuawiooiswaseq; } if (function_exists("\147\145\164\137\156\145\164\x77\157\x72\x6b") && get_network() && is_multisite() && !is_main_site()) { goto suscosoukqeyyqgs; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto kiewcwsykccgocuc; suscosoukqeyyqgs: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\164\164\160\163\x3a\x2f\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); kiewcwsykccgocuc: eysuawiooiswaseq: return $ucaaeyusaoameywi; } }
