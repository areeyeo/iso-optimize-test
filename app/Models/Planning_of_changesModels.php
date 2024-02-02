<?php

namespace App\Models;

use CodeIgniter\Model;

class Planning_of_changesModels extends Model
{
    protected $table = 'planning_changes_table';

    protected $primaryKey = 'id_planning_changes ';

    protected $allowedFields = ['id_file', 'date_upload', 'id_version'];

    public function copyDataById($id)
    {
        $query = $this->getWhere(['id_planning_changes' => $id]);
        $row = $query->getRow();

        if ($row) {
            $data = $row;
            unset($data->id_planning_changes);
            $this->insert($data);
            return $this->insertID();
        }
        return null;
    }


}
