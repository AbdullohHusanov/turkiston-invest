<?php $pageCount = $pageCount ?? 5 ?>

<div class="pagination">
{{--        <a href="?page=previous">&laquo;</a>--}}
    @for($i = 1; $i <= $pageCount; $i++)
        @if($pageCount != 1)
            <a href="?page={{ $i }}" class="">{{ $i }}</a>
        @endif
    @endfor
{{--        <a href="?page=next">&raquo;</a>--}}
</div>
