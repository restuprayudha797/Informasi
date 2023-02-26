<?php

class HomeModel extends CI_Model
{

    public function toDay()
    {


        $date = date('Y-m-d', time());

        return $this->db->get_where('activity', ['activityDate' => $date])->result_array();
    }
    public function Tomorrow()
    {

        // date for tomorrow
        $time = time() + 60 * 60 * 24;

        $date = date('Y-m-d', $time);   

        return $this->db->get_where('activity', ['activityDate' => $date])->result_array();
    }
}
