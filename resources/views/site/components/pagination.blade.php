<?php
$pageCount = $model->lastPage() ?? 0;
$currentPage = $model->currentPage() ?? 1;
?>

<div class="pagination">
    <a href="{{$model->previousPageUrl()}}">&laquo;</a>
    @for($i = 1; $i <= $pageCount; $i++)
        <a href="?page={{ $i }}" class="{{$currentPage === $i ? 'active': ''}}">{{ $i }}</a>
    @endfor
    <a href="{{$model->nextPageUrl()}}">&raquo;</a>
</div>
