<div id="ModalUpdateStudent<?php echo $row['id'] ?>" class="modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title">Update Student Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <!-- form start -->
                <form action="inc/controller/handle_form_request.php" method="post">

                    <div class="row">

                        <input type="hidden" name="student_id" value="<?php echo  $row['id'] ?>">

                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" type="text" name="last_name" value="<?php echo  $row['last_name'] ?>" placeholder="Last Name" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" type="text" name="first_name" value="<?php echo  $row['first_name'] ?>" placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" type="text" name="middle_name" value="<?php echo  $row['middle_name'] ?>" placeholder="Middle Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="text" name="reg_number" value="<?php echo  $row['reg_number'] ?>" placeholder="Reg Number" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="text" name="defence_year" value="<?php echo  $row['defence_year'] ?>" placeholder="Defence Year" require>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" name="seminar_topic" placeholder="Seminar Topic..."><?php echo  $row['seminar_topic'] ?></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" name="project_topic" placeholder="Project Topic..." require><?php echo  $row['project_topic'] ?></textarea>
                            </div>
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="update" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
                <!-- form end -->
            </div>
        </div>
    </div>
</div>