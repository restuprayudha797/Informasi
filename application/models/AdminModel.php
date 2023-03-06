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

  public function editActivity($id)
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

    $this->db->where('id_activity', $id);
    $this->db->update('activity', $data);

    $this->session->set_flashdata('admin_message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>
    Activity data has been successfully updated
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
  public function cancelActivity($id)
  {

    $data = array(
      'role_activity' => 1
    );

    $this->db->where('id_activity', $id)->update('activity', $data);
    $this->session->set_flashdata('admin_message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>
    Schedule successfully cancelled
</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');

    redirect('admin/activity');
  }

  public function getAllDataCancelActivity()
  {

    return $this->db->get_where('activity', ['role_activity' => 1])->result_array();
  }

  public function getAllcarriedOutActivities()
  {

    return $this->db->get_where('activity', ['role_activity' => 2])->result_array();
  }
  public function getAllUsers()
  {
    return $this->db->get('users')->result_array();
  }

  public function insertUser()
  {
    $name = $this->input->post('name', true);
    $email = $this->input->post('email', true);
    $password =  password_hash($this->input->post('password', true), PASSWORD_DEFAULT);


    $data = [

      'name' => $name,
      'email' => $email,
      'password' => $password,



    ];

    $this->db->insert('users', $data);
    $this->session->set_flashdata('admin_message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>
        User data added successfully
        </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
    redirect('admin/users');
  }







  public function deleteUserAction($id)
  {


    $this->db->where('id_users', $id)->delete('users');
    $this->session->set_flashdata('admin_message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>
        User data has been successfully deleted</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');

    redirect('admin/users');
  }
}
