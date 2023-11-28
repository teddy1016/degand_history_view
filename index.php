<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Degand History</title>
    <link rel="icon" href="img/logo.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/toastr.min.css" rel="stylesheet">
    <link href="css/sortable.css" rel="stylesheet">
    <style>
        tr:hover {background-color: coral;}
    </style>
</head>
<body class="container">
    <div class="header row mt-5">
        <div class="col-md-6" style="clear: float;">
            <img style="float: left; margin-right: 3rem;" src="img/Degand.png" alt="Degand logo" width="100">
            <span style="float: bottom;"><h2 style="padding-top: 2rem;">MERCATOR HISTORY</h2></span>
        </div>
        <div class="col-md-6">
            <div class="row pb-2">
                Customer Search
            </div>
            <div class="row">
                <input id="customer_name" class="col-md-10" style="padding: 10px;" type="text" placeholder="Enter a customer name.">
                <button id="btn_search" class="col-md-2 btn btn-secondary" style="margin-left: 10px; float: right; width: 4rem; height: auto;">GO</button>
            </div>
        </div>
    </div>
    <div class="content mt-5">
        <div class="row mt-2">
            <h4 class="p-0">Customer Selection</h4>
            <div class="table-wrap mt-2" style="padding: 0px !important;">
                <table id="tblselection" class="sortable table-bordered" style="width: 100%;">
                    <thead>
                    <tr>
                        <th>
                        <span style="visibility: hidden;">Table Header</span>
                        <button>
                            CID
                            <span aria-hidden="true"></span>
                        </button>
                        </th>
                        <th aria-sort="ascending">
                        <button>
                            NAME
                            <span aria-hidden="true"></span>
                        </button>
                        </th>
                        <th>
                        <button>
                            SURNAME
                            <span aria-hidden="true"></span>
                        </button>
                        </th>
                        <th>
                            <button>
                                ADDRESS

                                <span aria-hidden="true"></span>
                            </button>
                        </th>
                        <th class="num">
                        <button>
                            ZIP
                            <span aria-hidden="true"></span>
                        </button>
                        </th>
                        <th>
                        <button>
                            CITY
                            <span aria-hidden="true"></span>
                        </button>
                        </th>
                        <th>
                        <button>
                            COUNTRY
                            <span aria-hidden="true"></span>
                        </button>
                        </th>
                    </tr>
                    </thead>
                    <tbody id="selection_table">
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mt-5">
            <h4 class="p-0">History</h4>
            <div class="table-wrap mt-2" style="padding: 0px !important;">
                <table class="sortable table-bordered" style="width: 100%;">
                    <thead>
                    <tr>
                        <th>
                        <span style="visibility: hidden;">Table Header</span>
                        <button>
                            DATE
                            <span aria-hidden="true"></span>
                        </button>
                        </th>
                        <th aria-sort="ascending">
                        <button>
                            SID
                            <span aria-hidden="true"></span>
                        </button>
                        </th>
                        <th>
                        <button>
                            SUPPLIER
                            <span aria-hidden="true"></span>
                        </button>
                        </th>
                        <th>
                        <button>
                            PRODUCT
                            <span aria-hidden="true"></span>
                        </button>
                        </th>
                        <th class="num">
                        <button>
                            SIZE
                            <span aria-hidden="true"></span>
                        </button>
                        </th>
                        <th>
                        <button>
                            MATERIAL
                            <span aria-hidden="true"></span>
                        </button>
                        </th>
                        <th>
                        <button>
                            COLOR
                            <span aria-hidden="true"></span>
                        </button>
                        </th>
                        <th>
                        <button>
                            CID
                            <span aria-hidden="true"></span>
                        </button>
                        </th>
                        <th>
                        <button>
                            QTY
                            <span aria-hidden="true"></span>
                        </button>
                        </th>
                        <th>
                        <button>
                            UNIT
                            <span aria-hidden="true"></span>
                        </button>
                        </th>
                        <th>
                        <button>
                            %
                            <span aria-hidden="true"></span>
                        </button>
                        </th>
                        <th>
                        <button>
                            TOT
                            <span aria-hidden="true"></span>
                        </button>
                        </th>
                        <th style="width: 10em;">
                        <button>
                            GRAND TO
                            <span aria-hidden="true"></span>
                        </button>
                        </th>
                    </tr>
                    </thead>
                    <tbody id="history_table">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/clipboard.js"></script>
    <script src="js/generate_ir_ids.js"></script>
    <script src="js/generate_cl_ids.js"></script>
    <script src="js/generate_cc_ids.js"></script>
    <script src="js/toastr.min.js"></script>
    <script src="js/sortable.js"></script>
    <script src="js/degand_history.js"></script>
</body>
</html>