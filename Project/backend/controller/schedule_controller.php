<?php
    include_once("model/schedule.php");
    class ScheduleController extends Schedule{
        public function createSchedule($day,$stime,$etime){
            $this->add($day,$stime,$etime);
        }
    }
?>