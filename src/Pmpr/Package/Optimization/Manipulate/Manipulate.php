<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61d54d68de54c             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Manipulate; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Decorator\DecoratorSanitize; use Pmpr\Common\Foundation\Manipulate\Manipulate as BaseClass; use Pmpr\Common\Foundation\Manipulate\ManipulateHook; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Package\Optimization\Page\Model; class Manipulate extends BaseClass { public static function kcwoaesycwouwems() : bool { return ManipulateServer::get("\x70\141\x67\145") === Model::symcgieuakksimmu()->miwqiiqeegeqcwis(); } public static function qkaowsuomuucgcck() : bool { $wymyeyweagqomiim = false; if (isset($_SERVER["\x48\124\124\120\x53"])) { goto ikqqskkqqwmwssoo; } if (!(isset($_SERVER["\123\x45\122\x56\105\122\x5f\120\117\122\124"]) && "\x34\64\63" === (string) DecoratorSanitize::aoeoykwemwaqsikc(wp_unslash($_SERVER["\x53\105\122\126\x45\122\x5f\x50\117\x52\x54"])))) { goto iwekmyyccgiyuecc; } $wymyeyweagqomiim = true; iwekmyyccgiyuecc: goto aomysykcgikegiau; ikqqskkqqwmwssoo: $ueicioocowkieeme = DecoratorSanitize::aoeoykwemwaqsikc(wp_unslash($_SERVER["\x48\124\124\120\x53"])); if (!("\x6f\156" === strtolower($ueicioocowkieeme) || "\x31" === (string) $ueicioocowkieeme)) { goto ogsaaqsaogcqiouy; } $wymyeyweagqomiim = true; ogsaaqsaogcqiouy: aomysykcgikegiau: return $wymyeyweagqomiim; } public static function swuauuwqoauayowm() : bool { $ccikgcseeuuaaggm = [ "\x65\x6c\x65\155\145\156\x74\157\162\55\160\162\145\166\x69\x65\x77", "\x66\x6c\137\x62\165\x69\x6c\x64\145\x72", "\143\x74\137\142\165\x69\x6c\x64\145\x72", "\145\164\137\146\142", "\164\x76\145", ]; $ksaameoqigiaoigg = false; foreach ($ccikgcseeuuaaggm as $siykeiywomwwuoiw) { if (!isset($_GET[$siykeiywomwwuoiw])) { goto ogqmesokykywseys; } $ksaameoqigiaoigg = true; goto cwwmimggaaecmucw; ogqmesokykywseys: awoaooyoeoyeeqee: } cwwmimggaaecmucw: return $ksaameoqigiaoigg; } public static function eaiyegoagkgeowae() : bool { $weksiguqgqscsoee = false; if (!function_exists("\147\145\x74\x5f\x63\165\162\162\x65\156\x74\x5f\163\x63\162\x65\x65\156")) { goto ykomgumacooyomsk; } ykomgumacooyomsk: return $weksiguqgqscsoee; } public static function yoqccqiiaagckoou($migiiksoiymissge) { $ywmkwiwkosakssii = []; if (!ManipulateSetting::esoowymaimwcuecq()) { goto mqkmcysgoiaouiwm; } $ywmkwiwkosakssii["\x63\x6f\x6f\153\151\145\x73"] = ["\130\104\x45\102\125\x47\x5f\123\105\x53\x53\111\117\116" => "\130\104\105\x42\125\x47\x5f\105\x43\114\x49\x50\123\x45"]; mqkmcysgoiaouiwm: return wp_remote_get($migiiksoiymissge, $ywmkwiwkosakssii); } public static function maykkqauyaoqmqeu($aqykuigiuwmmcieu = self::emgcgiseaoouacge) : ?array { return ManipulatePost::mwoyqeeigwqoamiw(["\157\x75\x74\160\165\164" => $aqykuigiuwmmcieu, "\145\x78\x63\154\165\144\x65" => ["\x6a\x65\x74\x2d\155\145\x6e\x75", "\x61\x74\x74\x61\143\x68\x6d\x65\x6e\x74", "\167\143\137\x70\x72\157\144\165\143\x74\x5f\x74\x61\142", "\152\145\x74\x2d\164\150\x65\x6d\145\x2d\x63\157\x72\145", "\145\x6c\x65\155\145\x6e\164\157\162\137\x6c\151\x62\x72\x61\162\171", "\141\x73\x74\x72\x61\x2d\141\144\166\141\156\143\145\144\x2d\150\x6f\x6f\x6b"]]); } public static function imyuqaesowgauoam($sciomagaqmgggsiu = []) : array { $egeqeuwiswigogyk = ["\x68\x6f\x6d\x65" => ManipulateServer::gmigwwwmwemyaayy("\57")]; if (!ManipulatePage::eokiwumgqmymgyoa()) { goto kosaqwikueyksqmw; } $egeqeuwiswigogyk["\142\x6c\x6f\147"] = ManipulatePage::symuoymymumgwkaw(); kosaqwikueyksqmw: if ($sciomagaqmgggsiu) { goto gicyayswqyuoekcq; } $sciomagaqmgggsiu = ManipulatePost::mwoyqeeigwqoamiw(); gicyayswqyuoekcq: foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) { $migiiksoiymissge = ManipulatePost::mqgeysameoesmuqw($useksmwkuswkwcqg); if (!($migiiksoiymissge && !in_array($migiiksoiymissge, $egeqeuwiswigogyk))) { goto cuumeogeomowqisc; } $egeqeuwiswigogyk[] = $migiiksoiymissge; cuumeogeomowqisc: uiosisocuwokwkie: } iikiiioqiyegyaak: $wyoiwuqokyeeuguk = ManipulatePost::emcckouwaoassquc($sciomagaqmgggsiu); foreach ($wyoiwuqokyeeuguk as $post) { $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($post); $egeqeuwiswigogyk[] = $migiiksoiymissge; qmkaeeomgkwggoyo: } gcckqucukawcasgk: return (array) DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\147\145\x74\x5f\160\165\x62\154\151\x63\x5f\160\x65\x72\x6d\141\154\x69\x6e\x6b\x73"), $egeqeuwiswigogyk); } public static function asywsogcwameaaau(?string $omkysikckkcieckq) : bool { return ManipulatePost::igawqaomowicuayw("\157\160\x74\x69\155\x69\x7a\x61\x74\151\x6f\156\137\x65\x78\143\x6c\165\x64\145\x5f{$omkysikckkcieckq}"); } public static function yygaymuiikwoakuc($aokagokqyuysuksm, $meqocwsecsywiiqs = null, $ymqmyyeuycgmigyo = null) : array { $migiiksoiymissge = ['', '']; $post = ManipulatePost::get($aokagokqyuysuksm); if (!$post) { goto gmwykkouysyaqwqm; } $sqeykgyoooqysmca = ManipulatePost::gueasuouwqysmomu($post, true); $cqeiqmmwywksgiko = ManipulatePost::ucwmcwqmqwaymkkc($post); $imqwkwqqwcysuice = $post->post_date; $gqwoukkugawigkik = $post->post_name; if (!in_array($cqeiqmmwywksgiko, ["\144\x72\141\x66\164", "\x70\x65\156\144\151\x6e\x67"], true)) { goto csammceowmqwaamq; } $post->post_status = "\160\165\142\154\151\x73\x68"; $post->post_name = DecoratorSanitize::meqocwsecsywiiqs($post->post_name ? $post->post_name : $post->post_title, $post->ID); csammceowmqwaamq: if (is_null($ymqmyyeuycgmigyo)) { goto ocaguquugeamqckq; } $post->post_name = sanitize_title($ymqmyyeuycgmigyo ? $ymqmyyeuycgmigyo : $meqocwsecsywiiqs, $post->ID); ocaguquugeamqckq: $post->post_name = wp_unique_post_slug($post->post_name, $post->ID, $post->post_status, $post->post_type, $post->post_parent); $post->filter = "\163\141\x6d\x70\154\x65"; $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($post); $migiiksoiymissge = str_replace("\x25{$sqeykgyoooqysmca->name}\45", "\x25\x70\x61\147\145\x6e\141\155\145\45", $migiiksoiymissge); if (!$sqeykgyoooqysmca->hierarchical) { goto cogywoqcqummsyus; } $xeciwimgioieayek = get_page_uri($post); $xeciwimgioieayek = untrailingslashit($xeciwimgioieayek); $xeciwimgioieayek = strrev(stristr(strrev($xeciwimgioieayek), "\x2f")); $xeciwimgioieayek = untrailingslashit($xeciwimgioieayek); $xeciwimgioieayek = DecoratorHook::sscegwueamckwmcy("\145\x64\151\164\x61\142\x6c\145\137\x73\x6c\x75\147", $xeciwimgioieayek, $post); if (empty($xeciwimgioieayek)) { goto eekcoeikaeaaeyii; } $xeciwimgioieayek .= "\x2f"; eekcoeikaeaaeyii: $migiiksoiymissge = str_replace("\45\160\141\147\x65\156\141\155\x65\45", "{$xeciwimgioieayek}\45\x70\x61\x67\145\x6e\141\x6d\x65\45", $migiiksoiymissge); cogywoqcqummsyus: $migiiksoiymissge = [$migiiksoiymissge, DecoratorHook::sscegwueamckwmcy("\x65\x64\151\x74\x61\x62\x6c\x65\137\x73\x6c\x75\147", $post->post_name, $post)]; $post->post_status = $cqeiqmmwywksgiko; $post->post_date = $imqwkwqqwcysuice; $post->post_name = $gqwoukkugawigkik; unset($post->filter); gmwykkouysyaqwqm: return $migiiksoiymissge; } public static function acwukecimosckkic($migiiksoiymissge, $suaemuyiacqyugsm = null) : ?string { $geyqgckicikewwke = DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\x6f\160\x74\137\151\163\137\x6f\160\x74\151\155\151\x7a\145\x64"), [], $migiiksoiymissge, $suaemuyiacqyugsm); $iueymcwwscwqkiyq = ''; if (!$geyqgckicikewwke || !in_array(true, $geyqgckicikewwke, true)) { goto uaukmuiwskcemcsw; } if (in_array(false, $geyqgckicikewwke, true)) { goto ugqwuugsweqgmywk; } $iueymcwwscwqkiyq = self::amcogigwsaqssuai; ugqwuugsweqgmywk: goto sockeswygwcskeuq; uaukmuiwskcemcsw: $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; sockeswygwcskeuq: return $iueymcwwscwqkiyq; } public static function oeqqgiayuaouaeuc($migiiksoiymissge, $suaemuyiacqyugsm = null) { $iueymcwwscwqkiyq = self::acwukecimosckkic($migiiksoiymissge, $suaemuyiacqyugsm); switch ($iueymcwwscwqkiyq) { case self::uasuowkaguiwoouw: $wkaqekwwgqsqwcoi = IconFontawesomeInterface::mqwqioccoywwoysm; $sqeykgyoooqysmca = self::wyaqwomqwwaoiwas; $meqocwsecsywiiqs = __("\116\157\164\x20\x4f\160\164\151\155\x69\x7a\x65\144", PR__PKG__OPTIMIZATION); goto mkwkkmkgiqiamacc; case self::amcogigwsaqssuai: $wkaqekwwgqsqwcoi = IconFontawesomeInterface::umkismkaiusiugkg; $sqeykgyoooqysmca = self::ckcawaoawwioqecq; $meqocwsecsywiiqs = __("\117\x70\x74\151\x6d\151\x7a\x65\144", PR__PKG__OPTIMIZATION); goto mkwkkmkgiqiamacc; default: $wkaqekwwgqsqwcoi = IconFontawesomeInterface::oigokooooayswskg; $sqeykgyoooqysmca = self::ecioqysekgaasegg; $meqocwsecsywiiqs = __("\116\x6f\164\40\103\157\x6d\160\154\145\164\x65\x6c\171\40\x4f\x70\164\x69\155\x69\172\145\144", PR__PKG__OPTIMIZATION); goto mkwkkmkgiqiamacc; } uaqackioaiqwcocy: mkwkkmkgiqiamacc: return ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\x63\x6c\141\163\x73" => "\151\x63\157\156\55\x6c\147\40\151\143\157\x6e\x2d{$sqeykgyoooqysmca}", "\x74\x69\164\x6c\145" => $meqocwsecsywiiqs]); } }
