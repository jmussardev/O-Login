<div>
    
    <table class='tableProfil'>
       <tr>
            <th row=3>username</th>
            <th>âge</th>
            <th>gimmick</th>
            <th>rôle</th>
       </tr> 
       <tr>
           <td><?= $_SESSION['connectedUser']['username']?></td>
           <td><?= $_SESSION['connectedUser']['age']?></td>
           <td><?= $_SESSION['connectedUser']['gimmick']?></td>
           <td><?= $_SESSION['connectedUser']['role']?></td>
       </tr>
    </table>
</div>