(function ($, Drupal) {
  Drupal.behaviors.hideMyLibrary = {
    attach: function (context, settings) {
      // Hide the “Save to my media library” checkbox.
      $('.form-item-entity-field-media-in-library-value').hide();
      // Set the checkbox value to checked.
      $('input[type="checkbox"][name="entity[field_media_in_library][value]"').attr('checked', true);
    }
  }
})(jQuery, Drupal);
