<?php

/* ---------------------------------------------------------------------------
 * @Plugin Name: Banneroid
 * @Plugin Id: Banneroid
 * @Plugin URI:
 * @Description: Banner rotator for LS
 * @Author: stfalcon-studio
 * @Author URI: http://stfalcon.com
 * @LiveStreet Version: 0.4.2
 * @License: GNU GPL v2, http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * ----------------------------------------------------------------------------
 */

/**
 * Add banners block in to side bar
 * Add a link to menu
 *
 * @return mixed
 */
class PluginAb_WidgetBanneroid extends Widget {

    public function Exec() {
        $aBanners = $this->GetParam('aBanners');
        if (isset($aBanners[0])) {
            $this->Viewer_Assign("oBanner", $aBanners[0]);
        }
        $this->Viewer_Assign('sBannersPath', Config::Get("plugin.ab.images_dir"));
    }

}