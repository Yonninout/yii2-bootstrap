<?php
/**
 * @link http://www.diemeisterei.de/
 * @copyright Copyright (c) 2015 diemeisterei GmbH, Stuttgart
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Class BootstrapAsset
 *
 * @author Christopher Stebe <c.stebe@herzogkommunikation.de>
 */

namespace dmstr\bootstrap;

use yii\web\AssetBundle;
use yii\web\View;

class BootstrapAsset extends AssetBundle
{
    public $sourcePath = '@bower';

    public $css = [
    ];
    public $js = [
        'jquery.cookie/jquery.cookie.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
    public $jsOptions = [
        'position' => View::POS_END,
    ];
}
