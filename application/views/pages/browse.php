<?php
if (isset($admin)):
?>
    Create a new folder
<?php
endif;
?>

<table class="folder" width="100%">
<tbody>
<tr>

    <td width="24"></td><td align="left" width="260"><em><a href="http://laofab.org/folder/view?direction=desc&amp;order=name">name/title</a></em></td><td align="left" width="260"><em><a href="http://laofab.org/folder/view?direction=asc&amp;order=author">author(s)</a></em></td><td align="center"><em><a href="http://laofab.org/folder/view?direction=asc&amp;order=type">type</a></em></td><td align="center"><em><a href="http://laofab.org/folder/view?direction=asc&amp;order=year">pub.<br>year</a></em></td><td align="center"><em><a href="http://laofab.org/folder/view?direction=asc&amp;order=size">size</a><br>files</em></td><td align="center"><em><a href="http://laofab.org/folder/view?direction=asc&amp;order=date">modified<br>date</a></em></td></tr>
    
    <?php foreach ($folders as $folder): ?>
    
        <tr>
            <td><?php 
            echo html::image(array('src' => 'media/images/icons/folder-yellow-24x24.png'), array('alt' => 'Thumbnail', 'class' => 'noborder'));
            ?></td>
            <td><?php echo html::anchor('folders/browse/'.$folder->id, $folder->name); ?></td>

            <td align="left">-</td>
            <td>folder</td>
            <td align="center">-</td>
        
            <td align="right">432 files</td>
        
            <td align="center"><?php $folder->create_dt ?></td>
        </tr>
    <?php endforeach; ?>
    <?php foreach ($documents as $document): ?>
    
        <tr>
            <td><?php 
            echo html::image(array('src' => 'media/images/icons/pdf-24x24.png'), array('alt' => 'Thumbnail', 'class' => 'noborder'));
            ?></td>
            <td><?php echo html::anchor('document/view/'.$document->id, $document->title); ?></td>

            <td align="left">-</td>
            <td>folder</td>
            <td align="center">-</td>
        
            <td align="right">432 files</td>
        
            <td align="center"><?php $document->create_dt ?></td>
        </tr>
    <?php endforeach; ?>
</tbody>
</table>
