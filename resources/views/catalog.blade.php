@extends('layouts.basis')

@section('content')
    <?php
        $list_val = ['Политика', 'Технологии', 'История', 'Природа', 'Наука' ];
        $ssd = implode('|', $list_val);
    ?>
    <div class="data01" data-attr="<?=$ssd; ?>"></div>
        <div class="s-header">{{$message}}</div>
        <div class="theme-list">
            <?php foreach ($list_val as $val) { ?>
            <div class="theme"><?php echo $val ?></div>
            <?php } ?>
        </div>
@endsection
