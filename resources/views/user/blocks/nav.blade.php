<div id="nav">
    <div class="wrap_content">
        <ul>
            <li><a href="{!! url('/')!!}" class="root" style="padding-left:0; border:none;">Trang chủ</a> </li>
            <?php
            $menu_level_1 =DB::table('cates')->where('parent_id',0)->get() ;
            ?>
            @foreach($menu_level_1 as $item_level_1)
            <li><a href="{!!URL('loai-san-pham',[$item_level_1->id,$item_level_1->alias])!!}" class="root">{!!$item_level_1->name!!}</a>
                <div class="sub_nav">
                    <?php
                    $menu_level_2 =DB::table('cates')->where('parent_id',$item_level_1->id)->get() ;
                    ?>
                    @foreach($menu_level_2 as $item_level_2)
                    <a href="{!!URL('loai-san-pham',[$item_level_2->id,$item_level_2->alias])!!}">{!!$item_level_2->name!!}</a>
                    @endforeach
                </div>
            </li>
            @endforeach
            <li><a href="{!! url('lien-he')!!}" class="root">Liên hệ</a> </li>
        </ul>
    </div>
</div><!--nav-->
<div class="clear"></div>