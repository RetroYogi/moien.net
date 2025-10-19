<?php
/**
 * English Translation File for Moien! Link Hub
 * 
 * This file contains all English text used throughout the application.
 * These texts serve as both the developer-readable keys and the English translation.
 */

return [

    // ===== SITE IDENTITY & COMMON =====
    'welcome' => 'Welcome',
    'cancel' => 'Cancel',
    'delete' => 'Delete',
    'edit' => 'Edit',
    'edit_profile' => 'Edit Profile',
    'loading' => 'Loading...',
    'saving' => 'Saving...',
    'please_wait' => 'Please wait...',
    'all_rights_reserved' => 'All rights reserved',
    'home' => 'Home',
    
    // ===== NAVIGATION & ACCESSIBILITY =====
    'skip_to_content' => 'Skip to main content',
    'skip_to_main_navigation' => 'Skip to main navigation',
    'main_navigation' => 'Main navigation',
    'navigation' => 'Navigation',
    'show_hide_navigation' => 'Show or hide navigation',
    'toggle_theme_description' => 'Toggle between light, dark, and system theme',
    'toggle_menu' => 'Toggle navigation menu',
    'menu_opened' => 'Navigation menu opened',
    'menu_closed' => 'Navigation menu closed',
    
    // ===== LANDING PAGE =====
    'get_started_free' => 'Get Started ',
    'go_to_dashboard' => 'Go to Dashboard',
    
    // Enhanced landing page content
    'welcome_back' => 'Welcome back, {name}!',
    'welcome_back_subtitle' => 'Ready to manage your profile page?',
    'view_your_profile' => 'View Your Profile',
    'profile_description' => 'Check out {name}\'s links',
    'main_actions' => 'Main actions',
    'opens_in_new_window' => 'Opens in new window',
    
    // Device showcase
    'works_on_all_devices' => 'Works beautifully on all devices - Light or dark mode? Your choice!',
    
    // Features section
    'why_choose_us' => 'Why use ' . getSiteIdentityText('site_name') . ' ?',
    'feature_simple_title' => 'Simple & Clean',
    'feature_simple_desc' => 'Introduce yourself on a beautiful and clean page',
    'feature_customizable_title' => 'Customizable',
    'feature_customizable_desc' => 'Choose Emojis for your links, add your biography',
    'feature_responsive_title' => 'Mobile-Ready',
    'feature_responsive_desc' => 'Looks perfect on every screen, mobile or desktop',
    'feature_open_title' => 'Open',
    'feature_open_desc' => 'No account needed to view your profile page',
    
    // How it works section
    'how_it_works_title' => 'How It Works',
    'step_1_title' => 'Sign Up',
    'step_1_desc' => 'Create your free account and confirm your email',
    'step_2_title' => 'Customize Your Page',
    'step_2_desc' => 'Add your profile photo, bio, and links',
    'step_3_title' => 'Share & Grow',
    'step_3_desc' => 'Share your profile with your online community',
    
    // Community stats
    'total_clicks' => 'Total Clicks',
        
    // ===== LANGUAGE INTERFACE =====
    'current_language' => 'Current language: {language}',
    'language' => 'Language',
    'select_language' => 'Select Language',
    'language_selection' => 'Language selection',
    'current' => 'current',
        
    // ===== THEME SYSTEM =====
    'current_theme' => 'Current theme',
    'theme_light' => 'Light',
    'theme_dark' => 'Dark',
    'theme_system' => 'System',
    'theme_switched_light' => 'Switched to light theme',
    'theme_switched_dark' => 'Switched to dark theme',
    'theme_switched_system' => 'Switched to system theme',
    
    // ===== AUTHENTICATION =====
    'account_pending_confirmation' => 'Your account is pending email confirmation. Please check your email and click the confirmation link.',
    'account_suspended' => 'Your account has been suspended. Please contact support for assistance.',
    'registration_disabled' => 'Registration is currently disabled.', // Concise AJAX error message when registration attempt is made but disabled
    'registration_currently_disabled' => 'Registration Currently Disabled', //Page heading and title on disabled registration page
    'registration_disabled_message' => 'New account registration is temporarily disabled.', // Explanatory message body, user friendly explanation
    'contact_admin_for_access' => 'Please contact the site administrator for access.',
    'login' => 'Login',
    'register' => 'Register',
    'logout' => 'Logout',
    'login_title' => 'Login',
    'register_title' => 'Create Your Account',
    'forgot_password' => 'Forgot Password?',
        
    // Form labels
    'first_name' => 'First Name',
    'last_name' => 'Last Name',
    'email_address' => 'Email Address',
    'email' => 'Email',
    'email_change_help' => 'Changing your email address will require confirmation via a verification link sent to the new address',
    'password' => 'Password',
    'confirm_password' => 'Confirm Password',
    'new_password' => 'New Password',
    'toggle_password_visibility' => 'Show password',
        
    // Authentication messages
    'logout_success' => 'You have been logged out successfully.',
    'registration_success' => 'Registration successful! Please check your email to confirm your account.',
    'email_confirmed_message' => 'Email confirmed successfully! You can now log in.',
    'password_reset_success' => 'Password reset successfully! You can now log in with your new password.',
    
    // Rate limiting messages
    'rate_limit_exceeded' => 'Too many login attempts. Please wait {time} minutes before trying again. (Maximum {attempts} attempts per {time} minutes, try again after {reset_time})',
    'registration_rate_limit_exceeded' => 'Too many registration attempts. Please wait {time} minutes before trying again. (Maximum {attempts} attempts per {time} minutes, try again after {reset_time})',
    
    // Enhanced authentication states
    'sending' => 'Sending...',
    
    // Authentication errors
    'invalid_credentials' => 'Invalid email or password.',
    'email_not_confirmed' => 'Please confirm your email address before logging in.',
    'invalid_token' => 'Invalid or expired token.',
    'invalid_or_expired_link' => 'This confirmation link is either invalid, has expired or has already been used.',
    
    // Email confirmation
    'email_confirmed_title' => 'Email Confirmed!',
    'confirmation_failed_title' => 'Confirmation Failed',
    
    // Password reset
    'forgot_password_title' => 'Forgot Password?',
    'forgot_password_desc' => 'Enter your email address and we\'ll send you instructions to reset your password.',
    'send_reset_link' => 'Send Reset Link',
    'reset_link_sent' => 'Reset link sent!',
    'reset_link_sent_desc' => 'If this email address is registered with us, you will receive reset instructions.',
    'check_spam_folder' => 'If you don\'t receive an email, please check your spam folder.',
    'return_to_login' => 'Return to Login',
    'invalid_reset_link' => 'Invalid Reset Link',
    'request_new_reset' => 'Request New Reset Link',
    
    // Registration
    'create_account' => 'Create Account',
    'already_have_account' => 'Already have an account?',
    'dont_have_account' => 'Don\'t have an account?',
    'register_now' => 'Register now',
    'minimum_8_characters' => 'Minimum 8 characters',
    'accept_terms_and_privacy' => 'I accept the <a href="/document-viewer.php?doc=cgu" target="_blank">terms of service</a> and the <a href="/document-viewer.php?doc=politique-confidentialite" target="_blank">privacy policy</a>',
    'return_home' => 'Return to homepage',
    'go_back' => 'Go back',
    
    // ===== DASHBOARD =====
    'dashboard' => 'Dashboard',
    'user_dashboard' => 'User Dashboard',
    'admin_dashboard' => 'Admin Dashboard',
    'profile_information' => 'Profile Information',
    'my_links' => 'My Links',
    'view_profile' => 'View Profile',
    
    // Profile form
    'title_optional' => 'Title (optional)',
    'bio_optional' => 'Bio (optional)',
    'profile_title_placeholder' => 'e.g. Web Developer, Photographer, Student...',
    'bio_placeholder' => 'Tell us something about yourself...',
    'profile_url' => 'Profile URL',
    'save_profile' => 'Save Profile',
    'profile_updated_message' => 'Profile updated successfully!',
    'profile_updated_email_confirmation_sent' => 'Profile updated successfully. A confirmation email has been sent to your new email address.',
    'profile_updated_but_email_failed' => 'Profile updated successfully, but we could not send the email confirmation. Please try again later.',
    'email_change_confirmed' => 'Your email address has been successfully changed.',
    'email_change_failed' => 'Failed to change your email address. Please try again.',
    'email_change_confirmation_title' => 'Email Change Confirmation',
    'email_successfully_updated' => 'Your email address has been successfully updated.',
    'new_email' => 'New Email:',
    'need_help' => 'Need help?',
    'try_again' => 'Try Again',
    'update_email_profile_settings' => 'Update your email from your profile settings',
    'sign_in_access_account' => 'Sign in to access your account',
    'contact_support' => 'Contact Support',
    'get_help_support_team' => 'Get help from our support team',
    'profile_updated_successfully' => 'Profile updated successfully.',
    'profile_update_error' => 'Error updating profile.',

    // Profile username
    'username' => 'Username',
    'name' => 'Name',
    'url' => 'URL',
    'text' => 'Text',
    'username_required' => 'Username is required',
    'username_too_short' => 'Username must be at least 3 characters',
    'username_too_long' => 'Username cannot exceed 30 characters',
    'username_invalid_characters' => 'Username can only contain letters, numbers, dashes, underscores, and dots',
    'username_must_start_alphanumeric' => 'Username must start with a letter or number',
    'username_must_end_alphanumeric' => 'Username must end with a letter or number',
    'username_no_consecutive_special' => 'Username cannot have consecutive special characters',
    'username_reserved' => 'This username is reserved and cannot be used',
    'username_already_taken' => 'This username is already taken',
    'username_updated_successfully' => 'Username updated successfully to: {username}',
    'username_change_cooldown' => 'You can change your username again on {date}',
    'username_generation_failed' => 'Could not generate a valid username. Please contact support.',
    'names_contain_invalid_characters' => 'Names contain invalid characters. Please use only letters without accents.',
    'change_username' => 'Change Username',
    'username_change_info' => 'You can change your username once per month.',
    'current_username' => 'Current username',
    
    // Additional validation messages for admin user editing
    'first_name_required' => 'First name is required',
    'last_name_required' => 'Last name is required',
    'email_required' => 'Email is required',
    'first_name_length_error' => 'First name must be between 2 and 100 characters',
    'last_name_length_error' => 'Last name must be between 2 and 100 characters',
    'email_too_long' => 'Email must be less than 255 characters',
    'email_already_in_use' => 'This email address is already in use',
    'first_name_invalid_characters' => 'First name contains invalid characters',
    'last_name_invalid_characters' => 'Last name contains invalid characters',
    'username_length_error' => 'Username must be between 3 and 30 characters',
    'invalid_status_selected' => 'Invalid status selected',
    'invalid_admin_role_selected' => 'Invalid admin role selected',
    'user_not_found' => 'User not found',
    'new_username' => 'New username',
    'username_help' => 'Only letters, numbers, dashs, underscores and dots allowed',
    'no_changes_to_update' => 'No changes to update',
    'invalid_user' => 'Invalid user',
    'user_updated_successfully' => 'User updated successfully',
    'access_denied_short' => 'Access denied',
    'update_username' => 'Update Username',
    
    // Enhanced profile form help
    'first_name_help' => 'Your first name as you want it to appear on your profile.',
    'last_name_help' => 'Your last name as you want it to appear on your profile.',
    'title_help' => 'Your professional title or what you do (optional).',
    'bio_help' => 'A short description about yourself that will appear on your profile.',
    'html_formatting_allowed' => 'Allows <code>&lt;br&gt;</code>, <code>&lt;em&gt;</code>, and <code>&amp;nbsp;</code> for basic formatting.',
    'profile_url_help' => 'This is your unique profile URL that you can share with others.',
    
    // Language preferences
    'language_preferences' => 'Language Preferences',
    'language_preference_updated' => 'Language preference updated successfully!',
    'language_update_error' => 'Error updating language preference.',
    'invalid_language_selected' => 'Invalid language selected.',

    // Language settings - enhanced
    'interface_language' => 'Interface Language',
    'interface_language_help' => 'Choose your preferred language for the website interface.',
    'user_profile_page_language' => 'User Profile Page Language', 
    'user_profile_page_language_help' => 'Select the language in which you have written your Headline, your Biography and your Link descriptions',
    'language_preferences_updated' => 'Language preferences updated successfully!',
    'save_language_preferences' => 'Save Language Preferences',
    'click_to_save_language_preferences' => 'Click to Save Language Preferences',
    
    // Links management
    'add_new_link' => 'Add New Link',
    'link_title' => 'Title',
    'link_url' => 'URL',
    'link_description' => 'Description (Optional)',
    'link_icon' => 'Icon (optional)',
    'link_title_placeholder' => 'e.g. My Website',
    'link_description_placeholder' => 'Brief description of this link (optional)',
    'url_placeholder' => 'https://example.com',
    'choose_icon' => 'Choose Icon',
    'click_icon_to_select' => 'Click an icon below to select',
    'search_icons' => 'Search icons',
    'all_icons' => 'All',
    'common' => 'Common',
    'social' => 'Social',
    'professional' => 'Professional', 
    'communication' => 'Communication',
    'business' => 'Business',
    'athome' => 'Home',
    'leisure' => 'Leisure',
    'icon_selection_grid' => 'Icon selection grid',
    'no_icons_found' => 'No icons found',
    'icon_selected' => '{name} icon selected',
    'icon_selection_cleared' => 'Icon selection cleared',
    'selected_icon_default' => 'Selected Icon',
    'add_link' => 'Add Link',
    'current_links' => 'Current Links',
    'no_links_yet' => 'You haven\'t added any links yet.',
    'link_added_message' => 'Link added successfully!',
    'link_deleted_message' => 'Link deleted successfully!',
    'link_add_error' => 'Error adding link.',
    'link_delete_error' => 'Error deleting link.',
    'delete_link_confirm' => 'Are you sure you want to delete "{title}"? This action cannot be undone.',
    'delete_link_action' => 'Delete link: {title}',
    'edit_link' => 'Edit Link',
    'edit_link_action' => 'Edit link: {title}',
    'update_link' => 'Update Link',
    'link_updated_successfully' => 'Link updated successfully!',
    'link_update_error' => 'Error updating link.',
    'link_not_found' => 'Link not found.',
    
    // Enhanced link form help
    'link_title_help' => 'The name that will appear on your profile for this link.',
    'link_url_help' => 'The full URL where this link should go (include https://).',
    'link_description_help' => 'Optional short description to help visitors understand what this link is about.',
    'link_icon_help' => 'Pick one from many of the Font Awesome icons to display next to your link.',
    
    // Link validation
    'valid_url_required' => 'Please enter a valid URL.',
    'invalid_url' => 'Invalid URL format',
    'please_enter_valid_url' => 'Please enter a valid URL',
    'url_too_long' => 'URL is too long (max {max} characters, current: {current})',
        
    // ===== PUBLIC PROFILE =====
    'profile_not_found' => 'Profile Not Found',
    'profile_not_found_desc' => 'The profile you\'re looking for doesn\'t exist.',
    'main_links' => 'Main Links',
    'no_links_available' => 'No links available',
    'user_no_links_message' => '{name} hasn\'t added any links yet.',
    
    // Enhanced profile content
    'profile_initials_alt' => 'Profile initials: {initials}',
    'user_links_navigation' => '{name}\'s links',
    'social_media_navigation' => '{name}\'s social media',
    'visit_social_platform' => 'Visit {name} on {platform}',
    
    // Profile actions
    'share_profile' => 'Share {name}\'s profile',
    'share_profile_button' => 'Share using your device',
    'check_out_profile' => 'Check out {name}\'s profile',
    'create_your_own_profile' => 'Create your own profile with ' . getSiteIdentityText('site_name') . '',
    'add_links' => 'Add Links',
    'add_your_first_link' => 'Add your first link',
    
    // ===== ADMIN INTERFACE =====
    
    // User management
    'status' => 'Status',
    
    // Admin roles
    
    // Language management
    'language_usage_percentage' => '{percentage}% of users',
        
    
    // Log actions
    'admin_updated_site_settings' => 'The Admin updated the site settings',
    'site_settings_updated' => 'Site settings updated successfully!',
    'system' => 'System',
    'switch_view' => 'Switch View',
    'admin_view' => 'Admin View', 
    'user_view' => 'User View',
    
    // ===== LOG VIEWER =====
    'account_activity_engish_only' => 'View your account activity',
    'activity_logs' => 'Activity Logs',
    'my_activity' => 'My Activity',
    'user_id' => 'User ID',
    
    // ===== GENERAL =====
    // Currently used in LOG MANAGEMENT SETTINGS
    'enabled' => 'Enabled',
    'disabled' => 'Disabled',
    
    // CRON Management

    // Centralized validation system messages
    'field_required' => 'A mandatory field has not been filled out',
    'field_too_long' => 'Maximum {max} characters allowed',
    'field_too_short' => 'Minimum {min} characters required',
    'field_invalid_format' => 'Invalid format',
    'security_content_blocked' => 'Content contains security risks and cannot be saved',
    'security_invalid_characters' => 'Content contains invalid characters',
    'security_too_many_special_chars' => 'Too many special characters',
    'translation' => 'Translation',
    'invalid_language_file' => 'Invalid language file',
    'translation_file_format_error' => 'Translation file format error',
    'backup_creation_failed' => 'Failed to create backup file',
    'translation_file_write_error' => 'Failed to write translation file',
    'translations_updated_successfully' => 'Translations updated successfully',
    'translation_update_error' => 'Error updating translations',
    'invalid_fallback_language' => 'Invalid fallback language selected.',
    'settings_update_error' => 'Error updating settings.',
        
    // ===== FORM VALIDATION =====
    'invalid_email_format' => 'Please enter a valid email address',
    
    // ===== NOTIFICATIONS & ALERTS =====
    'success' => 'Success',
    'action_successful' => 'Action successfully completed',
    'error' => 'Error',
    'session_expired' => 'Your session has expired. Please log in again.',
    'access_denied_admin' => 'Access denied. Admin privileges required.',
    
    // Enhanced notifications
    'form_saved_shortcut' => 'Form saved using keyboard shortcut!',
    'admin_access_indicator' => 'Admin access mode indicator',
    'switching_language' => 'Switching language...',
    
    // ===== JAVASCRIPT MESSAGES =====
    'js_confirm_delete' => 'Are you sure you want to delete this item?',
    'js_network_error' => 'Network error. Please check your connection.',
    'js_copy_success' => 'Copied to clipboard!',
    'js_copy_error' => 'Failed to copy to clipboard',
    
    // ===== SECURITY & TIPS =====
    'security_tip' => 'Security Tip',
    
    // ===== PLURALIZATION =====
    'users' => 'users',
    'link' => 'link', 
    'links' => 'links',
    'click' => 'click',
    'clicks' => 'clicks',
    
    // ===== HELP & SUPPORT =====
    'useful_info' => 'Useful information',
    'support' => 'Support',
    'contact_form' => 'Contact form',
    'faq' => 'FAQ',
    'feedback' => 'Feedback',
    'privacy_policy' => 'Privacy Policy',
    'terms_of_service' => 'Terms of Service',
    'reporting_procedure' => 'Reporting procedure',
    'legal_notice' => 'Legal notice',
    'legal' => 'Legal',
    'documents_not_translated' => 'Documents in this section are available in English only.',
    
    // ===== ERROR PAGES =====
    'error_400_title' => 'Bad Request',
    'error_400_message' => 'Your request could not be processed due to invalid data.',
    'error_401_title' => 'Unauthorized',
    'error_401_message' => 'You need to log in to access this resource.',
    'error_403_title' => 'Access Forbidden',
    'error_403_message' => 'You don\'t have permission to access this resource.',
    'error_404_title' => 'Page Not Found',
    'error_404_message' => 'The page you\'re looking for doesn\'t exist.',
    'error_500_title' => 'Server Error',
    'error_500_message' => 'Something went wrong on our end. Please try again later.',
    

    // ===== FOOTER CONTENT =====
    'preferences' => 'Preferences',
    'site_statistics' => 'Site statistics',
    'made_with_love_in' => 'Made with ❤️ in',
    'aria_made_with_love_in_lux' => 'Made with love in Luxembourg',
    'help_translate' => 'Help us translate ' . getSiteIdentityText('site_name'),
    'by_key4' => 'Design and developpment<br>by Key4 Digital Services',
    
    // ===== SECURITY SETTINGS (TURNSTILE CAPTCHA) =====
    
    // Success/Error Messages
    'turnstile_keys_cleared_success' => 'Turnstile keys cleared successfully. CAPTCHA protection is now disabled.',
    'turnstile_settings_saved_enabled' => 'Security settings saved successfully. CAPTCHA protection is now enabled.',
    'turnstile_settings_saved_disabled' => 'Security settings saved. CAPTCHA protection is disabled (no keys provided).',
    'turnstile_settings_saved_incomplete' => 'Settings saved, but CAPTCHA protection is disabled (both keys required).',
    'turnstile_settings_update_error' => 'Failed to update security settings. Please try again.',
    'invalid_turnstile_theme' => 'Invalid CAPTCHA theme selected.',
    'invalid_turnstile_size' => 'Invalid CAPTCHA size selected.',
    
    // Frontend Validation Messages  
    'turnstile_validation_failed' => 'Security verification failed. Please try again.',
    'turnstile_required' => 'Please complete the security verification.',
    'turnstile_error' => 'Security verification error. Please refresh and try again.',

    // ===== DOCUMENT VIEWER =====
    'document_not_found' => 'Document Not Found',
    'requested_document_not_found' => 'The requested document could not be found.',
    'last_updated' => 'Last updated',
    'back_to_home' => 'Back to home',

    // ===== PROFILE PHOTO UPLOAD =====
    'profile_photo' => 'Profile Photo',
    'current_photo' => 'Current photo',
    'no_photo_uploaded' => 'No photo uploaded',
    'choose_photo' => 'Choose Photo',
    'photo_requirements' => 'Max 5MB. Accepted formats: JPG, PNG, WebP',
    'upload_photo' => 'Upload Photo',
    'remove_photo' => 'Remove Photo',
    'photo_preview' => 'Photo preview',
    
    // Photo upload messages
    'profile_photo_uploaded' => 'Profile photo uploaded successfully',
    'profile_photo_removed' => 'Profile photo removed successfully',
    'no_file_selected' => 'No file selected',
    'file_too_large' => 'File is too large',
    'file_too_large_5mb' => 'File is too large. Maximum size is 5MB',
    'upload_interrupted' => 'Upload was interrupted',
    'upload_server_error' => 'Server error during upload',
    'upload_unknown_error' => 'Unknown upload error',
    'invalid_file_type' => 'Invalid file type. Only JPG, PNG and WebP are allowed',
    'invalid_file_extension' => 'Invalid file extension',
    'directory_creation_failed' => 'Failed to create upload directory',
    'database_update_failed' => 'Failed to update database',
    'image_processing_failed' => 'Failed to process image',
    'no_photo_to_remove' => 'No photo to remove',
    'photo_removal_failed' => 'Failed to remove photo',
    'profile_photo_alt' => 'Profile photo of {name}',
    
    // ===== CONTACT FORM =====
    'contact_form_description' => 'Get in touch with us using the form below. We\'ll respond as soon as possible.',
    'full_name' => 'Full Name',
    'full_name_help' => 'Your first and last name',
    'full_name_real_name_required' => 'Please enter your real full name',
    'contact_email_help' => 'We\'ll use this email to respond to your message',
    'contact_reason' => 'Reason for Contact',
    'select_reason' => 'Please select a reason',
    'reason_content_report' => 'Report inappropriate content',
    'reason_translation_issue' => 'Translation error or suggestion',
    'reason_technical_issue' => 'Technical problem or bug',
    'reason_other' => 'Other inquiry',
    'contact_message_placeholder' => 'Please describe your inquiry in detail...',
    'contact_message_help' => 'Maximum 2000 characters. Be specific to help us assist you better.',
    'contact_message_too_short' => 'Please provide a more detailed message (minimum 10 characters)',
    'send_message' => 'Send Message',
    'captcha_verification_failed' => 'CAPTCHA verification failed. Please try again.',
    'email_send_failed' => 'Failed to send email. Please try again later.',
    
    // Contact confirmation emails
    'contact_confirmation_subject' => 'Confirm your message',
    'contact_confirmation_message' => 'Please confirm that you want to send your message to us by clicking the button below:',
    'confirm_contact_message' => 'Confirm Message',
    'contact_confirmation_url_fallback' => 'If the button doesn\'t work, copy and paste this link in your browser:',
    'contact_confirmation_footer' => 'If you didn\'t submit a contact form, you can safely ignore this email.',
    'confirmation_email_sent' => 'Confirmation Email Sent!',
    'contact_confirmation_instructions' => 'We\'ve sent a confirmation email to your address. Please click the link in the email to send your message.',
    'contact_message_sent_successfully' => 'Your message has been sent successfully!',
    'error_sending_message_to_admin' => 'Failed to send your message to the administrator. Please try again later or contact support.',
    
    // Admin notifications
    'contact_admin_subject' => 'Contact: {reason}',
    'new_contact_message' => 'New message from contact form',
    'contact_details' => 'Contact Details',

    // ===== SITE IDENTITY ADMIN INTERFACE =====
    
    // ===== FAQ PAGE =====
    'faq_title' => 'Frequently Asked Questions',
    'faq_subtitle' => 'Find answers to common questions about our platform',
    
    // FAQ Questions and Answers
    'faq_q1_what_is' => 'What is <em>Moien</em>?',
    'faq_a1_what_is' => '<em>Moien</em> is a personal homepage with a nice customisable url. It allows you to share a profile photo, a biography and specially links to places on the web that you love and to your social media profiles.',
    
    'faq_q2_why_created' => 'Why was <em>Moien</em> created?',
    'faq_a2_why_created' => 'I developed <em>Moien</em> for several reasons:<ul><li>To create an online service fully in Luxembourgish (amongst other languages) and thereby promote the use of the Luxembourgish language on the web.</li><li>To learn and challenge myself, by building digital accessibility for complex projects.</li><li>To allow everyone to have a personal mini-homepage that doesn\'t require visitors to create an account.</li></ul>',
    
    'faq_q3_is_free' => 'Is <em>Moien</em> free?',
    'faq_a3_is_free' => 'Yes. Current free features will remain free as long as <em>Moien</em> exists.<br>There might be additional premium features added in the future.',
    
    'faq_q4_add_features' => 'Will you add feature XYZ?',
    'faq_a4_add_features' => 'Maybe. Please use the contact form to request features.',
    
    'faq_q5_translate' => 'Will you translate <em>Moien</em> in other languages?',
    'faq_a5_translate' => 'I do plan to publish the translation files so everyone can participate translating the website. No ETA yet.',
    
    'faq_q6_userlist' => 'How can I find another user\'s page?',
    'faq_a6_userlist' => 'There is currently no user directory or searchable database. Pages can be indexed by search engines. You can share any page using the built-in sharing features or by sending the page\'s URL to your contacts.',
    
    'faq_q7_searchengine' => 'Can I prevent my page from being indexed by search engines?',
    'faq_a7_searchengine' => 'No. Only share public information on your page - things that everyone is allowed to see or read.',
    
    'faq_q8_next_steps' => 'I registered. What\'s next?',
    'faq_a8_next_steps' => '<ol><li>You have filled out your name during registration. Now add a title and a short story or biography.</li><li>Important: Select the language in which you write your profile information. This is the <strong>User Profile Page Language</strong> setting.</li><li>Finally, add your links.</li></ol>Don\'t forget to click the save button after each step <span aria-hidden="true">👌</span>',
    
    'faq_q9_homepage_address' => 'What is the address of my homepage?',
    'faq_a9_homepage_address' => 'Log in to moien.net and click View Profile in the main navigation. This leads straight to your homepage. You will see your page address in the URL bar. You can copy it or use the sharing features located under your profile.',
    
    // FAQ Call to Action
    'still_have_questions' => 'Still have questions?',
    'faq_contact_message' => 'Can\'t find the answer you\'re looking for? Get in touch with us.',
    'contact_us' => 'Contact Us',
    
    // ===== EMAIL TEMPLATES =====
    
    // use generic messages to allow reuse
    'link_expires_in_24h' => 'This link is valid for 24 hours.',
    'email_footer_text' => 'This Message was generated by the e-mail system',
    'email_sent_from' => 'sent from',
    'email_greeting' => 'Hello {{name}}',
    'email_footer_automated_message' => 'This is an automated message from',
    'email_footer_all_rights_reserved' => 'All rights reserved.',

    // ===== EMAIL REUSABLE ELEMENTS =====
    // Greetings & Closings
    'email_greeting_hello_name' => 'Hello {{name}}',
    'email_greeting_welcome_name' => 'Welcome, {{name}}!',

    // Common Instructions
    'email_button_not_working_instruction' => 'If the button above doesn\'t work, you can also copy and paste this link into your browser:',
    'email_link_expires_security' => 'This link will expire for security reasons.',

    // Security Notices
    'email_security_notice_title' => 'Security Notice:',
    'email_ignore_if_not_requested' => 'If you didn\'t request this, you can safely ignore this email.',

    // Layout Elements
    'email_automated_message_from' => 'This is an automated message from {{site:site_name}}',
    'email_copyright_year' => '© {{current_year}} {{site:site_name}}',
    'email_all_rights_reserved' => 'All rights reserved',

    // Action Buttons
    'email_button_confirm_account' => 'Confirm My Account',
    'email_button_reset_password' => 'Reset My Password',
    'email_button_confirm_email' => 'Confirm Email',

    // Time-related
    'email_expires_in_24_hours' => 'This link will expire in 24 hours for security reasons.',
    'email_expires_in_1_hour' => 'This link will expire in 1 hour for your security.',
    
    // ===== MISCELLANEOUS =====
    'luxembourg' => 'Luxembourg',

];