<?php

class Students extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Student';
        $data['std'] = $this->model('Students_model')->getAllStudents();
        $this->view('templates/header', $data);
        $this->view('students/index', $data);
        $this->view('templates/footer');
    }

    public function details($id)
    {
        $data['judul'] = 'Detail Student';
        $data['std'] = $this->model('Students_model')->getStudentById($id);
        $this->view(
            'templates/header',
            $data
        );
        $this->view('students/details', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Students_model')->tambahDataStudent($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/students');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/students');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('Students_model')->hapusDataStudent($id) > 0) {
            Flasher::setFlash('Berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/students');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/students');
            exit;
        }
    }

    public function getupdate()
    {
        // echo $_POST['id'];
        echo json_encode($this->model('Students_model')->getStudentById($_POST['id']));
    }

    public function update()
    {
        if ($this->model('Students_model')->updateDataStudent($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/students');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/students');
            exit;
        }
    }

    public function search()
    {
        $data['judul'] = 'Daftar Student';
        $data['std'] = $this->model('Students_model')->cariDataStudents();
        $this->view('templates/header', $data);
        $this->view('students/index', $data);
        $this->view('templates/footer');
    }
}
