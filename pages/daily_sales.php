<!--Import Header-->
<?php include ('../includes/header.php'); ?>

<!--Main Content-->
<main>
    <div class="side-container">
        <!--Import Side Bar-->
        <?php include ('../includes/side-bar.php'); ?>
    </div>

    <div class="content">
        <div class="content-container">
            <div class="form-cont">
                <div class="form-title">
                    <h3>DAILY SALES</h3>
                    <div class="button">
                        <button>Scan</button>
                        <button>Reset</button>
                    </div>
                </div>
                <div class="form">
                    <form action="" method="post" autocomplete="off">
                        <div class="inputs">
                            <label for="qty">Quantity</label>
                            <input type="text" name="qty" id="qty">
                        </div>
                        <div class="inputs">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" list="options">
                            <datalist id="options">
                                <option value="Select">
                            </datalist>
                        </div>
                        <div class="inputs">
                            <label for="net_price">Net Price</label>
                            <input type="text" name="net_price" id="net_price">
                        </div>
                        <div class="inputs">
                            <label for="price">Price</label>
                            <input type="text" name="price" id="price">
                        </div>
                        <div class="inputs">
                            <br>
                            <input type="submit" name="add_item" value="Enter">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Datatables-->
        <div class="search-table">
            <table id="myTable" class="display table table-striped">
                <thead>
                    <tr>
                        <th>Title 1</th>
                        <th>Title 2</th>
                        <th>Title 3</th>
                        <th>Title 4</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Value 1</td>
                        <td>Value 2</td>
                        <td>Value 3</td>
                        <td>Value 4</td>
                    </tr>
                    <tr>
                        <td>Value 4</td>
                        <td>Value 5</td>
                        <td>Value 6</td>
                        <td>Value 7</td>
                    </tr>
                    <tr>
                        <td>Value 7</td>
                        <td>Value 8</td>
                        <td>Value 9</td>
                        <td>Value 10</td>
                    </tr>
                    <tr>
                        <td>Value 1</td>
                        <td>Value 2</td>
                        <td>Value 3</td>
                        <td>Value 4</td>
                    </tr>
                    <tr>
                        <td>Value 4</td>
                        <td>Value 5</td>
                        <td>Value 6</td>
                        <td>Value 7</td>
                    </tr>
                    <tr>
                        <td>Value 7</td>
                        <td>Value 8</td>
                        <td>Value 9</td>
                        <td>Value 10</td>
                    </tr>
                    <tr>
                        <td>Value 1</td>
                        <td>Value 2</td>
                        <td>Value 3</td>
                        <td>Value 4</td>
                    </tr>
                    <tr>
                        <td>Value 4</td>
                        <td>Value 5</td>
                        <td>Value 6</td>
                        <td>Value 7</td>
                    </tr>
                    <tr>
                        <td>Value 7</td>
                        <td>Value 8</td>
                        <td>Value 9</td>
                        <td>Value 10</td>
                    </tr>
                    <tr>
                        <td>Value 1</td>
                        <td>Value 2</td>
                        <td>Value 3</td>
                        <td>Value 4</td>
                    </tr>
                    <tr>
                        <td>Value 4</td>
                        <td>Value 5</td>
                        <td>Value 6</td>
                        <td>Value 7</td>
                    </tr>
                    <tr>
                        <td>Value 7</td>
                        <td>Value 8</td>
                        <td>Value 9</td>
                        <td>Value 10</td>
                    </tr>
                    <tr>
                        <td>Value 1</td>
                        <td>Value 2</td>
                        <td>Value 3</td>
                        <td>Value 4</td>
                    </tr>
                    <tr>
                        <td>Value 4</td>
                        <td>Value 5</td>
                        <td>Value 6</td>
                        <td>Value 7</td>
                    </tr>
                    <tr>
                        <td>Value 7</td>
                        <td>Value 8</td>
                        <td>Value 9</td>
                        <td>Value 10</td>
                    </tr>
                    <tr>
                        <td>Value 1</td>
                        <td>Value 2</td>
                        <td>Value 3</td>
                        <td>Value 4</td>
                    </tr>
                    <tr>
                        <td>Value 4</td>
                        <td>Value 5</td>
                        <td>Value 6</td>
                        <td>Value 7</td>
                    </tr>
                    <tr>
                        <td>Value 7</td>
                        <td>Value 8</td>
                        <td>Value 9</td>
                        <td>Value 10</td>
                    </tr>
                    <tr>
                        <td>Value 1</td>
                        <td>Value 2</td>
                        <td>Value 3</td>
                        <td>Value 4</td>
                    </tr>
                    <tr>
                        <td>Value 4</td>
                        <td>Value 5</td>
                        <td>Value 6</td>
                        <td>Value 7</td>
                    </tr>
                    <tr>
                        <td>Value 7</td>
                        <td>Value 8</td>
                        <td>Value 9</td>
                        <td>Value 10</td>
                    </tr>
                    <tr>
                        <td>Value 1</td>
                        <td>Value 2</td>
                        <td>Value 3</td>
                        <td>Value 4</td>
                    </tr>
                    <tr>
                        <td>Value 4</td>
                        <td>Value 5</td>
                        <td>Value 6</td>
                        <td>Value 7</td>
                    </tr>
                    <tr>
                        <td>Value 7</td>
                        <td>Value 8</td>
                        <td>Value 9</td>
                        <td>Value 10</td>
                    </tr>
                    <tr>
                        <td>Value 1</td>
                        <td>Value 2</td>
                        <td>Value 3</td>
                        <td>Value 4</td>
                    </tr>
                    <tr>
                        <td>Value 4</td>
                        <td>Value 5</td>
                        <td>Value 6</td>
                        <td>Value 7</td>
                    </tr>
                    <tr>
                        <td>Value 7</td>
                        <td>Value 8</td>
                        <td>Value 9</td>
                        <td>Value 10</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

<!--Import Footer-->
<?php include ('../includes/footer.php'); ?>