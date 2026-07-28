<?php

namespace FBCallNow\Admin;

/**
 * User Guide admin page
 * 
 * @package FBCallNow\Admin
 * @since 3.0.0
 */
class UserGuide {
    
    /**
     * Constructor
     */
    public function __construct() {
        // Menu registration is handled in Settings.php
    }
    
    /**
     * User guide page
     */
    public function user_guide_page() {
        ?>
        <div class="wrap fbcn-settings-page">
            <!-- SaaS Header -->
            <div class="fbcn-saas-header">
                <div class="fbcn-brand">
                    <div class="fbcn-logo-icon">
                        <span class="dashicons dashicons-book"></span>
                    </div>
                    <div class="fbcn-brand-text">
                        <h1><?php _e('User Guide & Documentation', 'fb-call-now'); ?></h1>
                        <span class="fbcn-byline"><?php _e('Master your call button settings', 'fb-call-now'); ?></span>
                    </div>
                </div>
                <div class="fbcn-meta">
                    <a href="<?php echo admin_url('admin.php?page=fbcn_basic_settings'); ?>" class="button button-primary">
                        <?php _e('← Back to Settings', 'fb-call-now'); ?>
                    </a>
                </div>
            </div>

            <div class="fbcn-doc-container">
                <!-- Sidebar Navigation -->
                <div class="fbcn-doc-sidebar">
                    <ul class="fbcn-doc-nav">
                        <li><a href="#doc-basic" class="active"><span class="dashicons dashicons-admin-generic"></span> <?php _e('Basic Settings', 'fb-call-now'); ?></a></li>
                        <li><a href="#doc-pro"><span class="dashicons dashicons-star-filled"></span> <?php _e('Pro Settings', 'fb-call-now'); ?></a></li>
                        <li><a href="#doc-install-pro"><span class="dashicons dashicons-download"></span> <?php _e('Install Pro Version', 'fb-call-now'); ?></a></li>
                        <li><a href="#doc-tech"><span class="dashicons dashicons-hammer"></span> <?php _e('Technical Info', 'fb-call-now'); ?></a></li>
                        <li><a href="#doc-practices"><span class="dashicons dashicons-thumbs-up"></span> <?php _e('Best Practices', 'fb-call-now'); ?></a></li>
                    </ul>
                </div>

                <!-- Main Content Area -->
                <div class="fbcn-doc-content">
                    <!-- Basic Settings -->
                    <section id="doc-basic" class="fbcn-doc-section active">
                        <h2><?php _e('Basic Settings', 'fb-call-now'); ?></h2>
                        <p class="fbcn-doc-intro"><?php _e('The Basic Settings control the core functionality and appearance of your floating call button.', 'fb-call-now'); ?></p>
                        
                        <div class="fbcn-doc-item">
                            <h3><?php _e('Enable Button', 'fb-call-now'); ?></h3>
                            <p><?php _e('Master on/off switch for the entire plugin. When disabled, the call button will not appear on your website.', 'fb-call-now'); ?></p>
                        </div>
                        
                        <div class="fbcn-doc-item">
                            <h3><?php _e('Button Text', 'fb-call-now'); ?></h3>
                            <p><?php _e('The text displayed on the floating button. Default is "Call Now". Font size is automatically adjusted: 20px on desktop/tablet, 17px on mobile devices.', 'fb-call-now'); ?></p>
                        </div>
                        
                        <div class="fbcn-doc-item">
                            <h3><?php _e('Telephone Number', 'fb-call-now'); ?></h3>
                            <p><?php _e('The phone number that will be dialed when visitors click the button. Must be in +1-XXX-XXX-XXXX format. The default example is +1-234-567-8910.', 'fb-call-now'); ?></p>
                        </div>
                        
                        <div class="fbcn-doc-item">
                            <h3><?php _e('Button & Text Color', 'fb-call-now'); ?></h3>
                            <p><?php _e('Customize the background and text colors to match your brand. Defaults are WordPress blue (#007cba) and white (#ffffff).', 'fb-call-now'); ?></p>
                        </div>
                        
                        <div class="fbcn-doc-item">
                            <h3><?php _e('Positioning', 'fb-call-now'); ?></h3>
                            <p><?php _e('Choose Left/Right horizontal alignment and a Vertical Position (1-10) to control height tailored to your layout.', 'fb-call-now'); ?></p>
                        </div>
                        
                        <div class="fbcn-doc-item">
                            <h3><?php _e('Delete Data on Uninstall', 'fb-call-now'); ?></h3>
                            <p><?php _e('When checked, all plugin settings will be permanently removed when you uninstall the plugin. Default is unchecked to preserve your settings.', 'fb-call-now'); ?></p>
                        </div>
                    </section>

                    <!-- Pro Settings -->
                    <section id="doc-pro" class="fbcn-doc-section">
                        <h2><?php _e('Pro Settings', 'fb-call-now'); ?></h2>
                        <p class="fbcn-doc-intro"><?php _e('Pro Settings provide advanced visibility controls to show the call button only when appropriate for your business.', 'fb-call-now'); ?></p>
                        
                        <div class="fbcn-doc-item">
                            <h3><?php _e('Day-of-Week Visibility', 'fb-call-now'); ?></h3>
                            <p><?php _e('Select which days of the week the button should appear. By default, all days are selected. Uncheck days when your business is closed.', 'fb-call-now'); ?></p>
                        </div>
                        
                        <div class="fbcn-doc-item">
                            <h3><?php _e('Time Window', 'fb-call-now'); ?></h3>
                            <p><?php _e('Set specific hours when the button should be visible. Start/End Time use 24-hour format. Default is 00:00 to 23:00 (all day).', 'fb-call-now'); ?></p>
                        </div>
                        
                        <div class="fbcn-doc-item">
                            <h3><?php _e('Wrap to Next Day', 'fb-call-now'); ?></h3>
                            <p><?php _e('Enable this option if your business hours extend past midnight. (e.g., Open until 02:00 AM next day).', 'fb-call-now'); ?></p>
                        </div>
                        
                        <div class="fbcn-doc-item">
                            <h3><?php _e('Device Visibility', 'fb-call-now'); ?></h3>
                            <p><?php _e('Choose which device types should display the button based on screen width:', 'fb-call-now'); ?></p>
                            <ul class="fbcn-doc-bullet-list">
                                <li><strong><?php _e('Desktop:', 'fb-call-now'); ?></strong> <?php _e('Screens 992px+', 'fb-call-now'); ?></li>
                                <li><strong><?php _e('Tablet:', 'fb-call-now'); ?></strong> <?php _e('Screens 768px - 991px', 'fb-call-now'); ?></li>
                                <li><strong><?php _e('Mobile:', 'fb-call-now'); ?></strong> <?php _e('Screens < 768px', 'fb-call-now'); ?></li>
                            </ul>
                        </div>
                    </section>

                    <!-- Install Pro Version -->
                    <section id="doc-install-pro" class="fbcn-doc-section">
                        <h2><?php _e('Install & Activate Pro Version', 'fb-call-now'); ?></h2>
                        <p class="fbcn-doc-intro"><?php _e('If you already have the Free version installed, upgrading to Pro is simple and seamless.', 'fb-call-now'); ?></p>
                        
                        <div class="fbcn-step-guide">
                            <div class="fbcn-step">
                                <div class="fbcn-step-number">1</div>
                                <div class="fbcn-step-content">
                                    <h3><?php _e('Download the Pro ZIP', 'fb-call-now'); ?></h3>
                                    <p><?php _e('After completing your purchase, download the FB Call Now Pro zip file from your account dashboard or purchase receipt email.', 'fb-call-now'); ?></p>
                                </div>
                            </div>
                            <div class="fbcn-step">
                                <div class="fbcn-step-number">2</div>
                                <div class="fbcn-step-content">
                                    <h3><?php _e('Install the Plugin', 'fb-call-now'); ?></h3>
                                    <p><?php _e('In your WordPress admin, go to <strong>Plugins &gt; Add New &gt; Upload Plugin</strong>. Choose the zip file you downloaded and click Install Now.', 'fb-call-now'); ?></p>
                                </div>
                            </div>
                            <div class="fbcn-step">
                                <div class="fbcn-step-number">3</div>
                                <div class="fbcn-step-content">
                                    <h3><?php _e('Activate', 'fb-call-now'); ?></h3>
                                    <p><?php _e('Click <strong>Activate Plugin</strong>. You do not need to uninstall the free version first; the Pro version will take over seamlessly and retain your settings.', 'fb-call-now'); ?></p>
                                </div>
                            </div>
                            <div class="fbcn-step">
                                <div class="fbcn-step-number">4</div>
                                <div class="fbcn-step-content">
                                    <h3><?php _e('Enter License Key', 'fb-call-now'); ?></h3>
                                    <p><?php _e('Go to the <strong>FB Call Now &gt; Pro Settings</strong> page and enter the license key you purchased to unlock all premium features.', 'fb-call-now'); ?></p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Technical Information -->
                    <section id="doc-tech" class="fbcn-doc-section">
                        <h2><?php _e('Technical Information', 'fb-call-now'); ?></h2>
                        
                        <div class="fbcn-doc-item">
                            <h3><?php _e('Button Markup', 'fb-call-now'); ?></h3>
                            <p><?php _e('Generates a semantic HTML link with ARIA labels: &lt;a href="tel:+1..." role="button" aria-label="Call Now"&gt;', 'fb-call-now'); ?></p>
                        </div>
                        
                        <div class="fbcn-doc-item">
                            <h3><?php _e('Positioning', 'fb-call-now'); ?></h3>
                            <p><?php _e('Uses CSS fixed positioning. Vertical position is calculated as: (position-1)/9 × 100% from top.', 'fb-call-now'); ?></p>
                        </div>
                        
                        <div class="fbcn-doc-item">
                            <h3><?php _e('Timezone Handling', 'fb-call-now'); ?></h3>
                            <p><?php _e('All time-based visibility rules respect your WordPress site\'s configured timezone (Settings > General).', 'fb-call-now'); ?></p>
                        </div>

                        <h3 class="fbcn-doc-subtitle"><?php _e('Troubleshooting', 'fb-call-now'); ?></h3>
                        <div class="fbcn-doc-item">
                            <h4><?php _e('Button Not Appearing', 'fb-call-now'); ?></h4>
                            <p><?php _e('Check "Enable Button" is ON. Check Pro Settings for Day/Time/Device restrictions.', 'fb-call-now'); ?></p>
                        </div>
                        
                        <div class="fbcn-doc-item">
                            <h4><?php _e('Phone Number Issues', 'fb-call-now'); ?></h4>
                            <p><?php _e('Ensure strict format +1-XXX-XXX-XXXX. No spaces or extra chars allowed.', 'fb-call-now'); ?></p>
                        </div>
                    </section>

                    <!-- Best Practices -->
                    <section id="doc-practices" class="fbcn-doc-section">
                        <h2><?php _e('Best Practices', 'fb-call-now'); ?></h2>
                        <ul class="fbcn-doc-bullet-list large">
                            <li><?php _e('Use a local phone number for better trust and conversion.', 'fb-call-now'); ?></li>
                            <li><?php _e('Set realistic business hours to avoid missing calls.', 'fb-call-now'); ?></li>
                            <li><?php _e('Contrast is key: Choose button colors that stand out against your background.', 'fb-call-now'); ?></li>
                            <li><?php _e('Test on actual mobile devices to ensure clickability.', 'fb-call-now'); ?></li>
                            <li><?php _e('Consider hiding on Desktop if your traffic is primarily Mobile.', 'fb-call-now'); ?></li>
                            <li><?php _e('Keep text short: "Call Now" or "Call Us" work best.', 'fb-call-now'); ?></li>
                        </ul>
                    </section>
                </div>
            </div>

            <script>
            jQuery(document).ready(function($) {
                $('.fbcn-doc-nav a').on('click', function(e) {
                    e.preventDefault();
                    $('.fbcn-doc-nav a').removeClass('active');
                    $(this).addClass('active');
                    
                    var target = $(this).attr('href');
                    $('.fbcn-doc-section').removeClass('active');
                    $(target).addClass('active');
                });
            });
            </script>
        </div>
        <?php
    }
}