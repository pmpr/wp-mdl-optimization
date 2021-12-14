<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b8710debefd             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset; use Pmpr\Common\Foundation\Decorator\DecoratorI18N; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Package\Optimization\Tab; class Setting extends Tab { const MINIFY_ = "\155\x69\156\151\146\x79\x5f"; const MINIFY_JS = self::MINIFY_ . "\152\163"; const MINIFY_CSS = self::MINIFY_ . "\143\x73\163"; const MINIFY_HTML = self::MINIFY_ . "\x68\x74\155\x6c"; const ENABLE_MINIFY = self::ENABLE . "\x5f\x6d\x69\156\151\146\x79"; const CDN_ = "\x63\x64\x6e\137"; const CDN_FONT = self::CDN_ . "\x66\x6f\156\164"; const CDN_FONT_URL = self::CDN_ . "\x66\157\156\164\137\x75\162\x6c"; const CDN_FONT_NAME = self::CDN_ . "\x66\x6f\x6e\x74\137\x6e\x61\x6d\145"; const CDN_ENABLE_JSDELIVER = self::CDN_ . "\145\156\141\x62\x6c\x65\137\152\x73\144\x65\154\151\166\145\x72"; const CRITICAL_ = "\x63\x72\151\x74\x69\x63\141\x6c\137"; const CRITICAL_EXTRA_CSS = self::CRITICAL_ . "\x65\170\x74\x72\x61\x5f\x63\x73\x73"; const ENABLE_CRITICAL_CSS = self::ENABLE . self::CRITICAL_ . "\143\x73\163"; const MEDIA_ = "\155\145\144\x69\141\x5f"; const LAZY_LOAD_ = self::MEDIA_ . "\154\141\172\171\x5f\154\x6f\x61\144\x5f"; const LAZY_LOAD_ENABLE = self::LAZY_LOAD_ . "\145\x6e\x61\142\154\x65"; const LAZY_LOAD_IMAGES = self::LAZY_LOAD_ . "\x69\155\x61\147\x65\163"; const IMAGE_COLOR_DOMINATOR = self::MEDIA_ . "\x69\155\x61\147\x65\x5f\143\157\x6c\x6f\162\137\144\x6f\155\151\x6e\x61\164\x6f\162"; const DOMINATOR_DEFAULT_COLOR = self::MEDIA_ . "\x64\157\x6d\151\156\x61\x74\x6f\162\x5f\144\x65\146\x61\x75\x6c\164\x5f\143\157\x6c\x6f\x72"; const LAZY_LOAD_IFRAME_AND_VIDEOS = self::LAZY_LOAD_ . "\x69\146\162\x61\155\x65\137\x61\x6e\144\137\166\151\x64\145\157\163"; const CLEANUP_ = "\143\154\145\x61\x6e\165\x70\137"; const ADD_BLANK_FAVICON = self::CLEANUP_ . "\141\x64\x64\x5f\142\x6c\x61\156\x6b\x5f\146\x61\166\151\143\157\156"; const SPECIFY_DIMENSIONS = self::CLEANUP_ . "\x73\160\x65\143\x69\x66\171\137\x64\x69\x6d\x65\x6e\x73\151\157\x6e\x73"; const REMOVE_HTTP_PROTOCOL = self::CLEANUP_ . "\162\145\x6d\x6f\166\145\137\150\x74\164\x70\137\x70\x72\x6f\x74\x6f\x63\157\x6c"; const IMAGE_EXTERNAL_SPECIFY_DIMENSIONS = self::SPECIFY_DIMENSIONS . "\x5f\x65\x78\x74\x65\x72\x6e\x61\154\x5f\x69\x6d\x61\x67\145\x73"; const DISABLE_XMLRPC = self::CLEANUP_ . "\170\155\154\162\160\x63"; const HIDE_WP_VERSION = self::CLEANUP_ . "\x68\x69\144\x65\137\x77\x70\x5f\166\x65\x72\x73\151\157\x6e"; const REMOVE_RSD_LINK = self::CLEANUP_ . "\x72\163\x64\x5f\x6c\151\x6e\x6b"; const REMOVE_REST_API = self::CLEANUP_ . "\162\x65\163\x74\137\x61\x70\x69"; const REMOVE_SHORTLINK = self::CLEANUP_ . "\163\x68\157\162\164\154\x69\x6e\153"; const REMOVE_WLW_MANIFEST_LINK = self::CLEANUP_ . "\167\154\x77\x5f\x6d\x61\156\151\146\x65\x73\x74\x5f\x6c\151\x6e\x6b"; const DISABLE_EMOJIS = self::CLEANUP_ . "\x65\155\x6f\152\x69\x73"; const DISABLE_EMBEDS = self::CLEANUP_ . "\145\x6d\x62\x65\144\x73"; const DISABLE_DASHICONS = self::CLEANUP_ . "\144\x61\163\x68\151\143\x6f\x6e\163"; const DISABLE_GUTENBERG_CSS = self::CLEANUP_ . "\147\x75\164\145\156\142\145\162\x67\137\143\163\163"; const DISABLE_JQUERY_MIGRATE = self::CLEANUP_ . "\152\161\165\145\162\171\x5f\155\x69\x67\x72\x61\164\x65"; const DISABLE_PASSWORD_STRENGTH_METER = self::CLEANUP_ . "\160\x61\163\163\167\157\162\144\x5f\163\x74\x72\145\156\147\x74\150\137\x6d\x65\164\x65\x72"; const LOAD_DELAY_ = "\x6c\x6f\x61\144\137\144\145\x6c\141\171\137"; const DELAY_LOAD_STYLE = self::LOAD_DELAY_ . "\x6c\157\141\144\x5f\163\x74\x79\x6c\145"; const DELAY_LOAD_STYLE_CDN = self::DELAY_LOAD_STYLE . "\x5f\143\x64\x6e"; const DELAY_LOAD_STYLE_EXCLUDE = self::DELAY_LOAD_STYLE . "\x5f\145\170\x63\154\165\144\145"; const DELAY_LOAD_JAVASCRIPT = self::LOAD_DELAY_ . "\x6c\x6f\x61\x64\x5f\152\141\x76\x61\163\143\x72\151\160\x74"; const DELAY_LOAD_JAVASCRIPT_CDN = self::DELAY_LOAD_JAVASCRIPT . "\137\x63\144\156"; const DELAY_LOAD_JAVASCRIPT_EXCLUDE = self::DELAY_LOAD_JAVASCRIPT . "\137\145\x78\143\x6c\x75\x64\145"; public function aucimgwswmgaocae($ywoucyskcquysiwc = []) : array { $yuwymayicwwqiske = $this->aakmagwggmkoiiyu() . "\x5f\x61\163\x73\x65\x74\x73"; $ywoucyskcquysiwc[] = self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\x5f\164\x61\142", __("\x41\x73\163\x65\164\163", PR__PKG__OPTIMIZATION))->sikqggwmmykuiymy($this->wseoiekkiwuiuacg($yuwymayicwwqiske))->sikqggwmmykuiymy($this->ecmoqcoyysugcqey($yuwymayicwwqiske))->sikqggwmmykuiymy($this->aiguiusgagaacige($yuwymayicwwqiske))->sikqggwmmykuiymy($this->oyookmikikgkcgas($yuwymayicwwqiske))->sikqggwmmykuiymy($this->quqkimmaaoeumckc($yuwymayicwwqiske))->sikqggwmmykuiymy($this->wywgqayqssuqewyw($yuwymayicwwqiske))->saemoowcasogykak(IconFontawesomeInterface::ICON_LAYER_GROUP)->jyumyyugiwwiqomk(10); return parent::aucimgwswmgaocae($ywoucyskcquysiwc); } public function wseoiekkiwuiuacg($yuwymayicwwqiske) { return self::cgygmuguceeosoey("{$yuwymayicwwqiske}\137\x63\144\x6e", __("\103\x6f\156\x74\x65\x6e\x74\x20\x44\145\x6c\151\166\145\x72\x79\40\116\145\x74\x77\157\162\153\40\50\x43\x44\116\x29", PR__PKG__OPTIMIZATION))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\x5f\143\156\144\137\x6a\x73\144\145\x6c\151\166\x65\162", __("\x4a\123\104\145\154\x69\x76\x65\162", PR__PKG__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::CDN_ENABLE_JSDELIVER, __("\105\x6e\x61\x62\154\145\x20\112\x53\104\x65\x6c\x69\166\x65\162", PR__PKG__OPTIMIZATION), __("\x43\150\145\x63\153\40\x74\150\x69\163\x20\x69\x74\x65\155\x20\x74\x6f\40\x72\145\x70\154\x61\x63\145\x20\x72\x65\163\x6f\165\x72\143\145\163\x20\x62\x79\x20\112\123\104\x65\154\151\x76\x65\162\40\x63\144\156\56", PR__PKG__OPTIMIZATION))->yeigkegagskeaaim())->saemoowcasogykak(IconFontawesomeInterface::ICON_GLOBE))->saemoowcasogykak(IconFontawesomeInterface::ICON_DIAGRAM_PROJECT); } public function ecmoqcoyysugcqey($yuwymayicwwqiske) { return self::cgygmuguceeosoey("{$yuwymayicwwqiske}\x5f\x6d\x65\x64\151\141", __("\115\145\144\x69\141", PR__PKG__OPTIMIZATION))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\x5f\155\x65\144\x69\x61\137\x6c\141\x7a\x79\154\157\141\144", __("\x4c\x61\172\171\154\157\141\x64", PR__PKG__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::LAZY_LOAD_ENABLE, __("\x45\x6e\x61\142\154\145\40\x4c\x61\x7a\171\154\157\141\144", PR__PKG__OPTIMIZATION))->agywyaaquwawwuiy([self::LAZY_LOAD_IMAGES, self::LAZY_LOAD_IFRAME_AND_VIDEOS]))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::LAZY_LOAD_IMAGES, __("\111\155\x61\x67\145\x73", PR__PKG__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::LAZY_LOAD_IFRAME_AND_VIDEOS, __("\151\x46\x72\x61\x6d\x65\x20\x61\x6e\144\x20\x56\x69\x64\x65\157\163", PR__PKG__OPTIMIZATION)))->saemoowcasogykak(IconFontawesomeInterface::ICON_SNOOZE))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\x5f\155\145\x64\151\x61\137\144\x6f\x6d\151\156\141\164\157\162", __("\x43\x6f\x6c\x6f\x72\x20\x44\157\155\151\156\x61\164\157\x72", PR__PKG__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::IMAGE_COLOR_DOMINATOR, __("\111\155\141\147\x65\40\x43\x6f\154\157\x72\x20\x44\x6f\155\151\x6e\x61\164\157\x72", PR__PKG__OPTIMIZATION))->agywyaaquwawwuiy(self::DOMINATOR_DEFAULT_COLOR))->mkksewyosgeumwsa(self::mwmcsiqiwkweayuw(self::DOMINATOR_DEFAULT_COLOR, __("\104\x65\146\141\x75\154\164\x20\x44\157\x6d\151\x6e\x61\164\x6f\x72\x20\103\x6f\x6c\157\162", PR__PKG__OPTIMIZATION))->eyygsasuqmommkua("\x23\x66\x66\146\x66\x66\146"))->saemoowcasogykak(IconFontawesomeInterface::ICON_BRUSH))->saemoowcasogykak(IconFontawesomeInterface::ICON_FILE_VIDEO); } public function wywgqayqssuqewyw($yuwymayicwwqiske) : MetaBox { $mkqqqewsokcswckc = __("\x43\x68\x65\x63\x6b\x20\x74\150\151\x73\x20\x69\x74\145\x6d\40\151\x66\40\x79\157\165\x20\167\x61\156\x74\40\155\x69\x6e\x69\x66\x79\x20\45\x73\x2e", PR__PKG__OPTIMIZATION); return self::cgygmuguceeosoey("{$yuwymayicwwqiske}\137\x6d\151\x6e\x69\x66\171", __("\x4d\151\156\x69\146\171", PR__PKG__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::ENABLE_MINIFY, __("\105\x6e\141\x62\x6c\145\40\115\151\x6e\x69\x66\x79", PR__PKG__OPTIMIZATION))->agywyaaquwawwuiy([self::MINIFY_HTML, self::MINIFY_CSS, self::MINIFY_JS])->ccmwycqioaicegoc(__("\103\150\x65\x63\x6b\40\164\x68\151\x73\x20\x69\164\145\x6d\40\164\x6f\40\145\x6e\141\x62\x6c\x65\x20\155\151\156\151\146\x79\x20\x66\165\x6e\143\x74\151\x6f\156\x61\154\x69\x74\171\56", PR__PKG__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::MINIFY_HTML, __("\x4d\x69\156\x69\x66\x79\40\110\124\x4d\x4c", PR__PKG__OPTIMIZATION), sprintf($mkqqqewsokcswckc, "\x3c\x63\x6f\144\145\x3e\x48\x54\x4d\114\74\x2f\143\x6f\x64\x65\x3e")))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::MINIFY_CSS, __("\115\x69\x6e\x69\x66\x79\40\x43\123\x53", PR__PKG__OPTIMIZATION), sprintf($mkqqqewsokcswckc, "\74\143\x6f\144\145\x3e\103\123\x53\74\x2f\x63\x6f\144\x65\x3e")))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::MINIFY_JS, __("\115\x69\156\151\x66\171\40\112\123", PR__PKG__OPTIMIZATION), sprintf($mkqqqewsokcswckc, "\x3c\143\157\x64\x65\x3e\x4a\141\x76\x61\123\x63\x72\151\x70\164\74\57\143\x6f\x64\x65\x3e")))->saemoowcasogykak(IconFontawesomeInterface::ICON_CROP); } public function aiguiusgagaacige($yuwymayicwwqiske) { return self::cgygmuguceeosoey("{$yuwymayicwwqiske}\137\143\154\145\141\156\165\x70", __("\x43\154\x65\141\156\165\160", PR__PKG__OPTIMIZATION))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\137\143\x6c\145\141\156\165\x70\137\x69\155\141\x67\145", __("\111\x6d\141\x67\x65\163", PR__PKG__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::ADD_BLANK_FAVICON, __("\101\x64\144\x20\102\154\x61\x6e\153\x20\106\141\166\x69\x63\x6f\156", PR__PKG__OPTIMIZATION), __("\101\144\144\40\141\x20\x62\x6c\x61\x6e\153\40\146\x61\x76\x69\x63\157\156\x20\x74\x6f\x20\x79\x6f\x75\x72\40\127\x6f\162\x64\x50\162\145\x73\x73\x20\150\145\x61\144\x65\x72\40\167\x68\151\x63\x68\40\x77\151\x6c\154\40\160\x72\145\166\x65\x6e\164\40\141\40\115\151\163\163\151\156\x67\x20\x46\x61\x76\x69\143\x6f\x6e\x20\x6f\162\40\64\60\64\x20\145\x72\162\x6f\162\56", PR__PKG__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::SPECIFY_DIMENSIONS, __("\x53\160\145\x63\x69\146\171\x20\x49\155\141\x67\x65\x20\x44\151\155\x65\x6e\163\151\x6f\x6e\x73", PR__PKG__OPTIMIZATION), __("\101\144\x64\40\x77\x69\x64\164\150\x20\x61\x6e\x64\40\150\x65\151\147\150\164\x20\x61\164\x74\x72\151\142\x75\x74\145\40\164\157\40\151\155\x61\x67\x65\x73\40\151\x66\x20\x6e\157\164\x20\x65\170\151\163\164\x2e", PR__PKG__OPTIMIZATION))->agywyaaquwawwuiy(self::IMAGE_EXTERNAL_SPECIFY_DIMENSIONS))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::IMAGE_EXTERNAL_SPECIFY_DIMENSIONS, __("\x45\170\164\145\x72\156\x61\154\40\x49\155\141\147\x65\163\40\x44\151\155\145\x6e\163\151\x6f\x6e\x73", PR__PKG__OPTIMIZATION), __("\x44\x6f\x20\163\160\145\x63\151\146\171\x20\151\x6d\x61\x67\x65\x20\144\x69\x6d\x65\156\163\x69\x6f\156\163\x20\146\157\162\40\x65\170\164\145\162\x6e\141\154\40\151\155\141\x67\x65\x73\56", PR__PKG__OPTIMIZATION)))->saemoowcasogykak(IconFontawesomeInterface::ICON_IMAGE_POLAROID))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\137\x63\154\x65\x61\x6e\165\160\x5f\152\163\137\143\x73\x73", __("\112\123\x20\x26\x20\x43\x53\x53\40\x26\x20\110\x54\115\x4c", PR__PKG__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::DISABLE_EMOJIS, __("\x44\x69\163\141\x62\x6c\145\x20\x45\155\157\x6a\151\163", PR__PKG__OPTIMIZATION), __("\x52\x65\155\157\166\145\163\x20\x57\157\162\144\x50\x72\x65\163\x73\x20\x45\155\157\x6a\x69\163\x20\112\141\x76\x61\123\143\162\151\x70\x74\x20\146\x69\x6c\x65\x2e", PR__PKG__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::DISABLE_EMBEDS, __("\104\x69\x73\x61\142\x6c\x65\x20\105\x6d\x62\145\144\x73", PR__PKG__OPTIMIZATION), __("\122\x65\155\157\166\x65\163\40\x57\x6f\162\144\120\162\145\x73\163\x20\105\155\x62\x65\x64\40\112\x61\166\x61\x53\x63\x72\x69\160\x74\40\146\x69\154\145\56", PR__PKG__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::DISABLE_JQUERY_MIGRATE, __("\x52\145\155\x6f\166\x65\40\x6a\x51\165\x65\x72\171\x20\x4d\x69\147\x72\141\x74\145", PR__PKG__OPTIMIZATION), __("\x52\x65\155\x6f\166\x65\x73\40\152\121\165\x65\162\171\40\x4d\x69\x67\162\141\164\145\40\112\141\166\x61\x53\x63\x72\151\x70\x74\40\146\x69\154\145\x2e", PR__PKG__OPTIMIZATION))->ooowowweyusommmm(__("\124\150\151\163\x20\143\x6f\165\x6c\x64\40\x62\162\x65\141\153\40\164\x68\151\x6e\147\163\41", PR__PKG__OPTIMIZATION), __("\124\150\x69\x73\40\143\157\165\154\144\x20\142\x72\145\x61\153\x20\164\x68\151\x6e\147\163\x21", PR__PKG__OPTIMIZATION))->yeigkegagskeaaim())->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::DISABLE_DASHICONS, __("\104\151\x73\141\x62\154\145\40\104\141\x73\x68\151\143\x6f\x6e\x73", PR__PKG__OPTIMIZATION), __("\x44\151\163\x61\x62\x6c\x65\x73\x20\x64\x61\x73\150\151\x63\157\x6e\163\40\x6f\156\40\x74\150\145\x20\x66\162\x6f\156\164\40\x65\156\144\40\x77\150\x65\156\x20\x6e\x6f\164\x20\154\157\x67\x67\145\144\x20\x69\x6e\56", PR__PKG__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::DISABLE_GUTENBERG_CSS, __("\x44\151\x73\x61\x62\154\x65\40\x47\165\x74\x65\x6e\x62\x65\162\x67\x20\x42\154\157\143\153\40\114\151\x62\162\x61\x72\171", PR__PKG__OPTIMIZATION), __("\104\x69\163\x61\142\x6c\x65\163\40\147\x75\x74\145\156\x62\145\162\147\40\x62\x6c\x6f\x63\153\x20\x6c\151\142\162\x61\162\171\x20\157\156\40\x74\x68\x65\40\146\162\157\x6e\x74\x20\145\x6e\144\40\x77\150\145\156\x20\x6e\x6f\x74\x20\154\x6f\147\x67\x65\144\x20\x69\156\56", PR__PKG__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::DISABLE_PASSWORD_STRENGTH_METER, __("\104\151\x73\141\x62\154\x65\x20\x50\x61\x73\x73\167\x6f\x72\x64\x20\x53\164\162\145\x6e\x67\x74\x68\x20\x4d\145\164\145\162", PR__PKG__OPTIMIZATION), __("\122\x65\155\157\166\x65\x73\x20\127\157\x72\144\x50\x72\145\x73\x73\x20\x61\x6e\144\40\x57\x6f\157\103\x6f\155\155\x65\x72\143\145\40\x50\x61\163\x73\167\157\162\144\40\x53\x74\x72\145\156\x67\164\150\x20\115\145\164\145\x72\x20\163\x63\162\x69\160\x74\163\40\x66\x72\157\155\x20\156\x6f\156\x20\145\x73\163\x65\156\x74\151\141\x6c\40\160\x61\147\145\x73\x2e", PR__PKG__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::REMOVE_HTTP_PROTOCOL, __("\122\x65\155\157\x76\x65\40\x48\124\x54\120\40\x50\162\x6f\x74\157\x63\x6f\x6c", PR__PKG__OPTIMIZATION), sprintf(__("\x52\145\x70\154\141\x63\145\40\x25\163\x20\x77\x69\164\x68\40\x25\x73\x20\151\x6e\40\x25\163\40\x74\141\147\x73\x2e", PR__PKG__OPTIMIZATION), "\x3c\143\x6f\x64\x65\x3e\x68\x74\x74\160\x3c\57\143\157\x64\x65\76\174\x3c\x63\x6f\144\145\76\x68\164\x74\160\x73\74\57\143\x6f\x64\145\76", "\x3c\x63\x6f\144\x65\x3e\x2f\x2f\74\x2f\x63\157\144\x65\76", "\x3c\143\157\144\x65\x3e\163\x63\162\151\x70\164\74\57\143\157\x64\x65\76\x7c\x3c\x63\157\144\x65\76\x6c\151\156\x6b\74\57\143\157\144\x65\x3e\x7c\x3c\x63\x6f\144\145\x3e\x69\x6d\x67\x3c\57\x63\x6f\144\145\76\x7c\74\143\x6f\144\x65\76\146\157\162\x6d\x3c\x2f\x63\x6f\144\x65\76")))->saemoowcasogykak(IconFontawesomeInterface::ICON_CODE))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\137\x63\154\145\x61\156\x75\x70\137\x68\x65\x61\x64\x5f\164\x61\x67\163", __("\x48\x65\x61\144\40\124\141\147\x73", PR__PKG__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::DISABLE_XMLRPC, __("\104\x69\163\x61\142\x6c\x65\40\x58\115\114\55\122\120\x43", PR__PKG__OPTIMIZATION), __("\x52\x65\x6d\x6f\166\x65\163\40\127\157\162\x64\x50\x72\145\163\x73\x20\x58\x4d\x4c\x2d\x52\120\103\x20\x66\165\156\x63\x74\151\157\x6e\x61\154\151\164\171\x2e", PR__PKG__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::REMOVE_RSD_LINK, __("\x52\x65\x6d\157\x76\x65\x20\x52\x53\x44\40\x4c\151\156\153", PR__PKG__OPTIMIZATION), __("\x52\x65\155\157\x76\x65\x20\x52\x53\104\40\50\x52\x65\141\x6c\x20\x53\x69\155\160\154\145\40\x44\151\163\x63\x6f\x76\145\x72\x79\x29\40\x6c\x69\x6e\153\x20\164\141\x67\x2e", PR__PKG__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::HIDE_WP_VERSION, __("\110\151\144\x65\40\x57\x50\40\126\145\162\x73\151\x6f\x6e", PR__PKG__OPTIMIZATION), __("\124\x68\x69\163\40\x69\x73\40\147\157\x6f\x64\40\146\x6f\162\40\163\145\143\165\x72\151\x74\171\x20\160\165\x72\x70\157\x73\145\163\x20\141\163\x20\x77\x65\x6c\x6c\x2c\40\x73\x69\x6e\x63\x65\x20\x69\x74\x20\x68\x69\x64\145\163\x20\x74\x68\x65\x20\x57\x6f\162\144\120\x72\145\163\163\40\x76\x65\162\x73\151\157\x6e\x20\171\x6f\x75\47\162\x65\x20\165\163\x69\x6e\x67\56", PR__PKG__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::REMOVE_WLW_MANIFEST_LINK, __("\x52\x65\155\x6f\166\145\x20\x77\x6c\167\155\141\156\151\x66\145\x73\x74\40\114\x69\x6e\x6b", PR__PKG__OPTIMIZATION), __("\111\x66\40\x79\x6f\x75\x20\144\x6f\40\x6e\157\164\40\x75\163\x65\40\x57\x69\x6e\x64\157\167\163\40\114\151\x76\145\40\x57\162\151\164\145\x72\40\x74\x6f\x20\145\144\x69\164\x20\171\x6f\x75\x72\40\x62\x6c\x6f\147\x20\x63\x6f\156\164\x65\x6e\164\x73\x2c\40\164\x68\x65\156\x20\151\x74\47\x73\40\163\141\x66\145\x20\x74\157\40\x72\x65\x6d\157\166\145\40\164\150\x69\163\x2e", PR__PKG__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::REMOVE_SHORTLINK, __("\x52\145\155\x6f\166\145\x20\123\x68\157\162\x74\x6c\151\x6e\x6b", PR__PKG__OPTIMIZATION), __("\101\162\x65\40\171\x6f\x75\40\x75\163\x69\156\147\40\123\x45\117\40\x66\x72\x69\x65\156\144\x6c\x79\x20\125\122\x4c\163\x20\141\156\x64\40\x64\x6f\40\156\157\164\40\x6e\x65\x65\x64\40\164\x68\145\40\x64\x65\x66\x61\x75\154\x74\40\x57\x6f\162\x64\120\x72\x65\163\163\40\163\x68\157\162\x74\x6c\x69\156\x6b\77\40\x79\157\165\40\x63\141\156\x20\162\x65\x6d\157\166\145\40\164\x68\x69\163\x2e", PR__PKG__OPTIMIZATION)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::REMOVE_REST_API, __("\122\145\155\x6f\166\x65\40\122\105\123\124\x20\x41\x50\x49", PR__PKG__OPTIMIZATION), __("\101\x72\145\40\x79\157\x75\x20\x61\x63\143\x65\163\x73\x69\x6e\x67\x20\x79\157\x75\x72\40\x63\x6f\x6e\x74\145\156\x74\40\164\x68\162\157\165\x67\x68\x20\145\x6e\144\160\157\x69\x6e\164\x73\x3f\x20\x49\146\x20\156\157\x74\x2c\40\x79\157\x75\x20\x63\x61\156\40\162\x65\x6d\x6f\x76\x65\40\164\x68\151\x73\56", PR__PKG__OPTIMIZATION)))->saemoowcasogykak(IconFontawesomeInterface::ICON_TAGS))->saemoowcasogykak(IconFontawesomeInterface::ICON_BROOM); } public function quqkimmaaoeumckc($yuwymayicwwqiske) { return self::cgygmuguceeosoey("{$yuwymayicwwqiske}\x5f\143\x72\151\164\151\143\141\154\x5f\145\170\164\162\x61\x63\x74\151\157\x6e", __("\103\162\151\x74\151\143\141\x6c\x20\x45\170\164\162\x61\x63\164\151\157\156", PR__PKG__OPTIMIZATION))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\137\x63\x72\x69\164\151\x63\x61\154\x5f\143\x73\x73", __("\103\x72\x69\x74\x69\143\x61\154\x20\103\x53\123", PR__PKG__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::ENABLE_CRITICAL_CSS, __("\105\x6e\x61\142\154\145\40\103\162\151\x74\151\143\141\x6c\x20\x43\x53\123", PR__PKG__OPTIMIZATION))->agywyaaquwawwuiy(self::CRITICAL_EXTRA_CSS))->mkksewyosgeumwsa(self::uouyygwcgsmygaee(self::CRITICAL_EXTRA_CSS, __("\x45\x78\164\x72\x61\40\x43\x53\x53\40\x43\157\144\145", PR__PKG__OPTIMIZATION))->wcgckeeiiseccqkc())->saemoowcasogykak(IconFontawesomeInterface::ICON_CODE))->saemoowcasogykak(IconFontawesomeInterface::ICON_INBOX_OUT); } public function oyookmikikgkcgas($yuwymayicwwqiske) { return self::cgygmuguceeosoey("{$yuwymayicwwqiske}\x5f\144\145\154\141\171\x5f\154\157\141\144", __("\x44\x65\x6c\141\171\40\x4c\x6f\141\144", PR__PKG__OPTIMIZATION))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\137\144\145\154\x61\x79\x5f\x6c\157\141\x64\137\x73\x74\x79\154\145", __("\x53\x74\171\x6c\145\40\x28\x43\x53\123\x29", PR__PKG__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::DELAY_LOAD_STYLE, __("\114\x6f\x61\144\40\x53\x74\171\154\145\x20\x77\151\164\x68\40\104\x65\154\141\171", PR__PKG__OPTIMIZATION))->ooowowweyusommmm(__("\103\x72\151\x74\x69\x63\x61\154\x20\103\123\123\x20\x52\x65\161\x75\x69\162\145\41", PR__PKG__OPTIMIZATION), __("\131\x6f\165\x20\156\145\145\144\40\x74\x6f\40\x65\x6e\x61\142\154\145\40\x63\x72\151\x74\151\143\x61\154\x20\x63\163\163\40\164\x6f\157\x2c\40\164\157\x20\x67\x65\x74\40\141\40\142\145\163\164\x20\162\145\163\165\x6c\x74\x2e", PR__PKG__OPTIMIZATION), "\x69\156\x66\157")->agywyaaquwawwuiy([self::DELAY_LOAD_STYLE_EXCLUDE, self::DELAY_LOAD_STYLE_CDN]))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::DELAY_LOAD_STYLE_CDN, __("\104\x65\154\x61\171\x20\103\104\116\40\x53\164\171\154\145", PR__PKG__OPTIMIZATION)))->mkksewyosgeumwsa(self::uouyygwcgsmygaee(self::DELAY_LOAD_STYLE_EXCLUDE, __("\105\x78\x63\154\x75\144\145\x20\x53\x74\171\x6c\x65", PR__PKG__OPTIMIZATION))->qsecygiycssgacqs(5)->yskkmqiusguummwa())->saemoowcasogykak(IconFontawesomeInterface::ICON_CODE))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$yuwymayicwwqiske}\137\x64\145\x6c\x61\171\x5f\154\x6f\141\144\137\152\141\x76\141\x73\x63\162\151\160\164", __("\x4a\x61\x76\x61\x73\143\162\x69\x70\x74", PR__PKG__OPTIMIZATION))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::DELAY_LOAD_JAVASCRIPT, __("\x4c\157\x61\x64\x20\x4a\x61\166\x61\163\x63\162\x69\x70\164\x20\167\x69\164\150\40\104\x65\154\x61\x79", PR__PKG__OPTIMIZATION))->yeigkegagskeaaim()->agywyaaquwawwuiy([self::DELAY_LOAD_JAVASCRIPT_EXCLUDE, self::DELAY_LOAD_JAVASCRIPT_CDN]))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::DELAY_LOAD_JAVASCRIPT_CDN, __("\104\145\x6c\141\171\40\x43\104\x4e\40\112\141\x76\x61\163\143\x72\x69\x70\x74", PR__PKG__OPTIMIZATION)))->mkksewyosgeumwsa(self::uouyygwcgsmygaee(self::DELAY_LOAD_JAVASCRIPT_EXCLUDE, __("\105\170\x63\154\165\x64\145\x20\112\x61\166\141\x73\143\162\x69\160\164", PR__PKG__OPTIMIZATION))->qsecygiycssgacqs(5)->yskkmqiusguummwa())->saemoowcasogykak(IconFontawesomeInterface::ICON_CODE)); } public function aiqeywqiyqcekgiu($qiouiwasaauyaaue, $uusmaiomayssaecw) { $ggauoeuaesiymgee = []; switch ($uusmaiomayssaecw) { case self::TOP_SPEED: $ggauoeuaesiymgee = [self::MINIFY_JS => true, self::MINIFY_CSS => true, self::MINIFY_HTML => true, self::ENABLE_MINIFY => true, self::DISABLE_XMLRPC => true, self::DISABLE_EMOJIS => true, self::DISABLE_EMBEDS => true, self::REMOVE_RSD_LINK => true, self::HIDE_WP_VERSION => true, self::REMOVE_REST_API => true, self::REMOVE_SHORTLINK => true, self::LAZY_LOAD_IMAGES => true, self::LAZY_LOAD_ENABLE => true, self::DELAY_LOAD_STYLE => true, self::ADD_BLANK_FAVICON => true, self::DISABLE_DASHICONS => true, self::SPECIFY_DIMENSIONS => true, self::ENABLE_CRITICAL_CSS => true, self::CDN_ENABLE_JSDELIVER => true, self::REMOVE_HTTP_PROTOCOL => true, self::DELAY_LOAD_STYLE_CDN => true, self::IMAGE_COLOR_DOMINATOR => true, self::DELAY_LOAD_JAVASCRIPT => true, self::DISABLE_GUTENBERG_CSS => true, self::DISABLE_JQUERY_MIGRATE => true, self::DISABLE_JQUERY_MIGRATE => true, self::REMOVE_WLW_MANIFEST_LINK => true, self::DELAY_LOAD_JAVASCRIPT_CDN => true, self::LAZY_LOAD_IFRAME_AND_VIDEOS => true, self::DISABLE_PASSWORD_STRENGTH_METER => true, self::IMAGE_EXTERNAL_SPECIFY_DIMENSIONS => true]; goto akieeaeqiwugimie; case self::FAIL_SAFE: $ggauoeuaesiymgee = [self::MINIFY_JS => false, self::MINIFY_CSS => true, self::MINIFY_HTML => true, self::ENABLE_MINIFY => true, self::DISABLE_XMLRPC => false, self::DISABLE_EMOJIS => false, self::DISABLE_EMBEDS => false, self::REMOVE_RSD_LINK => false, self::HIDE_WP_VERSION => false, self::REMOVE_REST_API => false, self::REMOVE_SHORTLINK => false, self::LAZY_LOAD_IMAGES => true, self::LAZY_LOAD_ENABLE => true, self::DELAY_LOAD_STYLE => false, self::ADD_BLANK_FAVICON => true, self::DISABLE_DASHICONS => false, self::SPECIFY_DIMENSIONS => false, self::ENABLE_CRITICAL_CSS => false, self::CDN_ENABLE_JSDELIVER => false, self::REMOVE_HTTP_PROTOCOL => false, self::DELAY_LOAD_STYLE_CDN => false, self::IMAGE_COLOR_DOMINATOR => false, self::DELAY_LOAD_JAVASCRIPT => false, self::DISABLE_GUTENBERG_CSS => false, self::DISABLE_JQUERY_MIGRATE => false, self::DISABLE_JQUERY_MIGRATE => false, self::REMOVE_WLW_MANIFEST_LINK => false, self::DELAY_LOAD_JAVASCRIPT_CDN => false, self::LAZY_LOAD_IFRAME_AND_VIDEOS => true, self::DISABLE_PASSWORD_STRENGTH_METER => false, self::IMAGE_EXTERNAL_SPECIFY_DIMENSIONS => false]; goto akieeaeqiwugimie; } ugqucegcucyyayga: akieeaeqiwugimie: if (!$ggauoeuaesiymgee) { goto sequgigsgkqaikmq; } $qiouiwasaauyaaue = array_merge($qiouiwasaauyaaue, $ggauoeuaesiymgee); sequgigsgkqaikmq: return parent::aiqeywqiyqcekgiu($qiouiwasaauyaaue, $uusmaiomayssaecw); } private function ocqyumoaskoockam() { $aamkqmkgsaqmcuao = DecoratorI18N::iyouigcsiacgwksc(); switch ($aamkqmkgsaqmcuao) { case "\x66\x61\137\x49\x52": $wakuamsqaqkweqmy = ["\x76\141\x7a\x69\162" => sprintf(__("\45\163\x20\x46\157\156\164", PR__PKG__OPTIMIZATION), __("\x56\141\172\151\x72", PR__PKG__OPTIMIZATION)), "\x6c\x6f\164\x75\163" => sprintf(__("\45\163\40\x46\157\x6e\164", PR__PKG__OPTIMIZATION), __("\114\x6f\x74\165\x73", PR__PKG__OPTIMIZATION)), "\x79\x65\x6b\141\x6e" => sprintf(__("\x25\x73\40\x46\157\156\x74", PR__PKG__OPTIMIZATION), __("\131\145\153\141\x6e", PR__PKG__OPTIMIZATION)), "\x73\141\x68\145\x6c" => sprintf(__("\45\163\x20\106\x6f\156\x74", PR__PKG__OPTIMIZATION), __("\123\x61\x68\145\x6c", PR__PKG__OPTIMIZATION)), "\155\x69\164\x72\141" => sprintf(__("\45\163\x20\x46\157\156\x74", PR__PKG__OPTIMIZATION), __("\x4d\x69\164\x72\x61", PR__PKG__OPTIMIZATION)), "\163\x61\x6d\x69\x6d" => sprintf(__("\x25\x73\40\x46\x6f\x6e\164", PR__PKG__OPTIMIZATION), __("\x53\x61\x6d\151\x6d", PR__PKG__OPTIMIZATION)), "\x6e\141\x7a\141\156\151\x6e" => sprintf(__("\x25\x73\40\x46\157\156\164", PR__PKG__OPTIMIZATION), __("\116\x61\x7a\141\x6e\x69\x6e", PR__PKG__OPTIMIZATION)), "\163\x68\141\142\x6e\141\x6d" => sprintf(__("\x25\163\40\106\x6f\156\x74", PR__PKG__OPTIMIZATION), __("\x53\150\141\142\x6e\x61\155", PR__PKG__OPTIMIZATION))]; goto aemoyqueimayqcaw; default: $wakuamsqaqkweqmy = []; } woaoeyaowkuukkqm: aemoyqueimayqcaw: $wakuamsqaqkweqmy["\x63\165\x73\x74\157\x6d"] = sprintf(__("\45\x73\x20\106\x6f\x6e\164", PR__PKG__OPTIMIZATION), __("\x43\165\163\x74\157\155", PR__PKG__OPTIMIZATION)); return $wakuamsqaqkweqmy; } }
