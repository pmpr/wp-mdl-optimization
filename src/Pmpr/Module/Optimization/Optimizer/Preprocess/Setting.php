<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c832ec5ea4f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Optimization\Optimizer\Preprocess; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Optimization\Setting\SettingSegment; use Pmpr\Module\Optimization\Optimizer\Media\LazyLoad\Setting as LazyLoadSetting; class Setting extends SettingSegment { const miuiaamiwmqyiusa = 'preprocess_'; const qiosyucmyuqcgucq = self::miuiaamiwmqyiusa . 'area'; const wuqwkgmeyuueyoiu = self::miuiaamiwmqyiusa . 'device_type'; const usgieaikqgumccyy = self::miuiaamiwmqyiusa . 'traffic_type'; const mwiumewcouimiacm = self::miuiaamiwmqyiusa . 'do_preprocess'; const osokwigiaoiewoqk = self::miuiaamiwmqyiusa . 'pages_count_in_each_request'; public function ykwqaukkycogooii() { $this->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg('optimize_pagespeed')->jyumyyugiwwiqomk(3)->gswweykyogmsyawy(__('Optimize Google Pagespeed', PR__MDL__OPTIMIZATION))->gucwmccyimoagwcm(__('Increase Google Pagespeed score', PR__MDL__OPTIMIZATION))->saemoowcasogykak(IconInterface::eoigymsasckeaoyi)->kwkugmqouisgkqig($this->ycgeeoiieoiakgam('preprocess')->saemoowcasogykak(IconInterface::gicomimosqwswogk)->gswweykyogmsyawy(__('Preprocess', PR__MDL__OPTIMIZATION))->gucwmccyimoagwcm(__('Preliminary processing before creating cache of elected pages.', PR__MDL__OPTIMIZATION))->mkksewyosgeumwsa($this->yyuwuqsiucweeoue(self::mwiumewcouimiacm)->eumecwmqmukqgyea()->gswweykyogmsyawy(__('Do Preprocess', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(Constants::OFF, __('OFF', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(Constants::ON, __('ON', PR__MDL__OPTIMIZATION))->qyucewwiggkyeaso(Constants::ON, [self::wuqwkgmeyuueyoiu, self::qiosyucmyuqcgucq, self::usgieaikqgumccyy, self::osokwigiaoiewoqk])->qyymoouyewokoeew(Constants::ON, [LazyLoadSetting::wsksomawosgqayso]))->mkksewyosgeumwsa($this->yyuwuqsiucweeoue(self::wuqwkgmeyuueyoiu)->gswweykyogmsyawy(__('Device Type', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(Constants::skogicecygyyskkq, __('Mobile', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(Constants::oceskmgmuoseisoq, __('Tablet', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(Constants::mcaucuyeeiwsmmuy, __('Desktop', PR__MDL__OPTIMIZATION))->eygwoiaoqmqoamee(Constants::ALL)->eumecwmqmukqgyea()->eyygsasuqmommkua(Constants::ALL))->mkksewyosgeumwsa($this->yyuwuqsiucweeoue(self::qiosyucmyuqcgucq)->gswweykyogmsyawy(__('Area', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(Constants::qiaqeaemuukkikmi, __('Backend', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(Constants::iickqyckyaqcaokm, __('Frontend', PR__MDL__OPTIMIZATION))->eygwoiaoqmqoamee(Constants::ygoseweigiigswiu)->eumecwmqmukqgyea()->eyygsasuqmommkua(Constants::ygoseweigiigswiu))->mkksewyosgeumwsa($this->yyuwuqsiucweeoue(self::usgieaikqgumccyy)->gswweykyogmsyawy(__('Traffic Type', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(Constants::meksegaoamowuwoq, sprintf('%s (%s)', __('Users', PR__MDL__OPTIMIZATION), __('With session traffics', PR__MDL__OPTIMIZATION)))->kesomeowemmyygey(Constants::mmukckwymiasqioi, sprintf('%s (%s)', __('Visitors', PR__MDL__OPTIMIZATION), __('Without session traffics', PR__MDL__OPTIMIZATION)))->kesomeowemmyygey(Constants::ygoseweigiigswiu, sprintf('%s + %s', __('Users', PR__MDL__OPTIMIZATION), __('Visitors', PR__MDL__OPTIMIZATION)))->eumecwmqmukqgyea()->eyygsasuqmommkua(Constants::ygoseweigiigswiu))->mkksewyosgeumwsa($this->yyuwuqsiucweeoue(self::osokwigiaoiewoqk)->gswweykyogmsyawy(__('Request Count', PR__MDL__OPTIMIZATION))->kesomeowemmyygey(1, sprintf('%s (%s)', $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(1), __('Suitable for high traffic sites', PR__MDL__OPTIMIZATION)))->kesomeowemmyygey(3, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(3))->kesomeowemmyygey(5, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(5))->kesomeowemmyygey(7, $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(7))->kesomeowemmyygey(9, sprintf('%s (%s)', $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(9), __('Suitable for low traffic sites', PR__MDL__OPTIMIZATION)))->eumecwmqmukqgyea()->eyygsasuqmommkua(5)))); } }
