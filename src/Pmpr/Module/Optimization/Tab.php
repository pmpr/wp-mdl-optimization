<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62fab02fddc1b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization; use Pmpr\Common\Foundation\FormMaker\Admin\SettingTab; use Pmpr\Module\Optimization\Manipulate\ManipulateI18N; abstract class Tab extends SettingTab { const miaqqqiaweeausws = "\164\x6f\160\137\x73\160\145\145\x64"; const okeoeeywmosegiiy = "\x66\141\x69\154\x5f\163\x61\x66\145"; public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public static function emmegmsqoqieamce() : string { static $ucaaeyusaoameywi; if (isset($ucaaeyusaoameywi)) { goto kqsyqwwscwoswsgk; } if (function_exists("\147\x65\x74\x5f\156\x65\x74\167\157\x72\153") && get_network() && is_multisite() && !is_main_site()) { goto wskccugoccagaqcw; } $ucaaeyusaoameywi = ManipulateI18N::auksikwsewaywikq("\57"); goto sqyceswygksmmqqa; wskccugoccagaqcw: $agagqacyeciewusg = get_network(); $ucaaeyusaoameywi = set_url_scheme("\x68\x74\x74\x70\163\x3a\57\x2f" . $agagqacyeciewusg->domain . $agagqacyeciewusg->path); $ucaaeyusaoameywi = trailingslashit($ucaaeyusaoameywi); sqyceswygksmmqqa: kqsyqwwscwoswsgk: return $ucaaeyusaoameywi; } }
