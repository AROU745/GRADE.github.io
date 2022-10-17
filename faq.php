<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="faq/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="faq/css/animated-textbox2-1.css">
    <link rel="stylesheet" href="faq/css/animated-textbox2.css">
    <link rel="stylesheet" href="faq/css/animated-textbox3-1.css">
    <link rel="stylesheet" href="faq/css/animated-textbox3.css">
    <link rel="stylesheet" href="faq/css/Dynamically-Queue-Videos.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="faq/css/Image-Hover-Effect.css">
    <link rel="stylesheet" href="faq/css/NZTextarea.css">
    <link rel="stylesheet" href="faq/css/styles.css">
    <link rel="stylesheet" href="faq/css/textarea.css">
    <link rel="stylesheet" href="faq/css/Video-Responsive-YouTube.css">
    <link rel="stylesheet" href="faq/css/Videos-in-rows-2-and-3-videos-per-row.css">
</head>

<body>
    <?php include("header.php"); ?>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th class="w-50"></th>
                    <th class="w-50">
                        <div class="dropdown" id="select-model"><button class="btn btn-primary dropdown-toggle d-block w-100" aria-expanded="false" data-bs-toggle="dropdown" type="button">Model (Select one)</button>
                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Model A</a><a class="dropdown-item" href="#">Model B</a><a class="dropdown-item" href="#">Model</a></div>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="list-group"><a class="list-group-item list-group-item-action flex-column align-items-start" href="#">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Heading <span>
                                            <input class="swing" id="artist" type="text" placeholder="BO$$" /><label for="artist">Artist</label>
                                        </span></h5><small><?php echo date('d/m/Y H:i:s', time()); ?></small>
                                </div>
                                <p class="mb-1"><textarea style="width: 100%;"></textarea><button class="btn btn-primary" type="button">Button<i class="fa fa-star"></i></button>Paragraph</p><small class="text-muted">Text</small>
                            </a></div>
                        <p id="recyclable"></p>
                    </td>
                </tr>


        </table>
    </div>
    <form>
        <div class="field"></div>
    </form>
    <?php include("footer.php"); ?>
    <script src="faq/js/Dynamically-Queue-Videos.js"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="faq/js/Sample---How-to-change-text-based-on-dropdown.js"></script>
</body>

</html>