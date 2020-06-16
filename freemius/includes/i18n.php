<?php
    /**
     * @package     Freemius
     * @copyright   Copyright (c) 2015, Freemius, Inc.
     * @license     https://www.gnu.org/licenses/gpl-3.0.html GNU General Public License Version 3
     * @since       1.1.4
     *
     * @deprecated  This file is no longer in use. It's still in the project for backward compatibility.
     */

    if (! defined('ABSPATH')) {
        exit;
    }

    require_once dirname(__FILE__) . '/l10n.php';

    /**
     * All strings can now be overridden.
     *
     * For example, if we want to override:
     *      'you-are-step-away' => 'You are just one step away - %s',
     *
     * We can use the filter:
     *      fs_override_i18n( array(
     *          'opt-in-connect' => __( "Yes - I'm in!", '{your-text_domain}' ),
     *          'skip'           => __( 'Not today', '{your-text_domain}' ),
     *      ), '{plugin_slug}' );
     *
     * Or with the Freemius instance:
     *
     *      my_freemius->override_i18n( array(
     *          'opt-in-connect' => __( "Yes - I'm in!", '{your-text_domain}' ),
     *          'skip'           => __( 'Not today', '{your-text_domain}' ),
     *      ) );
     */
    global $fs_text;

    $fs_text = array(
        'account'                       => _fs_text('Account'),
        'addon'                         => _fs_text('Add-On'),
        'contact-us'                    => _fs_text('Contact Us'),
        'contact-support'               => _fs_text('Contact Support'),
        'change-ownership'              => _fs_text('Change Ownership'),
        'support'                       => _fs_text('Support'),
        'support-forum'                 => _fs_text('Support Forum'),
        'add-ons'                       => _fs_text('Add-Ons'),
        'upgrade'                       => _fs_x('Upgrade', 'verb'),
        'awesome'                       => _fs_text('Awesome'),
        'pricing'                       => _fs_x('Pricing', 'noun'),
        'price'                         => _fs_x('Price', 'noun'),
        'unlimited-updates'             => _fs_text('Unlimited Updates'),
        'downgrade'                     => _fs_x('Downgrade', 'verb'),
        'cancel-subscription'           => _fs_x('Cancel Subscription', 'verb'),
        'cancel-trial'                  => _fs_text('Cancel Trial'),
        'free-trial'                    => _fs_text('Free Trial'),
        'start-free-x'                  => _fs_text('Start my free %s'),
        'no-commitment-x'               => _fs_text('No commitment for %s - cancel anytime'),
        'after-x-pay-as-little-y'       => _fs_text('After your free %s, pay as little as %s'),
        'details'                       => _fs_text('Details'),
        'account-details'               => _fs_text('Account Details'),
        'delete'                        => _fs_x('Delete', 'verb'),
        'show'                          => _fs_x('Show', 'verb'),
        'hide'                          => _fs_x('Hide', 'verb'),
        'edit'                          => _fs_x('Edit', 'verb'),
        'update'                        => _fs_x('Update', 'verb'),
        'date'                          => _fs_text('Date'),
        'amount'                        => _fs_text('Amount'),
        'invoice'                       => _fs_text('Invoice'),
        'billing'                       => _fs_text('Billing'),
        'payments'                      => _fs_text('Payments'),
        'delete-account'                => _fs_text('Delete Account'),
        'dismiss'                       => _fs_x('Dismiss', 'as close a window'),
        'plan'                          => _fs_x('Plan', 'as product pricing plan'),
        'change-plan'                   => _fs_text('Change Plan'),
        'download-x-version'            => _fs_x('Download %s Version', 'as download professional version'),
        'download-x-version-now'        => _fs_x('Download %s version now', 'as download professional version now'),
        'download-latest'               => _fs_x('Download Latest', 'as download latest version'),
        'you-have-x-license'            => _fs_x('You have a %s license.', 'E.g. you have a professional license.'),
        'new'                           => _fs_text('New'),
        'free'                          => _fs_text('Free'),
        'trial'                         => _fs_x('Trial', 'as trial plan'),
        'start-trial'                   => _fs_x('Start Trial', 'as starting a trial plan'),
        'purchase'                      => _fs_x('Purchase', 'verb'),
        'purchase-license'              => _fs_text('Purchase License'),
        'buy'                           => _fs_x('Buy', 'verb'),
        'buy-license'                   => _fs_text('Buy License'),
        'license-single-site'           => _fs_text('Single Site License'),
        'license-unlimited'             => _fs_text('Unlimited Licenses'),
        'license-x-sites'               => _fs_text('Up to %s Sites'),
        'renew-license-now'             => _fs_text('%sRenew your license now%s to access version %s security & feature updates, and support.'),
        'ask-for-upgrade-email-address' => _fs_text("Enter the email address you've used for the upgrade below and we will resend you the license key."),
        'x-plan'                        => _fs_x('%s Plan', 'e.g. Professional Plan'),
        'you-are-step-away'             => _fs_text('You are just one step away - %s'),
        'activate-x-now'                => _fs_x(
            'Complete "%s" Activation Now',
            '%s - plugin name. As complete "Jetpack" activation now'
        ),
        'few-plugin-tweaks'             => _fs_text('We made a few tweaks to the %s, %s'),
        'optin-x-now'                   => _fs_text('Opt in to make "%s" better!'),
        'error'                         => _fs_text('Error'),
        'failed-finding-main-path'      => _fs_text('Freemius SDK couldn\'t find the plugin\'s main file. Please contact sdk@freemius.com with the current error.'),
        'learn-more'                    => _fs_text('Learn more'),

        #region Affiliation
        'affiliation'                        => _fs_text('Affiliation'),
        'affiliate'                          => _fs_text('Affiliate'),
        'affiliate-tracking'                 => _fs_text('%s tracking cookie after the first visit to maximize earnings potential.'),
        'renewals-commission'                => _fs_text('Get commission for automated subscription renewals.'),
        'affiliate-application-accepted'     => _fs_text("Your affiliate application for %s has been accepted! Log in to your affiliate area at: %s."),
        'affiliate-application-thank-you'    => _fs_text("Thank you for applying for our affiliate program, we'll review your details during the next 14 days and will get back to you with further information."),
        'affiliate-application-rejected'     => _fs_text("Thank you for applying for our affiliate program, unfortunately, we've decided at this point to reject your application. Please try again in 30 days."),
        'affiliate-account-suspended'        => _fs_text('Your affiliation account was temporarily suspended.'),
        'affiliate-account-blocked'          => _fs_text('Due to violation of our affiliation terms, we decided to temporarily block your affiliation account. If you have any questions, please contact support.'),
        'become-an-ambassador'               => _fs_text('Like the %s? Become our ambassador and earn cash ;-)'),
        'become-an-ambassador-admin-notice'  => _fs_text('Hey there, did you know that %s has an affiliate program? If you like the %s you can become our ambassador and earn some cash!'),
        'refer-new-customers'                => _fs_text('Refer new customers to our %s and earn %s commission on each successful sale you refer!'),
        'program-summary'                    => _fs_text('Program Summary'),
        'commission-on-new-license-purchase' => _fs_text('%s commission when a customer purchases a new license.'),
        'unlimited-commissions'              => _fs_text('Unlimited commissions.'),
        'minimum-payout-amount'              => _fs_text('%s minimum payout amount.'),
        'payouts-unit-and-processing'        => _fs_text('Payouts are in USD and processed monthly via PayPal.'),
        'commission-payment'                 => _fs_text('As we reserve 30 days for potential refunds, we only pay commissions that are older than 30 days.'),
        'become-an-affiliate'                => _fs_text('Become an affiliate'),
        'apply-to-become-an-affiliate'       => _fs_text('Apply to become an affiliate'),
        'full-name'                          => _fs_text('Full name'),
        'paypal-account-email-address'       => _fs_text('PayPal account email address'),
        'promotion-methods'                  => _fs_text('Promotion methods'),
        'social-media'                       => _fs_text('Social media (Facebook, Twitter, etc.)'),
        'mobile-apps'                        => _fs_text('Mobile apps'),
        'statistics-information-field-label' => _fs_text('Website, email, and social media statistics (optional)'),
        'statistics-information-field-desc'  => _fs_text('Please feel free to provide any relevant website or social media statistics, e.g. monthly unique site visits, number of email subscribers, followers, etc. (we will keep this information confidential).'),
        'promotion-method-desc-field-label'  => _fs_text('How will you promote us?'),
        'promotion-method-desc-field-desc'   => _fs_text('Please provide details on how you intend to promote %s (please be as specific as possible).'),
        'domain-field-label'                 => _fs_text('Where are you going to promote the %s?'),
        'domain-field-desc'                  => _fs_text('Enter the domain of your website or other websites from where you plan to promote the %s.'),
        'extra-domain-fields-label'          => _fs_text('Extra Domains'),
        'extra-domain-fields-desc'           => _fs_text('Extra domains where you will be marketing the product from.'),
        'add-another-domain'                 => _fs_text('Add another domain'),
        'remove'                             => _fs_x('Remove', 'Remove domain'),
        'email-address-is-required'          => _fs_text('Email address is required.'),
        'domain-is-required'                 => _fs_text('Domain is required.'),
        'invalid-domain'                     => _fs_text('Invalid domain'),
        'paypal-email-address-is-required'   => _fs_text('PayPal email address is required.'),
        'processing'                         => _fs_text('Processing...'),
        'non-expiring'                       => _fs_text('Non-expiring'),
        'account-is-pending-activation'      => _fs_text('Account is pending activation.'),
        #endregion Affiliation

        #region Account
        'expiration'                   => _fs_x('Expiration', 'as expiration date'),
        'license'                      => _fs_x('License', 'as software license'),
        'not-verified'                 => _fs_text('not verified'),
        'verify-email'                 => _fs_text('Verify Email'),
        'expires-in'                   => _fs_x('Expires in %s', 'e.g. expires in 2 months'),
        'renews-in'                    => _fs_x('Auto renews in %s', 'e.g. auto renews in 2 months'),
        'no-expiration'                => _fs_text('No expiration'),
        'expired'                      => _fs_text('Expired'),
        'cancelled'                    => _fs_text('Cancelled'),
        'in-x'                         => _fs_x('In %s', 'e.g. In 2 hours'),
        'x-ago'                        => _fs_x('%s ago', 'e.g. 2 min ago'),
        /* translators: %s: Version number (e.g. 4.6 or higher) */
        'x-or-higher'                  => _fs_text('%s or higher'),
        'version'                      => _fs_x('Version', 'as plugin version'),
        'name'                         => _fs_text('Name'),
        'email'                        => _fs_text('Email'),
        'email-address'                => _fs_text('Email address'),
        'verified'                     => _fs_text('Verified'),
        'module'                       => _fs_text('Module'),
        'module-type'                  => _fs_text('Module Type'),
        'plugin'                       => _fs_text('Plugin'),
        'plugins'                      => _fs_text('Plugins'),
        'theme'                        => _fs_text('Theme'),
        'themes'                       => _fs_text('Themes'),
        'path'                         => _fs_x('Path', 'as file/folder path'),
        'title'                        => _fs_text('Title'),
        'free-version'                 => _fs_text('Free version'),
        'premium-version'              => _fs_text('Premium version'),
        'slug'                         => _fs_x('Slug', 'as WP plugin slug'),
        'id'                           => _fs_text('ID'),
        'users'                        => _fs_text('Users'),
        'module-installs'              => _fs_text('%s Installs'),
        'sites'                        => _fs_x('Sites', 'like websites'),
        'user-id'                      => _fs_text('User ID'),
        'site-id'                      => _fs_text('Site ID'),
        'public-key'                   => _fs_text('Public Key'),
        'secret-key'                   => _fs_text('Secret Key'),
        'no-secret'                    => _fs_x('No Secret', 'as secret encryption key missing'),
        'no-id'                        => _fs_text('No ID'),
        'sync-license'                 => _fs_x('Sync License', 'as synchronize license'),
        'sync'                         => _fs_x('Sync', 'as synchronize'),
        'activate-license'             => _fs_text('Activate License'),
        'activate-free-version'        => _fs_text('Activate Free Version'),
        'activate-license-message'     => _fs_text('Please enter the license key that you received in the email right after the purchase:'),
        'activating-license'           => _fs_text('Activating license...'),
        'change-license'               => _fs_text('Change License'),
        'update-license'               => _fs_text('Update License'),
        'deactivate-license'           => _fs_text('Deactivate License'),
        'activate'                     => _fs_text('Activate'),
        'deactivate'                   => _fs_text('Deactivate'),
        'skip-deactivate'              => _fs_text('Skip & Deactivate'),
        'skip-and-x'                   => _fs_text('Skip & %s'),
        'no-deactivate'                => _fs_text('No - just deactivate'),
        'yes-do-your-thing'            => _fs_text('Yes - do your thing'),
        'active'                       => _fs_x('Active', 'active mode'),
        'is-active'                    => _fs_x('Is Active', 'is active mode?'),
        'install-now'                  => _fs_text('Install Now'),
        'install-update-now'           => _fs_text('Install Update Now'),
        'more-information-about-x'     => _fs_text('More information about %s'),
        'localhost'                    => _fs_text('Localhost'),
        'activate-x-plan'              => _fs_x('Activate %s Plan', 'as activate Professional plan'),
        'x-left'                       => _fs_x('%s left', 'as 5 licenses left'),
        'last-license'                 => _fs_text('Last license'),
        'what-is-your-x'               => _fs_text('What is your %s?'),
        'activate-this-addon'          => _fs_text('Activate this add-on'),
        'deactivate-license-confirm'   => _fs_text('Deactivating your license will block all premium features, but will enable you to activate the license on another site. Are you sure you want to proceed?'),
        'delete-account-x-confirm'     => _fs_text('Deleting the account will automatically deactivate your %s plan license so you can use it on other sites. If you want to terminate the recurring payments as well, click the "Cancel" button, and first "Downgrade" your account. Are you sure you would like to continue with the deletion?'),
        'delete-account-confirm'       => _fs_text('Deletion is not temporary. Only delete if you no longer want to use this %s anymore. Are you sure you would like to continue with the deletion?'),
        'downgrade-x-confirm'          => _fs_text('Downgrading your plan will immediately stop all future recurring payments and your %s plan license will expire in %s.'),
        'cancel-trial-confirm'         => _fs_text('Cancelling the trial will immediately block access to all premium features. Are you sure?'),
        'after-downgrade-non-blocking' => _fs_text('You can still enjoy all %s features but you will not have access to %s security & feature updates, nor support.'),
        'after-downgrade-blocking'     => _fs_text('Once your license expires you can still use the Free version but you will NOT have access to the %s features.'),
        'proceed-confirmation'         => _fs_text('Are you sure you want to proceed?'),
        #endregion Account

        'add-ons-for-x'                            => _fs_text('Add Ons for %s'),
        'add-ons-missing'                          => _fs_text('We could\'nt load the add-ons list. It\'s probably an issue on our side, please try to come back in few minutes.'),
        #region Plugin Deactivation
        'anonymous-feedback'                       => _fs_text('Anonymous feedback'),
        'quick-feedback'                           => _fs_text('Quick feedback'),
        'deactivation-share-reason'                => _fs_text('If you have a moment, please let us know why you are %s'),
        'deactivating'                             => _fs_text('deactivating'),
        'deactivation'                             => _fs_text('Deactivation'),
        'theme-switch'                             => _fs_text('Theme Switch'),
        'switching'                                => _fs_text('switching'),
        'switch'                                   => _fs_text('Switch'),
        'activate-x'                               => _fs_text('Activate %s'),
        'deactivation-modal-button-confirm'        => _fs_text('Yes - %s'),
        'deactivation-modal-button-submit'         => _fs_text('Submit & %s'),
        'cancel'                                   => _fs_text('Cancel'),
        'reason-no-longer-needed'                  => _fs_text('I no longer need the %s'),
        'reason-found-a-better-plugin'             => _fs_text('I found a better %s'),
        'reason-needed-for-a-short-period'         => _fs_text('I only needed the %s for a short period'),
        'reason-broke-my-site'                     => _fs_text('The %s broke my site'),
        'reason-suddenly-stopped-working'          => _fs_text('The %s suddenly stopped working'),
        'reason-cant-pay-anymore'                  => _fs_text("I can't pay for it anymore"),
        'reason-temporary-deactivation'            => _fs_text("It's a temporary deactivation. I'm just debugging an issue."),
        'reason-temporary-x'                       => _fs_text("It's a temporary %s. I'm just debugging an issue."),
        'reason-other'                             => _fs_x(
            'Other',
            'the text of the "other" reason for deactivating the module that is shown in the modal box.'
        ),
        'ask-for-reason-message'                   => _fs_text('Kindly tell us the reason so we can improve.'),
        'placeholder-plugin-name'                  => _fs_text("What's the %s's name?"),
        'placeholder-comfortable-price'            => _fs_text('What price would you feel comfortable paying?'),
        'reason-couldnt-make-it-work'              => _fs_text("I couldn't understand how to make it work"),
        'reason-great-but-need-specific-feature'   => _fs_text("The %s is great, but I need specific feature that you don't support"),
        'reason-not-working'                       => _fs_text('The %s is not working'),
        'reason-not-what-i-was-looking-for'        => _fs_text("It's not what I was looking for"),
        'reason-didnt-work-as-expected'            => _fs_text("The %s didn't work as expected"),
        'placeholder-feature'                      => _fs_text('What feature?'),
        'placeholder-share-what-didnt-work'        => _fs_text("Kindly share what didn't work so we can fix it for future users..."),
        'placeholder-what-youve-been-looking-for'  => _fs_text("What you've been looking for?"),
        'placeholder-what-did-you-expect'          => _fs_text("What did you expect?"),
        'reason-didnt-work'                        => _fs_text("The %s didn't work"),
        'reason-dont-like-to-share-my-information' => _fs_text("I don't like to share my information with you"),
        'dont-have-to-share-any-data'              => _fs_text("You might have missed it, but you don't have to share any data and can just %s the opt-in."),
        #endregion Plugin Deactivation

        #region Connect
        'hey-x'                                    => _fs_x('Hey %s,', 'greeting'),
        'thanks-x'                                 => _fs_x('Thanks %s!', 'a greeting. E.g. Thanks John!'),
        'connect-message'                          => _fs_text('Never miss an important update - opt in to our security and feature updates notifications, and non-sensitive diagnostic tracking with %4$s.'),
        'connect-message_on-update'                => _fs_text('Please help us improve %1$s! If you opt in, some data about your usage of %1$s will be sent to %4$s. If you skip this, that\'s okay! %1$s will still work just fine.'),
        'pending-activation-message'               => _fs_text('You should receive an activation email for %s to your mailbox at %s. Please make sure you click the activation button in that email to %s.'),
        'complete-the-install'                     => _fs_text('complete the install'),
        'start-the-trial'                          => _fs_text('start the trial'),
        'thanks-for-purchasing'                    => _fs_text('Thanks for purchasing %s! To get started, please enter your license key:'),
        'license-sync-disclaimer'                  => _fs_text('The %1$s will be periodically sending data to %2$s to check for security and feature updates, and verify the validity of your license.'),
        'what-permissions'                         => _fs_text('What permissions are being granted?'),
        'permissions-profile'                      => _fs_text('Your Profile Overview'),
        'permissions-profile_desc'                 => _fs_text('Name and email address'),
        'permissions-site'                         => _fs_text('Your Site Overview'),
        'permissions-site_desc'                    => _fs_text('Site URL, WP version, PHP info, plugins & themes'),
        'permissions-events'                       => _fs_text('Current %s Events'),
        'permissions-events_desc'                  => _fs_text('Activation, deactivation and uninstall'),
        'permissions-plugins_themes'               => _fs_text('Plugins & Themes'),
        'permissions-plugins_themes_desc'          => _fs_text('Titles, versions and state.'),
        'permissions-admin-notices'                => _fs_text('Admin Notices'),
        'permissions-newsletter'                   => _fs_text('Newsletter'),
        'permissions-newsletter_desc'              => _fs_text('Updates, announcements, marketing, no spam'),
        'privacy-policy'                           => _fs_text('Privacy Policy'),
        'tos'                                      => _fs_text('Terms of Service'),
        'activating'                               => _fs_x('Activating', 'as activating plugin'),
        'sending-email'                            => _fs_x('Sending email', 'as in the process of sending an email'),
        'opt-in-connect'                           => _fs_x('Allow & Continue', 'button label'),
        'agree-activate-license'                   => _fs_x('Agree & Activate License', 'button label'),
        'skip'                                     => _fs_x('Skip', 'verb'),
        'click-here-to-use-plugin-anonymously'     => _fs_text('Click here to use the plugin anonymously'),
        'resend-activation-email'                  => _fs_text('Re-send activation email'),
        'license-key'                              => _fs_text('License key'),
        'send-license-key'                         => _fs_text('Send License Key'),
        'sending-license-key'                      => _fs_text('Sending license key'),
        'have-license-key'                         => _fs_text('Have a license key?'),
        'dont-have-license-key'                    => _fs_text('Don\'t have a license key?'),
        'cant-find-license-key'                    => _fs_text("Can't find your license key?"),
        'email-not-found'                          => _fs_text("We couldn't find your email address in the system, are you sure it's the right address?"),
        'no-active-licenses'                       => _fs_text("We can't see any active licenses associated with that email address, are you sure it's the right address?"),
        'opt-in'                                   => _fs_text('Opt In'),
        'opt-out'                                  => _fs_text('Opt Out'),
        'opt-out-cancel'                           => _fs_text('On second thought - I want to continue helping'),
        'opting-out'                               => _fs_text('Opting out...'),
        'opting-in'                                => _fs_text('Opting in...'),
        'opt-out-message-appreciation'             => _fs_text('We appreciate your help in making the %s better by letting us track some usage data.'),
        'opt-out-message-usage-tracking'           => _fs_text("Usage tracking is done in the name of making %s better. Making a better user experience, prioritizing new features, and more good things. We'd really appreciate if you'll reconsider letting us continue with the tracking."),
        'opt-out-message-clicking-opt-out'         => _fs_text('By clicking "Opt Out", we will no longer be sending any data from %s to %s.'),
        'apply-on-all-sites-in-the-network'        => _fs_text('Apply on all sites in the network.'),
        'delegate-to-site-admins'                  => _fs_text('Delegate to Site Admins'),
        'delegate-to-site-admins-and-continue'     => _fs_text('Delegate to Site Admins & Continue'),
        'continue'                                 => _fs_text('Continue'),
        'allow'                                    => _fs_text('allow'),
        'delegate'                                 => _fs_text('delegate'),
        #endregion Connect

        #region Screenshots
        'screenshots'                              => _fs_text('Screenshots'),
        'view-full-size-x'                         => _fs_text('Click to view full-size screenshot %d'),
        #endregion Screenshots

        #region Debug
        'freemius-debug'                           => _fs_text('Freemius Debug'),
        'on'                                       => _fs_x('On', 'as turned on'),
        'off'                                      => _fs_x('Off', 'as turned off'),
        'debugging'                                => _fs_x('Debugging', 'as code debugging'),
        'freemius-state'                           => _fs_text('Freemius State'),
        'connected'                                => _fs_x('Connected', 'as connection was successful'),
        'blocked'                                  => _fs_x('Blocked', 'as connection blocked'),
        'api'                                      => _fs_x('API', 'as application program interface'),
        'sdk'                                      => _fs_x('SDK', 'as software development kit versions'),
        'sdk-versions'                             => _fs_x('SDK Versions', 'as software development kit versions'),
        'plugin-path'                              => _fs_x('Plugin Path', 'as plugin folder path'),
        'sdk-path'                                 => _fs_x('SDK Path', 'as sdk path'),
        'addons-of-x'                              => _fs_text('Add Ons of Plugin %s'),
        'delete-all-confirm'                       => _fs_text('Are you sure you want to delete all Freemius data?'),
        'actions'                                  => _fs_text('Actions'),
        'delete-all-accounts'                      => _fs_text('Delete All Accounts'),
        'start-fresh'                              => _fs_text('Start Fresh'),
        'clear-api-cache'                          => _fs_text('Clear API Cache'),
        'sync-data-from-server'                    => _fs_text('Sync Data From Server'),
        'scheduled-crons'                          => _fs_text('Scheduled Crons'),
        'cron-type'                                => _fs_text('Cron Type'),
        'plugins-themes-sync'                      => _fs_text('Plugins & Themes Sync'),
        'module-licenses'                          => _fs_text('%s Licenses'),
        'debug-log'                                => _fs_text('Debug Log'),
        'all'                                      => _fs_text('All'),
        'file'                                     => _fs_text('File'),
        'function'                                 => _fs_text('Function'),
        'process-id'                               => _fs_text('Process ID'),
        'logger'                                   => _fs_text('Logger'),
        'message'                                  => _fs_text('Message'),
        'download'                                 => _fs_text('Download'),
        'filter'                                   => _fs_text('Filter'),
        'type'                                     => _fs_text('Type'),
        'all-types'                                => _fs_text('All Types'),
        'all-requests'                             => _fs_text('All Requests'),
        #endregion Debug

        #region Expressions
        'congrats'                                 => _fs_x('Congrats', 'as congratulations'),
        'oops'                                     => _fs_x('Oops', 'exclamation'),
        'yee-haw'                                  => _fs_x('Yee-haw', 'interjection expressing joy or exuberance'),
        'woot'                                     => _fs_x(
            'W00t',
            '(especially in electronic communication) used to express elation, enthusiasm, or triumph.'
        ),
        'right-on'                                 => _fs_x('Right on', 'a positive response'),
        'hmm'                                      => _fs_x(
            'Hmm',
            'something somebody says when they are thinking about what you have just said. '
        ),
        'ok'                                       => _fs_text('O.K'),
        'hey'                                      => _fs_x('Hey', 'exclamation'),
        'heads-up'                                 => _fs_x(
            'Heads up',
            'advance notice of something that will need attention.'
        ),
        #endregion Expressions

        #region Admin Notices
        'you-have-latest'                          => _fs_text('Seems like you got the latest release.'),
        'you-are-good'                             => _fs_text('You are all good!'),
        'user-exist-message'                       => _fs_text('Sorry, we could not complete the email update. Another user with the same email is already registered.'),
        'user-exist-message_ownership'             => _fs_text('If you would like to give up the ownership of the %s\'s account to %s click the Change Ownership button.'),
        'email-updated-message'                    => _fs_text('Your email was successfully updated. You should receive an email with confirmation instructions in few moments.'),
        'name-updated-message'                     => _fs_text('Your name was successfully updated.'),
        'x-updated'                                => _fs_text('You have successfully updated your %s.'),
        'name-update-failed-message'               => _fs_text('Please provide your full name.'),
        'verification-email-sent-message'          => _fs_text('Verification mail was just sent to %s. If you can\'t find it after 5 min, please check your spam box.'),
        'addons-info-external-message'             => _fs_text('Just letting you know that the add-ons information of %s is being pulled from an external server.'),
        'no-cc-required'                           => _fs_text('No credit card required'),
        'premium-activated-message'                => _fs_text('Premium %s version was successfully activated.'),
        'successful-version-upgrade-message'       => _fs_text('The upgrade of %s was successfully completed.'),
        'activation-with-plan-x-message'           => _fs_text('Your account was successfully activated with the %s plan.'),
        'download-latest-x-version-now'            => _fs_text('Download the latest %s version now'),
        'follow-steps-to-complete-upgrade'         => _fs_text('Please follow these steps to complete the upgrade'),
        'download-latest-x-version'                => _fs_text('Download the latest %s version'),
        'download-latest-version'                  => _fs_text('Download the latest version'),
        'deactivate-free-version'                  => _fs_text('Deactivate the free version'),
        'upload-and-activate'                      => _fs_text('Upload and activate the downloaded version'),
        'howto-upload-activate'                    => _fs_text('How to upload and activate?'),
        'addon-successfully-purchased-message'     => _fs_x(
            '%s Add-on was successfully purchased.',
            '%s - product name, e.g. Facebook add-on was successfully...'
        ),
        'addon-successfully-upgraded-message'      => _fs_text('Your %s Add-on plan was successfully upgraded.'),
        'email-verified-message'                   => _fs_text('Your email has been successfully verified - you are AWESOME!'),
        'plan-upgraded-message'                    => _fs_text('Your plan was successfully upgraded.'),
        'plan-changed-to-x-message'                => _fs_text('Your plan was successfully changed to %s.'),
        'license-expired-blocking-message'         => _fs_text('Your license has expired. You can still continue using the free %s forever.'),
        'license-cancelled'                        => _fs_text('Your license has been cancelled. If you think it\'s a mistake, please contact support.'),
        'trial-started-message'                    => _fs_text('Your trial has been successfully started.'),
        'license-activated-message'                => _fs_text('Your license was successfully activated.'),
        'no-active-license-message'                => _fs_text('It looks like your site currently doesn\'t have an active license.'),
        'license-deactivation-message'             => _fs_text('Your license was successfully deactivated, you are back to the %s plan.'),
        'license-deactivation-failed-message'      => _fs_text('It looks like the license deactivation failed.'),
        'license-activation-failed-message'        => _fs_text('It looks like the license could not be activated.'),
        'server-error-message'                     => _fs_text('Error received from the server:'),
        'trial-expired-message'                    => _fs_text('Your trial has expired. You can still continue using all our free features.'),
        'plan-x-downgraded-message'                => _fs_text('Your plan was successfully downgraded. Your %s plan license will expire in %s.'),
        'plan-downgraded-failure-message'          => _fs_text('Seems like we are having some temporary issue with your plan downgrade. Please try again in few minutes.'),
        'trial-cancel-no-trial-message'            => _fs_text('It looks like you are not in trial mode anymore so there\'s nothing to cancel :)'),
        'trial-cancel-message'                     => _fs_text('Your %s free trial was successfully cancelled.'),
        'version-x-released'                       => _fs_x('Version %s was released.', '%s - numeric version number'),
        'please-download-x'                        => _fs_text('Please download %s.'),
        'latest-x-version'                         => _fs_x(
            'the latest %s version here',
            '%s - plan name, as the latest professional version here'
        ),
        'trial-x-promotion-message'                => _fs_text('How do you like %s so far? Test all our %s premium features with a %d-day free trial.'),
        'start-free-trial'                         => _fs_x('Start free trial', 'call to action'),
        'starting-trial'                           => _fs_text('Starting trial'),
        'please-wait'                              => _fs_text('Please wait'),
        'trial-cancel-failure-message'             => _fs_text('Seems like we are having some temporary issue with your trial cancellation. Please try again in few minutes.'),
        'trial-utilized'                           => _fs_text('You already utilized a trial before.'),
        'in-trial-mode'                            => _fs_text('You are already running the %s in a trial mode.'),
        'trial-plan-x-not-exist'                   => _fs_text('Plan %s do not exist, therefore, can\'t start a trial.'),
        'plan-x-no-trial'                          => _fs_text('Plan %s does not support a trial period.'),
        'no-trials'                                => _fs_text('None of the %s\'s plans supports a trial period.'),
        'unexpected-api-error'                     => _fs_text('Unexpected API error. Please contact the %s\'s author with the following error.'),
        'no-commitment-for-x-days'                 => _fs_text('No commitment for %s days - cancel anytime!'),
        'license-expired-non-blocking-message'     => _fs_text('Your license has expired. You can still continue using all the %s features, but you\'ll need to renew your license to continue getting updates and support.'),
        'could-not-activate-x'                     => _fs_text('Couldn\'t activate %s.'),
        'contact-us-with-error-message'            => _fs_text('Please contact us with the following message:'),
        'plan-did-not-change-message'              => _fs_text('It looks like you are still on the %s plan. If you did upgrade or change your plan, it\'s probably an issue on our side - sorry.'),
        'contact-us-here'                          => _fs_text('Please contact us here'),
        'plan-did-not-change-email-message'        => _fs_text('I have upgraded my account but when I try to Sync the License, the plan remains %s.'),
        #endregion Admin Notices
        #region Connectivity Issues
        'connectivity-test-fails-message'          => _fs_text('From unknown reason, the API connectivity test failed.'),
        'connectivity-test-maybe-temporary'        => _fs_text('It\'s probably a temporary issue on our end. Just to be sure, with your permission, would it be o.k to run another connectivity test?'),
        'curl-missing-message'                     => _fs_text('We use PHP cURL library for the API calls, which is a very common library and usually installed and activated out of the box. Unfortunately, cURL is not activated (or disabled) on your server.'),
        'curl-disabled-methods'                    => _fs_text('Disabled method(s):'),
        'cloudflare-blocks-connection-message'     => _fs_text('From unknown reason, CloudFlare, the firewall we use, blocks the connection.'),
        'x-requires-access-to-api'                 => _fs_x(
            '%s requires an access to our API.',
            'as pluginX requires an access to our API'
        ),
        'squid-blocks-connection-message'          => _fs_text('It looks like your server is using Squid ACL (access control lists), which blocks the connection.'),
        'squid-no-clue-title'                      => _fs_text('I don\'t know what is Squid or ACL, help me!'),
        'squid-no-clue-desc'                       => _fs_text('We\'ll make sure to contact your hosting company and resolve the issue. You will get a follow-up email to %s once we have an update.'),
        'sysadmin-title'                           => _fs_text('I\'m a system administrator'),
        'squid-sysadmin-desc'                      => _fs_text('Great, please whitelist the following domains: %s. Once you are done, deactivate the %s and activate it again.'),
        'curl-missing-no-clue-title'               => _fs_text('I don\'t know what is cURL or how to install it, help me!'),
        'curl-missing-no-clue-desc'                => _fs_text('We\'ll make sure to contact your hosting company and resolve the issue. You will get a follow-up email to %s once we have an update.'),
        'curl-missing-sysadmin-desc'               => _fs_text('Great, please install cURL and enable it in your php.ini file. In addition, search for the \'disable_functions\' directive in your php.ini file and remove any disabled methods starting with \'curl_\'. To make sure it was successfully activated, use \'phpinfo()\'. Once activated, deactivate the %s and reactivate it back again.'),
        'happy-to-resolve-issue-asap'              => _fs_text('We are sure it\'s an issue on our side and more than happy to resolve it for you ASAP if you give us a chance.'),
        'contact-support-before-deactivation'      => _fs_text('Sorry for the inconvenience and we are here to help if you give us a chance.'),
        'fix-issue-title'                          => _fs_text('Yes - I\'m giving you a chance to fix it'),
        'fix-issue-desc'                           => _fs_text('We will do our best to whitelist your server and resolve this issue ASAP. You will get a follow-up email to %s once we have an update.'),
        'install-previous-title'                   => _fs_text('Let\'s try your previous version'),
        'install-previous-desc'                    => _fs_text('Uninstall this version and install the previous one.'),
        'deactivate-plugin-title'                  => _fs_text('That\'s exhausting, please deactivate'),
        'deactivate-plugin-desc'                   => _fs_text('We feel your frustration and sincerely apologize for the inconvenience. Hope to see you again in the future.'),
        'fix-request-sent-message'                 => _fs_text('Thank for giving us the chance to fix it! A message was just sent to our technical staff. We will get back to you as soon as we have an update to %s. Appreciate your patience.'),
        'server-blocking-access'                   => _fs_x(
            'Your server is blocking the access to Freemius\' API, which is crucial for %1$s synchronization. Please contact your host to whitelist %2$s',
            '%1$s - plugin title, %2$s - API domain'
        ),
        'wrong-authentication-param-message'       => _fs_text('It seems like one of the authentication parameters is wrong. Update your Public Key, Secret Key & User ID, and try again.'),
        #endregion Connectivity Issues
        #region Change Owner
        'change-owner-request-sent-x'              => _fs_text('Please check your mailbox, you should receive an email via %s to confirm the ownership change. From security reasons, you must confirm the change within the next 15 min. If you cannot find the email, please check your spam folder.'),
        'change-owner-request_owner-confirmed'     => _fs_text('Thanks for confirming the ownership change. An email was just sent to %s for final approval.'),
        'change-owner-request_candidate-confirmed' => _fs_text('%s is the new owner of the account.'),
        #endregion Change Owner
        'addon-x-cannot-run-without-y'             => _fs_x(
            '%s cannot run without %s.',
            'addonX cannot run without pluginY'
        ),
        'addon-x-cannot-run-without-parent'        => _fs_x('%s cannot run without the plugin.', 'addonX cannot run...'),
        'plugin-x-activation-message'              => _fs_x(
            '%s activation was successfully completed.',
            'pluginX activation was successfully...'
        ),
        'features-and-pricing'                     => _fs_x('Features & Pricing', 'Plugin installer section title'),
        'free-addon-not-deployed'                  => _fs_text('Add-on must be deployed to WordPress.org or Freemius.'),
        'paid-addon-not-deployed'                  => _fs_text('Paid add-on must be deployed to Freemius.'),
        #--------------------------------------------------------------------------------
        #region Add-On Licensing
        #--------------------------------------------------------------------------------
        'addon-no-license-message'                 => _fs_text('%s is a premium only add-on. You have to purchase a license first before activating the plugin.'),
        'addon-trial-cancelled-message'            => _fs_text('%s free trial was successfully cancelled. Since the add-on is premium only it was automatically deactivated. If you like to use it in the future, you\'ll have to purchase a license.'),
        #endregion
        #--------------------------------------------------------------------------------
        #region Billing Cycles
        #--------------------------------------------------------------------------------
        'monthly'                                  => _fs_x('Monthly', 'as every month'),
        'mo'                                       => _fs_x('mo', 'as monthly period'),
        'annual'                                   => _fs_x('Annual', 'as once a year'),
        'annually'                                 => _fs_x('Annually', 'as once a year'),
        'once'                                     => _fs_x('Once', 'as once a year'),
        'year'                                     => _fs_x('year', 'as annual period'),
        'lifetime'                                 => _fs_text('Lifetime'),
        'best'                                     => _fs_x('Best', 'e.g. the best product'),
        'billed-x'                                 => _fs_x('Billed %s', 'e.g. billed monthly'),
        'save-x'                                   => _fs_x('Save %s', 'as a discount of $5 or 10%'),
        #endregion Billing Cycles
        'view-details'                             => _fs_text('View details'),
        #--------------------------------------------------------------------------------
        #region Trial
        #--------------------------------------------------------------------------------
        'approve-start-trial'                      => _fs_x('Approve & Start Trial', 'button label'),
        /* translators: %1$s: Number of trial days; %2$s: Plan name; */
        'start-trial-prompt-header'                => _fs_text('You are 1-click away from starting your %1$s-day free trial of the %2$s plan.'),
        /* translators: %s: Link to freemius.com */
        'start-trial-prompt-message'               => _fs_text('For compliance with the WordPress.org guidelines, before we start the trial we ask that you opt in with your user and non-sensitive site information, allowing the %s to periodically send data to %s to check for version updates and to validate your trial.'),

        #endregion
        #--------------------------------------------------------------------------------
        #region Billing Details
        #--------------------------------------------------------------------------------
        'business-name'                            => _fs_text('Business name'),
        'tax-vat-id'                               => _fs_text('Tax / VAT ID'),
        'address-line-n'                           => _fs_text('Address Line %d'),
        'country'                                  => _fs_text('Country'),
        'select-country'                           => _fs_text('Select Country'),
        'city'                                     => _fs_text('City'),
        'town'                                     => _fs_text('Town'),
        'state'                                    => _fs_text('State'),
        'province'                                 => _fs_text('Province'),
        'zip-postal-code'                          => _fs_text('ZIP / Postal Code'),
        #endregion
        #--------------------------------------------------------------------------------
        #region Module Installation
        #--------------------------------------------------------------------------------
        'installing-plugin-x'                        => _fs_text('Installing plugin: %s'),
        'auto-installation'                          => _fs_text('Automatic Installation'),
        /* translators: %s: Number of seconds */
        'x-sec'                                      => _fs_text('%s sec'),
        'installing-in-n'                            => _fs_text('An automated download and installation of %s (paid version) from %s will start in %s. If you would like to do it manually - click the cancellation button now.'),
        'installing-module-x'                        => _fs_text('The installation process has started and may take a few minutes to complete. Please wait until it is done - do not refresh this page.'),
        'cancel-installation'                        => _fs_text('Cancel Installation'),
        'module-package-rename-failure'              => _fs_text('The remote plugin package does not contain a folder with the desired slug and renaming did not work.'),
        'auto-install-error-invalid-id'              => _fs_text('Invalid module ID.'),
        'auto-install-error-not-opted-in'            => _fs_text('Auto installation only works for opted-in users.'),
        'auto-install-error-premium-activated'       => _fs_text('Premium version already active.'),
        'auto-install-error-premium-addon-activated' => _fs_text('Premium add-on version already installed.'),
        'auto-install-error-invalid-license'         => _fs_text('You do not have a valid license to access the premium version.'),
        'auto-install-error-serviceware'             => _fs_text('Plugin is a "Serviceware" which means it does not have a premium code version.'),
        #endregion

        /* translators: %s: Page name */
        'secure-x-page-header' => _fs_text('Secure HTTPS %s page, running from an external domain'),
        'pci-compliant'        => _fs_text('PCI compliant'),
        'view-paid-features'   => _fs_text('View paid features'),
    );

    /**
     * Localization of the strings in the plugin/theme info dialog box.
     *
     * $fs_module_info_text should ONLY include strings that are not located in $fs_text.
     *
     * @author Vova Feldman (@svovaf)
     * @since  1.2.2
     */
    global $fs_module_info_text;

    $fs_module_info_text = array(
        'description'                 => _fs_x('Description', 'Plugin installer section title'),
        'installation'                => _fs_x('Installation', 'Plugin installer section title'),
        'faq'                         => _fs_x('FAQ', 'Plugin installer section title'),
        'changelog'                   => _fs_x('Changelog', 'Plugin installer section title'),
        'reviews'                     => _fs_x('Reviews', 'Plugin installer section title'),
        'other_notes'                 => _fs_x('Other Notes', 'Plugin installer section title'),
        /* translators: %s: 1 or One */
        'x-star'                      => _fs_text('%s star'),
        /* translators: %s: Number larger than 1 */
        'x-stars'                     => _fs_text('%s stars'),
        /* translators: %s: 1 or One */
        'x-rating'                    => _fs_text('%s rating'),
        /* translators: %s: Number larger than 1 */
        'x-ratings'                   => _fs_text('%s ratings'),
        /* translators: %s: 1 or One (Number of times downloaded) */
        'x-time'                      => _fs_text('%s time'),
        /* translators: %s: Number of times downloaded */
        'x-times'                     => _fs_text('%s times'),
        /* translators: %s: # of stars (e.g. 5 stars) */
        'click-to-reviews'            => _fs_text('Click to see reviews that provided a rating of %s'),
        'last-updated:'               => _fs_text('Last Updated'),
        'requires-wordpress-version:' => _fs_text('Requires WordPress Version:'),
        'author:'                     => _fs_x('Author:', 'as the plugin author'),
        'compatible-up-to:'           => _fs_text('Compatible up to:'),
        'downloaded:'                 => _fs_text('Downloaded:'),
        'wp-org-plugin-page'          => _fs_text('WordPress.org Plugin Page'),
        'plugin-homepage'             => _fs_text('Plugin Homepage'),
        'donate-to-plugin'            => _fs_text('Donate to this plugin'),
        'average-rating'              => _fs_text('Average Rating'),
        'based-on-x'                  => _fs_text('based on %s'),
        'warning:'                    => _fs_text('Warning:'),
        'contributors'                => _fs_text('Contributors'),
        'plugin-install'              => _fs_text('Plugin Install'),
        'not-tested-warning'          => _fs_text('This plugin has not been tested with your current version of WordPress.'),
        'not-compatible-warning'      => _fs_text('This plugin has not been marked as compatible with your version of WordPress.'),
        'newer-installed'             => _fs_text('Newer Version (%s) Installed'),
        'latest-installed'            => _fs_text('Latest Version Installed'),
    );
