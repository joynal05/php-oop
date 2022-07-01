

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

    $num1 = isset($_POST['f_num']) && is_numeric($_POST['f_num']) ? $_POST['f_num'] : null;
    $num2 = isset($_POST['s_num']) && is_numeric($_POST['s_num']) ? $_POST['s_num'] : null;

    if( $num1 == null || $num2 == null ){
        echo 'please type numbers and submit';
    }else{
        echo 'Add = '. ($num1 + $num2).'<br>'  ;
        echo 'Sub = '. ($num1 - $num2).'<br>'  ;
        echo 'Multi = '. ($num1 * $num2).'<br>'  ;
        echo 'Div = '. ($num1 / $num2).'<br>'  ;
    }


    
}

