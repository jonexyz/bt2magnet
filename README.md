<h1 align="center"> bt2magnet </h1>

<p align="center"> bt种子转磁力链接</p>

## About
核心代码搬运自网上，我这只是封装成composer包而已。
为方便测试，此包根目录中包含一个 WALL-E.torrent 文件的Bt文件

## Installing

```shell
$ composer require jonexyz/bt2magnet
```

## Usage

```$xslt
<?php
require './vendor/autoload.php';

use Jonexyz\Bt2magnet\MagnetCreate;

// $path Bt种子文件路径
$magnet = MagnetCreate::init($path);
var_dump($magnet);
```

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/jonexyz/bt2magnet/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/jonexyz/bt2magnet/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT