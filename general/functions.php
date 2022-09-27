<?php
function path($go)
{
    echo "<script>
            location.replace('/Courses-Center/$go')
            </script>";
}
function testMessage($connect, $message)
{
    if ($connect) {
        echo "Successful $message";
    } else {
        echo "Unsuccessful $message";
    }
}
?>