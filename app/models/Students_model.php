<?php


// class Students_model
// {
//     private $table = 'students';
//     private $db;

//     public function __construct()
//     {
//         $this->db = new Database;
//     }

//     public function getAllStudents()
//     {

//         //return $this->std;

//         $this->db->query('SELECT * FROM ' . $this->table);
//         return $this->db->resultSet();
//     }

//     public function getStudentById($id)
//     {

//         $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
//         $this->db->bind('id', $id);
//         return $this->db->single();
//     }

//     public function tambahDataStudents($data)
//     {
//         $query = "INSERT INTO students
//                     VALUES
//                     ('', :std_name,:std_id,:std_email,:std_course)";

//         $this->db->query($query);
//         $this->db->bind('std_name', $data['std_name']);
//         $this->db->bind('std_id', $data['std_id']);
//         $this->db->bind('std_email', $data['std_email']);
//         $this->db->bind('std_course', $data['std_course']);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }

//     public function deleteDataStudents($id)
//     {
//         $query = "DELETE FROM students WHERE id = :id";
//         $this->db->query($query);
//         $this->db->bind('id', $id);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }

//     public function updateDataStudents($data)
//     {
//         $query = "UPDATE students SET
//                     std_name =:std_name,
//                     std_id =:std_id,
//                     std_email =:std_email,
//                     std_course =:std_course
//                 WHERE std_id =:id";

//         $this->db->query($query);

//         $this->db->bind('std_name', $data['std_name']);
//         $this->db->bind('std_id', $data['std_id']);
//         $this->db->bind('std_email', $data['std_email']);
//         $this->db->bind('std_course', $data['std_course']);
//         $this->db->bind('id', $data['id']);

//         $this->db->execute();
//         return $this->db->rowCount();
//     }
// }


class Students_model
{
    private $table = 'students';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllStudents()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getStudentById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataStudent($data)
    {
        $query = "INSERT INTO students VALUES ('', :std_name, :std_id, :std_email, :std_course)";
        $this->db->query($query);
        $this->db->bind('std_name', $data['std_name']);
        $this->db->bind('std_id', $data['std_id']);
        $this->db->bind('std_email', $data['std_email']);
        $this->db->bind('std_course', $data['std_course']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataStudent($id)
    {
        $query = "DELETE FROM students WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateDataStudent($data)
    {
        $query = "UPDATE students SET 
                    std_name = :std_name, 
                    std_id = :std_id, 
                    std_email = :std_email, 
                    std_course = :std_course 
                    WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('std_name', $data['std_name']);
        $this->db->bind('std_id', $data['std_id']);
        $this->db->bind('std_email', $data['std_email']);
        $this->db->bind('std_course', $data['std_course']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cariDataStudents()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM students WHERE std_name LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
