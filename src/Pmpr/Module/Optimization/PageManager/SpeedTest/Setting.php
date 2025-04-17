<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6801062d56cfb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\PageManager\SpeedTest; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\Setting\SettingSegment; class Setting extends SettingSegment { const qeyoiceawgogguma = SpeedTest::quouokcgsyacigiu . '_'; const uauwkaimuwugwwma = self::qeyoiceawgogguma . Constants::yyicwqsqaecyqwco; const aaoaisyimicyegqw = self::qeyoiceawgogguma . 'initiator'; const quyascocmiiossme = self::qeyoiceawgogguma . 'not_dispatchable'; const uaaaykukiogugmga = 'periodic'; const wwgqqgayyagycysu = 'purge_cache'; public function ykwqaukkycogooii() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $oceoauekaygmuoko = $uuyucgkyusckoaeq->mkcwgaeaaweamyyg('speed_test')->jyumyyugiwwiqomk(4)->saemoowcasogykak(IconInterface::uocgccoegieeseea)->gswweykyogmsyawy(__('Elected Pages\'s Speed Test', PR__MDL__OPTIMIZATION))->gucwmccyimoagwcm(__('By Google Pagespeed', PR__MDL__OPTIMIZATION))->cuomeiwckekemywm($this->symouyowemaacayu(), Constants::smkwuwawwaqyimcq, false); if ($this->giiuwsmyumqwwiyq(self::uauwkaimuwugwwma) && $this->giiuwsmyumqwwiyq(self::quyascocmiiossme)) { $cmwygeyygwqaemaq = sprintf(__('Access to the pages of your site is blocked by Google to perform the page speed test and you will encounter the error %s. To solve the problem, check the firewall settings on program, your site\'s server or cloud service (Cloudflare) and make the necessary access.', PR__MDL__OPTIMIZATION), 'HTTP Status Code: 403'); $aiamqeawckcsuaou = $this->caokeucsksukesyo()->wmkogisswkckmeua()->igiawkoqiogocsau([Constants::squoamkioomemiyi => Constants::PRIMARY, Constants::qescuiwgsyuikume => __('Fix access to pagespeed test', PR__MDL__OPTIMIZATION), Constants::ssmskyqgcmeiayco => __('If by creating or editing the appropriate Security Rule in the program, firewall server or cloud service of the site, you have provided the necessary access from the Google client to the pages of your site and fixed the 403 Forbidden error, click on the button below.', PR__MDL__OPTIMIZATION), Constants::kekekeusyqkouowm => [Constants::mosycwwoqguicaeo, [Constants::qescuiwgsyuikume => __('I created access', PR__MDL__OPTIMIZATION), 'class' => 'pr-btn btn-primary pr-opt-speed-test-not-dispachable-fixed']]], __('I created the necessary access', PR__MDL__OPTIMIZATION), ['class' => 'pr-btn btn-primary mt-2 mx-auto my-md-auto ml-md-4']); $oceoauekaygmuoko->cuomeiwckekemywm($this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui([$cmwygeyygwqaemaq, $aiamqeawckcsuaou], ['class' => 'd-flex flex-column flex-md-row justify-content-between'])); } $this->ogimmkwaymekmoky($oceoauekaygmuoko->kwkugmqouisgkqig($uuyucgkyusckoaeq->ycgeeoiieoiakgam(Constants::ioomakeyqiqowgmk)->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->gswweykyogmsyawy(__('General', PR__MDL__OPTIMIZATION))->gucwmccyimoagwcm(__('Performing a speed test automatically with the Google PageSpeed tool, for those selected pages that are marked as speed test candidates.', PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(self::uauwkaimuwugwwma)->eumecwmqmukqgyea()->gswweykyogmsyawy(__('Do Speed Test', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(Constants::OFF, __('OFF', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(Constants::ON, sprintf('%s <span>%s</span>', $this->kciwwegaqoqscqeo(), __('ON', PR__MDL__OPTIMIZATION)))->qyucewwiggkyeaso(Constants::ON, self::aaoaisyimicyegqw))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(self::aaoaisyimicyegqw)->eumecwmqmukqgyea()->gswweykyogmsyawy(__('Speed Test Initiator', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(self::wwgqqgayyagycysu, __('Page Cache Event', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(self::uaaaykukiogugmga, [Constants::uissasisiuymwsmu => __('In Certain Time Periods', PR__MDL__OPTIMIZATION), Constants::wuasowoqaccigqqu => true])))); } }
