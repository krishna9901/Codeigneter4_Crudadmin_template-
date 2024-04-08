<!-- pdf_view.php -->
<?= $this->include('layouts/header.php'); ?>

<body class="brd-color">
        
    <div class="usr-align" >
        <label class="label-cls"> Logged User:</label>
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">
            <?php 
            $session = session();
            if ($session->has('name')) {
                echo "" . $session->get('name');
            } else {
                echo "No Name"; // or any default message you prefer if the name is not set in the session
            }
            ?>
        </span>
    </div>
    
    <div class="container">
        <h2 class="tbl-header"> Users Data</h2>
        <table class="table  table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($table_data as $row): ?>
                    <tr>
                        <td class="text-center"><?= $row['id'] ?></td>
                        <td class="text-center"><?= $row['name'] ?></td>
                        <td class="text-center"><?= $row['email'] ?></td>
                        <td class="text-center"><?= $row['gender'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <!-- <div class="footer text-right">
 
    </div> -->
 

</body>
<style>
    
.footer {
    position: fixed;
    bottom: 0;
    right: 0;
    width: 100%;
    text-align: right;
    font-size: 14px;
    color: #333;
}
.tbl-header{
    color:#4e73df;
}

.usr-align{
    float:right;
}
.usr-align,span{
  
   color:#36b9cc;
}

.usr-align .label-cls{
    color:black;
    
}

.brd-color
{
  border-radius:8px;
    border:2px solid  #05ffb0;  
    padding:16px;
    margin-bottom:4px;
}
                </style>
</html>


