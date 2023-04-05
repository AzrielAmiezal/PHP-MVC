<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary buttonTambahData" data-toggle="modal" data-target="#formModal">
                Tambah Data Students
            </button>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/students/search" method="POST">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Student" name="keyword" id="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="searchButton">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-7">
            <h3>Daftar Students</h3>
            <ul class="list-group">
                <?php foreach ($data['std'] as $std) : ?>
                    <li class="list-group-item">
                        <?= $std['std_name']; ?>
                        <a href="<?= BASEURL; ?>/students/delete/<?= $std['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Are you sure?');">delete</a>
                        <a href="<?= BASEURL; ?>/students/update/<?= $std['id']; ?>" class="badge badge-success float-right ml-1 showModalEdit" data-toggle="modal" data-target="#formModal" data-id="<?= $std['id']; ?>">edit</a>
                        <a href="<?= BASEURL; ?>/students/details/<?= $std['id']; ?>" class="badge badge-primary float-right ml-1">details</a>
                    </li>
                <?php endforeach;  ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/students/action/tambah" method="POST">
                    <input type="hidden" class="form-control" id="id" name="id">
                    <div class="form-group">
                        <label for="std_name">Nama</label>
                        <input type="text" class="form-control" id="std_name" name="std_name">
                    </div>

                    <div class="form-group">
                        <label for="std_id">ID No</label>
                        <input type="text" class="form-control" id="std_id" name="std_id">
                    </div>

                    <div class="form-group">
                        <label for="std_email">Email</label>
                        <input type="email" class="form-control" id="std_email" name="std_email">
                    </div>

                    <div class="form-group">
                        <label for="std_course">Course</label>
                        <select class="form-control" id="std_course" name="std_course">
                            <option value="">Select Course</option>
                            <option value="Computer Application Development (CT204)">Computer Application Development (CT204)</option>
                            <option value="Computer Network Security (CT205)">Computer Network Security (CT205)</option>
                            <option value="Cyber Security (CT206)">Cyber Security (CT206)</option>
                            <option value="Business Computing (CT203)">Business Computing (CT203)</option>
                            <option value="Finance Accounting (AA202)">Finance Accounting (AA202)</option>
                            <option value="Teaching English as Second Language - TESL (AB101)">Teaching English as Second Language - TESL (AB101)</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>