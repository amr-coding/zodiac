<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/favicon_io/favicon.ico" type="image/x-icon">
    <!--animate.css-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>ZODIAC</title>
</head>
<style>
    .refresh {
        background: none;
        color: inherit;
        border: none;
        padding: 0;
        font: inherit;
        cursor: pointer;
        outline: inherit;
        font-weight: 400;
    }

    .addNew {
        font-weight: 700;
    }

</style>

<body>



    <div class="" id="app">
        <div class="">
            <nav class="navbar navbar-expand-lg navbar-dark shadow bg-dark">
                <div class="container">
                    <img src="assets/favicon_io/favicon-32x32.png" class="me-3" alt="">
                    <a class="navbar-brand" href="index.php">ZODIAC</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://github.com/amr-coding">Github</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="mailto:amrcodes@gmail.com">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container">
            <div class="row mt-3">
                <div class="col-lg-6 d-flex justify-content-start">
                    <h3 class='text-info '>Registerd User</h3>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                    <button class="btn btn-info btn-md m-2 addNew float-right animate__animated animate__backInLeft" @click="show=true">
                        <i class="fas fa-user"></i>&nbsp;&nbsp;Add New User
                    </button>

                    <form action="index.php" method="POST">
                        <button class="btn btn-warning btn-lg m-2 float-right animate__animated animate__backInRight">
                            &nbsp;&nbsp;<i class="fas fa-sync"></i>
                            <input type="submit" class="refresh" value='Refresh List' name="getDB">
                        </button>

                        <!--                            drop   down-->
                        <div class="m-2 w3-dropdown-hover">
                            <i class="btn btn-success "><i class="fas fa-filter"></i> Filter</i>
                            <div class="w3-dropdown-content  w3-animate-zoom w3-bar-block w3-border">
                                <button class="btn btn-light  m-2 float-right ">
                                    &nbsp;&nbsp;<i class="fas fa-sort-amount-down"></i>
                                    <input type="submit" class="refresh" value='Sort By $' name="sortDesc">
                                </button>
                                <button class="btn btn-light m-2 float-right">
                                    &nbsp;&nbsp;<i class="fas fa-sort-amount-down"></i>
                                    <input type="submit" class="refresh" value='Sort By ID' name="sortID">
                                </button>

                            </div>
                        </div>
                    </form>

                    <button class="btn btn-danger btn-lg m-2 float-right animate__animated animate__backInRight " @click="deleteAllOver=true"> Delete All List
                        &nbsp;&nbsp;<i class="fas fa-trash"></i>
                        <!--                            <input   class="refresh" value='Deletes All' @click="deleteAllOver=true" name="deletePop">-->
                    </button>
                </div>
            </div>

            <hr class="bg-info">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr class="text-center bg-info text-light">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Salary</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <?php
                            require_once("sort_data.php");
                            ?>
                        </tbody>
                    </table>
                    <div class="d-flex m-4 justify-content-end">
                        <a href="#" class="btn btn-primary ">Top</a>
                    </div>

                </div>
            </div>
            <div class="d-flex m-2 justify-content-center">
                <h5>Made with ❤ by Amr!</h5>
            </div>
        </div>
        <!--        delete all data-->
        <?php require_once("delete_all_data.php");?>

        <!--        insert popup-->
        <div class="animate__animated animate__fadeIn" id="overlay" v-if="show">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Add New User
                        </h5>
                        <button type="button" class="btn-close" @click="show=false">
                            <span aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="modal-body p-4">
                        <form action=" " method="POST">
                            <?php
                            require_once("insert_data.php");
                            ?>
                            <div class="form-group mt-2">
                                <input type="text" name="fname" required class="form-control form-control-lg" placeholder="Name">
                            </div>
                            <div class="form-group mt-2">
                                <input type="email" name="uemail" required class="form-control form-control-lg" placeholder="E-mail">
                            </div>
                            <div class="form-group mt-2">
                                <input type="number" name="usalary" required class="form-control form-control-lg" placeholder="Salary">
                            </div>
                            <div class="form-group mt-2">
                                <input type="submit" name="insert" class="btn btn-success" value="Add New User">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--        edit section popup-->
        <div class="animate__animated animate__fadeIn" id="overlay" v-if="edit">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Edit User
                        </h5>
                        <button type="button" class="btn-close" @click="edit=false">
                            <span aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="modal-body p-4">
                        <?php
                        require_once("update_data.php");
                        ?>
                        <form action="" method="post">
                            <div class="form-group mt-2">
                                <input type="number" name="updateId" required class="form-control form-control-lg" placeholder="User ID">
                            </div>
                            <div class="form-group mt-2">
                                <input type="text" name="updateName" required class="form-control form-control-lg" placeholder="Name">
                            </div>
                            <div class="form-group mt-2">
                                <input type="email" name="updateEmail" required class="form-control form-control-lg" placeholder="E-mail">
                            </div>
                            <div class="form-group mt-2">
                                <input type="number" name="Salary" class="form-control form-control-lg" placeholder="Salary">
                            </div>
                            <div class="form-group mt-2 d-grid gap-2">
                                <input type="submit" name="updateBtn" @click="successsMsg=true" class="btn btn-info btn-block btn-xl" value="Add New User">
                                <div class="form-group mt-2">
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--        delete section popup-->
        <div class="animate__animated animate__fadeIn" id="overlay" v-if="trash">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Delete User
                        </h5>
                        <button type="button" class="btn-close" @click="trash=false">
                            <span aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="modal-body p-4">
                        <form action="index.php" method="POST">
                            <?php
                            require_once("delete_data.php");
                            ?>
                            <p>Deleting user will cause permanently remove user.</p>
                            <input type="number" required name="uid" class="form-control form-control-lg" placeholder="User ID">
                            <hr class="bg-info">
                            <div class="d-flex justify-content-center">
                                <input type="submit" name="udelete" class="btn btn-danger me-2" value="Delete User">

                                <button class="btn btn-success ms-2" @click="trash=false">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="animate__animated animate__fadeIn" id="overlay" v-if="deleteAllOver">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Delete User
                        </h5>
                        <button type="button" class="btn-close" @click="deleteAllOver=false">
                            <span aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="modal-body p-4">
                        <form action="index.php" method="POST">
                            <p>Deleting user will cause permanently remove user.</p>
                            <hr class="bg-info">
                            <div class="d-flex justify-content-center">
                                <input type="submit" name="deleteAll" class="btn btn-danger me-2" value="Delete User">

                                <button class="btn btn-success ms-2" @click="deleteAllOver=false">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <script>
            var app = new Vue({
                el: '#app',
                data: {
                    errorMsg: false,
                    successsMsg: false,
                    show: false,
                    awesome: false,
                    edit: false,
                    trash: false,
                    deleteAllOver: false,
                },
            });

        </script>
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="popper.min.js"></script>


</body>

</html>
