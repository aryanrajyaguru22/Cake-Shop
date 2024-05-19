if(isset($_REQUEST['sub']))
{
        $logname=$_POST['logname'];
        $logpass=$_POST['logpass'];    

        $insert=mysqli_query($conn,"insert into login (logname,logpass) values ('$logname','$logpass')");

        if($insert)
        {
            echo "insert Successfully...!!";
        }
        else
        {
            echo "not inserted record";
        }
}
?>


