<?php
/**
 * German Translation File for Moien! Link Hub
 * 
 * This file contains all German text used throughout the application.
 * Comprehensive translation covering all 620+ keys from the English version.
 */

return [

    // ===== SITE IDENTITY & COMMON =====
    'welcome' => 'Willkommen',
    'cancel' => 'Abbrechen',
    'delete' => 'Löschen',
    'edit' => 'Bearbeiten',
    'edit_profile' => 'Profil bearbeiten',
    'loading' => 'Lade...',
    'saving' => 'Speichere...',
    'please_wait' => 'Bitte warten...',
    'all_rights_reserved' => 'Alle Rechte vorbehalten',
    'home' => 'Startseite',
    
    // ===== NAVIGATION & ACCESSIBILITY =====
    'skip_to_content' => 'Zum Hauptinhalt springen',
    'skip_to_main_navigation' => 'Zur Hauptnavigation springen',
    'main_navigation' => 'Hauptnavigation',
    'toggle_theme_description' => 'Zwischen hellem, dunklem und System-Design wechseln',
    'toggle_menu' => 'Navigationsmenü umschalten',
    'menu_opened' => 'Navigationsmenü geöffnet',
    'menu_closed' => 'Navigationsmenü geschlossen',

    // ===== LANDING PAGE =====
    'get_started_free' => 'Jetzt loslegen',
    'go_to_dashboard' => 'Zum Dashboard',
    
    // Enhanced landing page content
    'welcome_back' => 'Willkommen zurück, {name}!',
    'welcome_back_subtitle' => 'Bereit, Ihre Profilseite zu verwalten?',
    'view_your_profile' => 'Ihr Profil anzeigen',
    'profile_description' => 'Schauen Sie sich {name}s Links an',
    'main_actions' => 'Hauptaktionen',
    'opens_in_new_window' => 'Öffnet in neuem Fenster',
    
    // Device showcase
    'works_on_all_devices' => 'Funktioniert perfekt auf allen Geräten - Light oder Darkmodus? Wie Sie möchten!',
    
    // Features section
    'why_choose_us' => 'Warum ' . getSiteIdentityText('site_name') . ' benutzen?',
    'feature_simple_title' => 'Einfach & Sauber',
    'feature_simple_desc' => 'Stellen Sie sich vor, auf einer schönen und übersichtlichen Seite',
    'feature_customizable_title' => 'Anpassbar',
    'feature_customizable_desc' => 'Wählen Sie Emojis für Ihre Links, schreiben Sie Ihre Biografie',
    'feature_responsive_title' => 'Mobilfreundlich',
    'feature_responsive_desc' => 'Sieht gut aus auf jedem Display, Mobil und Desktop',
    'feature_open_title' => 'Offen',
    'feature_open_desc' => 'Es ist kein Konto nötig um sich Ihre Profilseite anzusehen',
    
    // How it works section
    'how_it_works_title' => 'Wie es funktioniert',
    'step_1_title' => 'Registrieren',
    'step_1_desc' => 'Erstellen Sie Ihr kostenloses Konto und bestätigen Sie Ihre E-Mail',
    'step_2_title' => 'Seite anpassen',
    'step_2_desc' => 'Fügen Sie Ihr Profilbild, Biografie und Titel hinzu',
    'step_3_title' => 'Links hinzufügen',
    'step_3_desc' => 'Teilen Sie alle Ihre wichtigen Links an einem Ort',
    
    // Community stats
    'total_clicks' => 'Gesamt-Klicks',
        
    // ===== LANGUAGE INTERFACE =====
    'current_language' => 'Aktuelle Sprache: {language}',
    'language' => 'Sprache',
    'select_language' => 'Sprache auswählen',
    'language_selection' => 'Sprachauswahl',
    'current' => 'aktuell',
        
    // ===== THEME SYSTEM =====
    'current_theme' => 'Aktuelles Design',
    'theme_light' => 'Hell',
    'theme_dark' => 'Dunkel',
    'theme_system' => 'System',
    'theme_switched_light' => 'Zu hellem Design gewechselt',
    'theme_switched_dark' => 'Zu dunklem Design gewechselt',
    'theme_switched_system' => 'Zu System-Design gewechselt',
    
    // ===== AUTHENTICATION =====
    'account_pending_confirmation' => 'Ihr Konto wartet auf die E-Mail-Bestätigung. Bitte überprüfen Sie Ihre E-Mail und klicken Sie auf den Bestätigungslink.',
    'account_suspended' => 'Ihr Konto wurde gesperrt. Bitte wenden Sie sich für Hilfe an den Support.',
    'registration_disabled' => 'Die Registrierung ist derzeit deaktiviert.', // Concise AJAX error message when registration attempt is made but disabled
    'registration_currently_disabled' => 'Registrierung Derzeit Deaktiviert', //Page heading and title on disabled registration page
    'registration_disabled_message' => 'Die Registrierung neuer Konten ist vorübergehend deaktiviert.', // Explanatory message body, user friendly explanation
    'contact_admin_for_access' => 'Bitte wenden Sie sich an den Site-Administrator für Zugang.',
    'email_confirmed_message' => 'E-Mail erfolgreich bestätigt! Sie können sich jetzt anmelden.',
    'login' => 'Anmelden',
    'register' => 'Registrieren',
    'logout' => 'Abmelden',
    'login_title' => 'Anmelden',
    'register_title' => 'Konto erstellen',
    'forgot_password' => 'Passwort vergessen?',
        
    // Form labels
    'first_name' => 'Vorname',
    'last_name' => 'Nachname',
    'email_address' => 'E-Mail-Adresse',
    'email' => 'E-Mail',
    'email_change_help' => 'Eine Änderung Ihrer E-Mail-Adresse erfordert eine Bestätigung über einen Bestätigungslink an die neue Adresse',
    'password' => 'Passwort',
    'confirm_password' => 'Passwort bestätigen',
    'new_password' => 'Neues Passwort',
        
    // Authentication messages
    'logout_success' => 'Sie wurden erfolgreich abgemeldet.',
    'registration_success' => 'Registrierung erfolgreich! Bitte überprüfen Sie Ihre E-Mail, um Ihr Konto zu bestätigen.',
    'password_reset_success' => 'Passwort erfolgreich zurückgesetzt! Sie können sich jetzt mit Ihrem neuen Passwort anmelden.',
    
    // Rate limiting messages
    'rate_limit_exceeded' => 'Zu viele Anmeldeversuche. Bitte warten Sie {time} Minuten, bevor Sie es erneut versuchen. (Maximal {attempts} Versuche pro {time} Minuten, versuchen Sie es nach {reset_time} erneut)',
    'registration_rate_limit_exceeded' => 'Zu viele Registrierungsversuche. Bitte warten Sie {time} Minuten, bevor Sie es erneut versuchen. (Maximal {attempts} Versuche pro {time} Minuten, versuchen Sie es nach {reset_time} erneut)',
    
    // Enhanced authentication states
    'sending' => 'Sende...',
    
    // Authentication errors
    'invalid_credentials' => 'Ungültige E-Mail oder Passwort.',
    'email_not_confirmed' => 'Bitte bestätigen Sie Ihre E-Mail-Adresse vor der Anmeldung.',
    'invalid_token' => 'Ungültiger oder abgelaufener Token.',
    'invalid_or_expired_link' => 'Dieser Bestätigungslink ist entweder ungültig, abgelaufen oder bereits verwendet worden.',
    
    // Email confirmation
    'email_confirmed_title' => 'E-Mail bestätigt!',
    'confirmation_failed_title' => 'Bestätigung fehlgeschlagen',
    
    // Password reset
    'forgot_password_title' => 'Passwort vergessen?',
    'forgot_password_desc' => 'Geben Sie Ihre E-Mail-Adresse ein und wir senden Ihnen Anweisungen zum Zurücksetzen Ihres Passworts.',
    'send_reset_link' => 'Reset-Link senden',
    'reset_link_sent' => 'Reset-Link gesendet!',
    'reset_link_sent_desc' => 'Falls diese E-Mail-Adresse bei uns registriert ist, erhalten Sie Anweisungen zum Zurücksetzen.',
    'check_spam_folder' => 'Falls Sie keine E-Mail erhalten, überprüfen Sie bitte Ihren Spam-Ordner.',
    'return_to_login' => 'Zur Anmeldung zurückkehren',
    'invalid_reset_link' => 'Ungültiger Reset-Link',
    'request_new_reset' => 'Neuen Reset-Link anfordern',
    
    // Registration
    'create_account' => 'Konto erstellen',
    'already_have_account' => 'Haben Sie bereits ein Konto?',
    'dont_have_account' => 'Haben Sie noch kein Konto?',
    'register_now' => 'Jetzt registrieren',
    'minimum_8_characters' => 'Mindestens 8 Zeichen',
    'return_home' => 'Zur Startseite zurückkehren',
    'go_back' => 'Zurück',
    
    // ===== DASHBOARD =====
    'edit_link' => 'Link bearbeiten',
    'edit_link_action' => 'Link bearbeiten: {title}',
    'update_link' => 'Link aktualisieren',
    'link_update_error' => 'Fehler beim Aktualisieren des Links.',
    'link_updated_successfully' => 'Link erfolgreich aktualisiert!',
    'dashboard' => 'Dashboard',
    'user_dashboard' => 'Benutzer-Dashboard',
    'admin_dashboard' => 'Admin-Dashboard',
    'profile_information' => 'Profilinformationen',
    'my_links' => 'Meine Links',
    'view_profile' => 'Profil anzeigen',
    'switch_view' => 'Ansicht wechseln',
    'admin_view' => 'Admin-Ansicht',
    'user_view' => 'Benutzer-Ansicht',
    
    // Profile form
    'title_optional' => 'Titel (optional)',
    'bio_optional' => 'Biografie (optional)',
    'profile_title_placeholder' => 'z.B. Webentwickler, Fotograf, Student...',
    'bio_placeholder' => 'Erzählen Sie uns etwas über sich...',
    'profile_url' => 'Profil-URL',
    'save_profile' => 'Profil speichern',
    'profile_updated_message' => 'Profil erfolgreich aktualisiert!',
    'profile_updated_email_confirmation_sent' => 'Profil erfolgreich aktualisiert. Eine Bestätigungs-E-Mail wurde an Ihre neue E-Mail-Adresse gesendet.',
    'profile_updated_but_email_failed' => 'Profil erfolgreich aktualisiert, aber wir konnten die E-Mail-Bestätigung nicht senden. Bitte versuchen Sie es später erneut.',
    'email_change_confirmed' => 'Ihre E-Mail-Adresse wurde erfolgreich geändert.',
    'email_change_failed' => 'E-Mail-Adresse konnte nicht geändert werden. Bitte versuchen Sie es erneut.',
    'email_change_confirmation_title' => 'E-Mail-Änderung Bestätigung',
    'email_successfully_updated' => 'Ihre E-Mail-Adresse wurde erfolgreich aktualisiert.',
    'new_email' => 'Neue E-Mail:',
    'need_help' => 'Benötigen Sie Hilfe?',
    'try_again' => 'Erneut versuchen',
    'update_email_profile_settings' => 'Aktualisieren Sie Ihre E-Mail-Adresse in den Profileinstellungen',
    'sign_in_access_account' => 'Melden Sie sich an, um auf Ihr Konto zuzugreifen',
    'contact_support' => 'Support kontaktieren',
    'get_help_support_team' => 'Hilfe von unserem Support-Team erhalten',
    'profile_updated_successfully' => 'Profil erfolgreich aktualisiert.',
    'profile_update_error' => 'Fehler beim Aktualisieren des Profils.',

    // Profile username
    'username' => 'Benutzername',
    'name' => 'Name',
    'url' => 'URL',
    'text' => 'Text',
    'username_required' => 'Benutzername ist erforderlich',
    'username_too_short' => 'Benutzername muss mindestens 3 Zeichen haben',
    'username_too_long' => 'Benutzername darf nicht mehr als 30 Zeichen haben',
    'username_invalid_characters' => 'Benutzername kann nur Buchstaben, Zahlen, Bindestriche, Unterstriche und Punkte enthalten',
    'username_must_start_alphanumeric' => 'Benutzername muss mit einem Buchstaben oder einer Zahl beginnen',
    'username_must_end_alphanumeric' => 'Benutzername muss mit einem Buchstaben oder einer Zahl enden',
    'username_no_consecutive_special' => 'Benutzername darf keine aufeinanderfolgenden Sonderzeichen haben',
    'username_reserved' => 'Dieser Benutzername ist reserviert und kann nicht verwendet werden',
    'username_already_taken' => 'Dieser Benutzername ist bereits vergeben',
    'username_updated_successfully' => 'Benutzername erfolgreich geändert zu: {username}',
    'username_change_cooldown' => 'Sie können Ihren Benutzernamen am {date} wieder ändern',
    'username_generation_failed' => 'Konnte keinen gültigen Benutzernamen generieren. Bitte kontaktieren Sie den Support.',
    'names_contain_invalid_characters' => 'Namen enthalten ungültige Zeichen. Bitte verwenden Sie nur Buchstaben ohne Akzente.',
    'change_username' => 'Benutzername ändern',
    'username_change_info' => 'Standardbenutzer können ihren Benutzernamen einmal pro Monat ändern. Administratoren haben keine Einschränkungen.',
    'current_username' => 'Aktueller Benutzername',
    'new_username' => 'Neuer Benutzername',
    'username_help' => 'Nur Buchstaben, Zahlen, Bindestriche, Unterstriche und Punkte erlaubt',
    'next_available' => 'Nächste verfügbar',
    'no_changes_to_update' => 'Keine Änderungen zu aktualisieren',
    'invalid_user' => 'Ungültiger Benutzer',
    'user_updated_successfully' => 'Benutzer erfolgreich aktualisiert',
    'access_denied_short' => 'Zugriff verweigert',
    'update_username' => 'Benutzername aktualisieren',
    
    // Additional validation messages for admin user editing
    'first_name_required' => 'Vorname ist erforderlich',
    'last_name_required' => 'Nachname ist erforderlich',
    'email_required' => 'E-Mail ist erforderlich',
    'first_name_length_error' => 'Vorname muss zwischen 2 und 100 Zeichen lang sein',
    'last_name_length_error' => 'Nachname muss zwischen 2 und 100 Zeichen lang sein',
    'email_too_long' => 'E-Mail muss weniger als 255 Zeichen haben',
    'email_already_in_use' => 'Diese E-Mail-Adresse wird bereits verwendet',
    'first_name_invalid_characters' => 'Vorname enthält ungültige Zeichen',
    'last_name_invalid_characters' => 'Nachname enthält ungültige Zeichen',
    'username_length_error' => 'Benutzername muss zwischen 3 und 30 Zeichen lang sein',
    'invalid_status_selected' => 'Ungültiger Status ausgewählt',
    'invalid_admin_role_selected' => 'Ungültige Administratorrolle ausgewählt',
    'user_not_found' => 'Benutzer nicht gefunden',
    
    // Enhanced profile form help
    'first_name_help' => 'Ihr Vorname, wie er in Ihrem Profil angezeigt werden soll.',
    'last_name_help' => 'Ihr Nachname, wie er in Ihrem Profil angezeigt werden soll.',
    'title_help' => 'Ihr Berufsbezeichnung oder was Sie tun (optional).',
    'bio_help' => 'Eine kurze Beschreibung über Sie, die in Ihrem Profil erscheint.',
    'html_formatting_allowed' => 'Erlaubt <code>&lt;br&gt;</code>, <code>&lt;em&gt;</code>, und <code>&amp;nbsp;</code> für grundlegende Formatierung.',
    'profile_url_help' => 'Dies ist Ihre eindeutige Profil-URL, die Sie mit anderen teilen können.',
    
    // Language preferences
    'language_preferences' => 'Spracheinstellungen',
    'language_preference_updated' => 'Spracheinstellung erfolgreich aktualisiert!',
    'language_update_error' => 'Fehler beim Aktualisieren der Spracheinstellung.',
    'invalid_language_selected' => 'Ungültige Sprache ausgewählt.',

    // Language settings - enhanced
    'interface_language' => 'Oberflächensprache',
    'interface_language_help' => 'Wählen Sie Ihre bevorzugte Sprache für die Website-Oberfläche.',
    'user_profile_page_language' => 'Sprache der Benutzer-Profilseite',
    'user_profile_page_language_help' => 'Wählen Sie die Sprache, in der Sie Ihren Titel, Ihre Biografie und Ihre Link-Beschreibungen geschrieben haben',
    'language_preferences_updated' => 'Spracheinstellungen erfolgreich aktualisiert!',
    'save_language_preferences' => 'Spracheinstellungen Speichern',
    'click_to_save_language_preferences' => 'Klicken zum Speichern der Spracheinstellungen',
    
    // Links management
    'add_new_link' => 'Neuen Link hinzufügen',
    'link_title' => 'Titel',
    'link_url' => 'URL',
    'link_description' => 'Beschreibung (Optional)',
    'link_icon' => 'Symbol (optional)',
    'link_title_placeholder' => 'z.B. Meine Website',
    'link_description_placeholder' => 'Kurze Beschreibung dieses Links (optional)',
    'url_placeholder' => 'https://beispiel.de',
    'choose_icon' => 'Symbol wählen',
    'click_icon_to_select' => 'Klicken Sie auf ein Symbol unten zur Auswahl',
    'search_icons' => 'Symbole suchen',
    'all_icons' => 'Alle',
    'common' => 'Häufig',
    'social' => 'Social',
    'professional' => 'Beruflich',
    'communication' => 'Kommunikation',
    'business' => 'Geschäft',
    'athome' => 'Zuhause',
    'leisure' => 'Freizeit',
    'icon_selection_grid' => 'Symbol-Auswahlraster',
    'no_icons_found' => 'Keine Symbole gefunden',
    'icon_selected' => 'Symbol {name} ausgewählt',
    'icon_selection_cleared' => 'Symbol-Auswahl gelöscht',
    'selected_icon_default' => 'Ausgewähltes Symbol',
    'add_link' => 'Link hinzufügen',
    'current_links' => 'Aktuelle Links',
    'no_links_yet' => 'Sie haben noch keine Links hinzugefügt.',
    'link_added_message' => 'Link erfolgreich hinzugefügt!',
    'link_deleted_message' => 'Link erfolgreich gelöscht!',
    'link_add_error' => 'Fehler beim Hinzufügen des Links.',
    'link_delete_error' => 'Fehler beim Löschen des Links.',
    'delete_link_confirm' => 'Sind Sie sicher, dass Sie "{title}" löschen möchten? Diese Aktion kann nicht rückgängig gemacht werden.',
    'delete_link_action' => 'Link löschen: {title}',
    'link_not_found' => 'Link nicht gefunden.',
    
    // Enhanced link form help
    'link_title_help' => 'Der Name, der in Ihrem Profil für diesen Link angezeigt wird.',
    'link_url_help' => 'Die vollständige URL, zu der dieser Link führen soll (inklusive https://).',
    'link_description_help' => 'Optionale kurze Beschreibung, um Besuchern zu helfen, diesen Link zu verstehen.',
    'link_icon_help' => 'Wählen Sie einen von vielen von Font Awesome-Symbolen, der neben Ihrem Link angezeigt wird.',
    
    // Link validation
    'valid_url_required' => 'Bitte geben Sie eine gültige URL ein.',
    'invalid_url' => 'Ungültiges URL-Format',
    'please_enter_valid_url' => 'Bitte geben Sie eine gültige URL ein',
    'url_too_long' => 'URL ist zu lang (max {max} Zeichen, aktuell: {current})',
        
    // ===== PUBLIC PROFILE =====
    'profile_not_found' => 'Profil nicht gefunden',
    'profile_not_found_desc' => 'Das gesuchte Profil existiert nicht.',
    'main_links' => 'Hauptlinks',
    'no_links_available' => 'Keine Links verfügbar',
    'user_no_links_message' => '{name} hat noch keine Links hinzugefügt.',
    
    // Enhanced profile content
    'profile_initials_alt' => 'Profil-Initialen: {initials}',
    'user_links_navigation' => '{name}s Links',
    'social_media_navigation' => '{name}s Social Media',
    'visit_social_platform' => '{name} auf {platform} besuchen',
    
    // Profile actions
    'share_profile' => '{name}s Profil teilen',
    'share_profile_button' => 'Mir Ihrem Gerät teilen',
    'check_out_profile' => 'Schauen Sie sich {name}s Profil an',
    'create_your_own_profile' => 'Erstellen Sie Ihr eigenes Profil mit ' . getSiteIdentityText('site_name') . '',
    'add_links' => 'Links hinzufügen',
    'add_your_first_link' => 'Fügen Sie Ihren ersten Link hinzu',
    
    // ===== ADMIN INTERFACE =====
    
    // User management
    'status' => 'Status',
    
    // Admin roles
    
    // Language management
    'language_usage_percentage' => '{percentage}% der Benutzer',
        
    
    // Log actions
    'admin_updated_site_settings' => 'Der Admin hat die Website-Einstellungen aktualisiert',
    'site_settings_updated' => 'Website-Einstellungen erfolgreich aktualisiert!',
    'system' => 'System',
        
    // Centralized validation system messages
    'field_required' => 'Ein Pflichtfeld wurde nicht ausgefüllt',
    'field_too_long' => 'Maximal {max} Zeichen erlaubt',
    'field_too_short' => 'Mindestens {min} Zeichen erforderlich',
    'field_invalid_format' => 'Ungültiges Format',
    'security_content_blocked' => 'Inhalt enthält Sicherheitsrisiken und kann nicht gespeichert werden',
    'security_invalid_characters' => 'Inhalt enthält ungültige Zeichen',
    'security_too_many_special_chars' => 'Zu viele Sonderzeichen',
    'translation' => 'Übersetzung',
    'invalid_language_file' => 'Ungültige Sprachdatei',
    'translation_file_format_error' => 'Formatfehler in Übersetzungsdatei',
    'backup_creation_failed' => 'Erstellen der Sicherungsdatei fehlgeschlagen',
    'translation_file_write_error' => 'Fehler beim Schreiben der Übersetzungsdatei',
    'translations_updated_successfully' => 'Übersetzungen erfolgreich aktualisiert',
    'translation_update_error' => 'Fehler beim Aktualisieren der Übersetzungen',
    'invalid_fallback_language' => 'Ungültige Fallback-Sprache ausgewählt.',
    'settings_update_error' => 'Fehler beim Aktualisieren der Einstellungen.',
            
    // ===== FORM VALIDATION =====
    'invalid_email_format' => 'Bitte geben Sie eine gültige E-Mail-Adresse ein',
    
    // ===== NOTIFICATIONS & ALERTS =====
    'success' => 'Erfolg',
    'error' => 'Fehler',
    'session_expired' => 'Ihre Sitzung ist abgelaufen. Bitte melden Sie sich erneut an.',
    'access_denied_admin' => 'Zugriff verweigert. Admin-Berechtigung erforderlich.',
    
    // Enhanced notifications
    'form_saved_shortcut' => 'Formular mit Tastenkombination gespeichert!',
    'admin_access_indicator' => 'Admin-Zugriffsmodus-Indikator',
    'switching_language' => 'Sprache wird gewechselt...',
    
    // ===== EMAIL TEMPLATES =====

    // Password reset email
    'email_reset_expire' => 'Dieser Link ist nur 24 Stunden gültig.',
        
    // ===== JAVASCRIPT MESSAGES =====
    'js_confirm_delete' => 'Sind Sie sicher, dass Sie dieses Element löschen möchten?',
    'js_network_error' => 'Netzwerkfehler. Bitte überprüfen Sie Ihre Verbindung.',
    'js_copy_success' => 'In die Zwischenablage kopiert!',
    'js_copy_error' => 'Fehler beim Kopieren in die Zwischenablage',
    
    // ===== SECURITY & TIPS =====
    'security_tip' => 'Sicherheitstipp',
    
    // ===== PLURALIZATION =====
    'users' => 'Benutzer',
    'link' => 'Link', 
    'links' => 'Links',
    'click' => 'Klick',
    'clicks' => 'Klicks',
    
    // ===== HELP & SUPPORT =====
    'useful_info' => 'Nützliche Infos',
    'support' => 'Support',
    'contact_form' => 'Kontakt Formular',
    'faq' => 'FAQ',
    'feedback' => 'Feedback',
    'privacy_policy' => 'Datenschutzerklärung',
    'terms_of_service' => 'Nutzungsbedingungen',
    'reporting_procedure' => 'Meldeverfahren',
    'legal_notice' => 'Impressum',
    'legal' => 'Rechtliches',
    'documents_not_translated' => 'Die Dokumente in diesem Abschnitt sind nicht übersetzt. Sie sind nur auf Englisch verfügbar.',
    
    // ===== ERROR PAGES =====
    'error_400_title' => 'Ungültige Anfrage',
    'error_400_message' => 'Ihre Anfrage konnte aufgrund ungültiger Daten nicht verarbeitet werden.',
    'error_401_title' => 'Nicht autorisiert',
    'error_401_message' => 'Sie müssen sich anmelden, um auf diese Ressource zugreifen zu können.',
    'error_403_title' => 'Zugriff verboten',
    'error_403_message' => 'Sie haben keine Berechtigung, auf diese Ressource zuzugreifen.',
    'error_404_title' => 'Seite nicht gefunden',
    'error_404_message' => 'Die Seite, die Sie suchen, existiert nicht.',
    'error_500_title' => 'Serverfehler',
    'error_500_message' => 'Etwas ist auf unserer Seite schiefgelaufen. Bitte versuchen Sie es später erneut.',
    
    
    // ===== FOOTER CONTENT =====
    'preferences' => 'Einstellungen',
    'site_statistics' => 'Website-Statistiken',
    'made_with_love_in' => 'Mit ❤️ gemacht in',
    'help_translate' => 'Helfen Sie uns ' . getSiteIdentityText('site_name') . ' Übersetzen',
    'by_key4' => 'Design und Entwicklung:<br>Key4 Digital Services',

    
    // Success/Error Messages
    'turnstile_keys_cleared_success' => 'Turnstile-Schlüssel erfolgreich gelöscht. CAPTCHA-Schutz ist jetzt deaktiviert.',
    'turnstile_settings_saved_enabled' => 'Sicherheitseinstellungen erfolgreich gespeichert. CAPTCHA-Schutz ist jetzt aktiviert.',
    'turnstile_settings_saved_disabled' => 'Sicherheitseinstellungen gespeichert. CAPTCHA-Schutz ist deaktiviert (keine Schlüssel angegeben).',
    'turnstile_settings_saved_incomplete' => 'Einstellungen gespeichert, aber CAPTCHA-Schutz ist deaktiviert (beide Schlüssel erforderlich).',
    'turnstile_settings_update_error' => 'Fehler beim Aktualisieren der Sicherheitseinstellungen. Bitte versuchen Sie es erneut.',
    'invalid_turnstile_theme' => 'Ungültiges CAPTCHA-Thema ausgewählt.',
    'invalid_turnstile_size' => 'Ungültige CAPTCHA-Größe ausgewählt.',
    
    // Frontend Validation Messages  
    'turnstile_validation_failed' => 'Sicherheitsverifizierung fehlgeschlagen. Bitte versuchen Sie es erneut.',
    'turnstile_required' => 'Bitte vervollständigen Sie die Sicherheitsverifizierung.',
    'turnstile_error' => 'Sicherheitsverifizierungsfehler. Bitte aktualisieren Sie und versuchen Sie es erneut.',

    // ===== DOCUMENT VIEWER =====
    'document_not_found' => 'Dokument nicht gefunden',
    'requested_document_not_found' => 'Das angeforderte Dokument konnte nicht gefunden werden.',
    'last_updated' => 'Zuletzt aktualisiert',
    'back_to_home' => 'Zurück zur Startseite',

    // ===== PROFILE PHOTO UPLOAD =====
    'profile_photo' => 'Profilbild',
    'current_photo' => 'Aktuelles Foto',
    'no_photo_uploaded' => 'Kein Foto hochgeladen',
    'choose_photo' => 'Foto auswählen',
    'photo_requirements' => 'Max 5MB. Akzeptierte Formate: JPG, PNG, WebP',
    'upload_photo' => 'Foto hochladen',
    'remove_photo' => 'Foto entfernen',
    'photo_preview' => 'Foto-Vorschau',
    
    // Photo upload messages
    'profile_photo_uploaded' => 'Profilbild erfolgreich hochgeladen',
    'profile_photo_removed' => 'Profilbild erfolgreich entfernt',
    'no_file_selected' => 'Keine Datei ausgewählt',
    'file_too_large' => 'Datei ist zu groß',
    'file_too_large_5mb' => 'Datei ist zu groß. Maximale Größe ist 5MB',
    'upload_interrupted' => 'Upload wurde unterbrochen',
    'upload_server_error' => 'Serverfehler beim Upload',
    'upload_unknown_error' => 'Unbekannter Upload-Fehler',
    'invalid_file_type' => 'Ungültiger Dateityp. Nur JPG, PNG und WebP sind erlaubt',
    'invalid_file_extension' => 'Ungültige Dateiendung',
    'directory_creation_failed' => 'Upload-Verzeichnis konnte nicht erstellt werden',
    'database_update_failed' => 'Datenbank-Update fehlgeschlagen',
    'image_processing_failed' => 'Bildverarbeitung fehlgeschlagen',
    'no_photo_to_remove' => 'Kein Foto zum Entfernen',
    'photo_removal_failed' => 'Foto konnte nicht entfernt werden',
    'profile_photo_alt' => 'Profilbild von {name}',
    
    // ===== CONTACT FORM =====
    'contact_form_description' => 'Kontaktieren Sie uns mit dem unten stehenden Formular. Wir antworten so schnell wie möglich.',
    'full_name' => 'Vollständiger Name',
    'full_name_help' => 'Ihr Vor- und Nachname',
    'full_name_real_name_required' => 'Bitte geben Sie Ihren echten vollständigen Namen ein',
    'contact_email_help' => 'Wir verwenden diese E-Mail-Adresse, um auf Ihre Nachricht zu antworten',
    'contact_reason' => 'Grund für Kontakt',
    'select_reason' => 'Bitte wählen Sie einen Grund',
    'reason_content_report' => 'Unangemessene Inhalte melden',
    'reason_translation_issue' => 'Übersetzungsfehler oder Vorschlag',
    'reason_technical_issue' => 'Technisches Problem oder Bug',
    'reason_other' => 'Andere Anfrage',
    'contact_message_placeholder' => 'Bitte beschreiben Sie Ihre Anfrage im Detail...',
    'contact_message_help' => 'Maximal 2000 Zeichen. Seien Sie spezifisch, um uns zu helfen, Sie besser zu unterstützen.',
    'contact_message_too_short' => 'Bitte geben Sie eine detailliertere Nachricht an (mindestens 10 Zeichen)',
    'send_message' => 'Nachricht senden',
    'captcha_verification_failed' => 'CAPTCHA-Verifizierung fehlgeschlagen. Bitte versuchen Sie es erneut.',
    'email_send_failed' => 'E-Mail konnte nicht gesendet werden. Bitte versuchen Sie es später erneut.',
    
    // Contact confirmation emails
    'contact_confirmation_subject' => 'Bestätigen Sie Ihre Nachricht - {site_name}',
    'email_greeting' => 'Hallo {name},',
    'contact_confirmation_message' => 'Bitte bestätigen Sie, dass Sie uns Ihre Nachricht senden möchten, indem Sie auf den Button unten klicken:',
    'confirm_contact_message' => 'Nachricht bestätigen',
    'contact_confirmation_url_fallback' => 'Wenn der Button nicht funktioniert, kopieren Sie diesen Link in Ihren Browser:',
    'contact_confirmation_footer' => 'Wenn Sie kein Kontaktformular ausgefüllt haben, können Sie diese E-Mail ignorieren.',
    'confirmation_email_sent' => 'Bestätigungs-E-Mail gesendet!',
    'contact_confirmation_instructions' => 'Wir haben eine Bestätigungs-E-Mail an Ihre Adresse gesendet. Bitte klicken Sie auf den Link in der E-Mail, um Ihre Nachricht zu senden.',
    'contact_message_sent_successfully' => 'Ihre Nachricht wurde erfolgreich gesendet! Wir melden uns bald bei Ihnen.',
    'error_sending_message_to_admin' => 'Fehler beim Senden Ihrer Nachricht an den Administrator. Bitte versuchen Sie es später erneut oder kontaktieren Sie den Support.',
    
    // Admin notifications
    'contact_admin_subject' => '{site_name} Kontakt: {reason}',
    'new_contact_message' => 'Neue Nachricht vom Kontaktformular',
    'contact_details' => 'Kontakt-Details',

    // ===== LOG VIEWER =====
    'account_activity_engish_only' => 'Aktivitätsprotokoll Ihres Kontos - Diese Seite ist nur auf Englisch verfügbar',
    'activity_logs' => 'Aktivitätsprotokolle',
    'my_activity' => 'Meine Aktivität',
    'user_id' => 'Benutzer-ID',

    // ===== GENERAL =====
    // Currently used in LOG MANAGEMENT SETTINGS
    'enabled' => 'Activiert',
    'disabled' => 'Deaktiviert',

    
    // ===== FAQ PAGE =====
    'faq_title' => 'Häufig gestellte Fragen',
    'faq_subtitle' => 'Finden Sie Antworten auf häufige Fragen über unsere Plattform',
    
    // FAQ Questions and Answers
    'faq_q1_what_is' => 'Was ist <em>Moien</em>?',
    'faq_a1_what_is' => '<em>Moien</em> ist eine persönliche Homepage mit einer netten, anpassbaren URL. Sie ermöglicht es Ihnen, ein Profilbild und eine Biografie zu teilen und besonders Links zu Orten im Web, die Sie lieben, und zu Ihren Social-Media-Profilen.',
    
    'faq_q2_why_created' => 'Warum wurde <em>Moien</em> entwickelt?',
    'faq_a2_why_created' => 'Ich habe <em>Moien</em> aus mehreren Gründen entwickelt:<ul><li>Um einen Online-Service vollständig auf Luxemburgisch zu erstellen und dadurch die Nutzung der luxemburgischen Sprache im Web zu fördern.</li><li>Um zu lernen und mich herauszufordern, indem ich digitale Barrierefreiheit für komplexe Projekte schaffe.</li><li>Um jedem zu ermöglichen, eine persönliche Mini-Homepage zu haben, die nicht erfordert, dass Besucher ein Konto erstellen.</li></ul>',
    
    'faq_q3_is_free' => 'Ist <em>Moien</em> kostenlos?',
    'faq_a3_is_free' => 'Ja. Die aktuell kostenlosen Funktionen werden kostenlos bleiben, solange <em>Moien</em> existiert.<br>Es könnten in Zukunft zusätzliche Premium-Funktionen hinzugefügt werden.',
    
    'faq_q4_add_features' => 'Werden Sie Feature XYZ hinzufügen?',
    'faq_a4_add_features' => 'Möglicherweise. Bitte verwenden Sie das Kontaktformular, um Funktionen anzufragen.',
    
    'faq_q5_translate' => 'Werden Sie <em>Moien</em> in andere Sprachen übersetzen?',
    'faq_a5_translate' => 'Ich plane, die Übersetzungsdateien zu veröffentlichen, damit jeder an der Übersetzung der Website teilnehmen kann. Noch keine ETA.',
    
    // FAQ Call to Action
    'still_have_questions' => 'Haben Sie noch Fragen?',
    'faq_contact_message' => 'Finden Sie nicht die Antwort, die Sie suchen? Kontaktieren Sie uns.',
    'contact_us' => 'Kontaktieren Sie uns',
    
    // ===== MISCELLANEOUS =====
    'luxembourg' => 'Luxemburg',

];