<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b7a38689a83             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Optimization\Asset\CDN; use Pmpr\Common\Foundation\Decorator\DecoratorCron; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateRequest; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use WP_Dependencies; use WP_Scripts; class JsDeliver extends Common { const ADVANCED_MODE = "\141\144\166\x61\x6e\x63\x65\x64\137\x6d\157\x64\145"; const JSDELIVR_URL = "\152\x73\144\145\154\x69\166\x72\x5f\165\162\154"; const AUTO_ENABLE = "\x61\165\164\x6f\145\156\x61\x62\154\145"; const AUTO_MINIFY = "\141\165\164\x6f\x6d\151\x6e\x69\146\171"; const SOURCE_LIST = "\163\157\165\x72\143\145\137\154\151\x73\x74"; const SCHEDULE_KEY = "\x6f\160\164\x69\x6d\151\172\141\x74\x69\x6f\x6e\x5f\146\151\146\x74\145\x65\156\137\155\x69\x6e\165\x74\145\163"; const CDN_URL = "\x68\x74\164\x70\x73\72\x2f\x2f\143\144\156\x2e\152\163\144\145\x6c\x69\166\x72\56\x6e\x65\164\x2f"; const STORED_ITEMS = "\157\x70\164\x69\155\x69\172\141\164\x69\x6f\x6e\x5f\143\x6e\144\x5f\x6a\x73\x5f\144\145\x6c\151\166\x65\x72\137\151\x74\145\155\x73"; const HASH_LOOKUP_URL = "\150\x74\164\x70\x73\72\x2f\x2f\144\141\164\141\x2e\152\163\144\x65\x6c\151\x76\x72\56\143\x6f\x6d\x2f\x76\61\57\x6c\x6f\157\x6b\165\x70\x2f\x68\x61\163\x68\x2f"; const LAST_LOADED_DATETIME = "\154\141\x73\164\x5f\154\157\141\144\x65\x64\x5f\144\141\164\x65\164\151\x6d\145"; const ANALYZE_CRON_HOOK = "\x6f\160\x74\x69\155\151\172\x61\164\x69\157\156\137\143\x6e\x64\x5f\152\x73\144\x65\154\x69\x76\162\137\141\156\141\x6c\x79\172\145\x5f\143\162\x6f\156\137\x68\157\x6f\x6b"; const REMOVE_OLD_CRON_HOOK = "\x6f\160\164\x69\155\151\172\x61\164\151\157\x6e\137\143\156\144\137\152\x73\x64\145\x6c\x69\166\162\x5f\162\145\155\157\x76\145\137\x6f\x6c\144\x5f\143\x72\x6f\x6e\x5f\150\x6f\157\x6b"; const COMMENT_PATTERN = "\57\134\x2f\x5c\x2a\133\x5c\x73\x5c\x53\135\x2a\x3f\134\x2a\134\57\x7c\x5c\57\x5c\57\x2e\x2a\x3f\50\x3f\x3a\134\156\174\44\51\57"; protected array $items = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\151\164", [$this, "\151\x6e\151\x74"])->qcsmikeggeemccuu(self::ANALYZE_CRON_HOOK, [$this, "\x79\161\x67\151\x71\161\141\x79\141\x6d\171\x65\145\155\165\165"])->qcsmikeggeemccuu(self::REMOVE_OLD_CRON_HOOK, [$this, "\141\163\161\x77\x71\x61\161\157\x77\x67\x65\x79\171\x61\x79\x77"])->qcsmikeggeemccuu("\x77\160\137\160\x72\151\x6e\x74\137\x73\x63\x72\x69\160\x74\x73", [$this, "\x6f\171\165\x71\x73\x6d\153\151\167\x69\153\147\141\161\163\x77"], 9999)->qcsmikeggeemccuu("\x77\160\x5f\160\162\x69\156\164\x5f\163\164\x79\154\145\x73", [$this, "\x6b\171\x79\167\x77\161\x6f\x67\143\x6f\143\x67\x63\147\167\x6d"], 9999); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\143\162\x6f\156\137\163\143\150\x65\144\x75\x6c\x65\163", [$this, "\163\x69\x79\153\155\155\165\x73\153\163\x6d\161\155\x73\167\143"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\157\x70\164\137\145\170\143\x6c\x75\x64\x65\x5f\x73\157\165\x72\x63\x65\163"), [$this, "\x67\x73\147\x73\155\153\x65\171\x75\x77\161\x71\x6d\163\151\151"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6f\x70\164\137\x70\x65\162\146\x6f\x72\155\x61\x6e\x63\145\x5f\162\x65\x73\x6f\165\162\x63\x65\137\150\151\156\x74"), [$this, "\x77\x61\x6b\157\x67\143\x6d\167\x63\x61\171\x63\x69\x6f\161\x65"]); parent::kgquecmsgcouyaya(); } public function gsgsmkeyuwqqmsii(array $couiucmsqaieciue = []) : array { $couiucmsqaieciue[] = self::CDN_URL; return $couiucmsqaieciue; } public function wakogcmwcaycioqe($wqogggcaamgeiwew) { $wqogggcaamgeiwew[] = self::CDN_URL; return $wqogggcaamgeiwew; } public function init() { goto yymkawwocayqmcew; ygcassqguceeaako: scwisyammksaguea: goto amkoayycaiguswem; qosuqqceyccekysq: DecoratorCron::uwugaiqywmseksqm(time(), self::DAILY, self::REMOVE_OLD_CRON_HOOK); goto ksuoesmcewiqukgy; cuacsemcmuyaokge: $this->items = DecoratorOption::get(self::STORED_ITEMS, []); goto aoqqweiisiaekqsk; ksuoesmcewiqukgy: mweocegcwiiiwkcs: goto cuacsemcmuyaokge; kwkeiomeuququaoy: $this->items = [self::SOURCE_LIST => [], self::AUTO_MINIFY => true, self::AUTO_ENABLE => true, self::ADVANCED_MODE => false]; goto giqysmgscwwqgmqe; aoqqweiisiaekqsk: if ($this->wasgwsogmuquqeaa()) { goto wsooeyooiuqokgwo; } goto kwkeiomeuququaoy; giqysmgscwwqgmqe: $this->ciaesowswgmgckaa(); goto qaeqsckgkimiuwca; yymkawwocayqmcew: if (DecoratorCron::sceqickmyoseqcue(self::ANALYZE_CRON_HOOK)) { goto scwisyammksaguea; } goto egswysgmqmcsswia; egswysgmqmcsswia: DecoratorCron::uwugaiqywmseksqm(time(), self::SCHEDULE_KEY, self::ANALYZE_CRON_HOOK); goto ygcassqguceeaako; qaeqsckgkimiuwca: wsooeyooiuqokgwo: goto guoqssciqoegywsg; amkoayycaiguswem: if (DecoratorCron::sceqickmyoseqcue(self::REMOVE_OLD_CRON_HOOK)) { goto mweocegcwiiiwkcs; } goto qosuqqceyccekysq; guoqssciqoegywsg: } public function wasgwsogmuquqeaa() : array { return $this->items; } public function yqgiqqayamyeemuu() : array { goto okwsycyoqycgwaco; goouowwycoakigim: gqcosoeyaqmyccca: goto aasuycoysaucuaaq; euemimammkmwkuwk: $icwicymcioeyeyek = []; goto isgiyocowwwceaoa; isgiyocowwwceaoa: $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa(); goto ucoikisgieeseyqo; cwccwmggqyeeggwe: $this->ciaesowswgmgckaa(); goto seocecaioucmugky; seocecaioucmugky: gkoasaqwwqsgwqgo: goto eeicwkoeaqmaoywm; aasuycoysaucuaaq: if (!$ecukkacusqswqoem) { goto gkoasaqwwqsgwqgo; } goto kgeiskysuuasqckq; eeicwkoeaqmaoywm: return $icwicymcioeyeyek; goto iwemkuaseiooqoqg; gmmaicwkwqiywwyc: foreach ($oammesyieqmwuwyi[self::SOURCE_LIST] as $eueuqacmukymcyya => $egsumesakcaaukem) { goto iiogyckwmaouswqy; eiwkyioqeaaemqsa: skegiiomcggeymuw: goto kgogceiykkokkgeg; wkoqomessckkgeua: if (!$iakkeikwceeomgyq) { goto smmagsweysscecce; } goto eagggcysqeeaeose; qyckwskcewqioqyk: $iakkeikwceeomgyq = ManipulateArray::get($wp_styles->registered, $uueqecyckaweeyai, ManipulateArray::get($wp_scripts->registered, $uueqecyckaweeyai, false)); goto wkoqomessckkgeua; oayiqwmaaukkuimy: smmagsweysscecce: goto eiwkyioqeaaemqsa; gcwikewmwkqsugms: $oammesyieqmwuwyi[self::SOURCE_LIST][$eueuqacmukymcyya][self::JSDELIVR_URL] = $this->giqeuqaeqeaogcgo($iakkeikwceeomgyq); goto ecmiggsmgmeaaqug; oimegoemmuwwwkyo: $icwicymcioeyeyek[$eueuqacmukymcyya] = $oammesyieqmwuwyi[self::SOURCE_LIST][$eueuqacmukymcyya][self::JSDELIVR_URL]; goto oayiqwmaaukkuimy; ecmiggsmgmeaaqug: $ecukkacusqswqoem = true; goto qaoooeioqwiiceyq; iiogyckwmaouswqy: $uueqecyckaweeyai = $egsumesakcaaukem["\x68\141\156\144\x6c\x65"]; goto qyckwskcewqioqyk; qaoooeioqwiiceyq: oqumomyawuuomquy: goto oimegoemmuwwwkyo; eagggcysqeeaeose: if (!(!$egsumesakcaaukem[self::JSDELIVR_URL] && $iakkeikwceeomgyq->src)) { goto oqumomyawuuomquy; } goto gcwikewmwkqsugms; kgogceiykkokkgeg: } goto goouowwycoakigim; ucoikisgieeseyqo: $ecukkacusqswqoem = false; goto gmmaicwkwqiywwyc; okwsycyoqycgwaco: global $wp_scripts, $wp_styles; goto euemimammkmwkuwk; kgeiskysuuasqckq: $this->items = $oammesyieqmwuwyi; goto cwccwmggqyeeggwe; iwemkuaseiooqoqg: } public function giqeuqaeqeaogcgo($iakkeikwceeomgyq) { goto ommmymgkaageowym; wqgecqaciyakecys: goto gsoyaqsaauaokukc; goto wqmgwcsuccoweocq; fosuiwomyuwkaisi: yikaqawiqaokyqgw: goto yqewusaguumeiqyq; wsouygqoeyuksock: $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); goto qaugkmgccegqkasu; eookussqeicycoio: mcccguiaquiickwq: goto icqaiqyewuyegkeq; qwikcqiaiumsswow: mywueecygymayigq: goto ukggweysgiiygqsa; iekecmawqyigmqcg: ckcesgcceqqqieem: goto wsawmoiaemkggocs; yigecwqswuowoakm: $mgeemcksyiuqaemy = hash("\x73\x68\141\x32\x35\x36", $ykscweuoqwqcmsmo); goto aqguswuomiqimcwy; kkscsmuyumawosyc: gsoyaqsaauaokukc: goto ysmessckmysogeua; icqaiqyewuyegkeq: if (!($oammesyieqmwuwyi[self::AUTO_MINIFY] && !$this->cgsqaegiswcuoggi($ykscweuoqwqcmsmo))) { goto quwwquywcuyiiweo; } goto dmwmgeswweekqyuw; moeeimaaoaycycmi: $php_files = glob(ABSPATH . "\167\x70\x2d\143\x6f\x6e\164\145\x6e\164\57\x70\x6c\x75\147\x69\156\x73\x2f{$meyiiwcswqmuggyg["\x70\154\x75\x67\x69\156"]}\x2f\52\x2e\160\x68\x70"); goto mggyiwyuuiwswaks; kawgkswoygkmgmao: $icwicymcioeyeyek["\166\x65\162\x73\151\157\x6e"] = get_bloginfo("\166\x65\x72\163\x69\157\156"); goto suewugkisoommmgy; yqckgyeeuyayosww: akcqkwesmcuumqqc: goto qmsyaycokgmmwycs; oyeswuecyaiiawyg: $muqcqaqwsaoagykg = get_plugin_data($plugin_file); goto kkscsmuyumawosyc; uoqequmkiyukiqgi: $yuoeykkoggaegkiu = $mckmqeqaekwkwems; goto qwikcqiaiumsswow; ukygqcaqcaqqmyew: $plugin_file = ABSPATH . "\x77\x70\55\x63\x6f\x6e\x74\x65\x6e\x74\x2f\x70\154\165\x67\x69\x6e\x73\x2f{$meyiiwcswqmuggyg["\160\154\165\x67\x69\x6e"]}\57{$meyiiwcswqmuggyg["\160\154\165\x67\151\156"]}\x2e\x70\x68\x70"; goto ymiosikicyqkaiaa; yemwekyegaywgoug: aymkogwsagaggsem: goto wqgecqaciyakecys; eouugaqkgamwmgmo: $yuoeykkoggaegkiu = ''; goto weocosykwsaimaks; kggwiioyiqgskcem: if (preg_match("\x2f\x77\x70\55\143\157\x6e\164\x65\x6e\164\134\x2f\160\154\165\147\x69\156\x73\x5c\57\x28\77\74\160\154\165\x67\151\156\x3e\x5b\x5e\x5c\57\x5d\52\51\x5c\x2f\x28\x3f\x3c\x66\151\x6c\145\x3e\x2e\52\51\x2f\151", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { goto qqyeogaouscuaikw; } goto emwggqiqcmmqeawy; tsywwmwawwgcwmuc: $mckmqeqaekwkwems = self::CDN_URL . "{$icwicymcioeyeyek["\x74\171\x70\145"]}\x2f{$icwicymcioeyeyek["\156\x61\x6d\145"]}\100{$icwicymcioeyeyek["\x76\x65\162\x73\x69\x6f\x6e"]}{$icwicymcioeyeyek["\146\x69\x6c\x65"]}"; goto qucoecmmmacqooek; ieauiumamygiuckc: eqiqgwqscsswkmwk: goto eookussqeicycoio; gocwgeomykcekcso: if (isset($icwicymcioeyeyek["\x66\151\154\145"])) { goto aooeykwscmqgouay; } goto kggwiioyiqgskcem; iaqwisciugaosygy: if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto mywueecygymayigq; } goto uoqequmkiyukiqgi; cgmgikoumekoyyae: if (!$ykscweuoqwqcmsmo) { goto sugmgeiemuygeoce; } goto yigecwqswuowoakm; mggyiwyuuiwswaks: foreach ($php_files as $mkomwsiykqigmqca) { goto emoaoyuqmmymmwkq; emoaoyuqmmymmwkq: $muqcqaqwsaoagykg = get_plugin_data($mkomwsiykqigmqca); goto semoowiyeimkyeuc; semoowiyeimkyeuc: if (!$muqcqaqwsaoagykg["\x56\145\162\x73\x69\x6f\x6e"]) { goto icoooiwmiusyeaes; } goto qgmegqweacumuccw; qgmegqweacumuccw: goto aymkogwsagaggsem; goto cumoewcksgaqwwoo; cumoewcksgaqwwoo: icoooiwmiusyeaes: goto kuiomeesyokwsgio; kuiomeesyokwsgio: eqggkouoswesgwya: goto yescggaseyimocqu; yescggaseyimocqu: } goto yemwekyegaywgoug; dmwmgeswweekqyuw: $yuoeykkoggaegkiu = substr_replace($yuoeykkoggaegkiu, "\x2e\155\x69\156", strrpos($yuoeykkoggaegkiu, "\56"), 0); goto moeseousgukmygmy; qeggwmykewcoieic: $yuoeykkoggaegkiu = $mckmqeqaekwkwems; goto ieauiumamygiuckc; kcaysyweukeimoik: soeggysyusqoiwwg: goto eakoykqcmyemgyum; emwggqiqcmmqeawy: if (!preg_match("\x2f\x77\160\55\143\x6f\x6e\x74\x65\156\x74\x5c\57\164\150\x65\x6d\x65\163\134\57\50\77\74\x74\x68\145\x6d\145\x3e\133\136\134\57\x5d\x2a\x29\x5c\57\50\x3f\x3c\146\x69\154\x65\76\56\52\x29\x2f\x69", $wsqkocmmsoiquqwm, $meyiiwcswqmuggyg)) { goto mmqsgsuycqioemgo; } goto kyswigcwgusmesqi; cgsawegeqqsecwam: if (!$mumucmmgemqwqiia->exists()) { goto oeaskyqueyagqcmc; } goto eucsyaygqqcqamus; wsawmoiaemkggocs: mmqsgsuycqioemgo: goto iuiawwoouuwwiqca; scageqmiwcyqmmmk: $kuuiuigeacouwmaa = strpos($wsqkocmmsoiquqwm, "\57\57"); goto swgecgeeeaaakgss; giiqogwyoikiiqyi: $mckmqeqaekwkwems = self::CDN_URL . "\167\160\x2f\160\x6c\x75\x67\151\156\x73\57{$meyiiwcswqmuggyg["\160\154\165\147\x69\x6e"]}\57\x74\x61\x67\163\57{$muqcqaqwsaoagykg["\x56\x65\162\163\x69\x6f\x6e"]}\x2f{$meyiiwcswqmuggyg["\x66\151\154\x65"]}"; goto iqiwimyamykmuiwo; ogwaiqiccywqqiwk: $wuayakmyggcomiuy = wp_check_filetype($wsqkocmmsoiquqwm); goto wsomqsmeououqiwu; cocwomcoymcaqgky: if (!($meyiiwcswqmuggyg["\x70\x6c\x75\147\151\x6e"] && $meyiiwcswqmuggyg["\146\151\x6c\x65"])) { goto akcqkwesmcuumqqc; } goto ukygqcaqcaqqmyew; qucoecmmmacqooek: if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto eqiqgwqscsswkmwk; } goto qeggwmykewcoieic; oimaymokouuwueum: $mumucmmgemqwqiia = wp_get_theme($meyiiwcswqmuggyg["\x74\150\x65\155\x65"]); goto cgsawegeqqsecwam; ommmymgkaageowym: $yuoeykkoggaegkiu = ''; goto aseoykguwasmaggs; eakoykqcmyemgyum: return $yuoeykkoggaegkiu; goto aqyimgoegakwgoum; weocosykwsaimaks: eiiqicyywgugksuc: goto gmywmsmiayimqygy; iqiwimyamykmuiwo: if (!$this->qycuagacqaecigyi($mckmqeqaekwkwems, $mgeemcksyiuqaemy)) { goto msaegiggioiykouc; } goto egyuciuossumacuy; oesqomwsgwmckgsq: $wsqkocmmsoiquqwm = $iakkeikwceeomgyq->src; goto wswmegcumomiwaqo; egwuecigeyuooiam: msaegiggioiykouc: goto sieccokukwgmuggw; suewugkisoommmgy: coawukgoisakmosc: goto tsywwmwawwgcwmuc; aseoykguwasmaggs: $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa(); goto oesqomwsgwmckgsq; kwwgmsmuoeysguwq: $ykscweuoqwqcmsmo = wp_remote_retrieve_body($keccaugmemegoimu); goto qeaugewkiwmkoaas; moyqaggmqqimwusm: if (!("\x57\x6f\162\x64\120\162\x65\x73\163\57\127\157\x72\144\120\162\145\163\x73" === $icwicymcioeyeyek["\x6e\x61\x6d\x65"])) { goto coawukgoisakmosc; } goto kawgkswoygkmgmao; egyuciuossumacuy: $yuoeykkoggaegkiu = $mckmqeqaekwkwems; goto egwuecigeyuooiam; iuiawwoouuwwiqca: goto swkmkgmucceyweie; goto oeeakgukqusiqswc; qicekkeggigkwqeu: aooeykwscmqgouay: goto moyqaggmqqimwusm; kyswigcwgusmesqi: if (!($meyiiwcswqmuggyg["\164\150\145\x6d\145"] && $meyiiwcswqmuggyg["\x66\151\154\x65"])) { goto ckcesgcceqqqieem; } goto oimaymokouuwueum; oeeakgukqusiqswc: qqyeogaouscuaikw: goto cocwomcoymcaqgky; aqguswuomiqimcwy: $icwicymcioeyeyek = $this->yaouiiywcouyyimi($mgeemcksyiuqaemy); goto gocwgeomykcekcso; eucsyaygqqcqamus: $mckmqeqaekwkwems = self::CDN_URL . "\167\x70\57\x74\150\x65\x6d\145\x73\x2f{$meyiiwcswqmuggyg["\x74\150\145\155\x65"]}\57{$mumucmmgemqwqiia->get("\x56\145\162\163\151\157\156")}\x2f{$meyiiwcswqmuggyg["\146\151\x6c\145"]}"; goto iaqwisciugaosygy; qmsyaycokgmmwycs: swkmkgmucceyweie: goto geqakgsumkyosuca; wswmegcumomiwaqo: $muqcqaqwsaoagykg = []; goto wsouygqoeyuksock; geqakgsumkyosuca: goto mcccguiaquiickwq; goto qicekkeggigkwqeu; qeaugewkiwmkoaas: askiamwsewkaqwoi: goto cgmgikoumekoyyae; ysmessckmysogeua: if (!$muqcqaqwsaoagykg["\x56\x65\162\163\151\157\156"]) { goto uymqoeqgwwkeiuok; } goto giiqogwyoikiiqyi; ukggweysgiiygqsa: oeaskyqueyagqcmc: goto iekecmawqyigmqcg; qaugkmgccegqkasu: if (!$wsqkocmmsoiquqwm) { goto soeggysyusqoiwwg; } goto scageqmiwcyqmmmk; wqmgwcsuccoweocq: ywgyaqcqgosmigae: goto oyeswuecyaiiawyg; yqewusaguumeiqyq: $keccaugmemegoimu = wp_safe_remote_get((0 === $kuuiuigeacouwmaa ? "\150\164\164\x70\x3a" : '') . $wsqkocmmsoiquqwm, $this->eeykuoewogequiii()); goto kwwgmsmuoeysguwq; xaiaogcwcaeweoiu: $gqqycaoyaweqigmi = wp_check_filetype($yuoeykkoggaegkiu); goto ogwaiqiccywqqiwk; gmywmsmiayimqygy: sugmgeiemuygeoce: goto kcaysyweukeimoik; wsomqsmeououqiwu: if (!($wuayakmyggcomiuy["\x65\170\x74"] !== $gqqycaoyaweqigmi["\x65\170\x74"])) { goto eiiqicyywgugksuc; } goto eouugaqkgamwmgmo; ymiosikicyqkaiaa: if (file_exists($plugin_file)) { goto ywgyaqcqgosmigae; } goto moeeimaaoaycycmi; moeseousgukmygmy: quwwquywcuyiiweo: goto xaiaogcwcaeweoiu; qssyiieuymmiwicm: $ykscweuoqwqcmsmo = $iiaumsgauuyeqksw->souwykwwmyygqyqi($wsqkocmmsoiquqwm); goto kuyuwimysoqcmgek; sieccokukwgmuggw: uymqoeqgwwkeiuok: goto yqckgyeeuyayosww; kuyuwimysoqcmgek: goto askiamwsewkaqwoi; goto fosuiwomyuwkaisi; swgecgeeeaaakgss: if (false !== $kuuiuigeacouwmaa) { goto yikaqawiqaokyqgw; } goto qssyiieuymmiwicm; aqyimgoegakwgoum: } private function cgsqaegiswcuoggi($ykscweuoqwqcmsmo) : bool { $ymacoouqwcqwwagu = preg_replace(self::COMMENT_PATTERN, '', $ykscweuoqwqcmsmo); return strlen($ymacoouqwcqwwagu) / count(preg_split("\x2f\x5c\x6e\57", $ymacoouqwcqwwagu)) > 200; } private function yaouiiywcouyyimi(string $mgeemcksyiuqaemy) { goto noswwaawyacomwyo; oqyosskkgcuckmes: $sogksuscggsicmac = json_decode($ykscweuoqwqcmsmo, true); goto giueuuwusgmgeick; noswwaawyacomwyo: $sogksuscggsicmac = false; goto wcoekawkkswkgamc; wcoekawkkswkgamc: $keccaugmemegoimu = ManipulateRequest::yyqgamuwwakgciey(self::HASH_LOOKUP_URL . $mgeemcksyiuqaemy, $this->eeykuoewogequiii()); goto uqwsiocauuswgwok; giueuuwusgmgeick: $sogksuscggsicmac["\163\150\141\62\x35\x36"] = $mgeemcksyiuqaemy; goto eksamuqymmeumqsg; wskcqwywmwmwigce: return $sogksuscggsicmac; goto iiuwcsgwcguceiko; iisgwcgceeygauyk: if (!$ykscweuoqwqcmsmo) { goto qmiouyoeguiqymgi; } goto oqyosskkgcuckmes; uqwsiocauuswgwok: $ykscweuoqwqcmsmo = ManipulateRequest::ykqgmaeumqwokcmo($keccaugmemegoimu); goto iisgwcgceeygauyk; eksamuqymmeumqsg: qmiouyoeguiqymgi: goto wskcqwywmwmwigce; iiuwcsgwcguceiko: } public function qycuagacqaecigyi(string $eeamcawaiqocomwy, string $mgeemcksyiuqaemy) : bool { goto emucccmcoiwcyioq; yigmeqsygwgioyaa: $keccaugmemegoimu = wp_safe_remote_get($eeamcawaiqocomwy, $this->eeykuoewogequiii()); goto iwciaqcioigqwiys; yqwkgwucqwqyuqmw: return $kyquyseskckkouak === $mgeemcksyiuqaemy; goto icckscyoesgiyksu; iwciaqcioigqwiys: if (!(is_wp_error($keccaugmemegoimu) || !in_array(wp_remote_retrieve_response_code($keccaugmemegoimu), $cqaakiwueoeaoewq, true))) { goto wkycksmmuskouies; } goto awgamseuywgciius; cmqocusuososcwqk: wkycksmmuskouies: goto eswgqkmomsiauqqy; eswgqkmomsiauqqy: $ykscweuoqwqcmsmo = wp_remote_retrieve_body($keccaugmemegoimu); goto qoysygagyigwsiwm; emucccmcoiwcyioq: $cqaakiwueoeaoewq = [200]; goto yigmeqsygwgioyaa; qoysygagyigwsiwm: $kyquyseskckkouak = hash("\163\x68\141\62\x35\x36", $ykscweuoqwqcmsmo); goto yqwkgwucqwqyuqmw; awgamseuywgciius: return false; goto cmqocusuososcwqk; icckscyoesgiyksu: } public function enqueue($oseqkueswiwsceis) { goto aoewemyqigugysua; kyaysckiwskgogci: $this->ciaesowswgmgckaa(); goto eageyyymyekskmue; egauqkuumkisssaa: $ecukkacusqswqoem = false; goto kqsyuyukgswmwcys; aoewemyqigugysua: if (!$this->ocysssyiuaueqiei()) { goto umekgwemiaygomky; } goto egauqkuumkisssaa; aikuwguwuiekouoo: uyyieiuceauoecyq: goto wicguyksogckqums; wicguyksogckqums: if (!$ecukkacusqswqoem) { goto aesukugmkcsuocwc; } goto kyaysckiwskgogci; qkycyqgwwoiuaomq: uyowywywqeagqcuw: goto csmqeagwuisqiuym; yguicqcomwueokwm: foreach ($oseqkueswiwsceis->queue as $eueuqacmukymcyya) { $ecukkacusqswqoem = $this->waowasqqegsqwoay($eueuqacmukymcyya, $oseqkueswiwsceis) || $ecukkacusqswqoem; maycimoaceiiuemu: } goto aikuwguwuiekouoo; csmqeagwuisqiuym: umekgwemiaygomky: goto ccymqyyaikauqaiq; eageyyymyekskmue: aesukugmkcsuocwc: goto qkycyqgwwoiuaomq; kqsyuyukgswmwcys: if (!$oseqkueswiwsceis instanceof WP_Dependencies) { goto uyowywywqeagqcuw; } goto yguicqcomwueokwm; ccymqyyaikauqaiq: } public function kyywwqogcocgcgwm() { global $wp_styles; $this->enqueue($wp_styles); } public function oyuqsmkiwikgaqsw() { global $wp_scripts; $this->enqueue($wp_scripts); } public function ciaesowswgmgckaa() { DecoratorOption::update(self::STORED_ITEMS, $this->wasgwsogmuquqeaa()); } public function asqwqaqowgeyyayw() { goto agaomyyqaaswykui; musiyggyqaiwwouu: $this->items = $oammesyieqmwuwyi; goto imymswaceomsasks; sacmqsciuaucgaww: iwawqgcgskysqyaa: goto mqywccygymoeaoym; qsuyqoeocsmkomwy: foreach ($oammesyieqmwuwyi[self::SOURCE_LIST] as $momcykaoccoymeig => $egsumesakcaaukem) { goto meyowgukekkkkuqe; meyowgukekkkkuqe: if (!(time() - $egsumesakcaaukem[self::LAST_LOADED_DATETIME] > 60 * 60 * 24 * 2)) { goto uyouccoiyogmuwey; } goto mgocagiwqsgaisyq; mgocagiwqsgaisyq: unset($oammesyieqmwuwyi[self::SOURCE_LIST][$momcykaoccoymeig]); goto wkumckmusackacmi; wkumckmusackacmi: $ecukkacusqswqoem = true; goto wayyiemaccqkmqeg; wayyiemaccqkmqeg: uyouccoiyogmuwey: goto yygqgeukeuaciewa; yygqgeukeuaciewa: cooiowgwqgssuqcw: goto kysaqkaiksosyegu; kysaqkaiksosyegu: } goto ioyyiaguqyiaeaqs; imymswaceomsasks: $this->ciaesowswgmgckaa(); goto sacmqsciuaucgaww; ywyqmwuswkcoyqsy: if (!$ecukkacusqswqoem) { goto iwawqgcgskysqyaa; } goto musiyggyqaiwwouu; agaomyyqaaswykui: $ecukkacusqswqoem = false; goto caocoiecwueosoig; ioyyiaguqyiaeaqs: ygaggwgwiceegasy: goto ywyqmwuswkcoyqsy; caocoiecwueosoig: $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa(); goto qsuyqoeocsmkomwy; mqywccygymoeaoym: } public function siykmmusksmqmswc($immuisiomomksweo) { goto uacekkwiaagmuieg; gawswamyawcmsmei: $immuisiomomksweo[self::SCHEDULE_KEY] = ["\x69\156\x74\145\162\166\141\x6c" => 15 * 60, "\144\151\163\160\x6c\x61\171" => esc_html__("\x45\x76\145\162\171\x20\106\x69\146\164\x65\145\156\40\115\x69\156\x75\164\145\163", PR__PKG__OPTIMIZATION)]; goto cmsyegseqcwmyycy; cmsyegseqcwmyycy: wiomewyyumkmwsum: goto wiiaiqiomosmyuwq; seiysueoskimiaam: if ($immaoamcsocgawcg) { goto wiomewyyumkmwsum; } goto gawswamyawcmsmei; wiiaiqiomosmyuwq: return $immuisiomomksweo; goto sccaumocseyiqsue; uacekkwiaagmuieg: $immaoamcsocgawcg = ManipulateArray::get($immuisiomomksweo, self::SCHEDULE_KEY); goto seiysueoskimiaam; sccaumocseyiqsue: } private function waowasqqegsqwoay(string $eueuqacmukymcyya, ?WP_Dependencies $ugmuiugkaygmsagq = null) : bool { goto miiaowmiyoemouke; oqmeeqioiooguikk: wp_deregister_style($eueuqacmukymcyya); goto ggwyamakeyyieeog; csgqcskywiqwyocw: gymqkieyuiawacwi: goto suicqccekqckayec; maiaiacekmmwswqe: kuigwocyaagakags: goto cymmwkiaogwsmcsu; wkemscqmqyimmqme: mekaesaeskqmgqii: goto maiaiacekmmwswqe; cymmwkiaogwsmcsu: return $ecukkacusqswqoem; goto ueaiaeaaaiiuskyi; oeyyasumsgwocquw: if (!("\x73\164\x79\154\145" === $sqeykgyoooqysmca)) { goto scymgswieuyiqwmm; } goto oqmeeqioiooguikk; guqwqwceceswwucy: $ogomymegcoacqisg = $egsumesakcaaukem->src; goto yksgcagiyukouics; yqimmomioeoaqwkq: cwmkgosooecsywcm: goto kosccieswmaoeoyk; oimwgecwwecuugwq: iymwycosumimggmu: goto ycyoioowuumgwkuk; amemoiimosckqems: $ecukkacusqswqoem = true; goto yqimmomioeoaqwkq; eiwcgwomusuokygg: if ("\x73\x63\x72\x69\x70\x74" === $sqeykgyoooqysmca) { goto gymqkieyuiawacwi; } goto oeyyasumsgwocquw; caammwwkqeeemaok: usasekcgsyyqymgy: goto ksqcmyaawiiiimco; oueaeyqiqiakqaek: if (!($egsumesakcaaukem && !preg_match("\57\x63\144\156\x2e\152\163\144\x65\x6c\x69\166\162\56\156\145\164\174\x67\157\157\x67\x6c\x65\x61\160\151\57\151", $egsumesakcaaukem->src))) { goto mekaesaeskqmgqii; } goto bweusaooumwyemuu; wgkeakuiaqswmkes: $sqeykgyoooqysmca = $ugmuiugkaygmsagq instanceof WP_Scripts ? "\163\x63\162\x69\x70\164" : "\x73\164\171\x6c\145"; goto kemiasqyoocyqqgm; ssquocgwsassuike: foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { wp_script_add_data($eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie); wmskawmisgksegwe: } goto uommmgequgiiykci; kemiasqyoocyqqgm: $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa(); goto esgykeaqimuiewgw; uiuiuicckaiksqyc: $oammesyieqmwuwyi[self::SOURCE_LIST][$aguwegoioikwgooy] = ["\x68\141\156\x64\154\145" => $eueuqacmukymcyya, self::JSDELIVR_URL => '', self::LAST_LOADED_DATETIME => time()]; goto amemoiimosckqems; isgceyiuweaueqeu: if ($ogomymegcoacqisg) { goto ooqwuoiqmiswgkyu; } goto guqwqwceceswwucy; qwkyuqqgkugqggqo: $oammesyieqmwuwyi[self::SOURCE_LIST][$aguwegoioikwgooy][self::LAST_LOADED_DATETIME] = time(); goto cacaysyqsqaauawm; suicqccekqckayec: wp_deregister_script($eueuqacmukymcyya); goto sqqcaugoikagoykc; wqaiocgoqsqogmcm: foreach ($egsumesakcaaukem->deps as $icycamqakysyomsi) { $ecukkacusqswqoem = $ecukkacusqswqoem || $this->waowasqqegsqwoay($icycamqakysyomsi, $ugmuiugkaygmsagq); gkwyuumqeuikwiku: } goto ccwsuiigukoykcew; cacaysyqsqaauawm: $ecukkacusqswqoem = true; goto iosymaiumakyyaos; ccwsuiigukoykcew: wmismwqqqagsomky: goto wkemscqmqyimmqme; bweusaooumwyemuu: if (!isset($oammesyieqmwuwyi[self::SOURCE_LIST][$aguwegoioikwgooy])) { goto ooccckeeomycucao; } goto qsisgmaawywioogk; ksqcmyaawiiiimco: scymgswieuyiqwmm: goto ysqokomouwswymck; eymgmkoqgoqicgsi: $aguwegoioikwgooy = "{$sqeykgyoooqysmca}\55{$eueuqacmukymcyya}"; goto oueaeyqiqiakqaek; yumiokuikmkkwcwg: $ogomymegcoacqisg = $oammesyieqmwuwyi[self::SOURCE_LIST][$aguwegoioikwgooy][self::JSDELIVR_URL]; goto isgceyiuweaueqeu; qsisgmaawywioogk: if (!(time() - $oammesyieqmwuwyi[self::SOURCE_LIST][$aguwegoioikwgooy][self::LAST_LOADED_DATETIME] > 60 * 60 * 24)) { goto cmmoyuuegqguakga; } goto qwkyuqqgkugqggqo; iosymaiumakyyaos: cmmoyuuegqguakga: goto kqgqymcemksgmsaa; ggccmgysseeqcaga: ooccckeeomycucao: goto uiuiuicckaiksqyc; miiaowmiyoemouke: $ecukkacusqswqoem = false; goto auoaywowugkacsia; esgykeaqimuiewgw: $egsumesakcaaukem = ManipulateArray::get($ugmuiugkaygmsagq->registered, $eueuqacmukymcyya); goto eymgmkoqgoqicgsi; ggwyamakeyyieeog: wp_register_style($eueuqacmukymcyya, $ogomymegcoacqisg, $egsumesakcaaukem->deps, $egsumesakcaaukem->ver); goto ssaeeugeycyaaaki; ycyoioowuumgwkuk: $this->items = $oammesyieqmwuwyi; goto wqaiocgoqsqogmcm; auoaywowugkacsia: if (!$ugmuiugkaygmsagq) { goto kuigwocyaagakags; } goto wgkeakuiaqswmkes; yksgcagiyukouics: ooqwuoiqmiswgkyu: goto eiwcgwomusuokygg; sqqcaugoikagoykc: wp_register_script($eueuqacmukymcyya, $ogomymegcoacqisg, $egsumesakcaaukem->deps, $egsumesakcaaukem->ver, true); goto ssquocgwsassuike; kosccieswmaoeoyk: if (!(isset($oammesyieqmwuwyi[self::SOURCE_LIST][$aguwegoioikwgooy]) && $oammesyieqmwuwyi[self::SOURCE_LIST][$aguwegoioikwgooy][self::JSDELIVR_URL])) { goto iymwycosumimggmu; } goto yumiokuikmkkwcwg; ssaeeugeycyaaaki: foreach ($egsumesakcaaukem->extra as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { wp_style_add_data($eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie); uqggmkmmysmeqkmy: } goto caammwwkqeeemaok; wiouwokmcckqekqy: eskcocwimiseewmu: goto oimwgecwwecuugwq; kqgqymcemksgmsaa: goto cwmkgosooecsywcm; goto ggccmgysseeqcaga; ysqokomouwswymck: goto eskcocwimiseewmu; goto csgqcskywiqwyocw; uommmgequgiiykci: uieeaeqciogamoqe: goto wiouwokmcckqekqy; ueaiaeaaaiiuskyi: } public function agkwcckksaegcsce(string $ogomymegcoacqisg) : string { goto gyaiswaqomsiwcwu; yyeowwwqogwoeoyc: $acqcekoeswseswws = ltrim(str_replace($cgmkimaosyyuqeyg, '', $ogomymegcoacqisg), "\57"); goto ywagwigaamkacqsm; qsamicayummauigq: goto gqsciemssskoqamq; goto sgosioakiaeqmyyy; ywagwigaamkacqsm: weqkaeeoycmmmkcc: goto eouoyysyekegaigi; qywgeimouqcummco: if (strpos($ogomymegcoacqisg, $cgmkimaosyyuqeyg) === 0) { goto mwagkoucauykimsu; } goto sgkcewwkiomywgky; syskuqogeeoicwgw: goto weqkaeeoycmmmkcc; goto kommicqseqmaiuss; ocmywgkaoogmcsau: $cgmkimaosyyuqeyg = site_url(); goto qywgeimouqcummco; kommicqseqmaiuss: mwagkoucauykimsu: goto yyeowwwqogwoeoyc; wigumuwcsuiaauyw: return $acqcekoeswseswws; goto isoisgaoqmiqeiak; eouoyysyekegaigi: gqsciemssskoqamq: goto wigumuwcsuiaauyw; sgkcewwkiomywgky: $acqcekoeswseswws = $ogomymegcoacqisg; goto syskuqogeeoicwgw; gyaiswaqomsiwcwu: if (strpos($ogomymegcoacqisg, "\57\57") !== false) { goto gmqmkgkikksymkik; } goto kgqyyosqeaqigeuo; sgosioakiaeqmyyy: gmqmkgkikksymkik: goto ocmywgkaoogmcsau; kgqyyosqeaqigeuo: $acqcekoeswseswws = ltrim($ogomymegcoacqisg, "\57"); goto qsamicayummauigq; isoisgaoqmiqeiak: } private function eeykuoewogequiii() : array { return []; } }
