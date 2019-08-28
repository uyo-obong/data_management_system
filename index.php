<?php
session_start();

if ($_SESSION == null) {
    header("Location: /FPUCOM/src/login.php");
}
include "src/header.php";
require_once "inc/controller/session.php";
require_once "inc/controller/handle_index_core.php";

?>


<div class="main main-raised">
    <div class="section section-basic">
        <div class="container">
            <div class="float-right"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ModalCreateStudent">
                    Add New Student
                </button></div>

            <div class="space-50"></div>
            <div class="space-50"></div>


            <?php
            if (array_key_exists('message', $_SESSION) && !empty($_SESSION['message']))
                echo "<div class='alert alert-success'>" . $_SESSION["message"] . "</div>";

            $session->TimeOut();
            ?>

            <div class="table-responsive">
                <table id="example" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Reg Number</th>
                            <th>Project Topic</th>
                            <th>Seminar Topic</th>
                            <th>Year</th>
                            <th>Update</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        while ($row = $result->fetch_assoc()) {

                            $fullName = $view->fullName($row);
                            ?>
                        <tr>
                            <td><?php echo $fullName ?></td>
                            <td><?php echo $row["reg_number"] ?></td>
                            <td><?php echo $row["project_topic"] ?></td>
                            <td><?php echo $row["seminar_topic"] ?></td>
                            <td><?php echo $row["defence_year"] ?></td>

                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalUpdateStudent<?php echo $row['id'] ?>">Update</button></td>
                        </tr>

                        <?php
                            include "src/update_student_project.php";
                        }
                        ?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Reg Number</th>
                            <th>Project Topic</th>
                            <th>Seminar Topic</th>
                            <th>Year</th>
                            <th>Update</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
</div>


<script>
    $(document).ready( = () => {
        prevent.default()
    })
</script>
<?php
include "src/footer.php"; ?>