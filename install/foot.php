

<script>


/*  Bootstrap ToolTip JS Code  */
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-tool="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
});
</script>
</body>
</html>