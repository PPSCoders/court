(function($) {

  $(document).ready(function() {
    dataTablesInit();
  });

  function dataTablesInit() {
    // Loop through each datatable in case there are multiple on the same page.
    $('.dataTables').each(function( index ) {
      // If data-sort-col exists, get its value, if not, default it to the first column.
      if ($(this).data('sort-col')) {
        // This returns number
        var SortColumn = $(this).data('sort-col');
      } else {
        var SortColumn = 0;
      }
      // // If data-sort-order exists, get its value, if not, default it to the desc.
      if ($(this).data('sort-order')) {
        // This retruns string
        var SortOrder = $(this).attr('data-sort-order');
      } else {
        var SortOrder = 'desc';
      }
      // Call datatables function with our sort values.
      $(this).DataTable({
        responsive: true,
        "order": [[SortColumn, SortOrder]],
        "pageLength": 10,
        "lengthMenu": [[10, 20, 50, -1], [10, 20, 50, "All"]],
        // Used the first empty column as the sort column, which is tabbable/usable
        // by 508. users can press enter to open/close tabs.
        columnDefs: [{
          className: 'dtr-control',
          orderable: false,
          targets: 0
        }],
      });
    });
  }

})(jQuery, Drupal, drupalSettings);
