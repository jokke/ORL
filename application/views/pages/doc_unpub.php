<table class="folder" width="100%">
<tbody>
<tr>
    
    <?php foreach ($documents as $document): ?>
    
        <tr>
            <td><?php 
            echo html::anchor('documents/edit/'.$document->id, $document->title)
            ?></td>
        </tr>
    <?php endforeach; ?>
</tbody>
</table>
