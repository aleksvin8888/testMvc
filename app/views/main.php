<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>I test the MVC</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
    <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="/assets/navbar.css" rel="stylesheet">
</head>
<body>


<main>

    <?php include DOCUMENT_ROOT . '/app/views/partials/navbar.php' ?>


    <div class="container">
        <div>
            <div class="bg-light p-5 rounded">
                <div class="col-sm-8 mx-auto">
                    <h3>Add new user</h3>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="inputEmail" class="form-label">Email address</label>
                            <input class="form-control"
                                   name="email"
                                   type="email"
                                   id="inputEmail"
                                   aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="inputFirstName" class="form-label">First name</label>
                            <input class="form-control"
                                   name="first_name"
                                   type="text"
                                   id="inputFirstName">
                        </div>
                        <div class="mb-3">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input class="form-control"
                                   name="address"
                                   type="text"
                                   id="inputAddress">
                        </div>
                        <div class="mb-3">
                            <label for="inputPhone" class="form-label">Phone</label>
                            <input class="form-control"
                                   name="phone"
                                   type="text"
                                   id="inputPhone">
                        </div>
                        <div class="mb-3">
                            <label for="inputComment" class="form-label">Comment</label>
                            <input name="comment"
                                   type="text"
                                   class="form-control"
                                   id="inputComment">
                        </div>
                        <div class="mb-3">
                            <label for="inputDepartment" class="form-label">Select Department</label>
                            <input name="comment"
                                   type="text"
                                   class="form-control"
                                   id="inputDepartment">
                        </div>

                        <div class="mb-3">
                            <label for="inputDepartment" class="form-label">Select Department</label>
                            <select class="form-control"
                                    id="inputDepartment"
                                    name="department_id"
                                    required>
                                <option value="">Select</option>

                                <option value="1"> dep 1</option>
                                <option value="1"> dep 2</option>
                                <option value="1"> dep 3</option>
                                <option value="1"> dep 4</option>
                                <option value="1"> dep 5</option>

                            </select>
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



</main>


<script src="/assets/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>


