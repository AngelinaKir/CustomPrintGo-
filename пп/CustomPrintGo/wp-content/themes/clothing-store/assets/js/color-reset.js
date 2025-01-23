(function($) {
    function resetColorsToDefault() {
        // Define default values for your color settings
        const defaultColors = {
            'background_color': '#ffffff',
            'clothing_store_primary_color': '#7dc8db',
            'clothing_store_heading_color': '#3b4358',
            'clothing_store_text_color': '#777777',
            'clothing_store_primary_fade': '#e7faff',
            'clothing_store_footer_bg' :'#3A4357',
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