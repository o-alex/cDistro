<?php
// Default file..

function index(){
        global $appHost, $appHostname, $sysCPU, $sysRAM, $sysStorage;

        $page = "";

        $page .= hl(t('Welcome!'));
        $page .= "<h3><strong>".t('System info')."</strong></h3>";
        $page .= "<small>";
        $page .= "<strong>".t('Address')."</strong>: ".$appHost."<br/>";
        $page .= "<strong>".t('Hostname')."</strong>: ".$appHostname."<br/>";
        $page .= "<strong>CPU</strong>: ".$sysCPU."<br/>";
        $page .= "<strong>RAM</strong>: ".$sysRAM."<br/>";
	$page .= "<strong>".t('Storage (total / available)')."</strong>: ".$sysStorage."<br/>";
        $page .= "</small><br/>";

        $page .= t("Let's configure your system!");

        return(array('type'=>'render','page'=>$page));
}

function install(){
	return(_genericInstallUninstall('Install'));
}

function uninstall(){
	return(_genericInstallUninstall('Uninstall'));
}

function lang() {
	global $LANG,$staticFile,$Parameters;


	if (isset($Parameters[0]) && ($Parameters[0]  != "" )) {
		$LANG=$Parameters[0];
		setSessionValue('lang',$LANG);
		setFlash(t('Define language to: ')."$LANG");
	}
	return(array('type'=>'redirect','url' => $staticFile));
}

function realInstall(){
	global $Parameters,$staticFile;
	$page = "";

	if (isset($Parameters[0]) && ($Parameters[0]  != "" )) {
		$pkg = $Parameters[0];
		$ret = "";

		$page .= txt(t("default_realInstall_result"));
		if (!isPackageInstall($pkg)){
			$ret = installPackage($pkg);

			if (isPackageInstall($pkg))
				$page .= "<div class='alert alert-success text-center'>".t("default_realInstall_installed_pre").$pkg.t("default_realInstall_installed_post")."</div>\n";
			else
				$page .= "<div class='alert alert-error text-center'>".t("default_realInstall_not_installed_pre").$pkg.t("default_realInstall_not_installed_post")."</div>\n";

			$page .= txt(t("default_realInstall_details"));
			$page .= ptxt($ret);
		}

		else {
			$page .= "<div class='alert alert-success text-center'>".t("default_realInstall_not_installed_pre").$pkg.t("default_realInstall_not_installed_post")."</div>\n";
		}
	}
	$page .= "<a class='btn btn-default' href='".$staticFile."'>".t("default_button_back")."</a>";

	return(array('type'=>'ajax','page'=>$page));


}

function realUninstall(){
	global $Parameters,$staticFile;
	$page = "";

	if (isset($Parameters[0]) && ($Parameters[0]  != "" )) {
		$pkg = $Parameters[0];
		$ret = "";

		$page .= txt(t("default_realUninstall_result"));
		if (isPackageInstall($pkg)){
			$ret = uninstallPackage($pkg);

			if (isPackageInstall($pkg))
				$page .= "<div class='alert alert-error text-center'>".t("default_realUninstall_installed_pre").$pkg.t("default_realUninstall_installed_post")."</div>\n";
			else
				$page .= "<div class='alert alert-success text-center'>".t("default_realUninstall_not_installed_pre").$pkg.t("default_realUninstall_not_installed_post")."</div>\n";

			$page .= txt(t("default_realUninstall_details"));
		}

		else {
			$page .= "<div class='alert alert-success text-center'>".t("default_realUninstall_not_installed_pre").$pkg.t("default_realUninstall_not_installed_post")."</div>\n";
			$ret = "$pkg ".t("isn't installed.");
		}
	}
	$page .= "<a class='btn btn-default' href='".$staticFile."'>".t("default_button_back")."</a>";

	return(array('type'=>'ajax','page'=>$page));
}

function _genericInstallUninstall($strFunction){
	global $Parameters,$staticFile,$staticPath;

	if ((isset($Parameters[0])) && ($Parameters[0]  != "" )) {
		$pkg = $Parameters[0];
		$ret = "";

		$page = "";

		$page .= hlc(t("lib-view_common_package_manager_title"));
		$page .= hl(t("lib-view_common_package_manager_subtitle"),4);

		$page .= ajaxStr('console',t("default_generic_I_U_pre_".$strFunction).$pkg.t("default_generic_I_U_post_".$strFunction));
		$page .= "<script>\n";
		$page .= "$('#console').load('".$staticFile."/default/real".$strFunction."/".$pkg."');\n";
		$page .= "</script>\n";

		return(array('type'=>'render','page'=>$page));
	} else {
		return(array('type'=>'redirect','url' => $staticFile.'/'));
	}
}
