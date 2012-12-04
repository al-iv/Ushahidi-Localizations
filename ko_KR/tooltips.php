<?php defined('SYSPATH') OR die('No direct access allowed.');
// DO NOT EDIT
// This file is automatically generated from the matching PO file
// Updates should be made through Transifex
// I18n generated at: 2012-12-04 06:11+0000
// PO revision date:  2012-09-20 14:56+0000
$lang = array(
	'actions' => array(
		'add_to_category' => '이 기능은 하나의 리포트에 추가 카테고리를 설정할 수 있게 합니다. 예를 들면 카테고리 1을 선택하고 카테고리 2를 추가로 선택하면, 해당 리포트는 2개의 카테고리에 속하게 됩니다.',
		'approve' => '리포트를 승인 또는 하지 않음. 만약 승인하면 리포트는 공개됩니다.',
		'assign_badge' => '사용자에게 배지를 지정할 수 있습니다. 지정할 배지를 선택하세요.',
		'between_times' => '24시간 형식으로 시간 범위를 지정할 수 있습니다. 나중의 시간이 앞에 설정한 시간보다 빠르면 오류가 발생합니다. 또한, 시간은 하루 내 이어야 합니다. 그리고 설정한 시간은 사이트 설정에서 설정한 사이트 시간을 기준으로 하며, 사용자의 타임존을 필요로 하지는 않습니다. 시간을 입력하지 않으려면 00:00에서 00:00의 형식으로 놔두면 됩니다.',
		'category' => '만약에 특정 카테고리가 사용이 될 때 트리거를 활성화하고자 한다면 여기서 설정을 할 수 있습니다. 카테고리 중의 하나가 사용될 경우에만 활성화 될 것입니다. 예를 들면 카테고리 1과 카테고리 2를 선택하고 리포트가 카테고리 2와 카테고리 3에 등록되면, 그것은 테스트를 통과 할 것입니다.',
		'days_of_the_week' => '여기서 설정을 통해 특정 요일에 이것들을 실행되게 할 수 있습니다. 당신의 배치상의 타임존을 반드시 고려해야 합니다. shift키와 command 또는 control키를 동시에 누르면 중복 요일 선택이 가능합니다.',
		'email_body' => '이메일의 본문이 전송됩니다.',
		'email_subject' => '이메일의 제목이 전송됩니다.',
		'feed_id' => '피드는 전부 또는 일부가 될 수 있습니다. 만약, 특정 피드로 활성화 하고자 할 경우, 여기서 선택해 주세요. 아니면, 전체를 선택할 수 도 있습니다.',
		'from' => '트위터 사용자이름(2명이상의 사용자이름은 콤마로 구분해주세요). 만약에 특정 사용자의 트위터 메시지로만 활성화 하고자 할 경우 사용자이름을 @를 빼고 입력해주세요.',
		'keywords' => '키워드를 입력하길 원하지 않으면 빈칸으로 두어도 됩니다. 만약, 단어를 입력하고자 하면, 콤마(,)로 구분하면 됩니다. 예를 들어 "love"또는"peace"를 메시지에 넣고자 하면, "love,peace"의 형태로 구분 입력하면 됩니다.',
		'location' => '다양한 지역 선택이 가능합니다. 만약, 특정 지역을 선택하고 해당 지역에서만 리포트를 받을 수 있습니다. 예를 들어 누군가로부터 브라질에 관련한 리포트를 받길 원하면, "특정지역"을 선택하고, 브라질 주위에 박스를 그려 이를 설정할 수 있습니다. 이 박스의 크기는 자유롭게 설정할 수 있으며, 1개 이상의 박스를 그릴 수 있습니다.',
		'on_specific_count' => '이것은 전체 유저 베이스 또는 개별 유저 중 하나에서 특정번째에서 작동되게 할 수 있습니다. 사용하지 않으려면 빈칸으로 두면 됩니다.',
		'report_title' => '리포트의 기본 제목입니다.',
		'response' => '만약, 모든 통과자들이 통과하면, 트리거는 응답을 시작합니다. 이것은 리포트를 승인하고 이메일로 사용자에게 알리는 것을 말합니다. 여기서 세부적인 응답내용을 추가하고 설정할 수 있습니다.',
		'send_to' => '만약, 트리거 사용자를 선택하면, 특정 액션을 실행한 사용자에게 이메일을 보냅니다. 만약,  라디오 버튼을 선택하면 이메일 주소를 입력할 수 있습니다. 이것은 특정 지역상의 리포트를 보거나 체크인등 하는 이들에게 트리거 할 수 있게 해줍니다.',
		'specific_days' => '복수일을 이곳에서 지정할 수 있습니다. 날짜는 개발 시간대에 의해 정해집니다. 모든 일 선택을 기본으로 하기 위해서는 어떤 날짜도 선택하지 마세요.',
		'trigger' => '트리거는 액션트리거 설정의 주요 구성요소입니다. 누군가 리포트를 제출하고, 체크인등을 실행할 때 특정 활동이 일어날 수 있도록 결정할 수 있습니다. 그리고 하나를 선택한 후 이러한 액션에 대해 필터링 할 수 있습니다.',
		'user' => '트리거 사용자는 누구나 또는 특정사용자가 될 수 있습니다. 만약, 특정사용자에게 트리거가 활성화되게 하려면, 여기서 선택해야 합니다. 아니면, 모든사용자에게 트리거를 설정되게 됩니다.',
		'verify' => '확인되었거나 확인 되지 않은 리포트를 표시합니다.',
	) ,
	'change_picture' => '프로파일 페이지는 Gravatar를 이용합니다. 이미지를 클릭하면 Gravatar로 이동해서 프로파일 이미지를 변경할 수 있습니다.',
	'default_value' => '각각의 값은 콤마로 구분합니다. 예시 값1, 값2',
	'radio_choices' => '각각의 값은 콤마로 구분됩니다. 예: 값1, 값2 . 만약 기본값을 설정하고 싶으면 해당 옵션 마지막에 :: 를 표기하면됩니다. 예를 들어 값1, 값2, 값3::값2 로 표기하면 값2가 기본값이 됩니다.',
	'dropdown_choices' => '각각의 아이템들은 콤마로 구분합니다. 예시 아이템1. 아이템2',
	'private_to' => '회원목록을 입력합니다.',
	'private_subject' => '개인메시지 제목',
	'private_message' => '개인메시지',
	'profile_color' => '공개된 프로파일상 사진배경의 색상을 선택할 수 있습니다. 또한 체크인할 때 나타는 점도 이 색상으로 표시됩니다. ',
	'profile_email' => '이메일주소',
	'profile_name' => '웹사이트 상에서 당신을 식별할 수 있는 방법 중 하나입니다. 공개되는 정보이오니, 꼭 한번 더 생각하세요.',
	'profile_new_password' => '빈칸으로 남겨주면 현재 암호를 사용하고, 그렇지 않으면 새로운 암호를 설정할 수 있습니다.',
	'profile_new_users_password' => '새 사용자 생성시 필요한 사항입니다. 새 사용자가 첫 로그인 후 비밀번호를 재설정할 수 있도록 알려주세요.',
	'profile_notify' => '"네"를 선택하면 새로운 리포트나 댓글이 있을 때, 이메일로 알림을 보내줍니다.',
	'profile_password' => '계정에 대해 허가되지 않은 변경 시에는 현재 암호를 입력해야 합니다.',
	'profile_public' => '이 옵션을 체크하면 당신의 프로파일은 공개됩니다. 또한 당신이 올린 리포트, 체크인, 배지 등을 하나의 페이지에 보여줄 수 있는 쉬운 방법입니다.',
	'profile_public_url' => '이 주소는 당신의 공개 프로파일에서 찾을 수 있습니다.',
	'profile_username' => '사용자명 변경할 수 없습니다.',
	'settings_access_level' => '접근 레벨은 특정 폼 필드 데이터에 대한 접근을 제한합니다. 상위 레벨은 하위 레벨의 필드 폼에 대해 접근이 가능합니다. 슈퍼관리자는 가장 높은(100) 레벨입니다. 공개된 데이터는 가장 낮은 레벨(0)입니다. 일반사용자는 접근권한이 10입니다. 관리자는 접근권한이 90이 기본입니다.',
	'settings_alert_email' => '이 이메일은 알림을 받는 주소로 사용됩니다.',
	'settings_allow_alerts' => '사용자가 웹을 통해 알림을 받을 수 있도록 허용합니다.',
	'settings_allow_clustering' => '유사한 리포트를 하나의 점으로 묶어 보여줍니다.',
	'settings_allow_comments' => '사용자의 댓글을 허용합니다.',
	'settings_allow_feed' => '메인 사이트에서 RSS 뉴스 피드가 노출됩니다.',
	'settings_allow_reports' => '웹양식을 통해 정보를 제출할 수 있습니다.',
	'settings_api_default_record_limit' => 'API 요청당 기본 레코드 숫자',
	'settings_api_max_record_limit' => 'API 요청당 최대 레코드 숫자',
	'settings_api_max_requests_per_ip' => 'IP 주소당 최대 API 요청 숫자',
	'settings_banner' => '이 사이트의 배너는 프론트 페이지의 상단에 나타납니다-테마지원 시. 추천하는 배너의 사이즈는 현재 사용중인 테마에 따라 다릅니다. 배너 적용 시 사이트 제목과 태그라인을 대체합니다.',
	'settings_blocks_per_row' => '각 열당 표시되는 칸 수.',
	'settings_cache_pages' => '페이지를 임시저장할 것인지를 설정합니다. 이 옵션을 활성화하면 페이지 로딩이 빨라집니다. 따라서 ',
	'settings_cache_pages_lifetime' => '캐쉬 보관 시간 설정',
	'settings_checkins' => '이 셋팅은 현재 배치에서 체크인을 가능하게 합니다. 이것은 홈페이지에서 요구하는 특정한 방식을 따르지 않아도 되는 매우 간단한 리포트 방식입니다. 만약, 이 기능을 사용하려면 타임존-UTC기준- 과 테마가 지원하는 지 확인해야 합니다. 사용중일 때, 체크인 전용 테마는 Addons 메뉴에서 확인 가능합니다.',
	'settings_configure_map' => '지도가 특정 위치를 커버할 수 있도록 설정',
	'settings_default_category_colors' => '모든 카테고리에 하나의 색상코드를 설정',
	'settings_default_category_icons' => '모든 카테고리에 하나의 아이콘을 설정',
	'settings_default_location' => '지도상 기본 국가를 설정합니다.',
	'settings_display_contact' => '메인사이트에서 문의하기 메뉴 ON&OFF',
	'settings_display_howtohelp' => '메인사이트에서 도움말 메뉴 ON&OFF',
	'settings_display_items_per_page' => '메인사이트에서 페이지당 보여 줄 리포트 숫자',
	'settings_display_items_per_page_admin' => '관리자페이지에서 페이지당 보여 줄 리포트 숫자',
	'settings_flsms_download' => '이것은 수신되는 메시지의 허브입니다.',
	'settings_flsms_synchronize' => '허브를 통해 들어오는 메시지는 우샤히디 플랫폼과 동기화됩니다.',
	'settings_flsms_text_1' => '문자메시지를 보낸 전화번호',
	'settings_google_analytics' => '방문자에 대한 자세한 통계를 가져옵니다.',
	'settings_locale' => '사이트의 기본 언어를 설정합니다.',
	'settings_manually_approve_users' => '"네"를 선택하면, 모든 개인 사용자들이 설정에 따라 자신의 계정을 만들 수 있도록 허용하는 것입니다. (ex. 일반사용자, 관리자, 슈퍼관리자 로 설정할 수 있습니다.)',
	'settings_map_provider' => '사이트에서 사용될 지도를 설정합니다.',
	'settings_map_timeline' => '리포트가 수신된 날짜와 시간에 따른 타임라인입니다.',
	'settings_private_deployment' => '이 값을 "사실" 또는 "네"로 설정하면, 특정 사용자만 이 배치에 접근할 수 있습니다.',
	'settings_require_email_confirmation' => '"네"로 옵션이 설정되어 있으면, 사용자들이 이 배치에 접근하기 위해서는 이메일로 확인링크를 받아 확인해야 합니다. 만약, 이 옵션이 사용자가 사용중일 때 설정되면, 사용자는 확인창을 통해 계속 사용할 것인지 확인하게 됩니다.',
	'settings_server_host' => '이메일이 있는 곳',
	'settings_server_password' => '리포트를 수신하는 이메일의 암호입니다.',
	'settings_server_port' => '이메일주소를 통해 들어오는 연결을 허용하는 것이 필요합니다.',
	'settings_server_ssl_support' => '보안연결을 강화하기 위해서 필요합니다.',
	'settings_server_type' => '호스트 서버에서 이메일을 검색하기 위해 필요합니다.',
	'settings_server_username' => '리포트를 받는 이메일주소입니다.',
	'settings_share_site_stats' => '사이트 통계는 우샤히디에 의해 서버에 저장됩니다. 옵션을 "사용"으로 설정하면 관리자 패널에서 통계 메뉴를 통해 볼 수 있습니다. "사용안함"으로 설정하면 통계 수치 수집이 중단됩니다. 물론, 중단된 기간 동안의 통계수치는 복구 또는 확인 할 수 없습니다.',
	'settings_site_copyright_statement' => '사이트내에서 유저가 생성한 문자, 이미지, 비디오 등에 대한 재배포 권리를 다른이에게 부여하길 원한다면, https://creativecommons.org/choose/ 를 방문한 후 원하는 조건의 라이센스를 선택한 후 적용하세요.',
	'settings_site_email' => '이메일 리포트와 문의하기를 통해 들어오는 메시지를 받는 이메일입니다.',
	'settings_site_message' => '이 메시지는 메인 페이지 지도 위에 게시됩니다. 사이트에 대한 중요한 정보를 방문자에게 전달할 때 유용합니다. 박스를 제거하면 메시지도 지울 수 있습니다.',
	'settings_site_name' => '메인사이트 상단에 표시되는 이름입니다.',
	'settings_site_submit_report_message' => '리포트 제출 페이지에 나타나는 메시지입니다. 면책조항이나 사용방법을 사용자에게 알려줄 때 유용합니다.',
	'settings_site_tagline' => '간단한 단어로 사이트를 설명해주세요. 주요 키워드로 설명하는 것을 추천합니다.',
	'settings_site_timezone' => '당신의 사이트가 운영될 지역의 타임존을 선택하세요. 설정 이후 사이트내의 모든 실행은 설정된 타임존에 의해 영향을 받게 됩니다.',
	'settings_twitter_configuration' => '트위터 해쉬태그를 설정해주세요.(예시: #Ushahidi)',
);
