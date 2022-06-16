<?php
    include('ben047.php');

    $s1 = new Student('Ben',50,60,50);
    $s2 = new Student('Ben1',70,60,80);
    $s3 = new Student('Ben2',30,70,50);
    
echo "{$s1->getName()}:總成績{$s1->sum()}:平均分數{$s1->avg()}<br />";
echo "{$s2->getName()}:總成績{$s2->sum()}:平均分數{$s2->avg()}<br />";
echo "{$s3->getName()}:總成績{$s3->sum()}:平均分數{$s3->avg()}<br />";

?>