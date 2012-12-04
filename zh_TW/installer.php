<?php defined('SYSPATH') OR die('No direct access allowed.');
// DO NOT EDIT
// This file is automatically generated from the matching PO file
// Updates should be made through Transifex
// I18n generated at: 2012-12-04 06:11+0000
// PO revision date:  2012-08-20 02:58+0000
$lang = array(
	'base_path' => '根路徑',
	'database' => '數據庫',
	'database_host' => '數據庫主機',
	'database_host_description' => '如果您運行Ushahidi在自己的計算機上，該值可能是“localhost”；如果您從Web服務器運行Ushahidi，你需要從您的網站託管服務提供商得到你的主機信息。',
	'database_name' => '數據庫名',
	'database_name_description' => '您要运行Ushahidi的数据库名称',
	'db_information_link' => '有關詳細信息，請查看<a href="http://wiki.ushahidi.com/doku.php?id=a_brief_word_on_databases" target="_blank">這篇文章</ a> wiki上關於數據庫的會談更多細節。',
	'default_language' => '默認語言（區域）',
	'default_language_description' => '每個Ushahidi部署帶有語言翻譯建立了一套。你也可以<A HREF=“htt​​p://wiki.ushahidi.com/doku.php?id=localisation_l10n_internationlisation_i18n&s[] =language#enabling_new_languages” target=“_blank“>添加自己的</ a>',
	'disable' => '禁用',
	'enable' => '啟用',
	'error_summary' => '下面列出的是我們遇到的錯誤的匯總',
	'files_location_text' => '服務器上的位置放置的Ushahidi文件。<strong>我們已自動檢測到這個值，請確保它是正確的。 </ strong>如果該字段是空的，不用擔心，它是指安裝在ushahidi是頂層目錄。',
	'finished' => '已完成',
	'general' => '一般的',
	'google_key_description' => '任何人可以得到一個API 鑰匙. <a id="api-link" href="http://code.google.com/apis/maps/signup.html" target="_blank">獲取一個</a>',
	'go_back' => '返回',
	'index' => array(
		'advanced' => '高級安裝',
		'advanced_installation_description' => '通過5個步驟完成所有基本設置。這包括服務器，地圖，網站的名稱和聯繫方式。',
		'basic_installation' => '基本安裝',
		'basic_installation_description' => '如果你想要得到快速啟動和運行，選擇此選項，簡單、快捷。你只需要設置網站的根目錄和數據庫的信息​​，稍後可以配置一切。',
		'proceed' => '完成',
		'welcome' => '歡迎來到Ushahidi服務器安裝界面。選擇您想用下面的哪種類型的安裝',
	) ,
	'installation_successful' => '安裝成功',
	'mail_server' => '郵件服務器',
	'mail_server_host' => '郵件服務器主機',
	'mail_server_host_description' => '舉例: mail.yourwebsite.com, imap.gmail.com, pop.gmail.com',
	'mail_server_password' => '郵件服務密碼',
	'mail_server_password_description' => '您登陸Email電子郵箱的密碼',
	'mail_server_port' => '郵件服務器端口',
	'mail_server_port_description' => '常用的端口:25, 110, 995 (Gmail POP3 SSL), 993 (Gmail IMAP SSL)',
	'mail_server_type' => '郵件服務器類型',
	'mail_server_type_description' => 'Internet邮件访问协议 (IMAP) or 邮局协议 (POP). <a href="http://saturn.med.nyu.edu/it/help/email/imap/index.html" target="_blank">有什么区别?</a>',
	'mail_server_username' => '郵件服務賬戶',
	'mail_server_username_description' => '如果您使用Gmail，Hotmail，雅虎郵箱，輸入一個完整的電子郵箱地址作為用戶名。',
	'map' => '地圖',
	'map_provider' => '地圖提供程式',
	'map_provider_description' => 'Ushahidi與三個地圖提供程式能很好的工作:谷歌，必應(Bing)或Open Street Map。選擇您所在地區的最詳細的一個。',
	'other_steps' => '其他步驟...',
	'password' => '密碼',
	'password_description' => '數據庫密碼',
	'previous' => '上一步',
	'restart_apache' => '請重啟Apache服務器',
	'select_mail_server_ssl' => '開啟 or 禁用 SSL',
	'select_mail_server_ssl_description' => '有些郵件服務器使用<abbr title="Secure Sockets Layer">SSL</ abbr>建立連接,因為SSL能提高安全水平。',
	'setup_sms' => '安裝 SMS 服務',
	'site_email' => '網站電子郵箱地址',
	'site_email_alerts' => '網站警示電子郵箱地址',
	'site_email_alerts_description' => '當你的網站訪客註冊電子郵箱接收警示信息，他們將收到來自該地址的郵件。此郵件地址不必是同一網站的電子郵件地址。',
	'site_email_description' => '網站將通過這個電子郵箱地址過濾通信。',
	'site_name' => '站點名稱',
	'site_name_description' => '您的網站名稱',
	'site_tagline' => '網站口號',
	'site_tagline_description' => '你網站的標語、口號',
	'summary' => array(
		'text_1' => '下面列出的文件和文件夾，需要在您的網絡服務器上設置為可寫',
		'text_2' => '<p>下面是改變文件權限的說明</p>
        <ul>
            <li><a href="http://www.washington.edu/computing/unix/permissions.html" target="_blank">Unix/Linux</a></li>
            <li><a href="http://support.microsoft.com/kb/308419" target="_blank">Windows</a></li>
        </ul>',
		'text_3' => '在您開始之前，您需要確保以下文件和文件夾在您的網絡服務器上可寫，這涉及到改變文件權限',
		'text_4' => '安裝過程中，請記下一下信息',
	) ,
	'table_prefix' => '數據表前綴',
	'table_prefix_description' => '通常你不會更改表前綴。不過，如果你想從一個單一的數據庫中運行多個Ushahidi實例，你可以通過改變這裡的前綴',
	'title' => '標題',
	'to_login' => '登錄, go to',
	'upload_data' => '上傳Report數據',
	'username' => '用戶名',
	'username_description' => '數據庫用戶名',
	'use_credentials' => '並使用下列認證',
	'view_site' => '查看您的網站',
);
