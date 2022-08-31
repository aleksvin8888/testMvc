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


    <div class="container ">
        <div class="card mb-4 col-12 strpied-tabled-with-hover rounded-0">
            <div class="card-body table-full-width table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr class="admin-tr-red">
                        <th>#</th>
                        <th>##</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Id</td>
                        <td><?php echo $user[0]['id'] ?></td>
                    </tr>
                    <tr>
                        <td>Nmae</td>
                        <td><?php echo $user[0]['first_name'] ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo $user[0]['email'] ?></td>
                    </tr>
                    <tr>
                        <td>Department</td>
                        <td>
                            <a href="#" ><?php echo $user[0]['title'] ?></a>

                        </td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><?php echo $user[0]['address'] ?></td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td><?php echo $user[0]['phone'] ?></td>
                    </tr>
                    <tr>
                        <td>Comment</td>
                        <td><?php echo $user[0]['comment'] ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>



</main>


<script src="/assets/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>



