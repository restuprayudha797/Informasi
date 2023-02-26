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
        $this->session->set_flashdata('admin_message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>
        Activity data added successfully
        </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('admin/activity');
    }
    public function getAllDataActivity()
    {
        return $this->db->from('activity')->order_by("role_activity", "asc")->get()->result_array();
    }

    public function deleteActivityAction($id)
    {


        $this->db->where('id_activity', $id)->delete('activity');
        $this->session->set_flashdata('admin_message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>
        Activity data has been successfully deleted</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');

        redirect('admin/activity');
    }
}
