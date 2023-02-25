<?php

class AdminModel extends CI_Model
{

    public function insertActivity()
    {
        $nameOfActivity = $this->input->post('nameOfActivity', true);
        $personResponsible = $this->input->post('personResponsible', true);
        $activityDate = $this->input->post('activityDate', true);
        $startTime = $this->input->post('startTime', true);
        $timesUp = $this->input->post('timesUp', true);
        $location = $this->input->post('location', true);

        $data = [

            'nameOfActivity' => $nameOfActivity,
            'personResponsible' => $personResponsible,
            'activityDate' => $activityDate,
            'startTime' => $startTime,
            'timesUp' => $timesUp,
            'location' => $location,
            'role_activity' => 0


        ];

        $this->db->insert('activity', $data);
        redirect('admin/activity');
    }
    public function getAllDataActivity()
    {
        return $this->db->from('activity')->order_by("role_activity", "asc")->get()->result_array();
    }
}
