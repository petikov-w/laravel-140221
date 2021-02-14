@include('layouts.head')

<?php $list_val = ['Политика', 'Технологии', 'История', 'Природа', 'Наука' ];
      $ssd = implode('|', $list_val);
?>
<div class="data01" data-attr="<?=$ssd; ?>"></div>
<div class="container">
    @include('layouts.other_header')
    <div class="s-header">{{$message}}</div>
    <?php $gas = 'Привет' ?>
    <div class="theme-list">
        <?php foreach ($list_val as $val) { ?>
            <div class="theme"><?php echo $val ?></div>
        <?php } ?>
    </div>

</div>
@include('layouts.foot')
