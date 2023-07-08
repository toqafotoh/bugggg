<?php
require_once '../../models/bug.php';

interface BugHandler
{
    public function sendsolution(bugs $b2, $bid);

    public function asigntostaff($bid, $sid);
}


?>