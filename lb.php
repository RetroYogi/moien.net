<?php
/**
 * Luxembourgish Translation File for Moien! Link Hub
 * 
 * This file contains all Luxembourgish translations, preserving the original
 * content that was hardcoded in the application.
 */

return [

    // ===== SITE IDENTITY & COMMON =====
    'welcome' => 'Wëllkomm',
    'cancel' => 'Ofbriechen',
    'delete' => 'Läschen',
    'edit' => 'Beaarbechten',
    'edit_profile' => 'Profil beaarbechten',
    'loading' => 'Lueden...',
    'saving' => 'Späicheren...',
    'please_wait' => 'W.e.g. waart...',
    'all_rights_reserved' => 'All Rechter virbehalen',
    'home' => 'Startsäit',

    // ===== NAVIGATION & ACCESSIBILITY =====
    'skip_to_content' => 'Direkt zum Haaptinhalt sprangen',
    'skip_to_main_navigation' => 'Zur Haaptnavigatioun sprangen',
    'main_navigation' => 'Haaptnavigatioun',
    'toggle_theme_description' => 'Tëschent hell, däischter a System-Design wiesselen',
    'toggle_menu' => 'Navigatiounsmenü op/zoumaachen',
    'menu_opened' => 'Navigatiounsmenü opgemaach',
    'menu_closed' => 'Navigatiounsmenü zougemaach',

    // ===== LANDING PAGE =====
    'get_started_free' => 'Elo lassleeën',
    'go_to_dashboard' => 'Zum Dashboard goen',

    // Enhanced landing page content
    'welcome_back' => 'Wëllkomm zeréck, {name}!',
    'welcome_back_subtitle' => 'Prett fir Är Profilsäit ze verwalten?',
    'view_your_profile' => 'Äre Profil ukucken',
    'profile_description' => 'Kuckt {name} seng Linken un',
    'main_actions' => 'Haaptaktiounen',
    'opens_in_new_window' => 'Gëtt an enger neier Fënster opgemaach',
    
    // Device showcase
    'works_on_all_devices' => 'Funktionéiert super op allen Apparater - Hellen oder Däischtere Modus? Äre Choix!',
    
    // Features section
    'why_choose_us' => 'Firwat ' . getSiteIdentityText('site_name') . ' benotzen?',
    'feature_simple_title' => 'Einfach & Iwwersiichtlech',
    'feature_simple_desc' => 'Présenteiert Iech op enger schéiner a kloerer Säit',
    'feature_customizable_title' => 'Personaliséierbar',
    'feature_customizable_desc' => 'Wielt Emojis fir Är Linken a füügt Är Biografie derbäi',
    'feature_responsive_title' => 'Mobilfrëndlech',
    'feature_responsive_desc' => 'Gesäit op all Ecran gutt aus – um Handy oder um Computer',
    'feature_open_title' => 'Offen',
    'feature_open_desc' => 'Kee Kont néideg, fir Är Profilsäit ze kucken',

    // How it works section
    'how_it_works_title' => 'Wéi funktionéiert dat?',
    'step_1_title' => 'Umellen',
    'step_1_desc' => 'Maacht e gratis Konto op a confirméiert Är E-Mail',
    'step_2_title' => 'Säit personaliséieren',
    'step_2_desc' => 'Setzt Är Profilfoto, Biografie an Titel derbäi',
    'step_3_title' => 'Linken deelen',
    'step_3_desc' => 'Deelt all Är wichteg Linken op enger Plaz',

    // Community stats
    'total_clicks' => 'Total Uklicken',

    // ===== LANGUAGE INTERFACE =====
    'current_language' => 'Aktuell Sprooch: {language}',
    'language' => 'Sprooch',
    'select_language' => 'Sprooch auswielen',
    'language_selection' => 'Sproochenauswiel',
    'current' => 'aktuell',

    // ===== THEME SYSTEM =====
    'current_theme' => 'Aktuellen Design',
    'theme_light' => 'Hell',
    'theme_dark' => 'Däischter',
    'theme_system' => 'System',
    'theme_switched_light' => 'Op hellen Design gewiesselt',
    'theme_switched_dark' => 'Op däischteren Design gewiesselt',
    'theme_switched_system' => 'Op System-Design gewiesselt',

    // ===== AUTHENTICATION =====
    'account_pending_confirmation' => 'Äre Kont waart op d\'E-Mail-Bestätegung. Kuckt w.e.g. ären E-Mailen a klickt op de Bestätegunglink.',
    'account_suspended' => 'Äre Kont gouf gespaart. Kontaktéiert w.e.g. de Support fir Hëllef.',
    'registration_disabled' => 'Nei Aschreiwunge si fir de Moment net méiglech.', // Concise AJAX error message when registration attempt is made but disabled
    'registration_currently_disabled' => 'Aschreiwunge Momentan Deaktivéiert', //Page heading and title on disabled registration page
    'registration_disabled_message' => 'E neie Kont opmaachen ass fir de Moment net méiglech.', // Explanatory message body, user friendly explanation
    'contact_admin_for_access' => 'Kontaktéiert w.e.g. de Site-Administrator fir Zougang.',
    'login' => 'Aloggen',
    'register' => 'Registréieren',
    'logout' => 'Ausloggen',
    'login_title' => 'Aloggen',
    'register_title' => 'Maacht Äre Kont op',
    'forgot_password' => 'Passwuert vergiess?',

    // Form labels
    'first_name' => 'Virnumm',
    'last_name' => 'Familljennumm',
    'email_address' => 'E-Mailadress',
    'email' => 'E-Mail',
    'email_change_help' => 'Är E-Mailadress ze änneren erfuerdert eng Bestätegung iwwer ee Verificatiouns-Link deen un déi nei Adress geschéckt gëtt',
    'password' => 'Passwuert',
    'confirm_password' => 'Passwuert bestätegen',
    'new_password' => 'Neit Passwuert',
    
    // ===== Authentication messages =====
    'logout_success' => 'Dir hutt Iech erfollegräich ofgemellt.',
    'registration_success' => 'Umeldung erfollegräich! Kuckt w.e.g. Är E-Mail fir Äre Kont ze bestätegen.',
    'email_confirmed_message' => 'E-Mail erfollegräich bestätegt! Dir kënnt Iech elo aloggen.',
    'password_reset_success' => 'Passwuert erfollegräich geännert! Dir kënnt Iech elo mat Ärem neie Passwuert aloggen.',

    // ===== Rate limiting messages =====
    'rate_limit_exceeded' => 'Ze vill Aloggen-Versich. Waart w.e.g. {time} Minutten ier Dir et nach eng Kéier probéiert. (Maximal {attempts} Versich pro {time} Minutten, nees méiglech no {reset_time})',
    'registration_rate_limit_exceeded' => 'Ze vill Umeldungsversich. Waart w.e.g. {time} Minutten ier Dir et nach eng Kéier probéiert. (Maximal {attempts} Versich pro {time} Minutten, nees méiglech no {reset_time})',

    // ===== Enhanced authentication states =====
    'sending' => 'Schécken...',

    // ===== Authentication errors =====
    'invalid_credentials' => 'Falsch E-Mail oder Passwuert.',
    'email_not_confirmed' => 'Bestätegt w.e.g. Är E-Mail Adress ier Dir Iech aloggt.',
    'invalid_token' => 'Ongëltegen oder ofgelafenen Token.',
    'invalid_or_expired_link' => 'Dëse Confirmatiounslink ass entweder ongëlteg, ofgelaf oder scho benotzt ginn.',

    // ===== Email confirmation =====
    'email_confirmed_title' => 'E-Mail bestätegt!',
    'confirmation_failed_title' => 'Bestätegung feelgeschloen',

    // ===== Password reset =====
    'forgot_password_title' => 'Passwuert vergiess?',
    'forgot_password_desc' => 'Gitt Är E-Mailadress un, da schécke mir Iech Instruktioune fir Äert Passwuert zeréckzesetzen.',
    'send_reset_link' => 'Reset-Link schécken',
    'reset_link_sent' => 'Reset-Link geschéckt!',
    'reset_link_sent_desc' => 'Wann dës E-Mail Adress registréiert ass, kritt Dir Instruktiounen drop geschéckt.',
    'check_spam_folder' => 'Wann Dir keng E-Mail kritt, kuckt w.e.g. och an Ärem Spam-Dossier.',
    'return_to_login' => 'Zréck zum Aloggen',
    'invalid_reset_link' => 'Ongëltege Reset-Link',
    'request_new_reset' => 'Neie Reset-Link ufroen',

    'create_account' => 'Kont erstellen',
    'already_have_account' => 'Hutt Dir schonn en Kont?',
    'dont_have_account' => 'Hutt Dir nach kee Kont?',
    'register_now' => 'Elo registréieren',
    'minimum_8_characters' => 'Op d’mannst 8 Zeechen',
    'return_home' => 'Zréck op d\'Startsäit',
    'go_back' => 'Zréck',

    // ===== DASHBOARD =====
    'edit_link' => 'Link änneren',
    'edit_link_action' => 'Link änneren: {title}',
    'update_link' => 'Link aktualiséieren',
    'link_update_error' => 'Feeler beim Aktualiséiere vum Link.',
    'link_updated_successfully' => 'Link erfolgräich aktualiséiert!',
    'dashboard' => 'Dashboard',
    'user_dashboard' => 'Benotzer-Dashboard',
    'admin_dashboard' => 'Admin-Dashboard',
    'profile_information' => 'Profilinformatiounen',
    'my_links' => 'Meng Linken',
    'view_profile' => 'Profil ukucken',
    'switch_view' => 'Usiicht wiesselen',
    'admin_view' => 'Admin-Usiicht',
    'user_view' => 'Benotzer-Usiicht',

    // Profile form
    'title_optional' => 'Titel (optional)',
    'bio_optional' => 'Bio (optional)',
    'profile_title_placeholder' => 'z. B. Web-Entwéckler, Fotograf, Student...',
    'bio_placeholder' => 'Erzielt eppes iwwer Iech...',
    'profile_url' => 'Profil-URL',
    'save_profile' => 'Profil späicheren',
    'profile_updated_message' => 'Profil erfollegräich aktualiséiert!',
    'profile_updated_email_confirmation_sent' => 'Profil erfollegräich aktualiséiert. Eng Bestätegungs-E-mail gouf op Är nei E-Mailadress geschéckt.',
    'profile_updated_but_email_failed' => 'Profil erfollegräich aktualiséiert, awer mir konnten d\'E-Mail-Bestätegung net schécken. Probéiert w.e.g. méi spéit erëm.',
    'email_change_confirmed' => 'Är E-Mailadress gouf erfollegräich geännert.',
    'email_change_failed' => 'E-Mailadress konnt net geännert ginn. Probéiert w.e.g. erëm.',
    'email_change_confirmation_title' => 'E-Mail Ännerung Bestätegung',
    'email_successfully_updated' => 'Är E-Mailadress gouf erfollegräich aktualiséiert.',
    'new_email' => 'Nei E-Mail:',
    'need_help' => 'Braucht Dir Hëllef?',
    'try_again' => 'Nach eng Kéier probéieren',
    'update_email_profile_settings' => 'Aktualiséiert Är E-Mailadress and de Profilanstellungen',
    'sign_in_access_account' => 'Loggt Iech an fir op Äre Konto zouzegräifen',
    'contact_support' => 'Support kontaktéieren',
    'get_help_support_team' => 'Kritt Hëllef vun eisem Support-Team',
    'profile_updated_successfully' => 'Profil erfolgräich aktualiséiert.',
    'profile_update_error' => 'Feeler beim Aktualiséiere vum Profil.',

    // Profile Username
    'username' => 'Benotzernumm',
    'name' => 'Numm',
    'url' => 'URL',
    'text' => 'Text',
    'username_required' => 'Benotzernumm ass erfuerderlech',
    'username_too_short' => 'Benotzernumm muss op d’mannst 3 Zeechen hunn',
    'username_too_long' => 'Benotzernumm däerf net méi wéi 30 Zeechen hunn',
    'username_invalid_characters' => 'Benotzernumm däerf just Buschtawen, Zuelen, Bindestrécher, Ënnersträicher a Punkten enthalen',
    'username_must_start_alphanumeric' => 'Benotzernumm muss mat engem Buschtaf oder enger Zuel ufänken',
    'username_must_end_alphanumeric' => 'Benotzernumm muss mat engem Buschtaf oder enger Zuel ophalen',
    'username_no_consecutive_special' => 'Benotzernumm däerf keng hannerenee speziell Zeechen enthalen',
    'username_reserved' => 'Dëse Benotzernumm ass reservéiert a kann net benotzt ginn',
    'username_already_taken' => 'Dëse Benotzernumm ass schonn verginn',
    'username_updated_successfully' => 'Benotzernumm erfollegräich geännert op: {username}',
    'username_change_cooldown' => 'Dir kënnt Äre Benotzernumm nees änneren den {date}',
    'username_generation_failed' => 'Et konnt kee gëltege Benotzernumm generéiert ginn. Kontaktéiert w.e.g. de Support.',
    'names_contain_invalid_characters' => 'Nimm enthalen ongëlteg Zeechen. Benotzt w.e.g. just Buschtawen ouni Akzenter.',
    'change_username' => 'Benotzernumm änneren',
    'username_change_info' => 'Standard-Benotzer kënnen hire Benotzernumm eemol pro Mount änneren. Admin-Benotzer hu keng Aschränkungen.',
    'current_username' => 'Aktuelle Benotzernumm',
    'new_username' => 'Neie Benotzernumm',
    'username_help' => 'Nëmme Buschtawen, Zuelen, Bindestrécher, Ënnersträicher a Punkten erlaabt',
    'next_available' => 'Nächst méiglech Ännerung',
    'no_changes_to_update' => 'Keng Ännerunge fir z’aktualiséieren',
    'invalid_user' => 'Ongëltege Benotzer',
    'user_updated_successfully' => 'Benotzer erfollegräich aktualiséiert',
    'access_denied_short' => 'Zougang verweigert',

    // Additional validation messages for admin user editing
    'first_name_required' => 'Virnumm ass erfuerderlech',
    'last_name_required' => 'Familljennumm ass erfuerderlech',
    'email_required' => 'E-Mail ass erfuerderlech',
    'first_name_length_error' => 'Virnumm muss tëschent 2 a 100 Zeechen hunn',
    'last_name_length_error' => 'Familljennumm muss tëschent 2 a 100 Zeechen hunn',
    'email_too_long' => 'E-Mail däerf net méi wéi 255 Zeechen hunn',
    'email_already_in_use' => 'Dës E-Mail-Adress gëtt scho benotzt',
    'first_name_invalid_characters' => 'Virnumm enthält ongëlteg Zeechen',
    'last_name_invalid_characters' => 'Familljennumm enthält ongëlteg Zeechen',
    'username_length_error' => 'Benotzernumm muss tëschent 3 a 30 Zeechen hunn',
    'invalid_status_selected' => 'Ongëltege Status ausgewielt',
    'invalid_admin_role_selected' => 'Ongëlteg Admin-Roll ausgewielt',
    'user_not_found' => 'Benotzer net fonnt',
    'update_username' => 'Benotzernumm aktualiséieren',
    
    // ===== Enhanced profile form help =====
    'first_name_help' => 'Äre Virnumm esou wéi en op Ärem Profil ugewise soll ginn.',
    'last_name_help' => 'Äre Familljennumm esou wéi en op Ärem Profil ugewise soll ginn.',
    'title_help' => 'Äre berufflechen Titel oder wat Dir maacht (optional).',
    'bio_help' => 'Eng kuerz Beschreiwung iwwer Iech selwer, déi op Ärem Profil ugewise gëtt.',
    'html_formatting_allowed' => 'Erlaabt <code>&lt;br&gt;</code>, <code>&lt;em&gt;</code>, an <code>&amp;nbsp;</code> fir Basis-Formatéierung.',
    'profile_url_help' => 'Dëst ass Är eenzegaarteg Profil-URL, déi Dir mat aneren deele kënnt.',

    // ===== Language preferences =====
    'language_preferences' => 'Sproochastellungen',
    'language_preference_updated' => 'Sproochastellung erfollegräich gespäichert!',
    'language_update_error' => 'Feeler beim Späichere vun der Sproochastellung.',
    'invalid_language_selected' => 'Ongëlteg Sprooch ausgewielt.',

    // ===== Language settings - enhanced =====
    'interface_language' => 'Sprooch vun der Interface',
    'interface_language_help' => 'Wielt d\'Sprooch an där d\'Websäit ugewise gëtt.',
    'user_profile_page_language' => 'Sprooch vun Ärer Profilsäit',
    'user_profile_page_language_help' => 'Wielt d\'Sprooch an där Dir Ären Titel, Är Biographie an Är Link-Beschreiwunge geschriwwen hutt.',
    'language_preferences_updated' => 'Sproochastellungen erfollegräich gespäichert!',
    'save_language_preferences' => 'Sproochastellungen späicheren',
    'click_to_save_language_preferences' => 'Klickt fir d\'Sproochastellungen ze späicheren',

    // ===== Links management =====
    'add_new_link' => 'Neie Link derbäisetzen',
    'link_title' => 'Titel',
    'link_url' => 'URL',
    'link_description' => 'Beschreiwung (optional)',
    'link_icon' => 'Icon (optional)',
    'link_title_placeholder' => 'z. B. Meng Websäit',
    'link_description_placeholder' => 'Kuerz Beschreiwung vum Link (optional)',
    'url_placeholder' => 'https://example.com',
    'choose_icon' => 'Icon auswielen',
    'click_icon_to_select' => 'Klickt op en Icon fir et auszewielen',
    'search_icons' => 'Iconen duerchsichen',
    'all_icons' => 'All',
    'common' => 'Allgemeng',
    'social' => 'Sozial',
    'professional' => 'Berufflech',
    'communication' => 'Kommunikatioun',
    'business' => 'Geschäft',
    'athome' => 'Doheem',
    'leisure' => 'Frëzeit',
    'icon_selection_grid' => 'Icon-Auswielgitter',
    'no_icons_found' => 'Keng Iconen fonnt',
    'icon_selected' => 'Icon "{name}" ausgewielt',
    'icon_selection_cleared' => 'Icon-Auswiel geläscht',
    'selected_icon_default' => 'Ausgewielten Icon',
    'add_link' => 'Link derbäisetzen',
    'current_links' => 'Aktuell Linken',
    'no_links_yet' => 'Dir hutt nach keng Linken derbäigesat.',
    'link_added_message' => 'Link erfollegräich derbäigesat!',
    'link_deleted_message' => 'Link erfollegräich geläscht!',
    'link_add_error' => 'Feeler beim Derbäisetzen vum Link.',
    'link_delete_error' => 'Feeler beim Läschen vum Link.',
    'delete_link_confirm' => 'Sidd Dir sécher, datt Dir "{title}" läsche wëllt? Dës Aktioun kann net réckgängeg gemaach ginn.',
    'delete_link_action' => 'Link läschen: {title}',
    'link_not_found' => 'Link net fonnt.',

    // ===== Enhanced link form help =====
    'link_title_help' => 'Den Numm deen op Ärem Profil fir dëse Link ugewise gëtt.',
    'link_url_help' => 'Déi komplett URL wou dëse Link soll hiweisen (mat https://).',
    'link_description_help' => 'Eng kuerz optional Beschreiwung fir z’erklären, wou dëse Link hiféiert.',
    'link_icon_help' => 'Wielt en Icon aus der Auswiel fir niewent Ärem Link ze weisen.',

    // ===== Link validation =====
    'valid_url_required' => 'Gitt w.e.g. eng gülteg URL un.',
    'invalid_url' => 'Ongëltegen URL-Format',
    'please_enter_valid_url' => 'Gitt w.e.g. eng gëlteg URL an',
    'url_too_long' => 'URL ass ze laang (max {max} Zeechen, aktuell: {current})',

    // ===== PUBLIC PROFILE =====
    'profile_not_found' => 'Profil net fonnt',
    'profile_not_found_desc' => 'De Profil, deen Dir sicht, gëtt et net.',
    'main_links' => 'Haaptlinken',
    'no_links_available' => 'Keng Linken disponibel',
    'user_no_links_message' => '{name} huet nach keng Linken derbäigesat.',

    // Enhanced profile content
    'profile_initials_alt' => 'Profil-Initialen: {initials}',
    'user_links_navigation' => 'Linke vu(n) {name}',
    'social_media_navigation' => 'Sozial Medien vu(n) {name}',
    'visit_social_platform' => '{name} op {platform} besichen',

    // Profile actions
    'share_profile' => 'Profil vum {name} deelen',
    'share_profile_button' => 'Iwwer Äert Gerät deelen',
    'check_out_profile' => 'Kuckt de Profil vu {name}',
    'create_your_own_profile' => 'Erstellt Äre perséinleche Profil mat ' . getSiteIdentityText('site_name') . '',
    'add_links' => 'Links dobäisetzen',
    'add_your_first_link' => 'Setzt Ären éischte Link dobäi',

    // ===== ADMIN INTERFACE =====

    // User management
    'status' => 'Status',

    // Admin roles

    // Language management
    'language_usage_percentage' => '{percentage}% vun de Benotzer',


    // Log actions
    'admin_updated_site_settings' => 'Den Admin huet d\'Astellungen vum Site geännert',
    'site_settings_updated' => 'Säitastellungen erfollegräich aktualiséiert!',
    'system' => 'System',

    // Centralized validation system messages
    'field_required' => 'En obligatorescht Feld gouf net ausgefëllt',
    'field_too_long' => 'Maximal {max} Zeeche sinn erlaabt',
    'field_too_short' => 'Minimum {min} Zeeche si gefuerdert',
    'field_invalid_format' => 'Ongëltegt Format',
    'security_content_blocked' => 'Den Inhalt enthält Sécherheetsrisiken a kann net gespäichert ginn',
    'security_invalid_characters' => 'Den Inhalt enthält ongëlteg Zeechen',
    'security_too_many_special_chars' => 'Ze vill Spezialzeechen',
    'translation' => 'Iwwersetzung',
    'invalid_language_file' => 'Ongëlteg Sproochendatei',
    'translation_file_format_error' => 'Feeler am Format vun der Iwwersetzungsdatei',
    'backup_creation_failed' => 'Backup konnt net erstallt ginn',
    'translation_file_write_error' => 'Feeler beim Schreiwen an d’Iwwersetzungsdatei',
    'translations_updated_successfully' => 'Iwwersetzungen erfollegräich aktualiséiert',
    'translation_update_error' => 'Feeler beim Aktualiséieren vun den Iwwersetzungen',
    'invalid_fallback_language' => 'Ongëlteg Ersatzsprooch ausgewielt.',
    'settings_update_error' => 'Feeler beim Aktualiséiere vun den Astellungen.',

        
        // ===== FORM VALIDATION =====
    'invalid_email_format' => 'Gitt w.e.g. eng gëlteg E-Mailadress an',
        
    // ===== NOTIFICATIONS & ALERTS =====
    'success' => 'Erfolleg',
    'error' => 'Feeler',
    'session_expired' => 'Är Sessioun ass ofgelaf. Loggt Iech w.e.g. nach eng Kéier an.',
    'access_denied_admin' => 'Zougang verweigert. Du brauchs Admin-Rechter, klenge Fatzert!.',
    
    // Enhanced notifications
    'form_saved_shortcut' => 'Formulaire mam Tastaturkierzel gespäichert!',
    'admin_access_indicator' => 'Indikator fir Admin-Zougangsmodus',
    'switching_language' => 'Sprooch wiesselt...',
        
    // ===== EMAIL TEMPLATES =====
    // Welcome email
        
    // Password reset email
    'email_reset_expire' => 'Dëse Link ass just 24 Stonne gëlteg.',
            
    // ===== JAVASCRIPT MESSAGES =====
    'js_confirm_delete' => 'Sidd Dir sécher, datt Dir dëst Element läsche wëllt?',
    'js_network_error' => 'Netzwierksfeeler. Kontrolléiert w.e.g. Är Verbindung.',
    'js_copy_success' => 'An d’Zwëschespäicher kopéiert!',
    'js_copy_error' => 'Kopie an d’Zwëschespäicher feelgeschloen',
        
    // ===== SECURITY & TIPS =====
    'security_tip' => 'Sécherheets-Tipp',
        
    // ===== PLURALIZATION =====
    'users' => 'Benotzer',
    'link' => 'Link',
    'links' => 'Linken',
    'click' => 'Klick',
    'clicks' => 'Klicken',
        
    // ===== HELP & SUPPORT =====
    'useful_info' => 'Nëtzlech Infos',
    'support' => 'Ënnerstëtzung',
    'contact_form' => 'Kontaktformular',
    'faq' => 'FAQ',
    'feedback' => 'Feedback',
    'privacy_policy' => 'Dateschutzpolitik',
    'terms_of_service' => 'Notzungsbedéngungen',
    'reporting_procedure' => 'Meldeprozedur',
    'legal_notice' => 'Impressum',
    'legal' => 'Rechtlech Informatiounen',
    'documents_not_translated' => 'D’Dokumenter an dësem Deel sinn net iwwersat a sinn nëmmen op Englesch disponibel.',
        
    // ===== ERROR PAGES =====
    'error_400_title' => 'Ongëlteg Ufro',
    'error_400_message' => 'Är Ufro konnt  wéinst ongëltege Donnéeën net verarbecht ginn.',
    'error_401_title' => 'Net autorisiert',
    'error_401_message' => 'Dir musst Iech aloggen fir op dës Ressource zouzegräifen.',
    'error_403_title' => 'Zougang verbueden',
    'error_403_message' => 'Dir hutt keng Berechtegung fir op dës Ressource zouzegräifen.',
    'error_404_title' => 'Säit net fonnt',
    'error_404_message' => "D'Säit, déi Dir sicht, existéiert net.",
    'error_500_title' => 'Serverfeeler',
    'error_500_message' => 'Et ass e Feeler op eiser Säit geschitt. Probéiert w.e.g. méi spéit nach eng Kéier.',

        
    // ===== FOOTER CONTENT =====
    'preferences' => 'Astellungen',
    'site_statistics' => 'Statistike vun der Säit',
    'made_with_love_in' => 'Mat ❤️ gemaach zu',
    'help_translate' => 'Hëlleft eis ' . getSiteIdentityText('site_name') . ' iwwersetzen',
    'by_key4' => 'Design an Entwécklung:<br>Key4 Digital Services',
        
        
    // Success/Error Messages
    'turnstile_keys_cleared_success' => 'Turnstile-Schlësselen erfollegräich geläscht. CAPTCHA-Schutz ass elo deaktivéiert.',
    'turnstile_settings_saved_enabled' => 'Sécherheetsastellungen erfollegräich gespäichert. CAPTCHA-Schutz ass elo aktivéiert.',
    'turnstile_settings_saved_disabled' => 'Sécherheetsastellungen gespäichert. CAPTCHA-Schutz ass deaktivéiert (keng Schlësselen uginn).',
    'turnstile_settings_saved_incomplete' => 'Astellungen gespäichert, mee CAPTCHA-Schutz ass deaktivéiert (béid Schlësselen erfuerderlech).',
    'turnstile_settings_update_error' => 'D’Sécherheetsastellungen hu sech net aktualiséiere gelooss. Probéiert w.e.g. nach eng Kéier.',
    'invalid_turnstile_theme' => 'Ongëltegt CAPTCHA-Design gewielt.',
    'invalid_turnstile_size' => 'Ongëlteg CAPTCHA-Gréisst gewielt.',
        
    // Frontend Validation Messages  
    'turnstile_validation_failed' => 'Sécherheetsiwwerpréiwung feelgeschloen. Probéiert w.e.g. nach eng Kéier.',
    'turnstile_required' => 'Maacht w.e.g. d’Sécherheetsiwwerpréiwung fäerdeg.',
    'turnstile_error' => 'Feeler bei der Sécherheetsiwwerpréiwung. Lued d’Säit nei a probéiert nach eng Kéier.',

    // ===== DOCUMENT VIEWER =====
    'document_not_found' => 'Dokument net fonnt',
    'requested_document_not_found' => 'Dat ugefroten Dokument konnt net fonnt ginn.',
    'last_updated' => 'Lescht Aktualiséierung',
    'back_to_home' => 'Zréck op d’Startsäit',

    // ===== PROFILE PHOTO UPLOAD =====
    'profile_photo' => 'Profilfoto',
    'current_photo' => 'Aktuell Foto',
    'no_photo_uploaded' => 'Keng Foto eropgelueden',
    'choose_photo' => 'Foto auswielen',
    'photo_requirements' => 'Max. 5 MB. Erlaabte Formater: JPG, PNG, WebP',
    'upload_photo' => 'Foto eroplueden',
    'remove_photo' => 'Foto läschen',
    'photo_preview' => 'Foto-Virschau',
        
    // Photo upload messages
    'profile_photo_uploaded' => 'Profilfoto erfollegräich eropgelueden',
    'profile_photo_removed' => 'Profilfoto erfollegräich geläscht',
    'no_file_selected' => 'Keng Datei ausgewielt',
    'file_too_large' => 'Datei ass ze grouss',
    'file_too_large_5mb' => 'Datei ass ze grouss. Maximal 5MB erlaabt',
    'upload_interrupted' => 'Eroplueden ënnerbrach',
    'upload_server_error' => 'Serverfeeler beim Eroplueden',
    'upload_unknown_error' => 'Onbekannte Feeler beim Eroplueden',
    'invalid_file_type' => 'Ongëltegen Datei-Typ. Nëmmen JPG, PNG a WebP sinn erlaabt',
    'invalid_file_extension' => 'Ongëlteg Dateiendung',
    'directory_creation_failed' => 'Eroplued-Ordner konnt net erstallt ginn',
    'database_update_failed' => 'Datebank-Update feelgeschloen',
    'image_processing_failed' => 'Bildveraarbechtung feelgeschloen',
    'no_photo_to_remove' => 'Keng Foto fir ze läschen',
    'photo_removal_failed' => 'Foto konnt net geläscht ginn',
    'profile_photo_alt' => 'Profilfoto vun: {name}',
        
    // ===== CONTACT FORM =====
    'contact_form_description' => 'Kontaktéiert eis mam Formulaire hei drënner. Mir äntweren esou séier wéi méiglech.',
    'full_name' => 'Vollstännege Numm',
    'full_name_help' => 'Äre Virnumm an Numm',
    'full_name_real_name_required' => 'Gitt w.e.g. Äre richtegen, vollen Numm un',
    'contact_email_help' => 'Dës E-Mailadress benotze mir fir Iech ze äntweren',
    'contact_reason' => 'Grond fir de Kontakt',
    'select_reason' => 'Wielt w.e.g. e Grond',
    'reason_content_report' => 'Ongepassten Inhalt mellen',
    'reason_translation_issue' => 'Iwwersetzungsfeeler oder Verbesserungsvirschlag',
    'reason_technical_issue' => 'Technesche Problem oder Feeler',
    'reason_other' => 'Aner Ufro',
    'contact_message_placeholder' => 'Beschreift w.e.g. Är Ufro esou detailléiert wéi méiglech...',
    'contact_message_help' => 'Maximal 2000 Zeechen. Sidd sou präzis wéi méiglech, fir datt mir Iech besser kënne weiderhëllefen.',
    'contact_message_too_short' => 'Äre Message ass ze kuerz (minimum 10 Zeechen)',
    'send_message' => 'Message schécken',
    'captcha_verification_failed' => 'CAPTCHA-Iwwerpréiwung feelgeschloen. Probéiert w.e.g. nach eng Kéier.',
    'email_send_failed' => 'E-Mail konnt net geschéckt ginn. Probéiert w.e.g. méi spéit nach eng Kéier.',
        
    // Contact confirmation emails
    'contact_confirmation_subject' => 'Bestätegt Äre Message - {site_name}',
    'email_greeting' => 'Moien, {name},',
    'contact_confirmation_message' => 'Bestätegt w.e.g., datt Dir dëse Message un eis schécke wëllt andeems Dir op de Knäppchen hei drënner klickt:',
    'confirm_contact_message' => 'Message bestätegen',
    'contact_confirmation_url_fallback' => 'Wann de Knäppchen net funktionéiert, kopéiert dëse Link an Äre Browser:',
    'contact_confirmation_footer' => 'Wann Dir kee Kontaktformular ofgeschéckt hutt, kënnt Dir dës E-Mail einfach ignoréieren.',
    'confirmation_email_sent' => 'Bestätegungs-E-Mail geschéckt!',
    'contact_confirmation_instructions' => 'Mir hunn eng Bestätegungs-E-Mail un Är Adress geschéckt. Klickt w.e.g. op de Link an där E-Mail fir de Message ofzeschécken.',
    'contact_message_sent_successfully' => 'Äre Message gouf erfollegräich geschéckt! Mir mellen eis geschwënn bei Iech.',
    'error_sending_message_to_admin' => 'Feeler beim Schécke vum Message un den Administrateur. Probéiert w.e.g. méi spéit nach eng Kéier oder kontaktéiert de Support.',
        
    // Admin notifications
    'contact_admin_subject' => '{site_name} Kontakt: {reason}',
    'new_contact_message' => 'Nei Noriicht vum Kontaktformular',
    'contact_details' => 'Kontaktdetailer',

    // ===== LOG VIEWER =====
    'account_activity_engish_only' => 'Aktivitéit vun ärem Kont - Dës Säit ass nëmmen op Englesch disponibel',
    'activity_logs' => 'Aktivitéitslogs',
    'my_activity' => 'Meng Aktivitéit',
    'user_id' => 'Benotzer-ID',

    // ===== GENERAL =====
    // Currently used in LOG MANAGEMENT SETTINGS
    'enabled' => 'Activéiert',
    'disabled' => 'Desaktivéiert',

    
    // ===== FAQ PAGE =====
    'faq_title' => 'Oft gestallt Froen',
    'faq_subtitle' => 'Fannt Äntwerten op allgemeng Froen iwwer eis Plattform',
    
    // FAQ Questions and Answers
    'faq_q1_what_is' => 'Wat ass <em>Moien</em>?',
    'faq_a1_what_is' => '<em>Moien</em> ass eng perséinlech Homepage mat enger flotter personaliséierbarer URL. Et erlaabt Iech e Profilbild, eng Biografie ze deelen an besonnesch Linken op Plazen um Web déi Dir léif hutt an op Är sozial Media Profiler.',
    
    'faq_q2_why_created' => 'Firwat gouf <em>Moien</em> erstallt?',
    'faq_a2_why_created' => 'Ech hunn <em>Moien</em> aus e puer Grënn entwéckelt:<ul><li>Fir en Online Service komplett op Lëtzebuergesch ze kreéieren an doduerch d\'Benotzung vun der Lëtzebuerger Sprooch um Web ze förderen.</li><li>Fir ze léieren a mech selwer ze challengéieren, andeems ech digital Accessibilitéit fir komplex Projeten bauen.</li><li>Fir jiddwerengem z\'erméiglechen eng perséinlech Mini-Homepage ze hunn déi net verlaangt datt d\'Visiteuren e Kont kreéieren.</li></ul>',
    
    'faq_q3_is_free' => 'Ass <em>Moien</em> gratis?',
    'faq_a3_is_free' => 'Jo. Aktuell gratis Funktiounen bleiwen gratis sou laang wéi <em>Moien</em> existéiert.<br>Et kéinten zousätzlech Premium Funktiounen an der Zukunft dobäikomm.',
    
    'faq_q4_add_features' => 'Wäert Dir Feature XYZ dobäisetzen?',
    'faq_a4_add_features' => 'Vläicht. Benotzt w.e.g. de Kontaktformular fir Features ze froen.',
    
    'faq_q5_translate' => 'Wäert Dir <em>Moien</em> an aner Sproochen iwwersetzen?',
    'faq_a5_translate' => 'Ech plangen d\'Iwwersetzungsfichieren ze publizéieren sou datt jiddwereen kann matmaachen d\'Websäit ze iwwersetzen. Nach keng ETA.',
    
    // FAQ Call to Action
    'still_have_questions' => 'Hutt Dir nach Froen?',
    'faq_contact_message' => 'Fannt Dir d\'Äntwert net déi Dir sicht? Kontaktéiert eis.',
    'contact_us' => 'Kontaktéiert eis',
    
    // ===== MISCELLANEOUS =====
    'luxembourg' => 'Lëtzebuerg',

];