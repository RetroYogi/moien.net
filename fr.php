<?php
/**
 * French Translation File for Moien! Link Hub
 * 
 * This file contains all French text used throughout the application.
 * These translations correspond to the English keys in en.php.
 */

return [

    // ===== SITE IDENTITY & COMMON =====
    'welcome' => 'Bienvenue',
    'cancel' => 'Annuler',
    'delete' => 'Supprimer',
    'edit' => 'Modifier',
    'edit_profile' => 'Modifier le profil',
    'loading' => 'Chargement...',
    'saving' => 'Enregistrement...',
    'please_wait' => 'Veuillez patienter...',
    'all_rights_reserved' => 'Tous droits réservés',
    'home' => 'Accueil',
    
    // ===== NAVIGATION & ACCESSIBILITY =====
    'skip_to_content' => 'Aller au contenu principal',
    'skip_to_main_navigation' => 'Aller à la navigation principale',
    'main_navigation' => 'Navigation principale',
    'toggle_theme_description' => 'Basculer entre les thèmes clair, sombre et système',
    'toggle_menu' => 'Basculer le menu de navigation',
    'menu_opened' => 'Menu de navigation ouvert',
    'menu_closed' => 'Menu de navigation fermé',
    
    // ===== LANDING PAGE =====
    "get_started_free" => "C'est parti!",
    'go_to_dashboard' => 'Aller au Tableau de Bord',
    
    // Enhanced landing page content
    'welcome_back' => 'Bon retour, {name} !',
    'welcome_back_subtitle' => 'Prêt à gérer votre page de profile ?',
    'view_your_profile' => 'Voir Votre Profil',
    'profile_description' => 'Découvrez les liens de {name}',
    'main_actions' => 'Actions principales',
    'opens_in_new_window' => 'S\'ouvre dans une nouvelle fenêtre',
    
    // Device showcase
    'works_on_all_devices' => 'Fonctionne sur tous les appareils - Mode clair ou mode sombre? À vous de choisir!',
    
    // Features section
    'why_choose_us' => 'Pourquoi utiliser ' . getSiteIdentityText('site_name') . ' ?',
    'feature_simple_title' => 'Simple et Épuré',
    'feature_simple_desc' => 'Présentez-vous sur une page organisée et esthétique',
    'feature_customizable_title' => 'Personnalisable',
    'feature_customizable_desc' => 'Choisissez des émojis pour vos liens, ajoutez votre biographie',
    'feature_responsive_title' => 'Adapté Mobile',
    'feature_responsive_desc' => 'S\'adapte à tous les écrans, mobiles et d\'ordinateurs',
    'feature_open_title' => 'Ouvert',
    'feature_open_desc' => 'Pas de compte nécessaire pour voir votre page de profil',
    
    // How it works section
    'how_it_works_title' => 'Comment Ça Marche',
    'step_1_title' => 'Inscrivez-vous',
    'step_1_desc' => 'Créez votre compte gratuit et confirmez votre email',
    'step_2_title' => 'Personnalisez Votre Page',
    'step_2_desc' => 'Ajoutez votre photo de profil, bio et titre',
    'step_3_title' => 'Ajoutez Vos Liens',
    'step_3_desc' => 'Partagez tous vos liens importants en un seul endroit',
    
    // Community stats
    'total_clicks' => 'Clics Totaux',
        
    // ===== LANGUAGE INTERFACE =====
    'current_language' => 'Langue actuelle : {language}',
    'language' => 'Langue',
    'select_language' => 'Sélectionner la Langue',
    'language_selection' => 'Sélection de langue',
    'current' => 'actuelle',
        
    // ===== THEME SYSTEM =====
    'current_theme' => 'Thème actuel',
    'theme_light' => 'Clair',
    'theme_dark' => 'Sombre',
    'theme_system' => 'Système',
    'theme_switched_light' => 'Basculé vers le thème clair',
    'theme_switched_dark' => 'Basculé vers le thème sombre',
    'theme_switched_system' => 'Basculé vers le thème système',
    
    // ===== AUTHENTICATION =====
    'account_pending_confirmation' => 'Votre compte est en attente de confirmation par email. Veuillez vérifier votre email et cliquer sur le lien de confirmation.',
    'account_suspended' => 'Votre compte a été suspendu. Veuillez contacter le support pour obtenir de l\'aide.',
    'registration_disabled' => 'L\'inscription est actuellement désactivée.', // Concise AJAX error message when registration attempt is made but disabled
    'registration_currently_disabled' => 'Inscription Actuellement Désactivée', //Page heading and title on disabled registration page
    'registration_disabled_message' => 'L\'inscription de nouveaux comptes est temporairement désactivée.', // Explanatory message body, user friendly explanation
    'contact_admin_for_access' => 'Veuillez contacter l\'administrateur du site pour obtenir l\'accès.',
    'login' => 'Connexion',
    'register' => 'S\'inscrire',
    'logout' => 'Déconnexion',
    'login_title' => 'Connexion',
    'register_title' => 'Créez Votre Compte',
    'forgot_password' => 'Mot de Passe Oublié ?',
        
    // Form labels
    'first_name' => 'Prénom',
    'last_name' => 'Nom de Famille',
    'email_address' => 'Adresse Email',
    'email' => 'Email',
    'email_change_help' => 'Changer votre adresse email nécessite une confirmation via un lien de vérification envoyé à la nouvelle adresse',
    'password' => 'Mot de Passe',
    'confirm_password' => 'Confirmer le Mot de Passe',
    'new_password' => 'Nouveau Mot de Passe',
    'toggle_password_visibility' => 'Afficher le mot de passe',
        
    // Authentication messages
    'logout_success' => 'Vous avez été déconnecté avec succès.',
    'registration_success' => 'Inscription réussie ! Veuillez vérifier votre email pour confirmer votre compte.',
    'email_confirmed_message' => 'Email confirmé avec succès ! Vous pouvez maintenant vous connecter.',
    'password_reset_success' => 'Mot de passe réinitialisé avec succès ! Vous pouvez maintenant vous connecter avec votre nouveau mot de passe.',
    
    // Rate limiting messages
    'rate_limit_exceeded' => 'Trop de tentatives de connexion. Veuillez attendre {time} minutes avant de réessayer. (Maximum {attempts} tentatives par {time} minutes, réessayez après {reset_time})',
    'registration_rate_limit_exceeded' => 'Trop de tentatives d\'inscription. Veuillez attendre {time} minutes avant de réessayer. (Maximum {attempts} tentatives par {time} minutes, réessayez après {reset_time})',
    
    // Enhanced authentication states
    'sending' => 'Envoi...',
    
    // Authentication errors
    'invalid_credentials' => 'Email ou mot de passe invalide.',
    'email_not_confirmed' => 'Veuillez confirmer votre adresse email avant de vous connecter.',
    'invalid_token' => 'Token invalide ou expiré.',
    'invalid_or_expired_link' => 'Ce lien de confirmation est soit invalide, a expiré ou a déjà été utilisé.',
    
    // Email confirmation
    'email_confirmed_title' => 'Email Confirmé !',
    'confirmation_failed_title' => 'Échec de la Confirmation',
    
    // Password reset
    'forgot_password_title' => 'Mot de Passe Oublié ?',
    'forgot_password_desc' => 'Entrez votre adresse email et nous vous enverrons les instructions pour réinitialiser votre mot de passe.',
    'send_reset_link' => 'Envoyer le Lien de Réinitialisation',
    'reset_link_sent' => 'Lien de réinitialisation envoyé !',
    'reset_link_sent_desc' => 'Si cette adresse email est enregistrée chez nous, vous recevrez les instructions de réinitialisation.',
    'check_spam_folder' => 'Si vous ne recevez pas d\'email, veuillez vérifier votre dossier spam.',
    'return_to_login' => 'Retour à la Connexion',
    'invalid_reset_link' => 'Lien de Réinitialisation Invalide',
    'request_new_reset' => 'Demander un Nouveau Lien de Réinitialisation',
    
    // Registration
    'create_account' => 'Créer un Compte',
    'already_have_account' => 'Vous avez déjà un compte ?',
    'dont_have_account' => 'Vous n\'avez pas de compte ?',
    'register_now' => 'Inscrivez-vous maintenant',
    'minimum_8_characters' => 'Minimum 8 caractères',
    'accept_terms_and_privacy' => 'J\'accepte les <a href="/document-viewer.php?doc=cgu" target="_blank">conditions d\'utilisation</a> et la <a href="/document-viewer.php?doc=politique-confidentialite" target="_blank">politique de confidentialité</a>',
    'return_home' => 'Retour à l\'accueil',
    'go_back' => 'Retour',
    
    // ===== DASHBOARD =====
    'edit_link' => 'Modifier le Lien',
    'edit_link_action' => 'Modifier le lien : {title}',
    'update_link' => 'Mettre à Jour le Lien',
    'link_update_error' => 'Erreur lors de la mise à jour du lien.',
    'link_updated_successfully' => 'Lien mis à jour avec succès !',
    'dashboard' => 'Tableau de Bord',
    'user_dashboard' => 'Tableau de Bord Utilisateur',
    'admin_dashboard' => 'Tableau de Bord Admin',
    'profile_information' => 'Informations du Profil',
    'my_links' => 'Mes Liens',
    'view_profile' => 'Voir le Profil',
    'switch_view' => 'Changer de vue',
    'admin_view' => 'Vue Admin',
    'user_view' => 'Vue Utilisateur',

    // Profile form
    'title_optional' => 'Titre (optionnel)',
    'bio_optional' => 'Bio (optionnel)',
    'profile_title_placeholder' => 'ex. Développeur Web, Photographe, Étudiant...',
    'bio_placeholder' => 'Parlez-nous un peu de vous...',
    'profile_url' => 'URL du Profil',
    'save_profile' => 'Enregistrer le Profil',
    'profile_updated_message' => 'Profil mis à jour avec succès !',
    'profile_updated_email_confirmation_sent' => 'Profil mis à jour avec succès. Un email de confirmation a été envoyé à votre nouvelle adresse email.',
    'profile_updated_but_email_failed' => 'Profil mis à jour avec succès, mais nous n\'avons pas pu envoyer la confirmation par email. Veuillez réessayer plus tard.',
    'email_change_confirmed' => 'Votre adresse email a été changée avec succès.',
    'email_change_failed' => 'Échec du changement d\'adresse email. Veuillez réessayer.',
    'email_change_confirmation_title' => 'Confirmation de changement d\'email',
    'email_successfully_updated' => 'Votre adresse email a été mise à jour avec succès.',
    'new_email' => 'Nouvel email :',
    'need_help' => 'Besoin d\'aide ?',
    'try_again' => 'Réessayer',
    'update_email_profile_settings' => 'Mettez à jour votre email depuis les paramètres de votre profil',
    'sign_in_access_account' => 'Connectez-vous pour accéder à votre compte',
    'contact_support' => 'Contacter le support',
    'get_help_support_team' => 'Obtenez de l\'aide de notre équipe de support',
    'profile_updated_successfully' => 'Profil mis à jour avec succès.',
    'profile_update_error' => 'Erreur lors de la mise à jour du profil.',

    // Profile username
    'username' => 'Nom d\'utilisateur',
    'name' => 'Nom',
    'url' => 'URL',
    'text' => 'Texte',
    "username_required" => "Le nom d'utilisateur est requis",
    "username_too_short" => "Le nom d'utilisateur doit contenir au moins 3 caractères",
    "username_too_long" => "Le nom d'utilisateur ne peut pas dépasser 30 caractères",
    "username_invalid_characters" => "Le nom d'utilisateur ne peut contenir que des lettres, chiffres, tirets, underscores et points",
    "username_must_start_alphanumeric" => "Le nom d'utilisateur doit commencer par une lettre ou un chiffre",
    "username_must_end_alphanumeric" => "Le nom d'utilisateur doit se terminer par une lettre ou un chiffre",
    "username_no_consecutive_special" => "Le nom d'utilisateur ne peut pas avoir de caractères spéciaux consécutifs",
    "username_reserved" => "Ce nom d'utilisateur est réservé et ne peut pas être utilisé",
    "username_already_taken" => "Ce nom d'utilisateur est déjà pris",
    "username_updated_successfully" => "Nom d'utilisateur mis à jour avec succès : {username}",
    "username_change_cooldown" => "Vous pourrez changer votre nom d'utilisateur à nouveau le {date}",
    "username_generation_failed" => "Impossible de générer un nom d'utilisateur valide. Veuillez contacter le support.",
    'names_contain_invalid_characters' => 'Les noms contiennent des caractères invalides. Veuillez utiliser uniquement des lettres sans accents.',
    'change_username' => 'Changer le nom d\'utilisateur',
    'username_change_info' => 'Vous pouvez modifier votre nom d\'utilisateur une fois par mois.',
    "current_username" => "Nom d'utilisateur actuel",
    "new_username" => "Nouveau nom d'utilisateur",
    'username_help' => 'Seuls les lettres, chiffres, tirets, underscores et points sont autorisés',
    'no_changes_to_update' => 'Aucune modification à mettre à jour',
    'invalid_user' => 'Utilisateur invalide',
    'user_updated_successfully' => 'Utilisateur mis à jour avec succès',
    'access_denied_short' => 'Accès refusé',
    'update_username' => 'Mettre à jour le nom d\'utilisateur',
    
    // Additional validation messages for admin user editing
    'first_name_required' => 'Le prénom est requis',
    'last_name_required' => 'Le nom de famille est requis',
    'email_required' => 'L\'email est requis',
    'first_name_length_error' => 'Le prénom doit faire entre 2 et 100 caractères',
    'last_name_length_error' => 'Le nom de famille doit faire entre 2 et 100 caractères',
    'email_too_long' => 'L\'email doit faire moins de 255 caractères',
    'email_already_in_use' => 'Cette adresse email est déjà utilisée',
    'first_name_invalid_characters' => 'Le prénom contient des caractères invalides',
    'last_name_invalid_characters' => 'Le nom de famille contient des caractères invalides',
    'username_length_error' => 'Le nom d\'utilisateur doit faire entre 3 et 30 caractères',
    'invalid_status_selected' => 'Statut invalide sélectionné',
    'invalid_admin_role_selected' => 'Rôle administrateur invalide sélectionné',
    'user_not_found' => 'Utilisateur introuvable',

    // Enhanced profile form help
    'first_name_help' => 'Votre prénom tel que vous souhaitez qu\'il apparaisse sur votre profil.',
    'last_name_help' => 'Votre nom de famille tel que vous souhaitez qu\'il apparaisse sur votre profil.',
    'title_help' => 'Votre titre professionnel ou ce que vous faites (optionnel).',
    'bio_help' => 'Une courte description de vous qui apparaîtra sur votre profil.',
    'html_formatting_allowed' => 'Autorise <code>&lt;br&gt;</code>, <code>&lt;em&gt;</code>, et <code>&amp;nbsp;</code> pour le formatage de base.',
    'profile_url_help' => 'C\'est votre URL de profil unique que vous pouvez partager avec d\'autres.',
    
    // Language preferences
    'language_preferences' => 'Préférences de Langue',
    'language_preference_updated' => 'Préférence de langue mise à jour avec succès !',
    'language_update_error' => 'Erreur lors de la mise à jour de la préférence de langue.',
    'invalid_language_selected' => 'Langue sélectionnée invalide.',

    // Language settings - enhanced
    'interface_language' => 'Langue de l\'Interface',
    'interface_language_help' => 'Choisissez votre langue préférée pour l\'interface du site web.',
    'user_profile_page_language' => 'Langue de votre page de profil',
    'user_profile_page_language_help' => 'Sélectionnez la langue dans laquelle vous avez écrit votre Titre, Biographie et descriptions de Liens',
    'language_preferences_updated' => 'Préférences de langue mises à jour avec succès !',
    'save_language_preferences' => 'Enregistrer les Préférences de Langue',
    'click_to_save_language_preferences' => 'Cliquez pour Enregistrer les Préférences de Langue',
    
    // Links management
    'add_new_link' => 'Ajouter un Nouveau Lien',
    'link_title' => 'Titre',
    'link_url' => 'URL',
    'link_description' => 'Description (Optionnelle)',
    'link_icon' => 'Icône (optionnel)',
    'link_title_placeholder' => 'ex. Mon Site Web',
    'link_description_placeholder' => 'Brève description de ce lien (optionnelle)',
    'url_placeholder' => 'https://exemple.com',
    'choose_icon' => 'Choisir une icône',
    'click_icon_to_select' => 'Cliquez sur une icône ci-dessous pour la sélectionner',
    'search_icons' => 'Rechercher des icônes',
    'all_icons' => 'Toutes',
    'common' => 'Commun',
    'social' => 'Social',
    'professional' => 'Professionnel',
    'communication' => 'Communication',
    'business' => 'Entreprise',
    'athome' => 'Maison',
    'leisure' => 'Loisirs',
    'icon_selection_grid' => 'Grille de sélection d\'icônes',
    'no_icons_found' => 'Aucune icône trouvée',
    'icon_selected' => 'Icône {name} sélectionnée',
    'icon_selection_cleared' => 'Sélection d\'icône effacée',
    'selected_icon_default' => 'Icône sélectionnée',
    'add_link' => 'Ajouter un Lien',
    'current_links' => 'Liens Actuels',
    'no_links_yet' => 'Vous n\'avez pas encore ajouté de liens.',
    'link_added_message' => 'Lien ajouté avec succès !',
    'link_deleted_message' => 'Lien supprimé avec succès !',
    'link_add_error' => 'Erreur lors de l\'ajout du lien.',
    'link_delete_error' => 'Erreur lors de la suppression du lien.',
    'delete_link_confirm' => 'Êtes-vous sûr de vouloir supprimer "{title}" ? Cette action ne peut pas être annulée.',
    'delete_link_action' => 'Supprimer le lien : {title}',
    'link_not_found' => 'Lien non trouvé.',
    
    // Enhanced link form help
    'link_title_help' => 'Le nom qui apparaîtra sur votre profil pour ce lien.',
    'link_url_help' => 'L\'URL complète vers laquelle ce lien doit aller (incluez https://).',
    'link_description_help' => 'Description courte optionnelle pour aider les visiteurs à comprendre ce lien.',
    'link_icon_help' => 'Choisissez une icône à afficher à côté de votre lien parmi les nombreuses icônes Font Awesome.',
    
    // Link validation
    'valid_url_required' => 'Veuillez entrer une URL valide.',
    'invalid_url' => 'Format d\'URL invalide',
    'please_enter_valid_url' => 'Veuillez entrer une URL valide',
    'url_too_long' => 'L\'URL est trop longue (max {max} caractères, actuel: {current})',
        
    // ===== PUBLIC PROFILE =====
    'profile_not_found' => 'Profil Non Trouvé',
    'profile_not_found_desc' => 'Le profil que vous recherchez n\'existe pas.',
    'main_links' => 'Liens Principaux',
    'no_links_available' => 'Aucun lien disponible',
    'user_no_links_message' => '{name} n\'a pas encore ajouté de liens.',
    
    // Enhanced profile content
    'profile_initials_alt' => 'Initiales du profil : {initials}',
    'user_links_navigation' => 'Liens de {name}',
    'social_media_navigation' => 'Médias sociaux de {name}',
    'visit_social_platform' => 'Visiter {name} sur {platform}',
    
    // Profile actions
    'share_profile' => 'Partager le profil de {name}',
    'share_profile_button' => 'Partager avec votre appareil',
    'check_out_profile' => 'Découvrez le profil de {name}',
    'create_your_own_profile' => 'Créez votre propre profil avec ' . getSiteIdentityText('site_name') . '',
    'add_links' => 'Ajouter des liens',
    'add_your_first_link' => 'Ajoutez votre premier lien',
    
    // ===== ADMIN INTERFACE =====
    
    // User management
    'status' => 'Statut',
    
    // Admin roles
    
    // Language management
    'language_usage_percentage' => '{percentage}% des utilisateurs',

    
    // Log actions
    'admin_updated_site_settings' => 'L\'admin a mis à jour les paramètres du site',
    'site_settings_updated' => 'Paramètres du site mis à jour avec succès !',
    'system' => 'Système',
   
    // Centralized validation system messages
    'field_required' => 'Un champ obligatoire n\'a pas été rempli',
    'field_too_long' => 'Maximum {max} caractères autorisés',
    'field_too_short' => 'Minimum {min} caractères requis',
    'field_invalid_format' => 'Format invalide',
    'security_content_blocked' => 'Le contenu contient des risques de sécurité et ne peut pas être sauvegardé',
    'security_invalid_characters' => 'Le contenu contient des caractères invalides',
    'security_too_many_special_chars' => 'Trop de caractères spéciaux',
    'translation' => 'Traduction',
    'invalid_language_file' => 'Fichier de langue invalide',
    'translation_file_format_error' => 'Erreur de format du fichier de traduction',
    'backup_creation_failed' => 'Échec de la création du fichier de sauvegarde',
    'translation_file_write_error' => 'Échec de l’écriture du fichier de traduction',
    'translations_updated_successfully' => 'Traductions mises à jour avec succès',
    'translation_update_error' => 'Erreur lors de la mise à jour des traductions',
    'invalid_fallback_language' => 'Langue de repli sélectionnée invalide.',
    'settings_update_error' => 'Erreur lors de la mise à jour des paramètres.',
    
    // Email settings
        
    // ===== FORM VALIDATION =====
    'invalid_email_format' => 'Veuillez entrer une adresse email valide',
    
    // ===== NOTIFICATIONS & ALERTS =====
    'success' => 'Succès',
    'action_successful' => 'Opération réussie',
    'error' => 'Erreur',
    'session_expired' => 'Votre session a expiré. Veuillez vous reconnecter.',
    'access_denied_admin' => 'Accès refusé. Privilèges administrateur requis.',
    
    // Enhanced notifications
    'form_saved_shortcut' => 'Formulaire enregistré via raccourci clavier !',
    'admin_access_indicator' => 'Indicateur de mode d\'accès admin',
    'switching_language' => 'Changement de langue...',
    
    // ===== JAVASCRIPT MESSAGES =====
    'js_confirm_delete' => 'Êtes-vous sûr de vouloir supprimer cet élément ?',
    'js_network_error' => 'Erreur réseau. Veuillez vérifier votre connexion.',
    'js_copy_success' => 'Copié dans le presse-papiers !',
    'js_copy_error' => 'Échec de la copie dans le presse-papiers',
    
    // ===== SECURITY & TIPS =====
    'security_tip' => 'Conseil de Sécurité',
    
    // ===== PLURALIZATION =====
    'users' => 'utilisateurs',
    'link' => 'lien', 
    'links' => 'liens',
    'click' => 'clic',
    'clicks' => 'clics',
    
    // ===== HELP & SUPPORT =====
    'useful_info' => 'Infos utiles',
    'support' => 'Support',
    'contact_form' => 'Formulaire de contact',
    'faq' => 'FAQ',
    'feedback' => 'Commentaires',
    'privacy_policy' => 'Politique de confidentialité',
    "terms_of_service" => "Conditions d'utilisation",
    'reporting_procedure' => 'Procedure de signalement',
    'legal_notice' => 'Mentions légales',
    'legal' => 'Légal',
    'documents_not_translated' => 'Les documents dans cette section ne sont pas traduits. Ils sont uniquement disponibles en anglais.',
    
    // ===== ERROR PAGES =====
    'error_400_title' => 'Requête Incorrecte',
    'error_400_message' => 'Votre requête n\'a pas pu être traitée en raison de données invalides.',
    'error_401_title' => 'Non Autorisé',
    'error_401_message' => 'Vous devez vous connecter pour accéder à cette ressource.',
    'error_403_title' => 'Accès Interdit',
    'error_403_message' => 'Vous n\'avez pas la permission d\'accéder à cette ressource.',
    'error_404_title' => 'Page Non Trouvée',
    'error_404_message' => 'La page que vous recherchez n\'existe pas.',
    'error_500_title' => 'Erreur Serveur',
    'error_500_message' => 'Quelque chose s\'est mal passé de notre côté. Veuillez réessayer plus tard.',
 
    
    // ===== FOOTER CONTENT =====
    'preferences' => 'Préférences',
    'site_statistics' => 'Statistiques du site',
    'made_with_love_in' => 'Fait avec ❤️ au',
    'aria_made_with_love_in_lux' => 'Fait avec amour au Luxembourg',
    'help_translate' => 'Aidez-nous à traduire ' . getSiteIdentityText('site_name'),
    'by_key4' => 'Design et développement<br>par Key4 Digital Services',

    
    // ===== SECURITY SETTINGS (TURNSTILE CAPTCHA) =====
    
    // Success/Error Messages
    'turnstile_keys_cleared_success' => 'Clés Turnstile effacées avec succès. La protection CAPTCHA est maintenant désactivée.',
    'turnstile_settings_saved_enabled' => 'Paramètres de sécurité enregistrés avec succès. La protection CAPTCHA est maintenant activée.',
    'turnstile_settings_saved_disabled' => 'Paramètres de sécurité enregistrés. La protection CAPTCHA est désactivée (aucune clé fournie).',
    'turnstile_settings_saved_incomplete' => 'Paramètres enregistrés, mais la protection CAPTCHA est désactivée (les deux clés sont requises).',
    'turnstile_settings_update_error' => 'Échec de la mise à jour des paramètres de sécurité. Veuillez réessayer.',
    'invalid_turnstile_theme' => 'Thème CAPTCHA sélectionné invalide.',
    'invalid_turnstile_size' => 'Taille CAPTCHA sélectionnée invalide.',
    
    // Frontend Validation Messages  
    'turnstile_validation_failed' => 'Vérification de sécurité échouée. Veuillez réessayer.',
    'turnstile_required' => 'Veuillez compléter la vérification de sécurité.',
    'turnstile_error' => 'Erreur de vérification de sécurité. Veuillez actualiser et réessayer.',

    // ===== DOCUMENT VIEWER =====
    'document_not_found' => 'Document non trouvé',
    'requested_document_not_found' => 'Le document demandé est introuvable.',
    'last_updated' => 'Dernière mise à jour',
    'back_to_home' => 'Retour à l\'accueil',

    // ===== PROFILE PHOTO UPLOAD =====
    'profile_photo' => 'Photo de profil',
    'current_photo' => 'Photo actuelle',
    'no_photo_uploaded' => 'Aucune photo téléchargée',
    'choose_photo' => 'Choisir une photo',
    'photo_requirements' => 'Max 5Mo. Formats acceptés : JPG, PNG, WebP',
    'upload_photo' => 'Télécharger la photo',
    'remove_photo' => 'Supprimer la photo',
    'photo_preview' => 'Aperçu de la photo',
    
    // Photo upload messages
    'profile_photo_uploaded' => 'Photo de profil téléchargée avec succès',
    'profile_photo_removed' => 'Photo de profil supprimée avec succès',
    'no_file_selected' => 'Aucun fichier sélectionné',
    'file_too_large' => 'Le fichier est trop volumineux',
    'file_too_large_5mb' => 'Le fichier est trop volumineux. Taille maximale : 5Mo',
    'upload_interrupted' => 'Téléchargement interrompu',
    'upload_server_error' => 'Erreur serveur lors du téléchargement',
    'upload_unknown_error' => 'Erreur de téléchargement inconnue',
    'invalid_file_type' => 'Type de fichier invalide. Seuls JPG, PNG et WebP sont autorisés',
    'invalid_file_extension' => 'Extension de fichier invalide',
    'directory_creation_failed' => 'Échec de création du répertoire de téléchargement',
    'database_update_failed' => 'Échec de mise à jour de la base de données',
    'image_processing_failed' => 'Échec du traitement de l\'image',
    'no_photo_to_remove' => 'Aucune photo à supprimer',
    'photo_removal_failed' => 'Échec de suppression de la photo',
    'profile_photo_alt' => 'Photo de profil de {name}',
    
    // ===== CONTACT FORM =====
    'contact_form_description' => 'Contactez-nous avec le formulaire ci-dessous. Nous répondrons dès que possible.',
    'full_name' => 'Nom complet',
    'full_name_help' => 'Votre prénom et nom de famille',
    'full_name_real_name_required' => 'Veuillez entrer votre vrai nom complet',
    'contact_email_help' => 'Nous utiliserons cette adresse pour répondre à votre message',
    'contact_reason' => 'Motif du contact',
    'select_reason' => 'Veuillez sélectionner un motif',
    'reason_content_report' => 'Signaler un contenu inapproprié',
    'reason_translation_issue' => 'Erreur de traduction ou suggestion',
    'reason_technical_issue' => 'Problème technique ou bug',
    'reason_other' => 'Autre demande',
    'contact_message_placeholder' => 'Veuillez décrire votre demande en détail...',
    'contact_message_help' => 'Maximum 2000 caractères. Soyez précis pour nous aider à mieux vous assister.',
    'contact_message_too_short' => 'Veuillez fournir un message plus détaillé (minimum 10 caractères)',
    'send_message' => 'Envoyer le message',
    'captcha_verification_failed' => 'Vérification CAPTCHA échouée. Veuillez réessayer.',
    'email_send_failed' => 'Échec d\'envoi de l\'e-mail. Veuillez réessayer plus tard.',
    
    // Contact confirmation emails
    'contact_confirmation_subject' => 'Confirmez votre message',
    'contact_confirmation_message' => 'Veuillez confirmer que vous souhaitez nous envoyer votre message en cliquant sur le bouton ci-dessous :',
    'confirm_contact_message' => 'Confirmer le message',
    'contact_confirmation_url_fallback' => 'Si le bouton ne fonctionne pas, copiez et collez ce lien dans votre navigateur :',
    'contact_confirmation_footer' => 'Si vous n\'avez pas soumis de formulaire de contact, vous pouvez ignorer cet e-mail.',
    'confirmation_email_sent' => 'E-mail de confirmation envoyé !',
    'contact_confirmation_instructions' => 'Nous avons envoyé un e-mail de confirmation à votre adresse. Veuillez cliquer sur le lien dans l\'e-mail pour envoyer votre message.',
    'contact_message_sent_successfully' => 'Votre message a été envoyé avec succès !',
    'error_sending_message_to_admin' => 'Échec de l\'envoi de votre message à l\'administrateur. Veuillez réessayer plus tard ou contacter le support.',
    
    // Admin notifications
    'contact_admin_subject' => 'Contact : {reason}',
    'new_contact_message' => 'Nouveau message par formulaire de contact',
    'contact_details' => 'Détails du contact',

    // ===== LOG VIEWER =====
    'account_activity_engish_only' => 'Consultez l\'activité de votre compte - Cette page est seulement disponible en anglais',
    'activity_logs' => 'Journaux d\'Activité',
    'my_activity' => 'Mon Activité',
    'user_id' => 'ID Utilisateur',

    // ===== GENERAL =====
    // Currently used in LOG MANAGEMENT SETTINGS
    'enabled' => 'Activé',
    'disabled' => 'Désactivé',

    
    // ===== FAQ PAGE =====
    'faq_title' => 'Foire aux Questions',
    'faq_subtitle' => 'Trouvez des réponses aux questions fréquentes sur notre plateforme',
    
    // FAQ Questions and Answers
    'faq_q1_what_is' => 'Qu\'est-ce que <em>Moien</em> ?',
    'faq_a1_what_is' => '<em>Moien</em> est une page d\'accueil personnelle avec une courte URL personnalisable. Elle vous permet de partager une photo de profil, une biographie et surtout des liens vers des endroits sur le web que vous aimez et vers vos profils de médias sociaux.',
    
    'faq_q2_why_created' => 'Pourquoi <em>Moien</em> a-t-elle été créée ?',
    'faq_a2_why_created' => 'J\'ai développé <em>Moien</em> pour plusieurs raisons :<ul><li>Pour créer un service en ligne entièrement en luxembourgeois (parmi d\'autres langues) et ainsi promouvoir l\'usage du luxembourgeois sur le web.</li><li>Pour développer mes connaissances professionnelles, en implémentant l\'accessibilité numérique pour un projet complexe.</li><li>Pour permettre à chacun d\'avoir une mini-page d\'accueil personnelle qui n\'exige pas des visiteurs de créer un compte.</li></ul>',
    
    'faq_q3_is_free' => 'Est-ce que <em>Moien</em> est gratuit ?',
    'faq_a3_is_free' => 'Oui. Les fonctionnalités actuellement gratuites resteront gratuites tant que <em>Moien</em> existera.<br>Des fonctionnalités premium supplémentaires pourraient être ajoutées à l\'avenir.',
    
    'faq_q4_add_features' => 'Ajouterez-vous la fonctionnalité XYZ ?',
    'faq_a4_add_features' => 'Peut-être. Veuillez utiliser le formulaire de contact pour demander des fonctionnalités.',
    
    'faq_q5_translate' => 'Traduirez-vous <em>Moien</em> dans d\'autres langues ?',
    'faq_a5_translate' => 'Je prévois de publier les fichiers de traduction pour que tout le monde puisse participer à la traduction du site web. Pas encore d\'ETA.',
    
    'faq_q6_userlist' => 'Comment puis-je trouver la page d\'un autre utilisateur ?',
    'faq_a6_userlist' => 'Il n\'y a actuellement ni annuaire d\'utilisateurs ni base de données consultable. Les pages peuvent être indexées par les moteurs de recherche. Vous pouvez partager n\'importe quelle page en utilisant les fonctionnalités de partage intégrées ou en envoyant l\'URL de la page à vos contacts.',
    
    'faq_q7_searchengine' => 'Puis-je empêcher ma page d\'être indexée par les moteurs de recherche ?',
    'faq_a7_searchengine' => 'Non. Ne partagez que des informations publiques sur votre page - des choses que tout le monde est autorisé à voir ou à lire.',
    
    'faq_q8_next_steps' => 'Je me suis inscrit. Que dois-je faire ensuite ?',
    'faq_a8_next_steps' => '<ol><li>Vous avez rempli votre nom lors de l\'inscription. Ajoutez maintenant un titre et une courte histoire ou biographie.</li><li>Important : Sélectionnez la langue dans laquelle vous écrivez vos informations de profil. Il s\'agit du paramètre <strong>Langue de la page de profil utilisateur</strong>.</li><li>Enfin, ajoutez vos liens.</li></ol>N\'oubliez pas de cliquer sur le bouton sauvegarder après chaque étape <span aria-hidden="true">👌</span>',
    
    'faq_q9_homepage_address' => 'Quelle est l\'adresse de ma page d\'accueil ?',
    'faq_a9_homepage_address' => 'Connectez-vous à moien.net et cliquez sur Voir le profil dans la navigation principale. Cela vous mène directement à votre page d\'accueil. Vous verrez l\'adresse de votre page dans la barre d\'URL. Vous pouvez la copier ou utiliser les fonctionnalités de partage situées sous votre profil.',
    
    // FAQ Call to Action
    'still_have_questions' => 'Vous avez encore des questions ?',
    'faq_contact_message' => 'Vous ne trouvez pas la réponse que vous cherchez ? Contactez-nous.',
    'contact_us' => 'Nous contacter',
    
    // ===== EMAIL TEMPLATES =====
    
    // use generic messages to allow reuse
    'link_expires_in_24h' => 'Ce lien est valide pendant 24 heures.',
    'email_footer_text' => 'Message généré par le système de messagerie',
    'email_sent_from' => 'envoyé depuis',
    'email_greeting' => 'Bonjour {{name}}',
    'email_footer_automated_message' => 'Ceci est un message automatique de',
    'email_footer_all_rights_reserved' => 'Tous droits réservés.',

    // ===== EMAIL REUSABLE ELEMENTS =====
    // Greetings & Closings
    'email_greeting_hello_name' => 'Bonjour {{name}}',
    'email_greeting_welcome_name' => 'Bienvenue, {{name}} !',

    // Common Instructions
    'email_button_not_working_instruction' => 'Si le bouton ci-dessus ne fonctionne pas, vous pouvez également copier et coller ce lien dans votre navigateur :',
    'email_link_expires_security' => 'Ce lien expirera pour des raisons de sécurité.',

    // Security Notices
    'email_security_notice_title' => 'Avis de sécurité :',
    'email_ignore_if_not_requested' => 'Si vous n\'avez pas demandé cela, vous pouvez ignorer cet e-mail en toute sécurité.',

    // Layout Elements
    'email_automated_message_from' => 'Ceci est un message automatique de {{site:site_name}}',
    'email_copyright_year' => '© {{current_year}} {{site:site_name}}',
    'email_all_rights_reserved' => 'Tous droits réservés',

    // Action Buttons
    'email_button_confirm_account' => 'Confirmer mon compte',
    'email_button_reset_password' => 'Réinitialiser mon mot de passe',
    'email_button_confirm_email' => 'Confirmer l\'email',

    // Time-related
    'email_expires_in_24_hours' => 'Ce lien expirera dans 24 heures pour des raisons de sécurité.',
    'email_expires_in_1_hour' => 'Ce lien expirera dans 1 heure pour votre sécurité.',
    
    // ===== MISCELLANEOUS =====
    'luxembourg' => 'Luxembourg',

];