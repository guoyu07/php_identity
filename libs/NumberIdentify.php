<?php
    /**
     * Created by PhpStorm.
     * User: lance
     * Date: 2017/10/30
     * Time: 10:52
     */

    namespace php_identify\libs;

    /**
     * 随机电话号码
     * Class NumberIdentify
     * @package php_identify\libs
     */
    class NumberIdentify extends Identify
    {
        protected $o_decorate;
        protected $s_name = "电话";
        public function set(){
            $mobileSegment = [
                '134', '135', '136', '137', '138', '139', '150', '151', '152', '157', '130', '131', '132', '155', '186', '133', '153', '189',
            ];
            $prefix = $mobileSegment[array_rand($mobileSegment)];
            $middle = mt_rand(2000, 9000);
            $suffix = mt_rand(2000, 9000);
            $this->o_decorate->a_msg[$this->s_name] = $prefix.$middle.$suffix;
        }
    }