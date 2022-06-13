

<form action="/" method="post">
    <table>
        <tr>
            <th>First Num</th>
            <td><input type="text" name="f_num"></td>
        </tr>
        <tr>
            <th>Second Num</th>
            <td><input type="text" name="s_num"></td>
        </tr>
        <tr>
            <td><button name="cal" >Submit</button></td>
        </tr>
    </table>
</form>

<?php 
if(isset($_POST['cal'])){
    echo 'yes';
}else{
    echo 'no';
}


