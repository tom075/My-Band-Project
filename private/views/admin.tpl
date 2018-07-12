


<a href="index.php?page=logout" onclick="">uitloggen</a>
<a href="index.php?page=upload" onclick="">uploaden</a>


<br>
<br>
    <table>
        <tr>
            <th>plaatje</th>
            <th>titiel</th>
            <th>content</th>
            <th>delete</th>

        </tr>
        {foreach from=$articles item=article_admin}

            <tr>
            <td class="admin_td"> <img class="admin_image" src="{$article_admin[2]}" alt="test"></td>
            <td class="admin_td">{$article_admin[0]}</td>
            <td class="admin_td">{$article_admin[1]}</td>
            <td class="admin_td"><a href="index.php?page=delete&id={$article_admin[2]}">DELETE</a></td>

            </tr>
        {/foreach}
    </table>



