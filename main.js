$(function() {
    // Sidebar toggle behavior
    $('#sidebarCollapse').on('click', function() {
      $('#sidebar, #content,#overlayy').toggleClass('active');
    });
  }
  );
  $(function() {
    // Sidebar toggle behavior
    $('#overlayy').on('click', function() {
      $('#sidebar, #content,#overlayy').toggleClass('active');
    });
  }
  );
