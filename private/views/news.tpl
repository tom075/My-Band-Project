









<div class="wrapper">


    {foreach from=$articles item=article}

        <div class="article">
            <img class="news_image" src="{$article[2]}" alt="test">

            <div class="content_news">
            <h2>{$article[0]}</h2>
            <p>{$article[1]}</p>
            </div>

        </div>

    {/foreach}
        </div>


    <p>
    <div class="pagina_no">
        <p>
    {if $current_page gt 1}
        <a href="index.php?page=news&pageno={$current_page - 1}">PREVIOUS</a>
    {/if}
    {if $current_page == 1}
        PREVIOUS
    {/if}

     - {$current_page} -

    {if $current_page lt $number_of_pages}
        <a href="index.php?page=news&pageno={$current_page + 1}">NEXT</a>
    {/if}
    {if $current_page == $number_of_pages}
        NEXT
    {/if}
    </p>
    </div>
</p>
