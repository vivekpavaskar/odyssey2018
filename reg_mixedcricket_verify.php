<?php
include 'connection.php';
if ($conn) {

    $sql = "SELECT max(part_id) FROM mixedcricket";
    $retval = mysqli_query($conn, $sql);
    if (!$retval) {
        die('could not get data:' . mysqli_error());
    }

    while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
        $id = $row['max(part_id)'];
        $id = $id + 1;

    }
    if ($id == 65) {
        echo "Sorry for inconvinence, Registration for Mix_Cricket has been closed";
    } else {
        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>MIxed Cricket Registration</title>
            <link rel="stylesheet" href="css/bootstrap_reg.css">
            <link rel="stylesheet" href="css/mystyle.css">
        </head>
        <body>
        <a href="http://jainbgm.in/odyssey18"><button class="btn btn-primary" style="top: 10px;left: 50px;position: absolute;height: 50px;width: 100px;"><b>Home</b></button></a>
        <br><br>
        <div class="container">
            <div class="row">
                <h1>Mixed Cricket Registration</h1>
            </div>
            <div class="row" align="center">
                <h4 style="color: red; margin: 0 auto" >Remaining Registration: <?php echo 65-$id ?></h4>
            </div>
            <form action="reg_mixedcricket.php" method="post">
                <div class="row">
                    <div class="zoom">
                        <label>Name</label>
                        <input name="name" type="text" class="form-control" placeholder="Enter Full Name" required>
                    </div>
                </div>

                <div class="row">
                    <div class="zoom">
                        <label>Email address</label>
                        <input name="email" type="email" class="form-control" placeholder="Enter email" required>
                    </div>
                </div>

                <div class="row">
                    <div class="zoom">
                        <label>Contact No.</label>
                        <input name="mobile" type="text" maxlength="10" class="form-control" pattern="[0-9]+"
                               placeholder="Enter your Contact No." required>
                    </div>
                </div>

                <div class="row">
                    <div class="zoom">
                        <label>Team Members</label>
                        <textarea name="teammembers" class="form-control" cols="30" rows="10"
                                  placeholder="Enter names seperated by commas." required></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="zoom">
                        <label>College Name</label>
                        <input name="college" type="text" class="form-control"
                               placeholder="Enter College name with city"
                               required>
                    </div>
                </div>
                <center>
                    <button class="btn btn-primary" style="margin-bottom: 100px;margin-top:25px;width: 25%">
                        <b>SUBMIT</b>
                    </button>
                </center>
            </form>
        </div>
        </div>
        </body>
        </html>


        <?php
    }
}

?>

