@php
    $source_dir = '/public/js/'
@endphp

<?php
    $list_scripts = ['theme.js'];
    foreach ($list_scripts as $script) {
?>
    <script src="{{ asset($source_dir.$script)}}"></script>
<?php
    }
?>
