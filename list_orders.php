<h3 class="text-center text-success">All Orders</h3>
<table class="table table-bordered mt-5 text-center">
    <thead>

    <?php
    $get_orders="Select * from `user_orders`";
    $result=mysqli_query($con,$get_orders);
    $row_count=mysqli_num_rows($result);
    

    if($row_count==0){
        echo "<h2 class='text-danger text-center mt-5'>No Orders yet</h2>";
    }else{
        echo "<tr>
            <th class='bg-info'>SI NO</th>
            <th class='bg-info'>Amount Due</th>
            <th class='bg-info'>Invoice Number</th>
            <th class='bg-info'>Total Products</th>
            <th class='bg-info'>Order Date</th>
            <th class='bg-info'>Status</th>
            <th class='bg-info'>Delete</th>
        </tr>
    </thead>
    <tbody class='text-center'>";
        $number=0;
        while($row_data=mysqli_fetch_assoc($result)){
            $order_id=$row_data['order_id'];
            $user_id=$row_data['user_id'];
            $amount_due=$row_data['amount_due'];
            $invoice_number=$row_data['invoice_number'];
            $total_products=$row_data['total_products'];
            $order_date=$row_data['order_date'];
            $order_status=$row_data['order_status'];
            $number++;
            echo "<tr>
            <td class='bg-secondary text-light'>$number</td>
            <td class='bg-secondary text-light'>$amount_due</td>
            <td class='bg-secondary text-light'>$invoice_number</td>
            <td class='bg-secondary text-light'>$total_products</td>
            <td class='bg-secondary text-light'>$order_date</td>
            <td class='bg-secondary text-light'>$order_status</td>
            <td class='bg-secondary'><a href='' class='text-light'>
            <i class='fa-solid fa-trash'></i></a></td>
        </tr>";
        }
    }

    ?>

        
        
    </tbody>
</table>