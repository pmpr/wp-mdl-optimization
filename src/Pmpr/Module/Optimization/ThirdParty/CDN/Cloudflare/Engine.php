<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6757fa68d1c92             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\ThirdParty\CDN\Cloudflare; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; class Engine extends Common { const gwqkkoaoiwoiyiag = "\142\x72\157\x77\x73\145\162\137\x74\x74\x6c"; const ewoiqwokqwgckgko = "\x72\x65\163\160\145\x63\164\137\157\162\151\x67\151\156"; const semgeiqsogkegsee = "\141\143\x74\x69\157\x6e\x5f\x70\x61\x72\x61\155\145\164\x65\162\163"; const meigsywkomcimgyk = "\163\x65\164\x5f\x63\x61\x63\x68\x65\x5f\x73\x65\164\x74\151\x6e\x67\163"; const mcquuuwkyksuqaso = "\x63\x61\x63\150\x65\137\142\x79\137\144\145\166\151\143\x65\x5f\x74\x79\x70\145"; const sosggameqyisqsaw = "\143\141\x63\150\145\137\144\x65\x63\145\160\164\151\157\x6e\137\x61\x72\x6d\x6f\162"; private ?API $api = null; public function mgmmiqgyemaeicim() : API { if (!$this->api) { $this->api = API::symcgieuakksimmu(); } return $this->api; } public function ymkgoumkoycwwmmq() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (!is_wp_error($ksaameoqigiaoigg)) { $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->ymkgoumkoycwwmmq(); } return $ksaameoqigiaoigg; } public function emukusgiakigsoms(string $wmekckkyoiyickmk) { return $this->mgmmiqgyemaeicim()->emukusgiakigsoms($wmekckkyoiyickmk); } public function iqokecwcgkaookuc() { return $this->mgmmiqgyemaeicim()->iqokecwcgkaookuc(); } public function mekmkysuwsuseaow() : ?string { return $this->mgmmiqgyemaeicim()->mekmkysuwsuseaow(); } public function sqmcyegkigweiwks() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (!is_wp_error($ksaameoqigiaoigg)) { $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->sqmcyegkigweiwks(); } return $ksaameoqigiaoigg; } public function cgeuggsaswuguyqq($auwuoyyagaiegwae, bool $eaouccqceiqewoai = false) { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (!is_wp_error($ksaameoqigiaoigg)) { $ksaameoqigiaoigg = $this->mgmmiqgyemaeicim()->cgeuggsaswuguyqq($auwuoyyagaiegwae, $eaouccqceiqewoai); } return $ksaameoqigiaoigg; } public function oakemcgacwakmawm() { $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $this->weysguygiseoukqw(Setting::kskcqqggeskwysas, ''); if ($keyoqcuykssgcoau !== '') { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $kwogmsuwiyakckuo = $yqimccamkgmmuuyg->kwogmsuwiyakckuo($keyoqcuykssgcoau); if ($kwogmsuwiyakckuo && !is_wp_error($kwogmsuwiyakckuo)) { $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, ''); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, ''); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, ''); $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, false); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; } else { $ksaameoqigiaoigg = $kwogmsuwiyakckuo; } } return $ksaameoqigiaoigg; } public function qmykgskisgoyymoc() { $ksaameoqigiaoigg = $this->omimwscgequgiaue(); if (!is_wp_error($ksaameoqigiaoigg)) { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); $ksaameoqigiaoigg = false; $keyoqcuykssgcoau = $yqimccamkgmmuuyg->ymygowkkwyigwcea(); if (!$keyoqcuykssgcoau || !is_string($keyoqcuykssgcoau)) { $keyoqcuykssgcoau = $yqimccamkgmmuuyg->cgkaaimwgiesmwaw(); } if ($keyoqcuykssgcoau && is_string($keyoqcuykssgcoau)) { $acqqmqmcquukaqsc = $yqimccamkgmmuuyg->wooogwsuiygsuuso($keyoqcuykssgcoau); if ($acqqmqmcquukaqsc && is_array($acqqmqmcquukaqsc)) { foreach ($acqqmqmcquukaqsc as $ekuqiqmikiicgoss) { $ymawgemiwyykseqg = $ekuqiqmikiicgoss[Constants::gouqcwikiiygyasc] ?? 0; if ($ymawgemiwyykseqg) { $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $ymawgemiwyykseqg); } } } $emqycqesyamqucem = $this->cqcmymomccgkimum($keyoqcuykssgcoau); if ($emqycqesyamqucem && is_string($emqycqesyamqucem)) { $oaugeqsymqaoycyq = $this->aucomcawieaawqeo($keyoqcuykssgcoau); if ($oaugeqsymqaoycyq && is_string($oaugeqsymqaoycyq)) { $this->ewqscwwmugoqwomg(Setting::kskcqqggeskwysas, $keyoqcuykssgcoau); $this->ewqscwwmugoqwomg(Setting::uswuyomyeyomqumi, $oaugeqsymqaoycyq); $this->ewqscwwmugoqwomg(Setting::qsqggqaguqoawwea, $emqycqesyamqucem); $yqimccamkgmmuuyg->sqmcyegkigweiwks(); $ksaameoqigiaoigg = true; } else { $yqimccamkgmmuuyg->koakkeimqaokakym($keyoqcuykssgcoau, $emqycqesyamqucem); } } } else { $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x43\141\x6e\x20\156\157\164\x20\143\162\x65\x61\164\145\x20\x6f\x72\40\146\x65\x74\x63\x68\40\x63\141\143\150\x65\40\162\x75\154\145\x73\x65\164\x3a\x20{$this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($keyoqcuykssgcoau)}"); } $this->ewqscwwmugoqwomg(Setting::kwuagsmkgsoqgqqi, $ksaameoqigiaoigg); } return $ksaameoqigiaoigg; } public function aucomcawieaawqeo(?string $uiwqqmmiwqqqaugc = '', bool $seqoqauciqkusakq = true) { if (!$uiwqqmmiwqqqaugc) { $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); } return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\50\x73\x74\x61\162\x74\x73\x5f\x77\151\164\x68\50\x68\x74\164\160\56\162\x65\x71\165\x65\163\x74\56\x75\162\151\56\x70\x61\164\150\54\40\42\x2f\x22\x29\51", Constants::eqkeooqcsscoggia => "\103\141\x63\150\145\40\x46\x72\157\156\164\145\156\144\x20\x41\162\x65\x61", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => true, Constants::ccqguwgsqaugymus => [self::mcquuuwkyksuqaso => $seqoqauciqkusakq, self::sosggameqyisqsaw => true], self::gwqkkoaoiwoiyiag => [Constants::kwkgsmiueykcqisc => self::ewoiqwokqwgckgko]]]); } public function cqcmymomccgkimum(?string $uiwqqmmiwqqqaugc = '') { if (!$uiwqqmmiwqqqaugc) { $uiwqqmmiwqqqaugc = (string) $this->weysguygiseoukqw(Setting::kskcqqggeskwysas); } return $this->mgmmiqgyemaeicim()->icgowyskqkokqisu($uiwqqmmiwqqqaugc, [Constants::uqgcmmosieyimiku => self::meigsywkomcimgyk, Constants::yyicwqsqaecyqwco => true, Constants::guqyegycwyqquagq => "\50\x73\164\x61\x72\x74\x73\x5f\167\151\164\150\50\x68\x74\164\x70\56\x72\x65\161\165\x65\x73\164\x2e\165\x72\151\x2e\160\x61\164\x68\x2c\x20\42\x2f\x77\160\55\x61\x64\155\151\156\x2f\x22\x29\x29", Constants::eqkeooqcsscoggia => "\x42\x79\160\141\163\x73\40\102\x61\143\x6b\145\156\x64\40\x41\162\x65\141", self::semgeiqsogkegsee => [Constants::mqakwueykamgwqci => false]]); } public function ewqscwwmugoqwomg(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) { $this->kmuweyayaqoeqiyw()->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function ammwuioucccacgwc() : bool { return !empty($this->weysguygiseoukqw(Setting::kskcqqggeskwysas)) && !empty($this->weysguygiseoukqw(Setting::qsqggqaguqoawwea)) && !empty($this->weysguygiseoukqw(Setting::uswuyomyeyomqumi)); } public function omimwscgequgiaue(bool $mgsisqykeuaqsmmk = true) { $yqimccamkgmmuuyg = $this->mgmmiqgyemaeicim(); if (empty($yqimccamkgmmuuyg->cseqaqmuaswgwuoo())) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x43\x6c\x6f\165\144\x66\154\141\162\145\40\45\163\40\x6e\x6f\x74\x20\x65\156\164\x65\162\145\144\41", PR__MDL__OPTIMIZATION), __("\145\x2d\155\x61\151\154", PR__MDL__OPTIMIZATION))); } switch ($yqimccamkgmmuuyg->caeygcowcuqeqkeo()) { case Setting::eywauigiwgqckygk: if (empty($yqimccamkgmmuuyg->gkuoyaqwcaqcqmck())) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\x43\154\157\x75\144\x66\154\x61\162\145\40\45\x73\40\x6e\x6f\x74\40\x65\156\x74\145\162\x65\144\x21", PR__MDL__OPTIMIZATION), __("\101\x50\111\40\124\x6f\153\145\x6e", PR__MDL__OPTIMIZATION))); } if ($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->sawoqaskqkasksge())) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\124\x68\145\x72\145\x20\151\x73\x20\141\40\x70\x72\x6f\x62\x6c\145\x6d\40\x6f\156\40\x66\x65\x74\143\x68\x69\156\x67\x20\x72\x65\154\x61\x74\x65\x64\40\x64\157\x6d\141\151\156\40\x74\x6f\x20\145\156\x74\145\x72\145\x64\x20\x61\x70\151\x20\x74\x6f\153\145\156\x2e", PR__MDL__OPTIMIZATION)); } break; case Setting::fsekswokoseswcqm: if (empty($yqimccamkgmmuuyg->aocqkkgewgggwwys())) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(sprintf(__("\103\x6c\x6f\165\x64\146\x6c\141\162\x65\40\x25\163\40\156\x6f\x74\40\x65\x6e\164\145\162\x65\144\41", PR__MDL__OPTIMIZATION), __("\101\120\x49\x20\x4b\x65\171", PR__MDL__OPTIMIZATION))); } if ($mgsisqykeuaqsmmk && empty($yqimccamkgmmuuyg->mekmkysuwsuseaow())) { return $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x54\150\145\162\145\x20\151\x73\x20\x61\x20\x70\x72\x6f\142\x6c\145\x6d\40\157\156\40\146\145\x74\x63\150\151\156\x67\x20\162\x65\x6c\141\x74\x65\144\40\x7a\157\156\x65\x20\151\144\40\x74\x6f\x20\x65\156\x74\145\162\x65\144\x20\x61\x70\151\x20\x6b\145\x79\x2e", PR__MDL__OPTIMIZATION)); } break; } return true; } }
