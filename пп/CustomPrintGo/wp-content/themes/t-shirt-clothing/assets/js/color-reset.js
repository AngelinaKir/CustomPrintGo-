(function($) {
    function resetColorsToDefault() {
        // Define default values for your color settings
        const defaultColors = {
            'background_color': '#ffffff',
            't_shirt_clothing_primary_color': '#e5523e',
            't_shirt_clothing_heading_color': '#131313',
            'clothing_store_text_color': '#777777',
            't_shirt_clothing_primary_fade': '#ffedea',
            't_shirt_clothing_footer_bg' :'#131313',
            'clothing_store_post_bg': '#ffffff',
        };

        // Iterate over each setting and set it to its default value
        for (let settingId in defaultColors) {
            wp.customize(settingId).set(defaultColors[settingId]);
        }

        // Optionally refresh the preview
        wp.customize.previewer.refresh();
    }

    // Attach reset function to global scope
    window.resetColorsToDefault = resetColorsToDefault;

    $(document).ready(function() {
        $('.color-reset-btn').val('RESET'); // This adds the 'RESET' text inside the button
    });
})(jQuery);