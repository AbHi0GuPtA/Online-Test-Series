<!-- Modal For Add Course -->
<div class="modal fade" id="modalForAddCourse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form class="refreshFrm" id="addCourseFrm" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Course</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="col-md-12">
            <div class="form-group">
              <label>Course</label>
              <input type="" name="course_name" id="course_name" class="form-control" placeholder="Input Course" required="" autocomplete="off">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add Now</button>
        </div>
      </div>
    </form>
  </div>
</div>


<!-- Modal For Update Course -->
<div class="modal fade myModal" id="updateCourse-<?php echo $selCourseRow['cou_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <form class="refreshFrm" id="addCourseFrm" method="post">
      <div class="modal-content myModal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update ( <?php echo $selCourseRow['cou_name']; ?> )</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="col-md-12">
            <div class="form-group">
              <label>Course</label>
              <input type="" name="course_name" id="course_name" class="form-control" value="<?php echo $selCourseRow['cou_name']; ?>">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update Now</button>
        </div>
      </div>
    </form>
  </div>
</div>


<!-- Modal For Add Test -->
<div class="modal fade" id="modalForTest" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form class="refreshFrm" id="addTestFrm" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Test</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="col-md-12">
            <div class="form-group">
              <label>Select Course</label>
              <select class="form-control" name="courseSelected">
                <option value="0">Select Course</option>
                <?php
                $selCourse = $dbh->query("SELECT * FROM course_tbl ORDER BY cou_id DESC");
                if ($selCourse->rowCount() > 0) {
                  while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo $selCourseRow['cou_id']; ?>"><?php echo $selCourseRow['cou_name']; ?></option>
                  <?php }
                } else { ?>
                  <option value="0">No Course Found</option>
                <?php }
                ?>
              </select>
            </div>

            <div class="form-group">
              <label>Test Time Limit</label>
              <select class="form-control" name="timeLimit" required="">
                <option value="">Select time</option>
                <option value="1">1 Minutes</option>
                <option value="10">10 Minutes</option>
                <option value="20">20 Minutes</option>
                <option value="30">30 Minutes</option>
                <option value="40">40 Minutes</option>
                <option value="50">50 Minutes</option>
                <option value="60">60 Minutes</option>
              </select>
            </div>

            <div class="form-group">
              <label>Question Limit to Display</label>
              <input type="number" name="examQuestDipLimit" id="" class="form-control" placeholder="Input question limit to display">
            </div>

            <div class="form-group">
              <label>Test Title</label>
              <input type="" name="examTitle" class="form-control" placeholder="Input Test Title" required="">
            </div>

            <div class="form-group">
              <label>Test Description</label>
              <textarea name="examDesc" class="form-control" rows="4" placeholder="Input Test Description" required=""></textarea>
            </div>


          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add Now</button>
        </div>
      </div>
    </form>
  </div>
</div>


<!-- Modal For Add Student -->
<div class="modal fade" id="modalForAddStudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form class="refreshFrm" id="addStudentFrm" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="col-md-12">
            <div class="form-group">
              <label>Fullname</label>
              <input type="" name="fullname" id="fullname" class="form-control" placeholder="Input Fullname" autocomplete="off" required="">
            </div>
            <div class="form-group">
              <label>Birhdate</label>
              <input type="date" name="bdate" id="bdate" class="form-control" placeholder="Input Birhdate" autocomplete="off">
            </div>
            <div class="form-group">
              <label>Gender</label>
              <select class="form-control" name="gender" id="gender">
                <option value="0">Select gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
            </div>
            <div class="form-group">
              <label>Course</label>
              <select class="form-control" name="course" id="course">
                <option value="0">Select course</option>
                <?php
                $selCourse = $dbh->query("SELECT * FROM course_tbl ORDER BY cou_id asc");
                while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                  <option value="<?php echo $selCourseRow['cou_id']; ?>"><?php echo $selCourseRow['cou_name']; ?></option>
                <?php }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label>Year Level</label>
              <select class="form-control" name="year_level" id="year_level">
                <option value="0">Select year level</option>
                <option value="first year">First Year</option>
                <option value="second year">Second Year</option>
                <option value="third year">Third Year</option>
                <option value="fourth year">Fourth Year</option>
              </select>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Input Email" autocomplete="off" required="">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Input Password" autocomplete="off" required="">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add Now</button>
        </div>
      </div>
    </form>
  </div>
</div>



<!-- Modal For Add Question -->
<div class="modal fade" id="modalForAddQuestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <form class="refreshFrm" id="addQuestionFrm" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Question for <b><?php echo $selTestRow['test_title']; ?></b></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="refreshFrm" method="post" id="addQuestionFrm">
          <div class="modal-body row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Question</label>
                <input type="hidden" name="examId" value="<?php echo $exId; ?>">
                <input type="" name="question" id="course_name" class="form-control" placeholder="Input question" autocomplete="off">
              </div>



              <div class="form-group">
                <label>Correct Answer</label>
                <input type="" name="correctAnswer" id="" class="form-control" placeholder="Input correct answer" autocomplete="off">
              </div>
              <div class="form-group">
                <label>Explain Answer</label>
                <textarea name="explainAnswer" id="" class="form-control" placeholder="Input Answer Explaination" rows="3" autocomplete="off"></textarea>
              </div>
            </div>
            <div class="col-md-6">
              <fieldset>
                <legend>Input Options For Your Question</legend>
                <div class="form-group">
                  <label>Option A</label>
                  <input type="" name="choice_A" id="choice_A" class="form-control" placeholder="Input option A" autocomplete="off">
                </div>

                <div class="form-group">
                  <label>Option B</label>
                  <input type="" name="choice_B" id="choice_B" class="form-control" placeholder="Input option B" autocomplete="off">
                </div>

                <div class="form-group">
                  <label>Option C</label>
                  <input type="" name="choice_C" id="choice_C" class="form-control" placeholder="Input option C" autocomplete="off">
                </div>

                <div class="form-group">
                  <label>Option D</label>
                  <input type="" name="choice_D" id="choice_D" class="form-control" placeholder="Input option D" autocomplete="off">
                </div>
              </fieldset>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add Now</button>
          </div>
        </form>
      </div>
    </form>
  </div>
</div>