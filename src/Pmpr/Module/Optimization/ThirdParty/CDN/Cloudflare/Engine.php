<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f27b5e4c040             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; class Engine extends Common { const gwqkkoaoiwoiyiag = "\142\x72\157\167\163\x65\x72\137\164\x74\x6c"; const ewoiqwokqwgckgko = "\162\x65\x73\160\145\143\x74\x5f\157\162\x69\x67\151\156"; const semgeiqsogkegsee = "\141\143\164\x69\157\156\x5f\160\x61\162\141\x6d\x65\x74\x65\x72\x73"; const meigsywkomcimgyk = "\x73\145\164\137\x63\141\x63\150\145\137\x73\x65\x74\x74\151\x6e\x67\x73"; const mcquuuwkyksuqaso = "\x63\x61\143\150\x65\x5f\x62\x79\137\144\x65\166\x69\143\145\x5f\x74\171\160\145"; const sosggameqyisqsaw = "\x63\141\143\150\145\137\x64\145\x63\145\160\x74\x69\157\x6e\x5f\x61\x72\x6d\x6f\x72"; private ?API $api = null; public function mgmmiqgyemaeicim() : API { if ($this->api) { goto ucasigqmoiwaimkk; } $this->api = API::symcgieuakksimmu(); ucasigqmoiwaimkk: return $this->api; } public function ymkgoumkoycwwmmq() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto uugwmywmaqomeksa; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->ymkgoumkoycwwmmq(); uugwmywmaqomeksa: return $ksaameoqigiaoigg; } public function emukusgiakigsoms(string $wmekckkyoiyickmk) { return $this->mgmmiqgyemaeicim()->emukusgiakigsoms($wmekckkyoiyickmk); } public function iqokecwcgkaookuc() { return $this->mgmmiqgyemaeicim()->iqokecwcgkaookuc(); } public function mekmkysuwsuseaow() : ?string { return $this->mgmmiqgyemaeicim()->mekmkysuwsuseaow(); } public function sqmcyegkigweiwks() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto wowmysuygugawmmu; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->sqmcyegkigweiwks(); wowmysuygugawmmu: return $ksaameoqigiaoigg; } public function cgeuggsaswuguyqq($auwuoyyagaiegwae, bool $eaouccqceiqewoai = false) { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto mmmqqoemusicwgqg; } $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->cgeuggsaswuguyqq($auwuoyyagaiegwae, $eaouccqceiqewoai); mmmqqoemusicwgqg: return $ksaameoqigiaoigg; } public function oakemcgacwakmawm() { $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $this->weysguygiseoukqw(Setting::kskcqqggeskwysas, ''); if (!($keyoqcuykssgcoau !== '')) { goto gsiaskgsukseumig; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($keyoqcuykssgcoau); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { goto iquugwoswgkoiieg; } $ksaameoqigiaoigg = $kwogmsuwiyakckuo; goto xogaycsaesgqeqig; iquugwoswgkoiieg: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, ''); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, ''); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, ''); $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, false); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; xogaycsaesgqeqig: gsiaskgsukseumig: return $ksaameoqigiaoigg; } public function qmykgskisgoyymoc() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (is_wp_error($ksaameoqigiaoigg)) { goto iuyagqakcieasiua; } $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $yqimccamkgmmuuyg->ymygowkkwyigwcea(); if (!(!$keyoqcuykssgcoau || !is_string($keyoqcuykssgcoau))) { goto syiyemqigyugagks; } $keyoqcuykssgcoau = $yqimccamkgmmuuyg->cgkaaimwgiesmwaw(); syiyemqigyugagks: if ($keyoqcuykssgcoau && is_string($keyoqcuykssgcoau)) { goto mccimkgwkkamsime; } $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x43\141\x6e\40\156\x6f\164\x20\x63\x72\145\x61\164\145\40\x6f\162\x20\x66\145\x74\143\x68\40\143\141\143\x68\x65\x20\162\165\154\x65\x73\145\164\72\40{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keyoqcuykssgcoau)}"); goto ucaoyoamaycsiacq; mccimkgwkkamsime: $acqqmqmcquukaqsc = $yqimccamkgmmuuyg->wooogwsuiygsuuso($keyoqcuykssgcoau); if (!($acqqmqmcquukaqsc && is_array($acqqmqmcquukaqsc))) { goto omsmaougqkqigogw; } foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ymawgemiwyykseqg = $ekuqiqmikiicgoss[Constants::gouqcwikiiygyasc] ?? 0; if (!$ymawgemiwyykseqg) { goto umemmgiwimkymaya; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $ymawgemiwyykseqg); umemmgiwimkymaya: imwiyqcekcykscui: } woqkgwmkmqsuceuy: omsmaougqkqigogw: $emqycqesyamqucem = $this->cqcmymomccgkimum($keyoqcuykssgcoau); if (!($emqycqesyamqucem && is_string($emqycqesyamqucem))) { goto guqmgiqaaowaauyo; } $oaugeqsymqaoycyq = $this->aucomcawieaawqeo($keyoqcuykssgcoau); if ($oaugeqsymqaoycyq && is_string($oaugeqsymqaoycyq)) { goto geasgywiogoeamek; } $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $emqycqesyamqucem); goto qweyymyuuqwcmkqg; geasgywiogoeamek: $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, $keyoqcuykssgcoau); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, $oaugeqsymqaoycyq); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, $emqycqesyamqucem); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; qweyymyuuqwcmkqg: guqmgiqaaowaauyo: ucaoyoamaycsiacq: $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, $ksaameoqigiaoigg); iuyagqakcieasiua: return $ksaameoqigiaoigg; } public function aucomcawieaawqeo(?string $uiwqqmmiwqqqaugc = '', bool $seqoqauciqkusakq = true) { if ($uiwqqmmiwqqqaugc) { goto oasisywuwssumsok; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); oasisywuwssumsok: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\x28\x73\x74\x61\162\x74\163\x5f\167\151\x74\150\50\x68\164\164\x70\56\162\145\x71\x75\145\163\x74\56\165\162\x69\x2e\160\141\164\150\54\x20\x22\x2f\42\x29\51", Constants::eqkeooqcsscoggia => "\103\x61\x63\150\x65\40\x46\x72\157\x6e\164\145\x6e\144\x20\101\x72\x65\141", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => true, Constants::ccqguwgsqaugymus => [self::mcquuuwkyksuqaso => $seqoqauciqkusakq, self::sosggameqyisqsaw => true], self::gwqkkoaoiwoiyiag => [Constants::kwkgsmiueykcqisc => self::ewoiqwokqwgckgko]]]); } public function cqcmymomccgkimum(?string $uiwqqmmiwqqqaugc = '') { if ($uiwqqmmiwqqqaugc) { goto iaoyeugekskmewgs; } $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); iaoyeugekskmewgs: return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\50\x73\x74\141\x72\164\163\x5f\x77\151\x74\x68\x28\x68\164\164\x70\x2e\162\145\x71\x75\145\163\164\56\165\x72\151\x2e\x70\x61\164\x68\x2c\x20\42\x2f\167\160\55\x61\x64\x6d\151\x6e\57\x22\x29\51", Constants::eqkeooqcsscoggia => "\102\x79\x70\141\x73\163\40\x42\x61\x63\153\145\156\x64\40\x41\x72\145\141", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => false]]); } public function ewqscwwmugoqwomg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function ammwuioucccacgwc() : bool { return !empty($this->weysguygiseoukqw(Setting::kskcqqggeskwysas)) && !empty($this->weysguygiseoukqw(Setting::qsqggqaguqoawwea)) && !empty($this->weysguygiseoukqw(Setting::uswuyomyeyomqumi)); } public function omimwscgequgiaue(bool $mgsisqykeuaqsmmk = true) { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); if (!empty($yqimccamkgmmuuyg->cseqaqmuaswgwuoo())) { goto iokemmkgmcaksiqu; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x43\x6c\x6f\165\144\x66\x6c\x61\162\x65\40\x25\x73\x20\156\x6f\x74\x20\145\156\x74\x65\x72\145\144\41", PR__MDL__OPTIMIZATION), __("\x65\x2d\155\141\x69\x6c", PR__MDL__OPTIMIZATION))); iokemmkgmcaksiqu: switch ($yqimccamkgmmuuyg->caeygcowcuqeqkeo()) { case Setting::eywauigiwgqckygk: if (!empty($yqimccamkgmmuuyg->gkuoyaqwcaqcqmck())) { goto kieyoaoawqacqamy; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x43\x6c\x6f\165\144\x66\x6c\x61\162\x65\x20\x25\x73\40\156\157\x74\x20\145\156\x74\x65\x72\145\x64\x21", PR__MDL__OPTIMIZATION), __("\x41\120\111\40\x54\157\x6b\145\156", PR__MDL__OPTIMIZATION))); kieyoaoawqacqamy: if (!($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->sawoqaskqkasksge()))) { goto qckouamqueqiykqi; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\150\145\x72\x65\40\x69\163\x20\141\x20\160\162\157\x62\x6c\x65\155\40\x6f\156\40\x66\145\x74\143\x68\x69\x6e\147\40\162\x65\x6c\141\164\x65\x64\x20\144\x6f\155\x61\x69\156\x20\x74\157\40\x65\156\164\x65\162\145\x64\x20\x61\160\x69\40\x74\x6f\x6b\x65\x6e\x2e", PR__MDL__OPTIMIZATION)); qckouamqueqiykqi: goto okagauksoqkoqygi; case Setting::fsekswokoseswcqm: if (!empty($yqimccamkgmmuuyg->aocqkkgewgggwwys())) { goto measoqewessauqma; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\103\154\x6f\165\x64\x66\154\x61\x72\145\x20\x25\163\40\156\x6f\x74\40\145\x6e\164\x65\x72\145\x64\41", PR__MDL__OPTIMIZATION), __("\x41\x50\111\40\x4b\x65\171", PR__MDL__OPTIMIZATION))); measoqewessauqma: if (!($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->mekmkysuwsuseaow()))) { goto auaigccmwqwsqsku; } return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\150\x65\x72\145\40\151\163\x20\x61\40\160\162\157\x62\x6c\x65\155\40\x6f\156\40\146\x65\x74\143\150\x69\x6e\147\40\162\145\154\141\164\145\144\40\x7a\157\156\145\x20\151\x64\x20\x74\157\40\x65\x6e\164\x65\162\145\x64\x20\x61\160\151\40\x6b\x65\x79\x2e", PR__MDL__OPTIMIZATION)); auaigccmwqwsqsku: goto okagauksoqkoqygi; } eciksmgaqikwegwq: okagauksoqkoqygi: return true; } }
