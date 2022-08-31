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
        <div class="row y-5">

            <div class="m-2">
                <a class="btn btn-primary btn-sm" href="#" title="Create">
                    Create new department <i class="fa-solid fa-plus"></i>
                </a>

            </div>

            <table class="table table-success table-striped">
                <thead>
                <tr>
                    <th>##</th>
                    <th>Title</th>
                    <th>Settings</th>
                </tr>
                </thead>
                <tbody>
               <?php foreach($departments as $department)
               { ?>

                   <tr>
                       <td><?php echo  $department['id']  ?></td>
                       <td>
                           <a class="text-decoration-none "
                              href="#">
                               <?php echo  $department['title']  ?>
                           </a>
                       </td>
                       <td>
                           <a class="btn btn-outline-danger btn-sm" href="#">
                               delete
                           </a>
                       </td>
                   </tr>

              <?php }?>

                </tbody>
            </table>
        </div>
    </div>



</main>

<script src="/assets/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>




