<?php
namespace Jonexyz\Bt2magnet;

use Jonexyz\Bt2magnet\Core\BEncode;
use Jonexyz\Bt2magnet\Core\BDecode;
use Jonexyz\Bt2magnet\Exceptions\Exceptions;

class MagnetCreate
{
    /**
     * 调用生成磁力链接
     * @param $path string  bt种子文件路径
     * @return string 返回磁力链接
     * @throws Exceptions
     */
    public static function init($path)
    {
        if(is_file($path)) {
            $torrent = file_get_contents($path);
            $desc = BDecode::BDecodeDo($torrent);
            $info = $desc['info'];
            $hash = strtoupper(sha1( BEncode::BEncodeDo($info) ));
            $magnet = sprintf('magnet:?xt=urn:btih:%s&dn=%s', $hash, $info['name']);
            return $magnet;
        }else{
            throw New Exceptions('传入的参数需是bt种子绝对路径');
        }
    }
}

